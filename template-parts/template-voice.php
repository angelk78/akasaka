<?php

/**
 * The template for displaying voice pages
 * Template Name: Voice
 * Template Post Type: page
 */
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$homeNews = new WP_Query(array(
    'post_type'      => 'voice',
    'posts_per_page' => 12,
    'post_status'    => array('publish'),
    'orderby'        => 'date',
    'order'          => 'DESC',
    'cache_results'  => false,
    'paged'          => $paged,
));
?>
<section class="wrapper">
    <div class="page-first">
        <div class="bg-page-sub"></div>
        <div class="index-2 page-first-1">
            <div class="title-page-2">
                <h2>お客様の声</h2>
                <nav aria-label="breadcrumb" class="ed-brc">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= home_url() ?>">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">お客様の声</li>
                    </ol>
                </nav>
            </div>
            <div class="container">
                <div class="row ed-index-2 no-bg">
                    <div class="flower-1"></div>
                    <div class="flower-2"></div>
                    <div class="flower-4"></div>
                    <div class="flower-5"></div>
                    <div class="flower-6"></div>
                    <div class="flower-7"></div>

                    <?php if ($homeNews->have_posts()) : ?>
                        <div class="voice-grid">
                            <?php while ($homeNews->have_posts()) : $homeNews->the_post(); ?>
                                <div class="voice-card" onclick="window.location.href='<?php the_permalink(); ?>'">
                                    <div class="voice-card__image">

                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </div>
                                    <div class="voice-card__body">
                                        <div class="voice-card__title YuGothic">
                                            <?php the_title(); ?>
                                        </div>
                                        <p class="voice-card__detail">
                                            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>

                </div>

                <div class="blog-pagi">
                    <?php
                    $big = 999999999;
                    echo paginate_links(array(
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $homeNews->max_num_pages,
                        'prev_next' => false,
                        'next_text' => false
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>