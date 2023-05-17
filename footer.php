<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
         <section>
         	<div class="footer-logo">
         	<img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/logo.png" alt="<?php echo bloginfo('name'); ?>" />
         </div>
         </section>

         <section class="footer-location-meta">
         	<p class="section-title">LEASING OFFICE</p>

         	<div class="location-wraps" itemscope itemtype="http://schema.org/Organization">
				  <span itemprop="name"><strong>TEMPORARY LEASING OFFICE <br/>LOCATED AT:<br/><br/> The Villas at Fairway</strong></span><br>

				  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				    <strong>ADDRESS:</strong><br>  
				      <span itemprop="streetAddress">1636 Stelton Road Suite 318</span><br>
				      <span itemprop="postalCode">08854</span>
				      <span itemprop="addressLocality">Piscataway, NJ</span>				    
				  </div><br>

				    <strong>PHONE:</strong><br><a href="tel:+19084273311" title="Call Today" class="phone-footer"><span itemprop="telephone">(908) 427-3311</span></a><br><br>
				    <strong>EMAIL:</strong><br><a href="<?php echo site_url(); ?>/contact-the-kingsley"><span>Contact us online</span></a>
			</div>         	
        </section>

         <section>
         	<p class="section-title">CONNECT WITH US</p>
         	<div class="socialmedia-info">
				<a href="#" target="_blank"><i class="<?php echo (is_front_page()) ? 'fa-icon-facebook' : 'fa fa-facebook'; ?>"></i></a>

				<a href="#" target="_blank"><i class="<?php echo (is_front_page()) ? 'fa-icon-twitter' : 'fa fa-twitter'; ?>"></i></a>

				<a href="#" target="_blank"><i class="<?php echo (is_front_page()) ? 'fa-icon-instagram' : 'fa fa-instagram'; ?>"></i></a>
         		
         	</div>
          <br><br>
          <p class="section-title">SITEMAP</p>
          <a href="<?php echo site_url(); ?>/the-kingsley-nj-sitemap">Sitemap</a>
         </section>
        </div>
    </div>

    <div class="footer-lower">
    	<a class="ep-logo-link" href="https://www.edgewoodproperties.com" target="_blank" title="Edgewood Properties"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/ep-logo-main.png" alt="Edgewood Properties Logo" /></a>
        	<p><?php echo bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>. All Rights Reserved.</p>
    </div>

</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>