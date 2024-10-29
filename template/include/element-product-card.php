<div class="product-card">
    <a href="<?php echo $root; ?>product-single.php" class="link-wrap">
        <div class="product-image blurred-media">
            <img src="./assets/img/design/product-image1.jpg" alt="Product Image" loading="lazy" draggable="false">
        </div>
        <div class="product-info">
            <div class="info">
                <?php
                if (count($product["tags"]) > 0) {
                ?>
                    <div class="tags">
                        <?php
                        foreach ($product["tags"] as $tag) {
                        ?>
                            <span class="tag <?php echo $tag["class"] ?>"><?php echo $tag["name"] ?></span>
                        <?php } ?>
                    </div>
                <?php } ?>
                <h3 class="name size-subtitle3 weight-bold"><?php echo $product["name"] ?></h3>
                <p class="category size-subtitle3 weight-bold c-gray"><?php echo $product["category"] ?></p>
                <?php
                if (count($product["variant"]) > 0) {
                ?>
                    <div class="variants">
                        <?php
                        foreach ($product["variant"] as $variant) {
                        ?>
                            <div
                                class="variant"
                                style="background-color: <?php echo $variant["color"] ?>"
                                data-image="<?php echo $variant["img"]; ?>">
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="product-price">
                <p class="size-subtitle3">฿15,950</p>
            </div>
        </div>
    </a>
</div>