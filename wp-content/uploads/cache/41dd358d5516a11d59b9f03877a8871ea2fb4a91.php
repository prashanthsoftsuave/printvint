<?php if($benefits): ?>
    <section class="section newSection"
             id="<?php echo e($benefits["section_id"]); ?>">
        <div class="benefits__content">
            <div class="newSection__header">
                <h2><?php echo $benefits['section_title']; ?></h2>
            </div>
                <?php $__currentLoopData = $benefits['benefit_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="benefit__container benefit__container--<?php echo e($benefit['position']); ?>">
                        <img
                            class="benefit__image"
                            src="<?php echo e($benefit['image']['url']); ?>"
                            alt="<?php echo e($benefit['image']['alt']); ?>"
                        />
                        <div class="benefit__description">
                            <h3 class="benefit__title"><?php echo $benefit['title']; ?></h3>
                            <p class="benefit__caption"><?php echo $benefit['caption']; ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php endif; ?>
