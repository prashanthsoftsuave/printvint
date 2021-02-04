<?php if($partner['query']): ?>
  <section class="partners py-0 bg-light">
    <div class="container">
      <?php if($partner['title']): ?>
      <div class="row">
        <div class="col">
          <h3 class="text-center my-3"><?php echo $partner['title']; ?></h3>
        </div>
      </div>
      <?php endif; ?>
      <div class="row partner-logo-items">
        <?php $__currentLoopData = $partner['query']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3 partner-logo-item">
            <a href="<?php echo get_the_permalink($logo->ID); ?>">
              <?php echo get_the_post_thumbnail($logo->ID, 'thumb'); ?>

            </a>



          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
<?php endif; ?>
