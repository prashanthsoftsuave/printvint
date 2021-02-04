<div class="row">
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

    $first = false;
    if ( $query->have_posts() )
    {
        while ($query->have_posts())
        {
            $query->the_post();
            ?>
            <?php if(!$first && get_field('featured_post')): ?>
            <div class="col-md-8 article featured" data-aos="fade-up">
                <article <?php post_class(); ?>>
                    <div class="card">
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body text-center">
                            <?php foreach(get_the_terms(get_the_ID(), 'media') as $term): ?>
                                <div><?php echo $term->name ?></div>
                            <?php endforeach; ?>
                            <a href="<?php the_permalink(); ?>">
                                <h4 class="post-card-title">
                                    <?php the_title() ?>
                                </h4>
                            </a>
                            <a href="<?php the_permalink(); ?>" class="btn btn-action">See Resource</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php else: ?>
            <div class="col-md-4 article" data-aos="fade-up">
                <article <?php post_class(); ?>>
                    <div class="card">
                        <?php if(has_post_thumbnail()): ?>
                            <a class="card-img" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body text-center">
                            <?php if (get_the_terms('', 'media')) : ?>
                            <?php foreach(get_the_terms('', 'media') as $term): ?>
                                <?php $term_color = get_field('color', $term); ?>
                                <div <?php if($term_color): ?>style="color: <?php echo $term_color ?>"<?php endif; ?>><?php echo $term->name ?></div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>">
                                <h4 class="post-card-title">
                                    <?php the_title() ?>
                                </h4>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        <?php endif;
            $first = true;
        }
    }
    else
    {
        echo "No Results Found";
    }
    ?>
</div>
