<?php
/*
Plugin Name: Basis Job Boards
Plugin URI: http://indevver.com
Description: Job boards plugin for use with basis theme
Author: Robert Parker
Version: 1.0.0
Author URI: https://indevver.com
*/

// check acf and gravity forms and composer before doing anything
if(!function_exists('acf_add_options_page') || !class_exists( 'GFCommon' ) || !file_exists( __DIR__.'/vendor/autoload.php'))
{
    return;
}

require_once __DIR__.'/vendor/autoload.php';

// register
add_action('init', 'basis_job_board_register');
function basis_job_board_register() {
    register_post_type('job', [
        'rewrite' => ['slug' => 'jobs'],
        'public' => true,
        'has_archive' => true,
        'label'  => __('Jobs'),
        'menu_icon' => 'dashicons-clipboard',
    ]);

    register_taxonomy(
        'job_boards_department',
        'job',
        [
            'rewrite' => [ 'slug' => 'department' ],
            'label' => __( 'Department' ),
            'show_ui'             => true,
            'show_in_quick_edit'  => false,
            'meta_box_cb'         => false,
        ]
    );

    register_taxonomy(
        'job_boards_location',
        'job',
        [
            'rewrite' => [ 'slug' => 'location' ],
            'label' => __('Location'),
            'show_ui'             => true,
            'show_in_quick_edit'  => false,
            'meta_box_cb'         => false,
        ]
    );
}

// flush
add_action('after_switch_theme', function() {
    basis_job_board_register();
    flush_rewrite_rules();
});

add_action( 'widgets_init', function() {
    register_widget( 'Basis\JobBoard\JobFilterWidget' );
} );

// acf
add_action('acf/init', function() {
        $option_page = acf_add_options_page([
        'page_title'    => __('Job Board Settings'),
        'menu_title'    => __('Settings'),
        'menu_slug'     => 'job-board-settings',
        'parent_slug'   => 'edit.php?post_type=job',
        'capability'    => 'manage_options',
        'redirect'      => false
    ]);

    $settings =  new StoutLogic\AcfBuilder\FieldsBuilder('basis_job_settings', ['label' => 'Options']);
    $settings
        ->addTrueFalse('other_companies', ['label' => 'Add options to post jobs for other companies?'])
        ->addText('job_company_name', ['Company'])
        ->addImage('job_company_logo', ['Company logo'])->setWidth(50)
        ->addWysiwyg('job_company_about', ['label' => 'About the company'])->setWidth(50)
    ;
    $settings->setLocation('options_page', '==', 'job-board-settings');
    acf_add_local_field_group($settings->build());

    $job = new StoutLogic\AcfBuilder\FieldsBuilder('basis_job', ['label' => 'Details']);
    $job
        ->addSelect('job_time', [
            'label' => 'Time',
            'choices' => [
                'Part Time',
                'Full Time',
            ]
        ])
        ->addTaxonomy('job_department', [
            'label' => 'Department',
            'taxonomy' => 'job_boards_department',
            'field_type' => 'select',
            'allow_null' => 0,
            'add_term' => 1,
            'save_terms' => 1,
            'load_terms' => 0,
            'return_format' => 'id',
            'multiple' => 0,
        ])->setWidth(50)
        ->addTaxonomy('job_location', [
            'label' => 'Location',
            'taxonomy' => 'job_boards_location',
            'field_type' => 'select',
            'allow_null' => 0,
            'add_term' => 1,
            'save_terms' => 1,
            'load_terms' => 0,
            'return_format' => 'id',
            'multiple' => 0,
        ])->setWidth(50)
        ->addWysiwyg('job_description', ['Job Description'])
    ;
    if(get_field('other_companies', 'option') == true) {
        $job
            ->addText('job_company_name', ['Company'])
            ->addImage('job_company_logo', ['Company logo'])->setWidth(50)
            ->addWysiwyg('job_company_about', ['label' => 'About the company'])->setWidth(50)
        ;
    }
    $job_applications = $job->addSelect('job_application_form', [
        'return_format' => 'array',
    ]);
    foreach ( \RGFormsModel::get_forms(null,'title') as $form ) {
        $job_applications->addChoice($form->id, $form->title);
    }
    $job->setLocation('post_type', '==', 'job')
        ->setGroupConfig('hide_on_screen', ['the_content'])
    ;
    acf_add_local_field_group($job->build());
});

// timber
add_filter('timber/loader/paths', function($paths){
    array_push($paths, __DIR__.'/views');

    return $paths;
});

add_filter('timber_context', function ($context) {
    $context['job_boards_other_companies'] = get_field('other_companies', 'option');
    $context['job_boards_job_company_name'] = get_field('job_company_name', 'option');
    $context['job_boards_job_company_logo'] = get_field('job_company_logo', 'option');
    $context['job_boards_job_company_about'] = get_field('job_company_about', 'option');
    return $context;
});

// templates
//add_filter('archive_template', function ($template)
//{
//    global $post;
//
//    if(is_a(get_queried_object(), 'WP_Term') && (get_queried_object()->taxonomy == "job_boards_location" || get_queried_object()->taxonomy == "job_boards_department"))
//    {
//        return __DIR__.'/templates/archive-job.php';
//    }
//
//    if (is_post_type_archive('job') && locate_template(['archive-job.php']) !== $template)
//    {
//        return __DIR__.'/templates/archive-job.php';
//    }
//
//    return $template;
//});
//
//add_filter('single_template', function ($template)
//{
//    global $post;
//    if ('job' === $post->post_type && locate_template(['single-job.php']) !== $template)
//    {
//        return __DIR__.'/templates/single-job.php';
//    }
//    return $template;
//});
//
//add_filter('template_include', function ($template){
//    global $wp_query;
//
//    if ($wp_query->is_search && $wp_query->query['post_type'] == "job") {
//        return __DIR__.'/templates/archive-job.php';
//    }
//
//    return $template;
//});

// assets
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style( 'basis-job-board', plugins_url( 'assets/job-boards.css', __FILE__ ) );
    wp_enqueue_script( 'basis-job-board', plugins_url( 'assets/job-boards.js', __FILE__ ));
});