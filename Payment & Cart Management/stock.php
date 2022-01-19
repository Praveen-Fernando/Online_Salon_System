<?php
$servername="localhost";
$username="root";
$password="";
$dbname="onlinesalon";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}
		

if(isset($_POST['sub'])){
	if(!empty($_POST['id']) && !empty($_POST['pname']) && !empty($_POST['qnt']) && !empty($_POST['price'])){
	$id=$_POST["id"];
	$pname=$_POST["pname"];
	$qnt=$_POST["qnt"];
	$price=$_POST["price"];
	$cat=$_POST["cat"];
//Upload part
    
    $ch="SELECT id FROM stock ";
    $result = $conn->query($ch);
   

    if($result->num_rows >= 0){
    	while($row = $result->fetch_assoc()){
    		if($id ==$row["id"]){
    			echo "product id Is exsist";
    			exit;
    		}
    	}
    
 

	$sql=" INSERT INTO stock (id,name,qnt,price,category) VALUES ('$id','$pname','$qnt','$price','$cat') ";

	if ($conn->query($sql)===TRUE){
		echo "Insert Succesfully";
	}

	else{
		echo "Error";
	}
    }
	$conn->close();
}else{
	echo "Input all details";
}


}
// end of upload part



//START DELET PART
if (isset($_POST['del']) && !empty($_POST['id']) && !empty($_POST['pname'])) {
	$id=$_POST["id"];
	$pname=$_POST["pname"];
	$qnt=$_POST["qnt"];
	$price=$_POST["price"];
	$cat=$_POST["cat"];
	
	
	$del="DELETE FROM stock WHERE id=$id AND name='$pname' AND qnt=$qnt AND price=$price AND category='$cat'  ";

	if($conn->query($del)===TRUE){
		echo "Record delete Succesfully";
	}else{
		echo "ERROR DELETING";
	}
	$conn->close();
}
//end delete part



//start update part
if (isset($_POST['change']) && !empty($_POST['id']) && !empty($_POST['pname'])) {
	$id=$_POST["id"];
	$pname=$_POST["pname"];
	$qnt=$_POST["qnt"];
	$price=$_POST["price"];
	$cat=$_POST["cat"];

	$up="UPDATE stock SET category='$cat',price='$price',qnt='$qnt' where id=$id AND name='$pname' ";
     if($conn->query($up)===TRUE){
		echo "Record update Succesfully";
	}else{
		echo "ERROR UPdatING";
	}
	$conn->close();
}
//end update part


?>
