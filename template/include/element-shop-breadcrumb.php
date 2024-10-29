<div id="shop-breadcrumb" class="breadcrumb">
    <div class="breadcrumb-wrapper">
        <ul class="main-links">
            <li><a href="<?php echo $root; ?>shop.php">Shop List</a></li>
            <li><a href="<?php echo $root; ?>news.php">Shop News</a></li>
            <li><a href="<?php echo $root; ?>shop-map.php">Search from the map</a></li>
        </ul>

        <div class="breadcrumb-shop-grid">
            <?php
            for ($i = 0; $i < 11; $i++) {
            ?>
                <div class="breadcrumb-shop-card">
                    <a href="<?php echo $root; ?>shop-inside.php" class="link-overlay">&nbsp;</a>
                    <div class="image blurred-media">
                        <img src="./assets/img/design/shop1.svg" alt="Shop Logo" class="cover" loading="lazy" draggable="false">
                    </div>
                    <div class="info">
                        <h3 class="name size-subtitle3 weight-bold">PORTER</h3>
                        <p class="description size-subtitle3 c-gray-dark">Porter</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>