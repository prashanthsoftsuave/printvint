<div class="row">
  <div class="col article job-posting">
    <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
    <div class="row">
      <div class="col job-meta">
        <i class="fa fa-map-marker"></i>
          <a href="<?php echo get_term_link(get_field('job_location')); ?>"><?php echo get_term(get_field('job_location'))->name; ?></a> <span class="sep"> | </span>
        <i class="fa fa-briefcase"></i> <?php echo get_field('job_time'); ?> <span class="sep"> | </span>
        <i class="fa fa-building-o"></i>
        <a href="<?php echo e(get_term_link(get_field('job_department'))); ?>"><?php echo e(get_term(get_field('job_department'))->name); ?></a>
      </div>
    </div>
  </div>
</div>
