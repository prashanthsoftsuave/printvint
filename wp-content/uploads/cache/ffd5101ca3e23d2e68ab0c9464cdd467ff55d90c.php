<section class="section newSection tabs_with_bg" id="ultimaKeyBenefitsSec">
    <div class="cardsBlock">
        <div class="cardsBlock__container text">
            <div class="section_tabs">
                <h3 class="benefit_title">Key Benefits</h3>
                <div class="benefit-container">
                    <div class="benefit-wrapper">
                        <div class="benefit-left">
                            <h3 class="benefit-h">Application Freedom Across Clouds</h3>
                            <p class="benefit-p">Deploy and migrate stateful applications and their volumes across
                                clusters</p>
                        </div>
                        <div class="benefit-right">
                            
                            <img src="/wp-content/uploads/2020/10/applic-freedom-diagram-2.svg" class="card_img">
                        </div>
                    </div>
                    <div class="benefit-wrapper">
                        <div class="benefit-left">
                            <h3 class="benefit-h">High Performance</h3>
                            <p class="benefit-p">I/O optimized storage layer and NVMe storage deliver high IOPs at low
                                latency</p>
                        </div>
                        <div class="benefit-right">
                            
                            
                            <img src="/wp-content/uploads/2020/10/supercharge-performance-diagram-2.svg"
                                 class="card_img">
                        </div>
                    </div>
                    <div class="benefit-wrapper">
                        <div class="benefit-left">
                            <h3 class="benefit-h">Fully Integrated, Turnkey Solution</h3>
                            <p class="benefit-p">Rapidly adopt and expand Kubernetes with an all-in-one solution that
                                has been tested and
                                validated.</p>
                        </div>
                        <div class="benefit-right">
                            
                            
                            <img src="/wp-content/uploads/2020/10/turnkey-solution-diagram-4.svg"
                                 class="card_img">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<?php if($productResources): ?>
    <?php ($hash = uniqid()); ?>
    <section class="productResourcesSection productResources--<?php echo e($productResources['type']); ?>"
             id="<?php echo e($productResources["section_id"]); ?>">
        <?php if($productResources['type'] != 'spektra-landing'): ?>
            <div class="staticMesh staticMesh--black staticMesh--resources"></div>
        <?php endif; ?>
        <div class="productResources">
            <?php echo $__env->make('blocks.newSectionHeader', array('data' => $productResources), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="productResources__cards">
                <?php $__currentLoopData = $productResources['resources']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="productResources__card" data-eh="resources-cards-<?php echo e($hash); ?>">
                        <img
                                class="productResources__card__image"
                                src="<?php echo e($card['icon']['url']); ?>"
                                alt="<?php echo e($card['icon']['alt']); ?>"
                        />
                        <h3 class="productResources__card__title"><?php echo $card['title']; ?></h3>
                        <p class="productResources__card__description"><?php echo $card['caption']; ?></p>
                        <a class=" <?php echo e($card['webpage_resource'] ? 'productResources__card__link productResources__card__link--webpage' : 'btn-tertiary'); ?>"
                           href="<?php echo e($card['resource_url']); ?>" target="_blank"><?php echo e($card['cta_text']); ?></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<style>
    #ultimaTabSec {
        display: none;
    }

    .page-id-13187 #ultimaTabSec {
        display: block;
    }

    #ultimaTabSec .card_body_img .card_img {
        padding: 20px;
        height: 360px;
        width: 100%;
    }

    #additionalResourcesSec .productResources__card__image {
        width: 212px;
        height: 102px;
    }

    #additionalResourcesSec a.productResources__card__link.productResources__card__link--webpage {
        background-image: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 20px;
        color: #fff;
        font-size: 17px;
        font-weight: 600;
        line-height: 25px;
        background-color: #93d500;
        border: none;
        border-radius: 8px;
        position: relative;
        margin: 0;
        width: 180px;
        height: 40px;
    }

    #additionalResourcesSec .productResources__card {
        height: 318px;
        margin: 0;
        padding: 15px 0 25px 0;
    }

    #additionalResourcesSec .productResources__card__description {
        padding: 0 10px;
    }

    #additionalResourcesSec .productResources__card__title {
        margin-top: 10px;
    }
</style>