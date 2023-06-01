<?php
    $main_navigation =  wp_get_nav_menu_items('main-menu');
?>
<nav class="main-navigation" role="navigation">
    <ul class="main-navigation-list">
        <?php 
            foreach ( $main_navigation as $navItem ) {  

                echo '
                <li class="main-navigation-list-item">
                    <a href="'.$navItem->url.'" class="'.$navItem->classes[0].' p-4 font-bold main-navigation-link " title="'.$navItem->title.'"><span>'.$navItem->title.'</span></a>
                </li>';
            
            }
        ?>
    </ul>
</nav>