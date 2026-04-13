<?php
/**
 * The template for displaying First pages
 * Template Name: First
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
        <div class="index-2 page-first-1">
            <div class="title-page-2">
                <h2>初めての方へ</h2>
                <?=breadcrumbs();?>
            </div>
            <div class="container">
                <div class="row ed-index-2">
                    <div class="flower-1"></div>
                    <div class="flower-2"></div>
                    <div class="flower-4"></div>
                    <div class="flower-5"></div>
                    <div class="flower-6"></div>
                    <div class="flower-7"></div>


                    <div class="col-md-4 col-md-push-8">
                        <div class="img-index-2">
                            <img src="<?=ASSETS_PATH?>resources/images/index/first-1.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4">
                        <div class="txt-index-2">
                            <p>㈱赤坂造園は多治見市を中心に東濃エリアにて、外構工事（エクステリア）、造園工事、剪定管理を業務内容としています。<br>
                                「新築なんだけど、ハウスメーカー、工務店の外構費が高い」<br>
                                「生垣を管理が容易なフェンスにしたい」<br>
                                「素敵なお庭がほしい」など様々なお悩みに対応いたします。<br>
                                また、庭のお手入れや家周りの小工事も承ります。<br>
                                スタッフ一同親身になって対応いたします。
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="page-first-2">
                            <div class="box-ed-1">
                                <div class="set-number">
                                    <span><i class="icon-phone"></i></span>
                                </div>
                                <div class="set-title-desc">
                                    <h2>ご相談</h2>
                                    <p>ご来店、メール、お電話、FAXでも結構です。庭の写真や図面等をお持ちいただき、ご来店ください。過去の施工事例をご覧いただきお話させていただきます。</p>
                                </div>
                            </div>

                            <div class="box-ed-1">
                                <div class="set-number">
                                    <span><i class="icon-search"></i></span>
                                </div>
                                <div class="set-title-desc">
                                    <h2>現地調査</h2>
                                    <p>スタッフが現地に伺い、詳細な現地調査をいたします。</p>
                                </div>
                            </div>

                            <div class="box-ed-1">
                                <div class="set-number">
                                    <span><i class="icon-leaf"></i></span>
                                </div>
                                <div class="set-title-desc">
                                    <h2>ご提案 <span>(プランニング)</span></h2>
                                    <p>お客様のライフスタイルに合ったあなた様だけの特別なプランをご提案させていただきます。※お見積りは無料でさせていただきます。ご契約後、図面作成いたします。</p>
                                </div>
                            </div>

                            <div class="box-ed-1">
                                <div class="set-number">
                                    <span><i class="icon-handshake-o"></i></span>

                                </div>
                                <div class="set-title-desc">
                                    <h2>ご<span class="gothic">契</span>約</h2>
                                    <p>ご契約書を締結いたします。<br>
                                        着手前、完了後には、スタッフが近隣の方にご挨拶させていただきます。変更があれば何回でも、打ち合わせをし、その都度ご相談いたします。</p>
                                </div>
                            </div>

                            <div class="box-ed-1">
                                <div class="set-number">
                                    <span><i class="icon-garden"></i></span>

                                </div>
                                <div class="set-title-desc">
                                    <h2><span class="gothic">施</span>工</h2>
                                    <p>弊社現場スタッフ、職人が責任を持って施工し、状況を管理いたします。工事は様々な工事の経験を積んだ職人が施工いたしますので、ご安心ください。</p>
                                </div>
                            </div>

                            <div class="box-ed-1">
                                <div class="set-number">
                                    <span><i class="icon-doc-text-inv"></i></span>

                                </div>
                                <div class="set-title-desc">
                                    <h2>お引<span class="gothic">渡</span>し</h2>
                                    <p>最後に現場を綺麗に掃除してお引渡しとなります。エクステリアはアルミメーカーなどの保証書をお渡しいたします。</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>