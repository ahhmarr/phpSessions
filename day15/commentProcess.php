<?php 

if(isset($_POST['comment']))
{
	$comment=$_POST['comment'];
	$comment=str_replace("should not","shouldn't",$comment);
	$comment=str_replace("could not","couldn't",$comment);
	$comment=str_replace("would not","wouldn't",$comment);
	$length=strlen($comment);
	if($length>250)
	{
		echo "comment exceeds 250 characters exiting";
		exit;
	}
	$comment=strtolower($comment);
	echo "final coment to be saved in the database <br>";
	echo $comment;
}


 ?>