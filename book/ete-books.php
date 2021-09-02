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
        table{
                border-collapse: collapse;
                width: 100%;
                font-size: 18px;
                text-align: center;
            }
            th{
                background-color: #40E0D0;
                color: black;
            }
            th,td{
                border: 2px solid #000;
                padding: 15px;
            }
            h1{
                color: #094a89;
                top: 10px;
                text-align: center;
                position: relative;
                top: 10%;
                left: 50%;
                transform: translate(-50%,-50%);
            }
        </style>
    </head>
    <body>
        <header>
            <!--___________________search bar________________________-->

	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
				<input class="form-control" type="text" name="search" placeholder="Search Books..." required="">
				<button type="submit" name="submit">
                    Search
					<!--<span class="glyphicon glyphicon-search"></span> -->
				</button>
		</form>
	</div>
	
    
        <h1>List of Books (ETE Department)</h1>
        <div class="tb">

        <!-- IF the search button is pressed-->
        <?php
        if (isset($_POST['submit'])) {
            $q=mysqli_query($conn,"SELECT * FROM `fileup` where title like '%$_POST[search]%' && department='ME' ");

            if(mysqli_num_rows($q)==0)
            {
                echo "No book found! Try searching again.";
            }
            else {
                
                echo "<table class='table table-bordered table-hover>";
                echo "<tr style='background-color: white;'>";
                //table header
                    echo "<th>"; echo "ID"; echo "</th>";
                    echo "<th>"; echo "Book-Name"; echo "</th>";
                    echo "<th>"; echo "Author-Name"; echo "</th>";
                    echo "<th>"; echo "Edition"; echo "</th>";
                    echo "<th>"; echo "Status"; echo "</th>";
                    echo "<th>"; echo "Quantity"; echo "</th>";
                    echo "<th>"; echo "Department"; echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_assoc($q))
                {
                    echo "<tr>";

                    echo "<td>"; echo $row['id']; echo "</td>";
                    echo "<td>"; echo $row['title']; echo "</td>";
                    echo "<td>"; echo $row['author']; echo "</td>";
                    echo "<td>"; echo $row['edition']; echo "</td>";
                    echo "<td>"; echo $row['status']; echo "</td>";
                    echo "<td>"; echo $row['quantity']; echo "</td>";
                    echo "<td>"; echo $row['department']; echo "</td>";

                    echo "</tr>";
                }
            echo "</table>";

            }
        }

        //If search button is not pressd

        else {
            
        
            $res=mysqli_query($conn, "SELECT * FROM `fileup` WHERE department='ME' ORDER BY `fileup`.`title` ASC;");
            echo "<table class='table table-bordered table-hover>";
                echo "<tr style='background-color: white;'>";
                //table header
                    echo "<th>"; echo "ID"; echo "</th>";
                    echo "<th>"; echo "Book-Name"; echo "</th>";
                    echo "<th>"; echo "Author-Name"; echo "</th>";
                    echo "<th>"; echo "Edition"; echo "</th>";
                    echo "<th>"; echo "Status"; echo "</th>";
                    echo "<th>"; echo "Quantity"; echo "</th>";
                    echo "<th>"; echo "Department"; echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<tr>";

                    echo "<td>"; echo $row['id']; echo "</td>";
                    echo "<td>"; echo $row['title']; echo "</td>";
                    echo "<td>"; echo $row['author']; echo "</td>";
                    echo "<td>"; echo $row['edition']; echo "</td>";
                    echo "<td>"; echo $row['status']; echo "</td>";
                    echo "<td>"; echo $row['quantity']; echo "</td>";
                    echo "<td>"; echo $row['department']; echo "</td>";

                    echo "</tr>";
                }
            echo "</table>";
        }

        ?>
        </div>     
        </header>
    </body>
</html>