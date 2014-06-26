<?php session_start ();
$username=$_GET['user'];
$password=$_GET['password'];
if($username=="admin" && $password=="123456")
{
	$_SESSION['username']=$username;
	$_SESSION['isAllowed']=true;
	header("location:adminSection.php");
}
else
{
header("location:login.php");

}