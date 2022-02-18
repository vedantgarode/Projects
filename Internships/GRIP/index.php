<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankOfCountry</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>
    <?php
        include("config.php");
    ?>
    <h1><a href="index.php">Bank Management </a></h1>
    <div id="section">
        <div class="card-container">
            <a href="transfer.php" class="card">
                <b style="background-color: rgb(255, 255, 255);border-radius: 30px;">Transfer</b>
                <div class="description"> Transfer Money from one account to another</div>
            </a>

            <a href="viewrecords.php" class="card">
                <b style="background-color: rgb(255, 255, 255);border-radius: 30px;">View Records</b>
                <div class="description">View all account balance</div>
            </a>
            <!-- <a href="transactions.php" class="card">
                <b style="background-color: rgb(255, 255, 255);border-radius: 30px;">View Transactions</b>
                <div class="description">View all history of Past Transactions</div>
            </a> -->
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>