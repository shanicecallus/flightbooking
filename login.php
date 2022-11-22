<?php
    include_once'header.php'
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<img class="headerimg" src="images/airplane-header.jpg" alt="header" width=100% height="200">

<section class="login-form">
    <h2>Login</h2>
    <form  action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Enter Your Email">
    <input type="password" name="pwd" placeholder="Enter Your Password">
    <button type="submit" name="submit" class="btn">Login</button>
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
