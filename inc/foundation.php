<?php

/**
 * foundation js
 */
function foundation_script() {
	//wp_deregister_script('jquery');
	//wp_enqueue_script('jquery', get_template_directory_uri() . '/js/foundation/vendor/jquery.js');
// 	wp_enqueue_script('foundation.modernizr',		get_template_directory_uri() . '/js/foundation/vendor/modernizr.js' );
// 	wp_enqueue_script('slick',				'//cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js', array('jquery'), '1' , true );
// 	wp_enqueue_script('foundation',				get_template_directory_uri() . '/js/foundation/foundation.js', array('jquery'), '1' , true );
	wp_enqueue_script('linguagarden',				get_template_directory_uri() . '/js/app.js', array('jquery', 'slick', 'foundation'), '1' , true );
	
}	

add_action('wp_enqueue_scripts', 'foundation_script');

require get_template_directory() . '/inc/class-top-bar-walker.php';