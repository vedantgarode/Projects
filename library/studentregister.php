<html>

<head>
 <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>

<style>

.field{
margin-top:20px;
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
 padding-top:30px;
 padding-left:30px;
 font-family:'Bungee';
	
}
</style>
</head>
<body>
<form method="POST" action="studinsert.php">
<div class="field">
<h1 class="heading">STUDENT REGISTRATION</h1>
<input type="text" name="sroll" placeholder="Student Roll Number" class="txt"><br>
<input type="text" name="sname" placeholder="Student Name" class="txt"><br>
<input type="text" name="sphn" placeholder="Phone Number" class="txt"><br>
<input type="text" name="saddr" placeholder="Address" class="txt"><br>
<select name="sclass" class="txt">
<option value="study">Studying IN </option>
<option value="5th">5th</option>
<option value="5th">6th</option>
<option value="5th">7th</option>
<option value="5th">8th</option>
<option value="5th">9th</option>
<option value="5th">10th</option>
</select>
<br>
<input type="submit" name="submit" value="REGISTER" class="btn">
</div>
</form>
</body>
</html>
