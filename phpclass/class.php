<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Class</title>
</head>
<body>

	<?php

	// class User
	// {

	// 	public $username = "Maria";

	// }
	// $user = new User;

	// // echo $username;
	// echo $user -> username;

/////////////////////////////////////////////////////////

	class User

	{
		public $username = "Maria";

		public function fullname()
		{
			return "Maria Qasim";
		}

		public function avatar ($size = 60)
		{

			return $size;
		}
	}

	$user = new User;

	echo $user -> fullname() , "<br>";

	// whatever value you put in there it will override the above one in the size() 
	echo $user -> avatar(100);
	?>
	
</body>
</html>