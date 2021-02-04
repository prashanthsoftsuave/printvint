<?php $__env->startSection('content'); ?>
<section class="section-gradient-mesh section-gradient-mesh--page404 page404">
    <div class="container">
        <i class="page404__icon"></i>
        <h2 class="page404__title">404</h2>
        <h1 class="page404__subtitle">Page not found</h1>
        <p class="page404__desc">The page you are looking for has not been found.</p>
        <a class="btn btn-action" href="<?php echo e(home_url()); ?>">Back to Homepage</a>
    </div>
</section>
<?php echo $__env->make('blocks.newCtaBlock', ['newCtaBlock' => [
'title' => 'Ready to get started?',
'button' => [
  'url' => '/contact/',
  'target' => '_self',
  'title' => 'Contact Sales'
]
]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>