<?php
session_start();
?>
<!DOCTYPE htm>
<html>
    <head>
        <meta charset="utf-8">
        <title>CUET Central Library</title>
        <link rel="stylesheet" href="css/homepage-style.css">
        <link rel="stylesheet" href="icofont/icofont.min.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src=./img/logo.png>
            </div>
            <?php
                    if(isset($_SESSION['login_user1']) || isset($_SESSION['login_user2']) || isset($_SESSION['login_user3'])){?>
            <ul>
                       <?php
                            if(isset($_SESSION['login_user1'])){?>
                            <li><a href="studenthome.php">Student Dashboard</a></li>
                            <?php
                            }
                            if(isset($_SESSION['login_user2'])){?>
                            <li><a href="adminhome.php">Admin Dashboard</a></li>
                            <?php
                            }
                            if(isset($_SESSION['login_user3'])){ ?>
                            <li><a href="facultyhome.php">Faculty Dashboard</a></li>
                            <?php
                            }
                        ?>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Book Categories</a>
                    <ul>
                        <li><a href="eeebooks.php">EEE</a></li>
                        <li><a href="csebooks.php">CSE</a></li>
                        <li><a href="mebooks.php">ME</a></li>
                        <li><a href="#">Others</a>
                        <ul>
                        <li><a href="cebooks.php">CE</a></li>
                        <li><a href="#">ETE</a></li>
                        <li><a href="#">MIE</a></li>
                        <li><a href="mathbooks.php">Mathematics</a></li>
                            <li><a href="#">Physics</a></li>
                        </ul> 
                        </li>
                    </ul> 
                </li>
                <li><a href="contact.php">Contacts</a></li>
                            <?php
                            if(isset($_SESSION['login_user1'])){?>
                            <li><a href="studentlogout.php">Logout</a></li>
                            <?php
                            }
                            if(isset($_SESSION['login_user2'])){?>
                            <li><a href="adminlogout.php">Logout</a></li>
                            <?php
                            }
                            if(isset($_SESSION['login_user3'])){ ?>
                            <li><a href="facultylogout.php">Logout</a></li>
                            <?php
                            }
                            ?>
                            </ul>
                            <?php 
                    }
            else {?>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="">Book Categories</a>
                    <ul>
                        <li><a href="eeebooks.php">EEE</a></li>
                        <li><a href="csebooks.php">CSE</a></li>
                        <li><a href="mebooks.php">ME</a></li>
                        <li><a href="#">Others</a>
                        <ul>
                        <li><a href="cebooks.php">CE</a></li>
                        <li><a href="#">ETE</a></li>
                        <li><a href="#">MIE</a></li>
                        <li><a href="mathbooks.php">Mathematics</a></li>
                            <li><a href="#">Physics</a></li>
                        </ul> 
                        </li>
                    </ul> 
                </li>
                 <li><a href="#">Sign in</a>
                        <ul>
                        <li><a href="student/student-login.php">Student Sign in</a></li>
                        <li><a href="faculty/faculty-login.php">Faculty Sign in</a></li>
                        <li><a href="admin/admin-login.php">Admin Sign in</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Sign up</a>
                        <ul>
                        <li><a href="student/student-signup.php">Student Sign up</a></li>
                        <li><a href="faculty/faculty-signup.php">Faculty Sign up</a></li>
                        <li><a href="admin/admin-signup.php">Admin Sign up</a></li>
                        </ul>  
                        </li>
                        <li><a href="contact.php">Contacts</a></li>
            </ul>
                
            <?php }
                    ?>
                            <div class="title">
                    <h1>CUET Central Library</h1>
                </div>
                <div class="button">
                    <a href="http://localhost/library-website/book/view-book.php" class="btn">Book List</a>
                    <a href="http://localhost/library-website/book/book-gallery.php" class="btn">Downloads</a>
                    <a href="#" class="btn">Our Gallery</a>
                </div>
        </nav>
        <section>
        </section>
    </body>
</html>