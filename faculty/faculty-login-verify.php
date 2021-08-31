<?php
session_start();
//ssvar_dump($_POST);

$username = $_POST['uid'];
$password = $_POST['pass'];

//connect to db

if (!empty($admin_username) || !empty($password)) {

    $conn = mysqli_connect("localhost", "root", "", "cuetcentrallibrary");

    //to prevent mysql injection

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);


    //query for result

    $result = mysqli_query($conn, "select * from faculty where faculty_username = '$username' and password = '$password'")
        or die("Failed to query database: " . mysqli_error($conn));

    $row = mysqli_fetch_array($result);
    if (isset($row['faculty_username']) == $username && isset($row['password']) == $password) {
        $_SESSION['login_user3'] = $username;
        $_SESSION['pic3'] = $row['pic'];
        $_SESSION['fid'] = $row['facultyid'];
?>
        <script type="text/javascript">
            window.location = "../index.php"
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Failed to login. Click here to try again!");
            window.location = "faculty-login.php";
        </script>
    <?php
    }
} else {
    ?>
    <script type="text/javascript">
        alert("All fields are necessary!");
        window.location = "faculty-login.php";
    </script>
<?php
}

?>