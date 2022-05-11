<?php


$ID = $_POST['username'];
$PW = $_POST['password'];
$corID = "temp";
$corPW = "temp";


$conn = mysqli_connect('localhost','root','password');
if(!$conn)
{
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($conn);

if($ID == $corID && $PW == $corPW)
{
    require("secu999.php");
}else require("secu_Web_task_2.html");


?>
