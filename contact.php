<?php
include('connection.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$detail=$_POST['comment'];

$sql="INSERT INTO user(name,address,contact,detail) values('$name','$address','$contact','$detail')";

$result=mysqli_query($conn,$sql);

if($result){
	header("location:index.php");
}else{
	echo"error";
}
}
?>