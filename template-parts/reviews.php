<?php

    $title = $args['title'];
    $reviews = $args['review_list'];
?>
<div class="reviews">
    <div>
        <h2>
            <? echo $title; ?>
        </h2>
        <ul>
        <? foreach($reviews as $review) { 

            $name = $review['reviewer_name'];
            $copy = $review['reviewer_copy'];
            $stars = $review['review_stars'];
            $cta =  $review['cta'];
        ?>
            <li>
                <div>
                    <h4>
                        <? echo $name; ?>
                    </h4>
                    <div>
                        <?php
                            for ($x = 0; $x < $stars; $x++) {
                                echo '<i class="fa fa-star"></i>';
                            }
                        ?>
                    </div>
                    <div>
                        <? echo $copy; ?>
                    </div>
                </div>
            </li>
        <? } ?>
        </ul>
    </div>
</div>