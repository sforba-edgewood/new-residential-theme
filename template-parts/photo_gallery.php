<?php

    $title = $args['title'];
    $copy = $args['copy'];
    $images = $args['images'];
    $images_check = (gettype($images) == 'array') && (count($images) > 0);
?>
<div class="py-7 gallery">
    <div>
        <? if(empty($title) != true) {  ?>
            <h2 class="text-6xl font-bold gallery__title">
                <? echo $title; ?>
            </h2>
        <? } ?>
        <? if(empty($copy) != true) {  ?>
            <div class="gallery__copy">
                <? echo $copy; ?>
            </div>
        <? } ?>
        <div>
            <div>
                <div class="gallery__main">
                    <? if($images_check){ ?>
                        <ul class="gallery__main-list">
                            <?php foreach ( $images as $image ) { 
                                $image_data = $image['image'];
                                $sizes = $image_data['sizes'];
                                $medium = $sizes['medium'];
                                $lg = $sizes["1536x1536"];
                                $lg_height = $sizes["1536x1536-height"];
                                $lg_width = $sizes["1536x1536-width"];
                                $xl = $sizes["2048x2048"];
                                $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";
                                
                            ?>
                                <li>
                                    <a href="<?php echo $lg; ?>" data-lightbox="gallery">
                                        <img loading="lazy"  src="<?php echo $xl; ?>"  width="<? echo $lg_width; ?>" height="<? echo $lg_height; ?>" alt="<?php echo $alt; ?>"/>
                                    </a>
                                </li>
                            <? } ?>
                        </ul>
                    <? } ?>
                </div>
                <div class="gallery__thumb">
                    <? if($images_check){ ?>
                        <ul class="gallery__thumb-list">
                            <?php foreach ( $images as $thumbnail ) { 
                                $thumbnail_data = $thumbnail['image'];
                                $thumbnail_sizes = $thumbnail_data['sizes'];
                                $thumbnail_medium = $thumbnail_sizes['medium'];
                                $thumbnail_img = $thumbnail_sizes["1536x1536"];
                                $thumbnail_alt = (isset($thumbnail_data['alt']) == true ) ? $thumbnail_data['alt'] : "Photo Gallery Image";

                                $thumbnail_width = $thumbnail_sizes["1536x1536-width"];
                                $thumbnail_height = $thumbnail_sizes["1536x1536-height"];
                                
                            ?>
                                <li class="gallery__thumb-slide mx-2">
                                    <!-- <? var_dump($thumbnail_sizes);?> -->
                                    <img loading="lazy" class="gallery__thumb-image" src="<?php echo $thumbnail_img; ?>" width="<? echo $thumbnail_width; ?>" height="<? echo $thumbnail_height; ?>" alt="<?php echo $thumbnail_alt; ?>"/>
                                </li>
                            <? } ?>
                        </ul>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>