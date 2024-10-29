<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="products-ranking-main" class="products-ranking-main">
    <section class="sc products-ranking">
        <?php
        $directory_arr = array(
            array(
                "name" => "Top",
                "url" => $root . "index.php"
            ),
            array(
                "name" => "Ranking",
                "url" => ""
            )
        );

        include($root . "include/element-directory.php");
        ?>

        <div class="container xl">
            <div class="title">
                <h1 class="size-h4 weight-semibold">Ranking</h1>
            </div>
            <?php
            include($root . "include/element-filter-tags.php");
            ?>

            <div class="template-2-sides break-lg">
                <!-- ASIDE -->
                <div class="template-2-sides-aside products-ranking-filter mobile-panel" id="products-ranking-filter-panel">
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
                                <div class="panel-body">
                                    <img src="./assets/img/design/products-ranking-filter.jpg" alt="Products Ranking Filter Mock Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT -->
                <div class="template-2-sides-content main-content">
                    <div class="template-2-sides-panel-ctrl hidden-device-md">
                        <div class="wrapper">
                            <a href="javascript:;" class="panel-trigger" data-target="products-ranking-filter-panel">
                                <i class="ic ic-filter c-orange"></i>
                                <p class="size-subtitle2">Search</p>
                            </a>
                            <a href="javascript:;" class="panel-trigger">
                                <i class=" ic ic-grid_view c-orange"></i>
                                <p class="size-subtitle2">All</p>
                            </a>
                        </div>
                    </div>

                    <div class="products-ranking-grid">
                        <?php
                        $product = array(
                            "tags" => array(
                                array(
                                    "name" => "Arrival",
                                    "class" => "arrival"
                                ),
                                array(
                                    "name" => "While stock lasts",
                                    "class" => "while-stock-last"
                                )
                            ),
                            "name" => "PORTER / TANKER",
                            "category" => "WAIST BAG",
                            "variant" => array(),
                        );

                        for ($i = 0; $i < 20; $i++) {

                        ?>
                            <div class="products-ranking-grid-item">
                                <h4 class="rank-number size-title weight-bold"><?php echo $i + 1 ?></h4>
                                <?php
                                include($root . "include/element-product-card.php");
                                ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="all-items-button">
                        <a href="<?php echo $root; ?>products.php" class="button-des button-primary">All Items</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>