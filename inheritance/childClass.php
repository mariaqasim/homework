<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parent & Child Class</title>
</head>
<body>

	<?php

	class Car {

		private $model;

		public function setModel($model)
		{
			$this->model = $model;
		}

		public function getModel()
		{
			return $this->model;
		}
	}

	class SportCar extends Car {
		private $style =" Fast and Furious";
		public function driveItWithStyle()
		{
			return "Drive a " .$this->getModel() . "<i>". $this->style . "</i>";
		}
	}

	$sportCar1 = new SportCar();
	$sportCar1-> setModel("Ferrari");
	echo $sportCar1-> driveItWithStyle();




	?>
	
</body>
</html>