<?php
session_start();
if(isset($_SESSION['login_user3'])){
    unset($_SESSION['login_user3']);
}
header("location: ../index.php")
?>