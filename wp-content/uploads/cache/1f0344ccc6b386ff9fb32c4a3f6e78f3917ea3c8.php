<?php $__env->startSection('content'); ?>
  <?php 
    $sidebar = ((get_field('job_company_logo') or get_field('job_company_name') or get_field('job_company_about')) and get_field_object('other_companies', 'option')['value'] == true);
   ?>

  <article <?php (post_class('main-post')); ?>>
    <div class="container">
      <div class="row pt-2 pb-2">
        <div class="col">
          <a href="<?php echo e(get_post_type_archive_link('job')); ?>"><i class="fa fa-arrow-left"></i> View All Jobs</a>
        </div>
      </div>
      <div class="row">
        <div class="col <?php if($sidebar): ?> col-md-8 <?php endif; ?>">
          <div class="row">
            <div class="col">
              <h1><?php echo get_the_title(); ?></h1>
            </div>
          </div>
          <div class="row mb-4 job-meta">
            <div class="col">
              <?php if(get_field('job_location')): ?>
                <i class="fa fa-map-marker"></i> <?php echo get_term(get_field('job_location'))->name; ?>

                <span class="sep"> | </span>
              <?php endif; ?>
              <i class="fa fa-briefcase"></i> <?php echo get_field('job_time'); ?>

              <?php if(get_field('job_department')): ?>
                <span class="sep"> | </span>
                <i class="fa fa-building-o"></i> <?php echo get_term(get_field('job_department'))->name; ?>

              <?php endif; ?>
            </div>
          </div>
          <?php echo $diamanti_social_sharing; ?>


          <div class="row mb-4">
            <div class="col">
              <h3>Job Details</h3>
              <?php echo get_field('job_description'); ?>

            </div>
          </div>

          <?php if(!$sidebar): ?>
            <div class="row mb-4">
              <div class="col">
                <?php if(get_field('other_companies', 'option')['value'] == true): ?>
                  <?php if(get_field('job_company_logo')): ?>
                    <img src="<?php echo get_field('job_company_logo')['url']; ?>"
                         alt="<?php echo get_field('job_company_logo')['alt']; ?>">
                  <?php endif; ?>
                  <?php if(get_field('job_company_name')): ?>
                    <h4>About <?php echo get_field('job_company_name'); ?></h4>
                  <?php endif; ?>
                  <?php if(get_field('job_company_about')): ?>
                    <?php echo get_field('job_company_about'); ?>

                  <?php endif; ?>
                <?php else: ?>
                  <?php if(get_field('job_company_logo', 'option')): ?>
                    <img src="<?php echo get_field('job_company_logo', 'option')['url']; ?>"
                         alt="<?php echo get_field('job_company_logo', 'option')['alt']; ?>">
                  <?php endif; ?>
                  <?php if(get_field('job_company_name', 'option')): ?>
                    <h4>About <?php echo get_field('job_company_name', 'option'); ?></h4>
                  <?php endif; ?>
                  <?php if(get_field('job_company_about', 'option')): ?>
                    <?php echo get_field('job_company_about', 'option'); ?>

                  <?php endif; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <?php if($sidebar): ?>
          <div class="col-md-4 mb-4">
            <?php if(get_field('job_company_logo')): ?>
              <img src="<?php echo get_field('job_company_logo')['url']; ?>"
                   alt="<?php echo get_field('job_company_logo')['alt']; ?>">
            <?php endif; ?>
            <?php if(get_field('job_company_name')): ?>
              <h4>About <?php echo get_field('job_company_name'); ?></h4>
            <?php endif; ?>
            <?php if(get_field('job_company_about')): ?>
              <?php echo get_field('job_company_about'); ?>

            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      
      
      
      
      
      
      
      
      
      
    </div>
  </article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>