<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title style="style=color:#fff;">Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mobilenav.css"/>
    <link rel="stylesheet" href="adminpanel-css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    html{
      scroll-behavior: smooth;
    }
    body{
   font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url("../content/background1.jpeg");
      background-size:cover;
     
    }
    .navigation{
    top:0;
    width:100%;
    background: #fff;
    position: fixed;  
    padding :10px;
    z-index: 9999;
    border-bottom: 2px solid #eee3dd;
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0, 0.5); /* Black w/opacity/see-through */
        /* transform: translate(-50%, -50%); */
    -webkit-backdrop-filter: blur(8px);
    backdrop-filter: blur(8px);

} 
.navbar{
    top:0;
    width: 100%;    
    display: flex;
  
  }
  .navbar .nav-menu{
    flex: 1;
    text-align: right;
  
  
  }
  .navbar .nav-menu li{
    display: inline-block;
    margin: 5px 20px;
    border-radius: 15px;
    padding:5px;
  }
  .navbar .nav-menu li a{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-decoration: none;
  	color:#fff;
    font-size: .9rem;
    font-weight: 600;
	padding:5px 10px;
	border-radius:20px;

    }
    .navbar .heading h1,p{
    color:#fff;
    margin:0;

  }
  .navbar .nav-menu li a:hover{
	  color:#fff;
	  background:#d6247d;
  }

  .button {
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  section{
      margin-top:7%;
  }

 
.contain{
    width:100%;
    height:100vh;
    
    padding:5px;
    display:flex;
    flex-direction:column;
    
}
.contain .view{
  width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center;

    
}

.contain h1{
    margin-top:8%;
    text-align:center;
    color:#4169e1;
}
table{
    background:#fff;
    border :2px solid black;
    border-radius:10px;

}
th{
    font-size:1rem;
    padding:20px 60px;
    text-align:center;
    background:#dae3ff;
    border-radius:10px;
    color:#000000;
}
td{
    font-size:1rem;
    padding:30px;
    text-align:center;
    border-bottom:1px solid #dae3ff;
    color:#000000;
}

 
@media only screen and (max-width: 720px){
    .contain h1{
    margin-top:20%;}

}

</style>

</head>
<body>
<div class="navigation">
<?php
include('adminmenu.php');
require('../config.php');
?>
</div>
<div class="contain">
    <h1 style="color:#fff;">Employee Details</h1>
<div class="view">
<table>
  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Ph. No.</th>
        <th>Email</th>
        <th>Address</th>
        <th>Salary</th>
        <th>Joining date</th>
    </tr>
  <?php 
  $res=$con->query("SELECT * from emp");
  if($res->num_rows>0)
  {
	  while($row=$res->fetch_assoc())
	  {
		  echo "<tr><td>".$row['emp_id']."</td><td>".$row['emp_name']."</td><td>".$row['emp_mobno']."</td><td>".$row['emp_email']."</td><td>".$row['emp_address']."</td><td>".$row['emp_salary']."</td><td>".$row['emp_joining']."</td></tr>";
	  }
	  echo "</table>";
  }
  // $r=session_id();
  // if($r=="employee"){
  //   header("Location:Employee.php");
  // }
  ?>
  </div>
</div>
  </body>
</html>