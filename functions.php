<?php

/**
 * Theme Functions
 * Version: 1.0.0
 */

require_once "framework/jsd-config.php";
require_once "bootstrap-pagination.php";

require dirname(__FILE__) . '/update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jsdizajner/sequenex-wordpress',
	__FILE__, //Full path to the main plugin file or functions.php.
	'sequenex'
);

$myUpdateChecker->setBranch('main');
$myUpdateChecker->getVcsApi()->enableReleaseAssets();

/**
 * Scripts and Styles of the Website
 */

function jsd_scripts()
{
	wp_enqueue_style('sequenex', get_stylesheet_uri()); // Theme Meta Data
	wp_enqueue_script('app', JSD_THEME_URI . '/index.js', array(), '', false); // This file also contains all od the page-styles
}

add_action('wp_enqueue_scripts', 'jsd_scripts');

/**
 * Remove wp version number from scripts and styles
 */

function remove_css_js_version($src)
{
	if (strpos($src, '?ver='))
		$src = remove_query_arg('ver', $src);
	return $src;
}
add_filter('style_loader_src', 'remove_css_js_version', 9999);
add_filter('script_loader_src', 'remove_css_js_version', 9999);


/**
 * Favicon for Admin Area
 */

function FaviconAdmin()
{	echo '<link rel="Shortcut Icon" type="image/png" href="' . JSD_THEME_ASSETS_URI . '/favicon/favicon-16x16.png" />';
}
add_action('admin_head', 'FaviconAdmin');

/**
 * Filter the except length to 28 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
	return 28;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

/**
 * Filter the excerpt 'more' string
 *
 * @param string $more
 * @return string '...'
 */
function new_excerpt_more($more)

{
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Add a sidebar.
 */
function register_blog_sidebar()
{
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'sequenex'),
		'id' => 'sidebar-1',
		'description' => __('Widgets in this area will be shown on all posts and pages.', 'sequenex'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'register_blog_sidebar');

/**
 * Loop through categories and return List Item HTML
 *
 * @param array $categories
 * @return HTML
 */
function show_simple_category_list($categories)
{
	if (!is_array($categories)) : return false; endif;

	foreach ($categories as $category) {
		echo '<li class="d-inline-block single-category-list-item"><a href="' . get_category_link($category->term_id) . '" class="single-category-link">' . esc_html($category->name) . '</a></li>';
	}
}

?>