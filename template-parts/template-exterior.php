<?php
/**
 * The template for displaying Exterior pages
 * Template Name: Exterior
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
        bottom: -75px;
    }
}
</style>


<section class="wrapper">
    <div class="page-first page-exterior">
        <div class="bg-page-sub"></div>
        <div class="index-2 page-first-1">
            <div class="title-page-2">
                <h2>エクステリア</h2>
                <?=breadcrumbs()?>
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
                        <div class="title-sub-page" id="shinchikugaikou">
                            <h2>新築外構工事</h2>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="description-ex">
                            <p>赤坂造園は、アプローチや駐車場、ブロック塀やフェンス、門扉、カーポート、ウッドデッキなどのエクステリア商品を扱っております。弊社スタッフが一緒になってオンリーワンのお庭を考えます。見積、図面作成には自信があります。弊社の図面及び施工事例です。</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="slide-exer slide-exer-left">
                            <i class="fa fa-angle-right"></i>
                            <section class="regular3 slider">
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/pic-4.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/pic-3.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/pic-2.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer ">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/pic-1.png" class="img-responsive"
                                            alt="">
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
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/pic-6.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/pic-5.png" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <p class="des-slide">スライドすると写真が変わります</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="slide-exer slide-exer-left">
                            <i class="fa fa-angle-right"></i>
                            <section class="regular4 slider">
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/left-22.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/left-21.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="slide-exer slide-exer-right">
                            <section class="regular4 slider">
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/right-22.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/right-21.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <p class="des-slide">スライドすると写真が変わります</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="slide-exer slide-exer-left">
                            <i class="fa fa-angle-right"></i>
                            <section class="regular4 slider">
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/left-33.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/left-32.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/left-31.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="slide-exer slide-exer-right">
                            <section class="regular4 slider">
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/right-32.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/right-31.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="title-sub-page" id="oniwarifoumu">
                            <h2>お庭リフォーム</h2>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="description-ex">
                            <p>お庭のリフォームもお請けいたします。「樹木を撤去して駐車場にしたい」「生垣をフェンスに変えたい」など様々なご要望にも対応いたします。</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="slide-exer slide-exer-left">
                            <!-- <i class="fa fa-angle-right"></i> -->
                            <section class="regular3 slider">
                                <div class="item3">
                                    <div class="slide-img-exer">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/oniwa01.jpg" class="img-responsive"
                                            alt="">
                                        <p>施行例</p>

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
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/oniwa02.jpg" class="img-responsive"
                                            alt="">
                                        <p>施行例</p>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="title-sub-page" id="ekusuteriakouji">
                            <h2>エクステリア工事</h2>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="description-ex">
                            <p>エクステリア商品、単体での工事もお請けいたします。「駐車場にカーポートがほしい」
                                「家の外にテラスがほしい」「玄関に雨にあたらず、入りたい」「物置を設置したい」などの要望も何でもお申し付けください。</p>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="slide-exer slide-exer-right">
                            <section class="regular3 slider">
                                <div class="item3">
                                    <div class="slide-img-exer slide-exter-3">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/exterior01.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>

                                <div class="item3">
                                    <div class="slide-img-exer slide-exter-3">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/exterior02.jpg" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>

                                <div class="item3">
                                    <div class="slide-img-exer slide-exter-3">
                                        <img src="<?=ASSETS_PATH?>resources/images/exterior/exterior03.jpg" class="img-responsive"
                                            alt="">
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