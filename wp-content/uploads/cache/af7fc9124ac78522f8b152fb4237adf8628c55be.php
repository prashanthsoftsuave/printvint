<section <?php (post_class('main-post')); ?>>
  <div class="container mt-5">
    <header>
      <div class="row single-header">
        <div class="col-md-8">
          <h2 class="section-heading"><?php echo e(get_the_title()); ?></h2>
          <h2><?php echo e(the_field('title')); ?></h2>
          <div class="entry-content mt-4">
            <?php (the_content()); ?>
          </div>
          <div>
            <?php if(isset(get_field('asset')['url'])): ?>
            <a class="btn btn-action" href="<?php echo get_field('asset')['url']; ?>" target="<?php echo e(get_field('asset')['target']); ?>">
              <?php echo e(get_field('asset')['title']); ?>

            </a>
            <?php endif; ?>
            <?php if(isset(get_field('demo_form')['url'])): ?>
            <a class="btn btn-action" href="<?php echo get_field('demo_form')['url']; ?>" target="<?php echo e(get_field('demo_form')['target']); ?>">
              <?php echo e(get_field('demo_form')['title']); ?>

            </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-4">
          <?php echo e(the_post_thumbnail('large', ['class' => 'img-fluid'])); ?>

        </div>
      </div>
    </header>

    <footer>
      <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

    </footer>
  </div>
</section>
