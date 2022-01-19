<?php
require 'db_connect.php';
?>

<?php
$fnameErr = $lnameErr = $mailErr= "";
$fname = $lname = $mail = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["fname"])){
        $fnameErr = "First name is required";}
    else{
        $fname = test_input($_POST["fname"]);
    }

    if(empty($_POST["lname"])){
        $lnameErr = "last Name is required";}
    else{
        $lname = test_input($_POST["lname"]);
    }

    if(empty($_POST["mail"])){
        $mailErr = "email is required";}
    else{
        $mail = test_input($_POST["mail"]);
    }


}

function test_input($data){
    $data = trim($data);//remove whitespaces
    $data = stripslashes($data);//un-quotes a quoted string
    $data = htmlspecialchars($data);//convert special characters to HTML entitties
}
?>







<!doctype html>
<html>
<head>
    <title>Beauty Mark</title> <link rel="stylesheet" type="text/css" href="stylesheet/style.css">

    <div class="proPic"></div>
    <div class="header">
        <img id="logo" src="img/logo.png" alt="Beauty Mark" >
        <a href="#" id="sign-out" style="margin-right:30px;"><u>Sign in/<br>Sign Out</u></a></button>
        <img id="profile" src="img/user-p.png" alt="User Image">

        <div class="center-wrapper">
            <h1 class="center-content" style="margin-right:200px;"><u><b>Beauty Mark</a></b></u></h1>
            <h1 class="center-content" style="margin-right: 500px;">Care About Your Beauty</h1>
        </div>
    </div>

    <style>
        .error{
            color:red;
        }
    </style>

</head>


<body>
<br><br>
<div class="tab">
    <button class="tablinks" >Home</button>
    <button class="tablinks" >Contact Us</button>
    <button class="tablinks" >Register</button>
    <button class="tablinks" >Log in</button>
    <button class="tablinks" >Account</button> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <input type="text" placeholder="Search.." width=300 height=100>
</div>

<p align=left><font color=black size=6><u>Feedback Form</u></font></p>

<form name="FeedbackForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    Full Name :<br>
    <input tpye="textbox" name ="fname" size=30 placeholder="Type your First Name">  <span class="error">* required field</span>
    <br>
    <input tpye="textbox" name = "lname" size=30 placeholder="Type your Last Name">
    <span class="error">* required field</span><br> <br>

    E-Mail :  <input tpye="textbox" name="email" size=30 placeholder="Type your E-mail address">
    <span class="error">* required field</span><br><br>

    1) How was your experience :
    <!--    <span class="fa fa-star checked"></span>-->
    <!--    <span class="fa fa-star checked"></span>-->
    <!--    <span class="fa fa-star checked"></span>-->
    <!--    <span class="fa fa-star"></span>-->
    <!--    <span class="fa fa-star"></span>-->
    <br><button class="button" name="exp">Poor    </button>
    <button class="button" name="exp">statisfactry    </button>
    <button class="button" name="exp">Excellent    </button>

    <br><br><br>

    2) How would you rate the knowledge of the assistant serving you?<br>
    <button class="button" name="rate">Poor</button>
    <button class="button" name="rate">statisfactry</button>
    <button class="button" name="rate">Excellent</button><br><br>


    3) How clean is this store? <br>

    <button class="button" name="clean">Excellent</button>
    <button class="button" name="clean">Good</button>
    <button class="button" name="clean">Poor</button>
    <button class="button" name="clean">Very Poor</button>


    <br><br>
    4)What would you think about our treatment xxx?<br>
    <button class="button" name="treatment">Excellent</button>
    <button class="button" name="treatment">Good</button>
    <button class="button" name="treatment">Poor</button>
    <button class="button" name="treatment">Very Poor</button><br><br>

    5) How Would You think about our treatment experience? <br>
    <button class="button" name="treat">Excellent</button>
    <button class="button" name="treat">Good</button>
    <button class="button" name="treat">Poor</button>
    <button class="button" name="treat">Very Poor</button>
    <br><br>

    6) Are there any treatments that............. <br>
    <button class="button" name="choice">Yes</button>
    <button class="button" name="choice">NO</button><br><br>

    Write your comments and suggestions :<br><br>
    <textarea rows=6 cols=30 name="comment"></textarea><br><br>




    <p align="right">
        <button class="Submit" style="height:50px;width:200px" name="submit">Submit Now</button>

    </p>


</form>





</div>
<div class="footer">
    <div style="float: left;" id="footer-left-content">
        <span>www.BeautyMark.com</span>
        <br>
        <span style="position:absolute;left:10px;">contact: 507-334-4898<br>
         	<a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1#identifier">BeautyMark@gmail.com</a></span>
        <img style="margin-left:1300px;"src="img/payment.png" width="250px">
    </div>
</body>






<?php
    $name = $_POST["fname"];
    $lname = $_POST["lname"];
    $mail = $_POST["email"];
    $exp = $_POST["exp"];
    $rate = $_POST["rate"];
    $clean = $_POST["clean"];
    $treatment = $_POST["treatment"];
    $treat = $_POST["treat"];
    $comment = $_POST["comment"];

    $sql  = "insert into firstproject values($name, $mail, $exp, $rate, $clean, $treatment, $treat, $comment)";

if(!mysql_query($sql)){
    die('Error :'.mysql_error());
}

echo "<br>";
echo "<hr>";
echo "1 record added";

mysql_close();
?>













