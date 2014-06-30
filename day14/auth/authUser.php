<?php 
session_start();
require_once 'connect.php';
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$query="select * from users where username='$username' 
			and password='$password'";
	$res=mysqli_query($con,$query);
	$row=mysqli_num_rows($res);
	if($row)
	{
		$_SESSION['isLogin']=true;
		$_SESSION['username']=$username;
		header("location:res/index.php");
		echo "successful";
	}
	else
	{
		header("location:login.php");
		echo "invalid credential";
	}
}