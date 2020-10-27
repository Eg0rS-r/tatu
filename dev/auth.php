<?php
require_once './database/db.php';
$login = trim($_POST['logininput']);
$pwd = trim($_POST['pwdinput']);
if (!empty($login) && !empty($pwd)){
    $sql = 'SELECT login,pas FROM pas_kurs WHERE login = :login';
    $params = [':login' =>$login];
    $stmt = $pdo->prepare($sql);
    $stmt -> execute($params);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    if($user){
        if(password_verify($pwd,$user->pas)){
            $_SESSION['user_login']=$user->login;
            header('Location:menu.php');
        }else{
            echo('neverno parol');
        }
    }else{
        echo('neverno login');
    }
}else{
    echo('Please, leave no empty space, fill it ALL!');
}