<!DOCTYPE html>
<html>

<head>
    <title>File upload</title>
    <link rel="stylesheet" href="css/upload-book-style.css">
</head>

<body>
    <divc class="signupbox">
        <img src="img/1200px-CUET_Vector_ogo.svg.png" class="image">
        <h1>Upload Book's here!</h1>
        <form method="post" enctype="multipart/form-data">
            <p>ID</p>
            <input type="text" name="id" placeholder="Enter Book ID">
            <p>Book Name</p>
            <input type="text" name="title" placeholder="Book Name">
            <p>Authors
            <p>
                <input type="text" name="author" placeholder="Enter Auhtor's Name">
            <p>Edition</p>
            <input type="text" name="edition" placeholder="Enter Edition">
            <p>Status</p>
            <input type="text" name="status" placeholder="Enter Status">
            <p>Quantity</p>
            <input type="text" name="quantity" placeholder="Enter Quantity">
            <p>Department</p>
            <input type="text" name="department" placeholder="Enter Department">
            <p>File Upload</p>
            <input type="file" name="file">
            <input type="submit" name="submit">
        </form>
    </divc>
</body>

</html>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cuetcentrallibrary";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (isset($_POST["submit"])) {
    if (empty($_POST["id"]) || empty($_POST["title"]) || empty($_POST["status"]) || empty($_POST["quantity"]) || empty($_FILES["file"]["name"])) { ?>
        <script type="text/javascript">
            alert("Please enter necessary information and the file!")
            window.location = "upload-book.php"
        </script>
        <?php } else {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $edition = $_POST["edition"];
        $status = $_POST["status"];
        $quantity = $_POST["quantity"];
        $department = $_POST["department"];
        $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];
        $tname = $_FILES["file"]["tmp_name"];
        $uploads_dir = 'C:\xampp\htdocs\library-website\document';
        move_uploaded_file($tname, $uploads_dir . '/' . $pname);
        $sql = "INSERT into fileup(id,title,author,edition,status,quantity,department,document) VALUES('$id','$title','$author','$edition','$status','$quantity','$department','$pname')";



        if (mysqli_query($conn, $sql)) { ?>
            <script type="text/javascript">
                alert("Book uploaded successfully!")
                window.location = "admin-home.php"
            </script>
        <?php } else { ?>
            <script type="text/javascript">
                alert("Something is wrong! Please Try again!")
                window.location = "upload-book.php"
            </script>
<?php }
    }
}
?>