<?php 

$host = "localhost";
$username = "root";
$password = "";
$database_name = "apple_icloud";

$vtconn = mysqli_connect($host, $username, $password, $database_name);
mysqli_set_charset($vtconn, "UTF8");


?>