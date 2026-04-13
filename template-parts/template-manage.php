<?php
/**
 * The template for displaying Manage pages
 * Template Name: Manage
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

<style>
    .slick-track{
        height: auto;
    }
    .slide-exer .regular3 .slick-dots, .slide-exer .regular4 .slick-dots{
        bottom: -30px;
    }
    .slick-dotted.slick-slider{
        margin-bottom: 80px;
    }
    @media (max-width: 552px) {
    .slide-exer.slide-exer-left > i{
        bottom: -40px;
    }
}
</style>

    <section class="wrapper">
        <div class="page-first page-garden ">
            <div class="bg-page-sub"></div>

            <div class="index-2 page-first-1">
                <div class="title-page-2" id="sentei-bassai">
                    <h2><span class="gothic">剪</span>定・管理 </h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">剪定・管理 </li>
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

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">剪</span>定・<span class="gothic">伐</span>採</h2>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>人間が髪を切るように、植木にも定期的な枝葉の剪定が必要です。<br>
                                    また、「木が大きくなりすぎて困っている」とお悩みの方、場所事に最適な剪定をいたします。<br>
                                    枯木、倒木の恐れのある木、土地の整理等で伐らなくては、いけない木は、ございませんか。伐採が困難な大木は、大型クレーンを使用して上から細かく切っていきます。伐採後の抜根や、樹木の根上がりなど、ご相談ください。</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/01_1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/01_2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-left">
                                <i class="fa fa-angle-right"></i>
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/01_3.jpg" class="img-responsive" alt="">
                                            <p>伐採前</p>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/01_4.jpg" class="img-responsive" alt="">
                                            <p>伐採後</p>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page" id="kusakari">
                                <h2>草<span class="gothic">刈</span></h2>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>畑や緑地の草刈りを承ります。ハンマーナイフを保有しておりますので、効率良く作業できます。また狭い場所でも草刈機で対応いたします。芝刈りでも大丈夫です。</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-left">
                                <i class="fa fa-angle-right"></i>
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/02_1.jpg" class="img-responsive" alt="">
                                            <p>草刈前</p>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/02_2.jpg" class="img-responsive" alt="">
                                            <p>草刈後</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-left">
                                <i class="fa fa-angle-right"></i>
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/02_3.jpg" class="img-responsive" alt="">
                                            <p>芝刈前</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/02_4.jpg" class="img-responsive" alt="">
                                            <p>芝刈後</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page">
                                <h2><span class="gothic">防</span>草シー<span class="gothic">ト</span></h2>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>防草シートの敷設は、お客様の草抜きのお時間を短縮することができます。ぜひ、管理が面倒な方はどうぞ。防草シートの上に砂利など敷くと、雰囲気も良くなります。</p>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page d-pc">
                                <h2><span class="gothic">企</span>業・マンション緑地一<span class="gothic">括</span>管理</h2>
                            </div>
                            <div class="title-sub-page d-mb">
                                <h2><span class="gothic">企</span>業・マンション<br>緑地一<span class="gothic">括</span>管理</h2>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>企業緑地を適切に管理することは、日々の生活や訪れるお客様に潤いと安らぎを与えるばかりではなく、資産価値の向上や美しい街並みづくりにも繋がります。ぜひとも、企業、マンションの緑地管理をお任せください。</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-left">
                                <i class="fa fa-angle-right"></i>
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/03_1.jpg" class="img-responsive" alt="">
                                            <div>
                                                <p class="float-left">企業</p>
                                                <p class="float-right">施工前</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/03_2.jpg" class="img-responsive" alt="">
                                            <div>
                                                
                                                <p class="float-right">施工後</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-left">
                                <i class="fa fa-angle-right"></i>
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/03_3.jpg" class="img-responsive" alt="">
                                            <div>
                                                <p class="float-left">マンション</p>
                                                <p class="float-right">施工前</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/manage/03_4.jpg" class="img-responsive" alt="">
                                            <div>
                                                
                                                <p class="float-right">施工後</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>