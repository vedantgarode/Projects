<?php
include('config.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$sname=$_POST['stfnam'];
	$ph=$_POST['mnum'];
	$pass=$_POST['passw'];
	$qry=$con->query("INSERT INTO staff (staff_name ,staff_phn ,staff_pass ) 
	VALUES ('$sname','$ph','$pass')");
    if($qry==true)
		header("Location:stafflogin.php");
	else 
		echo '<script>alert("Not Registered,Please Try Again!!")</script>';
}

?>
	
	
