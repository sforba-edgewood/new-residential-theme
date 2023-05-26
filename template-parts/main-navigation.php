<?php
    $main_navigation =  wp_get_nav_menu_items('main-menu');
?>
<nav class="main-navigation" role="navigation">
    <ul>
        <?php 
            foreach ( $main_navigation as $navItem ) {  

                echo '
                <li>
                    <a href="'.$navItem->url.'" class="'.$navItem->classes[0].'" title="'.$navItem->title.'">'.$navItem->title.'</a>
                </li>';
            
            }
        ?>
    </ul>
</nav>