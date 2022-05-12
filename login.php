<?php

$dbHost = "localhost";
$dbName = "Users";
$dbUser = "root";
$dbPass = "password";

try {
$db = new PDO("mysql:host ={$dbHost}; dbname = {$dbName}", $dbUser, $dbPass);
$db -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "데이터베이스 연결 성공!!<br/>";

} catch(PDOException $e){
    echo $e -> getMessage();
}



?>
