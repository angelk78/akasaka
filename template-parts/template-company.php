<?php

/**
 * The template for displaying Company pages
 * Template Name: Company
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
        <div class="index-2 page-first-1 company-page">
            <div class="title-page-2">
                <h2>会社案内</h2>
                <?= breadcrumbs(); ?>
            </div>
            <div class="container">
                <div class="row ed-index-2">
                    <div class="flower-1"></div>
                    <div class="flower-2"></div>
                    <div class="flower-4"></div>
                    <div class="flower-5"></div>
                    <div class="flower-6"></div>
                    <div class="flower-7"></div>

                    <div class="col-sm-12">
                        <div class="title-sub-page">
                            <h2><span class="gothic">企</span>業理念<br>- 赤坂造園について -</h2>
                        </div>
                    </div>
                    <div class="img-company-1 text-center">
                        <img src="<?= ASSETS_PATH ?>resources/images/index/company-1.png" class="" alt="">
                    </div>
                    <div class="txt-index-2">
                        <p>空間造りを通して社会に貢献し、信頼を重ね、従業員とその家族が幸せに暮らせる会社を目指す。<br>
                            人々の家の周りの空間に関わる会社として、誠実な仕事を積み重ね、お客様や地域からの喜びや信頼を得ること。地域貢献、それが「働きがい」となり自分たちの幸せにも繋がっていると考えます。</p>
                    </div>

                    <div class="">
                        <div class="title-sub-page">
                            <h2>代表メッセージ</h2>
                        </div>
                        <!-- <div class="company-director-image col-md-5">
                        <img src="<?= ASSETS_PATH ?>resources/images/index/company.jpg" alt="">
                    </div> -->
                        <div class="txt-company-page">

                            <p><img src="<?= ASSETS_PATH ?>resources/images/index/company.jpg" alt="" class="alignleft">私は、2代続く庭師の長男として生まれました。高校卒業後、愛知県の造園会社で修業し、弊社に戻って参りました。現在、昔と違い、古風なお庭が減ってきて、樹木を撤去して、フェンスにしてくれという現場が多くなってきました。そこで、私はこの伝統的な造園技術を残しつつ、お客様のニーズに合した新しい事をやっていこうと、外構（エクステリア）工事を始めました。当初、ハウスメーカーの外構工事がメインでしたが、次第に信頼を得て、20年ほど前からエンドユーザーとの直の仕事や公共工事が増えました。今現在、設計営業スタッフが3名、外構スタッフが3名、造園スタッフが3名、事務が1名と総勢10名となっています。当社のデザインは、自然素材を使ったシンプルなナチュラルモダンの提案が多いですが、和の石を洋風に使うなど、一味違った工夫もしております。造園を学んだため、植木に詳しいのも強みで現場に応じて、木を配植したり、剪定のアドバイスをしたりします。弊社は下請け業者が入らず、自社スタッフで施工をするため、作業のクオリティはそのままに中間マージンが発生しないため、コストを抑えることができます。見積、図面作成には自信があります。是非とも、他社さんと比べてみてください。自分が生まれ育ったこの東濃に関わる人たちの笑顔と環境のため、私たちは努力してまいります。今後とも赤坂造園をよろしくお願いいたします。</p>
                            <h5>代表取締役　丹羽利根</h5>
                        </div>

                        <ul class="table-company">
                            <li>
                                <span class="set-col-1">商号</span>
                                <span class="set-col-2">株式会社赤坂造園</span>
                            </li>
                            <li>
                                <span class="set-col-1">本社</span>
                                <span class="set-col-2">〒507-0054　岐阜県多治見市宝町11-7<br>
                                    TEL / 0572-22-8386　 FAX / 0572-25-8838</span>
                            </li>
                            <li>
                                <span class="set-col-1">代表者</span>
                                <span class="set-col-2">代表取締役　丹羽利根</span>
                            </li>
                            <li>
                                <span class="set-col-1">資本金</span>
                                <span class="set-col-2">1000万円</span>
                            </li>
                            <li>
                                <span class="set-col-1">従業員数</span>
                                <span class="set-col-2">10名</span>
                            </li>
                            <li>
                                <span class="set-col-1">取引先銀行</span>
                                <span class="set-col-2">岐阜信用金庫、東濃信用金庫、ゆうちょ銀行</span>
                            </li>
                            <li>
                                <span class="set-col-1">営業種目</span>
                                <span class="set-col-2">エクステリア工事、外構工事、造園工事、緑地管理</span>
                            </li>
                            <li>
                                <span class="set-col-1">建設業許可</span>
                                <span class="set-col-2">岐阜県知事許可（般）第15077号<br>造園工事業、土木工事業、とび・土工工事業</span>
                            </li>
                            <li>
                                <span class="set-col-1">法人プロフィール</span>
                                <span class="set-col-2"><a href="https://info.gbiz.go.jp/hojin/ichiran?hojinBango=6200001020442" target="_new" rel="noopener noreferrer" style="text-decoration:underline;color:#18477d">経済産業省　法人プロフィール</a><br>
<a href="https://www.houjin-bangou.nta.go.jp/henkorireki-johoto.html?selHouzinNo=6200001020442" target="_new" rel="noopener noreferrer" style="text-decoration:underline;color:#18477d">国税庁　法人番号公表サイト</a>
</span>
                            </li>
                            <li>
                                <span class="set-col-1">加入団体</span>
                                <span class="set-col-2">岐阜県緑化造園協会、多治見商工会議所、多治見法人会、多治見青年会議所</span>
                            </li>
                            <li>
                                <span class="set-col-1">保有資格</span>
                                <span class="set-col-2"><span>1級造園施工管理技士</span>3名<br>
                                    <span>2級造園施工管理技士</span>3名<br>
                                    <span>2級土木施工管理技士</span>3名<br>
                                    <span>樹木医補</span>1名<br>
                                    <span>1級造園技能士</span>2名<br>
                                    <span>農薬管理指導士</span>2名</span>
                            </li>
                        </ul>
<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.436365859975!2d137.1031707121608!3d35.34481547258385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036ae598860ec3%3A0x3739ce2a57fa575e!2z77yI5qCq77yJ6LWk5Z2C6YCg5ZyS!5e0!3m2!1sja!2sjp!4v1735096556298!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>