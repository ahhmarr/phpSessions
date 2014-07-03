<?php 
$ans=["NO!!","ARE YOU KIDDING ME","SURE","WHY NOT","NEVER","MAY BE","I DON'T CARE","SERIOUSLY! DON'T YOU HAVE ANYTHING MORE TO DO"];
shuffle($ans);
$ser=serialize($ans);
$unser=unserialize($ser);
var_dump($unser);exit;
if(isset($_GET['question']))
{
	$question=$_GET['question'];
	echo "YOUR QUESTION : <strong>$question</strong> <br/>";
	echo "<center>THE ORACLE HAS  CALCULATED AND HAS COME UP WITH THIS ANSWER </center><br/><br><br>";
	echo "<div>".$ans[0]."</div>";

}

 ?>