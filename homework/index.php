<?php
//make database accses information into constants:
    define ('DB_USERNAME_HW10', 'username');
    define ('DB_PW_HW10', 'password_og');
    define ('DB_HOSTNAME', 'hostname');
    define ('DB_NAME_HW10', 'dbname');

// establish the connection to the database
$connection = @mysqli_connect($hostname, $username, $password_og, $dbname)
OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );


//set encoding
mysqli_set_charset ($connection, 'utf8');