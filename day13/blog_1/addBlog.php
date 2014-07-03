<?php 
include_once '../db_managment/connect.php';
$title=$_POST['title'];
$content=$_POST['content'];
$query="insert into blogs (title,content,created_at) values ('$title','$content',NOW()) ";
$res=mysqli_query($con,$query);
header("location:index.php");
 ?>