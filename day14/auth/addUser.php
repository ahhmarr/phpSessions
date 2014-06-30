<?php 
require_once 'connect.php';
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$dob=$_POST['dob'];
	$name=$_POST['name'];
	$query="insert into users (username,password,name,dob,created_at) 
		values ('$username','$password','$name','$dob',NOW()) ";
	// echo $query;exit;
	$res=mysqli_query($con,$query);
	
}
// header("location:login.php");

 ?>