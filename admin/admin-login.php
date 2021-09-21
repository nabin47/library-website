<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/admin-login-style.css">
</head>

<body>
    <div class="loginbox">
        <a href="../index.php"><img src="img/1200px-CUET_Vector_ogo.svg.png" class="image"></a>
        <h1>Admin Login</h1>

        <form action="admin-login-verify.php" method="post">
            <p>Username</p>
            <input type="text" name="uid" placeholder="Enter username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter password">
            <input type="submit" name="" value="Login">
            <a href="admin-mail.php">Lost your password?</a> <br>
            <a href="admin-signup.php">Don't have an account?</a>
        </form>
    </div>
</body>

</html>