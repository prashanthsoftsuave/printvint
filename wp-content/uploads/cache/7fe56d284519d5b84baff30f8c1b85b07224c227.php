<article <?php (post_class()); ?>>
    <div class="card">
        <?php if(has_post_thumbnail()): ?>
            <a href="<?php echo e(the_permalink()); ?>">
                <?php echo the_post_thumbnail('large', ['class' => 'img-fluid']); ?>

            </a>
        <?php endif; ?>
        <div class="card-body">
            <div class="post-date">
                <?php echo e(apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' )); ?>

            </div>
            <a href="<?php echo e(the_permalink()); ?>">
                <h4 class="post-card-title">
                    <?php echo e(the_title()); ?>

                </h4>
            </a>
            <div class="card-text"><?php echo e(the_excerpt()); ?></div>
        </div>
        <div class="card-footer">
            <a href="<?php echo e(the_permalink()); ?>" class="card-link link-arrow">Read More</a>
        </div>
    </div>
</article>
