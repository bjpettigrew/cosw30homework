<?php
// Add the database connection

include('includes/database.php');

//make db info into constants
define('DB_USERNAME_HW10', 'username');
define('DB_PW_HW10', 'password');
define('DB_HOSTNAME', 'hostname');
define('DB_NAME_HW10', 'dbname');

//encoding
mysqli_set_charset ($connection, 'utf8');

/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
//error messages for input form
    //if(failed condition) {
    // $errors[] = "Error message';
    //}
    }


    if (empty ($_POST['first_name'])) {
        $errors[] = 'You forgot to enter your first name';
    } else {
        $fn = trim($_POST['first_name']);
    }

    if (empty ($_POST['last_name'])) {
        $errors[] = 'You forgot to enter your last name';
    } else {
        $ln = trim($_POST['last_name']);
    }

    if (empty ($_POST['email'])) {
        $errors[] = 'You forgot to enter your email address';
    } else {
        $e = trim($_POST['email']);
    }

    if (!empty ($_POST['password_og'])) {
        if ($_POST['password_og'] != $_POST['password_confirm']) {
            $errors[] = 'Your password does not match confirmation password';
        } else {
            $pw = trim($_POST['password_og']);
        }
    } else {
        $errors[] = 'You forgot to enter your password';
    }

    if ( empty($errors)) {
        require('database.php');  //add ../

//Add query

    $query = "INSERT INTO USER_PETTIGREW (first_name, last_name, email, password_og)
    VALUES ('$fn', '$ln', '$e', '$pw')";
    $r = @mysqli_query($connection, $query);
    if ($r) {

            //$mysqli_fetch_all($connection, $query);

        echo '<h1>Thank you!</h1>
            <p>You are now registered.</p><p><br></p>';
    } else {
        echo '<h1>System Error</h1>
            <p class="error">You could not be registered at this time due to a system error.  We apologize for any inconvenience</p>';

        echo '<p>' . mysqli_error($connection) . '<br><br>Query: ' . $query . '</p>';
    }
    mysqli_close($connection);

    exit();

    } else {
        echo'<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br>';
    foreach ($errors as $msg) {
        echo " - $msg<br>\n";
      }
    echo '</p><p>Please try again.</p><p><br></p>';

    }
}
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER';
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the array of users into a variable
    $rows = mysqli_fetch_all($result);
} else {
    // Output an error
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php if (isset($_POST['first_name'])) //or <?php echo $first_name; //end php>
         echo $_POST['first_name'];?>"><br>


        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php if (isset($_POST['last_name']))
         echo $_POST['last_name'];?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if (isset($_POST['email']))
         echo $_POST['email'];?>"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php if (isset($_POST['password']))
         echo $_POST['password'];?>"><br>

        <!--Add a second password input so the user has to retype their password -->

        <label for="password_confirm">Confirm Password</label>
        <input type="password" id="password_confirm" name="password_confirm" value="<?php if (isset($_POST['password_confirm']))
         echo $_POST['password_confirm'];?>"><br>

        <button>Register</button>
    </form>

<?php
//added ../ to database.php
    require('database.php');  //connect to the db
    $query = "SELECT (user_id, first_name, last_name, email, password_og)  //why is user_id YELLOW?
            FROM USER_PETTIGREW
            ORDER BY first_name ASC";
    $r = @mysqli_query($connection, $query);  //runs teh query from db table USER_PETTIGREW


    <h2>Output a List of Users</h2>

    if ($r) {

        echo '<table width="60%">
        <thead>
            <tr>
                <th align="left">User I.D.</th>
                <th align="left">First Name</th>
                <th align="left">Last Name</th>
                <th align="left">Email</th>
                <th align="left">Password</th>
                <th align="left">Edit</th>
            </tr>
        </thead>
        <tbody>
        ';

        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {  //fetches and prints all the records



            // You will be adding a forEach loop here to output the users
            echo '<tr><td align="left">' . $row['user_id'] . '</td>
                <td align="left">' . $row['first_name'] . '</td>
                <td align="left">' . $row['last_name'] . ' </td>
                <td align="left">' . $row['email'] . '</td>
                <td align="left">' . $row['password'] . '</td></tr>
                <td align="left"><a href="update.php?id=' .$row['user_id']. '"></td>
            ';
            }
        echo '</tbody></table>';

        mysqli_free_result($r);

} else {
    echo'<p class="error"> The current users could not be retrieved.  We apologize for any inconvenience.</p>';
    echo '<p>' . mysqli_error($connection) . '<br><br>Query: ' . $query . '</p>';
}

mysqli_close($connection);
?>
</body>
</html>
