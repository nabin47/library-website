<html>

<body>
    <?php
    session_start();

    $username = $_POST['uid'];
    $opassword = $_POST['opass'];
    $npassword = $_POST['npass'];
    if (!empty($username) && !empty($opassword) && !empty($npassword)) {
        $conn = mysqli_connect("localhost", "root", "", "cuetcentrallibrary");

        //to prevent mysql injection

        $username = stripcslashes($username);
        $opassword = stripcslashes($opassword);
        $npassword = stripcslashes($npassword);
        $username = mysqli_real_escape_string($conn, $username);
        $opassword = mysqli_real_escape_string($conn, $opassword);
        $npassword = mysqli_real_escape_string($conn, $npassword);

        // check if the input username is of the current user in SESSION

        if ($_SESSION['login_user1'] == $username) {

            //query for result

            $result = mysqli_query($conn, "select * from student where username = '$username' and password = '$opassword'")
                or die("Failed to query database: " . mysqli_error($conn));

            $row = mysqli_fetch_array($result);
            if ($row['username'] == $username && $row['password'] == $opassword) {
                $sql = mysqli_query($conn, "UPDATE student SET password='$npassword' WHERE username='$username' and password='$opassword'");
    ?>
                <script type="text/javascript">
                    alert("Updated Password Succesfully!!!");
                    window.location = "student-home.php";
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    alert("Incorrect Username or Password! try again!");
                    window.location = "student-update-password.php";
                </script>
            <?php
            }
        } else {
            ?>
            <script type="text/javascript">
                alert("Incorrect Username! try again!");
                window.location = "student-update-password.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("All fields are necessary!");
            window.location = "student-update-password.php";
        </script>
    <?php
    }
    ?>
</body>

</html>