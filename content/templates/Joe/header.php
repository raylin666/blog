<?php
/*
Template Name:JOE主题
Description:双栏博客主题
Template Url:https://www.emlog.net/template/detail/1041
Author:emlog
Version: 1.4.2
Author Url:https://www.emlog.net/author/index/577
*/

defined('EMLOG_ROOT') || exit('access denied!');

require_once View::getView('module');
require_once View::getView('functions');
if (!function_exists('_g')) {
    emMsg('请先在商店安装并开启：模板设置插件', BLOG_URL . 'admin/store.php?action=plu');
}
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site_title; ?><?= page_tit(isset($page) ? $page : ''); ?></title>
    <meta name="keywords" content="<?= $site_key; ?>"/>
    <meta name="description" content="<?= geshihua($site_description); ?>"/>
    <meta name="generator" content="emlog"/>
    <meta name="zhutibanben" content="5.7"/>
    <link rel="icon" type="image/x-icon" href="<?= _g('appearance-favicon'); ?>"/>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.global.min.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.responsive.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <script src="<?= TEMPLATE_URL; ?>assets/js/jquery.min.js"></script>
    <script src="<?= TEMPLATE_URL; ?>assets/js/jquery.pjax.min.js"></script>
    <script src="<?= TEMPLATE_URL; ?>assets/js/joe.global.js?v=20240217"></script>
<!--    <script src="--><?php //= TEMPLATE_URL; ?><!--assets/js/pjax.function.js?v=20240218"></script>-->
    <script src="<?= TEMPLATE_URL; ?>assets/js/joe.archive.min.js"></script>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/swiper.min.css"/>
    <script src="<?= TEMPLATE_URL; ?>assets/js/swiper.min.js"></script>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.index.min.css">
    <script src="<?= TEMPLATE_URL; ?>assets/js/joe.index.js"></script>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/prism-tomorrow.min.css">
    <script src="<?= TEMPLATE_URL; ?>assets/js/clipboard.min.js"></script>
    <script src="<?= TEMPLATE_URL; ?>assets/js/prism.min.js"></script>
    <link rel="stylesheet" href="<?= TEMPLATE_URL; ?>assets/css/joe.post.min.css">
    <script src="<?= TEMPLATE_URL; ?>assets/js/joe.post_page.js?v=20210507"></script>
    <?php doAction('index_head'); ?>
    <style>
        @font-face {
            font-family: 'Joe Font';
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url('<?= _g('appearance-typeface');?>');
            src: url('<?= _g('appearance-typeface');?>') format('woff');
        }

        body {
            font-family: 'Joe Font';
        }

        <?php if(_g('appearance-beijing')): ?>
        body::before {
            background-image: linear-gradient(90deg, rgba(60, 10, 30, .04) 3%, transparent 0), linear-gradient(1turn, rgba(60, 10, 30, .04) 3%, transparent 0);
            background-size: 20px 20px;
            background-position: 50%;
            background-repeat: repeat;
        }

        body {
            --theme: <?= _g('appearance-colour');?>;
        }

        <?php else: ?>
        body::before {
            background: url(<?= _g('appearance-beijing');?>);
            background-position: center 0;
            background-repeat: no-repeat;
            background-size: cover;
        }

        body {
            --theme: <?= _g('appearance-colour');?>;
            --background: rgba(255, 255, 255, 0.85)
        }

        <?php endif; ?>
        .joe_footer {
            background: var(--background);
        }
    </style>
    <script type="text/javascript">
        let quanjuurl = '<?= TEMPLATE_URL; ?>';
        let quandenglu = '<?= BLOG_URL; ?>admin/';
        let quanjuyhid = '<?= UID; ?>';
    </script>
    <script>
        localStorage.getItem("data-night") && document.querySelector("html").setAttribute("data-night", "night");
        window.Joe = {
            THEME_URL: `<?= BLOG_URL; ?>content/templates/Joe/`,
            DYNAMIC_BACKGROUND: `off`,
            WALLPAPER_BACKGROUND_PC: ``,
            IS_MOBILE: /windows phone|iphone|android/gi.test(window.navigator.userAgent),
            BAIDU_PUSH: false,
            DOCUMENT_TITLE: ``,
            PAGE_SIZE: `12`
        }
    </script>
</head>

<body>

<div id="loading" style="display: none;">
    <?php doAction('loading_dynamic_effect') ?>
</div>

