<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax example</title>
	<script type="text/javascript">
	window.onload=function()
	{
		var button=document.querySelector("#load");
		button.addEventListener("click",function()
		{
			//create ajax object
			document.querySelector("#reponseText").innerHTML='<img src="loading.gif" >';

			try{
				var ajx=new XMLHttpRequest();
			}
			catch(e)
			{
				var ajx=new ActiveXObject("Microsoft.XmlHTTP");
			}
			ajx.open("GET","process.php?action=1",true);
			ajx.send();
			ajx.onreadystatechange=function()
			{
				if(ajx.readyState==4 && ajx.status==200)
				{
					var resp=(ajx.responseText);
					document.querySelector("#reponseText").innerHTML=resp;
				}	
			};
		});
		

	};
	</script>
</head>
<body>
	<div id="reponseText">this will change after ajx call</div>
	<input type="button" value="load content" id="load" >
</body>
</html>