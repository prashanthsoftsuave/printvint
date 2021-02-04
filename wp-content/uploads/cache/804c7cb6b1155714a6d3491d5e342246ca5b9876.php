<?php if($newQuoteBlock): ?>
    <section class="section newSection"
             id="<?php echo e($productsInformation["section_id"]); ?>">
        <div class="quoteBlock">
            <div class="quoteBlock__container">
                <?php echo $__env->make('blocks.newSectionHeader', array('data' => $newQuoteBlock), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="quoteBlock__quote">
                    <blockquote>
                        <?php echo $newQuoteBlock['text']; ?>

                    </blockquote>
                    <p class="quoteBlock__author author_name"><?php echo $newQuoteBlock['author']; ?></p>
                    <p class="quoteBlock__author"><?php echo $newQuoteBlock['company']; ?></p>
                    <?php if($newQuoteBlock['logo']): ?>
                    <img
                        class="quoteBlock__logo"
                        src="<?php echo e($newQuoteBlock['logo']['url']); ?>"
                        alt="<?php echo e($newQuoteBlock['logo']['alt']); ?>"
                    />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <p class="alert-danger text-center m-5">There are no sections to display</p>
<?php endif; ?>
