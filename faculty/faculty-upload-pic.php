<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Picture upload</title>
    <link rel="stylesheet" href="../css/upload-pic.css">
</head>

<body>
    <?php
    if (isset($_SESSION['login_user3'])) { ?>
        <divc class="signupbox">
            <img src="img/1200px-CUET_Vector_ogo.svg.png" class="image">
            <h1>Upload Picture Here!</h1>
            <form method="post" enctype="multipart/form-data">
                <p>File Upload</p><br>
                <input type="file" name="file"><br><br>
                <input type="submit" name="submit">
            </form>
        </divc>
    <?php    } else {
    ?>
        <script type="text/javascript">
            alert("Please Login to go to see this page!");
            window.location = "faculty-login.php";
        </script>
    <?php
    }
    ?>
</body>

</html>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cuetcentrallibrary";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (isset($_POST["submit"])) {
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    $uploads_dir = 'C:\xampp\htdocs\library-website\faculty\img';
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);
    if (!empty($tname)) {
        $sql = "UPDATE faculty SET pic='$pname' WHERE faculty_username='$_SESSION[login_user3]'";

        if (mysqli_query($conn, $sql)) {
?>
            <script type="text/javascript">
                alert("Uploaded Picture Successfully!!");
                window.location = "faculty-profile.php";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Failed to upload!! try again!!");
                window.location = "faculty-upload-pic.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("Please select a picture!!");
            window.location = "faculty-upload-pic.php";
        </script>
<?php
    }
}
?>