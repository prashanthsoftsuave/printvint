<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
        <?php if(!have_posts()): ?>
            <div class="alert alert-warning">
                <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

            </div>
            <?php echo get_search_form(false); ?>

        <?php endif; ?>
    </div>
    <section class="sticky p-4">
        <div class="container materialize-container">
            <div class="row">
                <?php while($sticky_query->have_posts()): ?> <?php ($sticky_query->the_post()); ?>
                <?php echo $__env->make('partials.content-sticky', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="main-query p-4">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="row no-gutters">
                        <?php while($main_query->have_posts()): ?> <?php ($main_query->the_post()); ?>
                        <div class="col-sm-4 article">
                            <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3 d-flex justify-content-center">
                    <?php echo $__env->make('partials.pagination', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('blocks.newCtaBlock', ['newCtaBlock' => [
      'title' => 'Hit the ground running with Diamanti',
      'button' => [
          'url' => '/contact/',
          'target' => '_self',
          'title' => 'Contact Sales'
      ]
    ]], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>