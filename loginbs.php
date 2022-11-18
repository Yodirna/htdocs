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
    <nav class="navbar navbar-expand-lg navbar-dark mb-3" style="background-color: #B85042">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Hillton Hotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="registerbs.php">Registrierung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="loginbs.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hilfebs.php">Hilfe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="impressumbs.php">Impressum</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <h1 class="text-center">User-Login</h1>
        <form action="login_page.php" method="post">
          <div class="container">
            <input type="text" class="form-control" id="usrname" name="usrname" placeholder="Username" required><br>
            <input type="password" class="form-control" id="passwort" placeholder="Password" required><br>
          </div>
          <div class="container mt-3">
            <button type="button" class="btn btn-outline-primary">Submit</button>
          </div>
        </form>
        <div class="text-center">
            Haben Sie noch kein Konto?
            Hier geht es zur <a href="registerbs.php">Registrierung</a>
        </div>
        <footer class="footer fixed-bottom">
        <div>
            <li>
                <a class="link" href="hilfebs.php">HILFE</a>
            </li>
            <li>
                <a class="link" href="impressumbs.php">IMPRESSUM</a>
            </li>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>