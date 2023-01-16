<?php
session_start();
include_once 'includes/functions.php';
include_once 'includes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<nav class="navbar navbar-dark fixed-top navbar-expand-lg" style="background-color: #B85042;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">HILLTON</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavButton" aria-controls="navbarNavButton" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavButton">
                <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="news.php" class="nav-link">NEWS</a></li>
                <li class="nav-item"><a href="signup.php" class="nav-link">SIGNUP</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
                
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
                    <li class="nav-item"><a href="booking.php" class="nav-link">BOOKING</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">LOGOUT</a></li>
                    <li class="nav-item"><a href="account.php" class="nav-link">MY ACCOUNT</a></li>
                <?php } ?>
                </ul>
            </div>
        </div>
</nav>










