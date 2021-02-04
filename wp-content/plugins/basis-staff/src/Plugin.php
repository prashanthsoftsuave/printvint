<?php
namespace Basis\Staff;

use Timber\Post;
use Timber\Timber;
use \StoutLogic\AcfBuilder\FieldsBuilder;

class Plugin
{
    private $file;
    private $version;
    private $plugin_name;
    private $timber;

    public static function instance($file = null)
    {
        static $instance = false;
        if($instance === false)
        {
            if(!$file)
            {
                trigger_error("The first instance of ".__CLASS__.' needs to be passed the base file to properly locate assets', E_USER_WARNING);
            }

            $instance = new static($file);
        }

        return $instance;
    }

    private function __construct($file)
    {
        $this->file = $file;
        $this->plugin_name = 'staff-popups';
        $this->timber = new Timber();

        if(!is_array($this->timber::$locations))
        {
            $current_location = $this->timber::$locations;
            $this->timber::$locations = [];
            if($current_location)
            {
                $this->timber::$locations[] = $current_location;
            }
        }

        $this->timber::$locations[] = __DIR__.'/../views/';

        if ( defined( 'STAFF_POPUPS_VERSION' ) ) {
            $this->version = STAFF_POPUPS_VERSION;
        } else {
            $this->version = '1.0.0';
        }
    }

    private function __clone() {}

    private function __sleep() {}

    private function __wakeup() {}

    public function get_plugin_name()
    {
        return $this->plugin_name;
    }

    public function get_version()
    {
        return $this->version;
    }

    public function register()
    {
        register_activation_hook($this->file, [$this, 'flush']);
        register_deactivation_hook($this->file, [$this, 'flush']);
        add_action('plugins_loaded', [$this, 'text_domain']);
        add_action('admin_enqueue_scripts', [$this, 'admin_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'public_scripts']);
        add_action('acf/init', [$this, 'settings_fields']);
        add_action('init', [$this, 'post_type']);
        add_action('init', [$this, 'taxonomy']);
        add_action('init', [$this, 'settings']);
        add_shortcode('staff_popups', [$this, 'shortcode']);
    }

    public function flush()
    {
        flush_rewrite_rules();
    }

    public function text_domain()
    {
        load_plugin_textdomain(
            'staff-popups',
            false,
            dirname( dirname( plugin_basename( $this->file ) ) ) . '/languages/'
        );
    }

    public function admin_scripts()
    {
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( $this->file ) . 'assets/css/staff-popups-admin.css', array(), $this->version, 'all' );
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( $this->file ) . 'assets/js/staff-popups-admin.js', array( 'jquery' ), $this->version, false );
    }

