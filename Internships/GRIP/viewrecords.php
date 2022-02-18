<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<?php
    include('config.php');
?>
<body>

    <h1><a href="index.php">Bank Management</a></h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Ph. No.</th>
            <th>Email</th>
            <th>Amount</th>
        </tr>
        <?php
        $res = $con->query("SELECT * from accounts");
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "<tr><td>" . $row['cus_id'] . "</td><td>" . $row['cus_name'] . "</td><td>" . $row['cus_mobno'] . "</td><td>" . $row['cus_email'] . "</td><td>" . $row['cus_balance'] . "</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <script src="script.js"></script>
</body>

</html>