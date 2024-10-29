<div class="choose-view">
    <div class="container xl">
        <div class="choose-view-content">
            <?php
            include($root . "include/element-filter-tags.php");
            ?>
            <div class="choose-view-items">
                <?php foreach ($view_arr as $view) { ?>
                    <a
                        href="javascript:;"
                        class="choose-view-item <?php if (isset($view["active"])) echo "active"; ?>"
                        data-view="<?php echo $view["class"] ?>"
                        data-container-id="<?php echo $view["container-id"] ?>">

                        <i class="ic ic-<?php echo $view["icon"] ?> size-icon-20"></i>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>