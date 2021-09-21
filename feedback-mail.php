<?php
$name=$_POST['name'];
$visitor_email=$POST['email'];
$message=$_POST['message'];
$email_form='cuetcentralibrary@gmail.com';
$email_subject="New Form Submission";
$email_body="User Name:$name.\n".
            "User Message:$message.\n";
 $to="cuetcentralibrary@gmail.com";
 $headers="From:$email from \r\n";
$headers .="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:feedback.php");
?>    