<?php

$server="localhost";
$username="root";
$password="";
$database="onlineartgallery";

$con=new mysqli($server,$username,$password,$database);

if($con->connect_error){

die("Connection Failed : " . $conn->connect_error);
}

?>