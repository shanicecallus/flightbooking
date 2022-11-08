<?php
    include_once'header.php'
?>

<style>
    <?php
        include 'CSS/style.css';
    ?>
</style>

<section class="home">
    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide" style="background:url(images/carousel-London.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Travel Around the world</h3>
                    <!-- path for button home button -->
                    <a href="destination.php" class="btn">Discover More</a>
                </div>
            </div>

        <div class="swiper-slide" style="background:url(images/carousel-Paris.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Discover New Places</h3>
                    <!-- path for button home button -->
                    <a href="destination.php" class="btn">Discover More</a>
                </div>
            </div>
  
        <div class="swiper-slide" style="background:url(images/carousel-Rome.jpg) no-repeat">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>Explore Different Countries</h3>
                    <!-- path for button home button -->
                    <a href="destination.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>
</section>

<?php
    include_once'footer.php'
?>
