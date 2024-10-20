<div class="choose-view">
    <div class="container xl">
        <div class="choose-view-content">
            <div class="filter-tags">
                <a href="javascript:;" class="filter-tag">
                    <p class="tag-name">PALACE PORTER</p>
                    <span class="close-tag-btn">
                        <i class="ic ic-close size-icon-10 c-gray"></i>
                    </span>
                </a>
                <a href="javascript:;" class="filter-tag">
                    <p class="tag-name">POTR</p>
                    <span class="close-tag-btn">
                        <i class="ic ic-close size-icon-10 c-gray"></i>
                    </span>
                </a>
                <a href="javascript:;" class="filter-tag">
                    <p class="tag-name">BACKPACK</p>
                    <span class="close-tag-btn">
                        <i class="ic ic-close size-icon-10 c-gray"></i>
                    </span>
                </a>
            </div>
            <div class="choose-view-items">
                <?php foreach ($view_arr as $view) { ?>
                    <a
                        href="javascript:;"
                        class="choose-view-item"
                        data-view="<?php echo $view["class"] ?>"
                        data-container-id="<?php echo $view["container-id"] ?>">

                        <img src="<?php echo $view["icon"]; ?>" alt="<?php echo $view["name"]; ?>" draggable="false">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>