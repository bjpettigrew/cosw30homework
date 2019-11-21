<?php
session_start();
// session_start() must always be the first
// thing declared on the PHP page. If it is not 
// first you will fun into issues
?>
<!doctype html>
<html>
<head></head>
<body>

<?php
$_SESSION = [];
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>

</body>
</html>