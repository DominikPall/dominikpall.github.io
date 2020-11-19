<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    $_SESSION["regName"] = $name;
    $_SESSION["regEmail"] = $email;
    $_SESSION["regUid"] = $username;


    require_once 'dbh.func.php';
    require_once 'functions.php';

    if (emptyInSignUp($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../account/signup.php?error=empty");
        exit();
    }

    if (invalidUserId($username) !== false) {
        header("location: ../account/signup.php?error=invalidUserId");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../account/signup.php?error=invalidEmailAdress");
        exit();
    }

    if (passwordMismatch($pwd, $pwdRepeat) !== false) {
        header("location: ../account/signup.php?error=passwordMismatch");
        exit();
    }

    if (useridtaken($conn, $username, $email) !== false) {
        header("location: ../account/signup.php?error=uidTaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

} else {
    header("location: ../account/signup.php");
    exit();
}
?>