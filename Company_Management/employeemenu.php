<?php
include('lock.php');
    $ename ="";
    if(isset($_SESSION["employee"])){
        $ename = $_SESSION["employee"];
    }
    ?>
<nav class="navbar">
        <div class="heading">
            <h1>EMPLOYEE PANEL</h1>
			<p>Welcome<?php echo " :".$ename; ?></p>
        </div>         
        <ul class="nav-menu">
            <li class="nav-item"> <a href="empprofile.php">Profile</a></li>
			<li class="nav-item"><a href="view_client.php">View Client</a></li>
			<li class="nav-item"><a href="logout.php">Logout</a></li>
			
        </ul>
</nav>