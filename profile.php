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

    <h1>Update Your Details here</h1>
    <form action="../profile.php"
                      method="POST"
                      enctype="multipart/form-data"
                >
                    <?php
                        $Updatesql = "Update users SET email = @email, City= 'Frankfurt'";

                        $gotResuslts = mysqli_query($conn, $sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    //print_r($row['user_name']);
                                    ?>
                                        <div class="form-group">
                                            <input type="email" name="updateUserName" class="form-control" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="userEmail" class="form-control" value="<?php echo $row['firstname']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="userEmail" class="form-control" value="<?php echo $row['lastname']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="update"  class="btn btn-info" value="Update">
                                        </div>
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>
</section>
</body>

<!-- My profile code ends here -->

<?php
    include_once'footer.php'
?>
