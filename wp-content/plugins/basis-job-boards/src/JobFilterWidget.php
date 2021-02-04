<?php
namespace Basis\JobBoard;

use Timber\Timber;
use Timber\PostQuery;

class JobFilterWidget extends \WP_Widget {

    public function __construct() {
        parent::__construct( 'JobFilter', 'Job Boards Filter', [
            'classname' => 'my_widget',
            'description' => 'My Widget is awesome',
        ]);
    }

    public function widget( $args, $instance ) {
        if ( ! class_exists( 'Timber' ) ) {
            echo "<div>Cant display Job Boards Widget because the Timber plugin is not installed.</div>";

            return;
        }

        $context = Timber::get_context();
        $context['args'] =  $args;
        $context['instance'] =  $instance;
        $context['posts'] = new PostQuery(['post_type' => 'job']);
        $context['locations'] = Timber::get_terms(['taxonomy' => 'job_boards_location']);
        $context['departments'] = Timber::get_terms(['taxonomy' => 'job_boards_department']);

        Timber::render( 'job-boards/widget.twig', $context);
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

        return $instance;
    }
}