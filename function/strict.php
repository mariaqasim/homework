<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function</title>
</head>
<body>

	<h1 style="font-family: satisfy;">PHP is a Loosely Typed Language</h1>

	<?php 

		function addNumbers(int $a, int $b) {
   		 return $a + $b;
			}
		echo addNumbers(5, "5 days"); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown
	?>

	
</body>
</html>