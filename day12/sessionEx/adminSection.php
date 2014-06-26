<?php session_start ();
	if(!isset($_SESSION['isAllowed']))
	{
		header("location:login.php");

	}
	else
	{
		echo 'welcome to Admin panel';
	}
