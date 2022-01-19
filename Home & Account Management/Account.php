<!DOCTYPE html>
<html>
<head>
	<title>Beauty Mark</title> 
    <link rel="stylesheet" type="text/css" href="stylesheet/style2.css">

    <div class="proPic"></div>
    <div class="header">
      <img id="logo" src="img/logo.png" alt="Beauty Mark">
      <img id="profile" src="img/user-p.png" alt="User Image">
      
      <div class="center-wrapper">
        <h1 class="center-content" style="margin-right:290px;"><u><b>Beauty Mark</a></b></u></h1>
        <h1 class="center-content" style="margin-right: 300px;">Care About Your Beauty</h1>
      </div>
     </div>
</head>
<body>

	<header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav style="margin-right:235px;">
        <ul>
          <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Home%20page/">Home</a></li>
          <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Contact%20us.html">Contact Us</a>
          </li><li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Registration.php">Register</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="http://localhost/IWT/web%20pages/givi/aboutus.html">About</a></li>
        </ul>
      </nav>
    </div>
  </header>
<br>
<h1 style="border-style: solid; padding: 555px; margin: 140px; padding-top:1px; margin-top: 20px;  ">Account</h1>

<div class="d">

<form  method="POST" action="" style="margin-top: -728px;">
  <img style="width:128px; margin-top: 35px;" src="img/aaa.jpg ">
  <br>

Username:-<br><input style="padding-right: 65px;  padding-top: 20px;" type="text" name="user_name" ><br>
Age:-<br><input style="padding-right: 65px;  padding-top: 20px;" type="text" name="age"><br>
E-mail:-<br><input style="padding-right: 65px;  padding-top: 20px;" type="text" name="email">
<br>
status:-<br><input style="padding-right: 65px;  padding-top: 20px;" type="text" name="status"><br>
occupation:-<br><input style="padding-right: 65px;  padding-top: 20px;" type="text" name="occupation">
<br><br>
<input style="padding-right: 20px; padding-left: 20px; padding-top: 10px; padding-bottom: 10px;" type="submit" name="update" value="update">
<input style="padding-right: 20px; padding-left: 20px; padding-top: 10px; padding-bottom: 10px;" type="submit" name="delete" value="delete">
</form>
</div>

<div class="footer">
    <div style="float: left;" id="footer-left-content">
         <span>www.BeautyMark.com</span>
          <br>
         <span style="position:absolute;left:10px;">contact: 507-334-4898<br>
          <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1#identifier">BeautyMark@gmail.com</a></span>
        <img style="margin-left:1150px;"src="img/payment.png" width="250px">
      </div>
</body>
</html>


<?php

require 'config.php';

// if(isset($_POST['submit']))
// {
//   $Comment = $_POST['Comment'];
//   $sql = "INSERT INTO comments (Comment) values('$Comment')";

// if (mysqli_query($con,$sql)) {

//   echo "Insereted";
//  } else  {
//         echo "connection error".$con->error;}    # code...
//   }

   if (isset($_POST['update'])) 
   {
      $username = $_POST['user_name'];
      $email = $_POST["email"];
      $status = $_POST["status"];
      $age = $_POST["age"];
      $occupation = $_POST["occupation"];

      $sqll = "UPDATE users SET user_name ='$username', email='$email', status='$status', age='$age', occupation='$occupation' WHERE user_name='$username';";
  
   
           if (mysqli_query($con,$sqll)) 
            {
              echo "updated successfully";
            }
           else
            {
             echo "not updated" .$con->error;
            }
  }
     
    if (isset($_POST['delete'])) 
    {
        $username = $_POST['user_name'];
    // $age = $_POST["age"];
    // $status = $_POST["status"];
    // $occupation = $_POST["occupation"];

    $sqll = "DELETE FROM users WHERE user_name = '$username'";
    if (mysqli_query($con,$sqll)) {
       
     echo "deleted successfully";
   }else{
    echo "connection error" .$con->error;}
   }
    
     mysqli_close($con);

?>
l




  