<div class="useCase__intro">
    <div class="useCase__stats">
        <?php $__currentLoopData = $newUseCase['item_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="useCase__stats__item">
                <h3 class="useCase__stats__value"><?php echo $item['title']; ?></h3>
                <p class="useCase__stats__text"><?php echo $item['caption']; ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a class="ctaBlock__button btn btn-action useCase__cta-btn" href="<?php echo $newUseCase['button']['url']; ?>" target="<?php echo $newUseCase['button']['target']; ?>"><?php echo $newUseCase['button']['title']; ?></a>
</div>
