<div class="shop-card">
    <a href="<?php echo $root; ?><?php if ($page == 'shop.php' || $page == 'shop-map.php') {
                                        echo 'shop-inside.php';
                                    } elseif ($page == 'shop-inside.php' || $page == 'shop-single.php') {
                                        echo 'shop-single.php';
                                    } ?>" class="link-overlay">&nbsp;</a>
    <div class="shop-inside-image blurred-media">
        <img src="./assets/img/design/shop-inside-image1.jpg" alt="Shop Inside Image" class="cover" loading="lazy" draggable="false">
    </div>
    <div class="shop-info">
        <div class="shop-logo blurred-media">
            <img src="./assets/img/design/shop1.svg" alt="Shop Logo" draggable="false" loading="lazy">
        </div>

        <div class="text-content">
            <div class="header font-heading">
                <div class="name size-subtitle2 weight-bold">PORTER</div>
                <div class="description size-subtitle3 c-gray-dark2 margin-top-6">PORTER</div>
            </div>
            <div class="shop-description margin-top-12 size-body2">A directly managed store of Yoshida&Co.. With the main brand as the store name, we will express a wide range of world views of "PORTER", "LUGGAGE LABEL" and "YOSHIDA".</div>
        </div>
    </div>
</div>