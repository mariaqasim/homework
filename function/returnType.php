<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function</title>
</head>
<body>

	<h1 style="font-family: satisfy;">PHP Return Type Declarations</h1>

	<?php 

		function addNumbers(float $a , float $b) : float {

		return $a + $b;
		

	}

		echo addNumbers(5.8 , 10.4) . "<br>";
		echo addNumbers(2.8 , 5.4) . "<br>";
		echo addNumbers(9.8 , 12.4). "<br>";

	?>
	
</body>
</html>