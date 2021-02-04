<header class="banner header <?php if(is_single()): ?> single <?php endif; ?>" data-sticky-element="header">
    <?php echo $__env->make('partials.header-cta', array('show_mobile' => false ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="header__wrapper">
        <div class="container header__container">
            <?php echo $__env->make('partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <?php echo $__env->make('partials.searchform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <?php echo $__env->make('partials.productsMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<?php echo $__env->make('partials.header-cta', array('show_mobile' => true ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
