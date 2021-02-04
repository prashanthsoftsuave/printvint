<?php if ( !is_front_page() ) { ?>
<?php if($new_hero ): ?>
    <section class="section newSection" id="<?php echo e($new_hero['section_id']); ?>">
        <div class="newHero newHero--<?php echo e($new_hero['direction']); ?> newHero--<?php echo e($new_hero['template']); ?>">
            <?php if(is_front_page()): ?>
                <div class="interactiveMesh"></div>
            <?php else: ?>
                <div class="staticMesh staticMesh--<?php echo e($current_template); ?>"></div>
            <?php endif; ?>
            <div class="newHero__container">
                <div class="newHero__columns newHero__columns--<?php echo e($new_hero['direction']); ?>">
                    <div class="newHero__column">
                        <?php if($new_hero['title_label']): ?>
                            <h4 class="newHero__title__label"><?php echo e($new_hero['title_label']); ?></h4>
                        <?php endif; ?>
                        <h1 class="newHero__title"><?php echo $new_hero['title']; ?></h1>
                        <p class="newHero__caption The-best-platform-fo"><?php echo $new_hero['caption']; ?></p>
                        <a class="newHero__button btn btn-action" href="<?php echo e($new_hero['button']['url']); ?>"
                           target="<?php echo e($new_hero['button']['target']); ?>"><?php echo e($new_hero['button']['title']); ?></a>
                        <a class="newHero__button btn btn-action contact-Sales" href="/demo">Request Demo</a>
                        <?php if($new_hero['second_button']): ?>
                            <a class="newHero__button newHero__second-button btn btn-action btn-action--secondary"
                               href="<?php echo e($new_hero['second_button']['url']); ?>"
                               target="<?php echo e($new_hero['second_button']['target']); ?>"><?php echo e($new_hero['second_button']['title']); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="newHero__column">
                        <?php if($new_hero['add_product_diagram']): ?>
                            <?php echo $__env->make('components.' . $new_hero['diagram_type'] . '-product-diagram', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php else: ?>
                            <img class="newHero__image" src="<?php echo e($new_hero['image']['url']); ?>"
                                 alt="<?php echo e($new_hero['image']['alt']); ?>"/>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <?php endif; ?>
<?php } ?>
   <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
   
    <section id="homescrollv81" style="display: none;">
    <div>
        <?php echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>
</section>
  
      
 

    

