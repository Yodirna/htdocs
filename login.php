<?php
//initialize error variable
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validate email
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = strtolower($_POST["email"]);
    } else {
        $error = "Invalid Email format.";
    }

    //check if error message is empty and process the form
    if(empty($error)) {
        $password = $_POST["password"];

        //connect to the database
        $db_obj = new mysqli('localhost', 'jimmy', 'password', 'test');
        if ($db_obj->connect_error) {
            die("Connection failed: " . $db_obj->connect_error);
        }

        //prepared statement to select user
        $stmt = $db_obj->prepare("SELECT * FROM `login` WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        //check if user exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            //verify password
            if (password_verify($password, $row["password"])){
                //start session
                session_start();
                $_SESSION["user_id"] = $row["id"];
                //redirect to home page
                header("Location: home.php");
                exit();
            }else{
                $error = "Email or password is wrong.";
            }
        } else {
            $error = "User does not exist.";
        }
        //close database connection
        $db_obj->close();
    }
}

//check if error message is not empty and show error message
if (!empty($error)) {
    //store error message in session
    $_SESSION["error"] = $error;
    //redirect to login page
    header("Location: login.php");
    exit();
}
?>
<?php
    if (!empty($error)) {
    echo "<script>alert('$error')</script>";
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