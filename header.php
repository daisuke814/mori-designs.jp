<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">

    <?php wp_head(); ?>

    <!--  Bootstrap  -->
    <!--    <link rel="stylesheet" href="./css/bootstrap.min.css">-->
    <!--    <script src="./js/bootstrap.min.js"></script>-->
    <!--    <script src="./js/bootstrap.bundle.min.js"></script>-->

    <?php wp_enqueue_scripts("my_styles"); ?>

    <!--  Fonts  -->
    <link href=”https://fonts.googleapis.com/css?family=Noto+Sans+JP&amp;subset=japanese” rel=”stylesheet”>

    <!--  Original Style Sheet  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Scripts  -->
    <script src="./js/jquery.min.js"></script>

    <title>Mori Design</title>
</head>
<body>
    <header>
        <div class="wrapper flex">
            <h1>
                <a href="<?php bloginfo("url"); ?>">
                    <img src="<?php bloginfo("template_directory"); ?>/images/logo.png" alt="Mori design" id="logo">
                </a>
            </h1>
            <nav id="top-nav">
                <?php
                    wp_nav_menu(
                        array(
                            "thema-location" => "global",
                            "container" => "",
                        )
                    );
                ?>
<!--                <ul>-->
<!--                    <li><a href="#"><span>ホーム</span></a></li>-->
<!--                    <li><a href="#"><span>こだわり</span></a></li>-->
<!--                    <li><a href="#"><span>料金</span></a></li>-->
<!--                    <li><a href="#"><span>制作事例</span></a></li>-->
<!--                    <li><a href="#"><span>お問い合わせ</span></a></li>-->
<!--                </ul>-->
            </nav>
            <!--            <ul class="header-menu">-->
            <!--                <li><a href="#">既にお取引している方</a></li>-->
            <!--                <li><a href="#">ご相談</a></li>-->
            <!--            </ul>-->
        </div>
    </header>