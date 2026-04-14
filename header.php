<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage akasaka
 * @since 1.0.0
 */
global $post;

if (is_home()) {
    $title = get_bloginfo('name');
    $description = get_bloginfo('description');
} elseif (is_page('tokishi')) {
    $title = '岐阜県土岐市の外構工事・エクステリア・造園工事は赤坂造園';
    $description = '土岐市で外構工事・エクステリア・造園をご検討中の方へ。赤坂造園では駐車場・カーポート・フェンス・庭リフォームまで幅広く対応。土岐市周辺での施工実績も多数、無料相談受付中。';
} elseif (is_page('kasugai')) {
    $title = '愛知県春日井市の外構工事・エクステリア・造園工事は赤坂造園';
    $description = '春日井市で外構工事・エクステリア・造園をご検討中の方へ。赤坂造園では駐車場・カーポート・フェンス・庭リフォームまで幅広く対応。春日井市周辺での施工実績も多数、無料相談受付中。';
} elseif (is_page('mizunami')) {
    $title = '岐阜県瑞浪市の外構工事・エクステリア・造園工事は赤坂造園';
    $description = '瑞浪市で外構工事・エクステリア・造園をご検討中の方へ。赤坂造園では駐車場・カーポート・フェンス・庭リフォームまで幅広く対応。瑞浪市周辺での施工実績も多数、無料相談受付中。';
} elseif (is_page('kanishi')) {
    $title = '岐阜県可児市の外構工事・エクステリア・造園工事は赤坂造園';
    $description = '可児市で外構工事・エクステリア・造園をご検討中の方へ。赤坂造園では駐車場・カーポート・フェンス・庭リフォームまで幅広く対応。可児市周辺での施工実績も多数、無料相談受付中。';
} elseif (is_page() || is_single()) {
    $title = !empty($post->post_title) ? $post->post_title . ' | 赤坂造園 岐阜県多治見市、可児、土岐、春日井│エクステリア外構&ガーデン(造園)設計施工│' : '';
} elseif (is_post_type_archive('voice')) {
    $title = 'お客様の声 | 赤坂造園 岐阜県多治見市、可児、土岐、春日井│エクステリア外構&ガーデン(造園)設計施工│';
} elseif (is_archive()) {
    $title = single_cat_title('', false) . ' | 赤坂造園 岐阜県多治見市、可児、土岐、春日井│エクステリア外構&ガーデン(造園)設計施工│';
} else {
    $title = !empty($post->post_title) ? $post->post_title : '';
    $description = '';
}

$logo_alt = '';

