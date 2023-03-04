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

<!DOCTYPE HTML>
<html>
<head>
	<title>PDO - Update a Record - PHP CRUD Tutorial</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1>Update Your Profile</h1>
        </div>
        <!-- PHP read record by ID will be here -->
        <?php
            // get passed parameter value, in this case, the record ID
            // isset() is a PHP function used to verify if a value is there or not
            $currentUser = $_SESSION['userid'];
            $sql = "select email, firstname, lastname from users where userid ='{$currentUser}'";
            // read current record's data
            try {
                $result = mysqli_query($conn, $sql);
                #ResultCheck checks if there is an actual variable, therefore, if data is being obtained from db
                $resultCheck = mysqli_num_rows($result);
                $row = mysqli_fetch_assoc($result);
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
<?php
// check if form was submitted
if($_POST){
	try{
		// write update query
		// in this case, it seemed like we have so many fields to pass and
		// it is better to label them and not use question marks
		// posted values
		$email=htmlspecialchars(strip_tags($_POST['email']));
		$firstname=htmlspecialchars(strip_tags($_POST['firstname']));
		$lastname=htmlspecialchars(strip_tags($_POST['lastname']));

        $query = "UPDATE users
            SET email='$email', firstname='$firstname', lastname='$lastname'
            WHERE userid = {$currentUser}";
        // prepare query for excecution
        $stmt = $conn->prepare($query);

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
        <!--we have our html form here where new record information can be updated-->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?userid={$currentUser}");?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' value="<?php echo htmlspecialchars($email, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><textarea name='firstname' class='form-control'><?php echo htmlspecialchars($firstname, ENT_QUOTES);  ?></textarea></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input name='lastname' value="<?php echo htmlspecialchars($lastname, ENT_QUOTES);  ?>" class='form-control' /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Save Changes' class='btn btn-primary' />
                    </td>
                </tr>
            </table>
        </form>
        
    </div> <!-- end .container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    include_once'footer.php'
?>
