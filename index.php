

    <?php get_header() ?>

    <div class="header-top flex-all-center">
        <div class="wrapper animated fadeIn">
            <div class="header-top-inside box-shadow">
                <h2>こだわりのデザインを提供</h2>
                <p>
                    画像 フォント 色 レイアウト を忠実に設計し美しく見やすいデザインを提供します。<br>
                    バナー・ポスター・Webデザイン・冊子デザインなどお任せください！
                </p>
                <a href="#" class="button">さっそく相談する</a>
            </div>
        </div>
    </div>

    <main>

        <div class="wrapper">
            <article>
                <h2>意識していること</h2>
                <div class="flex">
                    <section class="card box-shadow">
                        <img src="<?php bloginfo("template_directory"); ?>/images/top1.jpg" alt="">
                        <h3>フォントが与える印象</h3>
                        <p>
                            パソコン標準搭載のフォントだけでは表現に限界があります。
                            無料フォントや有料フォントを多く利用することで表現の選択を遥かに拡大させ
                            より素晴らしい作品が生まれます。
                            モリサワフォント・モトヤフォント・DynaFontsなど様々な有料フォントを保有しております。
                        </p>
                    </section>
                    <section class="card box-shadow">
                        <img src="<?php bloginfo("template_directory"); ?>/images/top2.jpg" alt="">
                        <h3>正しい色の選択</h3>
                        <p>
                            色による印象を意識することで協調性や重要性などの色という概念で情報を伝えることもデザインのひとつです。
                            危険なイメージを連想させるには赤・黄・黒などが代表的に挙げられます。ひとつひとつに感じさせる色やパターンを選択します。
                        </p>
                    </section>
                    <section class="card box-shadow">
                        <img src="<?php bloginfo("template_directory"); ?>/images/top3.jpg" alt="">
                        <h3>見やすいレイアウト</h3>
                        <p>
                            「何が大切で何を一番伝えたいのか」の根本的なところから掘り下げてデザインを行います。
                            視覚機能は脳の80%の処理を行っており第一印象やどれだけそのバナーなどを目視してもらえるかを焦点にしデザインします。
                        </p>
                    </section>
                    <section class="card box-shadow">
                        <img src="<?php bloginfo("template_directory"); ?>/images/top4.png" alt="">
                        <h3>使用する画像の選択</h3>
                        <p>
                            バナー作成などで使用する画像は肖像権・著作権の問題が関与します。
                            著作権フリーの画像を多く多用していますが場合により有料の画像を使用することもあります。
                            また、既存のデザインやレイアウトを考慮し画像のカラーバランスや明るさなどの調節も欠かしません。
                        </p>
                    </section>
                </div>

            </article>
            <article>
                <h2>お知らせ</h2>
                <ul id="news" class="box-shadow">
                    <li>
                        <a href="">
                            2020年05月01日　ゴールデンウィークの営業について
                        </a>
                    </li>
                    <li>
                        <a href="">
                            2020年05月01日　ゴールデンウィークの営業について
                        </a>
                    </li>
                    <li>
                        <a href="">
                            2020年05月01日　ゴールデンウィークの営業について
                        </a>
                    </li>
                </ul>
                <a href="#" class="button news">もっと見る</a>
            </article>
            <article>
                <h2>お客様メニュー</h2>
                <div class="flex">
                    <ul class="customer-menu box-shadow">
                        <li>お取り引き中のお客様</li>
                        <li><img src="<?php bloginfo("template_directory"); ?>/images/user1.svg" alt=""></li>
                        <li>
                            すでにお取り引きを行っている場合はこちらをご利用ください。
                            メッセージやファイルのやり取りを円滑に行うことができます。
                        </li>
                        <li><a href="https://customer.mori-designs.jp/" target="_blank" class="button">お取り引きページへ</a></li>
                    </ul>
                    <ul class="customer-menu box-shadow">
                        <li>はじめてのお客様</li>
                        <li><img src="<?php bloginfo("template_directory"); ?>/images/work1.svg" alt=""></li>
                        <li>
                            制作に関するご相談・ご依頼はこちらのフォームをご利用ください。
                            ご質問・ご相談・お見積もりは無料で承っております。
                        </li>
                        <li><a href="<?php bloginfo("url"); ?>/consultation" class="button">無料で相談する</a></li>
                    </ul>
                    <ul class="customer-menu box-shadow">
                        <li>その他のお問い合わせ</li>
                        <li><img src="<?php bloginfo("template_directory"); ?>/images/danger1.svg" alt=""></li>
                        <li>
                            著作権・肖像権・権利侵害の報告やその他のお問い合わせについてはこちらのフォームをご利用ください。
                        </li>
                        <li><a href="<?php bloginfo("url"); ?>/report" class="button">その他お問い合わせ</a></li>
                    </ul>
                </div>

            </article>
        </div>


    </main>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>
</html>