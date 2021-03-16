<?php
    $emailcontact = $_POST["email"];
    $message = $_POST["message"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
 /* error handler */
 /*
    if (emptyInputForm($message, $emailcontact) !== false) {
        header("location: ../contact.php?error=emptyinputForm");
        exit();
    }
    */
    if (invalidEmail($emailcontact) !== false) {
        header("location: ../contact.php?error=invalidemail");
        exit();
        contactform($message, $emailcontact);
}
contactform ($conn, $message, $emailcontact);
/* send back if not */
