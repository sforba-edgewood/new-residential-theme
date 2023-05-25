<?php
/* 
 * Template Name: Gallery
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="bc-bg">
<div class="breadcrumb-wraps">
	<div class="breadcrumb-wrapper">
<?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
} ?>
		</div>
	</div>
</div>

<!-- Gallery Starts -->

<div class="photo-gallery-wraps">

<ul class="light-box-items">

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01247.jpg" alt="<?php bloginfo('home'); ?>" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01247.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01300.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01300.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01315.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01315.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01383.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01383.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01511.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01511.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01546.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/DSC01546.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>
</ul>
</div>

<!-- Gallery Ends -->


<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
