<div class="row">
  <div class="col article job-posting">
    <a href="{!! get_permalink() !!}">{!! get_the_title() !!}</a>
    <div class="row">
      <div class="col job-meta">
        <i class="fa fa-map-marker"></i>
          <a href="{!! get_term_link(get_field('job_location')) !!}">{!! get_term(get_field('job_location'))->name !!}</a> <span class="sep"> | </span>
        <i class="fa fa-briefcase"></i> {!! get_field('job_time') !!} <span class="sep"> | </span>
        <i class="fa fa-building-o"></i>
        <a href="{{ get_term_link(get_field('job_department')) }}">{{ get_term(get_field('job_department'))->name }}</a>
      </div>
    </div>
  </div>
</div>
