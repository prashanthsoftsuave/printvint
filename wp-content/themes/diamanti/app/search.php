<?php

function data_fetch() {
    $index_obb = new \App\Index();
    $query_params = array(
        's' => esc_attr( $_POST['keyword'] ),
        'posts_per_page' => 5
    );
    if($_POST['filter']) {
        $query_params['post_type'] = $_POST['filter'];
    }
    $search_query = $index_obb->getSearchResult($query_params);

    if( $search_query->have_posts() ) : ?>
        <div class="search-form-results__output__wrapper">
            <ul class="search-form-results__list">
            <?php while( $search_query->have_posts() ) : $search_query->the_post(); ?>
                <li class="search-form-results__item search-form-results__item--<?php echo get_post_type(); ?>">
                    <a href="<?php echo (get_post_type() === 'event') ? get_field('event_link')['url'] : esc_url( get_permalink() ); ?>"
                       class="search-form-results__item__link">
                        <?php the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php wp_reset_postdata();
    else:
        echo '<div class="search-form-results__lack"><p class="search-form-results__lack__message">No results found. Try again.</p></div>';
    endif;

    wp_die();
}
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');

function register_query_vars( $vars ) {
    $vars[] = 'filter';
    return $vars;
}
add_filter( 'query_vars', 'register_query_vars' );

global $searchPostTypes;
$searchPostTypes = array('post', 'page', 'resource', 'event', 'partner', 'news', 'job');

function set_custom_search_query( $query ) {
    global $searchPostTypes;
    if ( !is_admin() && $query->is_main_query() && is_search() ) {
        $query->set( 'posts_per_page', '10' );
        $query->set( 'post_type', get_query_var('filter', $searchPostTypes ) );
        $query->set( 'post_status', 'publish' );
    }
}
add_action( 'pre_get_posts', 'set_custom_search_query' );
