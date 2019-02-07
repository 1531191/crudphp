<?php

session_start();

$host="localhost";
$port=3306;

$user="root";
$password="";
$dbname="php_mysql_crud";

$con = new mysqli($host, $user, $password, $dbname, $port)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();





?>