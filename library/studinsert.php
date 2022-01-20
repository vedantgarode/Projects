<?php
include('config.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{    $s_roll=$_POST['sroll'];

	$s_name=$_POST['sname'];
	$s_ph=$_POST['sphn'];
	$s_addr=$_POST['saddr'];
	$s_class=$_POST['sclass'];
	$qry=$con->query("INSERT INTO student (stud_roll ,stud_name ,stud_class ,stud_phn ,stud_addr) 
	VALUES ('$s_roll','$s_name','$s_class','$s_ph','$s_addr')");
    if($qry==true){
		echo '<script>alert("Registered Successfully!!")</script>';
	    header('Location:index.php');
	}
	else {
		echo '<script>alert("Not Registered,Please Try Again!!")</script>';
		    header('Location:index.php');
	}

}

?>
	
	
 