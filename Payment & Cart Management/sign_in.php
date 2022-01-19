<!doctype html>
<?php

session_start();

?>

<!-- <?php
	$con=new mysqli('localhost','root','','onlinesalon');
	if($con->connect_error)
	{
		echo "DB Not connected";
		die();
	}
	else
	{
		echo "DB connected";
	}
?> -->
<html>
  <head>
    <title>Beauty Mark</title>
	
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css"> 
      
  </head>


<style>


p{ 
    text-align:center;
    font-size:40px;
   }
 
h3{
    font-size:5px;
  }

body {

   background-image:url("img/background.jpg");
   opacity:50;
   height:140px;
   background-size:cover;
   background=position:center;
   margin: 0;
   font-family: 'Work Sans', sans-serif;
   font-weight: 800;
   text-align:center;
   padding-top: 23px;
}

.container {
	width: 80%;
	margin: 0 auto;
}

header {
    opacity: 10;
    filter: (opacity=0.5);
  background: #3A3736;
}

header::after {
  content: '';
  display: table;
  clear: both;
}



#profile{
	float: right;
	width: 67px;
	padding-bottom: 5px;
    margin-top: -39px;
    margin-right: -71px;
}
.side-bar{
      float: left;
      border-right-style: solid;
      margin-top: -11px;
      position: absolute;
      bottom: -95px;
      top: 197px;
}
.side-bar ul{
    list-style-type: none;
    margin-right: 10px;
    padding-left: 10px;
    padding-right: 10px;
}
.side-bar li a{
  text-decoration: none;
  color: white;
}
#categories{
      text-align: center;
      border-style: solid;
      border-width: 2px;
      text-decoration-style: none;
}


.bridal{
  font-size: 40px;
  margin-top: 18px;
}

nav {
  float: right;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 70px;
  padding-top: -5px;

  position: relative;
}

nav a {
  color: #1C1A19;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 16px;
}

nav a:hover {
  color: #000;
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #444;

  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 100%;
}
.header {
	overflow: auto;
	border-bottom-style: solid;
    border: 2px solid black;
    padding-border: 55px;
    background: url(mountain.jpg);
    background-repeat: no-repeat;
    background-size: auto;
}

.footer {
  font-size: 17px;
	overflow: auto;
	border-top-style: groove;
	position: absolute;
    left: 0;
	margin-top:50px;
    height: 70px;
	width: 100%
}

#footer-left-content span,
#footer-left-content img{
	margin: 4px;
	float: left;
}

.button {
  display: inline-block;
  padding: 10px 25px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  color: black;
  background-color:dimgray;
  border: none;
  border-radius: 15px;
 
}
.button:hover {background-color:silver}


.hair{
 border-radius:5%;
 width:30%;
 height:100%;
 margin-left:900px;
 
 }


</style>

<body>
	<span><img style="width: 300px;float: left;padding-left: 30px;padding-top: 20px;" src="img/logo.png" class="logo"></span>
  <span><font size="10" ><b><u style="margin-left: -175px;"> Beauty Mark </u></b><br><small><small><small></small><small style="margin-left: -65px;">Care About Your Beauty</small></small></small></font></span>
 

<div class="header">
	<div class="container">
       <nav>
        <ul>
          <li><a href="http://localhost/IWT/web%20pages/praveen/Home%20page/">Home</a></li>    
          <li><a href="http://localhost/IWT/web%20pages/praveen/Contact%20us.html">Contact Us</a>    
          </li><li><a href="http://localhost/IWT/web%20pages/praveen/Registration.php">Register</a></li>            
          <li><a href="#">Our Services</a></li>
          <li><a href="http://localhost/IWT/web%20pages/givi/aboutus.html">About Us</a></li>
        </ul>
      </nav>
    </div>
     
</div>
<br>
<br>

<img src="img/brush.gif"  alt="brush" class="hair">
<center><font size=8>SIGN IN</font</center>

<form  name="form1" method="POST" action="log_process.php">
	<onsubmit="return validateForm()" method="post">
 <b><h2> Email address or User name  :</h2> </b>
<pre> <input type="text" name="user_name" style="width:450px;height:20px;padding:20px;border-radius:10px"></pre>
<b><h2> Password     :</h2> </b>  
 <pre> <input type="password" name="password" style="width:450px;height:20px;padding:20px;border-radius:10px"></pre><br>  
   <input type="checkbox" name="remember"> Remember me 
    <br>
    <br>
   <input type="submit" name="submit" value="sign in">
<pre>    <right><h4><b><i>Forgot password ?</i></b></h4></right></pre>
      <h4>You're new?<u> <a href="http://localhost/IWT/web%20pages/Praveen/IWT/Registration.php"> Create  an  account</u></a></h4> 
<br>
<br> 
</form>
<!-- <?php

if(isset($_POST['submit']))
			{
				
				$username=$_POST['user_name'];
				$password=$_POST['password'];
	
	$sql="INSERT INTO settings(user,password) VALUES('$username','$password')";
							
	if(mysqli_query($con,$sql))
	{
		echo "Successful";
	}
        else
	{
		echo "Failure";
	}
}
			
?> -->

<script>
function myFunction() {
    var x = document.getElementById("frm1").name;
    document.getElementById("demo").innerHTML = x;
}

function validateForm() {
	var x = document.forms["form1"] ["user"].value;
	if(x == "") {
		alert("Email address or User name must be entered");
		return false;
	}
	var y = document.forms["form1"] ["paswd"].value;
	if(y == "") {
		alert("Password must be entered");
		return false;
	}
	
}
</script>

    <div class="footer">
      <div style="float: left;" id="footer-left-content">
        <span style="position:absolute;left:5px;top:9px;">fax: www.BeautyMark.com</span>
        <br>
        <span style="position:absolute;left:5px;top:38px;">contact: 507-334-4898</span>
        <img style="margin-left:270px;margin-top: -6px;"src="img/payment.png" width="200px">
        
      </div>
              <div style="float: right;">
                  <span style="position:absolute;right: 115px;top: 30px;">follow us on</span>
        <br>
        <img style="margin-left:270px;margin-top: 8px;margin-right: 20px;"src="img/social.png" width="80px">
        </div></div>
</body>
</html>


<!-- <?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = sign in.php');
?> -->