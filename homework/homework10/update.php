<?php

include('includes/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header ('Location: crud.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password_og = $_POST['password']

    // Run our update query
    $update_query = "UPDATE USER_PETTIGREW
                    SET first_name = '$first_name',
                        last_name = '$last_name',
                        email = '$email',
                        password = '$password';
                    WHERE user_id = $id";
    // If it updated correctly, we redirect to crud.php
    if($result) {
        // redirect to crud
    } else {
        // output an error message (issue with the update)
    }
}


//$id = $_POST['user_id'];

$query = "SELECT * FROM USER_PETTIGREW
                   WHERE user_id = $id";

if($result) {
    $user = mysqli_fetch_assoc($connection, $query);
}





?>