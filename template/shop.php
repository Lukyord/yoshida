<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="shop-main" class="shop-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "Shop",
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>

    <section class="sc shop">

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
                                    <img src="./assets/img/design/shop-filter.jpg" alt="Shop Filter Mock Image">
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

                    <div class="shop-grid">
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                            include($root . "include/element-shop-card.php");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>