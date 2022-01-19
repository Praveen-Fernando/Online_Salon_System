<?php
require 'db_connect.php'
?>
<?php
$result = mysql_query("SELECT * FROM firstproject");
?>

<table border="'1">
    <h2> FeedBack Details</h2>

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Experience</th>
        <th>Rate for the Knowledge of the assisatant</th>
        <th>Clean of the store</th>
        <th>Treatment</th>
        <th>Treatment experience</th>
        <th>Treatment suggestion</th>
        <th>Comments</th>
	<th></th>
        <th></th>
    </tr>

    <?php
    while($row = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['first name'];
        echo "<td>".$row['last name'];
        echo "<td>".$row['email'];
        echo "<td>".$row['2'];
        echo "<td>".$row['3'];
        echo "<td>".$row['4'];
        echo "<td>".$row['5'];
        echo "<td>".$row['6'];
        echo "<td>".$row['7 suggestion'];
	echo "<td>"<a href="edit.php">EDIT</a>;
        echo "<td>"<a href="delete.php">DELETE</a>;


        echo "</tr>";

    }

    echo "</table>";
    echo "<br>";

    $num = mysql_num_rows($result);
    echo "Number Of Records :".$num;

    mysql_close();
    ?>

