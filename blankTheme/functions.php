<?php 
//add_filter('show_admin_bar', '__return_false');

function scripts_styles() {
  // Loads jQuery
  wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', true);
  // Loads Bootstrap minified JavaScript file.
  wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
  // Loads Style Sheet.  // Loads our main stylesheet.
  wp_enqueue_style('styleSheet', get_stylesheet_directory_uri() . '/style.css', true);
}


add_action('wp_enqueue_scripts', 'scripts_styles');

if ( ! function_exists( 'blank_theme_setup' ) ):
  function blank_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'theme_setup' ),
    ) );
  }
endif;

add_action( 'after_setup_theme', 'blank_theme_setup' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
    'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));


//Adds the homepage option box


?>