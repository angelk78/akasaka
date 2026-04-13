<?php
/**
 * The template for displaying Contact pages
 * Template Name: Contact2
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
    <?php
        while (have_posts()): the_post();
    ?>
    <section class="wrapper">
        <div class="page-first">
            <div class="bg-page-sub"></div>

            <div class="index-2 page-first-1 company-page contact-page">
                <div class="title-page-2">
                    <h2>お問い合わせ</h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=home_url()?>">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">お問い合わせ</li>
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

                        <div class="col-sm-12 text-center d-pc">
                            <p>以下のフォームに必要事項をご記入のうえ、送信ボタンを押してください。<br>全て必須項目になります。
                                お問い合わせ頂きました内容を確認後、担当よりご連絡させて頂きます。</p>
                        </div>
                        <div class="col-sm-12 text-center d-mb">
                            <p>以下のフォームに必要事項をご記入のうえ、送信ボタンを押してください。<br>全て必須項目になります。
                                お問い合わせ頂きました内容を確認後、担当よりご連絡させて頂きます。</p>
                        </div>

                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-contact-page">
                                <?=the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;?>
<?php get_footer();?>