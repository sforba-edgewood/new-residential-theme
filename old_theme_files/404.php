<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
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


<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<article>
				<div class="entry-content">
					<div class="error">
						<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had it\'s name changed, or is temporarily unavailable.', 'foundationpress' ); ?></p>
					</div>
					<p><?php _e( 'Please use the main navigation above, or visit our <a href="'.site_url().'/sitemap">Sitemap page</a> to view all the available pages on our website.', 'foundationpress' ); ?></p>
					
				</div>
			</article>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
