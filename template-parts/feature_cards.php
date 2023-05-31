<?php 
    $feature_cards = $args['feature_card'];
?>


<div>
    <ul>
        <? foreach($feature_cards as $card) {
            $image = $card['image'];
            $title = $card['title'];
            $copy = $card['copy'];
            $features = $card['feature_list'];
        ?> 
            <li>
                <div>
                    <img object-fit="cover" src="<? echo $image; ?>" target="" alt="<? echo $title; ?>"/>
                    <div>
                        <div class="">
                            <h2>
                                <? echo $title; ?>
                            </h2>
                            <h3>
                                <? echo $copy; ?>
                            </h3>
                        </div>
                        <div class="">
                        <? echo $features; ?>
                        </div>                        
                    </div>
                </div>
            </li>
        <? } ?>
    </ul>
</div>