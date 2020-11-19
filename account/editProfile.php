<?php include_once '../Nav&Foot/header.php'?>

<section class="edit-form">
    <h2> Edit Your Profile </h2>
    <form action="../functions/edit.func.php" method="post">
        <input type="text" name="name"

        value="<?php echo $_SESSION['username'];?>">

        <input type="text" name="email"
            value="<?php echo $_SESSION['userEmail'];?>">
            <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    } else if ($_GET["error"] == "invalidEmail") {
                        echo "<p>Choose a proper Email!</p>";
                    } 
                }  
            ?>
        <div class="btns-inline">
            <a href="profile.php" role ="button" class="btn btn-outline-dark" >Back</a>
            <button type="submit" name="submit" role ="button" class="btn btn-outline-dark">Edit</button>
        </div>
    </form>
</section>
<?php include_once '../Nav&Foot/footer.php'?>