<?php
function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js');
    
}

add_action( 'wp_enqueue_scripts', 'theme_js');

function mytheme_widgets_init() {	
    register_sidebar( array(
        'name'          => __( 'Testimonial Widgets', 'textdomain' ),
        'id'            => 'wendy-testimonial-widgets',
        'description'   => __( 'Widgets in this area will be shown under testimonials.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
?>





