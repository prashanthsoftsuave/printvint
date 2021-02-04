<?php if($newUseCase): ?>
    <section class="section newSection"
             id="<?php echo e($newUseCase["section_id"]); ?>">
        <div class="useCase useCase--<?php echo e($newUseCase['type']); ?>">
            <div class="useCase__container">
                <?php echo $__env->make('blocks.newSectionHeader', array('data' => $newUseCase), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('partials.content-usecase-'.$newUseCase['type'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
