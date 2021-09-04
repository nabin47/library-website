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
    <link rel="stylesheet" href="../css/dashboard-style.css">
    <link rel="stylesheet" href="../css/book-request-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
    if (isset($_SESSION['login_user1'])) { ?>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="icofont-listine-dots icofont-2x" id="btn"></i>
            <i class="icofont-close icofont-2x" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>Admin</header>
            <ul>
                <li><a href="../index.php"><i class="icofont-home icofont-2x"></i>Home</a></li>
                <li><a href="../book/viewbook.php"><i class="icofont-book icofont-2x"></i>View Books</a></li>
                <li><a href="../book/bookgallery.php"><i class="icofont-download icofont-2x"></i>Download Books</a></li>
                <li><a href="student-view-book.php"><i class="icofont-hand icofont-2x"></i>Request a Book</a></li>
                <li><a href="student-book-request.php"><i class="icofont-book-mark icofont-2x"></i>Requested Book</a></li>
                <li><a href="#"><i class="icofont-comment icofont-2x"></i>Comment Book</a></li>
                <li><a href="student-update-password.php"><i class="icofont-ui-password icofont-2x"></i>Change Password</a></li>
                <li><a href="student-logout.php"><i class="icofont-logout icofont-2x"></i>Logout</a></li>
            </ul>
        </div>
        <section>
            <div class="container">
                <a href="student-logout.php"><i class="icofont-sign-out icofont-2x"></i>Logout</a>
                <a href="student-home.php"><i class="icofont-dashboard icofont-2x"></i>Dashboard</a>
                <a href="#"><i class="icofont-info-square icofont-2x"></i>Feedback</a>
            </div>
            <div class="wrapper">
                <?php
                $q = mysqli_query($conn, "SELECT * FROM student WHERE username='$_SESSION[login_user1]' ;");
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
                        echo $_SESSION['login_user1'];
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
                echo $row['studentid'];
                echo "</td>";
                echo "</tr>";
                echo "<tr style='background-color: white;'>";
                echo "<th>";
                echo "Student Name";
                echo "</th>";
                echo "<td>";
                echo $row['username'];
                echo "</td>";
                echo "</tr>";
                echo "<tr style='background-color: white;'>";
                echo "<th>";
                echo "Department";
                echo "</th>";
                echo "<td>";
                echo $row['department'];
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
                    <a href="student-upload-pic.php" class="btn">Upload Picture</a>
                </div>
                <div class="bt">
                    <a href="#" class="btn">Edit</a>
                </div>
            </div>
        </section>
    <?php    } else {
    ?>
        <script type="text/javascript">
            alert("Please Login to go to this page!");
            window.location = "student-login.php";
        </script>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>