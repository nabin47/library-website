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

    <link rel="stylesheet" href="css/view-book-style.css">
    <style type="text/css">
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
            border: 2px solid #000;
            padding: 15px;
        }

        h1 {
            color: #094a89;
            top: 10px;
            text-align: center;
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
    <header>
        <!--___________________search bar________________________-->

        <!-- <div class="srch">
		<form class="navbar-form" method="post" name="form1">
				<input class="form-control" type="text" name="search" placeholder="Search Books..." required="">
				<button type="submit" name="submit">
                    Search
					
				</button>
		</form>
	</div>
	      <div class="button">
                    <a href="javascript:history.go(-1)"onMouseOver="self.status.referrer;return true" class="btn">Back</a>
                </div> -->


        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #063247">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.png" alt="" width="35" height="50">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
            <h1>List of books</h1>

            <!-- IF the search button is pressed-->
            <?php
            if (isset($_POST['submit'])) {
                $res = mysqli_query($conn, "SELECT * FROM `fileup` where title like '%$_POST[search]%' ");

                if (mysqli_num_rows($res) == 0) {
                    echo "No book found! Try searching again.";
                } else {

                    echo "<table class='table table-bordered table-hover>";
                    echo "<tr style='background-color: white;'>";
                    //table header
                    echo "<th>";
                    echo "ID";
                    echo "</th>";
                    echo "<th>";
                    echo "Book-Name";
                    echo "</th>";
                    echo "<th>";
                    echo "Author-Name";
                    echo "</th>";
                    echo "<th>";
                    echo "Edition";
                    echo "</th>";
                    echo "<th>";
                    echo "Status";
                    echo "</th>";
                    echo "<th>";
                    echo "Quantity";
                    echo "</th>";
                    echo "<th>";
                    echo "Department";
                    echo "</th>";
                    echo "</tr>";

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
                    echo "</table>";
                }
            }

            //If search button is not pressd

            else {


                $res = mysqli_query($conn, "SELECT * FROM `fileup` ORDER BY id;");
                echo "<table class='table table-bordered table-hover>";
                echo "<tr style='background-color: white;'>";
                //table header
                echo "<th>";
                echo "ID";
                echo "</th>";
                echo "<th>";
                echo "Book-Name";
                echo "</th>";
                echo "<th>";
                echo "Author-Name";
                echo "</th>";
                echo "<th>";
                echo "Edition";
                echo "</th>";
                echo "<th>";
                echo "Status";
                echo "</th>";
                echo "<th>";
                echo "Quantity";
                echo "</th>";
                echo "<th>";
                echo "Department";
                echo "</th>";
                echo "</tr>";

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
                echo "</table>";
            }

            ?>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>