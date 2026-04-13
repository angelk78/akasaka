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
                    <h2><?=the_title();?></h2>
                    <nav aria-label="breadcrumb" class="ed-brc">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=home_url()?>">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=the_title();?></li>
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

						<?=the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php endwhile;?>

<?php
get_footer();
