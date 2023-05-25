<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">

	<?php if( !is_home() && !is_archive() && !is_page('contact-the-kingsley') ) { ?>
		<div class="contact-sidebar">
		<p class="sb-form-lead">Schedule A Tour Today!</p>
		<div class="contact-inner">
		<?php echo do_shortcode('[contact-form-7 id="32" title="Sidebar Contact"]'); ?>
		</div>
	</div>
	<?php } elseif(is_page('contact-the-kingsley')) { ?>
		<div class="contact-sidebar">
		<p class="sb-form-lead">Contact Us Today</p>	
		<div class="contact-page-info">
			<strong>Location</strong>
			<p>1111 Durham Ave<br> 07080 South Plainfield, NJ</p>
 
			<p>TEMPORARY LEASING OFFICE LOCATED at<br/>
			The Villas at Fairway<br/>
			1636 Stelton Road Suite 318<br/>
			Piscataway, NJ 08854</p>
			

			<strong>Phone</strong>
			<p><a class="phone-sb" href="tel:+19084273311">(908) 427-3311</a></p>

			<strong>Office Hours</strong>
			<p>Mon - Wed &amp; Fri - Sat: 9:30 AM - 6 PM<br>
			Thurs: 10 AM - 7 PM<br>
			Sun: 11 AM - 5 PM</p>

			<strong>Downloads</strong>

			<div class="download-links">

			<div>
				<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/pdfs/TheKingsleyApplication.pdf" title="The Kingsley Application PDF" target="_blank"><i class="fa fa-file-pdf-o"></i> Application</a>
			</div>

			<div>
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/pdfs/QUALIFICATION-STANDARDS-For-Prospective-Residents-12-28-2021.pdf" title="Qualification Standards" target="_blank"><i class="fa fa-file-pdf-o"></i> Qualification Standards</a>
			</div>

			<div>
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/pdfs/MDRR_Form.pdf" title="MDRR" target="_blank"><i class="fa fa-file-pdf-o"></i> MDRR</a>
			</div>	

			</div>


		</div>
		
		</div>


		<?php } else { ?>

		<ul class="categories-main">
		<?php $args = array('title_li' => '<p class="cats-title">Blog Categories</p>');
		wp_list_categories($args); ?>
		</ul>

		<?php } ?>

</aside>
