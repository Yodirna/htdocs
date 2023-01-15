<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "test";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("failed to connect!".mysqli_connect_error());
}