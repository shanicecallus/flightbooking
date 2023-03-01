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

<?php
        $currentUser = $_SESSION['userid'];
        $deletesql = "DELETE FROM users WHERE userid={$currentUser}";

        if (mysqli_query($conn, $deletesql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        ?>

<?php
    include_once'footer.php'
?>