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
add_theme_support( 'post-thumbnails' );

/* вставка php в wordpress > */
function exec_php($matches){
    eval('ob_start();'.$matches[1].'$inline_execute_output = ob_get_contents();ob_end_clean();');
    return $inline_execute_output;
}
function inline_php($content){
    $content = preg_replace_callback('/\[exec\]((.|\n)*?)\[\/exec\]/', 'exec_php', $content);
    $content = preg_replace('/\[exec off\]((.|\n)*?)\[\/exec\]/', '$1', $content);
    return $content;
}
add_filter('the_content', 'inline_php', 0);
/* < вставка php в wordpress */
?>
        