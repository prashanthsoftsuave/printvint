<?php require __DIR__.'/../vendor/autoload.php';
use Timber\Timber;

$timber = new Timber();
$context = $timber::get_context();
$context['post'] = $timber::get_post();
$context['form'] = get_field('job_application_form');
get_header();
echo $timber::compile_string(file_get_contents(__DIR__.'/../views/single-job.twig'), $context);
get_footer();
?>