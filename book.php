<?php
    include_once'header.php'
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<img class="headerimg" src="images/Valletta.jpg" alt="header" width=100% height="400">

<!-- Booking section starts -->
<section class="booking">
    <h1 class="heading-title">Book your holiday!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name here" name="name">
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter your email here" name="email">
            </div>
            <div class="inputBox">
                <span>Phone:</span>
                <input type="number" placeholder="Enter your phone number here" name="phone">
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter your address here" name="address">
            </div>
            <div class="inputBox">
                <span>Number of passengers:</span>
                <input type="number" placeholder="Enter number of passengers here" name="passengers">
            </div>
            <div class="inputBox">
                <span>Destination:</span>
                <input type="text" placeholder="Enter your destination here" name="destination">
            </div>
            <div class="inputBox">
                <span>Arrivals:</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>Departure:</span>
                <input type="date" name="departure">
            </div>
        </div>

        <input type="submit" value="Submit" id="btn" class="btn" name="send">

    </form>

</section>
<!-- Booking section ends -->

<?php
    include_once'footer.php'
?>
