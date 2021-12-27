<?php
define("server","localhost");
define("username","root");
define("password","");
$con=new mysqli(server,username,password);
$con->query("create database if not exists cm");
$con->close();
$con=new mysqli(server,username,password,"cm");
$sql1="CREATE TABLE emp(
    emp_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(50),
    emp_pass VARCHAR(50),
    emp_address VARCHAR(50),
    emp_mobno BIGINT,
    emp_joining DATE,
    emp_salary BIGINT,
    emp_email VARCHAR(50)
    
    )";
    $con->query($sql1);
$sql2 ="CREATE TABLE clt(
    clt_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    clt_name VARCHAR(50),
    clt_address VARCHAR(50),
    clt_mobno BIGINT,
    clt_branch VARCHAR(50),
    clt_work VARCHAR(50),
    clt_email VARCHAR(50),
    emp_id INT(6)
    )";
    $con->query($sql2);
    
  
?>