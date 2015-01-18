<?php
/**
 * linguagarden Theme Customizer
 *
 * @package linguagarden
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function linguagarden_customize_register( $wp_customize ) {
    
    $wp_customize->add_setting( 'logo' , array(
	    'default'     => 'http://placehold.it/300x150',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->add_setting( 'footer-logo' , array(
	    'default'     => 'http://placehold.it/300x150',
	    'transport'   => 'refresh',
	) );
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'logo' )->transport 			= 'postMessage';
	$wp_customize->get_setting( 'footer-logo' )->transport 		= 'postMessage';
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
           'logo',
           array(
               'label'      => __( 'Upload a logo', 'linguagarden' ),
               'section'    => 'title_tagline',
               'settings'   => 'logo',
               // 'context'    => 'your_setting_context'
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
           'footer-logo',
           array(
               'label'      => __( 'Upload a footer logo', 'linguagarden' ),
               'section'    => 'title_tagline',
               'settings'   => 'footer-logo',
               // 'context'    => 'your_setting_context'
	) ) );
}
add_action( 'customize_register', 'linguagarden_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function linguagarden_customize_preview_js() {
	wp_enqueue_script( 'linguagarden_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'linguagarden_customize_preview_js' );
