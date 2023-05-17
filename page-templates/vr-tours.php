<?php
/* Template Name: VR Tours */

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
