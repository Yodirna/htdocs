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
if(isset($_POST["lname"]) && !empty($_POST["lname"])
&& isset($_POST["fname"]) && !empty($_POST["fname"])
&& isset($_POST["pw"]) && !empty($_POST["pw"])
&& isset($_POST["mail"]) && !empty($_POST["mail"])) {
$_POST["pw"] = password_hash($_POST["pw"], PASSWORD_DEFAULT);



$message = 'Welcome! Here are your login details: ';
echo "$message<br>";
$gender=$_POST['btnradio'];
$name=$_POST['fname'];
$mail=$_POST['mail'];
echo"gender: $gender<br>";
echo"username: $name<br>";
echo"mail: $mail<br>";
}
$last_name = $_POST["lname"];
$first_name = $_POST["fname"];
$user_mail = $_POST["mail"];
$user_pw = $_POST["pw"];
$db_obj = new mysqli('localhost','jimmy', 'password', 'test');
$sql =
    "INSERT INTO `login` (`first_name`, `last_name`,`email`, `password`)
VALUES (?,?,?,?);";
$stmt = $db_obj->prepare($sql);
$stmt ->bind_param("ssss", $first_name, $last_name, $user_mail, $user_pw);
$stmt->execute();

    

  ?>

</h1>
</body>
</html>