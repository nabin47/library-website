<!DOCTYPE html>
<html>
<head>
<title>Books Gallery</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/book-gallery-style.css">
</head>
<body>
<div class="album-sec">
<div class="container">
<div class="row">
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
<a href="bookgallery.php?file=1349-intel_book.pdf" target="_blank">download</a>
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
<h3>Textbook of Electrical Technology	</h3>
<p>BL Theraja</p>
</div>
<a href="BooksGallery.php?file=3966-a-textbook-of-electrical-technology-volume-i-basic-electrical-engineering-b-l-theraja.pdf" target="_blank">download</a>
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
<a href="BooksGallery.php?file=4305-Rosen_Discrete_Mathematics_and_Its_Applications_7th_Edition.pdf" target="_blank">download</a>
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
<a href="BooksGallery.php?file=7842-John E. Hopcroft, Rajeev Motwani, Jeffrey D. Ullman-Introduction to Automata Theory, Languages, and Computations-Prentice Hall (2006).pdf" target="_blank">download</a>
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
<a href="BooksGallery.php?file=8596-INTRODUCTORY CIRCUIT ANALYSIS.PDFpdf" target="_blank">download</a>
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
<a href="BooksGallery.php?file=9132-principles-of-electronics-s-chand-v-k-mehta-rohit-mehta.pdf" target="_blank">download</a>
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
<a href="BooksGallery.php?file=1512-C++Complete Reference (3rd Ed.).pdf" target="_blank">download</a>
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
<a href="BooksGallery.php?file=9615-Fundamentals_Of_Electric_Circuits-5th-Edition.pdf" target="_blank">download</a>
</div>
</div>
</div>
    
</div>
</div>
</div>
</body>
</html>
<?php
if(!empty($_GET['file']))
{
  $filename = basename($_GET['file']);
$filepath = 'document/' . $filename;
    if(!empty($filename)&&file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        readfile($filepath);
        exit;
    }
    else{
        echo "This file doesn't exist";
    }
}
?>