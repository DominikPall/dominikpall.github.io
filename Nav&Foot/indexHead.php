<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dominik Pall</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <nav class="navbar fixed-top" id="top">
            <div id="col-sm-11">
                <a href="index.php"><h4>DOMINIK PALL</h4></a>
                <a href="https://github.com/DominikPall" class="fab fa-github-alt" ></a>
                <a href= "https://www.linkedin.com/in/dominik-pall-b0a9b7146/" class="fab fa-linkedin-in"></a>
                <?php
                    if (isset($_SESSION["userid"])) {
                        echo "<a href='/account/profile.php' class='fas fa-user-circle'></a>";
                    } else {
                        echo "<a href='/account/login.php' class='fas fa-sign-in-alt'></a>";
                    }
                ?>
            </div>
        </nav>
