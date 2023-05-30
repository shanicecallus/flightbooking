<!--<?php

$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="flightbooking";
try {
    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

} catch (\Throwable $th) {
    die("Connection failed: " . mysqli_connect_error());
}

// if (!$conn) {
    
// } 
//<?php
// used to connect to the database
// $host = "localhost";
// $db_name = "flightbooking";
// $username = "root";
// $password = "";
 
// try {
//     //
//     $conn = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
// }
 
// // show error
// catch(PDOException $exception){
//     echo "Connection error: " . $exception->getMessage();
// }
// 