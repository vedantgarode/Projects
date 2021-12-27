<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panel-css.css"/>
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
      background-image: url("content/background.jpeg");
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
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0, 0.5); 
       
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
    text-align: center;
}
  .navbar .heading h1,p{
    margin:0;
    color:#fff;
  }
  .navbar .nav-menu li{
    display: inline-block;
    margin: 0 20px;
    border-radius: 15px;
    padding:10px;
  }
  .navbar .nav-menu li a{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-decoration: none;
	color:#fff;
    font-size: 1.3rem;
    font-weight: 600;
	padding:10px 20px;
	border-radius:20px;

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


 
.contain{
    width:100%;
    height:100vh;
    padding-top:7%;
    padding-bottom:10%; 
    padding:0px;
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
    color:#4169e1;
}
td{
    font-size:1rem;
    padding:30px;
    text-align:center;
    border-bottom:1px solid #dae3ff;
    color:#4169e1;
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

include('employeemenu.php');
include('config.php');

?>
</div>
<div class="contain">
    <h1 style="color:#fff;">Client Details</h1>
<div class="view">
<table>
<tr>
        <th>Client ID</th>
        <th>Name</th>
        <th>Mob.No.</th>
        <th>Email</th>
        <th>Address</th>
        <th>Branch</th>
        <th>Work</th>
    </tr>
  <?php 
  
  $email=$_SESSION['employee'];
  $id=0;
  $res1=$con->query("SELECT emp_id FROM emp Where emp_email='$email'");
  if($res1->num_rows>0)
  {
	  while($row=$res1->fetch_assoc())
	  {
		  $id=$row['emp_id'];
	  }
	  
  }
  $res=$con->query("SELECT * FROM clt WHERE emp_id=$id");
  if($res->num_rows>0)
  {
	  while($row=$res->fetch_assoc())
	  {
        echo "<tr><td>".$row['clt_id']."</td><td>".$row['clt_name']."</td><td>".$row['clt_mobno']."</td><td>".$row['clt_email']."</td><td>".$row['clt_address']."</td><td>".$row['clt_branch']."</td><td>".$row['clt_work']."</td></tr>";
	  }
	  echo "</table>";
  }
  
  
  ?>
  </div>
</div>
  </body>
</html>