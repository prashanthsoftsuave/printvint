<?php if(isset($header_cta) && $header_cta['text']): ?>
    <section class="content headerCta__section <?php echo e($show_mobile ? 'mobile-only' : 'desktop-only'); ?>">
        <div class="container headerCta__container">
            <div class="headerCta__content">
                <p class="headerCta__text">
                    <?php echo $header_cta['text']; ?>

                    <a class="headerCta__link" href="<?php echo e($header_cta['link']['url']); ?>"
                       target="<?php echo e($header_cta['link']['target']); ?>">
                        <?php echo e($header_cta['link']['title']); ?>

                        <i class="headerCta__icon"></i>
                    </a>
                </p>
            </div>
        </div>
    </section>
    <style>
        @media (max-width: 480px) {
        .mobile-only p.headerCta__text {
            text-align: left;
            font-size: 14px;
        }
            .mobile-only  .headerCta__link{
                margin-left: unset;
            }

        }
    </style>
<?php endif; ?>