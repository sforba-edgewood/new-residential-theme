<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js <?php echo (is_front_page()) ? 'html-home-page' : ''; ?>" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>


	<div class="concession-banner">
		<div class="support-veterans"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/veterans-1.png"></a>
		</div>
			<p>Now Leasing Brand New Townhomes</p>
		</div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>



	<div data-sticky-container>
	<div class="main-nav-wrapper" data-top-anchor="1" data-sticky-on="small" data-margin-top="0" data-sticky  style="width:100%">
 	<div class="grid-container main-nav-container">
 		
	<header class="site-header" role="banner">		
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
				</span>
				<a class="call-today-mobile" href="tel:+19084273311">Call Today</a>
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="main-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
				</div>
			</div>
			<div class="top-bar-right">
				<div class="navigation-contact">
				        <ul>
				            <li><a href="https://www.google.com/maps/dir//The+Kingsley,+1111+Durham+Ave,+South+Plainfield,+NJ+07080/@40.5475714,-74.4122032,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c3b9a6eebde36f:0x97443c96a0b01282!2m2!1d-74.4100145!2d40.5475673!3e0">Get Directions<i class="<?php echo (is_front_page()) ? 'fa-icon-map-marker' : 'fa fa-map-marker'; ?> directions-ic"></i></a></li>
				            
				            <li><a href="tel:+19084273311">(908) 427-3311 <i class="<?php echo (is_front_page()) ? 'fa-icon-mobile-phone' : 'fa fa-mobile-phone'; ?> phone-ic"></i></a></li>

				    	</ul>
				</div>
				
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>

			</div>

			<div class="support-veterans"><a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/veterans-1.png"></a>
			</div>
			
		</nav>


		
	</header>
	</div>
</div>
</div>

<div class="reveal" id="scheduleVisit" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
  
  <h3 class="schedule-header">Apply Now</h3>
  
  <?php echo do_shortcode('[contact-form-7 id="4" title="Schedule A Visit"]'); ?>

  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



