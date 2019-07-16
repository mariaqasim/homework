<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Function</title>
</head>
<body>

	<h1 style="font-family: satisfy;">PHP Function with two Argument</h1>

	<?php

		function familyName($fname, $year) {

		echo "$fname Khan born in $year<br>";
	}

	familyName("Maria","2000");
	familyName("Amina","1947");
	familyName("Zainub","1995");
	familyName("Mehwish","1996");
	familyName("Mawra","1993");

	?>
	
</body>
</html>