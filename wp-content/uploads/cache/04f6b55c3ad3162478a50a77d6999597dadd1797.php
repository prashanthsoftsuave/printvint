<form  role="search" method="get" id="searchform" action="<?php echo get_site_url(); ?>" class="form-inline mb-4">
  <label class="sr-only" for="job-search">Username</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-search"></i></div>
    </div>
    <input type="search" class="form-control" id="job-search" placeholder="Search" name="s">
  </div>
  <button type="submit" class="btn btn-action">Search</button>
  <input type="hidden" value="job" name="post_type" />
</form>

<h4 class="menu-label">Locations</h4>
<ul class="mb-4">
  <?php $__currentLoopData = get_terms(['taxonomy' => 'job_boards_location']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> (<?php echo $term->count; ?>)</a></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<h4 class="menu-label">Departments</h4>
<ul class="mb-4">
  <?php $__currentLoopData = get_terms(['taxonomy' => 'job_boards_department']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> (<?php echo $term->count; ?>)</a></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
