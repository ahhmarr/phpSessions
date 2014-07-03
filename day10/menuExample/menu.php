<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu by list style</title>
	<style>
		ul {
			list-style-type: none;
		}
		li {
			background-color: red;
			float:left;
			padding:10px;
			margin-left:40px;
			width:100px;
			text-align: center;
			text-transform: capitalize;
			color:#fff;
			font-family: "arial";
			opacity: .5;
			border-radius: 5px;
			box-shadow: 1px 2px 3px #ccc;
		}
		li:hover{
			/*background-color: #4DD627;*/
			cursor: pointer;
			opacity: 1;
		}
		input[type="radio"]{
			display:none;
		}
		label{
			display:inline;
			margin-top: 100px;
			padding: 10px;
			border:2px solid #fff;
			background-color: #FFFFCA;
			cursor: pointer;
		}
		input[type="radio"]:checked+label{
			background-color:#5BC9FE;

		}
	</style>
</head>
<body>
	<ul>
		<li><a href="home.php">home</a></li>
		<li><a href="about.php">about us</a></li>
		<li><a href="service.php">services</a></li>
		<li><a href="contact.php">contact us</a></li>
		
		
	</ul>
	<br><br>
	
