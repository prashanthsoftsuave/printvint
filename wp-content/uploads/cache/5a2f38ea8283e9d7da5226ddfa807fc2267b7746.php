<?php $__env->startSection('content'); ?>
    <?php 
      $page_header['heading'] = '<h2 data-aos="fade-right" class="section-heading light text-center aos-init aos-animate">Jobs in</h2>';
      $page_header['title'] = '<div data-aos="fade-left" class="block-title light text-center aos-init aos-animate">'.get_queried_object()->name.'</div>';
     ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(!have_posts()): ?>
        <section class="not-found">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="alert alert-warning">
                            <?php echo e(__('Sorry, no jobs were found.', 'sage')); ?>

                        </div>
                    </div>
                    <div class="col-md-3 sidebar">
                        <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </section>

    <?php else: ?>
        <section class="main-query">
            <div class="container ">
                <div class="row">
                  <div class="col-md-3 sidebar">
                    <?php echo $__env->make('partials.sidebar-job', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  </div>
                    <div class="col-md-9">
                        <?php while(have_posts()): ?> <?php (the_post()); ?>
                          <?php echo $__env->make('partials.content-job-teaser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endwhile; ?>
                    </div>

                </div>
                <?php echo get_the_posts_navigation(); ?>

            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>