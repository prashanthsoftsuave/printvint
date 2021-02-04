<section class="section newSection"
         id="<?php echo e($newProductFeature["section_id"]); ?>">
    <div class="productFeatures productFeatures--<?php echo e($newProductFeature['type']); ?>">
        <div class="productFeatures__container">
            <?php echo $__env->make('blocks.newSectionHeader', array('data' => $newProductFeature), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php if($newProductFeature['type'] != 'd20'): ?>
                <?php echo $__env->make('partials.content-product-feature', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php else: ?>
                <?php echo $__env->make('partials.content-product-feature-simple', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
