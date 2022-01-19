<?php 

$server="localhost";
$username="root";
$password="";
$database="onlinesalon";

$con=new mysqli($server,$username,$password,$database);

if($con->connect_error){
	die("connection failed:".$con->connect_error);}








 ?>