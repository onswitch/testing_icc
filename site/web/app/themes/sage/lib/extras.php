<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Config\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/**
 * Load Google fonts into the head, defined in config.php
 */
function icc_load_google_fonts() {
    wp_register_style( 'google-fonts', '//fonts.googleapis.com/css?family=' . GOOGLE_FONTS );
    wp_enqueue_style( 'google-fonts' );
}
add_action('wp_head', __NAMESPACE__ . '\\icc_load_google_fonts');

// Add specific CSS class by filter
add_filter( 'body_class', __NAMESPACE__ . '\\add_product_class_names' );
function add_product_class_names( $classes ) {
	
	// add 'class-name' to the $classes array
	$posttype = get_post_type(get_post());	
	switch($posttype) {
		case 'page':
			break;
		case 'post':
			break;
		default:
			$classes[] = $posttype;
			$classes[] = 'detail';
			break;
	}
	
	// return the $classes array
	return $classes;
}

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

/**
 * Load extra module files
 */
$module_includes = [
	'/modules/homepage-image.php',			// Homepage Image Widget
	'/modules/homepage-featured.php',		// Homepage Featured Widget
	'/modules/featured-story.php',			// Featured Story Widget	
	'/modules/ipswich-map.php',				// Ipswich Map Widget
	'/modules/newsletter-signup.php'		// Newsletter Signup Widget
];

foreach ($module_includes as $file) {
	require_once dirname(__file__) . $file;
}
unset($file, $filepath);
