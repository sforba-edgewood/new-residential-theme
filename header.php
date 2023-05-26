<html class="no-js <?php echo (is_front_page()) ? 'html-home-page' : ''; ?>" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		
	</head>
    <body <?php body_class(); ?>>
	<header>
		<?php get_template_part( 'template-parts/top-banner' ); ?>
		<?php get_template_part( 'template-parts/contact-banner' ); ?>
		<?php get_template_part( 'template-parts/main-navigation' ); ?>
	</header>