<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage akasaka
 * @since 1.0.0
 */

get_header();
?>
    <section class="wrapper">
        <div class="page-first">
            <div class="bg-page-sub"></div>

            <div class="index-2 page-first-1 company-page 404-page">
                <div class="title-page-2">
                    <h2>404</h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=home_url()?>">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">404</li>
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
                            <p>お訪ねになったページは削除されたか、名前が変更された可能性があります。<br>
                                お手数ですがトップページからご覧下さい。</p>
                        </div>
                        <div class="col-sm-12 text-center d-mb">
                            <p>お訪ねになったページは削除されたか、名前が変更された可能性があります。
                                お手数ですがトップページからご覧下さい。</p>
						</div>
						<div class="col-sm-12 text-center">
							<a href="<?=home_url()?>" class="btn btn-default">HOME</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
