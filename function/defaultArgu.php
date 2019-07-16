<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function</title>
</head>
<body>

	<h1 style="font-family: satisfy;">PHP default Argument Value</h1>

	<?php

		function setHeight(int $minHeight = 50) {

		echo "The height is : $minHeight <br>";
	}

	setHeight(350);
	setHeight(); //use the default value
	setHeight(145);
	setHeight(123);


	?>
	
</body>
</html>