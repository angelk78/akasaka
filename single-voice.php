<?php
get_header();
?>

<?php while (have_posts()) : the_post(); ?>

    <section class="wrapper">
        <div class="page-first">
            <div class="bg-page-sub"></div>

            <div class="index-2 page-first-1 company-page">
                <div class="title-page-2">
                    <h2>お客様の声</h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= home_url(); ?>">HOME</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                お客様の声
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="container">
                    <div class="row ed-index-2">
                        <div class="flower-1"></div>
                        <div class="flower-2"></div>
                        <div class="flower-4"></div>
                        <div class="flower-5"></div>
                        <div class="flower-6"></div>
                        <div class="flower-7"></div>
                        <!-- Date + Title -->
                        <div class="single-head">
                            <p class="date"><?= get_the_date('Y.m.d'); ?></p>
                            <p class="title"><?php the_title(); ?></p>
                        </div>
                        <div class="voice-single-wrapper">
                            <!-- Featured Image -->
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="voice-single-image text-center">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php endif; ?>
                            <!-- Star Ratings (Dynamic) -->
                            <?php
                            $rating = get_post_meta(get_the_ID(), 'voice_rating', true);
                            if ($rating) :
                            ?>
                                <div class="voice-rating text-center">
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <?php if ($i <= $rating) : ?>
                                            <span class="star filled">★</span>
                                        <?php else : ?>
                                            <span class="star">☆</span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            <?php endif; ?>
                            <?php
                            $ratings = get_post_meta(get_the_ID(), 'voice_ratings', true);

                            if (!empty($ratings)) :
                            ?>
                                <div class="voice-ratings">
                                    <?php foreach ($ratings as $rating) : ?>
                                        <div class="voice-rating-row">
                                            <div class="voice-rating-title YuGothic">
                                                <?= esc_html($rating['title']); ?>
                                            </div>

                                            <div class="voice-rating-stars">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <?php if ($i <= $rating['stars']) : ?>
                                                        <span class="star filled">★</span>
                                                    <?php else : ?>
                                                        <span class="star">☆</span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Content -->
                            <div class="voice-content YuGothic">
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <!-- Back Button -->
                        <div class="text-center">
                            <?php
                            $voice_page = get_pages(array(
                                'meta_key'   => '_wp_page_template',
                                'meta_value' => 'template-voice.php'
                            ));
                            $voice_url = !empty($voice_page) ? get_permalink($voice_page[0]->ID) : home_url('/voice/');
                            ?>
                            <a href="<?= $voice_url; ?>" class="btn btn-default">
                                一　覧
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>