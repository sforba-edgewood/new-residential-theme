<?php 
    $feature_cards = $args['feature_card'];
    if(gettype($feature_cards) != 'array') {
        return;
    }
    $card_count = count($feature_cards);
?>


<div class="feature-cards py-7">
    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-<? echo $card_count; ?> md:gap-y-4 gap-x-4">
        <? foreach($feature_cards as $card) {
            $image = $card['image'];
            $sizes = $image['sizes'];
            $lg = $sizes["large"];
            $lg_height = $sizes["large-height"];
            $lg_width = $sizes["large-width"];

            $title = $card['title'];
            $copy = $card['copy'];
            $features = $card['feature_list'];
        ?> 
            <li class="feature-cards__item">
                <div class="feature-card">
                    <img loading="lazy"  class="w-full feature-card__image" width="<? echo $lg_width; ?>" height="<? echo $lg_height; ?>" src="<? echo $lg; ?>" target="" alt="<? echo $title; ?>"/>
                    <div class="feature-card__content">
                        <div class="feature-card__title">
                            <h2 class="text-2xl text-center pb-2">
                                <? echo $title; ?>
                            </h2>
                            <h3 class="text-xl text-center">
                                <? echo $copy; ?>
                            </h3>
                        </div>
                        <div class="flex flex-col justify-center items-center text-center feature-card__copy">
                            <? echo $features; ?>
                        </div>                        
                    </div>
                </div>
            </li>
        <? } ?>
    </ul>
</div>