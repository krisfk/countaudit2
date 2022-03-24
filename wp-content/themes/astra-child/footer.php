<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
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
<div class="blue-bg pt-4 pb-4 d-table w-100">

    <div class="container">

        <div class="bottom-menu">





            <ul class="bottom-menu-ul-outer-ul m-0 p-0">

                <ul class=" bottom-menu-ul">


                    <?php
$main_menu = wp_get_menu_array('Menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];
$temp_arr=explode(get_site_url(),$url);
// echo 111233;
////
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{

echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title;
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

// echo 1234;

?>



                </ul>


        </div>


    </div>

</div>
<div class="blue-bg-2 pt-3 pb-3 d-table w-100">
    <div class="container copyright-sentence small-2">
        Copyright &copy; <?php echo date('Y');?> CountAudit 算數會計師事務所 | Powered by CountAudit 算數會計師事務所 | CPA Practice
        Registration Number:
        2589 |
        Business Registration: 41090856


    </div>
</div>
<?php //astra_content_bottom(); ?>

</div> <!-- ast-container -->

</div><!-- #content -->

<?php //astra_content_after(); ?>

<?php //astra_footer_before(); ?>

<?php //astra_footer(); ?>

<?php //astra_footer_after(); ?>

</div><!-- #page -->

<?php //astra_body_bottom(); ?>

<?php wp_footer(); ?>

<style type="text/css">
body.single {
    margin-bottom: 0px !important;
}
</style>
</body>

</html>