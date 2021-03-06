<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maxmum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>HOMEPAGE RU</title>
</head>
<body>
<!-- Navbar -->
<div class="navbar">

    <!-- Left-aligned links (default) -->
    <a href="homepage_G.php">Homepage</a>
    <a href="aboutUs_G.php">About Us</a>
    <a href="contactUs_G.html">Contact Us</a>
    <a href="support_G.php">Support</a>

    <!-- Right-aligned links -->
    <div class="navbar-right">
        <a href="login.php">Login</a>
        <a href="registration.php">Registration</a>
    </div>

</div>

<div class="big-image">
    <div id="list_journey">
        <form action="listOfJourneys_G.php" method="POST">
            <label for="from">From</label>
            <select id="from" name="from">
                <option value="İstanbul">İstanbul</option>
                <option value="Ankara">Ankara</option>
                <option value="İzmir">İzmir</option>
                <option value="Adana">Adana</option>
                <option value="Bursa">Bursa</option>
                <option value="Antep">Antep</option>
                <option value="Muğla">Muğla</option>
                <option value="Alanya">Alanya</option>
                <option value="Ordu">Ordu</option>
            </select>
            <label for="destination">Destination</label>
            <select id="destination" name="destination">
                <option value="İstanbul">İstanbul</option>
                <option value="Ankara">Ankara</option>
                <option value="İzmir">İzmir</option>
                <option value="Adana">Adana</option>
                <option value="Bursa">Bursa</option>
                <option value="Antep">Antep</option>
                <option value="Muğla">Muğla</option>
                <option value="Alanya">Alanya</option>
                <option value="Ordu">Ordu</option>
            </select>

            <label for="date">Date</label>
            <br>
            <input type="date" id="date" name="date">
            <br>
            <button type="submit" class="listbtn" name="submit_guest">List Journeys</a></button>
        </form>
    </div>
</div>


<form action="#">
    <input type="text" id="pnrinput" placeholder="Enter pnr number:" name="pnr">
    <button type="submit" class="pnrbtn"><a href="viewTicketDetail_G.html">Find Ticket</a></button>
</form>


<h5 class="h5_class">MOST TRAVELED CITIES</h5>
<div id="box_mostTraveledCities">
    <div class="box_city">
        <div class="image"><img src="img/gorsel01.jpg" width="250px" height="250px"></div>
        <h3 class="h3_class"> ISTANBUL </h3>
    </div>

    <div class="box_city">
        <div class="image"><img src="img/gorsel02.jpg" width="250px" height="250px"></div>
        <h3 class="h3_class"> ANKARA </h3>
    </div>

    <div class="box_city">
        <div class="image"><img src="img/gorsel03.jpg" width="250px" height="250px"></div>
        <h3 class="h3_class"> ADANA </h3>
    </div>

    <div class="box_city">
        <div class="image"><img src="img/gorsel04.jpg" width="250px" height="250px"></div>
        <h3 class="h3_class"> IZMIR </h3>
    </div>
</div>

<h5 class="h5_class">OPPORTUNITIES</h5>
<div id="box_class_icons">
    <div class="box_inside_icons">
        <div class="image_icon"><img class="img_size" src="img/ann.png"></div>
        <h3 class="h4_class"> Announcements </h3>
        <p class="homepage_pid">There are many variations of passages of Lorem Ipsum available,</p>
    </div>

    <div class="box_inside_icons">
        <div class="image_icon"><img class="img_size" src="img/campaing.png"></div>
        <h3 class="h4_class"> Campaigns </h3>
        <p class="homepage_pid">There are many variations of passages of Lorem Ipsum available,</p>
    </div>

    <div class="box_inside_icons">
        <div class="image_icon"><img class="img_size" src="img/news.png"></div>
        <h3 class="h4_class"> News </h3>
        <p class="homepage_pid">There are many variations of passages of Lorem Ipsum available,</p>
    </div>
</div>

<div id="row_id">
    <div class="col_class">
        <h2 class="topic">Travel Information</h2>
        <ul>
            <li>Our Fleet</li>
            <li>Segment</li>
            <li>Passenger Rights</li>
            <li>Frequently Qustions</li>
        </ul>
    </div>

    <div class="col_class">
        <h2 class="topic">Web Pages</h2>
        <ul>
            <li>Homepage</li>
            <li>About Us</li>
            <li>Support</li>
            <li>Our Campaigns</li>
        </ul>
    </div>

    <div class="col_class">
        <h2 class="topic">Contact Us</h2>
        <p id="phone_num"><img src="img/telephone.png" width="35px" height="35px"> 0890 960 66 77 </p>
        <ul>
            <p id="text_socialmedia">Social Medias</p>
            <div class="div_social_medias">
                <ul class="social_medias">
                    <a href="https://www.twitter.com" target="_blank">
                        <img src="img/twitter.png">
                    </a>

                    <a href="https://www.youtube.com" target="_blank">
                        <img src="img/youtube.png">
                    </a>

                    <a href="https://www.instagram.com" target="_blank">
                        <img src="img/instagram.png">
                    </a>
                </ul>
            </div>
        </ul>
    </div>
</div>

<footer class="main_footer">
    <h5 id="footer_text"> All Rights Reserved By BUS TICKETLY. © 2020</h5>
</footer>

</body>
</html>