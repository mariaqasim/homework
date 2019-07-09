<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food Chart</title>
</head>
<body>

	<h1 style="font-family: satisfy;">Food Chart Using Ifelse Statement</h1>
	
	<?php

		$day = date('l');

		if($day == "Monday"){
			echo "Today's Daal day!";
		}

		elseif ($day == "Tuesday") {
			echo "Vegetable Day!";			
		}
		elseif ($day == "Wednesday") {
			echo "Haleem Day!";			
		}
		elseif ($day == "Thursday") {
			echo "Biryani Day!";			
		}
		elseif ($day == "Friday") {
			echo "Fast Food Day!";			
		}
		elseif ($day == "Saturday") {
			echo "Spaghetti Day!";			
		}
		elseif ($day == "Sunday") {
			echo "Desert Day!";			
		}
		else {
			echo "The Day for Royal Treat!";
		}

	?>

	<!-- //////////////////////////////////////////////////////////////////////////// -->




</body>
</html>