<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "my_db";

$conn = mysqli_connect($sname, $uname, $password);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}