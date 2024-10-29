<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="news-main" class="news-main template-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "News",
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>
    <?php
    $view_arr = array(
        array(
            "name" => "Grid",
            "class" => "view-item-grid",
            "container-id" => "content-container",
            "icon" => "grid-3x3"
        ),
        array(
            "name" => "List",
            "class" => "view-item-list",
            "container-id" => "content-container",
            "icon" => "list-bullet",
            "active" => true,
        )
    );

    include($root . "include/element-choose-view.php");
    ?>

    <section class="sc news template">
        <div class="container xl">
            <div class="title">
                <h1 class="size-h4 weight-semibold">News</h1>
            </div>
            <div class="template-2-sides break-lg">
                <!-- ASIDE -->
                <div class="template-2-sides-aside template-filter">
                    <div class="all show-md">
                        <a href="javascript:;" class="button-des button-primary bg-gray-dark c-white width-full">All</a>
                    </div>
                    <div class="panel-overlay hidden-device-md">
                    </div>

                    <div class="mobile-panel" id="news-category-filter-panel">
                        <div class="panel">
                            <div class="panel-header hidden-device-md">
                                <div class="panel-close margin-left-auto">
                                    <i class="ic ic-close c-orange size-icon-20"></i>
                                </div>
                                <h2 class="mobile-panel-title size-h4 letter-spacing-sm weight-semibold">Category</h2>
                            </div>
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-container">

                                    <div class="panel-body">
                                        <img src="./assets/img/design/news-category-filter.jpg" alt="Products Filter Mock Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-panel" id="news-year-filter-panel">
                        <div class="panel">
                            <div class="panel-header hidden-device-md">
                                <div class="panel-close margin-left-auto">
                                    <i class="ic ic-close c-orange size-icon-20"></i>
                                </div>
                                <h2 class="mobile-panel-title size-h4 letter-spacing-sm weight-semibold">Year</h2>
                            </div>
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-container">
                                    <div class="panel-body">
                                        <img src="./assets/img/design/news-year-filter.jpg" alt="Products Filter Mock Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT -->
                <div class="template-2-sides-content main-content">

                    <div class="template-2-sides-panel-ctrl hidden-device-md">
                        <div class="wrapper">
                            <a href="javascript:;" class="panel-trigger" data-target="news-category-filter-panel">
                                <i class="ic ic-filter c-orange"></i>
                                <p class="size-subtitle2">Narrow down</p>
                            </a>
                            <a href="javascript:;" class="panel-trigger" data-target="news-year-filter-panel">
                                <i class=" ic ic-history c-orange"></i>
                                <p class="size-subtitle2">By age</p>
                            </a>
                        </div>
                    </div>

                    <div id="content-container" class="content-container view-item-list">
                        <?php

                        $content = array(
                            "extra-class" => "content horizontal",
                            "destination" => "news-single.php",
                            "description" => "Product",
                            "title" => 'We are releasing the newly reborn "TANKER".',
                            "date" => "2024.05.08"
                        );

                        for ($i = 0; $i < 9; $i++) {
                            include($root . "include/element-content-card.php");
                        }
                        ?>
                    </div>

                    <div class="news-pagination">
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
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>