<footer>
    <div class="wrapper">
        <div class="flex-top footer-nav">
            <a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_directory"); ?>/images/logo_white.svg" alt="" class="footer-logo"></a>
            <dl>
                <dt>お取り引きについて</dt>
                <dd>
                    <?php
                        wp_nav_menu(
                            array(
                                "thema-location" => "footer_1",
                                "container" => "",
                            )
                        );
                    ?>
                </dd>
            </dl>
            <dl>
                <dt>このサイトについて</dt>
                <dd>
                    <?php
                        wp_nav_menu(
                            array(
                                "thema-location" => "footer_2",
                                "container" => "",
                            )
                        );
                    ?>
                </dd>
            </dl>
            <dl>
                <dt>トップ</dt>
                <dd>
                    <?php
                        wp_nav_menu(
                            array(
                                "thema-location" => "footer_3",
                                "container" => "",
                            )
                        );
                    ?>
                </dd>
            </dl>
        </div>
    </div>
    <small>Copyright &copy; Mori designs All Rights Reserved.</small>
</footer>