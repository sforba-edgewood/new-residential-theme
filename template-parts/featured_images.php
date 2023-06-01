<?php
    $title = $args['title'];
    $cta = $args['cta'];
    $images = $args['images'];
?>
<div class="featured-images">
    <div class="container mx-auto featured-images__container py-20">
        <h2 class="text-center text-6xl pb-5 font-bold featured-images__title">
            <? echo $title; ?>
        </h2>
        <ul  class="featured-images__list grid grid-cols-1 md:grid-cols-3 gap-3">
            <? foreach($images as $image) { 
                $img = $image['image'];
            ?>
                <li data-lightbox="gallery">
                    <a href="<? echo $img; ?>"  data-lightbox="gallery">
                        <img class="w-full h-full featured-images__image" src="<? echo $img; ?>" target="" alt=""/>
                    </a>
                </li>
            <? } ?>
        </ul>
    </div>
    <div>
    </div>
</div>