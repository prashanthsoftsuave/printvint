<div class="<?php echo e(($data['staticSearch']) ? 'post-filter__static' : 'post-filter'); ?>">
    <?php if(isset($data['event'])): ?>
        <?php if($get_event_types): ?>
            <ul class="post-filter__list">
                <li class="post-filter__item active <?php echo e($data['staticSearch'] ? '' : 'post-filter__tile'); ?>" data-filter="all">All</li>
                <?php $__currentLoopData = $get_event_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="post-filter__tile post-filter__item" data-filter="<?php echo e($event->slug); ?>">
                        <?php echo e($event->name); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
    <?php else: ?>
        <span class="post-filter__label">Filter by:</span>
        <ul class="post-filter__list">
            <?php $__currentLoopData = $get_search_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="post-filter__item <?php echo e($data['staticSearch'] ? '' : 'post-filter__tile'); ?>" data-filter="<?php echo e($filter['type']); ?>">
                    <?php if($data['staticSearch']): ?>
                        <a href="<?php echo e(get_home_url('/').'/?s='.urlencode(get_search_query()).'&filter='.$filter['type']); ?>"
                           class="post-filter__tile"><?php echo e($filter['label']); ?></a>
                    <?php else: ?>
                        <?php echo e($filter['label']); ?>

                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div>
