<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For Loop</title>
</head>
<body>

	<h1 style="font-family: satisfy;">For Loop On array</h1>

	<?php

	$colors = ["red", "green", "blue", "yellow","white","black","gray","pink"];

	$length = count($colors);

	for ($i = 0; $i <= $length ; $i++) {

		echo "$colors[$i] <br>";
		
	}



	?>
	
</body>
</html>