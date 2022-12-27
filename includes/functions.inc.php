<?php
function emptyInputSignUp($firstname, $lastname, $username, $pwd, $pwdrepeat) {
    $result = true; 
    if (empty($firstname) || empty($lastname) || empty($username) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result = true; 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { //search algorithm to match with what the user typed in
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($username) { 
    if (filter_var($username, FILTER_VALIDATE_EMAIL) === false) { //search algorithm to match with what the user typed in
        return true;
    }
    return false;
}

function pwdMatch($pwd, $pwdrepeat) {
    $result = true; 
    if ($pwd !== $pwdrepeat) { //search algorithm to match with what the user typed in
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailexists($conn, $username) {
    $sql = "select * from users where email = ?;"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ...signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastname, $username, $pwd) {
    $sql = "insert into users (firstName, lastName, email, pwd) values (?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ..signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ..signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result = true; 
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $emailExists = emailexists($conn, $username);

    if($emailExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start(); 
        $_SESSION["userid"] = $emailExists["userid"];
        $_SESSION["useruid"] = $emailExists["email"];
        header("location: ../home.php");
        exit();
    }
}

