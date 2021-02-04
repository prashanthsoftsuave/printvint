<?php if($newFeatureList): ?>
    <section class="section newSection" id="<?php echo e($newFeatureList['section_id']); ?>">
        <div class="featureList featureList--<?php echo e($newFeatureList['type']); ?>">
            <div class="staticMesh"></div>
            <div class="featureList__container">
                <?php echo $__env->make('blocks.newSectionHeader', array('data' => $newFeatureList), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="featureList__list">
                    <?php $__currentLoopData = $newFeatureList['feature_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featureList__item">
                            <div class="featureList__content">
                                <img src="<?php echo e($item['icon']['url']); ?>" alt="<?php echo e($item['icon']['alt']); ?>" class="featureList__icon">
                                <h4 class="featureList__title"><?php echo $item['title']; ?></h4>
                                <p class="featureList__text"><?php echo $item['caption']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
