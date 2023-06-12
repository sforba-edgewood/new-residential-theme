<?php 
    $title = $args['title'];
    $image = $args['image'];
    if(empty($image)) {
        return;
    }
?>

<div class="hero-narrow">
    <img class="hero-narrow__image" src="<? echo $image ?>" />
    <h1 class="text-6xl hero-narrow__title">
        <? echo $title ?>
    </h1>
</div>