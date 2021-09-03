<!DOCTYPE html>
<html>

<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="css/student-login-style.css">
</head>

<body>
    <div class="loginbox">
        <img src="img/1200px-CUET_Vector_ogo.svg.png" class="image">
        <h1>Student Login here!</h1>

        <form action="http://localhost/library-website/student/student-login-verify.php" method="post">
            <p>Username</p>
            <input type="text" name="uid" placeholder="Enter username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter password">
            <input type="submit" name="" value="Login">
            <a href="student-mail.php">Lost your password?</a> <br>
            <a href="http://localhost/library-website/student/student-signup.php">Don't have an account?</a>
        </form>
    </div>
</body>

</html>