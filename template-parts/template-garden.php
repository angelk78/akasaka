<?php
/**
 * The template for displaying garden pages
 * Template Name: Garden
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
        margin-bottom: 50px;
    }
    @media (max-width: 552px) {
    .slide-exer.slide-exer-left > i{
        bottom: -75px;
    }
}
</style>


    <section class="wrapper">
        <div class="page-first page-garden ">
            <div class="bg-page-sub"></div>

            <div class="index-2 page-first-1">
                <div class="title-page-2">
                    <h2>造園</h2>
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

                        <div class="col-sm-12">
                            <div class="title-sub-page" id="sakutei-tsuboniwa">
                                <h2>作庭・<span class="gothic">坪</span>庭</h2>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>今、現在希少価値が高い古風なお庭です。創業60年で引き継がれた技術でお答えします。</p>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/01_1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/01_2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="title-sub-page" id="shokuju-ishoku">
                                <h2>植樹・移植</h2>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>「家にシンボルツリーがほしい」「祖父が残した植木を移動させたい」とお考えの方でも大丈夫です。植物は、私たちの暮らしを豊かにし、心身を癒してくれます。弊社では、お庭のシンボルツリーや生垣など植栽に関すること全般承っております。伐採したくない木、樹種選定に困った際は、お気軽にご相談ください。</p>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p class="des-slide">スライドすると写真が変わります</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="slide-exer slide-exer-right">
                                <section class="regular4 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/02_1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/02_2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="item3">
                                        <div class="slide-img-exer slide-exter-3">
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/02_3.jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="title-sub-page" id="shibafu-jinkoushiba">
                                <h2><span class="gothic">芝</span>生・人工<span class="gothic">芝</span></h2>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-ex">
                                <p>憧れの芝生や人工芝を施工してみませんか。芝生なら、こまめな手入れで愛着が湧き、人工芝なら、手入れ不要で年中、緑を保っております。愛犬、愛猫も喜びます。また、お子さんの遊び場にも最適です。</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="slide-exer slide-exer-left">
                                <!-- <i class="fa fa-angle-right"></i> -->
                                <section class="regular3 slider">
                                    <div class="item3">
                                        <div class="slide-img-exer">
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/03_1.jpg" class="img-responsive" alt="">
                                            <p>天然芝</p>

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
                                            <img src="<?=ASSETS_PATH?>resources/images/garden/03_2.jpg" class="img-responsive" alt="">
                                            <p>人工芝</p>
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