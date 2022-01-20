<?php
 require("lock.php");
?><html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>

<style>
*,body{
	margin:0;
	padding:0;
}
background:url("book/demo.img");
body {margin: 0;}
div.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background:#fff;
  height:10%;
  border-bottom:1px solid #808080;
}

div.topnav input {float:left;}

div.topnav input{
  font-family:sans-serif;
  font-size:20px;
  display: block;
  color: #000;
  text-align: center;
  padding-top:30px;
  padding:20px 16px;
  background:#fff;
  border:none;
  font-weight:600;
  text-decoration: none;
}

div.topnav input :hover:not(.active) {background-color: #111;}

div.topnav input .active {background-color: #4CAF50;}

div.topnav input.right {float: left;}
div.topnav input.log {
	float: right;

}

</style>
</head>
<body>

<form method="POST">

<div name="nav" class="topnav">
  <input type="submit" name="reg" value="Register Student" class="right">
  <input type="submit" name="issue" value="Issue Book" class="right">
  <input type="submit" name="view" value="Student Details" class="right">
   <input type="submit" name="issued" value="Issued Books" class="right">

  <input type="submit" name="logout" value="Logout" class="log">

</div>
</form>
<?php
if(isset($_POST['reg']))
	include('studentregister.php');
if(isset($_POST['issue']))
	include('issuebook.php');
if(isset($_POST['view']))
	include('viewstudent.php');
if(isset($_POST['issued']))
	include('viewissued.php');
if(isset($_POST['logout']))
	header('location:logout.php');


?>


</body>
</html>
