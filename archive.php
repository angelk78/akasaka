<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage akasaka
 * @since 1.0.0
 */

get_header();
?>

<section class="wrapper">
    <div class="archive-page">
        <div class="bg-page-sub"></div>
        <div class="index-2 page-first-1">
            <div class="row ed-index-2 no-bg">
                <div class="title-page-2">
                    <h2><?= single_cat_title() ?></h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= home_url() ?>">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="<?= home_url('blog') ?>">伝言板</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= single_cat_title() ?></li>
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
                        <section class="blog-list">
                            <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    $categories = get_the_category();
                                    $firstCat = $categories[0];
                                    $catName = $firstCat->name;
                                    $catLink = get_category_link($firstCat->term_id);
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
                                if (function_exists('wp_corenavi')) : wp_corenavi();
                                endif;
                            } else {
                                echo '<p class="post-details__no-post">該当するポストはありません。</p>';
                            }
                            ?>
                        </section>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<?php
get_footer();
