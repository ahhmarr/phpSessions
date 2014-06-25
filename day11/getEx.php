<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get example</title>
</head>
<body>
	<form action="process.php" method="post">
		<p>
			<label for="first_name">first name</label>
			<input type="text" name="first_name" id="first_name">
		</p>
		<p>
			<label for="l_name">last name</label>
			<input type="text" name="l_name" id="l_name">
		</p>
		<p>
			<label for="age">age</label>
			<input type="number" name="age" id="age">
		</p>
		<p>
			<label for="number">choose a number</label>
			<select type="text" name="number" id="number">
				<option value="1">one</option>
				<option value="2">two</option>
				<option value="3">three</option>
				<option value="4">four</option>
			</select>
		</p>
		<p>
			<input type="submit" value="send it to the server">
		</p>
	</form>
</body>
</html>