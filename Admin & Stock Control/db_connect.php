<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pwd = "";

$mysql_db = "firstproject";

if(!mysql_connect($mysql_host, $mysql_user, $mysql_pwd) || !mysql_select_db($mysql_db)){
    die(mysql_error());
}

else{
    echo "successfully create the database";
}
?>