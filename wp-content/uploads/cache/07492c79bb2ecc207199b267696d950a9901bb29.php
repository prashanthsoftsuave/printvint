<?php if(isset($hero)): ?>
    <section class="hero <?php echo e($hero['text_color']); ?> <?php echo $hero['type']; ?> <?php echo $hero['background_color']; ?>"
        <?php if( !$hero['background_video'] && isset($hero['background_image']['url']) ): ?>
           style="background: url(<?php echo e($hero['background_image']['url']); ?>) no-repeat center center; background-size: cover;
           <?php endif; ?>">

        <?php if(isset($hero['background_image']['url'])): ?>
            <?php if($hero['gradient_overlay']): ?>
                <div class="overlay bg-diamanti-grad"></div>
            <?php endif; ?>
        <?php else: ?>
            <?php if(!$hero['background_video']): ?>
                <div class="overlay pageHeader__mesh bg-deep-blue">
                <div class="news-buttons">
                        <a href="https://diamanti.com/press-releases/" class="io-news-btn btn btn-action" >Diamanti Press Releases</a>
                </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if( $hero['background_video'] ): ?>
           <video playsinline autoplay muted loop poster="<?php echo e($hero['background_image']['url']); ?>" id="bgvid" style="background-image: url('<?php echo e($hero['background_image']['url']); ?>');">
               <source src="<?php echo e($hero['background_block-title light text-center aos-init aos-animatevideo']); ?>" type="video/mp4">
           </video>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <?php if($hero['heading']): ?>
                    <div class="hero-statement">
                        <?php echo $hero['heading']; ?>

                    </div>
                    <?php endif; ?>

                    <?php if($hero['title']): ?>
                        <div class="h2">
                            <?php echo $hero['title']; ?>

                        </div>
                    <?php endif; ?>

                    <?php if($hero['description']): ?>
                        <div class="description text-<?php echo e($hero['alignment_class']); ?>">
                            <?php echo $hero['description']; ?>

                        </div>
                    <?php endif; ?>

                    <?php if($hero['buttons']): ?>
                        <div class="button-container text-<?php echo e($hero['alignment_class']); ?>">
                            <?php $__currentLoopData = $hero['buttons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="btn btn-action mt-5" href="<?php echo $button['link']; ?>"><?php echo e($button['button_text']); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <p class="alert-danger text-center m-5">There is no hero to display</p>
<?php endif; ?>
<style>
/*news styles*/
.pageHeader .news-buttons {
    display: none;
}
.post-type-archive-news  section.hero.light.pageHeader.bg-diamanti {
    height: 230px;
    display: flex;
}

.post-type-archive-news .hero.light.pageHeader .news-buttons {
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 20%;
    left: 0;
    right: 0;
}

.post-type-archive-news .hero.light.pageHeader a.io-news-btn.btn.btn-outline {
    border: 1.5px solid #fff;
    margin-left: 15px;
}

.post-type-archive-news .hero.light.pageHeader .block-title.light.text-center.aos-init.aos-animate {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
}
</style>