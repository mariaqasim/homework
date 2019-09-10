<?php 
ob_start();
session_start();

//session_destroy();
unset($_SESSION['fname']);

echo $_SESSION['fname'];
echo $_SESSION['lname'];
 ?>