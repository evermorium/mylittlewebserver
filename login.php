<?php

$dbHost = "localhost";
$dbName = "Users";
$dbUser = "user";
$dbPass = "password";

try {
$db = new PDO("mysql:host ={$dbHost}; dbname = {$dbName}", $dbUser, $dbPass);
$db -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "데이터베이스 연결 성공!!<br/>";

$keyword = "%테스트%";
$no = 1;

$query = "SELECT * from Users ";
$stmt = $db -> prepare($query);
$stmt -> execute(array($keyword, $no));
$result = $stmt->fetchALL(PDO::FETCH_NUM);

for($i = 0; $i < count($result); $i++)
{
    printf("%s : %s <br />", $result[$i][0], $result[$i][1]);
}

} catch(PDOException $e){
    echo $e -> getMessage();
}



?>
