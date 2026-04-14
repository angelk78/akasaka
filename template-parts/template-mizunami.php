<?php

/**
 * The template for displaying mizunami pages
 * Template Name: mizunami
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
                    <h2><span class="gothic">瑞浪市で<br>外構工事・エクステリア工事・造園工事をお考えの方</h2>
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
                                    <span class="gothic">瑞浪市で新築に伴う外構工事（エクステリア）を承っております。</span>
                                </h2>
                            </div>
                        <div class="img-company-1 text-center">
                            <img src="<?= ASSETS_PATH ?>resources/images/mizunami/mizunami-1.png" class="" alt="" class="margin-bottom:20px;">
                        </div>
                            <div class="sub-desc">
                                <p>いろいろな夢を描いて瑞浪市で新築をお建てになったと思います。建築工事は建物半分、外構工事半分で完成だとお考え下さい。建物を最大限に引き立てることのできる外構工事、それはお客様の理想（夢）の世界を作る仕事です。理想を壊さぬよう、実現して作り上げるのが赤坂造園です。お客様と直接接することで、モノづくりではなく、思い出作りをできる環境を作る。それが赤坂造園の使命だと思っております。
<br />赤坂造園では10年、20年先の安心をお届けする外構工事を心がけております。メーカー規定、エクステリア学会規定の基礎や構造。各種撥水材を塗布することで自然災害にも強く、キレイな状態を維持できるエクステリアを実現。美しく丈夫でありながら、安心価格にも自信があります。
<br />瑞浪市のお客様が不安のなか期待をしてお問い合わせいただき、その期待に応えられるよう、常に新しい情報を取り入れ、時代の流れに柔軟に対応してお客様のニーズをくみ取りながら打ち合わせ・外構工事をしてまいります。


</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">瑞浪の施工事例</h2>
                            </div>
                        </div>
                        <div class="title-sub-page exterior">
                            <span class="gothic">リフォーム外構工事</span>
                        </div>
                        <div class="img-company-1 text-center">
                            <img src="<?= ASSETS_PATH ?>resources/images/mizunami/mizunami-2.png" class="" alt="">
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>リフォーム外構工事とは家の外観をデザインする構造物のリフォームになります。リフォーム外構工事のタイミングとしては、初めの工事時期から15年～20年ぐらいたったぐらいで一度ご検討いただくといいかもしれません。これはあくまでも目安で、使用されている商材によって期間は変わってきます。例えば天然木の商材などは場合によって早かったりしますし、日当たりがいいところや陰るところによっても痛みの違いは出てきます。
<br />またどこに依頼していいか迷われると思います。まずは新築時に工事をされた外構業者に依頼することをお勧めします。当時の状況も把握されていると思いますし、一番状況を知っているでしょう。次に比較対象として他社に話を聞くことも重要です。この場合の業者選びになりますが、下請け業者を使っている会社かどうかというところです。打ち合わせ時に確認をしてみてください。自社で一貫して工事をしているところと、下請け業者を使うところではマージンが発生するかで価格帯が大きく変わってきます。
<br />赤坂造園では打ち合わせから工事に関して自社一括管理をしています。適正価格を大事にしていますので一度ご連絡ください。


                            </p>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">瑞浪のエクステリア工事</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/mizunami/mizunami-3.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>各種エクステリアアイテムの設置施工も瑞浪市にて承っております。<br />
・カーポート、ガレージ工事…大切なお車やバイクを悪天候や飛来物による破損や盗難などのリスクからしっかり守ってくれます。<br />
・テラス屋根工事…雨や日差しの悩みを軽減し、洗濯物が濡れる心配が少なくなります。<br />
・目隠しフェンス工事…気になる視線からお客様に合った種類・高さをご提案致します。<br />
・ウッドデッキ工事…建物から見ればリビングが広く見え、お庭へ出やすくなります。<br />
・ブロック積み工事…土留めのブロックや老朽化したブロック塀の積みなおし工事などを行います。ブロックも様々なデザインがあります。現場ごとに合ったアイテムをご提案致します。
建売物件や中古物件などご購入された場合に、ご検討されてはいかがでしょうか。


                                </p>
                            </div>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">瑞浪の芝生、人工芝</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/mizunami/mizunami-4.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>天然芝、人工芝ではそれぞれメリットがあります。どちらに当てはまるか確認下さい。<br />
天然芝の場合<br />
・初期コストを抑えたい方。<br />
・自然な見た目・手触りにこだわる方。<br />
・四季の移ろいや植物の育成を楽しみたい方。<br />
・お庭でバーベキューを楽しみたい方。<br />
人工芝の場合<br />
・草むしりが苦手、時間がない方。<br />
・お庭の日当たりが悪い方。<br />
・一年中青々とした庭を楽しみたい方。<br />
・お庭でゴルフの練習や子供のサッカーを楽しみたい方。<br />
上記にあげた例は一部になりますが、どちらが多く当てはまっているかで選択いただければと思います。赤坂造園ではお客様にあった商品をご提案させていただきます。


                                </p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">瑞浪市の施工実績</h2>
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
                                    'category_name' => 'mizunami-news'
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
                                <h2><span class="gothic">瑞浪市のお客様の声</h2>
                            </div>
                        </div>
                        <div class="customer-feedback-list">
                            <div class="container-feedback">
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">瑞浪市にて新築外構をお願いしました。</p>
                                        <span></span>
                                        <p class="desc">他社より断然お値段を安くして下さり、価格の安さに興味を持ちました。最終的に依頼の決め手となったのは現地調査時のご対応で希望に対し、的確にアドバイスやご提案をいただき任せても大丈夫かも!との判断に至りました。施工の職人さん方も礼儀正しく一生懸命良い仕事をしていただきました。もちろん、施工後も大変満足しています。ありがとうございました。
</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">人工芝の肌触りが良く大変満足しています。</p>
                                        <span></span>
                                        <p class="desc">新築外構をお願いしました。いくつかの会社に見積もりを依頼した中で、1番お安く、予算内でとてもカッコ良い提案をしていただきました。人工芝の肌触りが良く、犬も元気に走り回ってくれているので、大変満足しています。母の植えていたバラ周りにレンガを置いてくださって、おしゃれなお庭にしていただきました。お庭が素敵になったので、ガーデニング意欲が増したようです。お忙しい中、ありがとうございました。
</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">希望に合った良いプランを出していただきました。</p>
                                        <span></span>
                                        <p class="desc">こちらの要望を細かく聞いてくださって、希望に合った良いプランを出していただきました。施工中も平日は仕事で留守のことが多かったので心配しておりましたが、営業さんが来てくださったり、まめに連絡をくださって、安心することが出来ました。施工後は、リビングからの景色がスッキリして色もデザインも全て大変気に入っております。本当にありがとうございました。</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">職人の方々が素敵なお庭を作ってくださりました。</p>
                                        <span></span>
                                        <p class="desc">私たちの好みをつたない話からくみとり、予想以上の提案をしていただきました。しかも予算内に納まるようにしていただき助かりました。また、安全面の配慮もありがたかったです。庭いじりの経験はほぼゼロでしたが、夫婦そろってハマりました。それも営業さんはじめ、職人の方々が素敵なお庭を作ってくださったおかげです。本当にありがとうございました。</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">瑞浪市の新築外構をお願いしました。</p>
                                        <span></span>
                                        <p class="desc">今回は本当にありがとうございました。施工前の打ち合わせから担当営業さんには丁寧にわかりやすく説明など現場ではわかりやすく教えて頂きました。門扉の使い方など参考になりました。ポストの位置なども大変満足です。
現場に来られた方達も素敵な笑顔でした。価格については、予算以内で良心的な価格だったと思います。ありがとうございました。
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-tokishi-page">
                            <div class="col">
                                <p>瑞浪市市周辺で外構工事・エクステリア・ガーデニング・リフォーム外構工事のことならの㈱赤坂造園にお任せください。せっかくの外構工事・エクステリア工事をデザインの妥協はしたくない。生活スタイルに合わせたい。瑞浪市にお住いのそんな方へ。</p>
                            </div>
                            <div class="col">
                                <img src="<?= ASSETS_PATH ?>resources/images/mizunami/mizunami-5.png" class="" alt="">
                            </div>
                        </div>
                        <div class="tokishi-text">
                            <p>
瑞浪市の外構工事・エクステリア専門店㈱赤坂造園が「お家の額縁」となるエクステリアを実現し、お客様の満足をご提供します。は建物を際立たせる効果があります。創業７０年で培った技術・知識でお客様をお迎えいたします。<br>
もちろん相談に関する費用はすべて無料です。まずはお気軽にご相談ください。
</p>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">瑞浪対応エリア</h2>
                            </div>
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>以下の瑞浪市が対応エリアです。（対応に入っていなくてもご相談下さい！）</p>
                            <p>明世町月吉 明世町戸狩 明世町山野内 一色町 稲津町小里 稲津町萩原 上平町 上野町 大湫町 小田町 釜戸町 学園台 北小田町 下沖町 陶町大川 陶町猿爪 陶町水上 須野志町 高月町 樽上町 寺河戸町 西小田町 日吉町 穂並 益見町 松ケ瀬町 南小田町 宮前町 明賀台 薬師町 山田町 和合町
</p>
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