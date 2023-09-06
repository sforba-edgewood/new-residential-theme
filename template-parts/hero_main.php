<?php 
    $slides = $args['hero_slides'];
    if(gettype($slides) != 'array') {
        return;
    }
?>

<div class="hero-main">
    <div class="slick-slider hero-slider">
        <? foreach($slides as $slide) {
            $image = $slide['hero_image'];
            $image_sizes = $image['sizes'];
            $hero_image = $image_sizes["2048x2048"];
            $hero_width = $image_sizes["2048x2048-width"];
            $hero_height = $image_sizes["2048x2048-height"];
            $primary_title = $slide['primary_title'];
            $secondary_title = $slide['secondary_title'];
            $cta = $slide['hero_cta'];
        ?>
            <div class="slick-slide hero-slide">
                <div class="hero-slide-wrap">
                    <img  src="<? echo $hero_image; ?>" width="<? echo $hero_width; ?>" height="<? echo $hero_height; ?>" target="" alt="<? echo $primary_title; ?>"/>
                    <div  class="hero-slide-content">
                        <h1 class="text-5xl md:text-8xl">
                            <? echo $primary_title; ?>
                        </h1>
                        <h2 class="text-4xl md:text-6xl">
                            <? echo $secondary_title; ?>
                        </h2>
                        <div class="mt-8 hero-slide-cta-wrap">
                            <a class="py-2 px-9 block mx-auto w-fit font-bold  rounded-3xl font-normal text-lg uppercase hero-main__cta" href="<? echo $cta["url"]; ?>" target="<? echo $cta["target"]; ?>">
                                <? echo $cta['title']; ?>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        <? } ?>
    </div>
</div>