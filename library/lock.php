<?php
session_start();
if(!isset($_SESSION['login_user']))
{
header("Location:stafflogin.php");
}
include('config.php');
$user_check=$_SESSION['login_user'];
	
?>