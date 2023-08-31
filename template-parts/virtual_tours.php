<?php
    $tours = $args['tours'];
    if(gettype($tours) != 'array') {
        return;
    }
?>

<div class="virtual-tours">
    <div class="container mx-auto py-10">
        <ul class="w-fit mx-auto">
            <? foreach($tours as $tour) { 
                    $title = $tour['tour_title'];
                    $link = $tour['matterport_link'];
            ?>
                <li class="mb-10">
                        <div class="virtual-tours__tour">
                            <h4 class="mb-8 virtual-tours__title">
                                <? echo $title; ?>
                            </h4>
                            <div>
                            <iframe 
                                src="<? echo $link; ?>" 
                                width="853" 
                                height="480" 
                                frameborder="0" 
                                loading="lazy"
                                allowfullscreen="allowfullscreen">
                            </iframe>
                            </div>
                        </div>
                </li>
            <? } ?>
        </ul>
    </div>
</div>