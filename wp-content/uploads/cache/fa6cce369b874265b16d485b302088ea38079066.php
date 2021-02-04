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

    <section class="main-query">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 resources-filters">
                  <?php  echo do_shortcode('[searchandfilter slug="resources"]')  ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <?php if(!have_posts()): ?>
                            <div class="alert alert-warning">
                              <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

                            </div>
                            <?php echo get_search_form(false); ?>

                          <?php endif; ?>
                          <?php  echo do_shortcode('[searchandfilter slug="resources" show="results"]')  ?>
                    </div>
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