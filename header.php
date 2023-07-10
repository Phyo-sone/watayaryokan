<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# ">
    <meta http-equiv="content-type" charset="utf-8" />
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <!--fontawsome-->

    <!-- ////Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css?family=Avenir+Next" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <!-- JS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script> -->

    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css"/> -->
    <!-- <script src="<?php //echo get_template_directory_uri(); 
                        ?>/assets/js/script.js"></script>
    <script src="<?php //echo get_template_directory_uri(); 
                    ?>/assets/js/toggle.js"></script>
    <script src="<?php //echo get_template_directory_uri(); 
                    ?>/assets/js/slick.js"></script> -->
    <!-- <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/script.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" /> -->
    <!-- <link
  rel="stylesheet"
  type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
/> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/8-2/js/8-2.js"></script> -->

    <!-- <script src="../assets/js/slick.min.js"></script> -->
    <!-- <script src="../assets/js/slick.js"></script> -->

    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <link rel="icon" href="">

    <meta name="twitterCard" property="twitter:card" content="summary_large_image">
    <!--google fonts-->
    <script>
        (function(d) {
            var config = {
                    kitId: 'rng8uco',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);

        const texts = ["WEB APP DEVELOPER。", "WEBSITE DEVELOPER。", "BURMESE。", "Khun Hla Aung Khan。"];
        let index = 0;

        setInterval(function() {
            document.getElementById("text").innerHTML = texts[index];
            index = (index + 1) % texts.length;
        }, 2000);
    </script>

    <!-- <script>
        (function(d) {
            var config = {
                    kitId: 'rng8uco',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);

        const texts = ["WEB APP DEVELOPER。", "WEBSITE DEVELOPER。", "BURMESE。", "Khun Hla Aung Khan。"];
        let index = 0;

        setInterval(function() {
            document.getElementById("text").innerHTML = texts[index];
            index = (index + 1) % texts.length;
        }, 2000);
    </script> -->

    <!-- ///rellax -->
    <?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>
    <!-- <div class="SiteWrapper"> -->



    <!--ヘッダー-->
    <header class="header">

        <div class="page-header">
            <div id="nav-bar" class=" nav-bar">
                <div class="logo-info">
                    <a href="<?php echo esc_url(home_url("//")); ?>"> <img class="logo only-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
                        <img class="logo-sp only-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sp.png" /> </a>
                </div>

                <!--ヘッダー・グローバルメニュー-->
                <nav class="global-menu" id="global-menu">
                    <ul class="menu-list">
                        <li class="headerNav__list">
                            <a class="headerNav__list__link nav-link" href="<?php echo esc_url(home_url("/about/")); ?>">ようこそ綿屋旅館へ
                            </a>
                        </li>
                        <li class="headerNav__list">
                            <a class="headerNav__list__link nav-link" href="<?php echo esc_url(home_url("/plan/")); ?>">宿泊プラン</a>
                        </li>
                        <li class="headerNav__list">
                            <a class="headerNav__list__link nav-link" href="<?php echo esc_url(home_url("/news/")); ?>">お知らせ</a>
                        </li>
                        <li class="headerNav__list">
                            <a class="headerNav__list__link nav-link" href="">おもてなし</a>

                        </li>
                        <li class="headerNav__list">
                            <a class="headerNav__list__link nav-link" href="https://www.yado-sagashi.net/yoyaku/plan/index2.jsp?beg&all&yid=23120638184302">ご予約</a>

                        </li>
                        <li class="headerNav__list">
                            <a class="headerNav__list__link nav-link" href="<?php echo esc_url(home_url("/contact/")); ?>">お問い合わせ</a>

                        </li>



                    </ul>

                </nav>
                <div class="toggle-hamburger open" id="toggle">
                    <span class="hamburger_line-1"></span>
                    <span class="hamburger_line-2"></span>
                    <span class="hamburger_line-3"></span>
                </div>

            </div>

        </div>

    </header>