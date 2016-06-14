<?php 
if ( function_exists('register_sidebar') ) register_sidebar(); 
function jquery_init() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
	wp_enqueue_script( 'menu', get_stylesheet_directory_uri() . '/js/menu.js', array( 'jquery' ) );
	wp_enqueue_script( 'context', get_stylesheet_directory_uri() . '/js/context.js', array( 'jquery' ) );
    }
}
add_action('wp_enqueue_scripts', 'jquery_init');
?>
        