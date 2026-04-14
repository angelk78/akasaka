<?php

/**
 * The template for displaying Tokishi pages
 * Template Name: Kanishi
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
                    <h2>可児市での<br />外構工事・エクステリア工事・造園工事をお考えの方</h2>
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
                                    <span class="gothic">可児市のお客様に寄り添ったご提案をいたします</span>
                                </h2>
                            </div>
                            <div class="sub-desc">
                                <p>多くのお客様は初めてのことが多くて心配をたくさん抱えていらっしゃいます。そしてその悩みは人それぞれで、答えも一つと限りません。<br>
                                ・プラン、設計はこれで本当にいいのか<br>
・専門用語が分からない、見積内容も何が正解なの。<br>
・建売を買ったけど、ここの段差でいつもつまずく。<br>
そんな不安を少しでも取り除き、一つでも多くの夢がかなえられるように。可児市のお客様それぞれの最善の答えを一緒に探せるように、常に「自分の家の外構工事を作っている気持ち」になって皆様の外構工事づくりを精一杯お手伝い致します。

</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">可児市の施工事例</h2>
                            </div>
                        </div>
                        <div class="title-sub-page exterior">
                            <span class="gothic">新築外構工事</span>
                        </div>
                        <div class="img-company-1 text-center">
                            <img src="<?= ASSETS_PATH ?>resources/images/kanishi/1.png" class="" alt="">
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>新築に伴う可児市の外構工事（エクステリア）を承っております。<br>
初めてお家を建てて、たくさんの打ち合わせ・契約を結ばれてお疲れだと思います。最後の外構工事を何も考えず建築会社に任せようとしていませんか。建築会社に丸投げにせず、可児市の外構工事専門会社に相談してみてください。
パッと上げるメリットだけでも下記があります。<br>
・専門の知識や経験を持っているため、失敗や後悔が少ない。<br>
・適正価格で工事ができる。（建築会社に依頼しても施工をするのは外構工事業者のため）<br>
・理想を詰め込んだオリジナリティの高いデザインのご提案が可能。<br>
建物をさらに際立たせることのできる外構工事（エクステリア）です。<br>
住みやすい快適な外空間をご一緒に考えませんか。<br>
またそれらを彩るエクステリアメーカー・商材（アイテム）は幅広く取り揃えております。出来れば新築ご契約前にお越しいただき、外構工事（エクステリア）をトータルで考えながら建築をご検討いただけることをお勧めいたします。

                            </p>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">リフォーム外構工事</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/kanishi/2.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>新築時に完成した可児市の外構工事のリフォーム工事を承っております。こんな悩みを持たれた方がお庭のリフォームをしています。<br>
・外の視線が気になりカーテンを開けられない。<br>
・車を降りてから家まで雨に濡れてストレス。<br>
・子供や孫、ペットが安全に遊べる場所がない。<br>
・雨や花粉にも左右されない洗濯物を干すスペースがほしい。<br>
・タイヤやキャンプ用品、自転車など収納が入りきらない。<br>
・お庭の雑草がすごくて草むしりが面倒くさい。<br>
生活スタイルの変化や、お住まいになってから気づくことがたくさんございます。建物も10年や15年に一回程度の補修やメンテナンスが入ります。外構工事もお考えになってはいかがでしょうか。今にあった最適の外構工事をご提案いたします。

                                </p>
                            </div>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">エクステリア工事</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/kanishi/3.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>各種エクステリアアイテムの設置施工も可児市にて承っております。<br>
                                    ・カーポート、ガレージ工事…風雨時の車の乗り降りをし易くし、冬の霜からの車を守ります。<br>
・目隠しフェンス工事…気になる視線からお客様に合った種類・高さをご提案致します。<br>
・ウッドデッキ工事…建物から見ればリビングが広く見え、お庭へ出やすくなります。<br>
・手すり工事…上がりづらい階段、お子様が落下する危険な箇所はございませんか。<br>
・駐車場拡張…車が増えて駐車箇所を増やしたい。土間コンクリートを打ち増したい。<br>
など様々なご要望にお応えいたします。建売物件や中古物件などご購入された場合に、ご検討されてはいかがでしょうか。

                                </p>
                            </div>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">芝生、人工芝</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/kanishi/4.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>緑豊かなお庭のご提案を可児市にて承っております。<br>
                                    ・雑草の手入れが大変<br>
・水はけ＆日当たりが悪い箇所はコケ交じりの土になって見た目が悪い<br>
・子供、犬が遊べる庭にしたい<br>
上記のようなお悩みはお持ちではないでしょうか。また緑という色にはリラックスをさせ、心身のバランスを整える効果があります。植栽帯を配置し、休日の一息をそこで過ごしてみてはいかがですか。お子様と寝転がって青空を見上げてみれば、日頃のストレスから解消される一時になるでしょう。心地よい癒し空間をご提案いたします。

                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">可児市の施工実績</h2>
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
                                    'category_name' => 'kanishi-news'
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
                                <h2><span class="gothic">可児市のお客様の声</h2>
                            </div>
                        </div>
                        <div class="customer-feedback-list">
                            <div class="container-feedback">
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">可児市の新築の外構を依頼させて頂きました。</p>
                                        <span></span>
                                        <p class="desc">着工前から竣工後まで、丁寧に対応頂きました。専務の方、担当者の方も気さくな方々で、こちらの要望もしっかり汲み取って頂けたので非常に満足しております。作業の進捗を丁寧に伝えて頂ける点も好感度が高いです。価格も他社と比べて、非常に良心的なので助かりました。今後も赤坂造園さんにお願いしようと思います。</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">車の出入りが困難で困っていました</p>
                                        <span></span>
                                        <p class="desc">早くなんとかしたいと思い、電話して相談したところ、迅速な対応をしてくださり、お値段も良心的でとても助かりました。また何かの際にはお願いしたいです。可児市の外構をどこでやるか迷っている人にはぜひ、赤坂造園をおすすめしたいです！</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">この度はありがとうございました。！</p>
                                        <span></span>
                                        <p class="desc">着工前にいろいろ要望しましたが、都度提案していただき、プレゼン通りの仕上がりになりました。職人様も土木から外構、エクステリア水道設備　各業者様とても段取りよく対応してもらえます。</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">可児市の新築の外構をお願いしました。</p>
                                        <span></span>
                                        <p class="desc">価格が良心的でした！理由を聞くと、自社施工できることが多く、地域で多くの件数も行っていることから比較的安く行えるとのことです。施工も丁寧ですし、アフターフォローもしっかりしており、不具合のある商品の取替対応もすぐに行っていただけました。信頼できる業者さんだと思います。知り合いで外構を考えている人がいたら紹介しようと思える会社です！</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">ここの外構屋さんはすごかったです！</p>
                                        <span></span>
                                        <p class="desc">可児市の友人の紹介で教えてもらったのですが、、営業さんから職人さんまで気さくに対応してくれましたし、この値段帯ならこれっ！とはっきりと伝えてくれる知識と自信が感じられました。結果安心してしまい決定。もっと考えといた方が良かったのかもと後から後悔するも出来上がりが自分の想像通りで、あープロに任せるとこんなにもストレスないのかって感動しました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-tokishi-page">
                            <div class="col">
                                <p>赤坂造園は創業60年になります。<br>
その中でたくさんのお客様と出会い、たくさんの完成現場に立ち会いさせていただきました。工事を進める中で雨にうたれ作業することも、手がかじかみながら夜遅くまで作業することもありました。それも完成現場でお施主様のキラキラした目をみたり、お子様が走り回ったりする姿を見て、それまでの作業が報われてきました。
さらにお客様をご紹介いただいたときは、認めていただけたと非常にうれしく感じてきました。
</p>
                            </div>
                            <div class="col">
                                <img src="<?= ASSETS_PATH ?>resources/images/kanishi/5.png" class="" alt="">
                            </div>
                        </div>
                        <div class="tokishi-text">
                            <p>私たちが大切にしていることは「お客様に寄り添う」ということです。
ほとんどのお客様が最初で最後の外構工事になります。
後悔の無い、満足いく外構工事を目指しています。
また打ち合わせの時に雑談をすることがあります。
この雑談の中にお客様の真の気持ちが隠されています。趣味だったり、休日の時間の過ごし方や好きなカラーなど色々なヒントがあります。
それらを全て踏まえて図面に落とし込みます。
デザインに使いやすさを落としこんでオンリーワンのご提案を目指しています。
お悩み事、困りごとがございましたら、赤坂造園に一度ご連絡をくださいませ。</p>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">可児市対応エリア</h2>
                            </div>
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>以下の可児市の町が対応エリアです。（対応に入っていなくてもご相談下さい！）</p>
                            <p>兼山　川合　中恵土　中恵土 下恵土 禅台寺 徳野南 土田 今渡 川合北 下恵土 渕之上 柿田 瀬田 広見 石井 石森 平貝戸 松伏 あけち 広眺ケ丘 羽崎 羽生ケ丘 久々利 星見台 緑ケ丘 二野 柿下 久々利柿下入会 桜ケ丘 皐ケ丘 桂ケ丘 大森 大森台 みずきケ丘 坂戸 谷迫間 下切 今 塩河 清水ケ丘 姫ケ丘 美里ケ丘 塩 矢戸 室原 長洞 光陽台 東帷子 長坂 若葉台 愛岐ケ丘 虹ケ丘 菅刈 緑 鳩吹台 西帷子 帷子新町</p>
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