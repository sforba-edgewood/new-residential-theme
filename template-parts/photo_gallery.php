<?php

    $title = $args['title'];
    $copy = $args['copy'];
    $images = $args['images'];
    $images_check = (gettype($images) == 'array') && (count($images) > 0);
    $filter_list = array();

    foreach ( $images as $image ) { 
        $tags = $image['image_tags'];
        $tags_count = count($tags);
        
        if($tags_count > 0) {
            foreach ( $tags as $tag ) {
               
                if(!in_array($tag,  $filter_list)) {
                    $filter_list[] = $tag;
                }
            }
        }
    }
?>

<div class="py-7 gallery">
    <div>
        <? if(empty($title) != true) {  ?>
            <h2 class="text-6xl font-bold gallery__title">
                <? echo $title; ?>
            </h2>
        <? } ?>
        <? if(empty($copy) != true) {  ?>
            <div class="gallery__copy">
                <? echo $copy; ?>
            </div>
        <? } ?>
        <div class="gallery__filter">
            <ul class="gallery__filter-list filter-options">
                <li id="all-items"> All items </li>
                <?php foreach ( $filter_list as $filter) { 
                    $label = $filter["label"];
                    $value = $filter["value"];
                ?>
                    <li id="<? echo $value; ?>">
                        <span>
                            <? echo $label; ?>
                        </span>
                    </li>
                <? } ?> 
            </ul>
        </div>
        <div class="gallery__grid">
            <? if($images_check){ ?>
                <ul class="gallery__grid-list" id="photo-gallery">
                    <?php foreach ( $images as $image ) { 
                        $image_data = $image['image'];
                        $image_tags = $image['image_tags'];

                        $sizes = $image_data['sizes'];
                        $medium = $sizes['medium'];
                        $lg = $sizes["1536x1536"];
                        $lg_height = $sizes["1536x1536-height"];
                        $lg_width = $sizes["1536x1536-width"];
                        $xl = $sizes["2048x2048"];
                        $alt = (isset($image_data['alt']) == true ) ? $image_data['alt'] : "Photo Gallery Image";

                        $tag_list = array();

                        foreach ( $image_tags as $image_tag ) {
                            $tag_list[] = '"' .$image_tag['value'] . '"';;
                        }
                        $tag_string = implode(", ",$tag_list);
                        $tag_array = '['.$tag_string.']';
                        
                    ?>
                        <li data-sort="value"  data-groups='<? echo $tag_array; ?>' class="gallery-item">
                            <a href="<?php echo $lg; ?>" data-lightbox="gallery">
                                <img loading="lazy"  src="<?php echo $xl; ?>"  width="<? echo $lg_width; ?>" height="<? echo $lg_height; ?>" alt="<?php echo $alt; ?>"/>
                            </a>
                        </li>
                        <div class="ep-spacer"></div>
                    <? } ?>
                </ul>
            <? } ?>
        </div>
</div>