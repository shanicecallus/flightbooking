<?php
    include_once'header.php'
?>

<section class="sign-form">
    <h2>Sign Up</h2>
    <form  action="includes/signup.inc.php" method="post">
    <input type="text" name="firstname" placeholder="Ex. Joe">
    <input type="text" name="lastname" placeholder="Ex. Borġ">
    <input type="text" name="email" placeholder="joeborg@email.com">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
    <button type="submit" name="submit">Sign Up</button>
    </form>
</section>

<?php
    include_once'footer.php'
?>
