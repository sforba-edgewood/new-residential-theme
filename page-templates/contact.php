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
    $office_hours = get_field( "office_hours", $id);
    $download_list = get_field( "download_list", $id);

    get_header(); 
?>

<div class="contact-page">
    
    <div class="contact-page__wrap">
        <img src="<? echo $background_image;?>"  class="contact-page__bg" />
        <div class="contact-page__content">
            <main  class="contact-page__main">
                <div class="contact-page__form">
                    <?php echo do_shortcode($contact_form_shortcode); ?>
                </div>
            </main>
            <aside class="contact-page__sidebar">
                <div>
                    <p class="contact-page__sidebar-title"><? echo $sidebar_title; ?></p>
                </div>
                <div>
                    <div class="contact-page__sidebar-block">
                        <h4 class="contact-page__sidebar-heading">
                            Location
                        </h4>
                        <div>
                            <? echo $location; ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contact-page__sidebar-block">
                        <h4 class="contact-page__sidebar-heading">
                            Phone
                        </h4>
                        <div>
                            <? echo $location; ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div  class="contact-page__sidebar-block">
                        <h4 class="contact-page__sidebar-heading">
                        Office Hours
                        </h4>
                        <div>
                            <? echo $office_hours; ?>
                        </div>                        
                    </div>
                </div>
                <div>
                    <div  class="contact-page__sidebar-block">
                        <h4 class="contact-page__sidebar-heading">
                            Downloads
                        </h4>
                        <ul>
                            <? foreach($download_list as $download) {
                                $title = $download['file_title'];
                                $file = $download['pdf_file'];
                            ?>
                                <li>
                                    <a href="<? echo $file;?>">
                                        <i class="fa fa-file-pdf-o"></i>
                                        <? echo $title;?>
                                    </a>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>