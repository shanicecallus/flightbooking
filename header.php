<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

   <!-- css file link -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header section starts -->
    <section class="header">
        <a href="index.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="destination.php">Destination</a>
            <a href="book.php">Book</a>
            <?php 
                if (isset($_SESSION["useruid"])) {
                    echo "<a href='profile.php'>My Profile</a>";
                    echo "<a href='includes/logout.inc.php'>Log out</a>";
                }
                else {
                    echo "<a href='signup.php'>Sign Up</a>";
                    echo "<a href='login.php'>Log In</a>";
                }
            ?>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- Header section ends -->