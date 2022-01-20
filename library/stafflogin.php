<html>

<head>
 <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>

<style>

.field{
	margin-top:10%;
	margin-left:30%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius:20px;
	width:40%;
}
.txt{
	margin-left:60px;
	margin-right:30px;
	padding-left:10px;
	margin-bottom:10px;
	border:none;
	width:70%;
	border-bottom:2px solid black;
	height:40px;
	
}
.btn{
	
	margin-left:35%;
	margin-bottom:20px;
	border-radius:10px;
	color:black;
	width:30%;
	font-family: sans-serif;
    border:4px solid;
	height:8%;
	background:white;
	font-size:18px;
	
}
.btn::after{
  background: #fff;
  transition: 0.4s;
}
.btn:hover::after{
  transform: scale(1.3);
  opacity: 0;
}
.btn:hover
{ 
  border: 4px solid #fff;
  background:black;
  color:#fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition: width 0.4s, height 0.4s;
 }	
.heading{
 padding-top:30px;
 padding-left:30px;
 font-family:'Bungee';
	
}
</style>
</head>
<body>
<form method="POST">
<div class="field">
<h1 class="heading">STAFF LOGIN</h1>
<input type="text" name="mnum" placeholder="Mobile Number" class="txt"><br>
<input type="password" name="pass" placeholder="Password" class="txt"><br>
<input type="submit" name="submit" value="SUBMIT" class="btn">
<p style="margin-left:28%;
	margin-bottom:20px;padding-bottom:30px;
	font-family: sans-serif;">NOT REGISTERED?<a href="staffregister.php">CLICK HERE</a></p>

</div>
</form>
</body>
</html>
<?php
session_start();
include('config.php');
if(isset($_SESSION['login_user']))
{
header("Location:index.php");	
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$ph=$_POST['mnum'];
	$pass=$_POST['pass'];
	
	$sql="SELECT id,staff_name FROM staff WHERE staff_phn='$ph' and staff_pass='$pass'";
	$res=$con->query($sql);
	if($res->num_rows==1){
	while($row=$res->fetch_array(MYSQLI_ASSOC)){
	        $sname=$row['staff_name'];
	    }
		$_SESSION['login_user']=$sname;
		header("Location:index.php");
    exit();
	}
	else 
		echo '<script>alert("'.$con->error.'");</script>';
}

?>




