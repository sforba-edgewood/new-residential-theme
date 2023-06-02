<?php
    $directions_link = get_field( "directions_link", 'option' );
    $contact_phone = get_field( "contact_phone_number", 'option' );
?>
<div class="contact-banner">
    <p>
       
        <a href=" <? echo $directions_link['url']; ?>">
            <i class="fa-solid fa-location-dot"></i>
            <? echo $directions_link['title']; ?>
        </a>
    </p>
    <p>
        <a href="tel:<? echo $contact_phone; ?>">
        <i class="fa-solid fa-phone"></i>
            <? echo $contact_phone; ?>
        </a>
    </p>
</div>