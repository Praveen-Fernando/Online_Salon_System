<?php
    require 'db_connect.php';

   
 $mail = $_SERVER['QUERY_STRING'];
   
 $query = "SELECT * Firstproject WHERE email = '$mail'";

  
  $result= mysql_query($query);

    if(!$result){
        die(mysql_error());
  
  }

    $row = mysql_fetch_array($result);

  
  mysql_close()

;
?>



<!DOCTYPE html>

<html>

<head>

</head>

<body>



<form name="myForm" method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>" >
   
 <table border = "5px" width="1500px" height="500px">


        <tr>
      
      <td>First name :</td>
       
     <td><input type="text" name="Fname" value = "<?php echo $row[0]; ?>"> </td>

        </tr>

    
    <tr>
            <td>First Name :</td>
      
      <td><input type="text" name="LName" placeholder="Huawei Nova 2i" value="<?php echo $row[1]; ?>" > </td>

    
    </tr>

        <tr>
            <td>Item Type :</td>
      
      <td>
                <select list="type" name="type" value="<?php echo $row[2]; ?>">
            </td>



     
   </tr>

        <tr>
            <td>Item Brand :</td>
            <td>
          
      <select list="brand" name="brand" value="<?php echo $row[3];?>">
            </td>




            </td>

     
   </tr>

        <tr>
            <td>Item Price :</td>
      
      <td><input type="text" name="iPrice" value="<?php echo $row[4]; ?>" > </td>


        </tr>




    
    <tr>
            <td>Item description :</td>
       
     <td><input type="text" value="<?php echo $row[5]; ?>"></textarea> </td>


    
    </tr>

        <tr>
         
   <td> <input type="submit" name="update" value="Update"></td>
       
     <td> <input type="reset" name="reset" value="Reset"></td>
        </tr>

  
  </table>


</body>

</html>


<?php
   
     $iID = $_POST["itemID"];
    
    $name = $_POST["iName"];
    
    $iType = $_POST["type"];
    
    $iBrand = $_POST["brand"];
    
    $price = $_POST["iPrice"];
    
    $desc = $_POST["description"];

  
     if(isset($_POST["update"])) {
      
     $query1 = "UPDATE Products SET Item_Name = '$name', Item_Type='$iType', Item_Brand = '$iBrand', Item_Price = '$price', Description = '$_desc' where Item_ ID = '$iID'";

           $result1 = mysql_query($query1);

           if (!$result1) {
               die(mysql_error());
           } else {
               echo "<br>";
               echo "Selected Student Deatils Updated";
           }
       }

        mysql_close();
?>

