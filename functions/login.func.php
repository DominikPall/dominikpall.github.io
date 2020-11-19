<?php 

if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.func.php';
    require_once 'functions.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../account/login.php?error=emptyLogin");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else { 
    header("location: ../account/login.php");
    exit();
}

?>