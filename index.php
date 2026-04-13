<?php get_header(); ?>

<section class="wrapper-top wrapper page-first">
    <img class="cloud-img" src="<?= ASSETS_PATH ?>resources/images/cloud.png" alt="">
    <div class="index-banner">
        <div class="container relative">
            <div class="row absolute">
                <div class="col-sm-12 padding-0">
                    <div class="txt-banner">
                        <h2>創業70年 <span class="YuGothic">培</span>った技術で<br>お家の周りのことお手伝いいたします</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider">
            <picture>
                <source media="(max-width: 850px)" srcset="<?= ASSETS_PATH ?>resources/images/slide-01-sp.jpg"><img src="<?= ASSETS_PATH ?>resources/images/slide-01.jpg">
            </picture>
            <picture>
                <source media="(max-width: 850px)" srcset="<?= ASSETS_PATH ?>resources/images/slide-02-sp.jpg"><img src="<?= ASSETS_PATH ?>resources/images/slide-02.jpg">
            </picture>
            <picture>
                <source media="(max-width: 850px)" srcset="<?= ASSETS_PATH ?>resources/images/slide-03-sp.jpg"><img src="<?= ASSETS_PATH ?>resources/images/slide-03.jpg">
            </picture>
        </div>
    </div>
    </div>
    <div class="index-2">
        <div class="container">
            <div class="row ed-index-2">
                <div class="flower-1"></div>
                <div class="flower-2"></div>
                <div class="flower-3"></div>
                <div class="flower-4"></div>
                <div class="flower-5"></div>
                <div class="flower-6"></div>
                <div class="flower-7"></div>
                <div class="flower-8"></div>
                <div class="title-bg1">
                    <h2>「家のまわり」に関わる仕事を行っている<br>株式会社赤坂造園です</h2>
                </div>
                <div class="col-sm-12">
                    <div class="img-index-2">
                        <!--<img src="<?= ASSETS_PATH ?>resources/images/index/0108_01.png" class="img-responsive" alt="">-->
                        <picture class="img-responsive">
                            <source media="(max-width: 767px)" srcset="<?= ASSETS_PATH ?>resources/images/thumb01.jpg"><img src="<?= ASSETS_PATH ?>resources/images/index/0108_01.png">
                        </picture>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="txt-index-2">
                        <p>新築外構工事、エクステリア工事、お庭のリフォームを始め、造園工事一式、剪定、伐採、草刈などの緑地管理、植栽や樹木移植などの緑化工事を主に行っております。官公庁が発注する工事や委託、企業やマンションの緑地管理、個人宅のエクステリア工事からお庭のお手入れなど幅広く対応いたします。</p>
                        <p>弊社では、熟練された従業員の技術は元より、作業に欠かせない特殊車両や建設機械、小型機械などを多く保有しております。適切な機械の使用は工期の短縮、コストの削減に繋がるからです。また弊社は、自社で職人を抱えており、下請けを使う事がないので、他社よりコストを低く抑えることができます。自社のデザイナー、スタッフ、職人が責任を持って設計から施工までいたします。皆様の家の周りのことでお手伝いできることがございましたら、幸いです。</p>
                    </div>
                </div>
                <div class="manufacturers">
                    <h2>取り扱いメーカー</h2>
                    <span>下記専門メーカーの商品を取り扱っています。</span>
                    <div class="manu_images">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/01.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/02.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/03.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/04.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/05.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/06.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/07.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/08.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/09.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/10.png" alt="">
                        <img src="<?= ASSETS_PATH ?>resources/images/manufacturers/11.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-3">
        <div class="container">
            <div class="row flexwrap">
                <div class="title-page-1 col-md-12 col-xs-12">
                    <h2>できること</h2>
                </div>

                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/exterior#shinchikugaikou') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/1.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>新築外構工事</h3>
                        <p>理想のお庭を考えます！外構工事は、別発注が断然お値打ちです！</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/exterior#oniwarifoumu') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/2.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>お庭リフォーム</h3>
                        <p>現状のお庭に不満や問題点はありませんか？家周りの事でしたらご相談を！</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/exterior#ekusuteriakouji') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/3.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>エクステリア工事</h3>
                        <p>ウッドデッキ、カーポート、フェンスどのメーカーも取り扱い可能です！</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/garden#sakutei-tsuboniwa') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/4.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>作庭、坪庭</h3>
                        <p>希少価値のあり、愛着が湧く古風なお庭を作ってみませんか！</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/garden#shokuju-ishoku') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/5.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>植樹、移植</h3>
                        <p>お家のシンボルツリーほしい、大事にしてきた樹木の移動！緑は人の心を癒します。</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/garden#shibafu-jinkoushiba') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/6.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>芝生、人工芝</h3>
                        <p>お子様、愛犬が大喜び間違いなし！緑あふれる遊び場の完成です！</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/manage#sentei-bassai') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/7.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>剪定、伐採</h3>
                        <p>剪定は樹木を育てていく上で欠かせないものです！伐採も得意としております！</p>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="<?= home_url('/manage#kusakari') ?>" class="box-index-3">
                        <div class="img-box-3">
                            <img src="<?= ASSETS_PATH ?>resources/images/index/8.jpg" class="img-responsive" alt="">
                        </div>
                        <h3>草刈</h3>
                        <p>草はお庭の天敵です！少量から大規模の草刈を機械を使い分けて行います！</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="index-4">
        <div class="container">
            <div class="row">
                <div class="title-page-2">
                    <h2><span class="gothic">施</span>工事例</h2>
                    <div class="flower-3"></div>
                    <div class="flower-4"></div>
                </div>
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
                <div class="col-sm-12">
                    <div class="slide-news">
                        <div class="flower-7"></div>
                        <div class="flower-10"></div>
                        <section class="blog-list">

                            <div class="post__tabs__content">
                                <?php
                                $i = 1;
                                $categories = get_terms([
                                    'taxonomy'     => 'category',
                                    'hide_empty'   => false,
                                    'parent'       => 0,
                                ]);
                                foreach ($categories as $category) {
                                ?>

                                    <ul id="tab<?php echo $i; ?>" class="post__tabs__content--item <?php if ($i == 1) {
                                                                                                        echo 'isActive';
                                                                                                    } ?>">
                                        <li class="post-details">
                                            <div class="blog-list">
                                                <?php
                                                $args = array(
                                                    'post_type'      => 'post',
                                                    'posts_per_page' => 6, // Set posts per page to 6
                                                );

                                                if ($i != 1) {
                                                    $args['tax_query'] = array(
                                                        array(
                                                            'taxonomy' => 'category',
                                                            'field'    => 'slug',
                                                            'terms'    => $category->slug,
                                                        )
                                                    );
                                                }

                                                $posts = new WP_Query($args);
                                                $j = 1;

                                                if ($posts->have_posts()) :
                                                    while ($posts->have_posts()) {
                                                        $posts->the_post();
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
                                                else :
                                                    ?>
                                                    <p class="post-details__no-post">該当するポストはありません。</p>
                                                <?php
                                                endif;
                                                wp_reset_postdata();
                                                ?>
                                            </div>
                                        </li>
                                    </ul>
                                <?php
                                    $i++;
                                }
                                ?>
                            </div>

                        </section>
                    </div>
                    <p class="blog-redirect"><a href="<?= home_url('/blog') ?>">一　覧</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- customer voice -->
     <div class="index-5">
        <div class="container">
            <div class="row flexwrap">
                <div class="title-page-1 col-md-12 col-xs-12">
                    <h2>お客様の声</h2>
                </div>

                <?php
                $voice_args = array(
                    'post_type'      => 'voice',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );

                $voice_query = new WP_Query($voice_args);

                if ($voice_query->have_posts()) :
                ?>
                    <div class="voice-grid">
                        <?php while ($voice_query->have_posts()) : $voice_query->the_post(); ?>

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
                <?php
                endif;
                wp_reset_postdata();
                ?>

                <p class="voice-redirect"><a href="<?= home_url('/voice') ?>">一　覧</a></p>
            </div>
        </div>
    </div>

    <div style="padding:40px 0 20px 0;background-color:#fff;">
        <div class="container">
            <?php echo do_shortcode('[grw id=16988]'); ?>
        </div>

        <div class="container" style="margin-top:50px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.4418444464955!2d137.10333667684938!3d35.34467947269784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036ae598860ec3%3A0x3739ce2a57fa575e!2z77yI5qCq77yJ6LWk5Z2C6YCg5ZyS!5e0!3m2!1sja!2sjp!4v1771571064082!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>