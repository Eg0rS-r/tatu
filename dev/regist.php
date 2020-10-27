<?php
require_once './database/db.php';

$login = trim($_POST['logininput']);
$pwd = trim($_POST['pwdinput']);
$fio = trim($_POST['fioinput']);
$fiolist = explode(" ", $fio);
$family = $fiolist[0];
$imya = $fiolist[1];
$otch = $fiolist[2];
$idkur=0;
if (!empty($login) && !empty($pwd) && !empty($fio)){
    $sql_chk = 'SELECT EXISTS(SELECT login FROM pas_kurs WHERE login = :login)';
    $stmt_check = $pdo->prepare($sql_chk);
    $stmt_check->execute([':login'=>$login]);
    if ($stmt_check->fetchColumn()){
        die('takie ludi zdes imeutsya');
    }
    $sql_chk = 'SELECT EXISTS(SELECT Фамилия,Имя,Отчество FROM kursanti WHERE Фамилия = :family AND Имя = :imya AND Отчество = :otch)';
    $stmt_check = $pdo->prepare($sql_chk);
    $stmt_check->execute([':family'=>$family, ':imya'=>$imya, ':otch'=>$otch]);
    
    if ($stmt_check->fetchColumn()){

        $sth = $pdo->prepare("SELECT ИдентификаторКурсанты FROM kursanti WHERE Фамилия = :family AND Имя = :imya AND Отчество = :otch");
        $sth->execute([':family'=>$family, ':imya'=>$imya, ':otch'=>$otch]);
        $idkur = $sth->fetch(PDO::FETCH_COLUMN);

        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO pas_kurs(ИдентификаторКурсанты,login,pas) VALUES(:idkur,:login,:pwd)';
        $params = [':idkur'=>$idkur, ':login' =>$login, ':pwd' => $pwd];
        $stmt = $pdo->prepare($sql);
        $stmt -> execute($params);
        echo 'yoU Do gOod! bravo!';
    }else{
        echo "vas net v spiskah colledga";
    }
}else{
    echo 'Please, leave no empty space, fill it ALL!';
}