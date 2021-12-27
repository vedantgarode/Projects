<?php
session_start();
if((!isset($_SESSION['employee'])))
{
header("Location:Login.php");
}

?>
