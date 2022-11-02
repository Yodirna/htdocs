<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Hillton Hotel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">        
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registerbs.php">Registrierung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginbs.php">Login</a>
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
    <form>
        <div class="container">
            <div class ="row align-items-center mt-3 g-2">
                <div class="col-md-12">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                          Gender
                        </button>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                      <a class="dropdown-item">Male</a>
                      <a class="dropdown-item">Female</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="E-Mail" aria-label="E-Mail">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control username" placeholder="Username" aria-label="Username">
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control password" placeholder="Password" aria-label="Password">
                </div>
                <div class="col-md-12">
                  <input type="password" class="form-control password" placeholder="Confirm Password" aria-label="Password">
                </div>
                <div class="container mt-3">
                  <button type="button" class="btn btn-outline-primary">Submit</button>
                </div>
            </div> 
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>