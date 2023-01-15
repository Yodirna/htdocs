<?php
 include_once 'nav.php';
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HILLTON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style> <?php include "css/style.css" ?> </style>
</head>
<body>
        <!--div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/lobby.jpg" class="d-block w-100"> 
                </div>
                <div class="carousel-item">
                <img src="img/drink.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="img/smallroom.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    

    <!--?php


        // fetch current "site" (or set to "home" if not defined)


        $site = $_GET["site"] ?? "home";//what the fuck?????????? was is des fürn scheiß amk

        // for security reason:  check if $site is in a list of available sites
        $sites = [ "home", "news", "booking", "support", "login", "signup", "help", "logout", "imprint", "faq", "account", "zreservieren", "error"];
        if (!in_array($site, $sites)) {
            $error = "Seite nicht gefunden - " . $site;//how???????? how does it not find the god damn home page
            $site = "error";    
        }
        // render nav bar
        include_once "nav.php";//bitchass das machtma am anfang!!!!!!!!!!!!
    

        // render site here ...
        include_once $site . ".php";//dude ong was geht hier hab
        include_once "footer.php" ?-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>