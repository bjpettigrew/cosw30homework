<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_HW10');
$password_og   = getenv('DB_PW_HW10');
$dbname     = getenv('DB_NAME_HW10');

$connection = @mysqli_connect($hostname, $username, $password_og, $dbname)
OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );


?>
