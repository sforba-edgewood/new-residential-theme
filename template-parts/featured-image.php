<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
	
$pid = (is_home()) ? 11 : $post->ID;
		
if ( has_post_thumbnail( $pid ) ) { ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php echo get_the_post_thumbnail_url($pid , 'featured-small' ); ?>, small], [<?php echo get_the_post_thumbnail_url($pid , 'featured-medium' ); ?>, medium], [<?php echo get_the_post_thumbnail_url($pid , 'featured-large' ); ?>, large], [<?php echo get_the_post_thumbnail_url($pid , 'featured-xlarge' ); ?>, xlarge]">

		<div class="header-contains">
			<div class="header-cell">
				<p class="entry-title"><?php echo get_the_title($pid); ?></p>
		</div>
	</div>

	</header>
<?php  } elseif( is_404() || is_page('the-kingsley-nj-sitemap') )  { ?>


<header class="featured-hero" role="banner" style="background-image: url('<?php echo site_url(); ?>/wp-content/uploads/2022/12/floor-plan-featured.jpg');">

		<div class="header-contains">
			<div class="header-cell">
				<?php $msg = is_page('sitemap')  ? 'Sitemap' : '404 Page Not Found'; ?>
				<p class="entry-title"><?php echo $msg; ?></p>
		</div>
	</div>

	</header>
<?php } ?>


