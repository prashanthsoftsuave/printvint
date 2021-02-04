<article <?php (post_class()); ?>>
    <div class="card">
        <?php if(has_post_thumbnail()): ?>
            <?php if( isset(get_field('news_link')['url']) ): ?>
                <a class="card-img-link" href="<?php echo get_field('news_link')['url']; ?>">
            <?php endif; ?>
                <?php echo the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>

            <?php if( isset(get_field('news_link')['url']) ): ?>
                </a>
            <?php endif; ?>
        <?php endif; ?>
        <div class="card-body">
            <div class="post-date"><?php echo e(apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' )); ?></div>
            <?php if( isset(get_field('news_link')['url']) ): ?>
                <a href="<?php echo get_field('news_link')['url']; ?>">
            <?php endif; ?>
            <h4 class="post-card-title">
                <?php echo e(the_title()); ?>

            </h4>
            <?php if( isset(get_field('news_link')['url']) ): ?>
                </a>
            <?php endif; ?>

            <p><?php echo archiveEvent::eventDate(); ?></p>

            <div class="card-text"><?php echo e(the_excerpt()); ?></div>
        </div>
        <div class="card-footer">
            <?php if( isset(get_field('news_link')['url'])): ?>
                <a href="<?php echo get_field('news_link')['url']; ?>" class="card-link link-arrow">Learn More</a>
            <?php endif; ?>
        </div>
    </div>
</article>
