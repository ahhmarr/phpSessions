<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax example</title>
	<script type="text/javascript">
	// for post 
	//xmlhttp.setRequestHeader("Content-type",
		//"application/x-www-form-urlencoded");
	function getObject()
	{
		try {
			var x=new XMLHttpRequest();
		}
		catch(e)
		{
			var x=new ActiveXObject("Microsoft.XMLHTTP");
		}
		return x;
	}
	window.onload=function()
	{
		var ref=document.querySelector("#loadIT");
		ref.addEventListener("click",function()
		{
			document.querySelector("#response").innerHTML='<img src="loading.gif">';
			var obj=getObject();
			obj.open("GET","test.txt",true);
			obj.onreadystatechange=function()
			{
				
				if(obj.readyState==4 && obj.status==200)
				{
					document.querySelector("#response").innerHTML=obj.responseText;
				}
			};
			obj.send();

		});
	}
	</script>
</head>
<body>
	<input type="button" value="load content through Ajax" id="loadIT">
	<div id="response"></div>
</body>
</html>