<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="products-main" class="products-main">
    <section class="sc products">
        <div class="hidden-mobile">
            <?php
            $directory_arr = array(
                array(
                    "name" => "Top",
                    "url" => $root . "index.php"
                ),
                array(
                    "name" => "All items",
                    "url" => ""
                )
            );

            include($root . "include/element-directory.php");
            ?>
        </div>

        <?php
        $view_arr = array(
            array(
                "name" => "Grid 3x3",
                "class" => "view-item-large",
                "container-id" => "products-grid",
                "icon" => "grid-3x3"
            ),
            array(
                "name" => "Grid 5x5",
                "class" => "view-item-small",
                "container-id" => "products-grid",
                "icon" => "grid-4x4",
                "active" => true,
            )
        );

        include($root . "include/element-choose-view.php");
        ?>

        <div class="container xl">
            <div class="template-2-sides break-lg">
                <!-- ASIDE -->
                <div class="template-2-sides-aside mobile-panel products-filter" id="products-filter-panel">
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
                                <div class="panel-search show-md">
                                    <div class="all-items">
                                        <a href="javascript:;" class="button-des button-primary bg-gray-dark c-white">All items</a>
                                    </div>
                                    <div class="search-product-name">
                                        <form action="javascript:;">
                                            <div class="fields">
                                                <div class="field">
                                                    <div class="input">
                                                        <input type="text" name="search-product-name" id="search-product-name" autocomplete="off" placeholder="Product Name">
                                                        <button type="submit">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="./assets/img/design/products-filter.jpg" alt="Products Filter Mock Image">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="wrapper">
                                <a href="javascript:;" class="button-des button-primary panel-close clear-filter">Clear</a>
                                <a href="javascript:;" class="button-des button-primary panel-close apply-filter">Narrow Down</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT -->
                <div class="template-2-sides-content main-content">
                    <div class="sortby-value margin-bottom-12 hidden-device-md">
                        <p id="sortby-value" class="size-subtitle3 c-gray-dark2"></p>
                    </div>
                    <div class="quantity">
                        <h4 class="quantity-count size-h4 weight-bold margin-bottom-6">1560 Items</h4>
                    </div>
                    <div class="template-2-sides-panel-ctrl hidden-device-md">
                        <div class="wrapper">
                            <a href="javascript:;" class="panel-trigger" data-target="products-filter-panel">
                                <i class="ic ic-filter c-orange"></i>
                                <p class="size-subtitle2">Search</p>
                            </a>
                            <a href="javascript:;" class="panel-trigger" data-target="products-sortby-panel">
                                <i class=" ic ic-sort_by c-orange"></i>
                                <p class="size-subtitle2">Line up / Display</p>
                            </a>
                        </div>
                    </div>
                    <div class="products-sortby mobile-panel" id="products-sortby-panel">
                        <div class="panel-overlay hidden-device-md">
                        </div>
                        <div class="panel">
                            <div class="panel-header hidden-device-md">
                                <div class="panel-close margin-left-auto">
                                    <i class="ic ic-close c-orange size-icon-20"></i>
                                </div>
                                <h2 class="mobile-panel-title size-h4 letter-spacing-sm weight-semibold">Line up / Display</h2>
                            </div>
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-container">
                                    <div class="panel-body">
                                        <form action="javascript:;">
                                            <div class="fields show-md">
                                                <!-- SORT ORDER -->
                                                <div class="field">
                                                    <select id="sort-order" class="dynamic-select">
                                                        <option value="newest">New arrival order</option>
                                                        <option value="recommend">Recommended order</option>
                                                        <option value="price-lowest">Price in ascending order</option>
                                                        <option value="price-highest">Highest price</option>
                                                    </select>
                                                </div>

                                                <!-- SALES TYPE -->
                                                <div class="field">
                                                    <select id="sales-type" class="dynamic-select">
                                                        <option value="regular+reserved">Regular + Reserved items</option>
                                                        <option value="regular">Regular products</option>
                                                        <option value="reserved">Reserved items</option>
                                                    </select>
                                                </div>

                                                <!-- COLORS -->
                                                <div class="field">
                                                    <select id="colors" class="dynamic-select">
                                                        <option value="all-colors">All colors</option>
                                                        <option value="recommended-colors">Recommended colors</option>
                                                    </select>
                                                </div>

                                                <!-- IN STOCK -->
                                                <div class="field">
                                                    <select id="in-stock" class="dynamic-select">
                                                        <option value="all-in-stock">All in stock</option>
                                                        <option value="in-stock-only">In stock only</option>
                                                    </select>
                                                </div>

                                                <!-- DISPLAY NUMBER -->
                                                <div class="field">
                                                    <select id="display-number" class="dynamic-select">
                                                        <option value="display-60">Displayed number: 60</option>
                                                        <option value="display-90">Displayed number: 90</option>
                                                    </select>
                                                </div>

                                                <!-- DISPLAY SIZE -->
                                                <div class="field hidden-device-md">
                                                    <select id="display-size" class="dynamic-select" data-container-id="products-grid">
                                                        <option value="small">Small</option>
                                                        <option value="large">Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="accordion-container trigger-all hidden-device-md">
                                            <!-- SORT ORDER -->
                                            <div class="accordion">
                                                <h3 class="entry-title">Sort Order</h3>
                                                <div class="entry-panel">
                                                    <div class="mobile-select-options" data-target="sort-order"></div>
                                                </div>
                                            </div>

                                            <!-- SALES TYPE -->
                                            <div class="accordion">
                                                <h3 class="entry-title">Sales Type</h3>
                                                <div class="entry-panel">
                                                    <div class="mobile-select-options" data-target="sales-type"></div>
                                                </div>
                                            </div>

                                            <!-- COLORS -->
                                            <div class="accordion">
                                                <h3 class="entry-title">Color Display</h3>
                                                <div class="entry-panel">
                                                    <div class="mobile-select-options" data-target="colors"></div>
                                                </div>
                                            </div>

                                            <!-- IN STOCK -->
                                            <div class="accordion">
                                                <h3 class="entry-title">Inventory Display</h3>
                                                <div class="entry-panel">
                                                    <div class="mobile-select-options" data-target="in-stock"></div>
                                                </div>
                                            </div>

                                            <!-- DISPLAY NUMBER -->
                                            <div class="accordion">
                                                <h3 class="entry-title">Displayed Results</h3>
                                                <div class="entry-panel">
                                                    <div class="mobile-select-options" data-target="display-number"></div>
                                                </div>
                                            </div>

                                            <!-- DISPLAY SIZE -->
                                            <div class="accordion">
                                                <h3 class="entry-title">Display Size</h3>
                                                <div class="entry-panel">
                                                    <div class="mobile-select-options" data-target="display-size"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="products-grid" class="products-grid view-item-small">
                        <?php
                        $product = array(
                            "tags" => array(
                                array(
                                    "name" => "Arrival",
                                    "class" => "arrival"
                                ),
                                array(
                                    "name" => "PC storage",
                                    "class" => "pc-storage"
                                ),
                                array(
                                    "name" => "New item",
                                    "class" => "new-item"
                                ),
                                array(
                                    "name" => "Sold Out",
                                    "class" => "sold-out"
                                ),
                                array(
                                    "name" => "While stock lasts",
                                    "class" => "while-stock-last"
                                )
                            ),
                            "name" => "PORTER / TANKER",
                            "category" => "WAIST BAG",
                            "variant" => array(
                                array(
                                    "color" => "#000000",
                                    "img" => "./assets/img/design/product-image1.jpg",
                                ),
                                array(
                                    "color" => "#3775E1",
                                    "img" => "./assets/img/design/product-image2.jpg",
                                ),
                                array(
                                    "color" => "#D9BF98",
                                    "img" => "./assets/img/design/product-image3.jpg",
                                )
                            ),
                        );

                        for ($i = 0; $i < 20; $i++) {
                            include($root . "include/element-product-card.php");
                        }
                        ?>
                    </div>

                    <div class="products-pagination">
                        <div class="pagination" role="navigation">
                            <a class="link previous-page" rel="prev" href="#">&nbsp;</a>
                            <span aria-current="page" class="current">1</span>
                            <a class="page" href="#">2</a>
                            <a class="page" href="#">3</a>
                            <a class="page" href="#">4</a>
                            <span class="pagination-filler">...</span>
                            <a class="page" href="#">27</a>
                            <a class="link next-page" rel="next" href="#">&nbsp;</a>
                        </div>
                    </div>

                    <div class="pickup-products show-md">
                        <h3 class="title size-h3 weight-bold margin-bottom-24">PICK UP</h3>

                        <div class="pickup-products-grid">
                            <?php
                            $pickup_products_arr = array(
                                "./assets/img/design/pickup_product1.jpg",
                                "./assets/img/design/pickup_product2.jpg",
                                "./assets/img/design/pickup_product3.jpg",
                                "./assets/img/design/pickup_product4.jpg",
                                "./assets/img/design/pickup_product5.jpg",
                                "./assets/img/design/pickup_product6.jpg",
                                "./assets/img/design/pickup_product7.jpg",
                                "./assets/img/design/pickup_product8.jpg",
                            );

                            foreach ($pickup_products_arr as $index => $img) {
                            ?>
                                <div class="pickup-product-item blurred-media">
                                    <a href="<?php echo $root; ?>product-single.php" class="link-overlay">&nbsp;</a>
                                    <img src="<?php echo $img ?>" alt="Pickup Product <?php echo $index + 1; ?>" loading="lazy" draggable="false">
                                </div>
                            <?php
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