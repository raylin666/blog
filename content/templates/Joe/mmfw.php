<?php
defined('EMLOG_ROOT') || exit('access denied!');

require_once View::getView('module');
require_once View::getView('functions');
require_once(dirname(__FILE__) . '/config.php');
ob_clean();
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <style>
        @font-face {
            font-family: 'Joe Font';
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url('<?=$config_admin_ziti;?>');
            src: url('<?=$config_admin_ziti;?>') format('woff');
        }

        body {
            font-family: 'Joe Font';
        }

        body::before {
            background: url(<?=$config_admin_wzbjing;?>);
            background-position: center 0;
            background-repeat: no-repeat;
            background-size: cover;
        }

        body {
            --theme: <?=$config_zhutise;?>;
            --background: rgba(255, 255, 255, 0.85)
        }

        .joe_footer {
            background: var(--background);
        }
    </style>
    <script>
        localStorage.getItem("data-night") && document.querySelector("html").setAttribute("data-night", "night");
        window.Joe = {
            THEME_URL: `<?= BLOG_URL; ?>content/templates/Joe/`,
            LIVE2D: `off`,
            BASE_API: `//api.su1018.cn/build/index.php/joe/api`,
            DYNAMIC_BACKGROUND: `off`,
            WALLPAPER_BACKGROUND_PC: ``,
            IS_MOBILE: /windows phone|iphone|android/gi.test(window.navigator.userAgent),
            BAIDU_PUSH: false,
            DOCUMENT_TITLE: ``,
            PAGE_SIZE: `12`
        }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>此文章已加密 - 输入密码后访问</title>
    <meta name="keywords" content="加密文章,无权访问"/>
    <meta name="description" content="此文章已加密，如需访问请输入访问密码"/>
    <meta name="generator" content="emlog"/>
    <link rel="icon" type="image/x-icon" href="<?= $config_ico_logo; ?>"/>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.mode.min.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.normalize.min.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.global.min.css?v=20210429">
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.responsive.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/typecho-joe-next@6.0.0/plugin/qmsg/qmsg.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/aplayer@1.10.1/dist/APlayer.min.css">
    <script src="//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/typecho-joe-next@6.0.0/plugin/scroll/joe.scroll.js"></script>
    <script src="//cdn.jsdelivr.net/npm/lazysizes@5.3.0/lazysizes.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/typecho-joe-next@6.0.0/plugin/sketchpad/joe.sketchpad.js"></script>
    <script src="//cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/typecho-joe-next@6.0.0/assets/js/joe.extend.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/typecho-joe-next@6.0.0/plugin/qmsg/qmsg.js"></script>
    <script src="//cdn.jsdelivr.net/npm/typecho-joe-next@6.0.0/plugin/smooth/joe.smooth.js" async></script>
    <script src="<?= TEMPLATE_URL; ?>assets/js/joe.global.js?v=20210429"></script>
    <script src="<?= TEMPLATE_URL; ?>assets/js/joe.short.js?v=20210429"></script>
    <script src="<?= TEMPLATE_URL; ?>assets/js/poplayer.js"></script>
    <?php if ($pageurl == Url::logPage()) { ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@5.4.5/css/swiper.min.css"/>
        <script src="//cdn.jsdelivr.net/npm/swiper@5.4.5/js/swiper.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js"></script>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.index.min.css">
        <script src="<?= TEMPLATE_URL; ?>assets/js/joe.index.js"></script>
    <?php }elseif ($logid){ ?>
        <!-- 日志page页显示内容 -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism-tomorrow.min.css">
        <script src="//cdn.jsdelivr.net/npm/clipboard@2.0.6/dist/clipboard.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/typecho-joe-next@6.2.4/plugin/prism/prism.min.js"></script>
    <?php } ?>
    <?php doAction('index_head'); ?>
