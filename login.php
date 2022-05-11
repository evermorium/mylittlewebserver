<?php


$ID = $_POST['username'];
$PW = $_POST['password'];

$link = mysqli_connect('localhost','root','password');
if(!$link)
{
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
/*
if($ID == $corID && $PW == $corPW)
{
    require("secu999.php");
}else require("secu_Web_task_2.html");
*/

?>
