<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage akasaka
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

            <div class="index-2 page-first-1 company-page">
                <div class="title-page-2">
                    <h2><span class="gothic">施</span>工事例</h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=home_url()?>">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">施工事例</li>
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
                        <div class="single-head">
                            <p class="date"><?=get_the_date('Y.m.d', $post->ID);?></p>
                            <p class="title"><?=the_title();?></p>
                        </div>
                        <div class="single-content">
                            <?=the_content();?>
                        </div>
						
						<div class="text-center">
							<a href="<?=home_url('/blog')?>" class="btn btn-default">一　覧</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php endwhile;?>

<?php
get_footer();
