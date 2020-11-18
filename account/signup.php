<?php include_once '../Nav&Foot/header.php'; ?>
<section class="signup-form">
    <h2> Sign Up</h2>
    <form action="../includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php if(isset($_GET["error"])) {
    if($_GET["error"] == "emptyinput") {
        echo "<p>FIll in all fields!</p>";
    } else if ($_GET["error"] == "invalidUid") {
        echo "<p>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidEmail") {
        echo "<p>Choose a proper Email!</p>";
    } else if ($_GET["error"] == "pwdNotMatch") {
        echo "<p>Passwords don't match!</p>";
    } else if ($_GET["error"] == "stmtFailed") {
        echo "<p>Something went wrong, try again! </p>";
    } else if ($_GET["error"] == "uidExists") {
        echo "<p>Username already exists!</p>";
    } 
}
?>
</section>

<?php include_once '../Nav&Foot/footer.php'; ?>