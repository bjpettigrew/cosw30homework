<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_HW10');
$password   = getenv('DB_PW_HW10');
$dbname     = getenv('DB_NAME_HW10');
// Establish the connection to the database
$connection = @mysqli_connect($hostname, $username, $password, $dbname)
OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

mysqli_set_charset ($connection, 'utf8');

?>
