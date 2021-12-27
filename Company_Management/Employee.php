<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="panel-css.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    text-align: center;
  
  
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
  .navbar .heading h1,p{
    color:#fff;

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
</style> 
<body>
<div class="navigation">
<?php
include('employeemenu.php');
?>
</div>
</body>
</html>
