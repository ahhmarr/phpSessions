<style type="text/css">
	*{
		font-size:<?php echo isset($_COOKIE['fontSize'])?$_COOKIE['fontSize']:"10px"; ?>;
	}

</style>
<form action="cook.php">
	<select name="cookie" id="">
		<option value="">select</option>
		<option value="20px">20px</option>
		<option value="30px">30px</option>
		<option value="60px">60px</option>
	</select>
	<input type="submit" value="save">
</form>
<div>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
