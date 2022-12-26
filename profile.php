<?php
    include_once 'includes/dbh.inc.php';
    include_once 'header.php';
    include_once 'includes/functions.inc.php';
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<!-- My profile code starts here -->

<body>
<section class="MyProfile">

    <?php
        #$username = $_POST['username'];
        #session_start();
        $currentUser = $_SESSION['useruid'];
        $sql = "select * from users where userid = '$currentUser'";
        #result is the data which is obtained from the SQL query in the db
        $result = mysqli_query($conn, $sql);
        #ResultCheck checks if there is an actual variable, therefore, if data is being obtained from db
        $resultCheck = mysqli_num_rows($result);

        #loop where if resultCheck has value, it can execute the echoing of data
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <h3>Email: </h3><td><?php echo $row['email']; ?> </td>
            <h3>First Name: </h3><td><?php echo $row['firstname']; ?> </td>
            <h3>Last Name: </h3><td><?php echo $row['lastname']; ?></td> <?php

            }
        }
    ?>
</section>
</body>

<!-- My profile code ends here -->

<!-- My Bookings code starts here -->

<!-- My Bookings code ends here -->

<?php
    include_once'footer.php'
?>
