<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Private Class</title>
</head>
<body>
	
	<h1 style="font-family: satisfy;">Private Class</h1>
	

	<?php

		class Car
		{
			private $model;
			public function setModel($model)
			{
				$this->model = $model;
			}

			public function getModel()
			{
				return "The car Model is " .$this->model;
			}
		}

		$mercedes = new Car();
		$mercedes-> setModel ("Mercedes");
		echo $mercedes-> getModel();

	?>

	
</body>
</html>