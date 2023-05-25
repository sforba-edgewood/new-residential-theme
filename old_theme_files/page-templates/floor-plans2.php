<?php 

/* Template Name: Floor Plans 2 */ 

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

<div class="floor-plans-filter">
<ul class="filter-options">
<!-- <li class="one-bedroom"><span>1 Bedroom</span></li>
<li class="two-bedroom"><span>2 Bedroom</span></li> -->
<li class="three-bedroom"><span>3 Bedroom</span></li>
<li class="show-all"><span>Show All</span></li>
</ul>
</div>

<div class="row floor-plans-container">
    
  <figure class="col-4@sm picture-item" data-groups='["three-bedroom"]'>
    <figcaption><strong>Layout:</strong> Diamond <br/><strong>Features:</strong> 3 Bed / 2.5 Bath<br>
    <strong>Size:</strong> 3,434 sq. ft </figcaption>

    <div class="aspect aspect--16x9">
      <div class="aspect__inner fpclick" data-fpid="FP-D1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/TheKingsley_FloorPlanInsertDiamondFullFinishedBasement.jpg" alt="The Kingsley Floorplan Diamond" />
      </div>
    </div>
    <div class="fp-pdf f-item">
    <a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/pdfs/TheKingsley_FloorPlanInsertDiamondFullFinishedBasement.pdf" target="_blank">DOWNLOAD AS PDF</a>    
    </div>
  </figure>

  <figure class="col-4@sm picture-item" data-groups='["three-bedroom"]'>
    <figcaption><strong>Layout:</strong> Emerald <br/><strong>Features:</strong> 3 Bed / 2.5 Bath<br>
    <strong>Size:</strong> 3,145 sq. ft </figcaption>

    <div class="aspect aspect--16x9">
      <div class="aspect__inner fpclick" data-fpid="FP-E1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/TheKingsley_FloorPlanInsertEmeraldFullFinishedBasement.jpg" alt="The Kingsley Floorplan Emerald" />
      </div>
    </div>
    <div class="fp-pdf f-item">
    <a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/pdfs/TheKingsley_FloorPlanInsertEmeraldFullFinishedBasement.pdf" target="_blank">DOWNLOAD AS PDF</a>    
    </div>
  </figure>

  <figure class="col-4@sm picture-item" data-groups='["three-bedroom"]'>
    <figcaption><strong>Layout:</strong> Sapphire <br/><strong>Features:</strong> 3 Bed / 2.5 Bath<br>
    <strong>Size:</strong> 2,910 sq. ft </figcaption>

    <div class="aspect aspect--16x9">
      <div class="aspect__inner fpclick" data-fpid="FP-E1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/TheKingsley_FloorPlanInsertSapphireFullFinishedBasement.jpg" alt="The Kingsley Floorplan Sapphire" />
      </div>
    </div>
    <div class="fp-pdf f-item">
    <a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/pdfs/TheKingsley_FloorPlanInsertSapphireFullFinishedBasement.pdf" target="_blank">DOWNLOAD AS PDF</a>    
    </div>
  </figure>

  <figure class="col-4@sm picture-item" data-groups='["three-bedroom"]'>
    <figcaption><strong>Layout:</strong> Turquoise <br/><strong>Features:</strong> 3 Bed / 2.5 Bath<br>
    <strong>Size:</strong> 2,974 sq. ft </figcaption>

    <div class="aspect aspect--16x9">
      <div class="aspect__inner fpclick" data-fpid="FP-E1">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/TheKingsley_FloorPlanInsertTurquoiseFullFinishedBasement.jpg" alt="The Kingsley Floorplan Sapphire" />
      </div>
    </div>
    <div class="fp-pdf f-item">
    <a href="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/pdfs/TheKingsley_FloorPlanInsertTurquoiseFullFinishedBasement.pdf" target="_blank">DOWNLOAD AS PDF</a>    
    </div>
  </figure>
  
  <div class="col-1@sm ep-spacer"></div>
</div>

<div class="reveal" id="floorplan-universal" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
  <div class="fp-img"></div>
  <div class="fp-pdf"></div>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>




<script type="text/javascript" src="https://unpkg.com/shufflejs@5.2.1/dist/shuffle.js"></script>

<script type="text/javascript">
var Shuffle = window.Shuffle,
    element = document.querySelector('.floor-plans-container'),
    sizer = element.querySelector('.ep-spacer'),
    shuffleInstance = new Shuffle(element, {
  itemSelector: '.picture-item',
  sizer: sizer,
  speed: 750
});


jQuery(document).ready(function($) { 
    $('.filter-options li').on('click', function () { 
        var t = $(this).attr("class");
        if(t == 'show-all') {
            shuffleInstance.filter(Shuffle.ALL_ITEMS);    
        } else { 
            shuffleInstance.filter(t);
        }        
    });
});
</script>

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


<?php get_footer(); ?>