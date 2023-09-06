<?php

    $title = $args['title'];
    $reviews = $args['review_list'];
?>
<div class="reviews">
    <div class="container mx-auto">
        <h2>
            <? echo $title; ?>
        </h2>
        <ul>
        <? foreach($reviews as $review) { 

            $name = $review['reviewer_name'];
            $copy = $review['review_copy'];
            $stars = $review['review_stars'];
            $cta =  $review['cta'];
        ?>
            <li>
                <div class="review-card">
                    <h4 class="review-name">
                        <? echo $name; ?>
                    </h4>
                    <div class="review-stars">
                        <?php
                            for ($x = 0; $x < $stars; $x++) {
                                echo '<i class="fa fa-star"></i>';
                            }
                        ?>
                    </div>
                    <div class="review-divider"></div>
                    <div class="review-text">
                        <? echo $copy; ?>
                    </div>
                    <div>
                        <a href="<? echo $cta["url"]; ?>">
                            <? echo $cta["title"]; ?>
                        </a>
                    </div>
                </div>
            </li>
        <? } ?>
        </ul>
    </div>
</div>