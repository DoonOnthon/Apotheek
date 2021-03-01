<?php
/* #############################
   #########FUNCTIONS###########
   #############################*/
//Check if any forms are empty
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
}
    else {
        $result = false;
    }
    return $result;
}
// check if username contains the right characters
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
// Checks if email is an actual email
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
//Checks if the passwords match
function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
//Checks if the UID exists / error handler
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
//Creates user and sends it to the Database
function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    /*Hashing the password*/
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    /* */
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}
//Error handler empty login
function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
}
    else {
        $result = false;
    }
    return $result;
}
//Error handler / logs in the user if done right
function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);
    //error handler
    if ($uidExists == false) {
    header("location: ../login.php?error=wronglogin");
    exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    //error handler wrong login
    if($checkPwd == false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd == true); {
        session_start();
       $_SESSION["userid"] = $uidExists["usersId"];  
       $_SESSION["useruid"] = $uidExists["usersUid"];  
       header("location: ../index.php");
       exit();
    }
}