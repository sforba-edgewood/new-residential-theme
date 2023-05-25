<?php
/* 
 * Template Name: Sitemap
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<p><strong><?php bloginfo( 'name' ); ?> Site Map:</strong></p>
				<?php wp_list_pages(array('title_li' => '','exclude' => $post->ID)); ?>
				
			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer(); ?>