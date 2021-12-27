<?php
session_start();
    include("lock.php");
    $aname ="";
    if(isset($_SESSION["admin"])){
        $aname = $_SESSION["admin"];
    }
   
    ?>
<nav class="navbar">
        <div class="heading">
            <h1 style="color:#fff;">ADMIN PANEL</h1>
			<p style="color:#fff;">Welcome<?php echo " Admin:".$aname; ?></p>
        </div>         
        <ul class="nav-menu">
			<li class="nav-item"><a href="view_emp.php">Employee Details</a></li>
			<li class="nav-item"><a href="client.php">Client Details</a></li>
            <li class="nav-item"><a href="add_emp.php">Add Employee</a></li>
			<li class="nav-item"><a href="update_emp.php">Update Employee</a></li>
            <li class="nav-item"><a href="addclient.php">Add Client</a></li>
            <!-- <li class="nav-item"><a href="update_clt.php">Update Client</a></li> -->
			<li class="nav-item"><a href="ad_logout.php">Logout</a></li>
			
        </ul>
</nav>