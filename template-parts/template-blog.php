<?php

/**
 * The template for displaying Blog pages
 * Template Name: Blog
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Momoka
 * @since 1.0.0
 */
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$news = array(
    'post_type' =>  'post',
    'posts_per_page'    =>  12,
    'post_status' => array('publish'),
    'orderby'   =>  'date',
    'order' =>  'DESC',
    'cache_results' => false,
    'paged' => $paged,
);
$homeNews = new WP_Query($news);
?>
<section class="wrapper">
    <div class="page-first">
        <div class="bg-page-sub"></div>
        <div class="index-2 page-first-1">
            <div class="title-page-2">
                <h2><span class="gothic">施</span>工事例</h2>
                <nav aria-label="breadcrumb" class="ed-brc">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= home_url() ?>">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">施工事例</li>
                    </ol>
                </nav>
            </div>
            <div class="category-list">
                <div class="category-list__show__container">
                    <a href="" class="category-list__show" id="opacity">
                        <p>カテゴリーから探す</p><img src="<?= ASSETS_PATH ?>resources/images/arrow-down.svg" alt="">
                    </a>

                    <div class="category-list__hidden" id="hide">
                        <div class="category-list__container">
                            <?php
                            $categories = get_categories([
                                'hide_empty'   => false
                            ]);
                            foreach ($categories as $category) {
                                echo '<li class="links"><a class="category-list__link" href="' . get_category_link($category->term_id) . '" data-category="' . $category->slug . '"><p class="category-list__link links">' . $category->name . '</p>
                                <img src="' . ASSETS_PATH . 'resources/images/arrow-down.svg" alt=""></a></li>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row ed-index-2 no-bg">
                    <div class="flower-1"></div>
                    <div class="flower-2"></div>
                    <div class="flower-4"></div>
                    <div class="flower-5"></div>
                    <div class="flower-6"></div>
                    <div class="flower-7"></div>

                    <section class="blog-list">
                        <?php
                        if ($homeNews->have_posts()) {
                            while ($homeNews->have_posts()) {
                                $homeNews->the_post();
                        ?>
                                <div class="blog-item">
                                    <a href="<?php the_permalink(); ?>" class="blog-link"></a>
                                    <p class="blog-thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></p>
                                    <div class="blog-content">
                                        <p class="title"><?= the_title() ?></p>
                                        <div class="content"><?= the_content() ?></div>
                                        <p class="date"><?= get_the_date('Y.m.d', $post->ID); ?></p>
                                    </div>
                                    <div class="categories">
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                                echo '
                                                <a href="" class="g-button">
                                                    <div class="g-button__container">
                                                        <p class="g-button__text">' . esc_html($category->name) . '</p>
                                                    </div>
                                                </a>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </section>
                </div>
                <div class="blog-pagi">
                    <?php
                    $big = 999999999;
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $homeNews->max_num_pages,
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