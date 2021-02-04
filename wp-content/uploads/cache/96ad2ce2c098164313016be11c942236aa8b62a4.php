<?php if($productBenefits): ?>
    <?php ($hash = uniqid()); ?>
    <section class="productBenefitsSection productBenefitsSection--<?php echo e($productBenefits['type']); ?>"
             id="<?php echo e($productBenefits["section_id"]); ?>">
        <div class="productBenefits">
            <?php echo $__env->make('blocks.newSectionHeader', array('data' => $productBenefits), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="productBenefits__cards">
                <?php $__currentLoopData = $productBenefits['benefit_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="productBenefits__card" data-eh="benefits-cards-<?php echo e($hash); ?>">
                        <img
                                class="productBenefits__card__image"
                                src="<?php echo e($card['icon']['url']); ?>"
                                alt="<?php echo e($card['icon']['alt']); ?>"
                        />
                        <h3 class="productBenefits__card__title"><?php echo $card['title']; ?></h3>
                        <p class="productBenefits__card__description"><?php echo $card['caption']; ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>




