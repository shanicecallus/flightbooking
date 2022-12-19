<?php
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $passengers = $_POST['passengers'];
        $destination = $_POST['destination'];
        $arrivals = $_POST['arrivals'];
        $departure = $_POST['departure'];

        require_once 'includes/dbh.inc.php';

        $request = "insert into book_form(name, email, phone, address, destination, passengers, arrivals, departure) values
        ('$name', '$email', '$phone', '$address', '$destination', '$passengers', '$arrivals', '$departure')";

        mysqli_query($conn, $request);

        header('location:book.php');

    require_once 'checkout.php';
    }
    else {
        echo 'Something went wrong, please try again.';
    }

    