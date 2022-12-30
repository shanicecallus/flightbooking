<?php
    include_once'header.php'
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<img class="headerimg" src="images/Poland.jpg" alt="header" width=100% height="400">

<!-- Destinations code starts header -->
<section class="destinations">
    <h1 class="heading-title">Top Destinations</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/destination1.jpg" alt="">
                </div>
                <div class="content">
                    <h3> Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, consectetur?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/destionation2.jpg" alt="">
                </div>
                <div class="content">
                    <h3> Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, consectetur?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

</section>
<!-- Destinations code ends here -->

<?php
    include_once'footer.php'
?>