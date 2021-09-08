<html>
   <head>
        <title>Retrieval of Password</title>
        <link rel="stylesheet" href="../student/css/student-mail-style.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="img/1200px-CUET_Vector_ogo.svg.png" class="image">
            <h1>Retrieve Your Password Here!</h1>
        <form method="post">
            <p>User Name</p>
            <input type="text" name="username" placeholder="Enter Your User Name">
            <p>E-mail</p>
            <input type="text" name="email" placeholder="Enter Your E-mail">
            <input type="submit" name="submit">
        </form>
        </div>
    </body>
</html>
<?php

if(isset($_POST["submit"]))
{
    $username=$_POST['username'];
    $email=$_POST["email"];
    $conn = mysqli_connect("localhost","root","","cuetcentrallibrary");
    
    
    $username = stripcslashes($username);
    $email = stripcslashes($email);
    $username = mysqli_real_escape_string($conn,$username);
    $email = mysqli_real_escape_string($conn,$email);

    if(!empty($username) && !empty($email)){ 
    
    $result = mysqli_query($conn,"select * from admin where admin_username = '$username' and emailid = '$email'")
            or die("Failed to query database: " . mysqli_error($conn));
      $row = mysqli_fetch_array($result);

        if($row['admin_username'] == $username && $row['emailid'] == $email){
               if(mail($email, 'Retrieve Your Password','Dear '.$row['admin_username'].', your password is: '.$row['password'])){
                ?>
        <script type="text/javascript">
            alert("We've sent your password to your E-mail. Please check your E-mail!!");
            window.location="admin-login.php";
        </script>
        <?php
              }
               else {
              ?>
    <script type="text/javascript">
        alert("Your Username and E-mail doesn't match! Please try again");
        window.location="admin-login.php";
    </script>
        <?php
       }
       }
    else {
                      ?>
    <script type="text/javascript">
        alert("Your Username and E-mail doesn't match! Please try again");
        window.location="admin-mail.php";
    </script>
        <?php
    }
    }
    else {
                              ?>
    <script type="text/javascript">
        alert("Please fill all the fields!!");
        window.location="admin-mail.php";
    </script>
        <?php
    }
        }
?>