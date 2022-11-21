<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>
<?php
  $message = '';
  if(($_POST['btnradio']=="male")){
      $message = 'You are male';
      echo $message;
    }
  if(($_POST['btnradio']=="female")){
      $message = 'You are female';
      echo $message;
    }
  if(($_POST['btnradio']=="rns")){
      $message = 'Gender not given';
      echo $message;
    }
  ?>
  
</h1>
  <div class="box">
    <p>you have successfully registered your user</p>
  </div>
</body>
</html>