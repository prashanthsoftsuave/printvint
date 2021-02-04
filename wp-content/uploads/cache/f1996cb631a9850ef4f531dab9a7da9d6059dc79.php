<?php if(isset($page_header)): ?>
    <?php echo $__env->make('blocks.hero', array('hero' => $page_header), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php else: ?>
    <section class="hero light pageHeader bg-deep-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="h2">
                        <div data-aos="fade-left" class="block-title light text-center aos-init aos-animate"><?php echo the_title(); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
