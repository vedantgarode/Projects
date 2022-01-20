<?php
define("server","localhost");
define("username","root");
define("password","");
define("dbname","school");
$con=mysql_connect(server,username,password) OR die(mysql_error());
if(!mysql_select_db(dbname,$con))
{
	$qry=mysql_query("create database school");
}
if(!mysql_query("select *from application"))
{
	$qry1=mysql_query("create table application(id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,s_name VARCHAR(255),s_dob DATE,p_name VARCHAR(255),p_email VARCHAR(255),p_phno BIGINT(10),address VARCHAR(255),found VARCHAR(40))");
}
	

?>