<!DOCTYPE html>
<html lang="en">

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" type="text/css">


<title>Magical Emporium </title>
</head>
<body>



<h1>Login</h1>
<form action ="authenticate.php" method = "get">
Email: <input type="text" name="email">
<br>
Password:<input type="password" name="password">
<br>
<input type ="submit" value ="Login" >
<div id='info'>This sentence will be replaced</div>
<script>

// The following line has been changed to a simpler URL that
// will quickly display from within the div it is placed
params = "url=en.wikipedia.org/wiki/Harry_Potter"

request = new ajaxRequest()
request.open("POST", "urlpost.php", true)
request.setRequestHeader("Content-type",
	"application/x-www-form-urlencoded")
request.setRequestHeader("Content-length", params.length)
request.setRequestHeader("Connection", "close")
	
request.onreadystatechange = function()
{
	if (this.readyState == 4)
	{
		if (this.status == 200)
		{
			if (this.responseText != null)
			{
				document.getElementById('info').innerHTML =
					this.responseText
			}
			else alert("Ajax error: No data received")
		}
		else alert( "Ajax error: " + this.statusText)
	}
}

request.send(params)

function ajaxRequest()
{
	try
	{
		var request = new XMLHttpRequest()
	}
	catch(e1)
	{
		try
		{
			request = new ActiveXObject("Msxml2.XMLHTTP")
		}
		catch(e2)
		{
			try
			{
				request = new ActiveXObject("Microsoft.XMLHTTP")
			}
			catch(e3)
			{
				request = false
			}
		}
	}
	return request
}
</script></body></html>
