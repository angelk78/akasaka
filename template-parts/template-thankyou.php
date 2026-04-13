<?php
/**
 * The template for displaying garden pages
 * Template Name: thank-you
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
        <div class="page-first page-garden ">
            <div class="bg-page-sub"></div>

            <div class="index-2 page-first-1">
                <div class="title-page-2">
                    <h2>お問い合わせ</h2>
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
                                <h2>お問い合わせ</h2>
                            </div>
                        </div>

                        <p>お問い合わせありがとうございました。<br>
                        	お問い合わせいただきました内容を確認後、担当者より改めてご連絡させていただきます。今しばらくお待ちくださいますようお願い申し上げます。<br><br>

                        なお、3日以上弊社からの返信、返答がない場合はお手数ですが再度送信いただくか、お電話 0572-22-8386 にてご連絡いただけますと幸いです。</p>

                        <div class="text-center">
							<a href="<?=home_url()?>" class="btn btn-default">HOME</a>
						</div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>