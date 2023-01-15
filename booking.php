<?php
include_once 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include "css/style.css" ?>
  </style>
</head>

<div  class="container text-center mt-5">
<body>
    <p>BOOKING </p>
    <a class="btn btn-primary btn-lg btn-block" href="zreservieren.php" role="button">Book a room</a>
    <a class="btn btn-primary btn-lg btn-block" href="mybookings.php" role="button">My bookings</a>
</body>
</div>

<?php
include_once 'includes/footer.php';
?>
<!--insane-->