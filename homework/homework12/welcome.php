<?php
session_start();

// Check if the user is already logged in
// If they aren't, redirect to login.php
if(!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit;
}


include('includes/header.php');
include('includes/database.php');
?>

<main class="container">

    <h1>You Logged In!  Hello <?php echo $_SESSION['first_name']; ?></h1>

    <h2>Here's a list of other users</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through and output all users -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

</main>

<?php include('includes/footer.php'); ?>