<?php require __DIR__.'/../vendor/autoload.php';
use Timber\Timber;
use Timber\PostQuery;

$timber = new Timber();
$context = $timber::get_context();
$context['posts'] = new PostQuery();
$context['locations'] = $timber::get_terms(['taxonomy' => 'job_boards_location']);
$context['departments'] = $timber::get_terms(['taxonomy' => 'job_boards_department']);

$context['title'] = 'Archive';
if(is_search()) {
    $context['title'] = "Search: " . get_search_query();
}
else if ( is_category() ) {
    $context['title'] = single_cat_title( '', false );
}
else if ( is_tax() ) {
    $context['title'] = single_tag_title( '', false );
}
else
{
    $context['title'] = post_type_archive_title( '', false );
}

get_header();
echo $timber::compile_string(file_get_contents(__DIR__.'/../views/archive-job.twig'), $context);
get_footer();
