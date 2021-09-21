<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard-style.css">
    <link rel="stylesheet" href="../icofont/icofont.min.css">
</head>

<body>
    <?php
    if (isset($_SESSION['login_user2'])) { ?>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="icofont-listine-dots icofont-2x" id="btn"></i>
            <i class="icofont-close icofont-2x" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>Admin</header>
            <ul>
                <li><a href="../index.php"><i class="icofont-home icofont-2x"></i>Home</a></li>
                <li><a href="admin-view-student.php"><i class="icofont-group-students icofont-2x"></i>View Student</a></li>
                <li><a href="upload-book.php"><i class="icofont-upload icofont-2x"></i>Upload Books</a></li>
                <li><a href="../book/view-book.php"><i class="icofont-book icofont-2x"></i>View Books</a></li>
                <li><a href="admin-view-req-student.php"><i class="icofont-hand icofont-2x"></i>Student Request</a></li>
                <li><a href="admin-view-req-faculty.php"><i class="icofont-hand icofont-2x"></i>Faculty Request</a>
                <li><a href="#"><i class="icofont-comment icofont-2x"></i>View Feedback</a></li>
                <li><a href="admin-update-password.php"><i class="icofont-ui-password icofont-2x"></i>Change Password</a></li>
                <li><a href="admin-logout.php"><i class="icofont-sign-out icofont-2x"></i>Logout</a></li>
            </ul>
        </div>
        <section>
            <ul>
                <li><a href="admin-logout.php"><i class="icofont-sign-out icofont-2x"></i>Logout</a></li>
                <li><a href="admin-profile.php"><i class="icofont-teacher icofont-2x"></i> <?php echo $_SESSION['login_user2']; ?></a></li>
                <li><a href="../feedback.php"><i class="icofont-info-square icofont-2x"></i>Feedback</a></li>
            </ul>
            <div class="logo">
                <img src=../img/logo.png>
            </div>
            <div class="note">
                <h2>
                    <?php echo "Welcome " . $_SESSION['login_user2'] . ", We have some interesiting Information to see"; ?>
                </h2>
                <br>
                <ul>
                    <li><?php
                        $conn = mysqli_connect("localhost", "root", "", "cuetcentrallibrary");
                        if (!$conn) {
                            die('Could not connect: ' . mysqli_error($conn));
                        }
                        $query = "SELECT COUNT(studentid) FROM student";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "Total Students= " . $row['COUNT(studentid)'];
                            echo "<br />";
                        }
                        ?>
                    </li>
                    <li> <?php
                            $conn = mysqli_connect("localhost", "root", "", "cuetcentrallibrary");
                            if (!$conn) {
                                die('Could not connect: ' . mysqli_error($conn));
                            }
                            $query = "SELECT COUNT(facultyid) FROM faculty";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo "Total Faculty= " . $row['COUNT(facultyid)'];
                                echo "<br />";
                            }
                            ?>
                    </li>
                    <li>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "cuetcentrallibrary");
                        if (!$conn) {
                            die('Could not connect: ' . mysqli_error($conn));
                        }
                        $query = "SELECT COUNT(id) FROM fileup";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "Total Books= " . $row['COUNT(id)'];
                            echo "<br />";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </section>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Please Login to go to this Page!");
            window.location = "admin-login.php";
        </script>
    <?php
    }
    ?>
</body>

</html>