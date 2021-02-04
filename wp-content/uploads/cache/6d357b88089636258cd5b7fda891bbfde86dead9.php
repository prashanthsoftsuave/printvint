<?php if($postGrid['query']->have_posts()): ?>

    <section class="post-grid <?php echo e($postGrid['background_color']); ?>  <?php echo e($postGrid['color']); ?>"
             <?php if( $postGrid['background_image']['url'] ): ?> style="background: url('<?php echo $postGrid['background_image']['url']; ?>') center center; background-size: cover;" <?php endif; ?>
    >
        <div class="container">
            <?php if($postGrid['title']): ?>
                <div class="row">
                    <div class="col use_case-title">
                        <?php echo $postGrid['heading']; ?>

                        <div class="h2"><?php echo $postGrid['title']; ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row articles no-gutters">
                <?php ($delay = 0); ?>
                <?php while( $postGrid['query']->have_posts() ): ?>
                    <?php echo e($postGrid['query']->the_post()); ?>

                    <div class="col-md-4 article">
                        <article data-aos="fade-up" data-aos-delay="<?php echo e($delay += 200); ?>"  <?php (post_class()); ?>>
                            <div class="card">
                                <?php if(has_post_thumbnail()): ?>
                                    <a href="<?php echo e(the_permalink()); ?>">
                                        <?php echo the_post_thumbnail('large', ['class' => 'img-fluid card-img-top']); ?>

                                    </a>
                                <?php endif; ?>
                                <div class="card-body">
                                    <div class="post-date"><?php echo e(the_time('F j, Y')); ?></div>
                                    <a href="<?php echo e(the_permalink()); ?>">
                                        <a href="<?php echo e(the_permalink()); ?>">
                                            <h4 class="card-title"><?php echo e(the_title()); ?></h4>
                                        </a>
                                        <div class="card-text"><?php echo e(the_excerpt()); ?></div>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo e(the_permalink()); ?>" class="card-link link-arrow">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
                <?php echo e(wp_reset_query()); ?>

            </div>
        </div>
    </section>
<?php else: ?>
    <p class="alert-danger text-center m-5">There are no related articles to display</p>
<?php endif; ?>