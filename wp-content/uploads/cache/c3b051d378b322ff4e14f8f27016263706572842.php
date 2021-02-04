<ul id="menu-primary-navigation" class="navbar-nav align-items-lg-center">

    <?php $__currentLoopData = $primary_nav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!$menu_item->menu_item_parent): ?>
            <?php if($menu_item->title === 'Request Demo'): ?>
                <li class="primary-menu__nav-item">
                    <button type="button" id="openSearchModal" class="open-search-modal">
                        <i class="search-form__icon search-form__icon--search" aria-hidden="true"></i>
                    </button>
                </li>
                <li class="primary-menu__nav-item <?php echo e($menu_item->menu_item_children ? 'menu-item-has-children' : ''); ?>">
                    <a href="<?php echo e($menu_item->url); ?>" class="primary-menu__nav-link btn btn-action"><span><?php echo e($menu_item->title); ?></span></a>
                </li>
            <?php else: ?>
                <li class="primary-menu__nav-item <?php echo e($menu_item->menu_item_children ? 'menu-item-has-children' : ''); ?>">
                    <a href="<?php echo e($menu_item->url); ?>" class="primary-menu__nav-link <?php echo e($menu_item->title === 'Request Demo' ? 'btn btn-action' : ''); ?>"
                    <?php echo $menu_item->menu_item_children ? 'data-submenu-open="' . $menu_item->ID . '"' : ''; ?>

                    ><span><?php echo e($menu_item->title); ?></span></a>
                    <?php if($menu_item->menu_item_children): ?>
                        <?php if($menu_item->has_product_children): ?>
                            <div class="products-submenu"
                                data-submenu="<?php echo e($menu_item->ID); ?>">
                                <div class="products-submenu__wrapper">
                                    <div class="products-submenu__col--shadow">
                                        <ul class="products-submenu__items">
                                            <li class="products-submenu__item products-submenu__item--mobileBack">
                                                <a href="#" class="products-submenu__item__link products-submenu__item__link--mobileBack" data-menu-back="">
                                                    <span class="products-submenu__item__title"><?php echo e($menu_item->title); ?></span>
                                                </a>
                                            </li>
                                            <?php $__currentLoopData = $menu_item->menu_item_children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="products-submenu__item">

                                                    <div class="products-submenu__item__link products-submenu__item__link--<?php echo e($child->product_resources['extended_menu_resources']['icon_type']); ?> <?php echo e($child->menu_item_children || $menu_item->has_product_children ? 'menu-item-has-children' : ''); ?>" data-product-resources-open="<?php echo e($child->ID); ?>">
                                                            
                                                        <a href="<?php echo e($child->url); ?>" target="<?php echo e($child->target); ?>" class="products-submenu__item__title <?php echo e($menu_item->has_product_children ? '' : 'products-submenu__item__title--primary'); ?>"><?php echo e($child->title); ?></a>
                                                        <?php if($child->menu_item_children || $menu_item->has_product_children): ?>
                                                            <span data-product-resources-open="<?php echo e($child->ID); ?>"
                                                                class="products-submenu__item__arrow  <?php echo e($child->menu_item_children || $menu_item->has_product_children ? 'show-arrow' : ''); ?>">
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>

                               <?php if(!$menu_item->product_page_id && $child->menu_item_children): ?>
                                                        <ul class="product-submenu__items products-submenu__items--level2">
                                                            <?php $__currentLoopData = $child->menu_item_children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childLevel2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li>
                                                                    <a class="products-submenu__item__link"
                                                                    href="<?php echo e($childLevel2->url); ?>"
                                                                    target="<?php echo e($childLevel2->target); ?>">
                                                                        <span class="products-submenu__item__title"><?php echo e($childLevel2->title); ?></span>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="products-submenu"
                                data-submenu="<?php echo e($menu_item->ID); ?>">
                                <div class="products-submenu__wrapper">
                                    <div class="products-submenu__col--shadow">
                                        <ul class="products-submenu__items">
                                            <li class="products-submenu__item products-submenu__item--mobileBack">
                                                <a href="#" class="products-submenu__item__link products-submenu__item__link--mobileBack" data-menu-back="">
                                                    <span class="products-submenu__item__title"><?php echo e($menu_item->title); ?></span>
                                                </a>
                                            </li>
                                            <?php $__currentLoopData = $menu_item->menu_item_children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="products-submenu__item">
                                                    <div class="products-submenu__item__link products-submenu__item__link--limited-width" data-product-resources-open="<?php echo e($child->ID); ?>">
                                                           
                                                            
                                                        <a href="<?php echo e($child->url); ?>" target="<?php echo e($child->target); ?>" class="products-submenu__item__title"><?php echo e($child->title); ?></a>
                                                    </div>
                                                    <div class="products-submenu__col products-submenu__content-secondary">
                                                                <ul class="products-submenu__links">
                                                                    <?php $__currentLoopData = $child->menu_item_children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <a href="<?php echo e($link->url); ?>"
                                                                            target="<?php echo e($link->target); ?>"
                                                                            class="products-submenu__link">
                                                                                <?php echo e($link->title); ?>

                                                                                
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<style>

