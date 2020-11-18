<?php include_once '../Nav&Foot/header.php';
?>

<section class="login-form">
    <h2> Log In </h2>
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">       
        <?php if(isset($_GET["error"])) {
            if($_GET["error"] == "emptyLogin") {
                echo "<p>FIll in all fields!</p>";
            } else if ($_GET["error"] == "wrongLogin") {
                echo "<p>Incorrect login information!</p>";
            } 
        }
        ?>
        <a href="signup.php" role ="button" class="btn btn-outline-dark">Sign Up</a>
        <button type="submit" name="submit" role ="button" class="btn btn-outline-dark">Log In</button>
    </form>

    
    
</section>

<?php include_once '../Nav&Foot/footer.php';
?>