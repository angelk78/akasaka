<?php

/**
 * The template for displaying kasugaishi pages
 * Template Name: kasugaishi
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
                    <h2>春日<span class="gothic">井</span>で<br>外構工事・エクステリア工事・造園工事をお考えの方</h2>
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
                                    <span class="gothic">春日井で外構工事（エクステリア）を承っております。</span>
                                </h2>
                            </div>
                        <div class="img-company-1 text-center">
                            <img src="<?= ASSETS_PATH ?>resources/images/kasugaishi/kasugaishi-1.png" class="" alt="" class="margin-bottom:20px;">
                        </div>
                            <div class="sub-desc">
                                <p>愛知県 春日井で外構工事・エクステリア工事をどこにお願いしていいか分からない方は赤坂造園にご相談ください。そもそも「外構工事」とはどんな意味でしょうか。<br />
家の外回りのことを総称して外構工事と言います。外構工事は以下のような複数の工種に分かれています。<br />
・土間コンクリート工事：駐車場やアプローチなど<br />
・造園工事：植栽など<br />
・電気工事：屋外照明やインターホンなど<br />
・左官工事：門塀などの左官（塗り）仕上げ<br />
・水道工事：給排水や水栓設置など<br />
・アルミ工事：カーポート、フェンス、テラス屋根、サンルームなど<br />
外構工事は「家を建てた建築会社に施工してもらう」と思われがちですが、愛知県春日井市でも最近の傾向からすると専門の外構業者にお願いすることが増えています。<br />
上記で分けた工種の中にそれぞれ商品アイテムが何千・何万という種類があり、外構のデザインや高低差などを考えて使いやすさを考えると、専門の業者にお願いするほうが間違いのない外構工事に仕上がります。<br />
赤坂造園は創業７０年を超える実績のなかで、数多くの施工事例を積み上げてきました。愛知県春日井市にお住まいで新築外構工事をどこにお願いしていいかお悩みでしたら、赤坂造園に一度ご連絡ください。

</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">春日井の施工事例</h2>
                            </div>
                        </div>
                        <div class="title-sub-page exterior">
                            <span class="gothic">リフォーム外構工事</span>
                        </div>
                        <div class="img-company-1 text-center">
                            <img src="<?= ASSETS_PATH ?>resources/images/kasugaishi/kasugaishi-2.png" class="" alt="">
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>リフォーム外構工事とは家の外観をデザインする構造物のリフォームになります。具体的には門扉や門柱、カーポートやフェンス、玄関アプローチのほか、庭や植栽、照明関係など建物の外観にかかわるすべての物が含まれます。
お住まいになっていくにつれて、家族構成や周囲の環境などが変化していきます。
リフォーム外構を成功させる大切なことは「行う目的を明確にする」ことです。<br />
・隣にあった家が解体され丸見えになってしまったので目隠しをしたい。<br />
・生垣を植えていたが刈る作業が手間なので手軽なものに変えたい。<br />
・車の台数が増えたので駐車場を増やして、カーポートもほしい。<br />
・天然のウッドデッキが朽ちてきて腐らないデッキに交換したい。<br />
・夜間に駐車場や玄関回りが暗いので明るくして、歩きやすくしたい。<br />
生活スタイルの変化や、お住まいになってから気づくことがたくさんございます。建物も10年や20年に一度メンテナンスが入るように、愛知県春日井市にお住まいの方、外構工事に関してもお考えになってはいかがでしょうか。

                            </p>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">春日井のエクステリア工事</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/kasugaishi/kasugaishi-3.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>各種エクステリアアイテムの設置施工も愛知県春日井市にて承っております。<br />
・カーポート、ガレージ工事…風雨時の車の乗り降りをし易くし、冬の霜からの車を守ります。<br />
・テラス屋根工事…洗濯物干し場やストックヤードなど雨をしのげる屋根を設置します。<br />
・目隠しフェンス工事…気になる視線からお客様に合った種類・高さをご提案致します。<br />
・ウッドデッキ工事…建物から見ればリビングが広く見え、お庭へ出やすくなります。<br />
・ブロック積み工事…土留めのブロックや老朽化したブロック塀の積みなおし工事などを行います。ブロックも様々なデザインがあります。現場ごとに合ったアイテムをご提案致します。<br />
建売物件や中古物件などご購入された場合に、ご検討されてはいかがでしょうか。

                                </p>
                            </div>
                        </div>
                        <div class="exterior-sample">
                            <div class="title-sub-page exterior">
                                <span class="gothic">春日井の芝生、人工芝</span>
                            </div>
                            <div class="img-company-1 text-center">
                                <img src="<?= ASSETS_PATH ?>resources/images/kasugaishi/kasugaishi-4.png" class="" alt="">
                            </div>
                            <div class="txt-index-2 tokishi-desc">
                                <p>ご家族でリラックスのできる緑豊かなお庭のご提案を承っております。緑という色にはリラックスをさせ、心身のバランスを整える効果があります。植栽帯を配置し、休日の一息をそこで過ごしてみてはいかがでしょう。
<br>クッション性が高いため、お子様やペットと遊ぶスペースとしても活用することもできる場所にもなります。天然芝や人工芝とありますがそれぞれにメリットがあり、お施主様に合わせてご提案させていただきます。また雑草にお困りの愛知県春日井市の方、ご相談ください。お客様に合った最適なプランをご用意いたします。

                                </p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">春日井の施工実績</h2>
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
                                    'category_name' => 'kasugai-news'
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
                                <h2><span class="gothic">春日井のお客様の声</h2>
                            </div>
                        </div>
                        <div class="customer-feedback-list">
                            <div class="container-feedback">
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">新築戸建ての外回りのブロック積みをお願いしました。</p>
                                        <span></span>
                                        <p class="desc">春日井にて新築戸建ての外回りのブロック積みをお願いしました。「価格」ハウスメーカーの6割程度で100万近く安くなりました。他の地域外構屋さんよりも10万以上安かったです。「施工」問題ありません。綺麗に仕上げて頂きました。新しく購入した土地でしたので、隣地に迷惑をかけて心象を悪くしたくない思いがありましたが、しっかり配慮して施工してもらえました。また、後々の外構計画や使い方も含めてご提案頂き、ブロック施工だけではなく、後々のことも考えたご提案でとても好感をもてました。素人ではわからない点もしっかり説明頂きました。
</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">嫌な顔せず快く対応して頂きました！</p>
                                        <span></span>
                                        <p class="desc">色々後からも注文させて頂いてそれでも嫌な顔せず快く対応して頂き仕上がりも細かいところまで細部に丁寧にやって頂きとても満足しています。他の外構屋さんだと下請けの方にお願いするようですが、赤坂造園さんは、社員の方が施工されているようで、教育が行き届き安心でした。現場をチラッと見に行っても、社員の方が笑顔で対応してくれました。</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">金額的にもとてもお値打ちにやっていただけて、仕上がりもとても綺麗でした！</p>
                                        <span></span>
                                        <p class="desc">今回、畑と駐車場として使っていた場所を、綺麗にしたくてご相談させていただきました。他社さんと比べても金額的にもとてもお値打ちにやっていただけて、仕上がりもとても綺麗でした！こちらの要望にもアドバイスくださったり、隣の春日井市ですが思っていたより早く進めてくださり、思い通りのお庭ができて、とても嬉しいです！ありがとうございました！</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">自宅のウッドデッキの施工をお願いしました。</p>
                                        <span></span>
                                        <p class="desc">愛知県の春日井市で自宅のウッドデッキの施工をお願いしました。お見積から施工までとても丁寧かつ迅速に対応して頂いて家族みんな大満足です！！また次回何かあれば是非お願いしたいと思います。</p>
                                    </div>
                                </div>
                                <div class="customer-container">
                                    <div class="customer-item">
                                        <p class="title">春日井市の新築外構工事ありがとうございました！</p>
                                        <span></span>
                                        <p class="desc">知り合いに赤坂造園さんを紹介してもらい、すぐに見積もりをくださり、予算内で思っていた外構工事が出来る事がわかりお願いしました。仕上がりも職人さんの小さなお気遣いでタイルデッキは段差のなだらかな綺麗な仕上がりになっていて感動しました。また、困ったことがあったら相談させていただきたいです！ありがとうございました。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-tokishi-page">
                            <div class="col">
                                <p>春日井周辺で外構工事・エクステリア・ガーデニング・リフォーム外構工事のことならの㈱赤坂造園にお任せください。外構工事・エクステリアには建物を際立たせる効果があります。創業７０年で培った技術・知識でお客様をお迎えいたします。</p>
                            </div>
                            <div class="col">
                                <img src="<?= ASSETS_PATH ?>resources/images/kasugaishi/kasugaishi-5.png" class="" alt="">
                            </div>
                        </div>
                        <div class="tokishi-text">
                            <p>
春日井のエクステリアに関することを相談したいけど、どこに頼めば良いか分からない、時間が無いなどでお悩みの方、当社では、お客様のご都合のいい時間に合わせて経験豊富なプロがお伺いし、お客様のお悩みにお応えします。もちろん相談に関する費用はすべて無料です。まずはお気軽にご相談ください。</p>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">春日井対応エリア</h2>
                            </div>
                        </div>
                        <div class="txt-index-2 tokishi-desc">
                            <p>以下の愛知県の春日井が対応エリアです。（対応に入っていなくてもご相談下さい！）</p>
                            <p>愛知町 明知町 旭町 朝宮町 浅山町 味美上ノ町 味美町 味美西本町 味美白山町 穴橋町 石尾台 稲口町 杁ケ島町 岩成台 岩野町 上野町 牛山町 内津町 梅ケ坪町 王子町 大手田酉町 大手町 大留町 小木田町 押沢台 乙輪町 小野町 神屋町 柏原町 柏井町 春日井上ノ町 春日井町 勝川新町 勝川町 勝川町西 金ケ口町 上田楽町 上ノ町 菅大臣町 北城町 木附町 気噴町 気噴町北 貴船町 熊野町 熊野町北 黒鉾町 下条町 高蔵寺町 高蔵寺町北 ことぶき町 西尾町 坂下町 桜佐町 篠木町 篠田町 下市場町 下津町 下原町 下屋敷町 庄名町 白山町 新開町 神明町 十三塚町 上条町 神領町 神領町北 関田町 惣中町 宗法町 鷹来町 高座台 高座町 高森台 高山町 玉野台 玉野町 田楽町 大泉寺町 知多町 中央台 中央通 町田町 追進町 月見町 角崎町 出川町 天神町 外之原町 鳥居松町 中切町 中新町 中野町 中町 長塚町 西高山町 西本町 西屋町 西山町 如意申町 廻間町 八幡町 八光町 八田町 花長町 林島町 春見町 東神明町 東野新町 東野町 東野町西 東山町 不二ガ丘 不二町 藤山台 二子町 細木町 細野町 堀ノ内町 堀ノ内町北 前並町 町屋町 松河戸町 松新町 松本町 瑞穂通 南下原町 南花長町 美濃町 御幸町 妙慶町 桃山町 森山田町 八事町 大和通 弥生町 四ツ家町 六軒屋町 六軒屋町西 若草通 割塚町</p>
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