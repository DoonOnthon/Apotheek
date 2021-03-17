<?php
/* Check if the user used the button */
if (isset($_POST["submit2"])) {
    /*  */
    $emailcontact = $_POST["emailcontact"];
    $message = $_POST["message"];
    require_once 'dbh.inc.php';
    require_once 'functionscontact.inc.php';
 /* error handler */
    if (emptyInputForm($message, $emailcontact) !== false) {
        header("location: ../contact.php?error=emptyinputForm");
        exit();
    }
    /*
    if (invalidEmail($emailcontact) !== false) {
        header("location: ../contact.php?error=invalidemail");
        exit();
        contactform($message, $emailcontact);
}
*/
}
$conn2 = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn2) {
    die("Connection failed: " . mysqli_connect_error);
}
contactform ($conn2, $message, $emailcontact);
/* send back if not */