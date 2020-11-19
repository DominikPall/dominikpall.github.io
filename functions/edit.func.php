<?php 

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    require_once 'dbh.func.php';
    require_once 'functions.php';

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