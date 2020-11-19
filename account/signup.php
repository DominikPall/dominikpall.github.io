<?php include_once '../Nav&Foot/header.php'; ?>
<section class="signup-form">
    <h2> SIGN UP</h2>
    <form action="../functions/signup.func.php" method="post">

        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <?php if(isset($_GET["error"])) {
            if($_GET["error"] == "empty") {
                echo "<p>Missing information!</p>";
            } else if ($_GET["error"] == "invalidUserId") {
                echo "<p>Invalid username!</p>";
            } else if ($_GET["error"] == "invalidEmailAdress") {
                echo "<p>Invalid Email!</p>";
            } else if ($_GET["error"] == "passwordMismatch") {
                echo "<p>Passwords do not match!</p>";
            } else if ($_GET["error"] == "uidTaken") {
                echo "<p>Username already taken!</p>";
            } 
        }
        ?>
        <a href="login.php" role ="button" class="btn btn-outline-dark" >Back</a>
        <button type="submit" name="submit" role ="button" class="btn btn-outline-dark">Sign Up</button>
    </form> 
</section>

<?php include_once '../Nav&Foot/footer.php'; ?>