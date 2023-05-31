<?php 
    $primary_title = $args['primary_title'];
    $secondary_title = $args['secondary_title'];
    $copy = $args['copy'];
    $image = $args['image'];
    $orientation = $args['image_orientation'];
?>

<div>
    <div>
        <div>
            <img src="<? echo $image; ?>" target="" alt="<? echo $primary_title; ?>, <? echo $secondary_title; ?>"/>
        </div>
        <div>
            <h1>
                <? echo $primary_title; ?>
            </h1>
            <h1>
                <? echo $secondary_title; ?>
            </h1>
            <div>
                <p>
                    <? echo $copy; ?>
                </p>
            </div>
        </div>
    </div>
</div>