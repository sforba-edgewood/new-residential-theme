<?php
    $image = $args['image'];
    $reviewer_name = $args['reviewer_name'];
    $copy =  $args['copy'];
    $cta = $args['cta'];
    $stars = $args['review_stars'];
    $image_sizes = $image['sizes'];
    $lg = $image_sizes['2048x2048'];
?>
<div class="review_hero">
    <img class="review_hero__image" src="<? echo $lg ?>" />
    <div class="review_hero__content">
        <div  class="review_hero__quote">
            <span class="quote-mark"><i class="fa fa-quote-left"></i></span>
            <? echo $copy; ?>
            <span class="quote-mark"><i class="fa fa-quote-right"></i></span>
        </div>
        <div  class="review_hero__name">
            <div>
                - <? echo $reviewer_name; ?>
            </div>
            <div class="review_hero__stars">
                <?php
                    for ($x = 0; $x < $stars; $x++) {
                        echo '<i class="fa fa-star"></i>';
                    }
                ?>
            </div>
        </div>
        <div>
            <a class="review_hero__cta" href="<? echo $cta['url']; ?>">
                <? echo $cta['title']; ?>
            </a>
        </div>
    </div>
</div>