<?php include_once '../Nav&Foot/header.php'?>

<h2> Edit Profile</h2>
<form action="../includes/edit.inc.php" method="post">
    <input type="text" name="name"

       value="<?php echo $_SESSION['username'];?>">

    <input type="text" name="email"
        value="<?php echo $_SESSION['userEmail'];?>">

    <button type="submit" name="submit">Edit</button>
</form>

<?php include_once '../Nav&Foot/footer.php'?>