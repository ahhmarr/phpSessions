<?php 
$con=mysqli_connect("localhost","root","123456","demo_blog");
$res=mysqli_query($con,"select * from blogs");
?>

<table border="1" width="100%">
	<tr>
		<th>SNO</th>
		<th>TITLE</th>
		<th>CONTENT</th>
		<th>CREATED AT</th>
	</tr>


<?php
$x=0;
while($ans=mysqli_fetch_assoc($res))
{
	?>
	<tr>
		<td><?php echo ++$x ?></td>
		<td><?php echo $ans['title'] ?></td>
		<td><?php echo $ans['content'] ?></td>
		<td><?php echo $ans['created_at'] ?></td>
	</tr>

	<?php
}
	echo "</table>";

//inserting records
$query="insert into blogs (title,content,created_at) values ('inserted title','inserted content',NOW()) ";
$res=mysqli_query($con,$query);

//updating record
$query="update blogs set title='updated title' where id='3' or id='4' or id='5' ";
$res=mysqli_query($con,$query);

//deleting record
$query="delete from blogs where id='4'";
$res=mysqli_query($con,$query);

 ?>
