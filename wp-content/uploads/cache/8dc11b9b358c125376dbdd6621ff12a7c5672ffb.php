<article <?php (post_class('main-post')); ?>>
    <div class="container">
        <header>
            <div class="row single-header">
                <div class="col-md-8">
                    <time class="updated" datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo e(get_the_date()); ?></time>
                    <h1 class="entry-title"><?php echo e(get_the_title()); ?></h1>
                </div>
                <div class="col-md-3 offset-md-1 align-items-end d-flex justify-content-md-end">
                    <?php echo $diamanti_social_sharing; ?>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="byline author vcard entry-meta">
                        <?php echo e(__('By', 'diamanti')); ?> <a href="https://staging.diamanti.com/blog-posts/?ID=<?php echo e(get_the_author_ID()); ?>" >
                            <?php echo e(get_the_author()); ?>

                        </a>
                    </p>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-md-8">
                <div class="entry-content mt-4">
                    <?php (the_content()); ?>
                </div>
            </div>
            <div class="col-md-3 offset-md-1 sidebar">
                <?php echo $__env->make('partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>

        <footer>
            <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

        </footer>
    </div>
</article>

<?php echo $__env->make('blocks.postGrid', ['postGrid' => $post_grid], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
