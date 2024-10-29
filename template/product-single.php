<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="product-single-main" class="product-single-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "Product",
            "url" => $root . "products.php"
        ),
        array(
            "name" => "PORTER",
            "url" => $root . "products.php"
        ),
        array(
            "name" => "FORCE",
            "url" => $root . "products.php"
        ),
        array(
            "name" => "WAIST BAG",
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>

    <div class="inner">
        <div class="container md">
            <section class="product-single-hero break-lg">
                <div class="product-thumbs-trigger">
                    <div class="panel-trigger" data-target="products-thumbs">
                        <i class="ic ic-grid_view_fill size-icon-20 c-orange"></i>
                    </div>
                </div>
                <div class="product-gallery">
                    <?php
                    $gallery_arr = array(
                        "./assets/img/design/product-single-image1.jpg",
                        "./assets/img/design/product-single-image2.jpg",
                        "./assets/img/design/product-single-image3.jpg",
                        "./assets/img/design/product-single-image4.jpg",
                        "./assets/img/design/product-single-image5.jpg",
                        "./assets/img/design/product-single-image6.jpg",
                        "./assets/img/design/product-single-image7.jpg",
                        "./assets/img/design/product-single-image8.jpg",
                        "./assets/img/design/product-single-image9.jpg",
                        "./assets/img/design/product-single-image10.jpg",
                        "./assets/img/design/product-single-image11.jpg",
                        "./assets/img/design/product-single-image12.jpg",
                        "./assets/img/design/product-single-image13.jpg",
                        "./assets/img/design/product-single-image14.jpg",
                        "./assets/img/design/product-single-image15.jpg",
                        "./assets/img/design/product-single-image16.jpg",
                        "./assets/img/design/product-single-image17.jpg",
                    );

                    ?>
                    <div class="product-carousel">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($gallery_arr as $gallery) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="blurred-media">
                                            <img
                                                id="<?php echo $gallery ?>"
                                                src="<?php echo $gallery ?>?v=<?php echo time(); ?>"
                                                data-fancybox="gallery"
                                                data-zoom-image="<?php echo $gallery ?>"
                                                class="zoom-on-hover"
                                                alt="Product Gallery"
                                                loading="lazy"
                                                draggable="false">
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="product-carousel-swiper-button-prev swiper-button-prev show-md"></div>
                        <div class="product-carousel-swiper-button-next swiper-button-next show-md"></div>
                        <div class="swiper-pagination a-center hidden-device-md"></div>
                    </div>

                    <div class="product-thumbs mobile-panel" id="products-thumbs">
                        <div class="panel-overlay hidden-device-md">
                        </div>
                        <div class="panel from-right width-full">
                            <div class="panel-header hidden-device-md">
                                <div class="panel-close margin-left-auto">
                                    <i class="ic ic-close c-orange size-icon-20"></i>
                                </div>
                            </div>
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-container">
                                    <div class="panel-body">
                                        <div class="product-thumbs-grid">
                                            <?php foreach ($gallery_arr as $index => $gallery) { ?>
                                                <div class="thumb blurred-media" data-slide="<?php echo $index; ?>">
                                                    <img
                                                        src="<?php echo $gallery ?>"
                                                        data-fancybox="gallery"
                                                        alt="Thumbnail"
                                                        loading="lazy"
                                                        draggable="false">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="panel-footer margin-top-60 hidden-device-md">
                                        <div class="panel-close a-center">
                                            <a href="javascript:;" class="button-des button-primary">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-single-header">
                    <div class="tags">
                        <div class="tag arrival">Arrival</div>
                        <div class="tag new-item">New Item</div>
                    </div>
                    <div class="brand-logo blurred-media">
                        <img src="./assets/img/design/product-single-brand-logo.jpg" alt="Brand Logo" loading="lazy" draggable="false">
                    </div>
                    <div class="title">
                        <h2 class="name size-subtitle2 weight-bold">PORTER / FORCE</h2>
                        <p class="description size-h2 weight-bold">WAIST BAG</p>
                    </div>
                    <div class="price">
                        <p class="regular size-subtitle2 weight-bold">฿15,950 <span class="tax-included c-gray-dark2 size-subtitle3 weight-bold">tax included</span></p>
                    </div>
                </div>
                <div class="product-single-variants blurred-media">
                    <img src="./assets/img/design/product-single-variants.jpg" alt="Mock Product Single Variants">
                </div>
                <div class="product-single-cta-buttons">
                    <a href="javascript:;" class="button-des button-cta">Add to cart</a>
                    <a href="javascript:;" class="button-des button-secondary">Add to favorite</a>
                </div>
                <div class="accordion-container trigger-second">
                    <!-- Dealer -->
                    <div class="accordion">
                        <h3 class="entry-title">Dealer</h3>
                        <div class="entry-panel">
                            <div class="entry-content">
                                <p>Dealer - will adjust styling later</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item details -->
                    <div class="accordion">
                        <h3 class="entry-title">Item details</h3>
                        <div class="entry-panel">
                            <div class="entry-content">
                                <table>
                                    <colgroup>
                                        <col class="table-category" />
                                        <col class="table-info" />
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>Product number</p>
                                            </td>
                                            <td>
                                                <p>855-05460</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Brand / Series</p>
                                            </td>
                                            <td>
                                                <p>PORTER > Force</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Category</p>
                                            </td>
                                            <td>
                                                <p>Waist bag > Waist bag</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Size</p>
                                            </td>
                                            <td>
                                                <p>W:380mm / H:215mm / D:0mm</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Weight</p>
                                            </td>
                                            <td>
                                                <p>340g</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Capacity</p>
                                            </td>
                                            <td>
                                                <p>0ℓ</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Material</p>
                                            </td>
                                            <td>
                                                <p>
                                                    Table: Nylon ox <br />
                                                    (back side: acrylic coating)
                                                    <br /><br />
                                                    Back: nylon ripstop<br />
                                                    (back side: acrylic coating/quilting)
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Share</p>
                                            </td>
                                            <td>
                                                <div class="social-links">
                                                    <a href="javascript:;" onclick="tweetShare()"><i class=" size-icon-16 ic ic-twitter"></i></a>
                                                    <a href="javascript:;" onclick="fbShare()"><i class="size-icon-16 ic ic-facebook-no-bg"></i></a>
                                                    <a href="javascript:;" onclick="lineMSG()"><i class="size-icon-16 ic ic-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Search keyword</p>
                                            </td>
                                            <td>
                                                <div class="hashtags">
                                                    <?php
                                                    $hashtags_arr = array(
                                                        "force",
                                                        "waistbag",
                                                        "porter",
                                                        "porterforce",
                                                        "olive_drab",
                                                        "navy",
                                                        "black"
                                                    );

                                                    foreach ($hashtags_arr as $hashtag) {
                                                    ?>
                                                        <a href="javascript:;" class="hashtag">#<?php echo $hashtag ?></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-container gift-wrapping-accordion">
                    <!-- Gift Wrapping -->
                    <div class="accordion">
                        <h3 class="entry-title">About gift wrapping</h3>
                        <div class="entry-panel">
                            <div class="entry-content">
                                <p> About gift wrapping - will adjust styling later</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-single-comment">
                    <div class="entry-content">
                        <p>
                            PORTER FORCE is a military-style series with a motif of accidental differences in fabric colors found in military goods.
                            <br><br>
                            The biggest feature is that there is a subtle color difference between the fabric of the front pocket and the fabric of the bag itself, making it look like they are using different lots of fabric. Among military wear and bags, there are rare products that have different colors in some fabrics, and this series was created with an interest in the irregular color scheme that was born by chance.
                            <br><br>
                            The outer material is made of industrial material woven with 210 denier 6 nylon strong thread. This fabric was originally used as a base fabric for rubber boats, etc., which was not supposed to be dyed. expresses.
                            <br><br>
                            Inspired by the lining of a military jacket, the emergency color orange is used for the interior, and ripstop nylon is quilted. Up to 4 different types (4 colors) of nylon tape are used in key points to create a realistic military feel.Except for some items, the interior pocket is removable and can be used as a single pouch.
                        </p>
                    </div>
                </div>
            </section>

            <section class="product-single-bottom-cart">
                <div class="product-image blurred-media show-md">
                    <img src="./assets/img/design/product-single-image1.jpg" alt="Product Image" loading="lazy" draggable="false">
                </div>
                <div class="product-info">
                    <div class="product-single-header show-md">
                        <div class="tags">
                            <div class="tag arrival">Arrival</div>
                            <div class="tag new-item">New Item</div>
                        </div>
                        <div class="title show-md">
                            <h2 class="name size-subtitle2 weight-bold">PORTER / FORCE</h2>
                            <p class="description size-h2 weight-bold">WAIST BAG</p>
                        </div>
                        <div class="price show-md">
                            <p class="regular size-subtitle2 weight-bold">฿15,950 <span class="tax-included c-gray-dark2 size-subtitle3 weight-bold">tax included</span></p>
                        </div>
                    </div>
                    <div class="product-single-variants blurred-media">
                        <img src="./assets/img/design/product-single-variants.jpg" alt="Mock Product Single Variants">
                    </div>
                    <div class="product-single-cta-buttons">
                        <a href="javascript:;" class="button-des button-cta">Add to cart</a>
                        <a href="javascript:;" class="button-des button-primary">Add to favorite</a>
                    </div>
                </div>
            </section>

            <section class="product-single-recommend">
                <div class="wrapper">
                    <div class="heading a-center">
                        <h2 class="title size-h1 weight-bold letter-spacing-md">RECOMMENDED for YOU</h2>
                    </div>
                    <div class="recommend-grid">
                        <?php
                        for ($i = 0; $i < 8; $i++) {
                        ?>
                            <?php
                            include($root . "include/element-product-card.php");
                            ?>
                        <?php
                        }
                        ?>
                    </div>
            </section>
        </div>
    </div>
</main>

<?php include($root . "footer.php"); ?>