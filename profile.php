<?php
include_once 'includes/dbh.inc.php';
?>

<?php
include_once 'header.php';
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<!-- My profile code starts here -->
<body>
    <?php
    $sql = "select * from users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['email'];
        }
    }
    ?>
</body>
<!-- My profile code ends here -->

<?php
    include_once'footer.php'
?>
