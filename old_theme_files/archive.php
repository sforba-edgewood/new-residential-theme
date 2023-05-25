<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();  $i_path = wp_upload_dir(); $c = $i_path['baseurl'].'/2018/08/'; ?>


<header class="featured-hero" role="banner" data-interchange="[<?php echo $c; ?>DSC01315-640x200.jpg, small], [<?php echo $c; ?>DSC01315-1280x400.jpg, medium], [<?php echo $c; ?>DSC01315-1440x400.jpg, large], [<?php echo $c; ?>DSC01315-1920x400.jpg, xlarge]">
		<div class="header-contains">
			<div class="header-cell">
				<p class="entry-title"><?php echo single_cat_title(); ?></p>
		</div>
	</div>
</header>

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
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php endif; ?>

		</main>
		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer();
