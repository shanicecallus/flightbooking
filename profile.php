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
        $currentUser = $_SESSION['userid'];
        $sql = "select * from users where userid ='{$currentUser}'";
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
        else{
            echo "Failed to get Profile Details";
        }
    ?>
</section>

<section class="UpdateDelete">
    <a href="Updateprofile.php">
    <button>Update Your Details</button>
    </a>
    <a href="Updateprofile.php">
    <button>Delete Profile</button>
    </a>
        <?php
        $deletesql = "DELETE FROM users WHERE userid={$currentUser}";

        if (mysqli_query($conn, $deletesql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        ?>
</section>



</body>

<!-- My profile code ends here -->

<?php
    include_once'footer.php'
?>
