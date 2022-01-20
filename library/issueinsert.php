<?php
require('config.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{   $s_roll=$_POST['sroll'];
    $s_class=$_POST['sclass'];
	$s_issdate=$_POST['bissdate'];
	$s_redate=$_POST['bredate'];
	$b_name=$_POST['bname'];
	$b_auth=$_POST['bauth'];
	$b_id=$_POST['bid'];
	$sql="SELECT stud_roll FROM student WHERE stud_roll='$s_roll' and stud_class='$s_class'";
	$res=$con->query($sql);
	if($res->num_rows>0){
		$qry=$con->query("INSERT INTO issuebook(s_roll,s_class ,issue_date ,return_date ,b_name ,b_author ,b_id ) 
		VALUES ('$s_roll','$s_class','$s_issdate','$s_redate','$b_name','$b_auth','$b_id')");
		if($qry==true){
	
			echo '<script>alert("Book Issued!!")</script>';
			header("Location:index.php");
		}
		else {
	
				echo $con->error;//'<script>alert("Book Not Issued!!")</script>';
				
		
            
		}
	}
	else
	{
				echo '<script>alert("Student Not Found,Please Register!!")</script>';
                header("Location:index.php");
	}

}

?>
	
	