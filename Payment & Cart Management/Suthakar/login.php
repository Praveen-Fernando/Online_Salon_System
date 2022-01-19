<?php

session_start();

?>


<html>

<head>

<title>Live Art</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>



#image{

float:left;

margin-left:10px;

margin-top:10px;

width:100px;

height:50px;

}

.search{

    float: left;

    padding: 5px;

    margin-top: 25px;

    margin-left:20px;

    font-size: 17px;

    width:300px;

}

.h2{

   align:left;

    margin-top: 45px;

    margin-left:17px;



   

}

.user_image{

     margin-right:5px;

     float:right;

     width:100px;

     height:50px;

}

.link{

    float:right;

    margin-right:20px;

    

    padding:5px;

}

.link_cart{

    float:right;

    margin-right:40px;

    margin-top:10px;

   

}

.link_cart a{

     text-decoration:none;

}

.nav {

  

  border-width:1px 0;

  list-style:none;

  margin:0px;

  padding:0;

  text-align:center; 

 

}



.nav li {

  display:inline;

}



.nav a {

  display:inline-block;

  padding:3px;

  text-decoration:none;

  color:black;

}

.nav a:hover{

     text-decoration:underline;

}

#hr{

  height:3px;

  background-color: black;

  border:none;

}

.footer{

   position:relative;

   bottom:-130px;

   border-top-style:solid;

   width:100%;

}

.align_footer{

      float:left;

      margin-left: -150px;

}

.address{

    border: 1px solid black;

    width:240px;

    margin-top:10px;

    margin-left:20px;

    padding:10px;

}

.tel{

    border: 1px solid black;

    width:270px;

    margin-top:10px;

    margin-left:150px;

    margin-bottom:5px;

    padding:5px;

}

.fa {

  padding: 10px;

  font-size: 10px;

  width: 10px;

  text-decoration:none;

}



.fa-facebook {

  background: #3B5998;

  color: white;

}

.fa-twitter {

  background: #55ACEE;

  color: white;

}

.fa-google {

  background: #dd4b39;

  color: white;

}

.fa-linkedin {

  background: #007bb5;

  color: white;

}

.fa-youtube {

  background: #bb0000;

  color: white;

}

.social_medias{

   float:right;

   margin-top:30px;

   margin-right:-120px;

}

.follow{

   margin-right:40px;

   margin-top:5px;

}

.sidebar{

   float:left;

}

.vertical{

    border-left:3px solid black;

    position:absolute;

    height:697px;

    float:left;

    margin-left:200px;

    margin-top:-547px;

}

html *{

    font-family:sans-serif;

}

.signout{

    background-color: #4CAF50;

    border:none;

    color: white;

    padding: 15px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 16px;

    margin: 10px 49px;

    border-radius: 5px;

    width:110;

}

.button{

    background-color: white;

    border: none;

    color: black;

    padding: 8px 5px;

    text-align: left;

    text-decoration: none;

    display: inline-block;

    font-size: 16px;

    cursor: pointer;

    width:125;

    height:30;

}

.button:hover {

    background-color: #e6e6e6;

}

table, th, td {

    border: 1px solid black;

    border-collapse: collapse;

}

th, td {

    padding: 5px;

}

th {

    text-align: left;

}

.icon{

    border:1px solid black;

    width:250;

    height:200;

}

.icon:hover{

    cursor:pointer;

    background-color: #e6e6e6;

}

.social a{

    display:table;

    padding:8px;

    margin:-5 0 0 40;

}

ul.list{

    list-style-type: none;

    

}

input[type=text], select{

		width: 200px;

		height: 10px;

		padding: 20px;

		border-radius: 10px;

	}



input[type=password], select{

		width: 200px;

		height: 10px;

		padding: 20px;

		border-radius: 10px;

	}



input[type=submit], select{

		width: 100px;

		height: 10px;

		padding: 20px;

		border-radius: 10px;

		background-color:black;

		color:red;

	}



.login {

    background-color:green;

    color: white;

    padding: 16px 20px;

    margin: 8px 0;

    border: none;

    cursor: pointer;

    width: 27%;

    opacity: 0.9;

     margin-right:500px;

     float:right;

}

</style>

<!-- <script>

function validateEmail(emailField){

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;



        if (reg.test(emailField.value) == false) 

        {

            alert('Invalid Email Address');

            return false;

        }



        return true;



}

</script> -->

</head>



<header style="color:black;background-color:grey;">

<img src="#" alt="Insert Image" id="image">

<input type="text" placeholder="Search,artists,galleries.." class="search"><br>

<img src="#" alt="user" class="user_image">

<div class="link">

<a href="#">Log in</a>

</div>

<div class="link_cart">

<pre>

<a href="#">Shopping Cart</a>  <a href="#">Add to Cart</a>  <a href="#">$ USD</a>

</pre>

</div>

<h2 class="h2">Live Art</h2>



</header>

<hr id="hr">

<ul class="nav">

  <li><a class="active" href="#home">Home</a></li>

  <li><a  href="#artists">Artists</a></li>

  <li><a href="#formatsandprices">Formats and Prices</a></li>

  <li><a href="#auctions">Auctions</a></li>

  <li><a href="#shipping">Shipping</a></li>

  <li><a href="#contactus">Contact Us</a></li>

  <li><a href="#feedback">Feedback</a></li>

</ul>

<hr id="hr">







<body align="center">

<form name="form1" action="log_process.php" method="POST">

<h1 align="center"><font color="darkblue">Log in</font></h1>

<input type="text" name="username" placeholder="Enter your username" onblur="validateEmail(this);" >

<br>

<br>

<br>

<input type="password" name="password" placeholder="Enter your password" >

<br>

<br>

 

<input type="checkbox" name="remember" value="Remember Password"> Remember Password



<br>

 <button type="add" value="submit" class="login" name="sub">Log In</button></div>

</form>

<a href="../Ranul/Registration.php"><button type="add" value="submit" class="login">Create an account for free</button></a>




<footer class="footer">

<div class="align_footer">

<div class="tel">

<b>Address: 77, Lorenz Road, Col-04</b>

</div>

<div class="tel">

<b>TEL:0112888888 FAX:0112887777</b>

</div>

</div>

<p class="follow" style="float:right;"><b>Follow Us On</b></p>

<div class="social_medias">

<a href="https://www.facebook.com/LiveArt" class="fa fa-facebook"></a>

<a href="https://www.twitter.com/LiveArt" class="fa fa-twitter"></a>

<a href="https://www.googleplus.com/LiveArt" class="fa fa-google"></a>

<a href="https://www.linkedin.com/LiveArt" class="fa fa-linkedin"></a>

<a href="https://www.youtibe.com/LiveArt" class="fa fa-youtube"></a>

</div>

</footer>

</body>

</html>