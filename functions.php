<?php

/**
 * Smile Kid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage akasaka
 * @since 1.0.0
 */

define('ASSETS_PATH', get_template_directory_uri() . '/');

if (!function_exists('akasaka_setup')) :
    function akasaka_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('post-home', 380, 210, array('center', 'center'));
        register_nav_menus(
            array(
                'primary' => __('Primary', 'akasaka'),
                'footer' => __('Footer Menu', 'akasaka'),
                'social' => __('Social Links Menu', 'akasaka'),
            )
        );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 210,
                'flex-width'  => true,
                'flex-height' => false,
            )
        );
        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
    }
endif;
add_action('after_setup_theme', 'akasaka_setup');

function akasaka_widgets_init()
{
    register_sidebar(
        array(
            'name'          => __('Footer', 'akasaka'),
            'id'            => 'sidebar-1',
            'description'   => __('Add widgets here to appear in your footer.', 'akasaka'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'akasaka_widgets_init');

function breadcrumbs()
{
    global $post;
    if (is_404()) {
        $title = '404';
    } else {
        $title = get_the_title($post->ID);
    }
?>
    <nav aria-label="breadcrumb" class="ed-brc">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url() ?>">HOME</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
        </ol>
    </nav>
<?php
}
function pageTitle()
{
    global $post;
    if ($post->post_parent > 0) {
        $parentID = wp_get_post_parent_id($post->ID);
        $parentTitle = get_the_title($parentID);
        $title = $parentTitle;
    } else {
        $title = get_the_title($post->ID);
    }
    return $title;
}
function wp_corenavi($custom_query = null, $paged = null)
{
    global $wp_query;
    if ($custom_query) {
        $main_query = $custom_query;
    } else {
        $main_query = $wp_query;
    }
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages) ? $main_query->max_num_pages : '';
    if ($total > 1) {
        echo '<div class="col-sm-12"><div class="paginate">';
    }
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $total,
        'mid_size' => '5',
        'prev_text' => '<i class="fa fa-angle-double-left"></i>',
        'next_text' => '<i class="fa fa-angle-double-right"></i>',
    ));
    if ($total > 1) {
        echo '</div></div>';
    }
}
add_filter('document_title_separator', 'set_document_title_separator');
function set_document_title_separator($sep)
{
    return ('|');
}
function akasaka_meta()
{
    global $post;
    if (is_home() || is_front_page()) {
        $keyword = '岐阜県,多治見,宝町,造園,エクステリア,庭,ガーデン';
    } elseif (is_page()) {
        $keyword = $post->post_title . ',岐阜県,多治見,宝町,造園,エクステリア,庭,ガーデン';
    } else {
        $keyword = '岐阜県,多治見,宝町,造園,エクステリア,庭,ガーデン';
    }
    return $keyword;
}

// add_filter( 'wp_title', 'custom_title', 1000 );
// function custom_title($title) {
// 	global $post;
//     if ( is_home() || is_front_page() ){
// 		$title = '赤坂造園　岐阜県多治見市';
// 	}
// 	elseif (is_page()){
// 		$title = $post->post_title . ' | 赤坂造園　岐阜県多治見市';
// 	}
// 	elseif (is_single()){
// 		$title = $post->post_title . ' | cccc';
// 	}
// 	else{
// 		$title = single_cat_title( '', true );
// 	}
//     return $title;
// }
remove_action('wp_head', '_wp_render_title_tag', 1);

function my_theme_excerpt_more($more)
{
    return '&nbsp;…';
}
add_filter('excerpt_more', 'my_theme_excerpt_more');

