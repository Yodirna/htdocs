<?php
// check if all required fields are filled
if(isset($_POST["fname"]) && !empty($_POST["fname"])
&& isset($_POST["lname"]) && !empty($_POST["lname"])
&& isset($_POST["email"]) && !empty($_POST["email"])
&& isset($_POST["password"]) && !empty($_POST["password"])) {
  // hash the password
  $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

  // check if the request is a POST request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // assign the form values to variables
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // check if the name cookie is set
    if (!isset($_COOKIE["name_cookie"])){
      // if not, set the cookie
      $_COOKIE["name_cookie"] ="$last_name";
    }else{
      // if set, update the cookie
      setcookie("name_cookie", $last_name, time() + 600);
    }
  }
  // display welcome message
  $message = 'Congratulations, your account has been successfully created!';
  echo "<script>alert('$message')</script>";
  echo "<meta http-equiv='refresh' content='0; URL=http://localhost/index.php?site=login'>";
}

// create a new mysqli object
$db_obj = new mysqli('localhost', 'jimmy', 'password', 'test');

// create the insert query
$sql = "INSERT INTO `login` (`first_name`, `last_name`,`email`, `password`) VALUES (?,?,?,?);";

// prepare the statement
$stmt = $db_obj->prepare($sql);

// bind the parameters
$stmt ->bind_param("ssss", $first_name, $last_name, $email, $password);

// execute the statement
$stmt->execute();
?>
</h1>
</body>
