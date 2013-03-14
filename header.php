<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or trigger_error (mysql_error(),E_USER_ERROR);

$dbname = 'mydb';
mysql_select_db($dbname);


?>

