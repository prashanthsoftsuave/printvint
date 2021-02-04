<?php if($newCtaBlock): ?>
    <section class="section newSection">
        <div class="
            ctaBlock
            <?php echo e(isset($current_template) && $current_template == 'products' ? 'ctaBlock--withSectionOverlap': ''); ?>

        ">
            <div class="ctaBlock__container">
                <div class="ctaBlock__content">
                    <h2 class="ctaBlock__title"><?php echo $newCtaBlock['title']; ?> </h2>
                    <a class="ctaBlock__button btn btn-action" href="<?php echo e($newCtaBlock['button']['url']); ?>"
                       target="<?php echo e($newCtaBlock['button']['target']); ?>"><?php echo e($newCtaBlock['button']['title']); ?></a>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <p class="alert-danger text-center m-5">There are no sections to display</p>
<?php endif; ?>
