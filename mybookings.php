<?php
include_once 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Bookings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include "css/style.css" ?>
  </style>
</head>

<?php
  // Connect to the MySQL database
  $host = "localhost";
  $username = "zresuser";
  $password = "hotel123";
  $dbname = "zreservierung";
  $conn = new mysqli($host, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve the reservation data from the "reservations" table
  $sql = "SELECT * FROM bookings";
  $result = $conn->query($sql);
?>
<h1 class="mt-5 text-center"> My bookings </h1>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>Booking Nr.</th>
            <th>Email</th>
            <th>Room</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Breakfast</th>
            <th>Parking</th>
            <th>Pet</th>
            <th>Status</th>
            <th>Person_ID</th>
        </tr>
    </thead>
    <tbody>


<?php
  // Display the reservation data
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo 
      "
      <tr> <td>" . $row["booking_id"]. "</td>
      <td>" . $row["useremail"]. "</td>
      <td>" . $row["roomtype"]. "</td>
      <td>" . $row["anreise"]. "</td>
      <td>" . $row["abreise"]. "</td>
      <td>" . $row["frue"] . "</td>
      <td>" . $row["parkplatz"] . "</td>
      <td>" . $row["haustier"] . "</td>
      <td>" . $row["status"] . "</td>
      <td>" . $row["person_id"] . "</td>
      </tr>";
    }
  } else {
    echo "<tr><td colspan='4'>No reservations found.</td></tr>";
  }

?>
  </tbody>
</table>
</div>

<?php
  // Close the connection
  $conn->close();
?>

<?php
include_once 'includes/footer.php';
?>