    public function public_scripts()
    {
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( $this->file ) . 'assets/css/staff-popups-public.css', array(), $this->version, 'all' );
        wp_enqueue_script( $this->plugin_name, plugin_dir_url( $this->file ) . 'assets/js/staff-popups-public.js', array( 'jquery' ), $this->version, false );
    }

    public function post_type()
    {
        $labels = array(
            'name'                  => _x( 'Staff', 'Post Type General Name', 'staff-popups' ),
            'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'staff-popups' ),
            'menu_name'             => __( 'Staff', 'staff-popups' ),
            'name_admin_bar'        => __( 'Staff', 'staff-popups' ),
            'archives'              => __( 'Staff Archives', 'staff-popups' ),
            'attributes'            => __( 'Staff Attributes', 'staff-popups' ),
            'parent_item_colon'     => __( 'Parent Staff:', 'staff-popups' ),
            'all_items'             => __( 'All Staff', 'staff-popups' ),
            'add_new_item'          => __( 'Add New Staff', 'staff-popups' ),
            'add_new'               => __( 'Add New', 'staff-popups' ),
            'new_item'              => __( 'New Staff', 'staff-popups' ),
            'edit_item'             => __( 'Edit Staff', 'staff-popups' ),
            'update_item'           => __( 'Update Staff', 'staff-popups' ),
            'view_item'             => __( 'View Staff', 'staff-popups' ),
            'view_items'            => __( 'View Staff', 'staff-popups' ),
            'search_items'          => __( 'Search Staff', 'staff-popups' ),
            'not_found'             => __( 'Not found', 'staff-popups' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'staff-popups' ),
            'featured_image'        => __( 'Staff Image', 'staff-popups' ),
            'set_featured_image'    => __( 'Set staff image', 'staff-popups' ),
            'remove_featured_image' => __( 'Remove staff image', 'staff-popups' ),
            'use_featured_image'    => __( 'Use as staff image', 'staff-popups' ),
            'insert_into_item'      => __( 'Insert into staff', 'staff-popups' ),
            'uploaded_to_this_item' => __( 'Uploaded to this staff', 'staff-popups' ),
            'items_list'            => __( 'Staff list', 'staff-popups' ),
            'items_list_navigation' => __( 'Staff list navigation', 'staff-popups' ),
            'filter_items_list'     => __( 'Filter staff list', 'staff-popups' ),
        );
        $args   = array(
            'label'               => __( 'Staff', 'staff-popups' ),
            'description'         => __( 'A list of Staff', 'staff-popups' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
            'taxonomies'          => [],
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-groups',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array( 'slug' => 'staff' ),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'staff', $args );
    }

    public function taxonomy()
    {
        $labels = array(
            'name'                       => _x( 'Department', 'Taxonomy General Name', 'staff-popups' ),
            'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'staff-popups' ),
            'menu_name'                  => __( 'Departments', 'staff-popups' ),
            'all_items'                  => __( 'All Departments', 'staff-popups' ),
            'parent_item'                => __( 'Parent Department', 'staff-popups' ),
            'parent_item_colon'          => __( 'Parent Department:', 'staff-popups' ),
            'new_item_name'              => __( 'New Department Name', 'staff-popups' ),
            'add_new_item'               => __( 'Add New Department', 'staff-popups' ),
            'edit_item'                  => __( 'Edit Department', 'staff-popups' ),
            'update_item'                => __( 'Update Department', 'staff-popups' ),
            'view_item'                  => __( 'View Department', 'staff-popups' ),
            'separate_items_with_commas' => __( 'Separate departments with commas', 'staff-popups' ),
            'add_or_remove_items'        => __( 'Add or remove department', 'staff-popups' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'staff-popups' ),
            'popular_items'              => __( 'Hot Departments', 'staff-popups' ),
            'search_items'               => __( 'Search Department', 'staff-popups' ),
            'not_found'                  => __( 'Not Found', 'staff-popups' ),
            'no_terms'                   => __( 'No Departments', 'staff-popups' ),
            'items_list'                 => __( 'Departments list', 'staff-popups' ),
            'items_list_navigation'      => __( 'Departments list navigation', 'staff-popups' ),
        );
        $args   = array(
            'labels'            => $labels,
            'hierarchical'      => true,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud'     => true,
        );
        register_taxonomy( 'department', [ 'staff' ], $args );
    }

    public function settings()
    {
        if (function_exists('acf_add_options_sub_page')) {
            acf_add_options_sub_page([
                'title'      => 'Staff Page Settings',
                'parent'     => 'edit.php?post_type=staff',
                'capability' => 'manage_options'
            ]);
        }
    }

    public function settings_fields()
    {
        if (function_exists('acf_add_options_sub_page')) {
            $settings = new FieldsBuilder('Settings');
            $settings
                ->setLocation('options_page', '==', 'acf-options-staff-page-settings');
            $settings
                ->addTrueFalse('basicStaffIsModal', ['label' => 'Enable Modals'])->setDefaultValue(true);

            acf_add_local_field_group($settings->build());
        }
    }

    public function shortcode($atts)
    {
        $atts = shortcode_atts(
            array(
                'department' => '',
                'columns'    => '3',
                'orderby'    => 'date',
                'order'      => 'ASC',
            ),
            $atts,
            'staff-popups'
        );
        $cols = floor(12/$atts['columns']);
        $colClass = 'col-sm-' . $cols;
        $context = Timber::get_context();
        $context['posts'] = $this->timber::get_posts($this->get_staff($atts['department']));
        $context['column'] = $colClass;
        $context['basicStaffIsModal'] = get_field('basicStaffIsModal', 'options');

        return $this->timber::compile('shortcode.html.twig', $context);

    }

    protected function get_staff( $department = '', $atts = [] )
    {
        $staff_tax_query = $department !== '' ? [
            'tax_query' => [
                [
                    'taxonomy' => 'department',
                    'field'    => 'name',
                    'terms'    => $department,
                ]
            ]
        ] : [];

        return [
            'post_type' => 'staff',
            'orderby'   => $atts['oderby'] ?: 'date',
            'order'     => $atts['order'] ?: 'ASC',
        ] + $staff_tax_query;
    }
}