<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="news-single-main" class="template-single-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "News",
            "url" => $root . "news.php"
        ),
        array(
            "name" => 'We are launching the newly reborn "TANKER".',
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>

    <section class="sc template-single-content">
        <div class="header">
            <div class="description-and-share">
                <p class="size-subtitle2 weight-bold">Product</p>
                <div class="social-links show-md">
                    <a href="javascript:;" onclick="tweetShare()"><i class="size-icon-20 ic ic-twitter"></i></a>
                    <a href="javascript:;" onclick="fbShare()"><i class="size-icon-20 ic ic-facebook-no-bg"></i></a>
                    <a href="javascript:;" lineMSG()><i class="size-icon-20 ic ic-line"></i></a>
                </div>
            </div>
            <h1 class="title size-h3 weight-bold uppercase">We are launching the newly reborn "TANKER".</h1>
            <p class="date size-subtitle2 weight-bold c-gray-light">2024.05.08</p>
        </div>

        <div class="banner-image blurred-image">
            <img src="./assets/img/design/template-single-image1.jpg" alt="Banner Image" draggable="false" loading="lazy">
        </div>

        <div class="content">
            <div class="entry-content">
                <p class="a-center">
                    TANKER series was born in 1983.<br>
                    The unchanging texture and appearance are important heritage of Yoshida bags.
                    <br><br>
                    What should TANKER do to continue to be TANKER in the future?<br>
                    Our answer is "ALL NEW TANKER".
                    <br><br>
                    The new TANKER is made from 100% plant-based nylon.<br>
                    Together with Toray, we developed a strong, flexible, and innovative yarn and were the first in the world to successfully mass-produce it.
                    <br><br>
                    This is a made-in-Japan challenge with an eye on the future.
                </p>

                <p>
                    Pre-sale date: Wednesday, May 15, 2024
                    <br>
                    &lt;Sales store&gt;
                </p>
                <ul>
                    <li>Isetan Shinjuku store main building 2nd floor Isetan the space</li>
                    <li>DOVER STREET MARKET GINZA 2F</li>
                    <li>PORTER flagship store</li>
                    <li>PORTER EXCHANGE</li>
                    <li>Yoshida bag official online store</li>
                </ul>

                <p>
                    Release date: Saturday, May 25, 2024
                    <br>
                    &lt;Sales store&gt;
                </p>
                <ul>
                    <li>All PORTER STORE stores</li>
                    <li>st company</li>
                    <li>Carnation</li>
                    <li>PORTER EXCHANGE</li>
                    <li>ARTWORK</li>
                </ul>

                <p>
                    *Sales start at 12:00 PM (noon) at Yoshida Bag Official Online Store. <br>
                    *Release date differs at overseas stores.*The development period at ISETAN THE SPACE, DOVER STREET MARKET GINZA 2F will be from May 15th (Wednesday) to June 3rd (Monday), 2024. In addition, from June 4th (Tuesday) onwards, it will be available at PORTER SHINJUKU and PORTER GINZA.
                    <br><br>
                    <a href="#outer">Click here for the ALL NEW TANKER special site</a>
                    <br><br>
                    <a href="#outer">Click here for the reborn TANKER</a>
                </p>


            </div>
        </div>
    </section>

    <section class="sc other-content">
        <div id="content-container" class="content-container view-item-list">
            <?php

            $content = array(
                "extra-class" => "content horizontal",
                "destination" => "news-single.php",
                "description" => "Product",
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