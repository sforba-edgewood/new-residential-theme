<html class="no-js <?php echo (is_front_page()) ? 'html-home-page' : ''; ?>" <?php language_attributes(); ?> >
	<head>
		<script src="https://cdn.tailwindcss.com"></script>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<title>
			<?php single_post_title(); ?>
		</title>
		
	</head>
    <body <?php body_class(); ?>>

		<?php get_template_part( 'template-parts/top-banner' ); ?>
		<?php get_template_part( 'template-parts/contact-banner' ); ?>
		<header class="flex flex-row justify-center items-center header <?php echo (basename(get_page_template()) == 'sem_landing.php') ? 'sem-landing-header' : ''; ?>" id="header"> 
			<?php get_template_part( 'template-parts/mobile-navigation' ); ?>
			<div class="container flex flex-row justify-between md:justify-around md:justify-center items-center py-5 px-5 md:px-0 header__container">
				<div class="main-logo">
					<a href="/" class="main-logo__link">
						<img src="<?php echo get_field( "logo", 'option' );?>" class="main-logo__image"/>
					</a>
				</div>
				<?php get_template_part( 'template-parts/main-navigation' ); ?>
				<div class="ml-4 veterans">
					<?php 
						$veterans = get_field( "veterans_initiative", 'option' );
						$vet_link = $veterans['link'];
						$vet_image = $veterans['image'];
					?>
					<a href="<? echo $vet_link; ?>" class="veterans__link">
						<img class="veterans__image" src="<? echo $vet_image;?>" />
					</a>
				</div>
				<button class="hamburger-menu" id="hamburgerMenu">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
		</header>