<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shiats blog</title>
</head>
<style type="text/css">
	label{
		display: inline-block;
		width:300px;
		font-size: 150%;
	}
	input,textarea{
		width:300px;
		height: 30px;
		padding:5px;
	}
	textarea{
		height:200px;
	}
</style>
<body>
<h1>Create a New Blog</h1>
	<form action="addBlog.php" method="post">
		<p>
			<label for="title">Blog Title</label>
			<input type="text" name="title" id="title" placeholder="blog title">
		</p>
		<p>
			<label for="content">content</label>
			<textarea  name="content" id="content"></textarea>
		</p>
		<p><label for=""></label>
			<input type="submit" value="Create Blog">
		</p>
	</form>
	<a href="viewBlogs.php">View All Blogs</a>
</body>
</html>