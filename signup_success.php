<?php
// No need to start another session.

// check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // assign the form values to variables and format correctly for the db
    $fname = ucfirst(strtolower($_POST["fname"]));
    $lname = ucfirst(strtolower($_POST["lname"]));
    $$email = strtolower($_POST["email"]);
    $password = $_POST["password"];
    // create a cookie that expires in 600 seconds
    setcookie("name_cookie", $lname, time() + 600);
}

// check if the cookie is set
if(isset($_COOKIE['name_cookie'])){
    // include the register page
    include "./register.php";
}else{
    // if the cookie is not set, display a message
    echo "Cookie not set";
}
?>
