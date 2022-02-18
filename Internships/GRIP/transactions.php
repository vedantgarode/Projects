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
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        </tr>
        <?php
        $res = $con->query("SELECT * from transactions");
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "<tr><td>" . $row['Sender'] . "</td><td>" . $row['Receiver'] . "</td><td>" . $row['Amount'] . "</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <script src="script.js"></script>
</body>

</html>