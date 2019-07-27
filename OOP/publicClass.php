<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Public class</title>
</head>
<body>

	<h1 style="font-family: satisfy;">Public Class</h1>
	<?php

		class Car
		{
			public $model;
			public function getModel()
			{
				return "The car model is " .$this->model;
			}
		}

		$mercedes = new Car();
		$mercedes-> model = "Mercedes";
		echo $mercedes-> getModel();

	?>
	
</body>
</html>