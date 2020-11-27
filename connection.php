
<?php


$hostname = "localhost";
$username = "root";
$password = "" ;
$dbname = "cryptonite";

//making the connection to mysql

$dbc = mysqli_connect($host=127.0.0.1, $username, $password, $dbname) OR die("could not connect to data, ERROR ".mysqli_connect_error());

//set encoding

mysqli_set_charset($dbc, "utf8");

?>