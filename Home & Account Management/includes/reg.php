<?php
if (isset($_POST['submit']) && ! empty($_POST['fname']) && ! empty($_POST['lname']) && ! empty($_POST['email']) && ! empty($_POST['password'])){
  require_once('includes/config.php');
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pw=$_POST['password'];
  $rpw=$_POST['rpassword'];
echo $rpw;
echo $pw;
   $sq = "SELECT email FROM acc";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($email==$row["email"])
        {//echo "Email used";
        	header("Location:sign.php");
        	exit;
        }
 }


  
    if($pw==$rpw){
  	$sql = "INSERT INTO acc (fname,lname,email,pw) VALUES ('$fname','$lname','$email','$pw')";

         if ($conn->query($sql) === TRUE) {
         //echo $fname;
        // echo $pw;
        // echo $rpw;
         header("Location:track.php");
        exit;
         } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
         }



  }else{
  	echo "Two password not match";
  }


}
}else{
	echo "Input All Details ";
}
?>