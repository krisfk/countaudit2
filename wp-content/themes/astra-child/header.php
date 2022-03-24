<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156936142-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-156936142-1');
    </script>


    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>



    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>
    <div <?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>>
        <a class="skip-link screen-reader-text"
            href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

        <?php //astra_header_before(); ?>

        <?php //astra_header(); ?>

        <?php //astra_header_after(); ?>

        <?php //astra_content_before(); ?>


        <div class="cover"></div>

        <div class="lightbox" style="">

            <div class="lightbox-bg-btn ">

            </div>

            <div class="lightbox-content lightbox-msg" style="">
                <a href="javascript:void(0);" class="close-btn">
                    <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/close-btn.png" alt="">
                </a>
                <span class="lightbox-msg-txt d-block p-3"></span>

            </div>
        </div>

        <div class="mobile-top-div">
            <a href="<?php echo get_site_url();?>" class="logo-a">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/countaudit-logo.png" alt="">

            </a>
        </div>

        <div class="top-div">
            <a href="<?php echo get_site_url();?>" class="logo-a">
                <img src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/countaudit-logo.png" alt="">

            </a>
        </div>
        <button class="mobile-menu-btn"
            onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
            aria-label="Main Menu">
            <svg width="50" height="50" viewBox="0 0 100 100">
                <path class="line line1"
                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                </path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3"
                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                </path>
            </svg>
        </button>


        <div class="top-menu">






            <ul class="top-menu-ul-outer-ul">

                <ul class=" top-menu-ul">


                    <?php
    $main_menu = wp_get_menu_array('Menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

//  
$temp_arr=explode(get_site_url(),$url);
echo 9999;
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{

echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'"><div class="submenu-arrow"></div>'.$title;
?>
                    <img class="arrow"
                        src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png" alt="">

                    <?php
echo'</a>';


echo '<ul class="mobile-menu-submenu">';
?>

                    <?php

foreach ($menu_item['children'] as $sub_menu_item) 
{
$sub_url = $sub_menu_item['url'];
$sub_title = $sub_menu_item['title'];

$sub_temp_arr=explode(get_site_url(),$sub_url);
$sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
$sub_slug=str_replace('/cn/','',$sub_slug);
$sub_slug=str_replace('/','',$sub_slug);
echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
}
echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}



?>



                </ul>


        </div>


        <div id="content" class="site-content">

            <div class="">

                <script type="text/javascript">
                $(function() {


                    $('.level-1.parent').click(function() {

                        $(this).toggleClass('active');

                        if ($(this).hasClass('active')) {
                            $(this).next('.mobile-menu-submenu').slideDown(200)
                        } else {
                            $(this).next('.mobile-menu-submenu').fadeOut(0)

                        }
                    })
                    $(window).resize(function() {

                        if ($(window).width() > 991) {
                            $('.top-menu-ul').css({
                                'display': 'table'
                            });
                            $('body').css({
                                'overflow': 'auto'
                            });
                        } else {
                            $('.top-menu-ul').css({
                                'display': 'none'
                            });
                            $('.mobile-menu-btn').removeClass('opened');
                        }

                    })



                    $('.mobile-menu-btn').click(function() {

                        if ($(this).hasClass('opened')) {

                            // $('.top-menu-ul').css({
                            //     'display': 'table'
                            // });
                            $('.top-menu-ul').slideDown(200);
                            $('.mobile-menu-submenu').fadeOut(0);
                            $('body').css({
                                'overflow': 'hidden'
                            });
                        } else {
                            $('.top-menu-ul').fadeOut(0);
                            $('body').css({
                                'overflow': 'auto'
                            });
                        }
                    })



                    $('.level-1').mouseenter(function() {

                        if ($(window).width() > 1200) {
                            $('.mobile-menu-submenu').clearQueue().fadeOut(0);


                            if ($(this).hasClass('parent')) {
                                $(this).next('.mobile-menu-submenu').slideDown(200);
                            }
                        }



                    })

                    $('.mobile-menu-submenu').mouseleave(function() {

                        if ($(window).width() > 1200) {

                            $('.mobile-menu-submenu').fadeOut(0);
                        }
                    })


                    $('.mobile-menu-submenu').mouseenter(function() {

                        $(this).clearQueue().fadeIn(0);

                    })


                    $('.level-1').mouseleave(function() {

                        if ($(window).width() > 1200) {


                            $('.mobile-menu-submenu').delay(500).fadeOut(0)

                        }
                    })

                    $(document).on('keydown', function(e) {
                        if (e.keyCode === 27) { // ESC
                            $('.lightbox').fadeOut(0);


                        }
                    });
                    $('.close-btn,.lightbox-bg-btn').click(function() {
                        $('.lightbox').fadeOut(0);
                    })

                })
                </script>

                <?php //astra_content_top(); ?>