<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="news-single-main" class="story-single-main template-single-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "Story",
            "url" => $root . "news.php"
        ),
        array(
            "name" => 'NEW TANKER Advanced details',
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>

    <section class="sc story-single template-single-content">
        <div class="header">
            <div class="description-and-share">
                <p class="size-subtitle2 weight-bold">No.12</p>
                <div class="social-links show-md">
                    <a href="javascript:;" onclick="tweetShare()"><i class="size-icon-20 ic ic-twitter"></i></a>
                    <a href="javascript:;" onclick="fbShare()"><i class="size-icon-20 ic ic-facebook-no-bg"></i></a>
                    <a href="javascript:;" lineMSG()><i class="size-icon-20 ic ic-line"></i></a>
                </div>
            </div>
            <h1 class="title size-h3 weight-bold uppercase">NEW TANKER Advanced details</h1>
            <p class="date size-subtitle2 weight-bold c-gray-light">2024.05.08</p>
        </div>

        <div class="banner-image blurred-media">
            <img src="./assets/img/design/story-single-image1.jpg" alt="Banner Image" draggable="false" loading="lazy">
        </div>

        <div class="content">
            <div class="entry-content">
                <p>The new 40-inch model has been updated in terms of fabric, specifications, and ease of use, while maintaining its unchanging materials and appearance.
                    <br>We have updated every detail by leveraging the experience and technology we have cultivated over 40 years.
                    In Column 3, we will introduce the evolved details of the reborn TANKER.
                    <br><br><br>
                    &lt;World's first mass production. Porter's original nylon made from plants.&gt;
                    <br><br>
                    An original 3-layer fabric developed with the motif of the flight jacket "MA-1" .
                    <br>The 3-layer fabric of nylon twill (front) + polyester cotton (middle layer) + nylon taffeta (back) is very light and has a soft feel, and the bright rescue orange on the back is attractive.
                    <br><br>
                    The outer material of the newly reborn TANKER has been reborn as 100% plant-based bio-based nylon made from "corn" and "castor" .
                    <br><br>
                    This plant-derived nylon is strong, supple, and soft to the touch, and is of the same quality as, or in some cases even better than, the fabrics used in previous TANKER products.
                </p>

                <figure class="blurred-media">
                    <img src="./assets/img/design/story-single-image2.jpg" alt="Story Image" draggable="false" loading="lazy">
                </figure>

                <p>
                    &lt;Parts with ingenuity even in invisible parts&gt;
                    <br><br>
                    TANKER parts that are easier to use and more beautifully finished.
                    <br>The slider has a raised tip that makes it easier to grip, and has been carefully designed to ensure smooth opening and closing of the zipper.
                    <br>The painting of the parts is improved by repeating the painting 6 times on top of the base material to prevent the color from peeling off. In addition, we have painted even the inner parts of parts that could not be painted in the past, in pursuit of a more beautiful appearance.
                    <br>The shape of the eggplant lever has also been improved to a straighter shape that makes it easier to open.
                </p>

                <figure class="blurred-media">
                    <img src="./assets/img/design/story-single-image3.jpg" alt="Story Image" draggable="false" loading="lazy">
                </figure>

                <p>
                    &lt;Longer and easier-to-use pocket&gt;
                    <br><br>
                    Highly visible clear pockets on the interior of TANKER.
                    <br>The design has been changed so that it can be attached and detached and used as a standalone unit.
                    <br><br>
                    There are 5 different sizes to match the size of your bag. Only for 3WAY briefcases, a zipper type is used to prevent contents from spilling when the bag is used in different directions.
                </p>

                <figure class="blurred-media">
                    <img src="./assets/img/design/story-single-image4.jpg" alt="Story Image" draggable="false" loading="lazy">
                </figure>

                <p>
                    &lt;New “PORTER name”&gt;
                    <br><br>
                    The new TANKER has the new PORTER name embroidered on it.
                    <br>By increasing the density of the weave to its limit, the word PORTER is expressed more smoothly and clearly.
                </p>
            </div>
        </div>

        <div class="related-story">
            <div class="background blurred-media">
                <img src="./assets/img/design/story-single-image5.jpg" alt="Related Story Background" draggable="false" loading="lazy">
            </div>
            <div class="wrapper">
                <h3 class="size-h3 weight-bold">JOURNAL</h3>
                <div class="item">
                    <a href="<?php echo $root; ?>story-single.php" class="link-overlay">&nbsp;</a>
                    <div class="blurred-media">
                        <img src="./assets/img/design/story-single-previous1.jpg" alt="Related Story" draggable="false" loading="lazy">
                    </div>
                </div>
                <div class="item">
                    <a href="<?php echo $root; ?>story-single.php" class="link-overlay">&nbsp;</a>
                    <div class="blurred-media">
                        <img src="./assets/img/design/story-single-previous2.jpg" alt="Related Story" draggable="false" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc other-content">
        <div id="content-container" class="content-container view-item-list">
            <?php

            $content = array(
                "extra-class" => "content horizontal",
                "destination" => "story-single.php",
                "description" => "No.11",
                "title" => 'We are releasing the newly reborn "TANKER".',
                "date" => "2024.05.08"
            );

            for ($i = 0; $i < 4; $i++) {
                include($root . "include/element-content-card.php");
            }
            ?>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>