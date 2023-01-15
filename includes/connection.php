<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "hotel123";
$dBName = "zreservierung";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("failed to connect!".mysqli_connect_error());
}