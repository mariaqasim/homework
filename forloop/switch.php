<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Switch Statement</title>
</head>
<body>

	<h1 style="font-family: satisfy;">Switch Statement</h1>

	<?php

	$foodchart = "Biryani";

	switch ($foodchart) {
		case "Kabab":
			echo "My favourite food is Kabab!";
			break;
			case "Biryani":
			echo "My favourite food is Biryani!";
			break;
			case "Spaghetti":
			echo "My favourite food is Spaghetti!";
			break;

		
		default:
			echo "Live to EAT";
			break;
	}


	?>
	
</body>
</html>