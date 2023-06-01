<?php
      get_header();
      $id = get_the_ID();
      $components_field = get_field( "page_components_list", $id);
      $components = (isset($components_field) == true && $components_field['page_components'] != false )  ? $components_field['page_components'] : null;
?>
<main class="main">
      <?    
            if(is_null($components) != true) {
                  foreach($components as $component) {
                        $component_name = $component['acf_fc_layout'];
                        
                        $component_args = $component[$component['acf_fc_layout']];
                        get_template_part( "template-parts/$component_name", null,$component_args);
                  }
            } else {
                  echo "<main class='text-center py-40'><h1 class='text-6xl'>This Page is Currently Empty</h1></main>";
            }
      ?>
</main>

<? get_footer(); ?>