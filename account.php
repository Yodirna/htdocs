<?php
include_once 'nav.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include "css/style.css" ?>
  </style>
</head>
<body>
  <?php
  if(isset($_SESSION['logged_in']) && $_SESSION['usertype'] == 'user')
  { ?>

  <?php
  }
  ?>
<h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam quaerat sint minima eaque at beatae explicabo mollitia omnis officia culpa unde, saepe doloremque optio enim recusandae tempora, modi fugiat.</h1>
</body>