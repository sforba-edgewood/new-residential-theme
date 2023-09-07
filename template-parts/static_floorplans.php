<?php
    $floorplans = $args['static_floorplan_list'];
 ?>

<div class="static_floorplans container mx-auto" >
    <div class="static_floorplans__filter">
        <ul class="static_floorplans__filter-list filter-options">
            <li id="one-bedroom"><span>1 Bedroom</span></li>
            <li id="two-bedroom"><span>2 Bedroom</span></li>
            <li id="all-items"><span>Show All</span></li>
        </ul>
    </div>
    <div class="static_floorplans__list" id="staticFloorplans">
        <?php foreach ( $floorplans as $floorplan ) { 
            $name = $floorplan['floorplan_name'];
            $sqft = $floorplan['square_footage'];
            $bed = $floorplan['bedrooms'];
            $bath = $floorplan['bathrooms'];
            $image = $floorplan['floorplan_image'];
            $image_data =  $image['sizes'];
            $lg = $image_data['large'];
            $bed_tag = '';
            $bath_tag = '';

            if($bed == 1) {
                $bed_tag = 'one-bedroom';
            } else if ($bed == 2) {
                $bed_tag = 'two-bedroom';
            }

            if($bath == 1) {
                $bath_tag = 'one-bath';
            } else if ($bed == 2) {
                $bath_tag = 'two-bath';
            }
        ?>
            <figure class="static_floorplans__item" data-groups='["<? echo $bed_tag; ?>", "<? echo $bath_tag; ?>"]'>
                <figcaption>
                    <strong>Layout:</strong> <? echo $name; ?> <br/><strong>Features:</strong> <? echo $bed; ?>  Beds / <? echo $bath; ?> Baths<br>
                    <strong>Size:</strong> <? echo $sqft; ?> sq. ft 
                </figcaption>
                <div class="aspect aspect--16x9">
                    <div class="aspect__inner fpclick" >
                        <a href="<?php echo $lg; ?>" data-lightbox="gallery">
                            <img src="<? echo $lg; ?>" alt="" class="static_floorplans__image"/>
                        </a>
                    </div>
                </div>
                <div class="fp-pdf f-item">
                    <a href="" target="_blank">DOWNLOAD AS PDF</a>    
                </div>
            </figure>                
        <? }?>
        </div>
</div>