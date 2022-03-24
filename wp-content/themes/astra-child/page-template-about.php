<?php
/**
 * Template Name: About page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }
// 
get_header(); ?>

<div class="main-banner position-relative"
    style="background:url(<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">

    <!-- <div class="position-absolute top-0 start-0 w-100 h-100"> -->

    <div class="title-container-wrapper">
        <div class="container title-container">
            <div><?php echo get_field('title_txt');?></div>
        </div>
    </div>


    <img class="main-banner-img" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">

</div>



<?php echo get_field('content_1');?>




<?php echo get_field('content_2');?>




<div class="blue-bg mt-5">

    <div class="container pt-5 pb-5">



        <?php echo get_field('content_3');?>
    </div>

</div>


<div class="container mt-5 mb-5">




    <?php echo get_field('content_4');?>





</div>

<div class="grey-bg-2">

    <div class="text-center pt-5 pb-5">
        <div class="about-slogan blue">Our Team Of Experts <br>
            Are Here For You</div>
        <a href="<?php echo get_site_url();?>/contact-us/" class="meet-them-btn gold-bg white">Meet Them</a>
    </div>
</div>


<?php get_footer(); ?>
<script type="text/javascript">
$(function() {
    $('.about-carousel').find('p').remove();
    $('.about-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        adaptiveHeight: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false

    });




})
</script>
</body>

</html>