<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="slider-home-wrap">
<?php putRevSlider( 'home' ); ?>
</div>

<div class="grid-container full features-home-wrapper">
<div class="grid-x grid-margin-x">

<div class="cell medium-6 large-3">

	<div class="image-wrap">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/featured-images/home-tile1.jpg" alt="<?php echo bloginfo('name'); ?>" />
	</div>

	<div class="display-txt">
		<p class="dis-lead">The Property</p>

		<p class="dis-strong">Built For Modern Living</p>

	</div>

	<div class="hover-text">
		<p>Townhomes</p>
		<p>Carriage Homes</p>
		<p>Apartment Homes</p>
		<p>2-Story Amenity Center</p>

	</div>
</div>


<div class="cell medium-6 large-3">

	<div class="image-wrap">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/featured-images/home-tile2.jpg" alt="<?php echo bloginfo('name'); ?>" />
	</div>

	<div class="display-txt">
		<p class="dis-lead">Amenities</p>

		<p class="dis-strong">Built for Your Lifestyle</p>

	</div>

	<div class="hover-text">
		<p>Resort-Style Pool</p>
		<p>Premium Fitness Center</p>
		<p>Resident Lounge</p>
		<p>Open Spaces & Lawns</p>
		<p>Co-Working Space</p>
		<p>And More</p>

	</div>


</div>


<div class="cell medium-6 large-3">

	<div class="image-wrap">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/featured-images/home-tile3.jpg" alt="<?php echo bloginfo('name'); ?>" />
	</div>

	<div class="display-txt">
		<p class="dis-lead">Neighborhood</p>

		<p class="dis-strong">Access to Everything</p>

	</div>

	<div class="hover-text">
		<p>Minutes to New Brunswick</p>
		<p>Just off I-287</p>
		<p>3 Miles from Edison Train</p>
		<p>Near GSP, Turnpike and more</p>
	</div>
</div>


<div class="cell medium-6 large-3">
	<div class="image-wrap">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/featured-images/home-tile4.jpg" alt="<?php echo bloginfo('name'); ?>" />
	</div>
	<div class="display-txt">
		<p class="dis-lead">Features</p>
		<p class="dis-strong">Truly Luxurious</p>
	</div>
	<div class="hover-text">
		<p>Chef's Delight Kitchens</p>
		<p>Granite Countertops</p>
		<p>Stainless Steel Appliances</p>
		<p>42" Mable Wall Cabinets</p>
		<p>Spa-Like Baths</p>
		<p>Tiled Tub/Shower Surrounds</p>
		<p>Huge Walk-In Closets</p>
		<p>Outdoor Living Space</p>

	</div>
</div>

</div>
</div>

<div class="grid-container full">
<div class="grid-x ">

<div class="cell medium-6 large-6 featured-image-left">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-featured-1.jpg"/>
</div>


<div class="cell medium-6 large-6 content-right featured-image-home-one">

<div class="inner-contains">
<p class="section-tag-thin">Live</p>
<p class="section-tag-bold">Graciously</p>

<p>The Kingsley places you at the center of a vibrant community with shopping, dining, entertainment and transportation options just outside your door. I-287, Route 1, the Garden State Parkway and the NJ Turnpike/I-95 are all nearby and provide seamless access to major employers, including RWJ Baranbaas, Johnson & Johnson, Rutgers University and L'Oreal USA. South Plainfield and surrounding towns and cities, Edison, New Brunswick and Piscataway provide cultural destinations, cuisine of every style and thriving nightlife.</p>

</div>
</div>

<div class="cell medium-6 large-6 content-left featured-image-home-two">

<div class="inner-contains">
<p class="section-tag-thin">Surround Yourself</p>
<p class="section-tag-bold">in Luxury</p>

<p>Thoughtfully designed and beautifully finished, The Kingsley's apartment homes, carriage homes and townhomes deliver serene surroundings. Patios and balconies provide ideal outdoor living. Granite countertops, stainless steel appliances and maple cabinets combine to create the ideal chef's delight kitchens while gorgeous tile and granite vanities create a spa-like environment throughout your bathroom. Energy-efficient LED lighting emits the perfect hue in your entire home. No detail has been overlooked. </p>

</div>

</div>


<div class="cell medium-6 large-6 featured-image-left">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-featured-2.jpg"/>
</div>



<div class="cell medium-6 large-6 featured-image-left">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/home-featured-3.jpg"/>
</div>


<div class="cell medium-6 large-6 content-right featured-image-home-three">

<div class="inner-contains">
<p class="section-tag-thin">Perfect Your</p>
<p class="section-tag-bold">Lifestyle</p>

<p>Situated at the center of the community, The Kingsley's two-story amenity center provides the perfect spot for everything from working out to holding a meeting in our business center to relaxing, meeting with friends or just grabbing a cup of coffee. An outdoor, resort-style pool, co-working space, premium fitness center and resident lounge complete with coffee bar are just a few of the highlights. Throughout the rest of the community, you will find beautifully landscaped grounds and gorgeous surroundings.
</p>
</div>
</div> 


</div>
</div>
<div class="divider-sect"></div>

<?php echo do_shortcode('[ep_shownearby]'); ?>

<!-- <div class="photo-gallery-wraps">
<div class="section-heading">
		<p class="section-tag-thin">FEATURED <span class="section-tag-bold">IMAGES</span> </p>	
	</div>
<ul class="light-box-items">

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>

<li>
<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" data-lightbox="gallery">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/gallery/gallery-image.jpg" alt="<?php bloginfo('home'); ?>" />
</a>
</li>
</ul>

<div class="view-more-gallery">
	<div class="view-more-grid">
<a href="<?php echo site_url(); ?>/luxurious-apartments-photo-gallery/">View Gallery <i class="fa-icon-chevron-right"></i>
</a>
</div>
</div> -->

</div> 

<?php get_footer();
