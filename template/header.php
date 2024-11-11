<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yoshida&Co.</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="Yoshida&Co.">
    <meta property="og:image" content="<?php echo $root; ?>assets/img/og.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="48x48" href="<?php echo $root; ?>assets/img/favicon/favicon-48x48.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/img/favicon/safari-pinned-tab.svg" color="#3C2631">
    <meta name="msapplication-TileColor" content="#E0DAD0">
    <meta name="theme-color" content="#E0DAD0">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-wp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/common/theme-default.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/products.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/products-ranking.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/product-single.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/shop-map.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/shop-single.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/template.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/template-single.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/email-subscribe.css?v=<?php echo time(); ?>">


    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">
        <div id="personal-header" class="show-sm">
            <div class="container xl">
                <ul class="menu size-subtitle3">
                    <li><a href="#favorite">Favorite</a></li>
                </ul>
            </div>
        </div>
        <header id=" header" class="navbar">
            <div class="header-nav container xl">
                <div class="header-menu-ctrl hidden-device-sm">
                    <a class="ctrl" href="javascript:;">
                        <span class="hamburger"><span class="bars">&nbsp;</span></span>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="<?php echo $root; ?>index.php" class="logo">
                        <img src="<?php echo $root; ?>assets/img/logo.svg" alt="Yoshida&Co. logo" draggable="false">
                    </a>

                </div>

                <div class="header-menu">
                    <div class="panel-overlay hidden-device-sm">
                        <div class="panel-overlay-inner">
                            <a href="javascript:;" class="panel-overlay-close">
                                <i class="ic ic-close c-white size-icon-16"></i>
                            </a>

                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-search hidden-device-sm">
                            <div class="heading">
                                <div class="emty-spacer">&nbsp;</div>
                                <a href="<?php echo $root; ?>index.php" class="panel-logo">
                                    <img src="<?php echo $root; ?>assets/img/logo.svg" alt="Yoshida&Co. logo" loading="lazy" draggable="false">
                                </a>
                                <div class="system-icon">
                                    <a href="javascript:;" class="icon-link cart">
                                        <span class="cart-amount size-overline font-heading">0</span>
                                        <i class="ic ic-yoshida_bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="search">
                                <form action="javascript:;" class="header-search-bar">
                                    <div class="fields">
                                        <div class="field">
                                            <div class="input">
                                                <span class="magnifying-glass"><i class="ic ic-magnifying_glass"></i></span>
                                                <input type="text" name="search" id="search" autocomplete="off" placeholder="Are you looking for something?">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="panel-scroll" data-lenis-prevent>
                            <div class="panel-container">
                                <div class="panel-body">
                                    <ul class="menu size-button1">
                                        <li id="product-breadcrumb-trigger" class="breadcrumb-trigger">
                                            <a href="<?php echo $root; ?>products.php">Product <i class="ic ic-chevron-down size-icon-10 show-sm"></i></a>
                                        </li>
                                        <li id="shop-breadcrumb-trigger" class="breadcrumb-trigger">
                                            <a href="<?php echo $root; ?>shop.php">Shop <i class="ic ic-chevron-down size-icon-10 show-sm"></i></a>
                                        </li>
                                        <li id="journal-breadcrumb-trigger" class="breadcrumb-trigger">
                                            <a href="<?php echo $root; ?>news.php">Journal <i class="ic ic-chevron-down size-icon-10 show-sm"></i></a>
                                        </li>
                                        <li id="empty-breadcrumb-trigger" class="breadcrumb-trigger">
                                            <a href="<?php echo $root; ?>story.php">Story</a>
                                        </li>
                                        <li class="hidden-device-sm">
                                            <a href="<?php echo $root; ?>products-ranking.php">Ranking</a>
                                        </li>
                                        <li class="hidden-device-sm">
                                            <a href="#email-subscription">E-mail Magazine</a>
                                        </li>
                                    </ul>
                                    <ul class=" menu size-button1 hidden-device-sm margin-top-60">
                                        <li><a href="javascript:;">Login</a></li>
                                        <li><a href="javascript:;">New member registration</a></li>
                                    </ul>
                                </div>
                                <div class=" panel-footer hidden-device-sm c-white">
                                    <div class="social-links">
                                        <a href="#outer"><i class="size-icon-20 ic ic-instagram"></i></a>
                                        <a href="#outer"><i class="size-icon-20 ic ic-facebook-no-bg"></i></a>
                                        <a href="#outer"><i class="size-icon-20 ic ic-twitter"></i></a>
                                        <a href="#outer"><i class="size-icon-20 ic ic-line"></i></a>
                                        <a href="#outer"><i class="size-icon-20 ic ic-youtube"></i></a>
                                    </div>

                                    <a href="#outer" class="size-subtitle2">PORTER_OFFICIAL</a>
                                    <ul class="store-links size-subtitle2">
                                        <li><a href="#outer">PORTER flagship store</a></li>
                                        <li><a href="#outer">PORTER EXCHANGE</a></li>
                                        <li><a href="#outer">PORTER GINZA</a></li>
                                        <li><a href="#outer">PORTER SHINJUKU</a></li>
                                        <li><a href="#outer">PORTER STAND</a></li>
                                        <li><a href="#outer">KURA CHIKA by PORTER</a></li>
                                        <li><a href="#outer">CLOAKROOM by PORTER</a></li>
                                        <li><a href="#outer">PORTER SEOUL</a></li>
                                    </ul>

                                    <a href="#outer" class="size-subtitle2">POTR_OFFICIAL</a>
                                    <ul class="store-links size-subtitle2">
                                        <li><a href="#outer">LUGGAGE LABEL_OFFICIAL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <label class="label anim fixed" for="search">
                                                        <p class="size-overline">Are you looking for something?</p>
                                                    </label> -->
                <div class="header-search show-sm" id="header-search-pc">
                    <form action="javascript:;" class="header-search-bar">
                        <div class="fields">
                            <div class="field">
                                <div class="input">
                                    <span class="magnifying-glass"><i class="ic ic-magnifying_glass"></i></span>
                                    <input type="text" name="search" id="search" autocomplete="off" placeholder="Are you looking for something?">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="header-user system-icon">
                    <a href="javascript:;" class="icon-link user">
                        <i class="ic ic-user_circle"></i>
                    </a>
                </div>

                <div class="header-cart system-icon">
                    <a href="javascript:;" class="icon-link cart">
                        <span class="cart-amount size-overline font-heading">0</span>
                        <i class="ic ic-yoshida_bag"></i>
                    </a>
                </div>

                <?php
                include($root . "include/element-product-breadcrumb.php");
                include($root . "include/element-shop-breadcrumb.php");
                include($root . "include/element-journal-breadcrumb.php");

                ?>
            </div>
        </header>

        <div class="header-search hidden-device-sm" id="header-search-mobile">
            <form action="javascript:;" class="header-search-bar">
                <div class="fields">
                    <div class="field">
                        <div class="input">
                            <span class="magnifying-glass"><i class="ic ic-magnifying_glass"></i></span>
                            <input type="text" name="search" id="search" autocomplete="off" placeholder="Are you looking for something?">
                        </div>
                    </div>
                </div>
            </form>
        </div>