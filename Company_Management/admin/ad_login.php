<?php
session_start();
include('../config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Database Managenebt System"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <meta name="keywords" content="CM,Company,Management" />
    <link rel="icon" type="image/PNG" href="/Company_Management/content/c4.png">
    <link rel="stylesheet" href="inner.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .gradient-custom {
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    /*background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))*/
    background-image: url("../content/background2.jpeg");
    background-size:cover
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
  </style>
</head> 
<body>

 <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <form method="POST">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                             <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
                             <p class="text-white-50 mb-5">Please Enter Admin Email and password!</p>
                
                            <div class="form-outline form-white mb-4">
                                <input type="email"  name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="typeEmailX">Email</label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" name="pass"class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX">Password</label>
                            </div>
                            <button class="btn btn-outline-light btn-lg px-5" name ="login" type="submit">Login</button>
                        </div>    
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
 </section>


<?php 



if(isset($_SESSION['admin']))
{
header("Location:index.php");	
exit();
}
if(isset($_SESSION['employee']))
{
header("Location:../Employee.php");	
exit();
}


if(isset($_POST['login']))
{
    if(isset($_SESSION['employee'])){
        unset($_SESSION['employee']);
    }
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM ad_main WHERE ad_email='$email' and ad_pass='$pass'";
    $res=$con->query($sql);
        if($res->num_rows==1){
        
            while($row = $res->fetch_row()) {
                $aname=$row[4];
                }
            $_SESSION['admin']=$aname;
            header('Location:index.php');
        }
        else 
            echo '<script>alert("YOUR EMAIL OR PASSWORD IS INVALID");</script>';
    }

      
       


?>
</body>
</html>