<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include "bgstyle.css" ?>
  </style>

</head>

<body>
  <div class="center">
    <h1>SIGN IN</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" placeholder="USERNAME" required>
      </div>
      <div class="txt_field">
        <input type="password" placeholder="PASSWORD" required>
      </div>
      <input class="btn btn-outline-light" type="submit" value="LOGIN">
      <div class="help">
        <a href="help.php">CAN'T SIGN IN?</a>
      </div>
      <div class="create">
        <a href="registerbs.php">CREATE ACCOUNT</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>