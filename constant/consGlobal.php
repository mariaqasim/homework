<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constants are Global</title>
</head>
<body>

	<h1 style="font-family: satisfy;">Constants are Global</h1>
	
	<?php

	define("Greeting", "Assalam-o-Alaikum!");

	function myTest()
	{
		echo Greeting;
	}

	myTest();


	?>
</body>
</html>
		