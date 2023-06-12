<?php
    $value = get_field( "top_banner_text", 'option' );
    if(empty($value)) {
        return;
    }
?>
<div class='top-banner'>
    <? echo $value; ?>
</div>
