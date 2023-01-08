<?php

$dbhost = "localhost";
$dbname = "login_db";
$dbuser = "root";
$dbpass = "";

if (!$con = mysqli_connect($dbhost, $dbname, $dbuser, $dbpass))
{
    die("failed to connect!");
}