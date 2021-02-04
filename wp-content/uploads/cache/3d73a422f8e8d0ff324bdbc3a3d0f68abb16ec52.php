<footer class="site-footer content-info">

    <div class="container">
        <div class="row footer-widgets">
            <div class="col-12 col-md-2">
                <?php (dynamic_sidebar('sidebar-footer-1')); ?>
            </div>
            <div class="col-12 col-md-2">
                <?php (dynamic_sidebar('sidebar-footer-2')); ?>
            </div>
            <div class="col-12 col-md-2">
                <?php (dynamic_sidebar('sidebar-footer-3')); ?>
            </div>
            <div class="col-12 col-md-2">
                <?php (dynamic_sidebar('sidebar-footer-4')); ?>
            </div>
            <div class="col-12 col-md-2">
                <?php (dynamic_sidebar('sidebar-footer-5')); ?>
            </div>
            <div class="d-none d-md-block col-md-2">
                <section>
                    <h5 class="company-name"><?php echo get_field('company_name', 'options'); ?></h5>
                    <div class="address">
                        <?php echo get_field('address', 'options'); ?>

                        <a href="<?php echo e(get_field('get_directions_page', 'options')); ?>"><?php echo e(_('Directions')); ?></a>
                    </div>
                    <br />
                    <h5><?php echo e(_('Get in touch:')); ?></h5>
                    <a class="phone-number" href="tel:<?php echo get_field('phone_number', 'options'); ?>"><?php echo get_field('phone_number', 'options'); ?></a>
                </section>
                <?php (dynamic_sidebar('sidebar-footer-6')); ?>
            </div>
        </div>
        <div class="footer-base">
            <div class="">
                <div class="col-md-12 text-right socials">
                    <p class="social-bug-cta">Follow Us!</p>
                    <div class="socials-list">
                        <a class="social-bug" title="Twitter" href="<?php echo get_field('twitter', 'options'); ?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a class="social-bug" title="Facebook" href="<?php echo get_field('facebook', 'options'); ?>" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a class="social-bug" title="LinkedIn" href="<?php echo get_field('linked_in', 'options'); ?>" target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                    <a title="Blog" href="https://diamanti.com/blog/" target="_blank">
                        <i class="social-bug social-bug--blog"></i>
                    </a>
                </div>
            </div>
            <div class="">
                <div class="col-md-12 copyright">
                    <a href="<?php echo e(home_url('/')); ?>" class="footer-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="22" viewBox="0 0 150 22">
                            <g fill="#ffffff">
                                <path d="M34.64 16H27l2.45-13h7.536c3.358 0 5.714.79 6.993 2.353.901 1.099 1.215 2.552.904 4.198C44.296 12.67 41.297 16 34.64 16zm-2.885-3.516h3.25c3.276 0 5.054-.992 5.438-3.035.149-.791.044-1.39-.324-1.835-.587-.717-1.895-1.079-3.888-1.079h-3.356l-1.12 5.95zM48.753 16L45 16 47.247 3 51 3zM69 16h-4.666l-.938-2.78h-6.803L54.603 16H50l9.331-13h5.179L69 16zm-10.342-5.83h3.815l-1.127-3.64h-.163l-2.525 3.64zM88.575 16L84.567 16 86.025 8.181 79.837 16 77.72 16 74.461 8.101 72.99 16 69 16 71.421 3 76.86 3 79.89 10.31 85.627 3 91 3zM108 16h-4.665l-.938-2.78h-6.802L93.605 16H89l9.33-13h5.177L108 16zm-10.34-5.83h3.814l-1.127-3.64h-.162l-2.525 3.64zM125.51 16L121.053 16 114.718 7.771 113.141 16 109 16 111.49 3 116.502 3 122.401 10.714 123.878 3 128 3zM136.428 16L132.28 16 134.08 6.535 128 6.535 128.673 3 145 3 144.327 6.535 138.228 6.535zM147.753 16L144 16 146.247 3 150 3zM12.5 21L0 5.472 4.402 0 15.136 0 19.409 5.244 12.435 13.878 10.374 11.319 15.188 5.342 13.594 3.292 5.874 3.292 4.12 5.469 12.497 15.879 20.877 5.469 16.509 0 20.598 0 25 5.469z" transform="translate(0 .5)"/>
                            </g>
                        </svg>
                    </a>
                    <span class="copyright">&copy <?php echo date('Y'); ?> Diamanti, Inc. All rights reserved.</span>
                    <span class="bullet">•</span>
                    <a href="<?php echo e(get_field('privacy_policy_page', 'options')); ?>"><?php echo e(_e('Privacy Policy')); ?></a>
                    <span class="bullet">•</span>
                    <a href="<?php echo e(get_field('legal_page', 'options')); ?>"><?php echo e(_e('Legal')); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
