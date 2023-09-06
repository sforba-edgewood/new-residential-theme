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
        <div>
            <span class="review_hero__quote">"</span>
            <? echo $copy; ?>
            <span  class="review_hero__quote">"</span>
        </div>
        <div>
            - <? echo $reviewer_name; ?>
        </div>
        <div>
            <a href="<? echo $cta['url']; ?>">
                <? echo $cta['title']; ?>
            </a>
            <div class="review_hero__stars">
                <?php
                    for ($x = 0; $x < $stars; $x++) {
                        echo '<i class="fa fa-star"></i>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>