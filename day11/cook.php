<?php 
$cook=$_GET['cookie'];
setcookie("fontSize",$cook,time()+60*60*24*30);
header("location:setCookie.php");
 ?>