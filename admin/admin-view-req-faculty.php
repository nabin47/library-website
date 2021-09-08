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
    <title>Faculty Request's</title>
    <link rel="stylesheet" href="../icofont/icofont.min.css">
    <link rel="stylesheet" href="../css/book-request-style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
        .wrapper {
            width: 800px;
            margin: 0 auto;
            background: transparent;
            color: white;
            text-align: center;
            position: absolute;
            top: 62%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .button {
            position: absolute;
            top: 78%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .wrapper img {
            border-radius: 50%;
        }

        table {
            float: right;
            border-collapse: collapse;
            height: auto;
            top: 78%;
            left: 100%;
            transform: translate(-0%, 0%);
            font-size: 17px;
            text-align: center;
        }

        .table-box {
            width: 775px;
            height: 400px;
            overflow-y: scroll;
            background: white;
            box-shadow: 0 10px 100px rgba(0, 0, 0, 0.5);

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

        .srch {
            float: left;
        }

        .srch input[type="submit"]:hover {
            cursor: pointer;
            background: cadetblue;
            color: black;
        }

        .form-control {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
        }

        .srch button {
            float: left;
            position: absolute;
            top: 38%;
            left: 36%;
            transform: translate(-50%, -50%);
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
            background-color: #ddd;
            cursor: pointer;
            transition: 0.6s all;
        }

        .srch button:hover {
            background-color: dodgerblue;
            color: #fff;
        }
    </style>
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="icofont-listine-dots icofont-2x" id="btn"></i>
        <i class="icofont-close icofont-2x" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>Admin</header>
        <ul>
            <li><a href="../index.php"><i class="icofont-home icofont-2x"></i>Home</a></li>
            <li><a href=".admin-view-student.php"><i class="icofont-group-students icofont-2x"></i>View Student</a></li>
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
            // fetch profile pic of logged in user
            $pro_pic = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `admin` WHERE admin_username='$_SESSION[login_user2]';"));
            echo "<div style='text-align: center;'><img class='img-circle'src='img/" . $pro_pic['pic'] . "' width='110' height='120'></div>";
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
            </div>
            <div style="text-align: center;
                      font-family: Apple Chancery, cursive;
                      color: white;
                      font-size: 25px;
                            "><b>Faculty Book Request's </b>
            </div>
            <br><br>
            <div class="srch">
                <form action="http://localhost/library-website/admin/approve-faculty-sql.php" method="post">
                    <ul>
                        <li><input class="form-control" type="text" name="id" placeholder="Faculty ID.." required=""></li>
                        <li><input class="form-control" type="text" name="bid" placeholder="Book ID.." required=""></li>
                        <button type="submit" name="submit">Approve</button>
                    </ul>

                </form>
            </div>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM fileup INNER JOIN faculty_issue_book ON fileup.id = faculty_issue_book.bid ORDER BY fid;");
            echo "<div class='table-box'>";
            echo "<table class='table table-bordered table-hover>";
            echo "<tr style='background-color: white;'>";
            //table header
            echo "<th>";
            echo "Faculty ID";
            echo "</th>";
            echo "<th>";
            echo "ID";
            echo "</th>";
            echo "<th>";
            echo "Book Name";
            echo "</th>";
            echo "<th>";
            echo "Status";
            echo "</th>";
            echo "<th>";
            echo "Quantity";
            echo "</th>";
            echo "<th>";
            echo "Aproval";
            echo "</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>";
                echo $row['fid'];
                echo "</td>";
                echo "<td>";
                echo $row['bid'];
                echo "</td>";
                echo "<td>";
                echo $row['title'];
                echo "</td>";
                echo "<td>";
                echo $row['status'];
                echo "</td>";
                echo "<td>";
                echo $row['quantity'];
                echo "</td>";
                echo "<td>";
                echo $row['approve'];
                echo "</td>";;
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
            ?>
        </div>
    </section>
</body>

</html>