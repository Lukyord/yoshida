<div id="journal-breadcrumb" class="breadcrumb">
    <div class="breadcrumb-wrapper">
        <ul class="main-links">
            <li><a href="<?php echo $root; ?>news.php">Journal list</a></li>
            <li><a href="<?php echo $root; ?>news.php">Product</a></li>
            <li><a href="<?php echo $root; ?>news.php">Shop</a></li>
            <li><a href="<?php echo $root; ?>news.php">Online Store</a></li>
            <li><a href="<?php echo $root; ?>news.php">Event</a></li>
            <li><a href="<?php echo $root; ?>news.php">Company</a></li>
        </ul>

        <div class="journal-grid">
            <?php
            for ($i = 0; $i < 5; $i++) {
                $styleClass = 'vertical';

                include 'element-journal-card.php';
            }
            ?>
        </div>
    </div>
</div>