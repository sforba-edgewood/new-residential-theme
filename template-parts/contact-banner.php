<?php
    $directions_link = get_field( "directions_link", 'option' );
    $contact_phone = get_field( "contact_phone_number", 'option' );
?>
<div class="contact-banner">
    <p>
       
        <a href=" <? echo $directions_link['url']; ?>">
            <? echo $directions_link['title']; ?>
            <i class="fa-icon-map-marker directions-ic"></i>
        </a>
    </p>
    <p>
        <a href="tel:<? echo $contact_phone; ?>">
            <? echo $contact_phone; ?>
            <i class="fa-icon-mobile-phone phone-ic"></i>
        </a>
    </p>
</div>