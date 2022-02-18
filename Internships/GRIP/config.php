<?php
define("server","localhost");
define("username","root");
define("password","");
$con=new mysqli(server,username,password);
$con->query("create database if not exists bank");
$con->close();
$con=new mysqli(server,username,password,"bank");

$sql6="CREATE TABLE accounts(
    cus_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cus_name VARCHAR(50),
    cus_mobno BIGINT,
    cus_balance BIGINT,
    cus_email VARCHAR(50)
    )";
    $con->query($sql6);

$sql5="CREATE TABLE transactions(
    Sender INT(6),
    Receiver INT(6),
    Amount BIGINT
    )";
    if($con->query($sql5)){
        echo "Noice";
    }
?>