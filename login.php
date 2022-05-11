<?php


$ID = $_POST['username'];
$PW = $_POST['password'];

/*$mysqli = new mysqli("localhost","root","password","Users");
echo $mysqli->host_info . "\n";*/

$link = mysql_connect('localhost','root','password');
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
