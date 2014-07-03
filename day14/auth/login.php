<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authentication</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<h2>register a new user</h2>
	<form action="authUser.php" method="post">
		
		
		<p>
			<label for="username">username</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label for="password">password</label>
			<input type="password" name="password" id="password">
		</p>
		<p>
			<input type="submit" value="login">
		</p>

	</form>
</body>
</html>