<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>CONTACT US RU</title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Left-aligned links (default) -->
    <a href="homepage_RU.html">Homepage</a>
    <a href="aboutUs_RU.html">About Us</a>
    <a href="contactUs_RU.html">Contact Us</a>
    <a href="support_RU.html">Support</a>

    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="registerUserProfile.html">My Profile</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <div style="text-align:center">
        <h2>CONTACT WITH US</h2>
        <p>Fiiled the form contact us with officer</p>
    </div>
    <div class="row">


        <form action="#" method="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="What you want mentione ?">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:170px"></textarea>

            <button type="submit" class="addjourneybtn" name="send_contact">Send</a></button>
        </form>
    </div>
</div>

<footer class="main_footer">
    <h5 id="footer_text"> All Rights Reserved By BUS TICKETLY. © 2020</h5>
</footer>

</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "busdb");

if (isset($_POST['send_contact'])) {
    $name = $_POST['fname'];
    $mailForm = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "kbr.flk@hotmail.com";
    $headers = "Form: ".$mailForm;
    $txt = "You have received an e-mail form ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    echo "mail send";
}
?>