<div class="content-card <?php echo $content["extra-class"] ?>">
    <a href="<?php echo $root; ?><?php echo $content["destination"] ?>" class="link-overlay">&nbsp;</a>
    <div class="image">
        <img src="./assets/img/design/index-grid-poster<?php echo $i + 1 ?>.jpg" alt="Poster">
    </div>
    <div class="text-content">
        <p class="description">
            <?php echo $content["description"] ?>
        </p>
        <h3 class="title">
            <?php echo $content["title"] ?>
        </h3>
        <p class="date c-gray-light">
            <?php echo $content["date"] ?>

        </p>
    </div>
</div>