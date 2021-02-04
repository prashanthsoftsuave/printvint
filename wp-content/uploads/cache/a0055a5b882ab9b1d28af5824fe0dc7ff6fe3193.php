<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>

  <div class="single pb-5">
    <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>

  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>