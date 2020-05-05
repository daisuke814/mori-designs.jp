<?php

    // CSSの読み込み
    function my_styles() {
        wp_enqueue_style( 'ress.css', get_template_directory_uri() . '/css/ress.css', array(), '1.0' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0' );
        wp_enqueue_style( 'Original Style', get_template_directory_uri() . '/css/style.css', array(), '1.0' );
    }
    add_action( 'wp_enqueue_scripts', 'my_styles');

    //
    function my_menus() {
        register_nav_menus(
            array(
                //複数のナビゲーションメニューを登録する関数
                //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
                'global' => 'グローバルメニュー',
                'footer_1'  => 'フッターメニュー1',
                'footer_2'  => 'フッターメニュー2',
                'footer_3'  => 'フッターメニュー3',
            )
        );
    }
    add_action('after_setup_theme', 'my_menus');

?>