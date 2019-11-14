<?php
// Add the database connection
include('database.php');
include('header.php');
$errors = [];
/*
*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // redirect to crud.php
    header ('Location: crud.php');
    exit;
}
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    // Validate the inputs (check if they're empty)
        if (empty ($_POST['first_name'])) {
        $errors['first_name'] = 'Please enter first name.';
    } else {
        $fn = trim($_POST['first_name']);
    }
        if (empty ($_POST['last_name'])) {
        $errors['last_name'] = 'Please enter last name.';
    } else {
        $ln = trim($_POST['last_name']);
    }
        if (empty ($_POST['email'])) {
        $errors['email'] = 'Please enter email.';
    } else {
        $e = trim($_POST['email']);
    }
        if (empty ($_POST['password'])) {
        $errors['password'] = 'Please enter password.';
    } else {
        $pw = trim($_POST['password']);
    }
        
$update_query = "UPDATE USER_PETTIGREW
                    SET first_name = '$first_name',
                        last_name = '$last_name',
                        email = '$email',
                        password = '$password';
                    WHERE user_id = $id";
        // Check if the database returned anything
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
}
/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
//$id = $_POST['user_id'];
// Create your query
$query = "SELECT * FROM USER_PETTIGREW WHERE user_id = $id";
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    $user = mysqli_fetch_assoc($result);
    print_r ($user);
    $first_name = $user ['first_name'];
    $last_name = $user ['last_name'];
    $email = $user ['email'];
    $password = $user ['password'];
} else {
    $errors[] = 'Error.  Please re-enter information';
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Update User</h1>
    <div class="form_container">
    <form action="update.php?id=" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>"><br><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>"><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>"><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>"><br><br>

        <button>Update User</button>
    </form>
    </div>
</body>
</html>








//<?php

//include('includes/database.php');

//if (isset($_GET['id'])) {
//    $id = $_GET['id'];
//} else {
//    header ('Location: crud.php');
//    exit;
//}

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $first_name = $_POST['first_name'];
//    $last_name = $_POST['last_name'];
//    $email = $_POST['email'];
 //   $password = $_POST['password'];

    // Run our update query
//    $update_query = "UPDATE USER_PETTIGREW
//                    SET first_name = '$first_name',
//                        last_name = '$last_name',
//                        email = '$email',
//                        password = '$password';
//                    WHERE user_id = $id";
    // If it updated correctly, we redirect to crud.php
 //   if($result) {
        // redirect to crud
//} else {
        // output an error message (issue with the update)
//    }
//}


//$id = $_POST['user_id'];

//$query = "SELECT * FROM USER_PETTIGREW
//                   WHERE user_id = $id";

//if($result) {
   // $user = mysqli_fetch_assoc($connection, $query);
//}





//?>