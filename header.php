<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( '_100foldstudio_after_body' ); ?>
        
        <?php if ( is_front_page() ) { ?>
        
        <div class="hero-header clearfix">
            
            <div id="heroHeader" class="hero-description">
                <img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/100FoldLogo-white.png" />
                <p>We train, equip, and send architects to serve organizations reaching the unreached.</p>
                <a href="#_" class="hero-primary-link">Learn More</a>
            </div>
            
            <div class="full-screen-video">
                <video autoplay loop muted>
                  <source src="<?php echo get_bloginfo('template_url') ?>/assets/video/soccer.mp4" type="video/mp4">
                  <source src="<?php echo get_bloginfo('template_url') ?>/assets/video/soccer.webm" type="video/webm">
                Your browser does not support the video tag.
                </video>
            </div>
            
        </div>
        
        <?php } ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( '_100foldstudio_layout_start' ); ?>

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>
        
    <?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( '_100foldstudio_after_header' ); ?>