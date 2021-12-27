<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Management</title>
    <link rel="icon" type="image/PNG" href="content/c4.png">
    <style>
    body{
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    /*background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))*/
    background-image: url("content/background4.jpeg");
    background-size:cover;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    align-items: center;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;

}
h1{
    font-size:3.5rem;
    text-align:center;
    color:#fff;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.container{
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}
.container .btn  {
  background: #fff;
  padding: 10px 40px;
  font-size: 20px;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
  margin:5px;
  color:#3174e0;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
 

.container .btn a{
    text-decoration:none;
    color:#3174e0;
}


</style>
</head>

<body >
    <h1>Company Management System </h1>
    <div class="container"> 
        <div class="btn"><a href="admin/ad_login.php">Admin Login</a></div>
        <div class="btn"><a href="Login.php">Employee Login</a></div>

    </div>
</body>
</html>