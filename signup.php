<?php
    include_once'header.php'
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<img class="headerimg" src="images/airplane-header.jpg" alt="header" width=100% height="200">

<section class="sign-form">
    <h2>Sign Up</h2>
    <form  action="includes/signup.inc.php" method="post">
    <input type="text" name="firstname" placeholder="Ex. Joe">
    <input type="text" name="lastname" placeholder="Ex. Borġ">
    <input type="text" name="username" placeholder="joeborg@email.com">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
    <button type="submit" name="submit" class="btn">Sign Up</button>
    </form>
    <?php
        if (isset($_GET["error"])) {
            if($_GET["error"] == "emptyinput") {
                echo "<p style=color:red;>Fill in all fields</p>";
            }
            else if($_GET["error"] == "invalidUid") {
                echo "<p style=color:red>Enter a valid email</p>";
            }
            else if($_GET["error"] == "invalidEmail") {
                echo "<p style=color:red>Enter a valid email</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch") {
                echo "<p style=color:red>Passwords don't match</p>";
            }
            else if($_GET["error"] == "stmtfailed") {
                echo "<p style=color:red>Something went wrong, please try again later</p>";
            }
            else if($_GET["error"] == "emailexists") {
                echo "<p style=color:red>There is already an account associated with this email</p>";
            }
            else if($_GET["error"] == "none") {
                echo "<p style=color:red>You have signed up!</p>";
            }
        }
        ?>
</section>

<?php
    include_once'footer.php'
?>
