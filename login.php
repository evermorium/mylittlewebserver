<?php


$ID = $_POST['username'];
$PW = $_POST['password'];

$corID = "admin";
$corPW = "1234";

if($ID == $corID && $PW == $corPW)
{
    require("secu999.php");
}else require("secu_Web_task_2.html");


?>