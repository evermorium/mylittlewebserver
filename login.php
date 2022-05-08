<?php


$ID = $_POST['username'];
$PW = $_POST['password'];

$corID = "admin";
$corPW = "1234";

if($ID == $corID && $PW == $corPW)
{
    require("/var/www/html/secu_task_web3/secu999.php");
}else 
{
	$html = file_get_contents('http://34.64.45.196/mylittlewebserver/Secu_Web_task_2.html');
	echo "" . $html;
}	
?>
