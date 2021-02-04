<div class="col article sticky">
    <div class="row">
        <div class="col-md-6">
            <a href="<?php echo e(the_permalink()); ?>">
                <?php echo e(the_post_thumbnail('large', ['class' => 'img-fluid'])); ?>

            </a>
        </div>
        <div class="col-md-6">
            <div class="post-date"><?php echo e(the_date('F j, Y')); ?></div>
            <a href="<?php echo e(the_permalink()); ?>">
                <h3 class="post-card-title"><?php echo e(the_title()); ?></h3>
            </a>
            <a href="https://staging.diamanti.com/blog-posts/?ID=<?php echo e(get_the_author_ID()); ?>" ><div class="post-author"><?php echo e(__('By')); ?> <?php echo e(get_the_author()); ?></a>
            </div>
            <?php echo e(the_excerpt()); ?>

            <a class="btn btn-action" href="<?php echo e(the_permalink()); ?>">Read More</a>
        </div>
    </div>
</div>
