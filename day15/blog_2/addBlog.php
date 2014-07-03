<?php 
include_once '../db_managment/connect.php';
// get the temp location of the uploaded file
// var_dump($_FILES);exit;
$old=$_FILES['img']['tmp_name'];
$name=uniqid().$_FILES['img']['name'];
$size=$_FILES['img']['size']/1024; //size in KB
$type=$_FILES['img']['type']; //size in KB
echo "size of the file = $size";
if($size>300)
{
	echo "file exceeds limit of 300 KB ...exiting.";exit;
}
if($type!="image/png")
{
	echo "file should be only in png format..exiting...";exit;
}
// echo $name;exit;
//transferring to img
move_uploaded_file($old,"img/$name");
$title=$_POST['title'];
$content=$_POST['content'];
$query="insert into blogs (title,content,created_at) values ('$title','$content',NOW()) ";
$res=mysqli_query($con,$query);
// header("location:index.php");
 ?>