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
  <div class="container center1 text-center">
    <h1>SIGN IN</h1>
    <form role="form" action="includes/loginincludes.php" method="post">
      <div class="txt_field">
        <input type="email" name="email" placeholder="Email..." required>
      </div>
      <div class="txt_field">
        <input type="password" name="password" placeholder="Password..." required>
      </div>
      <input class="btn btn-outline-light" type="submit" name="login" value="LOGIN">
    </form>
  </div>
</body>
</html>

<?php
include_once 'includes/footer.php';
?>