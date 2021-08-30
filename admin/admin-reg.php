<?php
$admin_username = $_POST['admin_username'];
$adminid = $_POST['adminid'];
$pos = $_POST['position'];
$emailid = $_POST['emailid'];
$password = $_POST['password'];
$pic = 'p.png';

if (!empty($admin_username) && !empty($password)) {
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
        $SELECT = "SELECT emailid From admin Where emailid=? Limit 1";
        $INSERT = "INSERT Into admin ( admin_username, adminid, position, emailid, password,pic) values(?,?,?,?,?,?) ";

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
            $stmt->bind_param("sissss", $admin_username, $adminid, $pos, $emailid, $password, $pic);
            $stmt->execute();
?>
            <script type="text/javascript">
                alert("Registration Completed!!");
                window.location = "index.php";
            </script>
        <?php
            //echo "New record inserted successfully";
        } else {
        ?>
            <script type="text/javascript">
                alert("Someone else is registered with this email!!");
                window.location = "AdminSignup.php";
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
        window.location = "AdminSignup.php";
    </script>
<?php
}

?>