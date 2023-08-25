<?php
    $title = $args['title'];
    $cta = $args['cta'];
    $images = $args['images'];
    if(gettype($images) != 'array') {
        return;
    }
?>
<div class="featured-images">
    <div class="container mx-auto featured-images__container py-20">
        <h2 class="text-center text-6xl pb-5 font-bold featured-images__title">
            <? echo $title; ?>
        </h2>
        <ul  class="featured-images__list grid grid-cols-1 md:grid-cols-3 gap-3">
            <? foreach($images as $image) { 
                $image_data = $image['image'];
                $sizes = $image_data['sizes'];
                // var_dump($sizes);
                $medium = $sizes['medium'];
                $lg = $sizes["large"];
                $lg_height = $sizes["large-height"];
                $lg_width = $sizes["large-width"];
                $xl = $sizes["2048x2048"];
                $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";
            ?>
                <li data-lightbox="gallery">
                    <a href="<? echo $lg; ?>"  data-lightbox="gallery">
                        <img class="w-full h-full featured-images__image" width="<? echo $lg_width; ?>" height="<? echo $lg_height; ?>" src="<? echo $lg; ?>" alt="<? echo $alt; ?>"/>
                    </a>
                </li>
            <? } ?>
        </ul>
    </div>
    <div>
    </div>
</div>