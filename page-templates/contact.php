<?php
/* 
 * Template Name: Contact
 *
 */

get_header(); ?>


<?php 
      $property_coords = get_option('ep_places_field_latlong');
      $api_key = get_option('ep_places_field_apikey');
      $coords = explode(',',$property_coords);

      if(!empty($api_key) && !empty($property_coords) ) { 
          $coords_js_obj = '{ lat:'.$coords[0].',lng:'.$coords[1].'}';
          $coords_js_str = $coords[0].','.$coords[1];
      }
?>


<div class="bc-bg">
<div class="breadcrumb-wraps">
	<div class="breadcrumb-wrapper">
<?php if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
} ?>
		</div>
	</div>
</div>


<div class="contact-bg-wraps">

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<div class="contact-form-wrapper">
				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact Page" html_id="contact-page-form"  html_class="ep-contact-form"]'); ?>
			</div>

		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
<div id="c-page-map" style="width: 100%; height: 500px; border-top: 3px solid #ceb57f; border-bottom: 3px solid #ceb57f;"></div>
<script type="text/javascript">
function initMap()  {
    
  maps = document.getElementById('c-page-map');
  var z = 15,
      //prop = {lat: 40.4084453, lng: -74.2321528},
      prop = <?php echo $coords_js_obj; ?>,
      mapStyles = [{
      featureType: "all",
      elementType: "labels.text",
      stylers: [{
          visibility: "off"
      }]
  }];

  map = new google.maps.Map(maps, {
    center: prop,
    zoom: z,
    styles: mapStyles
  });

  var edge = new google.maps.LatLng(<?php echo $coords_js_str; ?>),
      getCen = map.getCenter();
    google.maps.event.addDomListener(window, 'resize', function() {
      map.setCenter(getCen);
    });

    var image = {
          url: '<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/marker-logo.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(50, 78),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 78),
          labelOrigin: new google.maps.Point(20, 85)
        };

    var marker = new google.maps.Marker({
    map: map,
    position: edge,
    label: {
      text: 'The Kingsley', 
      color: "#333333",
      fontFamily: '"Oswald",sans-serif',
      fontSize: '1rem'
    },
    fontSize: '100px',
    icon: image,
    zIndex: 4,
    });

    infowindow = new google.maps.InfoWindow();
    google.maps.event.addListener(marker, 'click', function() {
    var info_html = '\
    <span>The Kingsley</span><br>'+
    '<span>1111 Durham Ave<br>07080 South Plainfield, NJ</span><br>'+
    '<a href="https://www.google.com/maps/dir//The+Kingsley,+1111+Durham+Ave,+South+Plainfield,+NJ+07080/@40.5475673,-74.4100145,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c3b9a6eebde36f:0x97443c96a0b01282!2m2!1d-74.4100145!2d40.5475673!3e0" target="_blank">Get Directions &raquo;</a>';

      infowindow.setContent(info_html);
        infowindow.open(map, this);
    });
}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKBcKfHgMCOzkVGlKXQWFR1X3TMCsLcIA&callback=initMap"></script>
<?php
get_footer();
