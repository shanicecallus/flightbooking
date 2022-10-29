<?php
    include_once'header.php'
?>

<section class="login-form">
    <h2>Login</h2>
    <form  action="includes/login.inc.php" method="post">
    <input type="text" name="email" placeholder="Enter Your Email">
    <input type="password" name="pwd" placeholder="Enter Your Password">
    <button type="submit" name="submit">Login</button>
    </form>
    <?php
        if (isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            else if($_GET["error"] == "wrongLogin") {
                echo "<p>Incorrect login details</p>";
            }
        }
        ?>
</section>

<?php
    include_once'footer.php'
?>
