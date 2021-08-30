<?php
$username = $_POST['username'];
$studentid = $_POST['studentid'];
$department = $_POST['department'];
$emailid = $_POST['emailid'];
$password = $_POST['password'];
$pic = 'p.png';

if (!empty($username) && !empty($password)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "cuetcentrallibrary";

    //connection to database is given here
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    //if there is error while connecting
    if ($conn->connect_errno) {
        die('Connect Error(' . $conn->connect_error);
    } else {
        $SELECT = "SELECT emailid From student Where emailid=? Limit 1";
        $INSERT = "INSERT Into student ( username, studentid, department, emailid, password,pic) values(?,?,?,?,?,?) ";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $emailid);
        $stmt->execute();
        $stmt->bind_result($emailid);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sissss", $username, $studentid, $department, $emailid, $password, $pic);
            $stmt->execute();
            //echo "New record inserted successfully";
?>
            <script type="text/javascript">
                alert("Registration Completed!!");
                window.location = "../index.php";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Someone else is registered with this email!!");
                window.location = "student-signup.php";
            </script>
    <?php
        }
        $stmt->close();
        $conn->close();
    }
} else {
    ?>
    <script type="text/javascript">
        alert("All fields are necessary!");
        window.location = "student-signup.php";
    </script>
<?php
}

?>