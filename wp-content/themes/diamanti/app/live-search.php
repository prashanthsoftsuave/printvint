<?php

function data_fetch() {
    $search_query = new WP_Query(
        array(
            'posts_per_page' => 5,
            's' => esc_attr( $_POST['keyword'] ),
            'post_type' => array('post', 'page', 'resource', 'event', 'partner', 'news', 'job'),
        )
    );
    if( $search_query->have_posts() ) : ?>
        <div class="search-results__output__wrapper">
            <ul class="search-results__list">
            <?php while( $search_query->have_posts() ) : $search_query->the_post(); ?>
                <li class="search-results__item search-results__item--<?php echo get_post_type(); ?>">
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="search-results__item__link">
                        <?php the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
        <?php wp_reset_postdata();
    else:
        echo '<div class="search-results__lack"><p class="search-results__lack__message">No results found. Try again.</p></div>';
    endif;

    wp_die();
}
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');

