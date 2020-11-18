<?php include_once '../Nav&Foot/header.php';
?>

<section class="signup-form">
    <h2> Login </h2>
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Login</button>
    </form>

    <?php if(isset($_GET["error"])) {
    if($_GET["error"] == "emptyinput") {
        echo "<p>FIll in all fields!</p>";
    } else if ($_GET["error"] == "wrongLogin") {
        echo "<p>Incorrect login information!</p>";
    } 
    }
    ?>
    <a href="signup.php">Register</a>
</section>

<?php include_once '../Nav&Foot/footer.php';
?>