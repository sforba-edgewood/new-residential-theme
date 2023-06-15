<?php
/* 
 * Template Name: Contact
 *
 */
    $id = get_the_ID();
    $background_image = get_field( "background_image", $id);
    $contact_form_shortcode = get_field( "contact_form_shortcode", $id);
    $sidebar_title = get_field( "sidebar_title", $id);
    $location = get_field( "location", $id);
    $contact_phone = get_field( "contact_phone", $id);
    $office_hours = get_field( "office_hours", $id);
    $concierge_hours = get_field( "concierge_hours", $id);
    $download_list = get_field( "download_list", $id);

    get_header(); 
?>

<div class="contact-page">
    <div class="contact-page__wrap">
        <img src="<? echo $background_image;?>"  class="contact-page__bg" />
        <div class="contact-page__content container mx-auto">
            <main  class="contact-page__main mb-5 lg:mb-0">
                <div class="contact-page__form">
                    <?php echo do_shortcode($contact_form_shortcode); ?>
                </div>
            </main>
            <aside class="contact-page__sidebar">
                <div>
                    <p class="contact-page__sidebar-title"><? echo $sidebar_title; ?></p>
                </div>
                <div>
                    <? if(empty($location) != true){  ?>
                        <div class="contact-page__sidebar-block">
                            <h4 class="contact-page__sidebar-heading">
                                Location
                            </h4>
                            <div>
                                <? echo $location; ?>
                            </div>
                        </div>
                    <? }?>
                </div>
                <div>
                    <? if(empty($contact_phone) != true){  ?>
                        <div class="contact-page__sidebar-block">
                            <h4 class="contact-page__sidebar-heading">
                                Phone
                            </h4>
                            <div>
                                <? echo $contact_phone; ?>
                            </div>
                        </div>
                    <? }?>
                </div>
                <div>
                    <? if(empty($office_hours) != true){  ?>
                        <div class="contact-page__sidebar-block">
                            <h4 class="contact-page__sidebar-heading">
                                Office Hours
                            </h4>
                            <div>
                                <? echo $office_hours; ?>
                            </div>                        
                        </div>
                    <? }?>
                </div>
                <div>
                    <? if(empty($concierge_hours) != true){  ?>
                        <div class="contact-page__sidebar-block">
                            <h4 class="contact-page__sidebar-heading">
                                Concierge Hours
                            </h4>
                            <div>
                                <? echo $concierge_hours; ?>
                            </div>                        
                        </div>
                    <? }?>
                </div>               
                <div>
                    <? if(gettype($download_list) == 'array'){  ?>
                        <div  class="contact-page__sidebar-block">
                            <h4 class="contact-page__sidebar-heading">
                                Downloads
                            </h4>
                            <ul>
                                <? foreach($download_list as $download) {
                                    $title = $download['file_title'];
                                    $file = $download['pdf_file'];
                                ?>
                                    <li class="mb-1">
                                        <a href="<? echo $file;?>">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <? echo $title;?>
                                        </a>
                                    </li>
                                <? } ?>
                            </ul>
                        </div>
                    <? } ?>
                </div>
            </aside>
        </div>
    </div>
</div>

<? get_footer(); ?>