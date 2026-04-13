<?php
/**
 * The template for displaying Recruit pages
 * Template Name: Recruit
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

        <div class="index-2 page-first-1 company-page recruit-page">
            <div class="title-page-2">
                <h2>採用情報</h2>
                <nav aria-label="breadcrumb" class="ed-brc">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">採用情報</li>
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
                        <p>弊社では、正社員を募集しております。エクステリア、外構工事、造園業に経験、または興味をお持ちの方は、ご連絡ください。随時、面接させていただきます。</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="title-sub-page">
                            <h2>専務 <span class="gothic">丹</span>羽から<br class="visible-xs-block">のメッセージ</h2>
                        </div>
                        <div class="text-center recruit-team">
                            <img src="<?=ASSETS_PATH?>resources/images/index/recruit.jpg" alt="" class="mg-bottom-15">
                        </div>
                        <div class="txt-recruit">
                            <p>私たちの仕事場のメインが太陽の下です。時には暑く、時には寒く雨や風に打たれながらお仕事をすることがあります。体力のいる大変な仕事です。しかし、現場で作業していると、「綺麗になったね」「ありがとう」とお客様やそこを通りかかった方が声をかけてくれます。そんな時、やりがいを感じます。弊社は、若い子も多く、ベテランがしっかりしているアットホームな会社です。役員一同、本気で従業員、その家族を幸せにできるよう努力しております。ぜひとも、一緒にお仕事をしてみませんか。お問い合わせください。</p>
                        </div>

                        <div class="title-sub-page">
                            <h2>採用情報</h2>
                        </div>

                        <ul class="table-company">
                            <li>
                                <span class="set-col-1">職種</span>
                                <span class="set-col-2">造園、エクステリア、外構工事、土木</span>
                            </li>
                            <li>
                                <span class="set-col-1">仕事内容</span>
                                <span class="set-col-2">土木、外構工事、植栽、剪定、草刈</span>
                            </li>
                            <li>
                                <span class="set-col-1">雇用形態</span>
                                <span class="set-col-2">正社員（試用期間3ヵ月）</span>
                            </li>
                            <li>
                                <span class="set-col-1">給与</span>
                                <span class="set-col-2">大学卒 &yen;200.000　専門及び短大卒 &yen;195.000　高校卒 &yen;190.000　
                                   経験者・有資格者優遇　要相談</span>
                            </li>
                            <li>
                                <span class="set-col-1">昇給</span>
                                <span class="set-col-2">年1回</span>
                            </li>
                            <li>
                                <span class="set-col-1">賞与</span>
                                <span class="set-col-2">年2回（6月、12月）</span>
                            </li>
                            <li>
                                <span class="set-col-1">休日</span>
                                <span class="set-col-2">日曜日、第二・第四土曜日、ＧＷ、夏季、年末年始</span>
                            </li>
                            <li>
                                <span class="set-col-1">福利厚生</span>
                                <span class="set-col-2">保険（雇用・労災・健康・厚生年金）退職金</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-12 text-center">
                        <div class="box-move-contact">
                            <h2>株式会社 赤坂造園</h2>
                            <p>問い合わせ先 : 090-2261-8231</p>
                            <p>㈱赤坂造園　専務 丹羽</p>
                            <a href="<?=home_url('/contact');?>">応募する</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>