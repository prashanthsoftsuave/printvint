<div class="col-md-4 article" data-aos="fade-up">
    <article <?php (post_class()); ?>>
        <div class="card">
            <?php if( has_post_thumbnail() ): ?>
            <a href="<?php echo e(the_permalink()); ?>">
              <?php echo the_post_thumbnail('large', ['class' => 'img-fluid']); ?>

            </a>
            <?php endif; ?>
            <div class="card-body text-center">
                <?php $__currentLoopData = get_the_terms(get_the_ID(), 'media'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php  $term_color = get_field('color', $term);  ?>
                  <div <?php if($term_color): ?>style="color: <?php echo $term_color; ?>"<?php endif; ?>><?php echo $term->name; ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(the_permalink()); ?>">
                    <h4 class="post-card-title">
                        <?php echo e(the_title()); ?>

                    </h4>
                </a>
            </div>
        </div>
    </article>
</div>
