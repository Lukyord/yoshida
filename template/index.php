<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="index-main" class="index-main">
    <?php
    include($root . "include/element-index-butler.php");
    include($root . "include/element-index-notice.php");
    ?>

    <section class="sc index-hero">
        <?php
        $cover = './assets/img/design/index-hero-bg.jpg';
        $cover_m = './assets/img/design/index-hero-bg-m.jpg';
        if (preg_match("/\.(mp4)$/", $cover)) { ?>
            <figure class="object blurred-media">
                <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
            </figure>
        <?php } else { ?>
            <picture class="object blurred-media">
                <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                <img src="<?php echo $cover; ?>" alt="Hero Background" loading="lazy" draggable="false">
            </picture>
        <?php } ?>
    </section>

    <section class="sc index-poster-grid">
        <div class="poster-grid">
            <?php
            for ($i = 0; $i < 9; $i++) {
                include($root . "include/element-index-product-poster.php");
            }
            ?>
        </div>
    </section>

    <section class="sc index-pickup-product">
        <div class="container xl">
            <div class="wrapper">
                <div class="heading a-center">
                    <h2 class="title size-h1 weight-bold letter-spacing-md">PICK UP PRODUCTS</h2>
                    <p class="description size-subtitle1">TANKER</p>
                </div>
                <div class="swiper pickup-product">
                    <div class="swiper-wrapper">
                        <?php
                        for ($i = 0; $i < 20; $i++) {
                        ?>
                            <div class="swiper-slide">
                                <?php
                                include($root . "include/element-product-card.php");
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="pickup-product-swiper-button-prev swiper-button-prev show-sm"></div>
                    <div class="pickup-product-swiper-button-next swiper-button-next show-sm"></div>
                </div>
                <div class="see-all-btn">
                    <a href="<?php echo $root; ?>product-single.php" class="button-des button-primary">See all</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sc index-ranking">
        <div class="container xl">
            <div class="wrapper">
                <div class="heading a-center">
                    <h2 class="title size-h1 weight-bold letter-spacing-md">RANKING</h2>
                </div>
                <div class="ranking-grid">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                    ?>
                        <div class="ranking-grid-item">
                            <h4 class="size-title weight-bold"><?php echo $i + 1 ?></h4>
                            <?php
                            include($root . "include/element-product-card.php");
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="see-all-btn">
                    <a href="<?php echo $root; ?>product-single.php" class="button-des button-primary">See all</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>