<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="shop-map-main" class="shop-map-main">
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
            "name" => "Search from the map",
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>
    <section class="sc shop-map">
        <div class="container xl">
            <div class="title">
                <h1 class="size-h4 weight-semibold">Search from the map</h1>
            </div>

            <div class="map-and-search">
                <div class="search-bar" data-grid="search-bar">
                    <div class="wrapper">
                        <div class="search-input">
                            <form action="javascript:;">
                                <div class="field">
                                    <div class="input">
                                        <input type="text" name="search-product-name" id="search-product-name" autocomplete="off" placeholder="Keywords / Place names / Addresses">
                                    </div>
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="filter-store">
                            <div class="panel-trigger unlock-scroll show-md" data-target="shop-map-filter-panel">
                                <i class="ic ic-page_info c-orange size-icon-20" style="padding-top: 0.3em;"></i>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-panel shop-map-filter" id="shop-map-filter-panel">
                        <div class="panel">
                            <div class="panel-header">
                                <div class="panel-close margin-left-auto">
                                    <i class="ic ic-close c-orange size-icon-20"></i>
                                </div>
                            </div>
                            <div class="panel-container">
                                <div class="panel-scroll" data-lenis-prevent>
                                    <div class="panel-body">
                                        <?php
                                        for ($i = 0; $i < 21; $i++) {

                                        ?>
                                            <a href="javascript:;" class="filter-out-shop shop-logo-image" id="shop-<?php echo $i + 1 ?>">
                                                <img src="./assets/img/design/shop1.svg" alt="Shop Logo">
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="results mobile-panel" data-grid="results" id="results-panel">
                    <div class="panel">
                        <div class="panel-container">
                            <div class="scroll-wrapper" data-lenis-prevent="">
                                <div class="results-content">
                                    <?php
                                    for ($i = 0; $i < 11; $i++) {
                                    ?>
                                        <a href="javascript:;" class="map-result-item">
                                            <div class="shop-logo-image blurred-media">
                                                <img src="./assets/img/design/shop1.svg" alt="Shop Logo" draggable="false" loading="lazy">
                                            </div>
                                            <div class="info size-subtitle3 c-gray-dark2">
                                                <h4 class="name weight-bold c-black">Porter Omotesando</h4>
                                                <p class="description ">Porter</p>
                                                <address>5-6-8 Jingumae, Shibuya-ku, Tokyo</address>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="panel-trigger hidden-device-md unlock-scroll margin-top-36" data-target="shop-map-filter-panel">
                                <i class="ic ic-page_info c-orange size-icon-20" style="padding-top: 0.3em;"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="map" data-grid="map">
                    <div class="results-panel-trigger-mobile hidden-device-md">
                        <div class="panel-trigger unlock-scroll" data-target="results-panel">
                            <i class="ic ic-chevron-left"></i>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681"
                        title="mock iframe"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="sc shop-map-all">
        <div class="container xl">
            <div class="shop-grid">
                <?php
                for ($i = 0; $i < 8; $i++) {
                    include($root . "include/element-shop-card.php");
                }
                ?>
            </div>
        </div>

    </section>
</main>

<?php include($root . "footer.php"); ?>