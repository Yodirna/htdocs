<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style> <?php include "style.css" ?> </style>
</head>
<body>
    <?php
        // fetch current "site" (or set to "home" if not defined)
        $site = $_GET["site"] ?? "home";

        // for security reasone:  check if $site is in a list of available sites
        $sites = [ "home", "news", "booking", "support", "login", "signup", "help"];
        if (!in_array($site, $sites)) {
            $error = "Seite nicht gefunden - " . $site;
            $site = "error";    
        }

        // render nav bar
        include_once "nav.php";
    ?>
    <?php

        // render site here ...
        include_once $site . ".php";
    ?>

    <?php include_once "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>