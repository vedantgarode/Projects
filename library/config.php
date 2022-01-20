<?php
define("server","localhost");
define("username","root");
define("password","");
define("dbname","library");
$con=new mysqli(server,username,password);
$con->query("create database if not exists library");
$con->close();
$con=new mysqli(server,username,password,"library");
$sql1="CREATE TABLE staff(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    staff_name VARCHAR(50),
    staff_phn BIGINT,
    staff_pass VARCHAR(50)
    )";
    $con->query($sql1);

$sql2="CREATE TABLE student(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	stud_roll INT,
	stud_name VARCHAR(50),
	stud_class VARCHAR(10),
	stud_phn BIGINT,
	stud_addr VARCHAR(255))";
 $con->query($sql2);	


$sql3="CREATE TABLE issuebook(
    b_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	s_roll INT,
	s_class VARCHAR(10),
	issue_date DATE,
	return_date DATE,
	b_name VARCHAR(50),
	b_author VARCHAR(50))";
	
$con->query($sql3);	

	
	
	
	
?>