<?php
if (!empty($_GET['file'])) {
    $filename = basename($_GET['file']);
    $filepath = '../document/' . $filename;
    if (!empty($filename) && file_exists($filepath)) {
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        readfile($filepath);
        exit;
    } else {
?>
        <script type="text/javascript">
            alert("This Book is not available now!");
            window.location = "book-gallery.php";
        </script>
<?php
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Books Gallery</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/book-gallery-style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #063247">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/library-website/index.php">
                <img src="../img/logo.png" alt="CUET logo" width="35" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascript:history.go(-1)">Back</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- <div>
        <a class="back-button" href="http://localhost/library-website/index.php"><button class="back">Back</button></a>
    </div> -->
    <div class="album-sec">
        <div class="container">
            <div class="row page-title">
                <div class="col-md-12">
                    <div class="header text-center">
                        <h2>Books Gallery</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/microprocessor.jpg" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Intel microprocessor</h3>
                                <p>Barry B. Brey</p>
                            </div>
                            <a href="book-gallery.php?file=1349-intel_book.pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/Textbook-of-Electrical-Technology-Volume2-AC-and-DC-Machines.png" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Textbook of Electrical Technology </h3>
                                <p>BL Theraja</p>
                            </div>
                            <a href="book-gallery.php?file=3966-a-textbook-of-electrical-technology-volume-i-basic-electrical-engineering-b-l-theraja.pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/discrete.jpeg" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Discrete mathematics and its applications</h3>
                                <p>Kenneth H. Rosen</p>
                            </div>
                            <a href="book-gallery.php?file=4305-Rosen_Discrete_Mathematics_and_Its_Applications_7th_Edition.pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/automata.jpg" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Introduction to automata theory, languages, and computation</h3>
                                <p>John E. Hopcroft</p>
                            </div>
                            <a href="book-gallery.php?file=7842-John-E-Hopcroft-Rajeev-Motwani-Jeffrey-D-Ullman-Introduction-to-Automata-Theory-Languages-and-Computations-Prentice-Hall-(2006).pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/boyel.PNG" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>INTRODUCTORY CIRCUIT ANALYSIS/h3>
                                    <p>Robert L. Boylestad</p>
                            </div>
                            <a href="book-gallery.php?file=8596-INTRODUCTORY%20CIRCUIT%20ANALYSIS.PDFpdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/9132-principles-of-electronics-s-chand-v-k-mehta-rohit-mehta.pdf%20-%20Adobe%20Reader.bmp" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Principle of Electronics</h3>
                                <p>V.K Mehta & Rohit Mehta</p>
                            </div>
                            <a href="book-gallery.php?file=9132-principles-of-electronics-s-chand-v-k-mehta-rohit-mehta.pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/1512-C++Complete%20Reference%20(3rd%20Ed.).pdf%20-%20Adobe%20Reader.bmp" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>C++Complete Reference</h3>
                                <p>Herbert Schildt</p>
                            </div>
                            <a href="book-gallery.php?file=1512-C++Complete Reference (3rd Ed.).pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-album">
                        <div class="album-img">
                            <img src="img/sadiku.PNG" alt="img1" height="380">
                        </div>
                        <div class="album-content">
                            <div class="album-info">
                                <h3>Fundamentals Of Electric Circuits</h3>
                                <p>Charles K. Alexander & Charles Alexander</p>
                            </div>
                            <a href="book-gallery.php?file=9615-Fundamentals_Of_Electric_Circuits-5th-Edition.pdf" target="_blank">download</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>