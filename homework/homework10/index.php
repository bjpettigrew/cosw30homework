<?php
define('DB_USERNAME_HW10', 'username');
define('DB_PW_HW10', 'password');
define('DB_HOSTNAME', 'hostname');
define('DB_NAME_HW10', 'dbname');

$connection = @mysqli_connect(DB_HOSTNAME, DB_USERNAME_HW10, DB_PW_HW10, DB_NAME_HW10)
OR die('Could not connect to MySQL: ' . mysqli_connect_error());

mysqli_set_charset ($connection, 'utf8');

?>


