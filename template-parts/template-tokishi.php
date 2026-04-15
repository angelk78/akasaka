<?php

/**
 * The template for displaying Tokishi pages
 * Template Name: Tokishi
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Momoka
 * @since 1.0.0
 */
get_header();
?>
<section class="wrapper">
    <div class="page-first">
        <div class="bg-page-sub"></div>
        <div class="index-2 page-first-1 tokishi-page">
            <div class="title-page-2">
                <div class="text">
                    <h2>土<span class="gothic">岐</span>市で納得のいく<br />外構工事・エクステリア工事・造園工事をお考えの方</h2>
                </div>
                <?= breadcrumbs(); ?>
            </div>

                <div style="margin-bottom:100px">
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
                </div>

            <div class="container tokishi-container">
                <div class="row ed-index-2">
                    <div class="flower-4"></div>
                    <div class="flower-5"></div>
                    <div class="flower-6"></div>
                    <div class="flower-7"></div>
                    <div class="l-wrap">
                        <div class="">
                            <div class="title-sub-main">
                                <h2>
                                    <span class="gothic">土岐市の暮らしを彩る外空間と真摯に向き合っています</span>
                                </h2>
                            </div>
                            <div class="sub-desc">
                                <p>外構工事やエクステリアなどの「外空間」は、住まいの彩り、暮らしを豊かにさせてくれるもの。心地よい風、木漏れ日から射す光、ご家族の声。そのひとつひとつを装い、充実した時間にしてくれます。そんな外空間を存分に楽しみ、存分に感じていただけるように、私たちは内と外をつなぐ土岐市のエクステリア・外構工事や造園工事をお届けしています。</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">土岐市の施工事例</h2>
                            </div>
                        </div>
                        <div class="title-sub-page exterior">
                            <span class="gothic">新築外構工事</span>
                        </div>
                        <div class="img-company-1 text-center">
                            <img src="<?= ASSETS_PATH ?>resources/images/tokishi/tokishi-1.png" class="" alt="">
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>新築に伴う土岐市の外構工事（エクステリア）を承っております。
                                外構工事タイプにもさまざまあります。<br>
                                ・オープン外構工事…門や塀で囲まず、欧米郊外のような開放感があるスタイル。<br>
                                ・セミクローズ外構工事…周囲からの視線を適度に防ぎながら、開放感をもたせたスタイル。<br>
                                ・クローズ外構工事…敷地を全て囲い、プライベート空間を演出できるスタイル。<br>
                                この方向性を決めてから、建物との調和を考えたデザインをご提案させていただきます。
                                モダン、和モダン、ナチュラル、和風、リゾートなど、ハウスメーカー・工務店にあったデザインを考えてまいります。
                                またそれらを彩るエクステリアメーカー・商材（アイテム）は幅広く取り揃えております。
                                出来れば新築ご契約前にお越しいただき、外構工事（エクステリア）をトータルで考えながら建築をご検討いただけることをお勧めいたします。
                            </p>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">リフォーム外構工事</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/tokishi/tokishi-2.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>新築時に完成した土岐市の外構工事のリフォーム工事を承っております。<br>
                                    お住まいになっていくにつれて、家族構成や周囲の環境などが変化していきます。<br>
                                    ・子供が車を持つようになったから駐車場を増やしてほしい。<br>
                                    ・雨や花粉にも左右されない洗濯物を干すスペースがほしい。<br>
                                    ・隣に家（アパートなど）が建ったから視線をふさぎたい。<br>
                                    ・お庭の雑草がすごくてどうしていいか分からない。<br>
                                    生活スタイルの変化や、お住まいになってから気づくことがたくさんございます。
                                    建物も10年や15年に一回程度の補修やメンテナンスが入ります。
                                    外構工事もお考えになってはいかがでしょうか。
                                    今にあった最適の外構工事をご提案いたします。
                                </p>
                            </div>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">エクステリア工事</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/tokishi/tokishi-3.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>各種エクステリアアイテムの設置施工も土岐市にて承っております。<br>
                                    ・カーポート、ガレージ工事…風雨時の車の乗り降りをし易くし、冬の霜からの車を守ります。<br>
                                    ・目隠しフェンス工事…気になる視線からお客様に合った種類・高さをご提案致します。<br>
                                    ・ウッドデッキ工事…建物から見ればリビングが広く見え、お庭へ出やすくなります。<br>
                                    ・物置工事…溢れ返った物の収納スペースを作ります。（タイヤ・BBQ道具など）<br>
                                    など様々なアイテムを取り揃えております。
                                    建売物件や中古物件などご購入された場合に、ご検討されてはいかがでしょうか。
                                </p>
                            </div>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">芝生、人工芝</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/tokishi/tokishi-4.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>緑豊かなお庭のご提案を土岐市にて承っております。<br>
                                    緑という色にはリラックスをさせ、心身のバランスを整える効果があります。
                                    植栽帯を配置し、休日の一息をそこで過ごしてみてはいかがでしょう。
                                    お子様と寝転がって青空を見上げてみれば、日頃のストレスから解消される一時になるでしょう。
                                    心地よい癒し空間をご提案いたします。
                                    また雑草にお困りの方、ご相談ください。お客様に合った最適なプランをご用意いたします。
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">土岐市の施工実績</h2>
                            </div>
                        </div>
                        <div class="customer-feedback-list tokishi-blog">
                            <div class="container-feedback container-blog">
                                <?php
                                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 9,
                                    'paged' => $paged,
                                    'category_name' => 'tokishi-news'
                                );
                                $the_query = new WP_Query($args);
                                ?>
                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <a href="<?php echo the_permalink(); ?>" class="customer-container">
                                            <div class="tokishi-item">
                                                <?php echo the_post_thumbnail(); ?>
                                                <div class="content">
                                                    <p class="title"><?php echo the_title(); ?></p>
                                                    <p class="desc"><?php echo the_excerpt(); ?></p>
                                                    <p class="date"><?php echo the_date('Y.m.d'); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">土岐市のお客様の声</h2>
                            </div>
                        </div>
                        <div class="customer-feedback-list">
                            <div class="container-feedback">

                            <?php
                            $args = array(
                                'post_type' => 'customer_review',
                                'posts_per_page' => -1,
                                'orderby' => 'menu_order',
                                'order' => 'ASC',
                                'meta_query' => array(
                                    array(
                                        'key' => 'location',
                                        'value' => 'tokishi',
                                        'compare' => '='
                                    )
                                )
                            );

                            $reviews = new WP_Query($args);

                            if ($reviews->have_posts()):
                                while ($reviews->have_posts()): $reviews->the_post();

                                $name = get_field('name');
                                $link = get_field('name_link');
                                $days = get_field('days_ago');
                                $rating = get_field('rating');
                            ?>

                            <div class="customer-container">
                                <div class="customer-item google-review">
                                    <p class="title"><?php the_title(); ?></p>
                                    <span></span>
                                    <div class="review-header">
                                        <div class="left">
                                            <?php if (has_post_thumbnail()): ?>
                                                <img class="profile" src="<?php the_post_thumbnail_url(); ?>" />
                                            <?php else: ?>
                                                <div class="profile placeholder"></div>
                                            <?php endif; ?>
                                            <div class="review-meta">
                                                <a href="<?php echo esc_url($link); ?>" target="_blank" class="name">
                                                    <?php echo esc_html($name); ?>
                                                </a>
                                                <p class="days"><?php echo esc_html($days); ?>日前</p>
                                            </div>
                                        </div>
                                        <img class="google-logo" src="<?php echo get_template_directory_uri(); ?>/resources/images/google_logo.png" />
                                    </div>

                                    <!-- STARS -->
                                    <div class="stars">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <svg class="star <?php echo ($i < $rating) ? 'filled' : 'empty'; ?>" viewBox="0 0 24 24">
                                                <path d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.782 1.402 8.177L12 18.896l-7.336 3.874 1.402-8.177L.132 9.211l8.2-1.193z"/>
                                            </svg>
                                        <?php endfor; ?>
                                    </div>
                                    

                                    <!-- DESCRIPTION -->
                                    <p class="desc"><?php the_content(); ?></p>

                                </div>
                            </div>

                            <?php endwhile; wp_reset_postdata(); endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="container" style="margin-bottom:50px;max-width:900px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.4418444464955!2d137.10333667684938!3d35.34467947269784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036ae598860ec3%3A0x3739ce2a57fa575e!2z77yI5qCq77yJ6LWk5Z2C6YCg5ZyS!5e0!3m2!1sja!2sjp!4v1771571064082!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php get_footer(); ?>