function custom_excerpt_length($length)
{
    return 50; // Change this number to the desired excerpt length in words
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

function apply_ed_checkbox_style_to_wpcf7()
{
?>
    <style>
        /* Apply ed-checkbox styling to Contact Form 7 checkboxes */

        /* Hide default checkbox, same as ed-checkbox */
        .wpcf7-checkbox input[type="checkbox"] {
            position: absolute !important;
            opacity: 0 !important;
            cursor: pointer !important;
            height: 0 !important;
            width: 0 !important;
        }

        /* Create custom checkbox - same as ed-checkbox .checkmark */
        .wpcf7-list-item-label::before {
            content: '' !important;
            position: absolute !important;
            top: 2px !important;
            left: 0 !important;
            height: 20px !important;
            width: 20px !important;
            background-color: #fff !important;
            border: 2px solid #d3c8bb !important;
            border-radius: 4px !important;
            transition: all 0.5s ease !important;
        }

        /* Style the label to have space for checkbox */
        .wpcf7-list-item-label {
            padding-left: 30px !important;
            position: relative !important;
            cursor: pointer !important;
            display: inline-block !important;
            line-height: 1.5 !important;
        }

        /* On hover - grey background like ed-checkbox */
        .wpcf7-checkbox input[type="checkbox"]:hover+.wpcf7-list-item-label::before {
            background-color: #d3c8bb !important;
        }

        /* When checked - blue background like ed-checkbox */
        .wpcf7-checkbox input[type="checkbox"]:checked+.wpcf7-list-item-label::before {
            background-color: #fff !important;
        }

        /* Create checkmark indicator - same as ed-checkbox .checkmark:after */
        .wpcf7-list-item-label::after {
            content: '' !important;
            position: absolute !important;
            display: none !important;
        }

        /* Show checkmark when checked - same as ed-checkbox */
        .wpcf7-checkbox input[type="checkbox"]:checked+.wpcf7-list-item-label::after {
            display: block !important;
            left: 7px !important;
            top: 6px !important;
            width: 5px !important;
            height: 10px !important;
            border: solid #434343 !important;
            border-width: 0 2px 2px 0 !important;
            transform: rotate(40deg) !important;
        }

        /* Natural inline-block flow layout - NOT grid */
        .wpcf7-checkbox {
            display: block !important;
            max-width: 100% !important;
        }

        /* Inline-block items that wrap naturally */
        .wpcf7-list-item {
            display: inline-block !important;
            margin: 0 10px 10px 0 !important;
            vertical-align: top !important;
        }

        /* Remove any grid or flex that might interfere */
        .wpcf7-form-control.wpcf7-checkbox {
            display: block !important;
        }
    </style>
<?php
}
add_action('wp_head', 'apply_ed_checkbox_style_to_wpcf7', 999);


function theme_customize_register($wp_customize)
{

    $wp_customize->add_section('social_links_section', array(
        'title'    => 'Social Media Links',
        'priority' => 30,
    ));

    $wp_customize->add_setting('instagram_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_url', array(
        'label'   => 'Instagram URL',
        'section' => 'social_links_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'theme_customize_register');

function create_voice_post_type()
{

    register_post_type(
        'voice',
        array(
            'labels' => array(
                'name' => 'お客様の声',
                'singular_name' => 'お客様の声',
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-quote',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),

            // $2705 FIXED
            'rewrite' => false,

            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_voice_post_type');
function voice_custom_rewrite()
{
    add_rewrite_rule(
        '^voice/([0-9]+)/?$',
        'index.php?post_type=voice&p=$matches[1]',
        'top'
    );
}
add_action('init', 'voice_custom_rewrite');

function voice_archive_rewrite()
{
    add_rewrite_rule(
        '^voice/?$',
        'index.php?post_type=voice',
        'top'
    );
}
add_action('init', 'voice_archive_rewrite');


function voice_page_template_override($template)
{
    if (is_post_type_archive('voice')) {
        $template = get_template_directory() . '/template-parts/template-voice.php';
    }
    return $template;
}
add_filter('template_include', 'voice_page_template_override');

function voice_custom_permalink($post_link, $post)
{
    if ($post->post_type === 'voice') {
        return home_url('/voice/' . $post->ID . '/');
    }
    return $post_link;
}
add_filter('post_type_link', 'voice_custom_permalink', 10, 2);

function add_voice_ratings_meta_box()
{
    add_meta_box(
        'voice_ratings',
        '評価項目',
        'voice_ratings_callback',
        'voice',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_voice_ratings_meta_box');

function voice_ratings_callback($post)
{
    $saved_ratings = get_post_meta($post->ID, 'voice_ratings', true);
    if (!is_array($saved_ratings)) $saved_ratings = [];

    $items = [
        '対応・説明のわかりやすさ',
        '要望の汲み取り・提案',
        '連絡・報告のスムーズさ',
        '仕上がりの品質',
        'デザイン・提案内容',
        '工期・現場のマナー',
        '価格について',
        '総合評価',
        '知人におすすめしたい',
    ];
?>
    <div id="ratings-wrapper">
        <?php foreach ($items as $index => $item) :
            $stars = isset($saved_ratings[$index]['stars']) ? $saved_ratings[$index]['stars'] : 5;
        ?>
            <div class="rating-row" style="display:flex; align-items:center; margin-bottom:8px;">
                <input type="hidden" name="voice_ratings[<?= $index ?>][title]" value="<?= esc_attr($item); ?>" />
                <span style="width:60%; display:inline-block;"><?= esc_html($item); ?></span>
                <select name="voice_ratings[<?= $index ?>][stars]">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <option value="<?= $i ?>" <?= selected($stars, $i, false); ?>>
                            <?= $i ?> ★
                        </option>
                    <?php endfor; ?>
                </select>
            </div>
        <?php endforeach; ?>
    </div>
<?php
}

function save_voice_ratings($post_id)
{
    if (isset($_POST['voice_ratings'])) {
        update_post_meta($post_id, 'voice_ratings', $_POST['voice_ratings']);
    }
}
add_action('save_post', 'save_voice_ratings');

//customer reviews
function create_customer_reviews_cpt() {
    register_post_type('customer_review', array(
        'labels' => array(
            'name' => 'Customer Reviews',
            'singular_name' => 'Customer Review'
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array(
            'slug' => '',
            'with_front' => false
        ),
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
    ));
}
add_action('init', 'create_customer_reviews_cpt');

add_filter('post_type_link', function($post_link, $post) {
    if ($post->post_type === 'customer_review') {
        return home_url('/' . $post->ID . '/');
    }
    return $post_link;
}, 10, 2);

add_action('init', function() {
    add_rewrite_rule(
        '^([0-9]+)/?$',
        'index.php?post_type=customer_review&p=$matches[1]',
        'top'
    );
});

add_action('restrict_manage_posts', function() {
    global $typenow;

    if ($typenow == 'customer_review') {
        $selected = $_GET['location'] ?? '';
        ?>
        <select name="location" id="location-filter">
            <option value="">Select Location</option>
            <option value="tokishi" <?php selected($selected, 'tokishi'); ?>>Tokishi</option>
            <option value="kanishi" <?php selected($selected, 'kanishi'); ?>>Kanishi</option>
            <option value="kasugai" <?php selected($selected, 'kasugai'); ?>>Kasugai</option>
            <option value="mizunami" <?php selected($selected, 'mizunami'); ?>>Mizunami</option>
        </select>
        <?php
    }
});

add_action('admin_footer-edit.php', function() {
    global $typenow;

    if ($typenow !== 'customer_review') return;
    ?>
    <script>
        jQuery(function($) {
            $('#location-filter').on('change', function() {
                var location = $(this).val();

                let url = new URL(window.location.href);

                if (location) {
                    url.searchParams.set('location', location);
                } else {
                    url.searchParams.delete('location');
                }

                window.location.href = url.toString();
            });
        });
    </script>
    <?php
});

add_action('pre_get_posts', function($query) {
    global $pagenow;

    if (
        is_admin() &&
        $pagenow === 'edit.php' &&
        $query->get('post_type') === 'customer_review' &&
        $query->is_main_query()
    ) {
        // ONLY filter when location is selected
        if (!empty($_GET['location'])) {
            $query->set('meta_query', array(
                array(
                    'key' => 'location',
                    'value' => sanitize_text_field($_GET['location']),
                    'compare' => '='
                )
            ));
        }

        // Always sort by menu_order
        $query->set('orderby', 'menu_order');
        $query->set('order', 'ASC');
    }
});

add_action('admin_head', function() {
    echo '<style>
        #post-query-submit { display:none !important; }
    </style>';
});

add_action('admin_enqueue_scripts', function($hook) {
    if ($hook !== 'edit.php') return;

    if (!isset($_GET['post_type']) || $_GET['post_type'] !== 'customer_review') return;

    wp_enqueue_script('jquery-ui-sortable');

    $location = isset($_GET['location']) ? $_GET['location'] : '';

    wp_add_inline_script('jquery-ui-sortable', '
jQuery(window).on("load", function() {

    var location = "' . esc_js($location) . '";

    if (!location) {

        jQuery(".wrap h1").after(
            "<div class=\"notice notice-warning\"><p><strong>⚠️ Select a location first to enable sorting</strong></p></div>"
        );

        jQuery(".drag-handle").css({
            opacity: "0.3",
            cursor: "not-allowed"
        });

        return;
    }

    var tbody = jQuery("#the-list");

    // 🔥 IMPORTANT: delay to ensure WP finished rendering
    setTimeout(function() {

        tbody.sortable({
            items: "> tr.type-customer_review",
            handle: ".drag-handle",
            cursor: "move",
            axis: "y",
            tolerance: "pointer",
            cancel: "a, button, input, textarea, select",
            placeholder: "sortable-placeholder",

            start: function(e, ui) {
                ui.placeholder.height(ui.item.height());
            },

            update: function() {

                var order = [];

                tbody.find("tr.type-customer_review").each(function(index) {
                    order.push({
                        id: jQuery(this).attr("id").replace("post-", ""),
                        order: index
                    });
                });

                jQuery.post(ajaxurl, {
                    action: "save_review_order",
                    order: order
                });
            }
        });

    }, 300); // 🔥 delay fixes WP conflict

});
');
});

add_action('wp_ajax_save_review_order', function() {
    foreach ($_POST['order'] as $item) {
        wp_update_post(array(
            'ID' => intval($item['id']),
            'menu_order' => intval($item['order'])
        ));
    }
    wp_die();
});

add_filter('manage_customer_review_posts_columns', function($columns) {
    $columns = array_merge(
        array('drag' => '↕'),
        $columns
    );
    return $columns;
});

add_action('manage_customer_review_posts_custom_column', function($column, $post_id) {
    if ($column === 'drag') {
        echo '<span class="drag-handle">☰</span>';
    }
}, 10, 2);

add_action('admin_head', function() {
    ?>
    <style>
        .column-drag {
            width: 40px;
            text-align: center;
        }
        .drag-handle {
            cursor: move;
            font-size: 16px;
        }
        .sortable-placeholder {
            background: #f0f0f0;
            border: 2px dashed #bbb;
            height: 60px;
        }
    </style>
    <?php
});