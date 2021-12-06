<?php

$serverName = "Localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "Project";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); #database connection

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}