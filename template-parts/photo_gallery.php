<?php

    $title = $args['title'];
    $copy = $args['copy'];
    $images = $args['images'];
    if(gettype($images) != 'array') {
        return;
    }
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
                    <ul class="gallery__main-list">
                        <?php foreach ( $images as $image ) { 
                            $image_data = $image['image']['image_url'];
                            $sizes = $image_data['sizes'];
                            $medium = $sizes['medium'];
                            $lg = $sizes["1536x1536"];
                            $xl = $sizes["2048x2048"];
                            $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";
                            
                        ?>
                            <li>
                                <a href="<?php echo $lg; ?>" data-lightbox="gallery">
                                    <img src="<?php echo $xl; ?>"  alt="<?php echo $alt; ?>"/>
                                </a>
                            </li>
                    <? } ?>
                    </ul>
                </div>
                <div class="gallery__thumb">
                    <ul class="gallery__thumb-list">
                        <?php foreach ( $images as $image ) { 
                            $image_data = $image['image']['image_url'];
                            $sizes = $image_data['sizes'];
                            $medium = $sizes['medium'];
                            $lg = $sizes["1536x1536"];

                            $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";
                            
                        ?>
                            <li class="gallery__thumb-slide mx-2">
                                <img src="<?php echo $lg; ?>"  alt="<?php echo $alt; ?>"/>
                            </li>
                    <? } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>