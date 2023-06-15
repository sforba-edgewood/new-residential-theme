<?php
    $copy = $args['copy'];
    $sidebar_title = $args['sidebar_title'];
    $sidebar_form_sc = $args['sidebar_form_shortcode'];

    if(empty($copy)) {
        return;
    }
?>

<div class="body-copy py-7 container mx-auto ">
    <div class="body-copy__wrap sidebar">
        <div class="body-copy__content sidebar">
            <? echo $copy; ?>
        </div>
        <aside class="body-copy__sidebar">
            <div class="body-copy__sidebar-title">
                <h2>
                    <? echo $sidebar_title; ?>
                </h2>
            </div>
            <div  class="body-copy__sidebar-form">
                <?php echo do_shortcode($sidebar_form_sc); ?>
            </div>
        </aside>
    </div>
</div>