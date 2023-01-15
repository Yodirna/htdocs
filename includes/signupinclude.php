<?php


// Error variable to store any error messages

// Check if the form was submitted

    // If all validation checks pass, include the success page
if(isset($_POST['submitButton'])){
    // assign the form values to variables and format correctly for the db
    $first_name = ucfirst(strtolower($_POST["fname"]));
    $last_name = ucfirst(strtolower($_POST["lname"]));
    $email = strtolower($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    require_once 'connection.php';
    require_once 'functions.php';
    // check if the name cookie is set
    if (!isset($_COOKIE["name_cookie"])){
        // if not, set the cookie
        setcookie("name_cookie", $last_name, time() + 600);
    }else{
        // if set, update the cookie
        setcookie("name_cookie", $last_name, time() + 600);
    }
    // create a new mysqli object

    makeUser($conn, $first_name, $last_name, $email, $password);

} else {
    
}




    
  