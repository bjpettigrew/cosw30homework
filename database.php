<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_PUBLIC');
$password   = getenv('DB_PW_PUBLIC');
$dbname     = getenv('DB_NAME');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>
