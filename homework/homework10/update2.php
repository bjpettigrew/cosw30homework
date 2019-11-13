type html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="update.php?id=" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>"><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>"><br>

        <button>Update User</button>
    </form>
</body>
</html>





