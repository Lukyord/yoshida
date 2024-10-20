<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="products-main" class="products-main">
    <section class="sc products">
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

        <?php
        $view_arr = array(
            array(
                "name" => "Grid 3x3",
                "class" => "view-grid-3x3",
                "container-id" => "products-grid",
                "icon" => "./assets/img/design/grid-3x3.svg"
            ),
            array(
                "name" => "Grid 4x4",
                "class" => "view-grid-4x4",
                "container-id" => "products-grid",
                "icon" => "./assets/img/design/grid-4x4.svg"
            )
        );

        include($root . "include/element-choose-view.php");
        ?>

        <div class="container xl">
            <div class="template-2-sides">
                <div class="template-2-sides-aside filter">
                    <img src="./assets/img/design/products-filter.jpg" alt="Products Filter Mock Image">
                </div>
                <div class="template-2-sides-content main-content">
                    <div class="quantity"></div>
                    <div class="products-filter"></div>
                    <div class="products-grid"></div>
                    <div class="pagination"></div>
                    <div class="pickup-product"></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>