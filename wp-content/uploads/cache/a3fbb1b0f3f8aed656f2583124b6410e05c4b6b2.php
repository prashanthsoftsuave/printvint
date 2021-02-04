<div class="productFeatures__diagram--simple">
    <div class="productFeatures__image">
        <img src="<?php echo e($newProductFeature['image_desktop']['url']); ?>" alt="<?php echo e($newProductFeature['image_desktop']['alt']); ?>" class="productFeatures__diagram-img
                    productFeatures__diagram-img--desktop">
        <img src="<?php echo e($newProductFeature['image_mobile']['url']); ?>" alt="<?php echo e($newProductFeature['image_mobile']['alt']); ?>"
             class="productFeatures__diagram-img productFeatures__diagram-img--mobile">
    </div>
    <div class="productFeatures__elements">
        <?php $__currentLoopData = $newProductFeature['feature_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="productFeatures__item">
                <?php echo $feature['feature_text']; ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