</head>
<body>
<div id="Joe">
    <header class="joe_header">
        <div class="joe_header__above">
            <div class="joe_container">
                <svg class="joe_header__above-slideicon" viewBox="0 0 1152 1024" width="20" height="20">
                    <path d="M76.032 872a59.968 59.968 0 1 0 0 120h999.936a59.968 59.968 0 1 0 0-120H76.032zm16-420.032a59.968 59.968 0 1 0 0 120h599.936a59.968 59.968 0 1 0 0-119.936H92.032zM76.032 32a59.968 59.968 0 1 0 0 120h999.936a60.032 60.032 0 0 0 0-120H76.032z"/>
                </svg>
                <a title="<?= $site_description; ?>" class="joe_header__above-logo" href="<?= BLOG_URL; ?>">
                    <img class="lazyload" data-src="<?= $config_admin_logo; ?>" alt="<?= $site_description; ?>"/>
                </a>
                <nav class="joe_header__above-nav">
                    <?php if ($config_ymdaohang == "y"): ?>
                        <?php yemiandaohang(); ?>
                    <?php else: ?>
                        <?php
                        echo preg_replace("/(.*?) \|\| (.*?)/iU", '<a class="item" href="$2"  title="$1">$1</a>', $config_zdyyemian);
                        ?>
                    <?php endif; ?>
                </nav>
                <form class="joe_header__above-search" method="get" action="<?= BLOG_URL; ?>">
                    <input class="input" type="search" placeholder="输入关键词搜索..." value="" autocomplete="off" name="keyword">
                    <button type="submit" class="submit">搜索</button>
                    <span class="icon"></span>
                    <nav class="result">
                        <? /*php hot_index_blog() */ ?>
                    </nav>
                </form>
                <svg class="joe_header__above-searchicon" viewBox="0 0 1024 1024" width="20" height="20">
                    <path d="M1008.19 932.031L771.72 695.56a431.153 431.153 0 1 0-76.158 76.158l236.408 236.472a53.758 53.758 0 0 0 76.158 0 53.758 53.758 0 0 0 0-76.158zM107.807 431.185a323.637 323.637 0 0 1 323.316-323.381 323.7 323.7 0 0 1 323.381 323.38 323.637 323.637 0 0 1-323.38 323.317 323.637 323.637 0 0 1-323.317-323.316z"/>
                </svg>
            </div>
        </div>
        <div class="joe_header__below">
            <div class="joe_container">
                <nav class="joe_header__below-class">
                    <?php blog_navi(); ?>
                </nav>
                <?php if (ROLE == ROLE_VISITOR): ?>
                    <div class="joe_header__below-sign">
                        <div class="joe_dropdown" trigger="click">
                            <a class="joe_dropdown__link" onClick="syalert.syopen('alert4')">
                                <svg class="icon" viewBox="0 0 1024 1024" width="16" height="16">
                                    <path d="M929.792 340.48c-22.016-52.224-53.76-99.328-94.208-139.776s-88.064-72.192-140.288-94.72c-54.272-23.04-112.128-34.816-171.52-34.816-77.312 0-153.6 20.48-220.16 58.88-15.36 8.704-20.48 28.16-11.776 43.52 8.704 15.36 28.16 20.48 43.52 11.776 56.832-32.768 121.856-50.176 188.416-50.176 100.352 0 195.072 38.912 266.24 110.08s110.08 165.888 110.08 266.24-38.912 195.072-110.08 266.24-165.888 110.08-266.24 110.08c-66.048 0-131.072-17.408-188.416-50.176-15.36-8.704-34.816-3.584-43.52 11.776s-3.584 34.816 11.776 43.52c66.56 38.4 142.848 58.88 220.16 58.88 59.392 0 117.248-11.776 171.52-34.816 52.224-22.016 99.328-53.76 140.288-94.208 40.448-40.448 72.192-87.552 94.208-140.288 23.04-54.272 34.816-112.128 34.816-171.52s-11.776-116.224-34.816-170.496z"/>
                                    <path d="M426.496 691.712c-12.288 12.288-12.288 32.768 0 45.056 6.144 6.144 14.336 9.216 22.528 9.216s16.384-3.072 22.528-9.216l202.24-202.24c2.56-2.56 4.608-5.632 6.144-8.704l.512-1.536c0-.512.512-1.024.512-1.536s.512-.512.512-1.024v-.512c0-.512 0-.512.512-1.024V502.272c0-.512 0-.512-.512-1.024v-.512c0-.512 0-.512-.512-1.024v-.512c0-.512 0-.512-.512-1.024v-.512c0-.512-.512-.512-.512-1.024v-.512c0-.512-.512-.512-.512-1.024v-.512l-.512-.512s0-.512-.512-.512c0-.512-.512-.512-.512-1.024 0 0 0-.512-.512-.512l-.512-.512-.512-.512-.512-.512-1.024-1.024L472.064 286.72c-12.288-12.288-32.768-12.288-45.056 0-12.288 12.288-12.288 32.768 0 45.056l147.968 147.968H147.968c-17.92 0-31.744 14.336-31.744 31.744s14.336 31.744 31.744 31.744h426.496l-147.968 148.48z"/>
                                </svg>
                                <span>登录</span>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="joe_header__below-sign">
                        <div class="joe_dropdown" trigger="click">
                            <div class="joe_dropdown__link">
                                <svg class="icon" viewBox="0 0 1024 1024" width="15" height="15">
                                    <path d="M231.594 610.125C135.087 687.619 71.378 804.28 64.59 935.994c-.373 7.25 3.89 23.307 30.113 23.307s33.512-16.06 33.948-23.301c6.861-114.025 63.513-214.622 148.5-280.346 3.626-2.804 16.543-17.618 3.24-39.449-13.702-22.483-40.863-12.453-48.798-6.08zm280.112-98.44v63.96c204.109 0 370.994 159.345 383.06 360.421.432 7.219 8.649 23.347 32.44 23.347s31.991-16.117 31.62-23.342c-12.14-236.422-207.676-424.386-447.12-424.386z"/>
                                    <path d="M319.824 319.804c0-105.974 85.909-191.883 191.882-191.883s191.883 85.91 191.883 191.883c0 26.57-5.405 51.88-15.171 74.887-5.526 14.809-2.082 31.921 20.398 38.345 23.876 6.822 36.732-8.472 41.44-20.583 11.167-28.729 17.294-59.973 17.294-92.65 0-141.297-114.545-255.842-255.843-255.842S255.863 178.506 255.863 319.804s114.545 255.843 255.843 255.843v-63.961c-105.973-.001-191.882-85.909-191.882-191.882z"/>
                                    <path d="M512 255.843s21.49-5.723 21.49-31.306S512 191.882 512 191.882c-70.65 0-127.921 57.273-127.921 127.922 0 3.322.126 6.615.375 9.875.264 3.454 14.94 18.116 37.044 14.425 22.025-3.679 26.6-21.93 26.6-21.93-.028-.788-.06-1.575-.06-2.37.001-35.325 28.637-63.961 63.962-63.961z"/>
                                </svg>
                                <span>管理</span>
                            </div>
                            <nav class="joe_dropdown__menu list">
                                <?php if (ROLE == ROLE_ADMIN): ?>
                                    <a rel="noopener noreferrer nofollow" target="_balnk" href="<?= BLOG_URL; ?>admin">进入后台</a>
                                    <a rel="noopener noreferrer nofollow" href="<?= BLOG_URL; ?>?setting">主题配置</a>
                                <?php endif; ?>
                                <a rel="noopener noreferrer nofollow" href="<?= BLOG_URL; ?>?joe&post-new">用户中心</a>
                                <a rel="noopener noreferrer nofollow" href="<?= BLOG_URL; ?>admin/account.php?action=logout">退出登录</a>
                            </nav>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="joe_header__below-progress"></div>
        </div>
        <div class="joe_header__searchout">
            <div class="joe_container">
                <div class="joe_header__searchout-inner">
                    <form class="search" method="get" action="<?= BLOG_URL; ?>">
                        <input class="input" type="search" placeholder="输入关键词搜索..." value="" autocomplete="off" name="keyword">
                        <button type="submit" class="submit">搜索</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="joe_header__slideout">
            <img width="100%" height="150" class="joe_header__slideout-image" src="<?= $config_clbizhi; ?>" alt="侧边栏壁纸"/>
            <div class="joe_header__slideout-author">
                <img width="50" height="50" class="avatar lazyload" src="<?= $config_touxiang; ?>" alt="博主昵称"/>
                <div class="info">
                    <a class="link"><?= $config_nicheng; ?></a>
                    <p class="motto"><?= $config_miaoshu; ?></p>
                </div>
            </div>
            <?php cltongji(); ?>
            <ul class="joe_header__slideout-menu panel-box">
                <li>
                    <a class="link" href="<?= BLOG_URL; ?>" title="首页">
                        <span>首页</span>
                    </a>
                </li>
                <!-- 栏目 -->
                <li>
                    <a class="link panel" href="#" rel="nofollow">
                        <span>栏目</span>
                        <svg class="icon" viewBox="0 0 1024 1024" width="13" height="13">
                            <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z"/>
                        </svg>
                    </a>
                    <?php celan_navi(); ?>
                </li>
                <!-- 页面 -->
                <?php if ($config_ymdaohang == "y"): ?>
                    <?php yemiandaohang1(); ?>
                <?php else: ?>
                    <li>
                        <a class="link panel" href="#" rel="nofollow">
                            <span>页面</span>
                            <svg class="icon" viewBox="0 0 1024 1024" width="13" height="13">
                                <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z"></path>
                            </svg>
                        </a>
                        <ul class="slides panel-body" style="display: none;">
                            <?php
                            echo preg_replace("/(.*?) \|\| (.*?)/iU", '<li><a class="link " href="$2"  title="$1">$1</a></li>', $config_zdyyemian);
                            ?></ul>
                    </li>
                <?php endif; ?>
            </ul>
            <?php if (ROLE == ROLE_VISITOR): ?>
                <ul class="joe_header__slideout-menu panel-box" style="margin-top:15px; color:var(--minor);">
                    <svg viewBox="0 0 500 500" style="width: 20px; height: 20px; margin-right: 8px;">
                        <path d="m308.015694,158.686726c0,0 13.766173,-66.244882 0,-88.685099c-13.782387,-22.440218 -19.279128,-37.387781 -49.584165,-48.088877s-19.262913,-8.568426 -41.298518,-7.473782c-22.035605,1.075772 -40.406717,14.947563 -40.406717,22.421345c0,0 -13.766173,1.075772 -19.262913,7.492655c-5.512955,6.416883 -14.690403,36.312009 -14.690403,43.804664s4.588724,57.714202 9.177449,68.396425l-5.464311,2.13267c-4.588724,61.960669 18.354897,69.453323 18.354897,69.453323c8.253218,57.714202 16.52265,33.141314 16.52265,48.088877s-8.269432,9.625325 -8.269432,9.625325s-7.328987,23.497116 -25.683884,32.046669c-18.354897,8.53068 -120.247276,54.468014 -128.532923,64.093339c-8.285647,9.644198 -7.345202,54.50576 -7.345202,54.50576l436.934108,0c0,0 0.95666,-44.861562 -7.328987,-54.50576c-8.301862,-9.644198 -110.19424,-55.562659 -128.549138,-64.093339c-18.354897,-8.549553 -25.683884,-32.046669 -25.683884,-32.046669s-8.269432,5.322238 -8.269432,-9.625325s8.269432,9.625325 16.538865,-48.088877c0,0 22.927407,-7.492655 18.354897,-69.453323l-5.512955,0z"
                              fill="var(--minor)"></path>
                    </svg>
                    <a class="item" style="color:var(--minor);" onClick="syalert.syopen('alert4')" title="登录">登录</a>
                </ul>
            <?php else: ?>
                <ul class="joe_header__slideout-menu panel-box" style="margin-top:15px; color:var(--minor);">

                    <li>
                        <a class="link panel" href="#" rel="nofollow">
                    <span><svg viewBox="0 0 500 500" style="width: 20px; height: 20px; margin-right: 8px;">
            <path d="m308.015694,158.686726c0,0 13.766173,-66.244882 0,-88.685099c-13.782387,-22.440218 -19.279128,-37.387781 -49.584165,-48.088877s-19.262913,-8.568426 -41.298518,-7.473782c-22.035605,1.075772 -40.406717,14.947563 -40.406717,22.421345c0,0 -13.766173,1.075772 -19.262913,7.492655c-5.512955,6.416883 -14.690403,36.312009 -14.690403,43.804664s4.588724,57.714202 9.177449,68.396425l-5.464311,2.13267c-4.588724,61.960669 18.354897,69.453323 18.354897,69.453323c8.253218,57.714202 16.52265,33.141314 16.52265,48.088877s-8.269432,9.625325 -8.269432,9.625325s-7.328987,23.497116 -25.683884,32.046669c-18.354897,8.53068 -120.247276,54.468014 -128.532923,64.093339c-8.285647,9.644198 -7.345202,54.50576 -7.345202,54.50576l436.934108,0c0,0 0.95666,-44.861562 -7.328987,-54.50576c-8.301862,-9.644198 -110.19424,-55.562659 -128.549138,-64.093339c-18.354897,-8.549553 -25.683884,-32.046669 -25.683884,-32.046669s-8.269432,5.322238 -8.269432,-9.625325s8.269432,9.625325 16.538865,-48.088877c0,0 22.927407,-7.492655 18.354897,-69.453323l-5.512955,0z"
                  fill="var(--minor)"></path>
            </svg>管理</span>
                            <svg class="icon" viewBox="0 0 1024 1024" width="13" height="13">
                                <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z"></path>
                            </svg>
                        </a>
                        <ul class="slides panel-body" style="display: none;">
                            <?php if (ROLE == ROLE_ADMIN): ?>
                                <li><a class="link " href="<?= BLOG_URL; ?>admin" title="后台设置">后台设置</a></li>
                                <li><a class="link " href="<?= BLOG_URL; ?>?setting" title="主题设置">主题设置</a></li>
                            <?php endif; ?>
                            <li><a class="link " href="<?= BLOG_URL; ?>?joe&post-new" title="用户中心">用户中心</a></li>
                            <li><a class="link " href="<?= BLOG_URL; ?>admin/account.php?action=logout" title="退出登录">退出登录</a></li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
        <div class="joe_header__mask"></div>
    </header>