<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#346c91">
    <meta name="theme-color" content="#346c91">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
</head>
<body class="gradient_lr">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html"><img src="images/MF_Logo.svg" alt="Logo More Festivals" id="logo" height="30px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="tomorowland.html">Tomorowland <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="werchter.html">Rock Werchter</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="graspop.html">Graspop Metal Meeting</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div class="row text-white justify-content-center">
    <div class="col-6 text-center">
        <h1>Verzonden!</h1>
        <h1> Bedankt om uw mening te delen.</h1>
    </div>
</div>


<div class="container text-white">
    <div class="row justify-content-center text-center">
        <div class="col">
            <?php
            echo "<p> Dankuwel " . $_POST["name"] . " " . $_POST["last_name"] . " met email address " . $_POST["email"] ."</p>";
            echo "<p class='text-white'> U heeft contact opgenomen met als bericht:  </p>";
            echo "<p class='text-white'> ". $_POST["opmerking"] . " </p>"
            ?>
        </div>
    </div>
</div>


<footer class="pt-2 pb-2 text-white text-center donker fixed-bottom">
    Door Philippe Boets in opdracht van <a class="text-white" href="http://www.thomasmore.be/ ">Thomasmore.be</a> by
    <a class="text-white" href="http://philippe.sinners.be/uitdaging2/index.html">Parallax Design Ltd.</a>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!--custom scripts-->
</body>
</html>