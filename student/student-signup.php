<!DOCTYPE html>
<html>
    <head>
        <title>Student Signup</title>
        <link rel="stylesheet" href="css/student-signup-style.css">
    </head>

    <body>
        <divc class="signupbox">
            <img src="img/1200px-CUET_Vector_ogo.svg.png" class="image">
            <h1>Student Signup here!</h1>
            <form action="http://localhost/library-website/student/student-reg.php" method="POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter username" >
                <p>Student ID</p>
                <input type="number" name="studentid" placeholder="Enter student id" >
                <p>Department</p>
                <input type="text" name="department" placeholder="Enter Department" >
                <p>Email ID</p>
                <input type="text" name="emailid" placeholder="Enter email id" >
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter password" >
                <input type="submit" name="" value="Signup">
            </form>
        </divc>
    </body>
</html>