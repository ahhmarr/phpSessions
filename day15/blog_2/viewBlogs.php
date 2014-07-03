<?php include_once '../db_managment/connect.php'; ?>

<table border="1" width="100%">
	<tr>
		<th>SNO</th>
		<th>TITLE</th>
		<th>CONTENT</th>
		<th>CREATED AT</th>
	</tr>


<?php
$query="select * from blogs";
$res=mysqli_query($con,$query);
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
	echo "<a href='index.php'>go back </a>";