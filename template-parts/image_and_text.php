<?php 
    $primary_title = $args['primary_title'];
    $secondary_title = $args['secondary_title'];
    $copy = $args['copy'];
    $image = $args['image'];
    $orientation = $args['image_orientation'];
?>

<div class="image-text">
    <div class="image-text__container <?php echo strtolower($orientation); ?>">
        <div class="image-text__col image">
            <img src="<? echo $image; ?>" target="" alt="<? echo $primary_title; ?>, <? echo $secondary_title; ?>"/>
        </div>
        <div  class=" md:py-5 lg:py-0  image-text__col content">
            <h1 class="font-thin text-4xl lg:text-6xl">
                <? echo $primary_title; ?>
            </h1>
            <h1 class="font-bold text-4xl lg:text-6xl">
                <? echo $secondary_title; ?>
            </h1>
            <div>
                <p class="text-base">
                    <? echo $copy; ?>
                </p>
            </div>
        </div>
    </div>
</div>