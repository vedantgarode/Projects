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

    }  .navbar .heading h1,p{
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

                <h2 class="fw-bold mb-2 text-uppercase">Client Register</h2>
                <p class="text-white-50 mb-5">Please enter your ID  and password!</p>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "clname" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Client Name</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="email" id="empid" name = "email" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Email</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "cltaddress" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Address</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" pattern='[0-9]{10}' title ='Mob.Number Should be 10 Digits' name = "mobno" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Mob.No</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "branch" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Branch</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "work" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Work</label>
                </div>
                <div class="form-outline form-white mb-4">
                    <input type="number" id="empid" name = "empid" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Emp ID</label>
                </div>
                

               

                <!-- <div class="form-outline form-white mb-4">
                    <input type="text" id="clientid" name = "clientid" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Client ID</label>
                </div> -->
                

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
	$name1=$_POST['clname'];
	$email=$_POST['email'];
	$add1=$_POST['cltaddress'];
	$mobno=$_POST['mobno'];
	$branch=$_POST['branch'];
	$work=$_POST['work'];
	$empid=$_POST['empid'];

    $sql2=$con->query("INSERT INTO `clt`(`clt_name`, `clt_address`, `clt_mobno`, `clt_branch`, `clt_work`, `clt_email`, `emp_id`) VALUES ('$name1','$add1','$mobno','$branch','$work','$email','$empid')");
    if($sql2){
        echo '<script>alert("Client Added Successfully");</script>';
    }
    else{
        echo '<script>alert("Kahitari chuktay :'.$con->error.'");</script>';
    }
  
      
}
	
?>