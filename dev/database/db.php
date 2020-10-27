<?php
$driver = 'mysql';
$host = 'localhost';
$port = '3370';
$db_name = 'citytat';
$db_user = 'root';
$db_pass = 'root';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
    $pdo = new PDO("$driver:host=$host;port=$port;dbname=$db_name;charset=$charset",$db_user,$db_pass,$options);
    $key = rand(1000,9999);
    setcookie('page',$key,time()+1);
    session_start();
}catch(PDOException $e){
    die("no connection with base");
}
/*$sql = 'SELECT login,password FROM users WHERE login = :login';
$result = $pdo->query('SELECT * FROM pas_kurs');
$rows = $result->fetchall(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($rows);*/ 