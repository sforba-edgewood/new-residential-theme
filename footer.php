<?php 
    $logo = get_field( "logo", 'option' );
    $leasing_copy = get_field( "leasing_office_copy", 'option' );
    $phone = get_field( "phone", 'option' );
    $email = get_field( "email", 'option' );
    $edgewood_logo = get_field( "edgewood_logo", 'option' );
    $copyright = get_field( "copyright", 'option' );
    $facebook= get_field( "facebook_link", 'option' );
    $twitter = get_field( "twitter_link", 'option' );
    $instagram = get_field( "instagram_link", 'option' );
    $appointment_button_text = get_field( "modal_button_text", 'option' );
    $appointment_shortcode= get_field( "appointment_form_shortcode", 'option' );

?>
<footer class="footer">
    <div class="footer__container footer__top pt-14 pb-10 container mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="footer-col flex flex-col">
            <div class="">
                <? if(empty($logo) != true){  ?>
                    <img class="mx-auto w-full footer__logo" src="<? echo $logo; ?>" alt="New Residential Theme"/>
                <? }?>
            </div>
        </div>
        <div class="footer-col flex flex-col">
            <div class="w-fit mx-auto footer__block">
                <h3 class="text-xl font-bold mb-4 footer__title">Leasing Office</h3>
                <div class="mb-3">
                    <? if(empty($leasing_copy) != true){  ?>
                        <h4 class="font-bold">Address:</h4>
                        <? echo $leasing_copy; ?>
                    <? }?>
                </div>
                    <div class="mb-3">
                    <? if(empty($phone) != true){  ?>
                        <h4 class="font-bold">Phone:</h4>
                        <a href="tel:<? echo $phone; ?>">                        
                            <? echo $phone; ?>
                        </a>
                    <? }?>
                </div>
                <div>
                    <? if(empty($email) != true){  ?>
                        <h4 class="font-bold">Email</h4>
                        <a href="mailto:<? echo $email; ?>">
                            <? echo $email; ?>
                        </a>
                    <? }?>
                </div>
            </div>
        </div>
        <div class="footer-col flex flex-col">
            <div class="w-fit mx-auto  footer__block">
                <div class="mb-8">
                    <h3 class="text-xl font-bold mb-4 footer__title">Connect With Us: </h3>
                    <ul class="flex flex-row">
                        <? if(empty($facebook) != true){  ?>
                            <li>
                                <a href="<? echo $facebook;?>" class="footer__social text-4xl" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                        <? }?>
                        <? if(empty($twitter) != true){  ?>
                            <li>
                                <a href="<? echo $twitter;?>" class="footer__social text-4xl mx-3" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        <? }?>
                        <? if(empty($instagram) != true){  ?>
                        <li>
                            <a href="<? echo $instagram;?>" class="footer__social text-4xl" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <? }?>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 footer__title">Sitemap </h3>
                    <div>
                        <a target="_blank" href="/sitemap">
                            Sitemap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-12 pb-8 footer__container footer__bottom">
        <div class="">
            <? if(empty($edgewood_logo) != true){  ?>
                <img class="max-w-[208px] mx-auto mb-4 w-full" src="<? echo $edgewood_logo; ?>" alt="New Residential Theme"/>
            <? }?>
        </div>
        <div>
            <? if(empty($copyright) != true){  ?>
                <p class="text-base font-thin text-center">
                    <? echo $copyright; ?>
                </p>
            <? }?>
        </div>
    </div>
</footer>
<? if(empty($appointment_button_text) != true && (basename(get_page_template()) != 'sem_landing.php')){  ?>
    <button class="appointment-modal__button" type="button" id="appointmentModalButton">
        <? echo $appointment_button_text; ?>
    </button>
<? }?>
<div class="appointment-modal" id="appointmentModal">
    <div>
        <div class="appointment-modal__content">
            <span class="appointment-modal__close" id="apppointmentCloseButton">X</span>
            <h4 class="appointment-modal__title">
                SCHEDULE AN APPOINTMENT
            </h4>
            <div class="appointment-modal__form">  
                <?php echo do_shortcode($appointment_shortcode); ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>