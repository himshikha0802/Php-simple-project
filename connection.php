<?php
$servername="localhost";
$username="root";
$password="";
$db="bsphp";

$conn=mysqli_connect($servername,$username,$password,$db);

If(!$conn){
	echo "Connection failed".mysqli_error($conn);
}
?>