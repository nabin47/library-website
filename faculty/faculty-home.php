<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard-style.css">
    <link rel="stylesheet" href="../icofont/icofont.min.css">
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
            <header>Faculty</header>
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
            <ul>
                <li><a href="faculty-logout.php"><i class="icofont-logout icofont-2x"></i>Logout</a></li>
                <li><a href="faculty-profile.php"><i class="icofont-teacher icofont-2x"></i> <?php echo $_SESSION['login_user3']; ?></a></li>
                <li><a href="#"><i class="icofont-info-square icofont-2x"></i>Feedback</a></li>
            </ul>
            <div class="logo">
                <img src=../img/logo.png>
            </div>
            <div class="note">
                <h2>
                    <?php echo "Dear " . $_SESSION['login_user3'] . " Sir,"; ?>
                </h2>
                <br>
                <p>Welcome to the CUET Central Library. The Library's website is our gateway to our resources and services. The library website aims to provide a brief introduction to the facilities and services provided by the library, library operating hours and other basic information pertaining to the library. The primary objective of library is to implement, enrich, and support the educational programs of Chittagong University Of Engineering & Technology...<br><br>Sincerely Your's,<br>Admin Pnael</p>
            </div>
        </section>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert("Please Login to go to Admin Home Page!");
            window.location = "faculty-login.php";
        </script>
    <?php
    }
    ?>
</body>

</html>