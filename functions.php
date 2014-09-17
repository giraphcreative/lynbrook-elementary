<?php


error_reporting( E_ALL );
ini_set( "display_errors", 1 );


// set a custom field prefix
define( "CMB_PREFIX", "_p_" );



// remove the editor from the homepage
add_filter( 'user_can_richedit', 'lynbrook_page_can_richedit' );
function lynbrook_page_can_richedit( $can ) {
    global $post;
    if ( 28 == $post->ID )
        return false;
    return $can;
}


// register a couple nav menus
register_nav_menus( array(
	'primary' => 'Main Menu'
) );



// include the main.js script in the header on the front-end.
function p_scripts() {
	wp_enqueue_script( 'p-main-js', get_stylesheet_directory_uri().'/js/main.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'p_scripts' );



// init!
add_action('init', 'p_init');
function p_init() {
	add_post_type_support( 'page', 'excerpt' );
}


?>