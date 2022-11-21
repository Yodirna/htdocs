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

  if(($_POST['pw']!=$_POST['pw2'])){
    echo "Your passwords don't match";
  }
  else
  {
  $message = 'Welcome! Here are your login details: ';
  echo "$message<br>";
  $gender=$_POST['btnradio'];
  $name=$_POST['fname'];
  $mail=$_POST['mail'];
  echo"gender: $gender<br>";
  echo"username: $name<br>";
  echo"mail: $mail<br>";
  }
  ?>

</h1>
</body>
</html>