<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function populate_children($menu_array, $menu_item)
	{
		$children = array();
		if (!empty($menu_array)){
			foreach ($menu_array as $k=>$m) {
				if ($m->menu_item_parent == $menu_item->ID) {
					$children[$m->ID] = array();
					$children[$m->ID]['ID'] = $m->ID;
					$children[$m->ID]['title'] = $m->title;
					$children[$m->ID]['url'] = $m->url;
					// $children[$m->ID]['class'] = 'fdsaf';

					unset($menu_array[$k]);
					$children[$m->ID]['children'] = populate_children($menu_array, $m);
				}
			}
		};

		return $children;
	}


function wp_get_menu_array($current_menu='Main Menu') {

	$menu_array = wp_get_nav_menu_items($current_menu);

	$menu = array();

	

	foreach ($menu_array as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID'] = $m->ID;
			$menu[$m->ID]['title'] = $m->title;
			$menu[$m->ID]['url'] = $m->url;
			$menu[$m->ID]['class'] = $m->classes[0];

			$menu[$m->ID]['children'] = populate_children($menu_array, $m);
		}
	}

	return $menu;

}
// 
//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
	$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
	add_filter( 'body_class', 'add_slug_body_class' );


// add_filter('pll_get_post_types', 'unset_cpt_pll', 10, 2);
// function unset_cpt_pll( $post_types, $is_settings ) {

//     $post_types['acf'] = 'acf';

//     return $post_types;
// }


class ACF_Page_Type_Polylang {

	// Whether we hooked page_on_front
	private $filtered = false;
  
	public function __construct() {
  
		add_filter( 'acf/location/rule_match/page_type', array( $this, 'hook_page_on_front' ) );
	}
  
	public function hook_page_on_front( $match ) {
  
		// Abort if polylang not activated
		if ( !function_exists( 'pll_get_post' ) ) {
		   return $match;
		}
  
		// Get the main language front page 
		$front_page = (int) get_option('page_on_front');
  
		// Get the translated page of the curent language
		$translated_page = pll_get_post($front_page);
  
		// Check if it's the same as the current page and set match to true if so
		if($translated_page === get_the_id()) {
		  $match = true;
		}
  
		return $match;
	}
  }
  
  new ACF_Page_Type_Polylang();

  // In theme's functions.php or plug-in code:

function wpse27856_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );

function receive_email_func() {
	global $receive_email;
	// $receive_email = 'krisfk@gmail.com';

	$receive_email = 'enquiry@countaudit.hk';
}
add_action( 'after_setup_theme', 'receive_email_func' );