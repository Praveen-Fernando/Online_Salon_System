
<?php

require 'config.php';

if(isset($_POST['add']))
{
	$type=$_POST['package'];
	
	
	$sql="INSERT INTO cart (Item_name) VALUES ('$type')";
    if(mysqli_query($con,$sql))
    {
    	header('location:cart.php');
    }
    else
    {
    	echo "Failed";
    }
}

if(isset($_POST['update']))
{
    $type=$_POST['package'];
    
    
    $sql="UPDATE `cart` SET `Item_name`='$type'";
    if(mysqli_query($con,$sql))
    {
        header('location:cart.php');
    }
    else
    {
        echo "Failed";
    }
}












mysqli_close($con);
		
?>		
	



