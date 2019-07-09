	<?php

	$days = ["Monday",
	         "Tuesday",
	         "Wednesday",
	         "Thursday",
	         "Friday",
	         "Saturday",
	         "Sunday"	];

		//echo $days[0];
	         
		 $day = date("l");

		if($day == $days[0]){
			echo "Today's Daal day!";
		}

		elseif ($day == $days[1] ) {
			echo "Vegetable Day!";			
		}
		elseif ($day == $days[2]) {
			echo "Haleem Day!";			
		}
		elseif ($day == $days[3]) {
			echo "Biryani Day!";			
		}
		elseif ($day == $days[4]) {
			echo "Fast Food Day!";			
		}
		elseif ($day == $days[5]) {
			echo "Spaghetti Day!";			
		}
		elseif ($day == $days[6]) {
			echo "Desert Day!";			
		}
		else {
			echo "The Day for Royal Treat!";
		}

		?>

	