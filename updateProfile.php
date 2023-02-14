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
try {
            // prepare select query
            $currentUser = $_SESSION['userid'];
            $sql = "select * from users where userid ='{$currentUser}'";
            #result is the data which is obtained from the SQL query in the db
            $result = mysqli_query($conn, $sql);
            #ResultCheck checks if there is an actual variable, therefore, if data is being obtained from db
            $resultCheck = mysqli_num_rows($result);
        
            // values to fill up our form
            $email = $row['email'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
        }
        
        // show error
        catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
        ?>


        <!-- HTML form to update record will be here --> 
        <!--we have our html form here where new record information can be updated-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?userid={$CurrentUser}");?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Name</td>
                    <td><input type='email' name='email' value="<?php echo htmlspecialchars($email, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name='firstname' class='form-control'><?php echo htmlspecialchars($firstname, ENT_QUOTES);  ?></textarea></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type='lastname' name='lastname' value="<?php echo htmlspecialchars($lastname, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save Changes' class='btn btn-primary' />
                        <a href='index.php' class='btn btn-danger'>Back to read products</a>
                    </td>
                </tr>
            </table>
        </form>

        <?php
        // check if form was submitted
        if($_POST){
        
            try{
        
                // write update query
                // in this case, it seemed like we have so many fields to pass and
                // it is better to label them and not use question marks
                $query = "UPDATE products
                            SET email=:email, firstname=:firstname, lastname=:lastname
                            WHERE userid = {$currentUser}";
        
                // prepare query for excecution
                $stmt = $con->prepare($query);
        
                // posted values
                $email=htmlspecialchars(strip_tags($_POST['email']));
                $firstname=htmlspecialchars(strip_tags($_POST['firstname']));
                $lastname=htmlspecialchars(strip_tags($_POST['lastname']));
        
                // bind the parameters
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':firstname', $firstname);
                $stmt->bindParam(':lastname', $lastname);
                $stmt->bindParam(':userid', $currentUser);
        
                // Execute the query
                if($stmt->execute()){
                    echo "<div class='alert alert-success'>Record was updated.</div>";
                }else{
                    echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
                }
        
            }
        
            // show errors
            catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }
        }
        ?>

    </div> <!-- end .container -->

<?php
    include_once'footer.php'
?>
