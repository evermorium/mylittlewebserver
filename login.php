<?php


$ID = $_POST['username'];
$PW = $_POST['password'];

$servername = "localhost";
$user = "root";
$password = "";

$con = mysqli_connect($servername,$user,$password);

if(!$con)
{
    die("서버와의 연결실패".mysqli_connect_error());
}
echo "서버와의 연결 성공!";

if($ID == $corID && $PW == $corPW)
{
    require("secu999.php");
}else require("secu_Web_task_2.html");


?>