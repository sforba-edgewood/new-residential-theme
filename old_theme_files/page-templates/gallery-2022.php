<?php
/* 
 * Template Name: Gallery Latest
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<!-- Gallery Starts -->

<div class="container-gallery">
  <div class="orbit" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <div class="orbit-container">
      
    		<div class="orbit-slide">
        	<img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery-full/slide-1.jpg" alt="The Kingsley Photo Gallery" />
        	<figcaption class="orbit-caption"></figcaption>
      	</div>

		<div class="orbit-slide">
		<img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery-full/slide-2.jpg" alt="The Kingsley Photo Gallery" />
        	<figcaption class="orbit-caption"></figcaption>
      	</div>

		<div class="orbit-slide">
			<img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery-full/slide-3.jpg" alt="The Kingsley Photo Gallery" />
        	<figcaption class="orbit-caption"></figcaption>
      	</div>

    </div>
    <nav class="orbit-bullets">
      <a class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</a>
      <a class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</a>
      
      <div class="gallery-thumbnail-btns">
     
	  <button class="is-active" data-slide="0">
	  	<img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery-thumbs/gallery-1.jpg" alt="The Kingsley Photo Gallery" />
      </button>
		
	 <button data-slide="1">
		<img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery-thumbs/gallery-2.jpg" alt="The Kingsley Photo Gallery" />
      </button>
		
	<button data-slide="2">
	<img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery-thumbs/gallery-3.jpg" alt="The Kingsley Photo Gallery" />
      </button>
		

  		</div>
    </nav>
  </div>
</div>
<!-- Gallery Ends -->


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
