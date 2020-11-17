<?php   
 
    $customColor = ["ai", "pathFinding", "sortingAlgorithm", "sudoku"];
    $farCSS= ["login", "signup"];

    foreach ($customColor as $value) {
        if(basename($_SERVER["REQUEST_URI"], ".php") == $value) {
            $color = "#ffffff";
            $link = "programStyle.css";
            $style = "style.css";
        } 
    }

    foreach ($farCSS as $value) {
        if(basename($_SERVER["REQUEST_URI"], ".php") == $value) {
            $back = "#ffffff";
            $text = "#242943";
            $style = "../style.css";
            $link = "";
        } 
    }

    switch(basename($_SERVER["REQUEST_URI"], ".php")) {
        case "ai":
            $back = "#e7b788";
        case "pathFinding":
            $back = "#ec8d81";
        break;
        case "sortingAlgorithm":
            $back = "#8d82c4";
        break;
        case "sudoku": 
            $back = "#6fc3df";
        break; 
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/e060c03e60.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href=<?php print $style; ?>>
        <link rel="stylesheet" href=<?php print $link; ?>>
        <style>
            .email p, .email a, .desc, .title, #top a{
                color: <?php print $back; ?>;
            }   

            #top h4 { 
                background-color: <?php print $back; ?>;
                color: <?php print $text; ?>;
            }
            .playButton {
                background-color: <?php print $back; ?>;
            }
        </style>
    </head>

    <body> 
    <nav class="navbar fixed-top" id="top">
            <div id="col-sm-11">
                <a href="../index.php"><h4>DOMINIK PALL</h4></a>
                <a href="https://github.com/DominikPall" class="fab fa-github-alt" ></a>
                <a href= "https://www.linkedin.com/in/dominik-pall-b0a9b7146/" class="fab fa-linkedin-in"></a>
                <a href="login.php" class="fas fa-sign-in-alt"></a>
            </div>
        </nav>
