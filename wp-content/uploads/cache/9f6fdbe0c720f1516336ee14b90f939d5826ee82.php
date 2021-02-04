<article <?php (post_class()); ?>>
    <div class="card">
        <?php if(has_post_thumbnail()): ?>
            <?php if( isset(get_field('event_link')['url']) ): ?>
                <a class="card-img-link" href="<?php echo get_field('event_link')['url']; ?>">
            <?php endif; ?>
                <?php echo the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>

            <?php if( isset(get_field('event_link')['url']) ): ?>
                </a>
            <?php endif; ?>
        <?php endif; ?>
        <div class="card-body">
            <h4 class="post-card-title">
                <?php echo e(the_title()); ?>

            </h4>

            <p class="post-date"><?php echo archiveEvent::eventDate(); ?></p>

            <div class="card-text">
                <?php ( the_content() ); ?>
            </div>
        </div>
        <div class="card-footer">
            <?php if( isset(get_field('event_link')['url'])): ?>
                <a href="<?php echo get_field('event_link')['url']; ?>" class="card-link link-arrow">Learn More</a>
            <?php endif; ?>
        </div>
    </div>
</article>
