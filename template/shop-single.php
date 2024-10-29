<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="shop-single-main" class="shop-single-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "Shop",
            "url" => $root . "shop.php"
        ),
        array(
            "name" => "PORTER",
            "url" => $root . "shop-inside.php"
        ),
        array(
            "name" => "PORTER OMOTESANDO",
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>

    <section class="sc shop-single">
        <div class="container xl">
            <div class="title">
                <h1 class="size-h4 weight-semibold">Shop</h1>
            </div>

            <?php
            include($root . "include/element-filter-tags.php");
            ?>

            <div class="template-2-sides break-lg">
                <!-- ASIDE -->
                <div class="template-2-sides-aside shop-filter mobile-panel" id="shop-filter-panel">
                    <div class="panel-overlay hidden-device-md">
                    </div>
                    <div class="panel">
                        <div class="panel-header hidden-device-md">
                            <div class="panel-close margin-left-auto">
                                <i class="ic ic-close c-orange size-icon-20"></i>
                            </div>
                            <h2 class="mobile-panel-title size-h4 letter-spacing-sm weight-semibold">Search</h2>
                        </div>
                        <div class="panel-scroll" data-lenis-prevent>
                            <div class="panel-container">
                                <div class="all padding-bottom-24 show-md">
                                    <a href="<?php echo $root; ?>shop.php" class="button-des button-primary bg-gray-dark c-white width-full">All</a>
                                </div>
                                <div class="panel-body">
                                    <img src="./assets/img/design/shop-single-filter.jpg" alt="Shop Filter Mock Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT -->
                <div class="template-2-sides-content main-content">
                    <div class="template-2-sides-panel-ctrl hidden-device-md">
                        <div class="wrapper">
                            <a href="javascript:;" class="panel-trigger" data-target="shop-filter-panel">
                                <i class="ic ic-filter c-orange"></i>
                                <p class="size-subtitle2">Search</p>
                            </a>
                            <a href="<?php echo $root; ?>shop-map.php" class="panel-trigger">
                                <i class=" ic ic-map-marker c-orange"></i>
                                <p class="size-subtitle2">Map</p>
                            </a>
                        </div>
                    </div>

                    <div class="shop-detail">
                        <div class="shop-logo">
                            <div class="logo">
                                <img src="./assets/img/design/shop1.svg" alt="Shop Logo">
                            </div>
                            <div class="text">
                                <h1 class="title size-h3 weight-bold margin-bottom-6">PORTER OMOTESANDO</h1>
                                <p class="description size-subtitle2 weight-bold">PORTER OMOTESANDO</p>
                            </div>
                        </div>

                        <div class="shop-overview">
                            <dl class="description-list">
                                <div class="description-list-item" data-col="1">
                                    <dt class="title">LOCATION</dt>
                                    <dd class="content">
                                        <address>5-6-8 Jingumae, Shibuya-ku, Tokyo 150-0001</address>
                                        <div class="links">
                                            <a href="#outer" class="link">MAP</a>
                                        </div>
                                    </dd>
                                </div>

                                <div class="description-list-item" data-col="1">
                                    <dt class="title">TEL</dt>
                                    <dd class="content">
                                        <a href="tel:+66354641766">03-5464-1766</a>
                                    </dd>
                                </div>

                                <div class="description-list-item" data-col="1">
                                    <dt class="title">HOURS</dt>
                                    <dd class="content">
                                        <p>PM12:00 - PM8:00</p>
                                        <p class="size-body2">*Business hours are subject to change. For more information, please check the SNS of the shop account.In addition, depending on the congestion in the store, it may be difficult to connect by phone, or admission may be restricted. Please note.</p>
                                    </dd>
                                </div>

                                <div class="description-list-item" data-col="1">
                                    <dt class="title">Services</dt>
                                    <dd class="content">
                                        <div class="services">
                                            <span class="service icon">
                                                <img src="./assets/img/design/service-icon1.png" alt="Service Icon">
                                            </span>
                                            <span class="service bg-blue">
                                                TAX FREE
                                            </span>
                                            <span class="service bg-orange">
                                                Repair Reception
                                            </span>
                                            <span class="service bg-purple">
                                                Mail Order Available
                                            </span>
                                        </div>
                                    </dd>
                                </div>

                                <div class="description-list-item" data-col="2">
                                    <dt class="title">HOLIDAY</dt>
                                    <dd class="content">
                                        <p>Tuesday</p>
                                    </dd>
                                </div>

                                <div class="description-list-item" data-col="2  ">
                                    <dt class="title">SNS</dt>
                                    <dd class="content">
                                        <div class="links">
                                            <a href="#outer" class="link social c-black">
                                                <i class="ic ic-twitter size-icon-16"></i>
                                            </a>
                                            <a href="#outer" class="link social c-blue">
                                                <i class="ic ic-facebook-no-bg size-icon-16"></i>
                                            </a>
                                            <a href="#outer" class="link social c-pink">
                                                <i class="ic ic-instagram size-icon-16"></i>
                                            </a>
                                        </div>
                                    </dd>
                                </div>
                            </dl>
                        </div>

                        <div class="shop-description">
                            <div class="entry-content">
                                <p>
                                    "PORTER OMOTESANDO", the first directly managed store of Yoshida&Co. & Co., opened in the quiet back alley of Omotesando in the spring of 2000.In March 2015, the 80th anniversary of Yoshida&Co. & Co., Ltd., the space was reborn as a hotel lobby.
                                    <br><br>
                                    A newly created spiral staircase leads to the second floor, expressing a more fulfilling world view of "PORTER", "LUGGAGE LABEL" and "POTR". In addition to bags, we also have wonderful selection items that we have come across all over the world, as well as limited items and collaboration items.
                                    <br><br>
                                    Please come to the newly reborn PORTER OMOTESANDO.
                                </p>
                            </div>

                            <div class="swiper shop-images">
                                <div class="swiper-wrapper">
                                    <?php
                                    for ($i = 0; $i < 10; $i++) {
                                    ?>
                                        <div class="swiper-slide blurred-media">
                                            <img src="./assets/img/design/shop-image<?php echo $i + 1 ?>.jpg" alt="Shop Image" draggable="false" loading="lazy">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="swiper-pagination a-center"></div>

                            </div>

                            <div class="entry-content">
                                <p>
                                    The interior of the store, which has the image of a hotel lobby, is a calm space where you can enjoy shopping slowly.
                                    <br>
                                    Please enjoy the world of Yoshida&Co..
                                </p>
                            </div>

                        </div>

                        <div class="shop-related-news">
                            <h3 class="size-h3 weight-bold margin-bottom-24">SHOP NEWS</h3>
                            <div class="shop-inside-grid">
                                <?php
                                $content = array(
                                    "extra-class" => "vertical",
                                    "destination" => "news-single.php",
                                    "description" => "Product",
                                    "title" => 'We are releasing the newly reborn "TANKER".',
                                    "date" => "2024.05.08"
                                );

                                for ($i = 0; $i < 3; $i++) {
                                    include($root . "include/element-content-card.php");
                                }
                                ?>
                            </div>
                            <div class="all-news-button a-center">
                                <a href="<?php echo $root; ?>news.php" class="button-des button-primary">See All</a>
                            </div>
                        </div>
                        <div class="shop-list">
                            <h3 class="size-h3 weight-bold margin-bottom-24">PORTER</h3>
                            <div class="shop-inside-grid">
                                <?php
                                for ($i = 0; $i < 3; $i++) {
                                    include($root . "include/element-shop-card.php");
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include($root . "footer.php"); ?>