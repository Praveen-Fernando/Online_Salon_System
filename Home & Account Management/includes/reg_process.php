<?php

require 'config.php';

session_start();



if (empty($_POST['firstname'])|| empty($_POST['lastname']) || empty($_POST['email'])|| empty($_POST['password']) || empty($_POST['confirmpassword']))
{ 
   $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
   header('location: Registration.php?message=Mandatory field(s) are missing, Please fill it again');
}

else

if(isset($_POST['submit']))
{


   $fname= $_POST['firstname'];
   $lname= $_POST['lastname'];
   $user_name=$_POST['username'];

    //check duplication
    $sql="SELECT username FROM user WHERE username='$user_name'";
    $result=mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
 
    if($count != 0)
    {
	 header('location: Registration.php?message=Username already in use!');
    }
    else

      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
      { 
         $email = $_POST['email'];

         if (($_POST['password']) === ($_POST['confirmpassword'])) 
         {
             $password=$_POST['password'];

             $sql="INSERT INTO user (fname,lname,username,email,password,created_at) 
                   VALUES ('$fname','$lname','$user_name','$email','".md5($_POST['password'])."','".date("Y-m-d H:i:s")."')";

             $result = mysqli_query($con,$sql);
          
             if($result) 
             {
		$_SESSION['MSGS'] = array('<b>Whoa you are awesome!</b> Registration Successful!');
		session_write_close();
		header('location: ../MR/Homepage.php?message=<b>Whoa you are awesome!</b> Registration Successful!');
		exit();
	     }

	     else 
             {
		die("Query failed: ".mysqli_error($con));
	     }
 
    
         } 

         else 
         {
           $_SESSION['error'] = "Password does not match.";
           header('location: Registration.php?message=Password does not match');
         }
      }
      else
      {
          $_SESSION['error'] = "Invalid Email Address";
          header('location: Registration.php?message=Invalid Email Address');
      } 
    



//$sql="INSERT INTO user (fname,lname,username,email,password,created_at) VALUES ('$fname','$lname','$user_name','$email','".md5($_POST['password'])."','".date("Y-m-d H:i:s")."')";

//$result = mysqli_query($con,$sql);

}

?> 