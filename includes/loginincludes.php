<?php


if (isset($_POST['login'])) {
//validate email
    require_once "connection.php";
    require_once 'functions.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
  
    userlogin($conn, $email, $password);

}else {
    header("location: ../login.php");
    exit();
}

?>