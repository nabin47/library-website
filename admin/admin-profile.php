<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cuetcentrallibrary";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../icofont/icofont.min.css">
    <link rel="stylesheet" href="../css/book-request-style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
        .wrapper {
            width: 600px;
            margin: 0 auto;
            background-color: #063146;
            color: white;
            text-align: center;
            position: absolute;
            top: 43%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .button a {
            position: absolute;
            top: 105%;
            left: 40%;
            transform: translate(-50%, -50%);
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid white;
            transition: 0.6s ease;
        }

        .button a:hover {
            background-color: #fff;
            color: #000;
        }

        .button a i {
            margin-right: 10px;
        }

        .bt a {
            position: absolute;
            top: 105%;
            left: 60%;
            transform: translate(-50%, -50%);
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid white;
            transition: 0.6s ease;
        }

        .bt a:hover {
            background-color: #fff;
            color: #000;
        }

        .bt a i {
            margin-right: 10px;
        }

        .wrapper img {
            border-radius: 50%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 18px;
            text-align: center;
        }

        th {
            background-color: #40E0D0;
            color: black;
        }

        th,
        td {
            background-color: #40E0D0;
            color: black;
            border: 2px solid #000;
            padding: 15px;
        }

        h1 {
            color: #094a89;
            top: 10px;
            text-align: center;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .container a {
            float: right;
            text-decoration: none;
            color: #fff;
            padding: 5px 20px;
            border: 1px solid white;
            transition: 0.6s ease;

        }

        .container a:hover {
            background-color: #fff;
            color: #000;
        }

        .container a i {
            margin-right: 10px;
        }
    </style>
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
            <div class="container">
                <a href="admin-logout.php"><i class="icofont-sign-out icofont-2x"></i>Logout</a>
                <a href="admin-home.php"><i class="icofont-dashboard icofont-2x"></i>Dashboard</a>
                <a href="#"><i class="icofont-info-square icofont-2x"></i>Feedback</a>
            </div>
            <div class="wrapper">
                <?php
                $q = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username='$_SESSION[login_user2]' ;");
                ?>
                <h2 style="text-align: center;">My Profile</h2>
                <?php
                $row = mysqli_fetch_assoc($q);

                echo "<div style='text-align: center;'><img class='img-circle'src='img/" . $row['pic'] . " ' width='110' height='120'></div>";
                ?>
                <div style="text-align: center;
                      font-family: Apple Chancery, cursive;
                      color: white;
                            "><b>Welcome</b>
                    <h4>
                        <?php
                        echo $_SESSION['login_user2'];
                        ?>
                    </h4>
                    <br>
                </div>
                <?php
                echo "<table class='table table-bordered table-hover>";
                echo "<tr style='background-color: white;'>";
                echo "<th>";
                echo "ID";
                echo "</th>";
                echo "<td>";
                echo $row['adminid'];
                echo "</td>";
                echo "</tr>";
                echo "<tr style='background-color: white;'>";
                echo "<th>";
                echo "Admin Name";
                echo "</th>";
                echo "<td>";
                echo $row['admin_username'];
                echo "</td>";
                echo "</tr>";
                echo "<tr style='background-color: white;'>";
                echo "<th>";
                echo "Position";
                echo "</th>";
                echo "<td>";
                echo $row['position'];
                echo "</td>";
                echo "</tr>";
                echo "<tr style='background-color: white;'>";
                echo "<th>";
                echo "E-mail";
                echo "</th>";
                echo "<td>";
                echo $row['emailid'];
                echo "</td>";
                echo "</tr>";
                echo "</table>";
                ?>
                <div class="button">
                    <a href="admin-upload-pic.php" class="btn">Upload Picture</a>
                </div>
                <div class="bt">
                    <a href="#" class="btn">Edit</a>
                </div>
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