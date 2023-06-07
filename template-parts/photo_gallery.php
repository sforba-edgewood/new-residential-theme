<?php

    $title = $args['title'];
    $copy = $args['copy'];
    $images = $args['images'];
?>
<div class="py-7 gallery">
    <div>
        <h2 class="text-6xl font-bold gallery__title">
            <? echo $title; ?>
        </h2>
        <div class="gallery__copy">
            <? echo $copy; ?>
        </div>
        <div>
            <div>
                <div class="gallery__main">
                    <ul class="gallery__main-list">
                        <?php foreach ( $images as $image ) { 
                            $image_data = $image['image'];
                            $url = $image_data['image_url'];
                            $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";
                            
                        ?>
                            <li>
                                <a href="<?php echo $url; ?>" data-lightbox="gallery">
                                    <img src="<?php echo $url; ?>"  alt="<?php echo $alt; ?>"/>
                                </a>
                            </li>
                    <? } ?>
                    </ul>
                </div>
                <div class="gallery__thumb">
                    <ul class="gallery__thumb-list">
                        <?php foreach ( $images as $image ) { 
                            $image_data = $image['image'];
                            $url = $image_data['image_url'];
                            $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";
                            
                        ?>
                            <li class="gallery__thumb-slide">
                                <img src="<?php echo $url; ?>"  alt="<?php echo $alt; ?>"/>
                            </li>
                    <? } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>