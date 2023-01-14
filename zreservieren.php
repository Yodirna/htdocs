
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "bookingtodb.php";
}
?>

<p class="container text-center pt-5">BOOK ROOM</p>

<div class="container text-center mb-3">
    <div class=" container btn-group" role="group" aria-label="radio toggle btn group">
        <input type="radio" class="btn-check" name="roomtype" id="roomtypeS" value="single" autocomplete="off" checked required>
        <label class="btn btn-outline-primary" for="single">single room</label>

        <input type="radio" class="btn-check" name="roomtype" id="roomtypeD" value="double" autocomplete="off" >
        <label class="btn btn-outline-primary" for="double">double room</label>

        <input type="radio" class="btn-check" name="roomtype" id="roomtypeL" value="luxury" autocomplete="off">
        <label class="btn btn-outline-primary" for="luxury">luxury room</label>
    </div>
</div>



<form class="form-group" action="" method="POST">
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
        <div class="container btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="frue" id="mitfr" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="mitfr">mit Frühstück</label>
            <input type="radio" class="btn-check" name="frue" id="ohnefr" autocomplete="off">
            <label class="btn btn-outline-primary" for="ohnefr">ohne Frühstück</label>
        </div>
        <div class="container btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="parkplatz" id="mitpark" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="mitpark">mit Parkplatz</label>
            <input type="radio" class="btn-check" name="parkplatz" id="ohnepark" autocomplete="off">
            <label class="btn btn-outline-primary" for="ohnepark">ohne Parkplatz</label>
       
        </div>
    </div>

    <div class="container">
    <div class="container btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="haustier" id="haustier" autocomplete="off" checked required>
            <label class="btn btn-outline-primary" for="haustier">Anreise mit Haustier</label>
            <input type="radio" class="btn-check" name="haustier" id="khaustier" autocomplete="off">
            <label class="btn btn-outline-primary" for="khaustier">Anreise ohne Haustier</label>
        </div>
    </div>

    <div class="container text-center"> 
        <button type="submit" class="btn btn-lg btn-primary">Zimmer reservieren</button>
    </div>
</form>