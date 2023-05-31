<?php
    $title = $args['title'];
    $cta = $args['cta'];
    $images = $args['images'];
?>
<div>
    <h2>
        <? echo $title; ?>
    </h2>
    <div>
        <ul>
        <? foreach($images as $image) { 
            $img = $image['image'];
        ?>
            <li>
                <img object-fit="cover" src="<? echo $img; ?>" target="" alt=""/>
            </li>
        <? } ?>
        </ul>
    </div>
    <div>
    </div>
</div>