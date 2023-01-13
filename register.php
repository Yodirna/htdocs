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


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $password_2 = $_POST["password_2"];
  if (!isset($_COOKIE["name_cookie"])){
      $_COOKIE["name_cookie"] ="$lname";

  }else{
      //erstellt einen cookie für die begrüßung
      setcookie("name_cookie", $lname, time() + 600);
  }
}
?>

<?php
  if (isset($_COOKIE["name_cookie"])){
      //bei erfolg:
      echo "Hallo " . $_COOKIE["name_cookie"] . ", ";
      echo "<h4>Sie haben sich erfolgreich registriert.";
      //speichert die daten in der db ein
      include "./reg_into_db.php";


      include_once "../0include/footer.php";


  }else{
      // wenn es schief läuft
      echo "Leider ist etwas schiefgelaufen. <a href='./new_reg.php'>Erneut registrieren</a> ";
  }
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
$db_obj = new mysqli('localhost', 'jimmy', 'password', 'test');
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