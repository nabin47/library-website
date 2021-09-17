<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cuetcentrallibrary";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/view-book-style.css">
    <link rel="stylesheet" href="../css/nav-footer-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

    <!-- Navigation with search bar  -->

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
                <form class="navbar-form d-flex" method="post" name="form1">
                    <input class="form-control me-2" type="text search" name="search" placeholder="Search Books..." required="" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="submit">
                        Search

                    </button>
                </form>
            </div>
        </div>
    </nav>


    <div class="tb">
        <h1 style="padding-top: 70px; font-size: 1.5rem; font-weight: bold">List of books (Mathematics Department)</h1>

        <!-- IF the search button is pressed-->
        <?php
        if (isset($_POST['submit'])) {
            $res = mysqli_query($conn, "SELECT * FROM `fileup` where title like '%$_POST[search]%' && department='MATH' ");

            if (mysqli_num_rows($res) == 0) {
                echo "No book found! Try searching again.";
            } else {
                echo "<div class='table-responsive-md'>";
                echo "<table class='table table-bordered table-hover table-striped' style='font-size: 15px'>";
                echo "<thead class='thead-dark'>";
                echo "<tr style='background-color: #063247';'>";
                //table header
                echo "<td>";
                echo "ID";
                echo "</td>";
                echo "<td>";
                echo "Book-Name";
                echo "</td>";
                echo "<td>";
                echo "Author-Name";
                echo "</td>";
                echo "<td>";
                echo "Edition";
                echo "</td>";
                echo "<td>";
                echo "Status";
                echo "</td>";
                echo "<td>";
                echo "Quantity";
                echo "</td>";
                echo "<td>";
                echo "Department";
                echo "</td>";
                echo "</tr>";
                echo "</thead>";

                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";

                    echo "<td>";
                    echo $row['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['title'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['author'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['edition'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['status'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['quantity'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['department'];
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            }
        }

        //If search button is not pressd

        else {

            $res = mysqli_query($conn, "SELECT * FROM `fileup` WHERE department='MATH' ORDER BY id;");
            echo "<div class='table-responsive-md'>";
            echo "<table class='table table-bordered table-hover table-striped' style='font-size: 15px'>";
            echo "<thead class='thead-dark'>";
            echo "<tr style='background-color: #063247';>";
            //table header
            echo "<td>";
            echo "ID";
            echo "</td>";
            echo "<td>";
            echo "Book-Name";
            echo "</td>";
            echo "<td>";
            echo "Author-Name";
            echo "</td>";
            echo "<td>";
            echo "Edition";
            echo "</td>";
            echo "<td>";
            echo "Status";
            echo "</td>";
            echo "<td>";
            echo "Quantity";
            echo "</td>";
            echo "<td>";
            echo "Department";
            echo "</td>";
            echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";

                echo "<td>";
                echo $row['id'];
                echo "</td>";
                echo "<td>";
                echo $row['title'];
                echo "</td>";
                echo "<td>";
                echo $row['author'];
                echo "</td>";
                echo "<td>";
                echo $row['edition'];
                echo "</td>";
                echo "<td>";
                echo $row['status'];
                echo "</td>";
                echo "<td>";
                echo $row['quantity'];
                echo "</td>";
                echo "<td>";
                echo $row['department'];
                echo "</td>";

                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }

        ?>
    </div>

    <!-- footer start -->
    <footer class="text-white text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © Developed By:
            <a class="text-white" href="https://mdbootstrap.com/">Jawad</a> <span> & </span>
            <a class="text-white" href="https://mdbootstrap.com/">Nabin</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>