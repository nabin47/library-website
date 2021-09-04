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
            width: 800px;
            margin: 0 auto;
            background-color: #063146;
            color: white;
            text-align: center;
            position: absolute;
            top: 60%;
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
    <?php
    if (isset($_SESSION['login_user3'])) { ?>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="icofont-listine-dots icofont-2x" id="btn"></i>
            <i class="icofont-close icofont-2x" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header>Admin</header>
            <ul>
                <li><a href="../index.php"><i class="icofont-home icofont-2x"></i>Home</a></li>
                <li><a href="../book/view-book.php"><i class="icofont-book icofont-2x"></i>View Books</a></li>
                <li><a href="../book/book-gallery.php"><i class="icofont-download icofont-2x"></i>Download Books</a></li>
                <li><a href="faculty-view-book.php"><i class="icofont-hand icofont-2x"></i>Request a Book</a></li>
                <li><a href="faculty-book-request.php"><i class="icofont-book-mark icofont-2x"></i>Requested Book</a></li>
                <li><a href="#"><i class="icofont-comment icofont-2x"></i>Comment Book</a></li>
                <li><a href="faculty-update-password.php"><i class="icofont-ui-password icofont-2x"></i>Change Password</a></li>
                <li><a href="faculty-logout.php"><i class="icofont-logout icofont-2x"></i>Logout</a></li>
            </ul>
        </div>
        <section>
            <div class="container">
                <a href="faculty-logout.php"><i class="icofont-sign-out icofont-2x"></i>Logout</a>
                <a href="faculty-home.php"><i class="icofont-dashboard icofont-2x"></i>Dashboard</a>
                <a href="#"><i class="icofont-info-square icofont-2x"></i>Feedback</a>
            </div>
            <div class="wrapper">
                <?php
                $pro_pic = mysqli_fetch_assoc(mysqli_query($conn, "SELECT pic FROM faculty WHERE faculty_username = '$_SESSION[login_user3]'"));
                echo "<div style='text-align: center;'><img class='img-circle'src='img/" . $pro_pic['pic'] . " ' width='110' height='120'></div>";
                ?>
                <div style="text-align: center;
                      font-family: Apple Chancery, cursive;
                      color: white;
                      font-size: 20px;
                            "><b>Welcome</b>
                    <h4>
                        <?php
                        echo $_SESSION['login_user3'];
                        ?>
                    </h4>
                </div>
                <div style="text-align: center;
                      font-family: Apple Chancery, cursive;
                      color: white;
                      font-size: 25px;
                            "><b>Status Of Your Requested Book's</b>
                </div>
                <br>
                <?php
                $res = mysqli_query($conn, "SELECT * FROM fileup INNER JOIN faculty_issue_book ON fileup.id = faculty_issue_book.bid AND faculty_issue_book.faculty_username='$_SESSION[login_user3]' ORDER BY bid;");
                echo "<table class='table table-bordered table-hover>";
                echo "<tr style='background-color: white;'>";
                //table header
                echo "<th>";
                echo "ID";
                echo "</th>";
                echo "<th>";
                echo "Book Name";
                echo "</th>";
                echo "<th>";
                echo "Aproval";
                echo "</th>";
                echo "<th>";
                echo "Issue";
                echo "</th>";
                echo "<th>";
                echo "Return";
                echo "</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";

                    echo "<td>";
                    echo $row['bid'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['title'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['approve'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['issue'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['return_date'];
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
                <div class="srch">
                    <form class="navbar-form" method="post" name="form1">
                        <ul>
                            <li><input class="form-control" type="text" name="bid" placeholder="Book ID.." required=""></li>
                            <button type="submit" name="submit">Return Book</button>
                        </ul>
                    </form>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    $result = mysqli_query($conn, "select * from faculty_issue_book where bid = $_POST[bid] AND faculty_username = '$_SESSION[login_user3]'")
                        or die("Failed to query database: " . mysqli_error($conn));
                    $row = mysqli_fetch_array($result);
                    if ($row['bid'] == $_POST['bid']) {
                        mysqli_query($conn, "DELETE FROM `faculty_issue_book` WHERE bid = $_POST[bid] AND faculty_username = '$_SESSION[login_user3]'");
                        mysqli_query($conn, "UPDATE `fileup` SET quantity=quantity+1 WHERE `id`='$_POST[bid]'");
                ?>
                        <script type="text/javascript">
                            alert("Returned Book Successfully!!")
                            window.location = "faculty-book-request.php"
                        </script>
                    <?php
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("You didn't issue this book!!")
                            window.location = "faculty-book-request.php"
                        </script>
                <?php
                    }
                }
                ?>
            </div>
        </section>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Please Login to go to see this page!");
            window.location = "faculty-login.php";
        </script>
    <?php
    }
    ?>
</body>

</html>