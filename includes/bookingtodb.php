
<?php

if (!isset($_SESSION)){
    session_start();
}

$error = "";
// check if all required fields are filled
if(isset($_POST["roomtype"]) && !empty($_POST["roomtype"])
&& isset($_POST["resvon"]) && !empty($_POST["resvon"])
&& isset($_POST["resbis"]) && !empty($_POST["resbis"])
&& isset($_POST["frue"]) && !empty($_POST["frue"])
&& isset($_POST["parkplatz"]) && !empty($_POST["parkplatz"])
&& isset($_POST["haustier"]) && !empty($_POST["haustier"])) {

  // check if the request is a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    // assign the form values to variables
    $roomtype = $_POST["roomtype"];
    $anreise = $_POST["resvon"];
    $abreise = $_POST["resbis"];
    $frue = $_POST["frue"];
    $parkplatz = $_POST["parkplatz"];
    $haustier = $_POST["haustier"];
    $status = "neu";
    //temporary static email and personid
    $email = "uwu@gmail.com";
    $personid = 1;
    }
}

if ($anreise >= $abreise){
    $error = "Abreisedatum darf nicht vor Anreisedatum sein!";
    echo "<script>alert('$error')</script>";
}else{
    $success = "Buchung erfolgreich!";
    $host = 'localhost';
    $user = 'zresuser';
    $password = 'hotel123';
    $database = 'zreservierung';
    $db_obj = new mysqli($host, $user, $password, $database);
    $sql =
        "INSERT INTO `bookings` (`useremail`, `roomtype`,`anreise`, `abreise`, `frue`, `parkplatz`, `haustier`,`status`, `person_id` )
VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $db_obj->prepare($sql);
    $stmt-> bind_param("ssssssssi"
        , $email, $roomtype,$anreise, $abreise, $frue, $parkplatz, $haustier, $status, $personid);
    if ($stmt->execute()) {
        echo "<script>alert('$success')</script>"; }
    else {
        echo "Error";
    }
    $stmt->close(); $db_obj->close();
}
?>

