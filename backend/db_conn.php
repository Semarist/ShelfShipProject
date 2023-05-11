<?php

$sname= "localhost";
$unmae= "root";
$password = "S21200321";
$db_name = "shelfship";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}