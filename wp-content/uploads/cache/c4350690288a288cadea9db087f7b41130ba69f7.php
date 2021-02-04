<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->make('partials.notification-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('blocks.newHero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('blocks.client-logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('blocks.home_smartslider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('blocks.scrollmagic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>