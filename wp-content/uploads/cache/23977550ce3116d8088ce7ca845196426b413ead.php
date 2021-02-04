<?php if($section): ?>
  <section id="<?php echo e($section['id']); ?>" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
           class="section sr <?php echo e($section['bg-color']); ?> <?php echo e($section['color']); ?> <?php echo $section['class']; ?>"
           <?php if( $section['bg-image']['url'] ): ?> style="background: url('<?php echo $section['bg-image']['url']; ?>') center center; background-size: cover;" <?php endif; ?>
  >
    <div class="container <?php echo e(isset($section['class']) ? $section['class'] : ''); ?>">

      <?php if($section['title'] or $section['heading']): ?>
        <div class="row">
          <div class="col use_case-title">
            <?php echo $section['heading']; ?>

            <div class="h2"><?php echo $section['title']; ?></div>
          </div>
        </div>
      <?php endif; ?>
      <div class="content row">
        <?php $__currentLoopData = $section['cols']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($col['content_type'] === 'text'): ?>
            <div class='<?php echo e($col['class']); ?> text'>
              <?php echo $col['content']; ?>

            </div>
          <?php elseif($col['content_type'] === 'image'): ?>
            <div class='<?php echo e($col['class']); ?> image position-relative'>
              <img class="content-image <?php echo e($col['content']['overflow'] ? $col['content']['overflow'] : 'img-fluid'); ?>"
                   src="<?php echo $col['content']['image']['url']; ?>"
                   alt="<?php echo $col['content']['image']['alt']; ?>">
              <p class="caption"><?php echo $col['content']['image']['caption']; ?></p>
            </div>
          <?php elseif($col['content_type'] === 'card'): ?>
            <div
              class='card-wrap <?php echo e($col['class']); ?> <?php if($col['content']['image_fills_background']): ?> image-fills-background <?php endif; ?>'>
              <div class="card">
                <?php if($col['content']['link']): ?> <a class="card-link" href="<?php echo $col['content']['link']; ?>"> <?php endif; ?>
                  <?php if( isset($col['content']['image']['url'])): ?>
                    <?php if($col['content']['image_fills_background']): ?>
                      <img class="image-background position-absolute"
                           src="<?php echo $col['content']['image']['url']; ?>"
                           alt="<?php echo $col['content']['image']['alt']; ?>">
                    <?php else: ?>
                      <img class="card-img-top" src="<?php echo $col['content']['image']['url']; ?>"
                           alt="<?php echo $col['content']['image']['alt']; ?>">
                    <?php endif; ?>
                  <?php endif; ?>
                  <div class="card-body">
                    <?php if( $col['content']['title'] ): ?>
                      <h5 class="card-title"><?php echo $col['content']['title']; ?></h5>
                    <?php endif; ?>

                    <div class="card-text">
                      <?php echo $col['content']['text']; ?>

                    </div>
                  </div>
                  <?php if($col['content']['link_text'] && $col['content']['link']): ?>
                    <div class="card-footer">
                                        <span class="link-arrow" href="<?php echo $col['content']['link']; ?>">
                                            <?php echo e($col['content']['link_text']); ?>

                                        </span>
                    </div>
                  <?php endif; ?>
                  <?php if($col['content']['link']): ?> </a> <?php endif; ?>
              </div>
            </div>
          <?php elseif($col['content_type'] === 'video'): ?>
            <div class='<?php echo e($col['class']); ?>'>
              <div class="video">
                <img class="img-fluid" src="<?php echo e($col['content']['poster_frame']['url']); ?>"
                     alt="<?php echo e($col['content']['poster_frame']['alt']); ?>">
                <a href="#" data-featherlight="<?php echo e($col['content']['source']); ?>">
                  <button class="btn-play_white"></button><?php echo e($col['content']['link_text']); ?></a>
              </div>
            </div>
          <?php elseif($col['content_type'] == 'form'): ?>
            <div class="<?php echo e($col['class']); ?> form">
              <?php echo gravity_form( $col['content']['choose_a_form'], false, false, false, false, true, 30, true ); ?>

            </div>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
<?php else: ?>
  <p class="alert-danger text-center m-5">There are no sections to display</p>
<?php endif; ?>
