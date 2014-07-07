<?php 
require 'connect.php';
$action=$_GET['action'];
switch($action)
{
	case '1' : first();
	break;
	case '2' : second();
	break;
	default : def();
}
function first()
{
	global $con;
	$query="select * from blogs ";
	$result=mysqli_query($con,$query);
	echo "<table border='1'>";
	while($ans=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $ans['id'] ?></td>
			<td><?php echo $ans['title'] ?></td>
			<td><?php echo $ans['content'] ?></td>
		</tr>

		<?php
	}
	echo "</table>";
}
function second()
{
	echo "<h1>second function called</h1>";
}
function def()
{
	echo "default fn called";
}
