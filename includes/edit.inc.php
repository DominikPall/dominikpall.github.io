<?php 

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignUp($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../account/edit.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../account/edit.php?error=invalidEmail");
        exit();
    }

    editProfile($conn, $name, $email);

}


?>