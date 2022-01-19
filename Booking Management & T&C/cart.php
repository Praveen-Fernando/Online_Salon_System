<!doctype html>
<html>
  <head>
    <title>Bridal Packages</title> 
    <link rel="stylesheet" type="text/css" href="stylesheet/cart.css">


<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>


 </head>

<body>
	<header>
	<span><img style="width: 300px;float: left;padding-left: 30px;padding-top: 20px;" src="img/logo.png" class="logo"></span>
  <span><font size="10" ><b><u style="margin-left: -175px;"> Beauty Mark </u></b><br><small><small><small></small><small style="margin-left: -65px;">Care About Your Beauty</small></small></small></font></span>
         
 <a href="#" id="sign-out"><u>Sign Out</u></a></button>
                 <img id="profile" src="img/avatar.png">

</header>
         
   <hr>  

<div class="header">
	 <nav>
        <ul>
          <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Home%20page/">Home</a></li>    
          <li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Contact%20us.html">Contact Us</a>    
          </li><li><a href="http://localhost/IWT/web%20pages/Praveen/IWT/Registration.php">Register</a></li>            
          <li><a href="#">Our Services</a></li>
          <li><a href="http://localhost/IWT/web%20pages/givi/aboutus.html">About Us</a></li>
</ul>
</div>
<form name="myForm" action="bridal.php"
onsubmit="return validateForm()" method="post" style="position: absolute;left: 1245px;top: 175px;">
<input type="text" name="fname">
<input type="submit" value="Search">
</form>
        
      </nav>

<hr>

 <div id="left-pane" class="side-bar">
    	<ul>
    		<li style="margin-top: 20px;" id="categories">Categories</a></li>
    			<li style="margin-top: 18px;"><a href="#">Hair Treatments</a></li>
    			<li style="margin-top: 18px;"><a href="#">Skin Treatments</a></li>
    			<li style="margin-top: 18px;"><a href="#">Body Treatments</a></li>
    			<li style="margin-top: 18px;"><a href="http://localhost/IWT/web%20pages/givi/bridal.html">Bridal packages</a></li>
    			<li><img style="width: 180px; padding-top: 50px;margin-left: 11px;" src="img/cal.png"></li>
   	    </ul>
 </div>
    



<div class="cartz">
	<b style="margin-left: 105px;"> Shopping Cart</b>
</div>


<?php

require 'config.php';

$sql="SELECT * FROM `cart`";

$result=mysqli_query($con,$sql);

?>

<div style="float: left; margin-left: 500px;">
<table  cellpadding="100" class="table" style="position: absolute; bottom: 265px;">
   <tr>
      <th>Item Number</th>
      <th>Description</th>
    </tr>
    <?php 
    if ($result->num_rows > 0) {
      $x=1;
    while($row = $result->fetch_assoc())
    {
      
        print "<tr> <td>";
        echo $x; 
        print "</td>";

        print "<td>";
        echo $row["Item_name"]; 
        print "</td> </tr>";

        $x++;
    }
  }

  else
  {
        print "<tr> <td>";
        echo "No items to display"; 
        print "</td> </tr>";
  }

    ?>
</table>
</div>
<form method="POST">
<input class="delete" type="submit" value="cancel" name="delete" style = "position: absolute; left: 545px; bottom: 120px;">

</form>
<a href="bridal.html"><input class="back" type="submit" value="Go Back" style="position: absolute; left: 788px; bottom: 120px; "></a>








<?php
require 'config.php';

if(isset($_POST['delete']))
{
  $sql="DELETE FROM cart";
  if(mysqli_query($con,$sql))
    {
      header('location:cart.php');
    }
}
mysqli_close($con);
?>



</div>
<div class="footer">
<footer>
    
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
              </div>
    
</footer>
</div>

</body>
</html>