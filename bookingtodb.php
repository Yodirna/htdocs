
<?php
// check if all required fields are filled
if(isset($_POST["roomtype"]) && !empty($_POST["roomtype"])
&& isset($_POST["resvon"]) && !empty($_POST["resvon"])
&& isset($_POST["resbis"]) && !empty($_POST["resbis"])
&& isset($_POST["frue"]) && !empty($_POST["frue"])
&& isset($_POST["parkplatz"]) && !empty($_POST["parkplatz"])
&& isset($_POST["haustier"]) && !empty($_POST["haustier"])) {

  // check if the request is a POST request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // assign the form values to variables
    $roomtype = $_POST["roomtype"];
    $resvon = $_POST["resvon"];
    $resbis = $_POST["resbis"];
    $frue = $_POST["frue"];
    $parkplatz = $_POST["parkplatz"];
    $haustier = $_POST["haustier"];

}
  // successfully created 
  $message = 'Congratulations, your room has been successfully booked!';
  echo "<script>alert('$message')</script>";
  echo "<meta http-equiv='refresh' content='3; URL=http://localhost/index.php?site=zreservieren'>";
}

if ($arrival_date > $departure_date){
    $error = "Abreise Datum muss nach dem Anreise Datum sein!";
}else{
    $success = "Buchung erfolgreich!";
    $host = 'localhost';
    $user = 'zresuser';
    $password = 'hotel123';
    $database = 'zreservierung';
    $db_obj = new mysqli($host, $user, $password, $database);
    $sql =
        "INSERT INTO `zreservierung` (`usermail`, `room_type`,`anreise_datum`, `abreise_datum`,`garage`, `frühstück`, `Tier`, `status`,`fk_person_id`)
VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $db_obj->prepare($sql);
    $stmt-> bind_param("ssssssssi"
        , $email, $room_type,$arrival_date, $departure_date, $Parkplatz, $breakfast, $haustier, $status, $_SESSION["user_id"]);
    if ($stmt->execute()) {
        echo ""; }
    else {
        echo "Error";
    }
    $stmt->close(); $db_obj->close();
}
?>

