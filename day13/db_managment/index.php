<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add blog</title>
</head>
<body>
	<form action="addBlog.php" method="post">
		<p>
			<label for="title">Blog Title</label>
			<input type="text" name="title" id="title" placeholder="blog title">
		</p>
		<p>
			<label for="content">content</label>
			<input type="text" name="content" id="content">
		</p>
		<p>
			<input type="submit" value="Create Blog">
		</p>
	</form>
</body>
</html>