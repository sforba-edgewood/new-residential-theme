<?php

    $navbar_items = wp_get_nav_menu_items('main-menu');
    $child_items = [];

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
            if ($child->menu_item_parent == $item->post_name) {
                if (!$item->child_items) {
                    $item->child_items = [];
                }

                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }
?>

<div class="mobile-nav" id="mobileNav">
<ul class="mobile-nav__list pl-4 pt-8">
        <?php foreach ( $navbar_items as $navItem ) { 
            $url = $navItem->url;
            $classes = $navItem->classes[0];
            $title =  $navItem->title;
            $subnav_items = $navItem->child_items;
          
        ?>
            <li class="mobile-nav__item mb-2">
                <a href="<? echo $url; ?>" class="font-bold text-3xl mobile-nav__link <? echo $classes; ?>">
                    <span><? echo $title; ?></span>
                </a>
                <? if((gettype($subnav_items) == 'array') && count($subnav_items) > 0) {?>
                <button class="ml-2 mobile-subnav-button">
                        <i class="fa-solid fa-angle-down"></i>
                </button>
                <? } ?>
                <?php if((gettype($subnav_items) == 'array') && count($subnav_items) > 0){?>
                    <div class="mobile-nav__sub">
                        <ul class="pl-2">
                            <?php foreach ( $subnav_items  as $subNavItem ) { 

                                $url = $subNavItem->url;
                                $classes = $subNavItem->classes[0];
                                $title =  $subNavItem->title;

                            ?>
                                <li>
                                    <a href="<? echo $url; ?>" class="font-bold mobile-nav__sub-link <? echo $classes; ?>">
                                        <span><? echo $title; ?></span>

                                    </a>
                                </li>
                            <? }?>
                        </ul>
                    </div>
                <? }?>
            </li>
            
        <? } ?>
    </ul>
</div>