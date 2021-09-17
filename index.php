<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homepage-style.css">
    <link rel="stylesheet" href="css/homepage-carousel.css">
    <link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <title>CUET Central Library</title>
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="CUET Logo" style="height: 10vh; width: auto;"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                if (isset($_SESSION['login_user1']) || isset($_SESSION['login_user2']) || isset($_SESSION['login_user3'])) { ?>

                    <ul class="navbar-nav navbar-right me-auto mb-2 mb-lg-0">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Book Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="book/eee-books.php">EEE</a></li>
                                <li><a class="dropdown-item" href="book/cse-books.php">CSE</a></li>
                                <li><a class="dropdown-item" href="book/me-books.php">ME</a></li>
                                <li><a class="dropdown-item" href="book/ce-books.php">CE</a></li>
                                <li><a class="dropdown-item" href="book/ete-books.php">ETE</a></li>
                                <li><a class="dropdown-item" href="book/mie-books.php">MIE</a></li>
                                <li><a class="dropdown-item" href="book/math-books.php">Mathematics</a></li>
                                <li><a class="dropdown-item" href="book/physics-book.php">Physics</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contacts</a>
                        </li>
                    </ul>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($_SESSION['login_user1'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="student/student-home.php">Student Dashboard</a>
                            <?php
                        }
                        if (isset($_SESSION['login_user2'])) { ?>
                                <a class="nav-link active" aria-current="page" href="admin/admin-home.php">Admin Dashboard</a>
                            <?php
                        }
                        if (isset($_SESSION['login_user3'])) { ?>
                                <a class="nav-link active" aria-current="page" href="faculty/faculty-home.php">Student Dashboard</a>
                            <?php
                        }
                            ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['login_user1'])) { ?>
                                <a class="nav-link active" aria-current="page" href="student/student-logout.php">Logout</a>
                            <?php
                            }
                            if (isset($_SESSION['login_user2'])) { ?>
                                <a class="nav-link active" aria-current="page" href="admin/admin-logout.php">Logout</a>
                            <?php
                            }
                            if (isset($_SESSION['login_user3'])) { ?>
                                <a class="nav-link active" aria-current="page" href="faculty/faculty-logout.php">Logout</a>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                <?php
                } else { ?>
                    <ul class="navbar-nav navbar-right me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Book Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="book/eee-books.php">EEE</a></li>
                                <li><a class="dropdown-item" href="book/cse-books.php">CSE</a></li>
                                <li><a class="dropdown-item" href="book/me-books.php">ME</a></li>
                                <li><a class="dropdown-item" href="book/ce-books.php">CE</a></li>
                                <li><a class="dropdown-item" href="book/ete-books.php">ETE</a></li>
                                <li><a class="dropdown-item" href="book/mie-books.php">MIE</a></li>
                                <li><a class="dropdown-item" href="book/math-books.php">Mathematics</a></li>
                                <li><a class="dropdown-item" href="book/physics-book.php">Physics</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sign up
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="student/student-signup.php">Student Sign up</a></li>
                                <li><a class="dropdown-item" href="faculty/faculty-sign.php">Faculty Sign up</a></li>
                                <li><a class="dropdown-item" href="admin/admin-sign.php">Admin Sign up</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Log in
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="student/student-login.php">Student Log in</a></li>
                                <li><a class="dropdown-item" href="faculty/faculty-login.php">Faculty Log in</a></li>
                                <li><a class="dropdown-item" href="admin/admin-login.php">Admin Log in</a></li>
                            </ul>
                        </li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Contacts</a>
                        </li>
                    </ul>
                <?php
                } ?>

            </div>
        </div>
    </nav>

    <!-- Navbar End -->

    <div class="jumbotron">
        <div class="container text-center">
            <h1>CUET Central Library</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="btn-grou" role="group">
            <a href="http://localhost/library-website/book/view-book.php" class="btn">Book List</a>
            <a href="http://localhost/library-website/book/book-gallery.php" class="btn">Downloads</a>
            <a href="#" class="btn">Our Gallery</a>
        </div>
    </div>


    <!-- Slideshow container -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background-image: url('book/img/slide-1.jpg');"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1>New Arrivals!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image: url('book/img/slide-2.jpg');"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1>New Arrivals!</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image: url('book/img/slide-3.jpg');"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h1>New Arrivals!</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- slideshow container end -->

    <!-- footer start -->
    <footer class="text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">CUET Central Library</h5>

                    <p>
                        Chittagong University of Engineering & Technology
                    </p>
                    <p>
                        <span class="oi oi-location" title="location" aria-hidden="true"></span> Pahartoli, Raozan-4349, Chittagong, Bangladesh
                    </p>
                    <p>
                        <span class="oi oi-envelope-closed"></span> iict@cuet.ac.bd, registrar@cuet.ac.bd
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Useful Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://www.cuet.ac.bd/scholarship" class="text-white">Scholarship</a>
                        </li>
                        <li>
                            <a href="http://cuet.xyz/FabLab/" class="text-white">FabLab</a>
                        </li>
                        <li>
                            <a href="https://www.cuet.ac.bd/clblp/" class="text-white">CLBLP</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0">Conferences & Journals</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="http://icmerecuet.org/" class="text-white">ICMERE 2021</a>
                        </li>
                        <li>
                            <a href="https://www.cuet.ac.bd/conf/icpsdt2019" class="text-white">ICPSDT 2019</a>
                        </li>
                        <li>
                            <a href="https://speechanalyst.com/program-schedule/" class="text-white">BDML 2020</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © Developed By:
            <a class="text-white" href="https://mdbootstrap.com/">Jawad</a> <span> & </span>
            <a class="text-white" href="https://mdbootstrap.com/">Nabin</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/carousel-control.js"></script>
</body>

</html>