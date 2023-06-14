<?php
    $copy = $args['copy'];

    if(empty($copy)) {
        return;
    }
?>
<div class="body-copy py-7 prose">
    <div class="container mx-auto body-copy__wrap">
        <? echo $copy; ?>
    </div>
</div>