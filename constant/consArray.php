<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP7 Constant Arrays</title>
</head>
<body>

	<h1 style="font-family: sans-serif;">PHP7 Constant Arrays</h1>

	<?php

	define("clothingBrands", [
		"Bonanza",
		"Khaadi",
		"Nishat linen",
		"Alkaram Studio",
		"LimeLight"
	]);

	echo clothingBrands[4];


	?>
	
</body>
</html>