<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact form </title>


    <link rel="stylesheet" href="css/feedback.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
    <div class="contact-title">
        <h1><b>CUET Central Library</b></h1>
        <h2><b>Your Feedback Is Most Valuable to us!</b></h2>
    </div>
    <div class="contact-form">
        <form id="contact-form" method="post" action="feedback-mail.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">

        </form>
        <div>
            <div class="container-fluid padding">
                <div class="row text-center padding">
                    <div class="col-12">
                        <h1>Connect With Us</h1>
                    </div>
                    <div class="col-12 social padding">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

</body>

</html>