<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
</head>

<body>
    <?php 
        include("config.php")
    ?>
    <h1><a href="index.php">Bank Management</a></h1>
    <div id="section">
        <div class="form" >
            <form method="POST">
                <label for="fname">Sender ID:</label>
                <input type="text" name="sender" name="fname"><br><br>
                <label for="lname">Receiver ID:</label>
                <input type="text" name="receiver" name="lname"><br><br>
                <label for="Amount">Amount:</label>
                <input type="text" name="amount" name="amount"><br><br>
                <button id= "submit" type="submit"  class="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['submit']))
        {
            $valid ='';
            $id=$_POST['sender'];
            $id2=$_POST['receiver'];
            $amount=$_POST['amount'];
            $sql4 =$con->query("SELECT `cus_balance` from `account` WHERE `cus_id`=$id");
            echo "$sql4";
            $sql1=$con->query("UPDATE `accounts` set `cus_balance`= `cus_balance`+'$amount' where `cus_id`='$id2'");
            $sql2=$con->query("UPDATE `accounts` set `cus_balance` = `cus_balance` -'$amount' where `cus_id`='$id'");
            $sql3 =$con ->query("INSERT INTO transactions(`sender`, `receiver`, `amount`) VALUES ('$id' ,'$id2','$amount')");
            if($sql2){
                echo '<script>alert("Transaction successful");</script>';
            }
            
        }
	
?>
    <script src="script.js"></script>
</body>

</html>