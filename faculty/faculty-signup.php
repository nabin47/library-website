<!DOCTYPE html>
<html>

<head>
    <title>Faculty Signup</title>
    <link rel="stylesheet" href="css/faculty-signup-style.css">
</head>

<body>
    <divc class="signupbox">
        <a href="../index.php"><img src="img/1200px-CUET_Vector_ogo.svg.png" class="image"></a>
        <h1>Faculty Signup here!</h1>

        <form action="faculty-reg.php" method="POST">
            <p>Username</p>
            <input type="text" name="faculty_username" placeholder="Enter username">
            <p>Faculty ID</p>
            <input type="number" name="facultyid" placeholder="Enter Faculty ID">
            <p>Department</p>
            <input type="text" name="department" placeholder="Enter Department">
            <p>Email ID</p>
            <input type="text" name="emailid" placeholder="Enter Email ID">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="" value="Signup">
        </form>
    </divc>
</body>

</html>