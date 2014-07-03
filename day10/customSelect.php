<?php 

function custom_select($init,$final,$value)
{
	
	echo "<select>";
		echo "<option>$value</option>";
	for($x=$init;$x<=$final;$x++)
	{
			echo "<option>$x</option>";

	}
	echo "</select>";
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
 		<?php custom_select(1,31,"Day") ?>
 		<?php custom_select(1,12,"Month") ?>
 		<?php custom_select(1920,2014,"Year") ?>
 	</div>
 </body>
 </html>