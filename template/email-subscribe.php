<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="email-subscribe-main" class="email-subscribe-main">
    <?php
    $directory_arr = array(
        array(
            "name" => "Top",
            "url" => $root . "index.php"
        ),
        array(
            "name" => "Email newsletter registration / cancellation",
            "url" => ""
        )
    );

    include($root . "include/element-directory.php");
    ?>


    <section class="sc email-subscribe">
        <div class="container xl">
            <div class="title a-center">
                <h1 class="size-h4 weight-semibold">E-mail newsletter registration / cancellation</h1>
            </div>
            <div class="box-container">
                <div class="form-box">
                    <div class="box-title">
                        <h2 class="size-subtitle2 weight-bold">Register as a member and subscribe</h2>
                        <p class="subtitle size-subtitle3 weight-bold c-red">recommendation</p>
                    </div>
                    <div class="box-description">
                        <p class="size-body2 c-gray-dark">We will deliver valuable information such as new arrival items and event information of each store!</p>
                    </div>
                    <div class="cta">
                        <a href="javascript:;" class="button-des button-primary purple">New member registration</a>
                    </div>
                </div>

                <div class="form-box">
                    <div class="box-title">
                        <h2 class="size-subtitle2 weight-bold">Subscribe without registering as a member</h2>
                    </div>
                    <form action="javascript:;">
                        <div class="field">
                            <div class="input">
                                <input type="email" name="email" id="email" autocomplete="off" placeholder="email address">
                            </div>
                        </div>

                        <div class="box-description">
                            <p class="size-body2 c-gray-dark">There are many mistakes in the email address. Please check again and if there is no problem, click [Subscribe].</p>
                        </div>

                        <div class="cta">
                            <a href="javascript:;" class="button-des button-primary purple">Subscribe</a>
                        </div>
                    </form>
                </div>

                <div class="form-box">
                    <div class="box-title">
                        <h2 class="size-subtitle2 weight-bold">Unsubscribe from e-mail newsletter</h2>
                    </div>
                    <div class="box-description">
                        <p class="size-body2 c-gray-dark">
                            Customers who wish to unsubscribe from the e-mail newsletter can cancel it from the following [Unsubscribe from the e-mail newsletter].
                            <br>Important e-mails to our members will be sent even after the e-mail newsletter is unsubscribed.
                        </p>
                    </div>
                    <div class="cta">
                        <a href="javascript:;" class="button-des button-primary purple">Unsubscribe</a>
                    </div>
                </div>
            </div>
        </div>



    </section>
</main>

<?php include($root . "footer.php"); ?>