/*    Menu navigation */
    @media  only screen and (min-width: 992px){
       .products-submenu__col--shadow:before {
        display: none;
    }
    a.products-submenu__title__link {
        display: none;
    }
    a.products-submenu__item__title {
        font-size: 14px;
        font-weight: 600;
        color: #2492c3;
        border: none;
        padding: 11px 0;
    }
    a.products-submenu__item__title:hover {
        color: #024f71;
    }
    .products-submenu--minimal, .products-submenu .products-submenu__col--shadow {
        min-height: auto;
        padding: 19px 20px 9px;
        min-width: auto;
    }
    .products-submenu{
        width: auto;
    }
    .products-submenu__item__link:hover .products-submenu__item__title {
        color: #024f71;
        border-left-color: transparent;
        background-color: transparent;
    }
    a.products-submenu__link {
        font-size: 14px;
        font-weight: 400;
        color: #2b2b2b;
        line-height: 1;
        font-weight: 400;
        letter-spacing: normal;
        white-space: nowrap;
    }
    .products-submenu__content-secondary {
        width: 100%;
        padding-left: 11px;
    }
    .products-submenu__item__link.products-submenu__item__link--spektra {
        padding-bottom: 8px;
    }
    a.products-submenu__item__title {
        padding: 5.5px 0;
        border: none;
        line-height: 1;
        white-space: nowrap;
        }
    .products-submenu__items--level2 .products-submenu__item__link {
        padding-left: 11px;
        font-weight: 400;
        color: #2b2b2b;
        white-space: nowrap;
    }
    .products-submenu__col .products-submenu__item__title {
        font-size: 14px;
        padding: 0;
        border: none;
        line-height: 1.2;
        font-size: 14px;
        margin-bottom: 10px;
    }
    .products-submenu__item__link.products-submenu__item__link--ultima {
        padding-bottom: 8px;
    }
    .products-submenu__item__link.products-submenu__item__link--limited-width {
        /*padding-bottom: 8px;*/
    }
    .products-submenu__item__link:hover .products-submenu__item__title {
        color: #024f71 !important;
        text-decoration: none !important;
    }
    span.products-submenu__item__title {
        font-size: 14px;
        line-height: 18px;
        margin-bottom: 10px;
        padding: 0;
        border: none;
    }
    .primary-menu__nav-item {
        position: relative;
    }
    .products-submenu__item__link--mobileBack {
        white-space: nowrap;
    }
    }
    @media  only screen and (max-width: 992px){
        .products-submenu__content-secondary {
            width: 100%;
                padding-bottom: 0;
        }
        .primary-menu__nav-link {
            height:auto !important;
        }
    }
.headerCta__content {
    justify-content: unset;
}
.primary-menu__nav-item:last-of-type .primary-menu__nav-link{
    color: black;
}
.newSection .ctaBlock__button.btn.btn-action {
    color: black;
}
    
</style>