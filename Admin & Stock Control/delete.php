


<?php
    require 'db_connect.php';

    $item_delete = $_SERVER['QUERY_STRING'];

    $query = "DELETE from Products WHERE email = '$item_delete'";
    $result = mysql_query($query);

    if(!result){
        die(mysql_error());
    }
    else
    {
        echo "<br>";
        echo "<hr>";
        echo "<b>"."selected item detail deleted"."</b>";
    }

    mysql_close();
    ?>