if (is_page('tokishi')) {
    $logo_alt = '赤坂造園 | 土岐市の外構・エクステリア・造園';
} elseif (is_page('kasugai')) {
    $logo_alt = '赤坂造園 | 春日井市の外構・エクステリア・造園';
} elseif (is_page('mizunami')) {
    $logo_alt = '赤坂造園 | 瑞浪市の外構・エクステリア・造園';
} elseif (is_page('kanishi')) {
    $logo_alt = '赤坂造園 | 可児市の外構・エクステリア・造園';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php echo $title; ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="株式会社 赤坂造園">
    <meta name="thumbnail" content="https://akasakazouen.com/message/wp-content/themes/akasaka/resources/images/thumb.jpg" />
    <meta name="format-detection" content="telephone=no">
    <meta itemprop="description" name="description" content="<?php echo $description; ?>" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- Bootstrap Core CSS -->
    <link href="<?= ASSETS_PATH ?>resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/WOW-master/css/libs/animate.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/slick/slick.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/slick/slick-theme.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/loader/css/akasakaload.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/loader/css/animation.css" rel="stylesheet">
    <link href="<?= ASSETS_PATH ?>resources/vendor/fontello/css/akasaka.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= ASSETS_PATH ?>resources/css/main.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137019506-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-137019506-1');
    </script>
    <link rel="shortcut icon" href="https://akasakazouen.com/message/wp-content/themes/akasaka/resources/images/favicon2.ico">
    <link rel="apple-touch-icon" href="https://akasakazouen.com/message/wp-content/themes/akasaka/resources/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="https://akasakazouen.com/message/wp-content/themes/akasaka/resources/images/android-chrome-256x256.png">
    <?php wp_head(); ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Landscaper",
            "@id": "https://akasakazouen.com/#organization",
            "name": "株式会社 赤坂造園",
            "alternateName": [
                "赤坂造園",
                "akasakazouen"
            ],
            "description": "赤坂造園は多治見、春日井、可児、瑞浪、岐阜を中心に外構、エクステリア、カーポート、ウッドデッキなどを施工する外構会社です。",
            "url": "https://akasakazouen.com/",
            "logo": "https://akasakazouen.com/message/wp-content/themes/akasaka/resources/images/logo/logo2.png",
            "image": "https://akasakazouen.com/message/wp-content/themes/akasaka/resources/images/index/0108_01.png",
            "foundingDate": "2015-10-05",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "宝町11-7",
                "addressLocality": "多治見市",
                "addressRegion": "岐阜県",
                "postalCode": "507-0054",
                "addressCountry": "JP"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "35.33742",
                "longitude": "137.12455"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "telephone": "+81-572-22-8386",
                "faxNumber": "+81-572-25-8838",
                "areaServed": [
                    "JP-21"
                ],
                "availableLanguage": [
                    "Japanese"
                ]
            },
            "sameAs": [
                "https://www.instagram.com/akasakazouen/"
            ],
            "areaServed": [{
                    "@type": "City",
                    "name": "多治見市"
                },
                {
                    "@type": "City",
                    "name": "春日井市"
                },
                {
                    "@type": "City",
                    "name": "可児市"
                },
                {
                    "@type": "City",
                    "name": "瑞浪市"
                },
                {
                    "@type": "AdministrativeArea",
                    "name": "岐阜"
                }
            ],
            "serviceOffered": [{
                    "@type": "Service",
                    "name": "外構工事",
                    "description": "門扉、フェンス、アプローチなどの外構工事全般を承ります。"
                },
                {
                    "@type": "Service",
                    "name": "エクステリア工事",
                    "description": "カーポート、ウッドデッキ、テラスなど、住まいの外観を彩るエクステリアを施工します。"
                },
                {
                    "@type": "Service",
                    "name": "造園・庭園管理",
                    "description": "庭木の剪定から庭園の設計・施工まで、お庭に関するご相談を承ります。"
                }
            ]
        }
    </script>

    <meta name="google-site-verification" content="JSWJK5kTgJrEBrdVgYNrJYai0JzWTXPB3hCa72KuXXo" />
    <style>
        /* Applied changes from CSS */
        .header .header-navbar nav .navbar-collapse1>ul>li:last-child img {
            transition:
                transform 0.3s ease,
                opacity 0.3s ease;
        }

        .show-mb a img {
            display: none;
        }

        .header .header-navbar nav .navbar-collapse1>ul>li:last-child img:hover {
            transform: scale(1.15);
            opacity: 0.8;
        }

        .header .header-navbar nav .navbar-collapse1>ul>li:last-child {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            transition: all 0.5s ease;
            top: -35px;
            right: 15px;
        }

        .header .header-navbar nav .navbar-collapse1>ul>li:last-child>a {
            font-weight: none;
            background: transparent;
            padding: 0;
            border: none;
            border-radius: none;
            margin-left: 0;
        }

        .header .header-navbar nav .navbar-collapse1>ul>li:last-child>a:hover {
            background: none;
            color: transparent;
            opacity: unset;
        }

        .header .header-navbar nav .navbar-collapse1>ul>li:last-child>.red-btn {
            font-weight: bold;
            background: #ef1c00;
            padding: 3px 35px;
            border: 2px solid #fff;
            border-radius: 20px;
        }

        .header .header-navbar nav .navbar-collapse1>ul>li:last-child>.red-btn:hover {
            background: #fff;
            color: #7c4e34;
            opacity: 1;
        }

        @media (max-width: 991px) {
            .header .header-navbar nav .container .navbar-collapse1>.navbar-nav>li:first-child>a {
                font-weight: bold;
                background: #ef1c00;
                padding: 6px 35px;
                border: 2px solid #fff;
                border-radius: 20px;
                color: #fff;
                width: 55%;
                margin: auto;
                font-size: 16px;
            }

            .show-mb a img {
                display: inline-block;
            }

            .header .header-navbar nav .container .navbar-collapse1>.navbar-nav>li:nth-child(2)>a {
                margin: 0 auto;
                padding: 15px 0 0 0;
            }
        }

        .index-5 {
            background: #fbe9b9;
            padding: 50px 0;
            position: relative;
        }

        .index-5 .flexwrap {
            display: flex;
            flex-wrap: wrap;
        }

        .voice-redirect {
            margin: 3rem 0 0;
            text-align: center;
            width: 100%;
        }

        .voice-redirect a {
            display: inline-block;
            font-weight: bold;
            background: #ef1c00;
            padding: 3px 35px;
            border: 2px solid #fff;
            border-radius: 20px;
            line-height: 2.5rem;
            color: #fff;
            width: 170px;
        }

        .voice-redirect a:hover {
            background-color: #fff;
            color: #7c4e34;
        }

        /* ── Cards grid ── */
        .voice-grid {
            flex: 1 1 100%;
            display: grid;
            grid-template-columns: repeat(3, 355px);
            gap: 28px;
            justify-content: center;
        }

        /* ── Individual card ── */
        .voice-card {
            width: 355px;
            height: 307px;
            background: url('<?= ASSETS_PATH ?>resources/images/index/bg.png') center no-repeat;
            background-size: cover;
            border-radius: 30px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform .25s ease;
            cursor: pointer;
        }

        .voice-card:hover {
            transform: translateY(-5px);
        }

        /* ── Card image ── */
        .voice-card__image {
            width: 100%;
            height: calc(307px - 147px);
            /* 160px */
            overflow: hidden;
            flex-shrink: 0;
            background: #e8ddd0;
            position: relative;
        }

        .voice-card__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .voice-card:hover .voice-card__image img {
            transform: scale(1.05);
        }

        /* placeholder when no image */
        .voice-card__image--placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #e8ddd0, #d4c4ac);
        }

        .voice-card__image--placeholder svg {
            opacity: .35;
        }

        /* ── Card body ── */
        .voice-card__body {
            flex: 1;
            padding: 14px 18px 16px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            overflow: hidden;
        }

        .voice-card__title {
            font-size: 18px;
            font-weight: 700;
            color: #723a1c;
            letter-spacing: .04em;
            margin-bottom: 6px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .voice-card__detail {
            font-size: 14px;
            line-height: 1.65;
            font-weight: 500;
            color: #333333;
            overflow: hidden;
        }

        /* ── Responsive ── */
        @media (max-width: 1160px) {
            .voice-grid {
                grid-template-columns: repeat(2, 355px);
            }
        }

        @media (max-width: 760px) {
            .voice-grid {
                grid-template-columns: 355px;
            }
        }

        @media (max-width: 395px) {
            .voice-grid {
                padding: 0 15px;
                grid-template-columns: 1fr;
            }

            .voice-card {
                width: 100%;
            }
        }

        /* Wrapper center alignment */
        .voice-single-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Image max-width 460px */
        .voice-image {
            max-width: 460px;
            width: 100%;
            margin: 30px auto;
        }

        .voice-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Ratings same width as image */
        .voice-ratings {
            max-width: 460px;
            width: 100%;
            margin: 30px auto 50px;
        }

        /* Rating row layout */
        .voice-rating-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            padding: 0 60px;
        }

        /* Stars style */
        .voice-rating-stars .star {
            font-size: 18px;
            color: #64aa0e;
            margin-left: -5px;
        }

        .voice-single-image {
            margin-top: 10px;
        }

        .voice-rating-stars .filled {
            color: #64aa0e;
        }

        .voice-rating-title {
            font-size: 18px;
            color: #74260b;
            font-weight: 700;

        }

        /* Bottom content max-width 800px */
        .voice-content {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            padding-bottom: 40px;
        }

        .voice-content p {
            margin: 0px;
        }

        .voice-content p {
            line-height: 1.5;
            font-weight: 700;
            font-size: 16px;
            color: #010000;
        }
    </style>
