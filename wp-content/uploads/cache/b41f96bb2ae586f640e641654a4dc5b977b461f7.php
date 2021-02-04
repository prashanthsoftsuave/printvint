<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if(!have_posts()): ?>
        <section class="not-found">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="alert alert-warning">
                            <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

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
                    <div class="col-md-9">
                        <div class="row">
                            <?php while(have_posts()): ?> <?php (the_post()); ?>
                            <div class="col-md-6 article">
                                <?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="col-md-3 sidebar">
                        <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <?php echo get_the_posts_navigation(); ?>

            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>