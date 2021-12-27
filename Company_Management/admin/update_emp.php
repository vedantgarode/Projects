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
  .navbar .heading h1,p{
    color:#fff;
    margin:0;

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
// $r=session_id();
// if($r=="employee"){
//     header("Location:Employee.php");
// }
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

                <h2 class="fw-bold mb-2 text-uppercase">Employee Update</h2>
                
                <div class="form-outline form-white mb-4">
                    <input type="text" id="empid" name = "empid"  class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Employee ID</label>
                </div>
                <button class="btn btn-outline-light btn-lg px-5" name ="check"  type="submit">Search</button>
                <br></br>
                <?php
                if(isset($_POST['check'])){
                    $id=$_POST['empid'];
                    $name1='';
                    $email='';
                    $pass1='';
                    $add1='';
                    $mobno='';
                    $salary='';
                    $id1='';
                    // $joind=$_POST['joining'];
                    $res=$con->query("SELECT * from emp Where emp_id='$id'");
                    if($res->num_rows>0)
                  {
                      while($row=$res->fetch_assoc()){
                        $id1=$row['emp_id'];
                        $name1=$row['emp_name'];
                        $email=$row['emp_email'];
                        $pass1=$row['emp_pass'];
                        $add1=$row['emp_address'];
                        $mobno=$row['emp_mobno'];
                        $salary=$row['emp_salary'];
                      }
                    }
                    echo "<div class='form-outline form-white mb-4'>
                    <input type='text' id='empid' name = 'empid' value='$id1' class='form-control form-control-lg' readonly/>
                    <label class='form-label' for='typeEmailX'>ID</label>
                </div>";
                echo "<div class='form-outline form-white mb-4'>
                <input type='text' id='empid' name = 'empname' value='$name1' class='form-control form-control-lg' />
                <label class='form-label' for='typeEmailX'>Employee Name</label>
            </div>";
            echo "<div class='form-outline form-white mb-4'>
                <input type='email' id='empid' name = 'email' value='$email' class='form-control form-control-lg' />
                <label class='form-label' for='typeEmailX'>Email</label>
            </div>";
            echo "<div class='form-outline form-white mb-4'>
                <input type='pass' id='empid' name = 'pass' value='$pass1' class='form-control form-control-lg' />
                <label class='form-label' for='typeEmailX'>Password</label>
            </div>";
            echo "<div class='form-outline form-white mb-4'>
                <input type='text' id='empid' name = 'empaddress' value='$add1' class='form-control form-control-lg' />
                <label class='form-label' for='typeEmailX'>Address</label>
            </div>";
            echo "<div class='form-outline form-white mb-4'>
                <input type='text' id='empid' pattern='[0-9]{10}' title ='Mob.Number Should be 10 Digits'  name = 'mobno' value='$mobno' class='form-control form-control-lg' />
                <label class='form-label' for='typeEmailX'>Mob.No</label>
            </div>";
            echo "<div class='form-outline form-white mb-4'>
                <input type='int' id='empid' name = 'salary' value='$salary' class='form-control form-control-lg' />
                <label class='form-label' for='typeEmailX'>Salary</label>
            </div>";
            echo "<button class='btn btn-outline-light btn-lg px-5' name ='register' type='submit'>Update</button>
            <button class='btn btn-outline-light btn-lg px-5' name ='delete' type='submit'>Delete</button>
            <br></br>";
                
        
        
            }
            ?>
                

               

                <!-- <div class="form-outline form-white mb-4">
                    <input type="text" id="clientid" name = "clientid" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Client ID</label>
                </div> -->
                

                
                
                
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
    $id=$_POST['empid'];
	$name1=$_POST['empname'];
	$email=$_POST['email'];
	$pass1=$_POST['pass'];
	$add1=$_POST['empaddress'];
	$mobno=$_POST['mobno'];
	// $joind=$_POST['joining'];
	$salary=$_POST['salary'];

    $sql2=$con->query("UPDATE `emp` SET `emp_name`='$name1',`emp_pass`='$pass1',`emp_address`='$add1',`emp_mobno`='$mobno',`emp_salary`='$salary',`emp_email`='$email' WHERE `emp_id`='$id'");
    if($sql2){
        echo '<script>alert("Employee Updated Successfully");</script>';
    }
      
}
if(isset($_POST['delete'])){
    $id=$_POST['empid'];
    $sql3=$con->query("DELETE FROM `emp` WHERE `emp_id`='$id'");
    if($sql3){
        echo '<script>alert("Employee Deleted Successfully");</script>';
    }
}

    
?>