<?php
// leave php tag open
$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="flightbooking";

$conn = mysqli_connect($serverName, $dBUsername, $dBName, $dBPassword);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}