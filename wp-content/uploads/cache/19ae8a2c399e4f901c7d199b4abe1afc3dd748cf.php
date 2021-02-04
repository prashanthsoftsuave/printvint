<?php $__env->startSection('content'); ?>
  <section class="section-gradient-mesh search-page">
      <div class="container">
          <?php echo $__env->make('partials.search-form-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php if(have_posts()): ?>
              <div class="search-page__count">SHOWING RESULTS (<?php echo e($get_total_posts); ?>)</div>
              <div>
                  <?php while(have_posts()): ?> <?php (the_post()); ?>
                    <?php echo $__env->make('partials.content-search-results-item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php endwhile; ?>
              </div>
              <?php echo $__env->make('partials.content-search-pagination', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php else: ?>
              <div class="search-form-results__lack"><p class="search-form-results__lack__message">No results found. Try again.</p></div>
          <?php endif; ?>
      </div>
  </section>
  <section class="section newSection">
      <div class="ctaBlock">
          <div class="ctaBlock__container">
              <div class="ctaBlock__content">
                  <h2 class="ctaBlock__title">Hit the ground running with Diamanti</h2>
                  <a class="ctaBlock__button btn btn-action" href="/contact/">Contact Sales</a>
              </div>
          </div>
      </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>