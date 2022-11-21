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
      echo "<script>alert('$message')</script>"; 
      header('Refresh: 1; URL = index.php?site=upload.php');
    } else {
      $message = 'Wrong username or password.';
      echo "<script>alert('$message')</script>"; 
    }
  }
  ?>
  <div class="center">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>