<?php 
ob_start();

 setcookie('username', 'obaid', time() + 60 * 60 * 24);
 echo $_COOKIE['username'];
 //setcookie('username', 'obaid', time() + 10);
// echo $_COOKIE['username'];




 ?>