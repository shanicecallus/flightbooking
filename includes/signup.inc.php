<?php

#set_error_handler(createUser($conn, $firstname, $lastname, $username, $pwd));

if(isset($_POST["submit"])) {
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignUp($firstname, $lastname, $username, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    // if (invalidUid($username) !== false) {
    //     header("location: ../signup.php?error=invalidUid");
    //     exit();
    // }
    if (invalidEmail($username) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (emailexists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $firstname, $lastname, $username, $pwd);
}
else {
    header("location: ../index.php");
}