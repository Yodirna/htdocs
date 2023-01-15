<?php
 include_once 'nav.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style> <?php include "css/style.css" ?> </style>
</head>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    include_once "includes/bookingtodb.php";
    }
?>

<p class="container text-center pt-5">BOOK ROOM</p>

<form class="form-group" action="" method="POST">

    <div class="container text-center mb-3">
        <div class="btn-group" role="group" aria-label="radio toggle btn group">
            <input type="radio" class="btn-check" name="roomtype" id="single" value="single" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="single">single room</label>

            <input type="radio" class="btn-check" name="roomtype" id="double" value="double" autocomplete="off" >
            <label class="btn btn-outline-primary" for="double">double room</label>

            <input type="radio" class="btn-check" name="roomtype" id="luxury" value="luxury" autocomplete="off">
            <label class="btn btn-outline-primary" for="luxury">luxury room</label>
        </div>
    </div>

    <div class=" text-center">
        <div class=" container input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Anreisedatum</span>
            <input type="date" value="2023-01-01" class="form-control" id="von" name="resvon">
        </div>

        <div class=" container input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Abreisedatum</span>
            <input type="date" value="2023-01-01" class="form-control" id="bis" name="resbis">
        </div>
    </div>

    <div class ="container">
        <div class="container btn-group mb-3" role="group" aria-label="radio toggle button group">
            <input type="radio" class="btn-check" name="frue" id="mitfr" value="mit Frühstück" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="mitfr">mit Frühstück (+20€)</label>

            <input type="radio" class="btn-check" name="frue" id="ohnefr" value="ohne Frühstück" autocomplete="off">
            <label class="btn btn-outline-primary" for="ohnefr">ohne Frühstück</label>
        </div>
        <div class="container btn-group mb-3" role="group" aria-label="radio toggle button group">
            <input type="radio" class="btn-check" name="parkplatz" id="mitpark" value="mit Parkplatz" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="mitpark">mit Parkplatz (+30€)</label>

            <input type="radio" class="btn-check" name="parkplatz" id="ohnepark" value="ohne Parkplatz" autocomplete="off">
            <label class="btn btn-outline-primary" for="ohnepark">ohne Parkplatz</label>
        </div>
    </div>

    <div class="container">
    <div class="container btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="haustier" id="haustier" value="mit Haustier" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="haustier">Anreise mit Haustier (+10€)</label>
            <input type="radio" class="btn-check" name="haustier" id="khaustier"  value="ohne Haustier" autocomplete="off">
            <label class="btn btn-outline-primary" for="khaustier">Anreise ohne Haustier</label>
        </div>
    </div>

    <div class="container text-center"> 
        <button type="submit" class="btn btn-lg btn-primary">Zimmer reservieren</button>
    </div>
</form>

<?php
include_once 'includes/footer.php';
?>