<?php
/**
 * Template Name: Article page
 * Template Post Type: page
 **/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<!--  -->
<!-- <div class="main-banner"> -->

<div class="main-banner position-relative"
    style="background:url(<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">


    <div class="position-absolute top-0 start-0 w-100 h-100">


        <div class="container title-container">
            <div>
                <h2 class="txt big"><?php echo get_the_title();?></h2><?php //echo get_field('title_txt');?>
            </div>
        </div>

    </div>


    <img class="main-banner-img" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">


</div>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<div id="primary" <?php astra_primary_class(); ?>>

    <?php astra_primary_content_top(); ?>

    <div class="article-content">
        <?php astra_content_page_loop(); ?>
    </div>
    <?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<style type="text/css">
.page .entry-header {
    display: none;
}

.elementor-widget-table-of-contents {
    /* display: none; */
}

.elementor-widget-table-of-contents h2 {
    border-top: 0px !important;
    margin: 0;
}

.article-content h1 {
    color: #363e51;
}

.elementor-widget-table-of-contents {
    max-width: 1000px;
    margin: 0 auto;
}

.elementor-widget-table-of-contents .elementor-widget-container {
    border: 0px solid #363e51;
    border-radius: 1rem 1rem 0 0;
    background: #f7f7f7;
    margin: 2rem 0 0 0;

}

.elementor-toc__header {
    border-bottom: 4px solid #363e51;
    padding: 0 1rem;
    background: #363e51;
    color: #fff;

}

.article-content h2 {
    /* color: #363e51;
    border-top: 1px solid #363e51;
    padding: 1rem 0 0 0; */

    /* margin: 1rem 0 0 0 !important; */
    display: inline-block;
    background: rgb(54 62 81);
    color: #fff;
    padding: 0.2rem 1.5rem;
    border-radius: 0.7rem 0 0.7rem 0;

}

.elementor-widget-divider .elementor-divider {
    /* border-top: 1px solid #363e51; */
    display: none;

}

.article-content .elementor-inline-items .elementor-icon-list-text {
    color: #363e51 !important;

}

.elementor a {
    color: #363e51 !important;
    text-decoration: underline;
    font-weight: bold;

}


.article-content .elementor-icon-list-icon {
    margin: 0 0.5rem 0 0;
}

.article-content h3 {
    color: #363e51;
    margin-top: 0px !important;
}

.article-content .elementor-post-info {
    display: none !important;
}

.article-content .elementor-icon-list-item:not(:last-child):after {
    content: "";
    height: 15%;
    border-color: #363e51 !important;
}

.comments-area {
    /* border-top: 1px solid #eee;
    margin-top: 2em; */
    max-width: 1000px;
    margin: 0 auto 5rem auto;
    border-top: 0px;
    padding: 0 1rem;
}

.elementor-posts .elementor-post__thumbnail {
    position: relative;
    padding: 0 !important;
}

.logged-in-as a {
    color: #363e51 !important;
    text-decoration: underline;
    /* font-weight: bold; */


}

.elementor-form-fields-wrapper {
    padding: 0 0 2rem 0;
}

.elementor-widget-container {
    border: none !important;
}

.elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated {
    padding: 10px;
}

.code-block {
    display: none;
}


@media (max-width: 767px) {
    .elementor-771 .elementor-element.elementor-element-440582af>.elementor-element-populated {
        margin: 0px 0px 0px 0px;
    }
}
</style>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>