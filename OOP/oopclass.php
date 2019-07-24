<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Object Oriented Programming</title>
</head>
<body>

	<h1 style="font-family: satisfy;"> OOP Class</h1>
	
	<?php

	class Car 
	{

		public $brand;
		public $color = "black";
		public $hasSunRoof = true;
		public $remoteKeylessEntry = true;
		public $gpsNavigationSystem = false;

	public function hello()

		{
			return "beep";
		}

	}

	$landRover = new Car();
	$bmw = new Car();
	$mercedes = new Car();
	$ferrari = new Car();
	$audi = new Car();

	echo $landRover -> color;
	echo "<br/>";

	echo $mercedes -> brand = "Mercedes Benz";
	echo "<br/>";

	echo $audi -> hello();
	echo "<br/>";

	echo $audi -> remoteKeylessEntry;
	echo '<br/>';

	echo $ferrari -> hasSunRoof;
	echo "<br/>";

	echo $bmw -> gpsNavigationSystem;
	echo "<br/>";

	echo $mercedes -> color = "blue";
	echo "<br/>";
	?>

</body>
</html>