<!DOCTYPE html>
<html>

<head>
    <title>Admin Signup</title>
    <link rel="stylesheet" href="css/admin-signup-style.css">
</head>

<body>
    <divc class="signupbox">
        <a href="../index.php"><img src="img/1200px-CUET_Vector_ogo.svg.png" class="image"></a>
        <h1>Admin Signup</h1>

        <form action="admin-reg.php" method="POST">
            <p>Username</p>
            <input type="text" name="admin_username" placeholder="Enter username">
            <p>Admin ID</p>
            <input type="number" name="adminid" placeholder="Enter admin id">
            <p>Position</p>
            <input type="text" name="position" placeholder="Enter position">
            <p>Email ID</p>
            <input type="text" name="emailid" placeholder="Enter email id">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="" value="Signup">

        </form>
    </divc>
</body>

</html>