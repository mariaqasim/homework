<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Object</title>
</head>
<body>

	<?php

	class Cloth {

		function Cloth() {
			$this->model = "Nishat";
		}
	}

	//Creating Object

	$brand = new Cloth();

	//Showing Poperties

	echo $brand->model;


	?>
	
</body>
</html>