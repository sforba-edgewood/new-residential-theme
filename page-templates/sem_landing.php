<?php
    /* 
    * Template Name: SEM Landing Page
    *
    */

    get_header();
    $id = get_the_ID();
    $components_field = get_field( "page_fields", $id);
    $hero = $components_field["sem_hero"];
    $content = $components_field["sem_content"];
    $features = $components_field["sem_features"];
    $neighborhood = $components_field["sem_neighborhood"];
    $floorplans = $components_field["sem_floorplans"];

?>
<div class="sem">
    <div class="sem__wrap">
        <div class="sem__hero">
            <div class="sem__hero-wrap">
                <?php 
                    // var_dump($hero);
                    $sem_hero_tag = $hero['sem_hero_tag'];
                    $sem_hero_images = $hero['sem_hero_images'];
                    $sem_form_shortcode = $hero['sem_contact_form_shortcode'];
                ?>
                <div class="sem__hero-tag">
                    <?php echo $sem_hero_tag; ?>
                </div>
                <div class="sem__hero-slider">
                    <? foreach($sem_hero_images as $slide) {
                            $image = $slide['sem_hero_image'];
                            $lg = $image['sizes']['2048x2048'];
        
                    ?>
                        <div class="slick-slide sem-hero-slide">
                            <img  src="<? echo $lg; ?>" alt="Sycamore Landing NJ"/>
                        </div>
                    <? } ?>                    
                </div>
                <div class="sem__hero-form">
                    <?php echo do_shortcode($sem_form_shortcode); ?>
                </div>
            </div>
        </div>
        <div class="sem__content">
            <?php 
                // var_dump($content);
                $sem_content_title = $content['title'];
                $sem_content_copy = $content['copy'];
            ?>
            <div class="sem__content-wrap">
                <div class="sem__content-title">
                    <? echo $sem_content_title; ?>
                </div>
                <div class="sem__content-copy">
                <? echo $sem_content_copy; ?>
                </div>
            </div>
        </div>
        <div class="sem__features">
            <?php 
                // var_dump($features);
                $left_list = $features['left_list'];
                $right_list= $features['right_list'];
                $feature_cta = $features['cta'];

                $left_list_title = $left_list['title'];
                $right_list_title = $right_list['title'];
                $left_list_items = $left_list['left_feature_list'];
                $right_list_items = $right_list['right_feature_list'];
            ?>
            <div class="sem__features-wrap">
                <div class="sem__features-block">
                    <div  class="sem__features-title">
                        <? echo $left_list_title; ?>
                    </div>
                    <ul  class="sem__features-list">
                        <? foreach($left_list_items as $left_item) { 
                            $left_item_text = $left_item['left_feature_list_item'];
                        ?>

                            <li>
                                <?php echo $left_item_text; ?>
                            </li>
                        <? } ?>    
                    </ul>
                </div>
                <div class="sem__features-block">
                    <div  class="sem__features-title">
                        <? echo $right_list_title; ?>
                    </div>
                    <ul  class="sem__features-list">
                        <? foreach($right_list_items as $right_item) { 
                                $right_item_text = $right_item['right_feature_list_item'];
                        ?>
                            <li>
                                <?php echo $right_item_text; ?>
                            </li>
                        <? } ?>                           
                    </ul>
                </div>
            </div>
        </div>
        <div class="sem__neighborhood">
            <?php
                $sem_neighborhood_title = $neighborhood['title'];
                $static_map_image = $neighborhood['static_map_image']['sizes'];
                $lg = $static_map_image["large"];
                $sem_neighborhood_copy = $neighborhood['copy'];
                $sem_neighborhood_cta = $neighborhood['cta'];
            ?>
            <div class="sem__neighborhood-wrap">
                <div class="sem__neighborhood-title">
                    <? echo $sem_neighborhood_title; ?>
                </div>
                <img class="sem__neighborhood-image" src="<? echo $lg; ?>" alt="Sycamore Landing NJ"/>
                <div class="sem__neighborhood-copy">
                    <? echo $sem_neighborhood_copy; ?>
                        </div>
                <a class="sem__neighborhood-cta" href="<? echo $sem_neighborhood_cta["url"]; ?>" target="_blank">
                    <? echo $sem_neighborhood_cta["title"]; ?>
                </a>
            </div>
        </div>
        <div class="sem__floorplan">
            <?php
                $floorplan_title =  $floorplans['title'];
                $floorplan_copy =  $floorplans['copy'];
                $floorplan_image =  $floorplans['floorplan_image']['sizes'];
                $lg = $floorplan_image["large"];
                $floorplan_cta =  $floorplans['cta'];
            ?>
            <div class="sem__floorplan-wrap">
                <div class="sem__floorplan-title">
                    <? echo $floorplan_title; ?>
                </div>
                <img class="sem__floorplan-image" src="<? echo $lg; ?>" alt="Sycamore Landing NJ"/>
                <div class="sem__floorplan-copy">
                    <? echo $floorplan_copy; ?>
                </div>
                <a class="sem__floorplan-cta" href="<? echo $floorplan_cta["url"]; ?>" target="_blank">
                    <? echo $floorplan_cta["title"]; ?>
                </a>
            </div>
        </div>
    </div>
</div>

<? get_footer(); ?>