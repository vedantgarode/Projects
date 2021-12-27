<?php
include('../config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inner.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    padding:    
    display: flex;
  
  }
  .navbar .nav-menu{
    flex: 1;
    text-align: right;
  
  
  }
  .navbar .nav-menu li{
    display: inline-block;
    margin: 0 20px;
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
  .navbar .nav-menu li a:hover{
	  color:#fff;
	  background:#d6247d;
  }
  .navbar .heading h1,p{
    color:#fff;
    margin:0;

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
include("adminmenu.php");
?>
</div>
<form method="POST">
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Employee Register</h2>
                
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "empname" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Employee Name</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="email" id="empid" name = "email" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Email</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" name = "pass" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswAordX">Password</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "empaddress" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Address</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" pattern='[0-9]{10}' title ='Mob.Number Should be 10 Digits' name = "mobno" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Mob.No</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="date" id="empid" name = "joining" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Joining Date</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="number" id="empid" name = "salary" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Salary</label>
                </div>
                
                
                <button class="btn btn-outline-light btn-lg px-5" name ="register" type="submit">Register</button>
                <br></br>
                
                
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
</form>
</body>
</html>
<?php
if(isset($_POST['register']))
{
	$name1=$_POST['empname'];
	$email=$_POST['email'];
	$pass1=$_POST['pass'];
	$add1=$_POST['empaddress'];
	$mobno=$_POST['mobno'];
	$joind=$_POST['joining'];
	$salary=$_POST['salary'];

    $sql2=$con->query("INSERT INTO `emp`(`emp_name`, `emp_pass`, `emp_address`, `emp_mobno`, `emp_joining`, `emp_salary`, `emp_email`) VALUES ('$name1','$pass1','$add1','$mobno','$joind','$salary','$email')");
    if($sql2){
        echo '<script>alert("Employee Added Successfully");</script>';
    }
      
}
	
?>