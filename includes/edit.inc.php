<?php 

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputEdit($name, $email) !== false) {
        header("location: ../account/editProfile.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../account/editProfile.php?error=invalidEmail");
        exit();
    }

    editProfile($conn, $name, $email);

}


?>