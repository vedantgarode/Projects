<html>
<head>
 <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>

<style>

.field{
	margin-top:5%;
	margin-left:30%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius:20px;
	width:40%;
}
.txt{
	margin-left:50px;
	margin-right:30px;
	padding-left:10px;
	margin-bottom:10px;
	border:none;
	width:80%;
	border-bottom:2px solid black;
	height:40px;
	
}
.btn{
	
	margin-left:60%;
	margin-bottom:40px;
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
 padding-top:20px;
 padding-left:30px;
 font-family:'Bungee';
	
}
</style>
</head>
<body>
<form action="staffinsert.php" method="POST">
<div class="field">
<h1 class="heading">Staff Registration</h1>
<input type="text" name="stfnam" placeholder="Staff Name" class="txt"><br>
<input type="text" name="mnum" placeholder="Mobile Number" class="txt"><br>
<input type="text" name="cpass" placeholder="Create Password" class="txt"><br>
<input type="text" name="passw" placeholder="Confirm Password" class="txt"><br>


<input type="submit" name="submit" value="REGISTER" class="btn">
<p style="margin-left:28%;
	margin-bottom:20px;padding-bottom:30px;
	font-family: sans-serif;">ALREADY REGISTERED?<a href="stafflogin.php">LOGIN</a></p>

</div>
</form>
</body>
</html>
