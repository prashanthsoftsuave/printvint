<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	while ($query->have_posts())
	{
		$query->the_post();
    ?>
        <div class="row">
            <div class="col article job-posting">
                <a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a>
                <div class="row">
                    <div class="col job-meta">
                        <i class="fa fa-map-marker"></i>
                        <a href="<?php echo get_term_link(get_field('job_location')); ?>">
                            <?php echo get_term(get_field('job_location'))->name ?>
                        </a>
                        <span class="sep"> | </span>
                        <i class="fa fa-briefcase"></i> <?php echo get_field('job_time'); ?>
                        <span class="sep"> | </span>
                        <i class="fa fa-building-o"></i>
                        <a href="<?php echo get_term_link(get_field('job_department')) ?>"><?php echo get_term(get_field('job_department'))->name ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
	}
}
else
{
	echo "No Results Found";
}
?>
