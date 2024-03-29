<?php
    $directions_link = get_field( "directions_link", 'option' );
    $contact_phone = get_field( "phone", 'option' );
    if(empty($contact_phone) && empty($directions_link)) {
        return;
    }

?>
<div class="contact-banner">
    <p>
        <? if(empty($directions_link['url']) != true){  ?>
            <a href=" <? echo $directions_link['url']; ?>">
                <i class="fa-solid fa-location-dot"></i>
                <? echo $directions_link['title']; ?>
            </a>
        <? } ?>
    </p>
    <p>
        <? if(empty($contact_phone) != true){  ?>
            <a href="tel:<? echo $contact_phone; ?>">
                <i class="fa-solid fa-phone"></i>
                <? echo $contact_phone; ?>
            </a>
        <? } ?>
    </p>
</div>