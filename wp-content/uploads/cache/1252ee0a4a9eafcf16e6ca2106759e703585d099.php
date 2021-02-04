<?php if($productsInformation): ?>
    <?php ($hash = uniqid()); ?>
    <section
        class="section newSection productsInformation productsInformation--<?php echo e($productsInformation['background_type']); ?>"
        style="z-index:<?php echo $productsInformation['z_index']; ?>"
    >
        <?php if($productsInformation["section_id"] == 'd20Section'): ?>
            <div class="staticMesh staticMesh--black"></div>
        <?php endif; ?>
        <div
            class="productsInformation__content"
            id="<?php echo e($productsInformation["section_id"]); ?>"
        >
            <div class="productsInformation__header">
                <?php echo $__env->make('blocks.newSectionHeader', array('data' => $productsInformation), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php if($productsInformation['button']): ?>
                    <a
                        class="productsInformation__cta btn btn-action"
                        href="<?php echo $productsInformation['button']['url']; ?>"
                        target="<?php echo $productsInformation['button']['target']; ?>"
                    >
                        <?php echo e($productsInformation['button']['title']); ?>

                    </a>
                <?php endif; ?>
            </div>
            <?php if($productsInformation['cards']): ?>
                <div class="cardsBlock__container">
                    <div class="cardsBlock__columns">
                        <?php $__currentLoopData = $productsInformation['cards']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="cardsBlock__column" data-eh="product-cards-<?php echo e($hash); ?>">
                                <div class="cardsBlock__card">
                                    <img class="cardsBlock__card__icon productsInformation__cardIcon" src="<?php echo e($card['icon']['url']); ?>"
                                         alt="<?php echo e($card['icon']['alt']); ?>"/>
                                    <h4 class="cardsBlock__card__title"><?php echo $card['title']; ?></h4>
                                    <div class="cardsBlock__card__description"><?php echo $card['caption']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
