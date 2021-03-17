<?php
/* #############################
   #########FUNCTIONS###########
   #############################*/
// Contact form ~insert to database
function contactform($conn2, $emailcontact, $message) {
    $sql2 = "INSERT INTO contact (email, message) VALUES (?, ?);";
    $stmt2 = mysqli_stmt_init($conn2);
    if (!mysqli_stmt_prepare($stmt2, $sql2)) {
        header("location: ../contact.php?error=stmtfailed");
        exit();
    }
}
// Check if empty field
function emptyInputForm($emailcontact, $message) {
    $result2;
    if (empty($emailcontact) || empty($message)){
        $result2 = true;
}
    else {
        $result2 = false;
    }
    return $result2;
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
