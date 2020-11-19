<?php 
    include_once '../Nav&Foot/header.php';
?>
<div class="acc-info">
    <p> Name: <?php echo $_SESSION["username"]
    ?> </p>
    <p> Id: <?php echo $_SESSION["useruid"]
    ?> </p>
    <p> Email: <?php echo $_SESSION["userEmail"]
    ?> </p>

</div>
<div class="acc-manipulation">
    <a href='../functions/logout.func.php' role="button" class="btn btn-outline-dark">Log Out</a>
    <a href='editProfile.php' role="button" class="btn btn-outline-dark" >Edit Account</a>
    <a href='../functions/deleteAccount.func.php' role="button" class="btn btn-outline-dark" >Delete Account</a>
</div>
<?php
    include_once '../Nav&Foot/footer.php';
?>