</head>

<body>
    <!-- <div class="page-loader">
        <div class="loader">Loading...</div>
    </div> -->
    <section class="main">
        <header class="header">
            <div class="header-navbar">
                <nav class="navbar navbar-inverse" id="menu" role="navigation">
                    <div class="container padding-0">
                        <div class="navbar-collapse1">
                            <div class="logo">
                                <a href="<?= home_url() ?>"><img src="<?= ASSETS_PATH ?>resources/images/logo/logo2.png" alt="<?= esc_attr($logo_alt); ?>"></a>
                                <p>
                                    株式会社 赤坂造園　TEL / 0572-22-8386 <br>
                                    岐阜県多治見市宝町11丁目7番地
                                </p>
                            </div>

                            <ul class="nav navbar-nav ed-ul" id="open-menu">
                                <li>
                                    <a href="<?= home_url('/contact') ?>">お問い合わせ</a>
                                </li>
                                <?php $instagram = get_theme_mod('instagram_url'); ?>
                                <?php if (!empty($instagram)) : ?>
                                    <li class="show-mb">
                                        <a href="<?= esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer">
                                            <img src="<?= ASSETS_PATH ?>resources/images/index/instagram.png" width="57" height="57">
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?= home_url() ?>">HOME</a>
                                </li>
                                <li class="">
                                    <a href="<?= home_url('/first') ?>">初めての方へ</a>
                                </li>
                                <li class="">
                                    <a href="<?= home_url('/exterior') ?>">エクステリア</a>
                                </li>
                                <li class="">
                                    <a href="<?= home_url('/garden') ?>">造園</a>
                                </li>
                                <li class="">
                                    <a href="<?= home_url('/manage') ?>"><span class="YuGothic">剪</span>定・管理</a>
                                </li>


                                <li>
                                    <a href="<?= home_url('/company') ?>">会社案内</a>
                                </li>
                                <li>
                                    <a href="<?= home_url('/recruit') ?>">採用情報</a>
                                </li>
                                <?php $instagram = get_theme_mod('instagram_url'); ?>
                                <li>
                                    <a href="<?= esc_url($instagram); ?>" target="_blank">
                                        <img src="<?= ASSETS_PATH ?>resources/images/index/instagram.png" width="33" height="33">
                                    </a>
                                    <a href="<?= home_url('/contact') ?>" class="red-btn">お問い合わせ</a>
                                </li>
                            </ul>

                            <ul class="header-icon ed-ul">
                                <li>
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" id="btn-toggle">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar top-bar"></span>
                                            <span class="icon-bar middle-bar"></span>
                                            <span class="icon-bar bottom-bar"></span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>