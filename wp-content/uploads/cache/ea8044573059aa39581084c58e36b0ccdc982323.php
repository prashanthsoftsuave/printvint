<?php if($notification_bar && $notification_bar['show_notification_bar']): ?>
    <div class="notification-bar">
        <div class="notification-bar__header">
            <p class="notification-bar__header__caption"><?php echo e($notification_bar['banner_title']); ?></p>
        </div>
        <div class="notification-bar__content">
            <button class="notification-bar__close" type="button" aria-label="close"></button>
            <div class="notification-bar__col-image">
                <img class="" src="<?php echo e($notification_bar['image_bar']['url']); ?>" alt="<?php echo e($notification_bar['image_bar']['alt']); ?>"/>
            </div>
            <div class="notification-bar__col-content">
                <h3 class="notification-bar__title"><?php echo e($notification_bar['title_bar']); ?></h3>
                <h4 class="notification-bar__subtitle"><?php echo e($notification_bar['caption_bar']); ?></h4>
                <p class="notification-bar__desc"><?php echo e($notification_bar['description_bar']); ?></p>
                <?php if($notification_bar['primary_button_bar']): ?>
                    <a class="btn btn-action btn-action--white-bg" href="<?php echo e($notification_bar['primary_button_bar']['url']); ?>"
                       target="<?php echo e($notification_bar['primary_button_bar']['target']); ?>"><?php echo e($notification_bar['primary_button_bar']['title']); ?></a>
                <?php endif; ?>
                <div class="notification-bar__links">
                    <?php if($notification_bar['secondary_button_bar']): ?>
                        <a href="<?php echo e($notification_bar['secondary_button_bar']['url']); ?>" target="<?php echo e($notification_bar['secondary_button_bar']['target']); ?>"
                           class="btn-tertiary"><?php echo e($notification_bar['secondary_button_bar']['title']); ?></a>
                    <?php endif; ?>
                    <?php if($notification_bar['secondary_button_second_bar']): ?>
                        <a href="<?php echo e($notification_bar['secondary_button_second_bar']['url']); ?>" target="<?php echo e($notification_bar['secondary_button_second_bar']['target']); ?>"
                           class="btn-tertiary"><?php echo e($notification_bar['secondary_button_second_bar']['title']); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
