<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package linguagarden
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:admins" content="31405792" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'linguagarden' ); ?></a>
	<div class="row">
        <div class="columns small-12">
		    <div class="sitewrapper">
    	        <header class="siteheader">
    				<div class="row collapse">
    					<div class="columns small-12">
    						<div class="row">
    							<div class="small-12 large-4 columns">
    								<img src="<?php echo get_theme_mod('logo'); ?>" class="sitelogo" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
    							</div>
    							<div class="hide-for-small-only medium-4 large-3 columns">
    								<div class="phone">
    									<p>For more information call</p>
    									<h2><a href="tel:3093612615">(309) 361-2615</a></h2>
    								</div>
    							</div>
    						</div>
    					</article>
    				</div>
    			</header>
    
                <div id="content" class="site-content">