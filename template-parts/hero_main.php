<?php 
    $slides = $args['hero_slides'];
?>

<div class="hero-main">
    <div class="slick-slider hero-slider">
        <? foreach($slides as $slide) {
            $image = $slide['hero_image'];
            $primary_title = $slide['primary_title'];
            $secondary_title = $slide['secondary_title'];
            $cta = $slide['hero_cta'];
        ?>
            <div class="slick-slide hero-slide">
                <img object-fit="cover" src="<? echo $image; ?>" target="" alt="<? echo $primary_title; ?>"/>
                <div  class="hero-slide-content">
                    <h1>
                        <? echo $primary_title; ?>
                    </h1>
                    <h2>
                        <? echo $secondary_title; ?>
                    </h2>
                    <div>
                        <a href="<? echo $cta["url"]; ?>" target="<? echo $cta["target"]; ?>">
                            <? echo $cta['title']; ?>
                        </a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>