<?php

    $veterans = get_field( "veterans_initiative", 'option' );
    $logo = get_field( "logo", 'option' );
    $vet_link = $veterans['link'];
    $vet_image = $veterans['image'];
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

<div class="mobile-nav" id="mobileNav">
    <div class="flex flex-row">
        <div class="mobile-nav__log mt-8 pl-4">
            <a href="<? echo $vet_link; ?>" class="logo__link">
                <img class="logo" src="<? echo $logo; ?>" />
            </a>
        </div>
        <div class="mobile-nav__veterans mt-8 pl-4">
            <a href="<? echo $vet_link; ?>" class="veterans__link">
                <img class="veterans__image" src="<? echo $vet_image;?>" />
            </a>
        </div>
    </div>
    <ul class="mobile-nav__list pl-4 pt-8">
        <?php foreach ( $navbar_items as $navItem ) { 
            $url = $navItem->url;
            $classes = $navItem->classes[0];
            $title =  $navItem->title;
            $subnav_items = $navItem->child_items;
          
        ?>
            <li class="mobile-nav__item mb-4">
                <a href="<? echo $url; ?>" class="font-bold text-3xl mobile-nav__link <? echo $classes; ?>">
                    <span><? echo $title; ?></span>
                </a>
                <? if((gettype($subnav_items) == 'array') && count($subnav_items) > 0) {?>
                <button class="ml-2 mobile-subnav-button">
                        <i class="fa-solid fa-angle-down"></i>
                </button>
                <? } ?>
                <?php if((gettype($subnav_items) == 'array') && count($subnav_items) > 0){ ?>
                    <div class="mobile-nav__sub mt-2">
                        <ul class="pl-2">
                            <?php foreach ( $subnav_items  as $subNavItem ) { 

                                $url = $subNavItem->url;
                                $classes = $subNavItem->classes[0];
                                $title =  $subNavItem->title;

                            ?>
                                <li class="mb-1">
                                    <a href="<? echo $url; ?>" class=" text-2xl mobile-nav__sub-link <? echo $classes; ?>">
                                        <span><? echo $title; ?></span>

                                    </a>
                                </li>
                            <? }?>
                        </ul>
                    </div>
                <? } ?>
            </li>
            
        <? } ?>
    </ul>
</div>