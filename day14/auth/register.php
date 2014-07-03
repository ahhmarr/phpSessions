<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authentication</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	
</head>
<body>
	<h2>register a new user</h2>
	<form action="addUser.php" method="post">
		<p>
			<label for="name">name</label>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="dob">date of birth</label>
			<input type="text" name="dob" id="dob">
		</p>
		<p>
			<label for="username">username</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label for="password">password</label>
			<input type="password" name="password" id="password">
		</p>
		<p>
			<input type="submit" value="register">
		</p>

	</form>
</body>
</html>