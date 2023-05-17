<?php 

/* Template Name: Floor Plans */ 

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

<div class="floorplans-wrap">
<div class="floor-plans-table">
<div class="filter-rows">

	<ul class="filter-options">
		<li><button data-shows="all" class="fp_active">View All</button></li>
		<li><button data-shows="1bed">1 Bedroom</button></li>
		<li><button data-shows="2bed">2 Bedroom</button></li>
	</ul>	

</div>

	
<table class="floor-plans">

	<thead>
		<tr>
			<th>Layout</th>
			<th>Features</th>
			<th>Sq Feet</th>
			<th>Rent</th>
			<th>Floor Plan</th>
		</tr>


	</thead>


	<tbody>

<tr data-fp="2bed" class="fpr_active">
    <td>
        <div>C-1</div>
    </td>
    <td>
        <div> 2 Bed / 2 Bath</div>
    </td>
    <td>
        <div>1,434</div>
    </td>
    <td>
        <div>$2,515</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-C1">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/C-1.jpg"/>
            </p>
        </div>


    </td>
</tr>

<tr data-fp="2bed" class="fpr_active">
<td>
        <div>A-4B</div>
    </td>
    <td>
        <div> 2 Bed / 2 Bath</div>
    </td>
    <td>
        <div>1,434</div>
    </td>
    <td>
        <div>$2,515</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-A4B">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/A-4b.jpg"/>
            </p>
        </div>


    </td>
</tr>


<tr data-fp="2bed" class="fpr_active">
<td>
        <div>F</div>
    </td>
    <td>
        <div> 2 Bed / 2 Bath</div>
    </td>
    <td>
        <div>1,300</div>
    </td>
    <td>
        <div>$2,310</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-F">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/F.jpg"/>
            </p>
        </div>


    </td>
</tr>

<tr data-fp="1bed" class="fpr_active">
<td>
        <div>B2</div>
    </td>
    <td>
        <div> 1 Bed / 1 Bath</div>
    </td>
    <td>
        <div>1,348</div>
    </td>
    <td>
        <div>$2,280</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-B2">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/B-2.jpg" />
            </p>
        </div>
    </td>
</tr>

<tr data-fp="2bed" class="fpr_active">
<td>
        <div>C</div>
    </td>
    <td>
        <div> 2 Bed / 2 Bath</div>
    </td>
    <td>
        <div>1,237</div>
    </td>
    <td>
        <div>$2,260</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-C">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/C.jpg" />
            </p>
        </div>
    </td>
</tr>

<tr data-fp="1bed" class="fpr_active">
<td>
        <div>B7</div>
    </td>
    <td>
        <div> 1 Bed / 1 Bath</div>
    </td>
    <td>
        <div>977</div>
    </td>
    <td>
        <div>$2,010</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-B7">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/B-7.jpg" />
            </p>
        </div>
    </td>
</tr>


<tr data-fp="1bed" class="fpr_active">
<td>
        <div>B</div>
    </td>
    <td>
        <div> 1 Bed / 1 Bath</div>
    </td>
    <td>
        <div>1003</div>
    </td>
    <td>
        <div>$1,995</div>
    </td>
    <td>
        <div> 
            <p class="fpclick" data-fpid="FP-B">
                <img class="fp-thumb" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/floor-plans/B.jpg" />
            </p>
        </div>
    </td>
</tr>





</tbody>
</table>
</div>
</div>



<div class="reveal" id="floorplan-universal" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
  <div class="fp-img"></div>
  <div class="fp-pdf"></div>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
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


<?php get_footer(); ?>