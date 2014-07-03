<?php 
session_start();
if(isset($_GET['fontSize']))
{
	$_SESSION['fontSize']=$_GET['fontSize'];
	header("location:index.php");
}


 ?>