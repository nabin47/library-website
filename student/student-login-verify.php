<html>
<body>
<?php
    session_start();

    $username = $_POST['uid'];
    $password = $_POST['pass']; 
    
if(!empty($admin_username) || !empty($password)){
    $conn = mysqli_connect("localhost","root","","cuetcentrallibrary");

    //to prevent mysql injection

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    

    //query for result

    $result = mysqli_query($conn,"select * from student where username = '$username' and password = '$password'")
            or die("Failed to query database: " . mysqli_error($conn));

    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
        $_SESSION['login_user1'] = $username;
        $_SESSION['pic1'] = $row['pic'];
        $_SESSION['sid'] = $row['studentid'];
        ?>
    <script type="text/javascript">
        window.location="../index.php"
        </script>
        <?php
        }
    else{
        ?>
    <script type="text/javascript">
        alert("Failed to login. Click here to try again!");
        window.location="student-login.php";
    </script>
        <?php
    }
}
    else{
        ?>
    <script type="text/javascript">
        alert("All fields are necessary!");
        window.location="student-login.php";
    </script>
        <?php
    }
?>
</body>
</html>