<?php

    $navbar_items = wp_get_nav_menu_items('main-menu');
    $child_items = [];
    // var_dump($navbar_items);
    // pull all child menu items into separate object
    foreach ($navbar_items as $key => $item) {
        if ($item->menu_item_parent) {
            array_push($child_items, $item);
            unset($navbar_items[$key]);
        }
    }

    // push child items into their parent item in the original object
    foreach ($navbar_items as $item) {
        foreach ($child_items as $key => $child) {

            if ($child->menu_item_parent == $item->ID) {

                if (!$item->child_items) {
                    $item->child_items = [];
                }

                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }
?>
<nav class="main-navigation" role="navigation">
    <ul class="main-navigation-list">
        <?php foreach ( $navbar_items as $navItem ) { 
            $url = $navItem->url;
            $classes = $navItem->classes[0];
            $title =  $navItem->title;
            $subnav_items = $navItem->child_items;
            $subnav_check = (gettype($subnav_items) == 'array') && (count($subnav_items) > 0);
        ?>
            <li class="main-navigation-list-item <? echo $subnav_check ? 'sub-nav-present' : ''; ?>">
                <a href="<? echo $url; ?>" class="p-4 font-bold main-navigation-link <? echo $classes; ?>">
                    <span><? echo $title; ?></span>
                    <?php if($subnav_check){?>
                        <i class="fa-solid fa-caret-down"></i>
                    <? }?>
                </a>
                <?php if($subnav_check){?>
                    <div class="subnav">
                        <ul class="subnav__list">
                            <?php foreach ( $subnav_items  as $subNavItem ) { 

                                $url = $subNavItem->url;
                                $classes = $subNavItem->classes[0];
                                $title =  $subNavItem->title;

                            ?>
                                <li class="subnav__list-item">
                                    <a href="<? echo $url; ?>" class="p-3 font-bold subnav__link <? echo $classes; ?>">
                                        <span><? echo $title; ?></span>
                                        <i class="fa-solid fa-caret-right"></i>
                                    </a>
                                </li>
                            <? }?>
                        </ul>
                    </div>
                <? }?>
            </li>
            
        <? } ?>
    </ul>
</nav>