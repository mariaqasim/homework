<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP arrays </title>
</head>
<body>
	
	<h1 style="font-family: satisfy;">PHP Associative Array</h1>

	<?php

		$age = array ("Peter" => "30" , "Ben" => "23" , "Joe" => "34" , "Alex" => "67");

		echo "Peter is " . $age['Peter'] . " years old." . "<br>";

		echo "Ben is " . $age['Ben'] . " years old." . "<br>";
		echo "Joe is " . $age['Joe'] . " years old." . "<br>";
		echo "Alex is " . $age['Alex'] . " years old." . "<br>";

	?>

</body>
</html>