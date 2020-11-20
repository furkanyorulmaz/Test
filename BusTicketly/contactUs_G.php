<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>CONTACT US
        <G></G>
    </title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Left-aligned links (default) -->
    <a href="homepage_G.html">Homepage</a>
    <a href="aboutUs_G.html">About Us</a>
    <a href="contactUs_G.html">Contact Us</a>
    <a href="support_G.html">Support</a>

    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="login.html">Login</a>
        <a href="registration.html">Registration</a>
    </div>
</div>

<div class="container">
    <div style="text-align:center">
        <h2>CONTACT WITH US</h2>
        <p>You cannot send form before register to system</p>
    </div>
    <div class="row">

        <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="lname">Title</label>
            <input type="text" id="title" name="lastname" placeholder="">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>

            <button type="submit" class="addjourneybtn">Send</button>
        </form>

    </div>
</div>


<footer class="main_footer">
    <h5 id="footer_text"> All Rights Reserved By BUS TICKETLY. © 2020</h5>
</footer>

</body>
</html>