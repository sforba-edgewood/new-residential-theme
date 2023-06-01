<?php
    /* 
    * Template Name: Flexible w/ Sidebar
    *
    */

      $id = get_the_ID();
      $components_field = get_field( "page_components_list", $id);
      $components = $components_field['page_components'];
      get_header();
?>
<main class="main">
    <div class="with-sidebar">
        <? 
            foreach($components as $component) {
                    $component_name = $component['acf_fc_layout'];
                    
                    $component_args = $component[$component['acf_fc_layout']];
                    get_template_part( "template-parts/$component_name", null,$component_args);
            }
        ?>
    </div>
    <?php get_sidebar(); ?>
</main>
<? get_footer(); ?>
      