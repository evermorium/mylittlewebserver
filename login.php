<?php


$ID = $_POST['username'];
$PW = $_POST['password'];
$corID = "temp";
$corPW = "temp";

$servername = "localhost";
$user = "root";
$password = "password";
$db = "Users"
$con = mysqli_connect($servername,$user,$password,$db);



if(!$con)
{
    die("access denied" .mysqli_connect_error());
}
echo "access success";

if($ID == $corID && $PW == $corPW)
{
    require("secu999.php");
}else require("secu_Web_task_2.html");


?>