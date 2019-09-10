<?php 
ob_start();

session_start();

$_SESSION['fname'] = 'Fistname';
$_SESSION['lname'] = 'Lastname';

echo $_SESSION['fname'];
echo $_SESSION['lname'];





 ?>