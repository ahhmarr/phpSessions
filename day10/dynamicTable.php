<?php 

function dynamic_table($rows,$cols,$value)
{
	echo "no of rows to be printed $rows <br> 
	no of cols to be used $cols <br> 
	and the value to be printed  $value";
	echo "<table border='1'>";
	for($x=1;$x<=$rows;$x++)
	{
		echo "<tr>";
		for($y=1;$y<=$cols;$y++)
		{  
		   echo "<td>$value</td>";	

		}
		echo "</tr>";
	}
	echo "</table>";
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>dynamic table example</title>
 </head>
 <body>
 	<div id="content">
 		<?php dynamic_table(10,10,"dummy_text") ?>
 	</div>
 </body>
 </html>