<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inheritance</title>
</head>
<body>

	<?php

	class Car {

		private $model;

		public function setModel($model)
		{
			$this->model = $model;
		}

		public function hello()
		{
			return "beep! I am a <i>" .$this->model . "</i><br/>";
		}
	}

	class SportsCar extends Car {

	}

	$sportsCar1 = new SportsCar();

	$sportsCar1 ->setModel('Mercedes Benz');

	echo $sportsCar1 -> hello(); 





	?>
	
</body>
</html>