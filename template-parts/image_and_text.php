<?php 
    $primary_title = $args['primary_title'];
    $secondary_title = $args['secondary_title'];
    $copy = $args['copy'];
    $image = $args['image'];
    $orientation = $args['image_orientation'];
    $matterport_link = $args['matterport_link'];
    $cta = $args['cta'];
    $cta_check = (gettype($cta) == 'array');
?>

<div class="image-text">
    <div class="image-text__container <?php echo strtolower($orientation); ?> ">
        <?php if(empty($matterport_link) != true){ ?>
            <div  class="image-text__col image">
                <iframe src="<? echo $matterport_link?>" loading="lazy" frameborder="0" allowfullscreen="" allow="vr" title="The Crossings at Hamilton Station Community Room 3D Exploration"></iframe>
            </div>
        <? } else { ?>
            <div class="image-text__col image">
                <img src="<? echo $image; ?>" target="" alt="<? echo $primary_title; ?>, <? echo $secondary_title; ?>"/>
            </div>
        <? } ?>
        <div  class=" md:py-5 lg:py-0  image-text__col content <?php if(empty($matterport_link) != true){ ?> matterport<? } ?>">
            <h1 class="font-thin text-4xl lg:text-6xl">
                <? echo $primary_title; ?>
            </h1>
            <h1 class="font-bold text-4xl lg:text-6xl">
                <? echo $secondary_title; ?>
            </h1>
            <div>
                <p class="text-base image-text__copy">
                    <? echo $copy; ?>
                </p>
            </div>
            <?php if($cta_check){?>
                <div class="pt-5">
                    <a href="<? echo $cta['url']; ?>" class="image-text__cta">
                        <? echo $cta['title']; ?>
                    </a>
                </div>
            <? }?>
        </div>
    </div>
</div>