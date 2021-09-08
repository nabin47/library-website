<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cuetcentrallibrary";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
session_start();
if (isset($_POST['submit'])) {
    $sid = $_POST['id'];
    $bid = $_POST['bid'];
    $_SESSION['sid'] = $sid;
    $_SESSION['bid'] = $bid;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Aprroval</title>
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
            top: 50%;
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
            font-size: 17px;
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

        .srch {
            float: left;
        }

        .form-control {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
        }

        .srch button {
            float: left;
            position: absolute;
            top: 83%;
            left: 30%;
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
            <li><a href="admin-view-student.php"><i class="icofont-group-students icofont-2x"></i>View Student</a></li>
            <li><a href="upload-book.php"><i class="icofont-upload icofont-2x"></i>Upload Books</a></li>
            <li><a href="../book/view-book.php"><i class="icofont-book icofont-2x"></i>View Books</a></li>
            <li><a href="admin-view-req-student.php"><i class="icofont-hand icofont-2x"></i>View Request</a></li>
            <li><a href="#"><i class="icofont-comment icofont-2x"></i>View Comments</a></li>
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
                            "><b>Aprrove Book Here! </b>
            </div>
            <br><br>
            <div class="srch">
                <form class="navbar-form" method="post" name="form1">
                    <ul>
                        <p style="float: left; font-size: 20px;font-family: Apple Chancery, cursive;"><b>Issue Date</b></p>
                        <li><input class="form-control" type="date" name="issue" placeholder="Student ID.." required=""></li>
                        <p style="float: left; font-size: 20px;font-family: Apple Chancery, cursive;"><b>Return Date</b></p>
                        <li><input class="form-control" type="date" name="return" placeholder="Book ID.." required=""></li>
                        <button type="submit" name="submit1">Approve</button>
                    </ul>

                </form>
            </div>
            <?php
            if (isset($_POST['submit1'])) {
                mysqli_query($conn, "UPDATE issue_book SET approve='Approved',issue='$_POST[issue]',return_date='$_POST[return]' WHERE sid = '$_SESSION[sid]' and bid = '$_SESSION[bid]'");
                mysqli_query($conn, "UPDATE `fileup` SET quantity=quantity-1 WHERE `id`='$_SESSION[bid]'");
            ?>
                <script type="text/javascript">
                    alert("Approved book successfully!! Great work sir!!")
                    window.location = "admin-view-req-student.php"
                </script>
            <?php
            }
            ?>
        </div>
    </section>
</body>

</html>