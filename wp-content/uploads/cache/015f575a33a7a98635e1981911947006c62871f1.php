<div class="productFeatures__diagram">
    <div class="productFeatures__col">
        <img src="<?php echo e($newProductFeature['image_desktop']['url']); ?>"
             alt="<?php echo e($newProductFeature['image_desktop']['alt']); ?>" class="productFeatures__diagram-img
                    productFeatures__diagram-img--desktop">
        <img src="<?php echo e($newProductFeature['image_mobile']['url']); ?>" alt="<?php echo e($newProductFeature['image_mobile']['alt']); ?>"
             class="productFeatures__diagram-img productFeatures__diagram-img--mobile">
    </div>
    <div class="productFeatures__col productFeatures__col--list">
        <?php $__currentLoopData = $newProductFeature['feature_list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="productFeatures__item">
                <?php echo $feature['feature_text']; ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<div class="product_keybenefit" id="spektraKeyBenefit">
    <h3 class="benefit_title">Key Benefits</h3>
    <div class="benefit-container">
        <div class="benefit-wrapper">
            <div class="benefit-left">
                <h3 class="benefit-h">Hybrid Cloud Flexibility</h3>
                <p class="benefit-p">Provision and attach Kubernetes clusters in the public cloud and centrally manage
                    them from a single console.</p>
            </div>
            <div class="benefit-right">
                
                <img src="/wp-content/uploads/2020/10/hybrid-cloud-flexibility-screen@2x.png" class="card_img">
            </div>
        </div>
        <div class="benefit-wrapper">
            <div class="benefit-left">
                <h3 class="benefit-h">Secure Multi-Tenancy</h3>
                <p class="benefit-p">Provide secure isolation between multiple teams and projects. Operate enterprises
                    and Managed Service Providers (MSPs) at scale.</p>
            </div>
            <div class="benefit-right">
                
                
                <img src="/wp-content/uploads/2020/10/secure-multi-tenancy-screen@2x.png"
                     class="card_img">
            </div>
        </div>
        <div class="benefit-wrapper">
            <div class="benefit-left">
                <h3 class="benefit-h">Application Freedom Across Clouds</h3>
                <p class="benefit-p">Deploy, manage and migrate applications across clusters and across a hybrid cloud
                    from a single control plane.</p>
            </div>
            <div class="benefit-right">
                
                
                <img src="/wp-content/uploads/2020/10/application-freedom-screen@2x.png"
                     class="card_img">
            </div>
        </div>
    </div>
</div>