<div id="Joe">
    <header class="joe_header">
        <div class="joe_header__above">
            <div class="joe_container">
                <svg class="joe_header__above-slideicon" viewBox="0 0 1152 1024" width="20" height="20">
                    <path d="M76.032 872a59.968 59.968 0 1 0 0 120h999.936a59.968 59.968 0 1 0 0-120H76.032zm16-420.032a59.968 59.968 0 1 0 0 120h599.936a59.968 59.968 0 1 0 0-119.936H92.032zM76.032 32a59.968 59.968 0 1 0 0 120h999.936a60.032 60.032 0 0 0 0-120H76.032z"/>
                </svg>
                <a title="<?= $site_description; ?>" class="joe_header__above-logo" href="<?= BLOG_URL; ?>">
                    <img class="lazyload" src="<?= _g('appearance-logo'); ?>" alt="<?= $site_description; ?>"/>
                </a>
                <nav class="joe_header__above-nav">
                    <?= preg_replace("/(.*?) \|\| (.*?)/iU", '<a class="item" href="$2"  title="$1">$1</a>', _g('navigation-zdy')); ?>
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
                <div class="joe_header__below-sign">
                    <div class="item">
                        <svg t="1630233812535" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8403" width="25" height="25">
                            <path d="M0 510.327c0 281.86 228.466 510.327 510.327 510.327s510.327-228.466 510.327-510.327S792.188 0 510.327 0 0 228.466 0 510.327z" fill="#EAF4FF" p-id="8404"></path>
                            <path d="M510.327 0c281.86 0 510.327 228.466 510.327 510.327s-228.466 510.327-510.327 510.327S0 792.188 0 510.327 228.466 0 510.327 0z m0 31.898c-264.219 0-478.43 214.21-478.43 478.429 0 264.219 214.211 478.429 478.43 478.429s478.429-214.21 478.429-478.43c0-264.218-214.21-478.428-478.43-478.428z" fill="#90D0FF" p-id="8405"></path>
                            <path d="M725.527 448.86c0 129.037-93.605 233.626-209.036 233.626-115.491 0-209.063-104.582-209.063-233.626 0-129.05 93.599-233.66 209.063-233.66 115.43 0 209.036 104.61 209.036 233.66" fill="#FFDFC6" p-id="8406"></path>
                            <path d="M435.695 649.096H595.6v131.768H435.662V649.096h0.033z m-101.108-183.33c0 19.302-14.343 34.957-32.025 34.957-17.723 0-32.025-15.655-32.025-34.923 0-19.343 14.336-34.957 32.025-34.957 17.682 0 32.025 15.621 32.025 34.923z m427.831-0.415c0 19.309-14.342 34.93-32.025 34.93-17.689 0-32.025-15.621-32.025-34.93 0-19.302 14.336-34.956 32.025-34.956 17.683 0 32.025 15.654 32.025 34.93v0.026z" fill="#FFDFC6" p-id="8407"></path>
                            <path d="M433.185 666.65s30.265 15.675 74.204 15.675c51.574 2.115 85.253-15.26 85.253-15.26v15.709s-56.709 30.452-82.295 30.452c-25.58 0-77.57-35.967-77.57-35.967l0.408-10.575v-0.033z m53.65-512.38s-141.038 14.134-142.503 107.07c-1.433 92.87 108.925 110.666 149.798 120.826 40.907 10.167 153.373 23.21 219.096-84.182 0 0-18.03-42.125-27.876-71.493-4.397-7.656 7.075 13.051-32.366-11.986-39.44-25.005-92.394-66.038-166.149-60.236z" fill="#ECB485" p-id="8408"></path>
                            <path d="M387.192 209.05s-103.37 17.24-109.226 109.782c-5.897 92.542 10.508 116.957 10.508 116.957s23.317-0.067 29.18 34.803c0 0 10.789 6.405 11.753 0 1.606-10.642-9.45-61.146 12.589-108.09 21.879-46.648 42.954-53.314 42.954-53.314l2.242-100.138z m271.775 101.128s27.642 35.666 32.414 71.265c4.069 30.252 9.704 87.094 9.704 87.094s7.697 5.448 13.232-7.63c5.515-13.038 4.07-26.115 9.196-29.475 27.066-17.943 19.991-93.278 18.58-101.262-6.185-33.645-34.087-87.67-34.087-87.67l-49.032 67.678z"
                                  fill="#3F3F3F" p-id="8409"></path>
                            <path d="M487.036 123.55s-147.376 5.996-148.848 103.202c-1.486 97.2 114.935 124.614 156.25 135.242 41.281 10.622 154.872 24.315 221.251-88.077 0 0 16.605-50.9 6.666-81.633-4.444-7.977-27.675 20.487-67.51-5.709-39.843-26.168-93.318-69.09-167.81-63.026" fill="#3F3F3F" p-id="8410"></path>
                            <path d="M885.392 860.187c-25.968-20.266-74.893-50.07-123.369-73.474-78.68-38.002-166.29-55.042-166.29-55.042l-0.066 2.597c-6.378 6.747-37.152 36.898-79.571 36.898-41.75 0-72.972-28.284-80.18-35.439l-0.381-3.64s-84.357 11.464-163.037 49.46c-53.87 26.008-108.216 59.92-131.079 79.844 96.31 101.771 230.748 159.423 371.39 159.263 146.995 0 279.452-61.722 372.576-160.467z" fill="#6EBDF7" p-id="8411"></path>
                        </svg>
                        <?php if (ROLE == ROLE_VISITOR): ?><a href="<?= BLOG_URL; ?>admin">登录</a>
                        <?php else: ?><a href="<?= BLOG_URL; ?>admin">管理</a>
                        <?php endif; ?>
                    </div>
                </div>
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
            <img width="100%" height="150" class="joe_header__slideout-image" src="<?= _g('appearance-cbl'); ?>" alt="侧边栏壁纸"/>
            <div class="joe_header__slideout-author">
                <img width="50" height="50" class="avatar lazyload" src="<?php global $CACHE;
                $user_cache = $CACHE->readCache('user');
                echo empty($user_cache[1]['avatar']) ? BLOG_URL . 'admin/views/images/avatar.jpg' : BLOG_URL . $user_cache[1]['avatar']; ?>" alt="博主头像"/>
                <div class="info">
                    <a class="link"><?php blog_author1(1); ?></a>
                    <p class="motto"><?php blog_authors1(1); ?></p>
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
                <li>
                    <a class="link panel" href="#" rel="nofollow">
                        <span>页面</span>
                        <svg class="icon" viewBox="0 0 1024 1024" width="13" height="13">
                            <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z"></path>
                        </svg>
                    </a>
                    <ul class="slides panel-body" style="display: none;">
                        <?php
                        echo preg_replace("/(.*?) \|\| (.*?)/iU", '<li><a class="link " href="$2"  title="$1">$1</a></li>', _g('navigation-zdy'));
                        ?>
                    </ul>
                </li>
            </ul>

        </div>
        <div class="joe_header__mask"></div>
    </header>