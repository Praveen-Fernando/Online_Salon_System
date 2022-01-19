<?php

session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beauty Mark</title> 
    <link rel="stylesheet" type="text/css" href="stylesheet/style2.css">
</head>

<body>
<!--Main Header-->
    <div class="proPic"></div>
    <div class="header">
      <img id="logo" src="img/logo.png" alt="Beauty Mark">
      <img id="profile" src="img/user-p.png" alt="User Image">
      
      <div class="center-wrapper">
        <h1 class="center-content" style="margin-right:290px;"><u><b>Beauty Mark</a></b></u></h1>
        <h1 class="center-content" style="margin-right: 300px;">Care About Your Beauty</h1>
      </div>
     </div>

	<header>
    <div class="container">
      <h1 class="logo"></h1>

      <nav style="margin-right:235px;">
        <ul>
          <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Home%20page/">Home</a></li>
          <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Contact%20us.html">Contact Us</a></li>
           <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Registration.php">Register</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="http://localhost/IWT/web%20pages/givi/aboutus.html">About</a></li>
        </ul>
      </nav>
    </div>
</header>


<div>
        <form class="form-reg" method="POST">
            <h1>Registation Now</h1>
            <input type="text" name="user_name" placeholder="User Name" style="padding:13px; padding-right:100px; " required>
            <br>
            <input type="text" name="age" placeholder="age" style="padding:13px; padding-right:100px; " required>
            <br>
            <select type="select" name="gender" placeholder="gender" style="padding:13px; padding-right:192px;"><option value="-None">None</option><option value="Male">Male</option><option value="Female">Female</option></select>
            <br>
            <input type="email" name="email" placeholder="Email ID*" style="padding:13px; padding-right:100px;" required>
            <br>
            <input type="text" name="address" placeholder="Address*" style="padding:13px; padding-right:100px;" required>
            <br>
            <input type="text" name="country" placeholder="Country*" style="padding:13px; padding-right:100px;" required>
            <br>
            <input type="text" name="postal" placeholder="Postal Code*" style="padding:13px; padding-right:100px;" required>
            <br>
            <input type="password" name="password" placeholder="Enter Password" style="padding:13px; padding-right:100px;" required>
            <br>
            <input type="password" name="repassword" placeholder="Re-enter Password" style="padding:13px; padding-right:100px;" required>
            <br>
            <p>Payment Details:</p>
             <select type="select" name="pType" placeholder="payment*" style="padding:13px; padding-right:201px;"><option value="Cash">Cash</option><option value="Debit">Debit</option><option value="Credit">Credit</option></select>
            <br>
            <input type="text" name="cNum" placeholder="Card Number*" style="padding:13px; padding-right:100px;" required>
            <br>
        
            <p style="text-align: center">I agree all <a href="Terms%20&%20condition.html" style="color: yellow; font-family: sans-serif; font-weight: bold; font-size: 18px;">Terms & Conditions</a> </p>
            <input type="submit" name="sub" value="Register Me" style="height: 45px; border-radius: 20px;">
       </form>
</div>      

   <div class="footer" style="bottom: -482px;">
      <div style="float: left;" id="footer-left-content">
         <span>www.BeautyMark.com</span>
          <br>
         <span style="position:absolute;left:10px;">contact: 507-334-4898<br>
         	<a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1#identifier">BeautyMark@gmail.com</a></span>
        <img style="margin-left:1150px;"src="img/payment.png" width="250px">
      </div>
</div>
      

</body>

</html>

<?php 
$con = mysqli_connect("localhost", "root", "", "onlinesalon") or die("could not connect to the database!");

 
    if (isset($_POST['sub']))
     {

                $username = $_POST["user_name"];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $country = $_POST['country'];
                $postal = $_POST['postal'];
                $password = $_POST['password'];
                $confirm_password = $_POST['repassword'];
                $pType = $_POST['pType'];
                $cNumber = $_POST['cNum'];
              
                if($password == $confirm_password)
                {
                    $query = "select * from users WHERE user_name = '$username'";
                    $result = mysqli_query($con, $query);
                    
                    $query_insert = "INSERT INTO users(user_name, age, gender, email, address, country, postal_code,password,  card_type, card_number) VALUES ('$username', $age, '$gender', '$email', '$address', '$country', $postal, '$password', '$pType', $cNumber);";

                          if(mysqli_query($con, $query_insert))
                  
                          {
                             echo "User registereded";
                          }
                          else
                          {
                          	echo "Password and confirm password are not Matching";
                          }
                }
                
           
             
                

     }                  

    

 ?>
