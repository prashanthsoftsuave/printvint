<?php if(is_single()): ?>
    <?php echo $__env->make('blocks.sidebar-cta', ['sidebar_cta' => $sidebar_cta], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php (dynamic_sidebar('sidebar-single')); ?>
<?php else: ?>
    <?php (dynamic_sidebar('sidebar-primary')); ?>
<?php endif; ?>
