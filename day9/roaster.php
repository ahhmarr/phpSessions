<html>
	<head>
		<style type="text/css">
			.roaster {
				display: inline-block;
				padding:10px;
				font-size:22px;
				background-color: #B1E6C9;
				margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<?php 

           for($x=1;$x<=10;$x++)
           {
           		echo "<span class='roaster'>5 X $x =".(5*$x)."</span><br>";
           }
		 ?>	
	</body>
</html>