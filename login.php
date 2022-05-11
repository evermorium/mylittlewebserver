<?php


$ID = $_POST['username'];
$PW = $_POST['password'];
$corID = "temp";
$corPW = "temp";

$servername = "localhost";
$user = "root";
$password = "password";
$db = "Users"
$conn = mysqli_connect($servername,$user,$password,$db);

if(mysqli_connect_errno($conn)){
	echo mysqli_connect_error();
}else {
	echo "데이터 연동";
}

if($ID == $corID && $PW == $corPW)
{
    require("secu999.php");
}else require("secu_Web_task_2.html");


?>
