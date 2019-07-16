<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function</title>
</head>
<body>

	<h1 style="font-family: satisfy;">PHP Returning Values</h1>

	<?php
	
		function sum(int $a , int $b) {

		$c = $a + $b;
		return $c;

	}

		echo "5 + 10 = " . sum( 5, 10 ) . "<br>";
		echo "4 + 29 = " . sum( 4, 29 ) . "<br>";
		echo "8 + 67 = " . sum( 8, 67 ) . "<br>";

	?>
	
</body>
</html>