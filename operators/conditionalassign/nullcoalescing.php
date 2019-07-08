<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditional Assignment Operator</title>
</head>
<body>

	<h1 style="font-family: satisfy;">Null-Coalescing</h1>

	<?php

	    // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
   
	?>
	
</body>
</html>