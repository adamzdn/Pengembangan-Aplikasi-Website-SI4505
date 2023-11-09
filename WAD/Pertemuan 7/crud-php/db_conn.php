<?php  

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "wad_week7";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}