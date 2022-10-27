<?php
    include_once'header.php'
?>

<section class="login-form">
    <h2>Login</h2>
    <form  action="login.inc.php" method="post">
    <input type="text" name="email" placeholder="Enter Your Email">
    <input type="password" name="pwd" placeholder="Enter Your Password">
    <button type="submit" name="submit">Login</button>
    </form>
</section>

<?php
    include_once'footer.php'
?>
