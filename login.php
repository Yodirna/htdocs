<!--bissi responsive-->
<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = strtolower($_POST["email"]);
    $password = $_POST["password"];
    //db con
    $db_obj = new mysqli('localhost', 'jimmy', 'password', 'test');
    $sql = "SELECT * FROM `login`";
    $result = $db_obj->query($sql);

    if ($result->num_rows > 0) {

        //iteriert alle datensätz in der Datenbank
        while($row = $result->fetch_assoc()) {

            // sucht email
            if ($email == $row["usermail"] ){

                // überprüft passwort
                if (password_verify($_POST["pw"], $row["pw"])){
                    session_start();
                    $_SESSION["user_id"] = $row["id"];

                    $_GET["site"] = "home";
                    include"index.php";
                    exit();
                }else{
                    $error = "Password or Email dont match";
                }
            }else{
                $error = "Password or Email dont match";
            }
        }
    }
    $db_obj->close();
}
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
    <?php include "style.css" ?>
  </style>
</head>
<body>
  <?php
  $message = '';
  if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if($_POST['username'] == 'Gorilla' && $_POST['password'] == 'hotel123') {
      $_SESSION['userid'] = 'admin';
      $_SESSION['login_time'] = time();
      $message = 'Successful login, welcome back Admin.';
      session_start();
      echo "<script>alert('$message')</script>"; 
      $_GET["site"] = "home";
        echo "<meta http-equiv='refresh' content='0; URL=http://localhost/index.php'>";

        } else {
      $message = 'Wrong username or password.';
      echo "<script>alert('$message')</script>";
      //echo "<meta http-equiv='refresh' content='0'>";
    }
  }
  ?>
  <div class="container center1 text-center">
    <h1>SIGN IN</h1>
    <form role="form" action="" method="post">
      <div class="txt_field">
        <input type="text" name="username" placeholder="USERNAME" required>
      </div>
      <div class="txt_field">
        <input type="password" name="password" placeholder="PASSWORD" required>
      </div>
      <input class="btn btn-outline-light" type="submit" name="login" value="LOGIN">
      <div class="help">
        <a class="help" <?= ($site == "help") ? "active" : "" ?> href="?site=help">CAN'T SIGN IN? </a>
      </div>
      <div class="create">
        <a class="create <?= ($site == "signup") ? "active" : "" ?>" href="?site=signup">CREATE ACCOUNT</a>
      </div>
    </form>
  </div>
</body>
</html>