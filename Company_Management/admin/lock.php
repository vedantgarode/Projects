<?php
if((!isset($_SESSION['admin'])))
{
header("Location:ad_login.php");
}
?>