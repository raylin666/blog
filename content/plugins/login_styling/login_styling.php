<?php

/**
 * Plugin Name: 登录页美化
 * Version: 1.1
 * Plugin URL:https://www.emlog.net/plugin/detail/636
 * Description: 美化登录页面，提供包括背景设定、亚克力材质、左侧配图、居中等。
 * Author: UTF-X
 * Author URL: https://utf-x.cn/
 */

function ls_glassmorphism()
{
    ?>
    <style>
        .card {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.5);
        }

        .form-control.form-control-user {
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
        }
    </style>
    <?php
}

function ls_bgimg($bgimg_url)
{
    if (!empty($bgimg_url)) {
        $arr = explode(PHP_EOL, $bgimg_url);
        $url = $arr[rand(0, sizeof($arr) - 1)];
        ?>
        <script>
            document.body.style.backgroundImage = `url(<?= $url ?>)`;
        </script>
        <?php
    } else {
        ?>
        <script>
            const width = window.innerWidth;
            const height = window.innerHeight;
            const imageUrl = `https://picsum.photos/${width}/${height}.webp`;
            document.body.style.backgroundImage = `url(${imageUrl})`;
        </script>
        <?php
    }
}

function ls_cardimg($cardimg_url)
{
    if (!empty($cardimg_url)) {
        $arr = explode(PHP_EOL, $cardimg_url);
        $url = $arr[rand(0, sizeof($arr) - 1)];
        ?>
        <style>
            .bg-login-image {
                background-image: url(<?= $url ?>);
            }
        </style>
        <?php
    }
    ?>
    <script>
        var targetElement = document.querySelector('.col-lg-12.p-5');
        var targetElement2 = document.querySelector('.col-xl-6.col-lg-10.col-md-9');
        targetElement.className = 'col-lg-8 p-5';
        targetElement2.className = 'col-xl-9 col-lg-10 col-md-9';
        targetElement.insertAdjacentHTML('beforebegin', '<div class="col-lg-4 d-none d-lg-block bg-login-image"></div>');
    </script>
    <?php
}

function ls_center()
{
    ?>
    <style>
        .row.justify-content-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
    <?php
}

function ls_main()
{
    $plugin_storage = Storage::getInstance('login_styling');
    $data = $plugin_storage->getValue('data');
    $r = json_decode($data, 1);
    extract($r);
    if ($glassmorphism) {
        ls_glassmorphism();
    }
    if ($bgimg) {
        ls_bgimg($bgimg_url);
    }
    if ($cardimg) {
        ls_cardimg($cardimg_url);
    }
    if ($center) {
        ls_center();
    }

}

addAction('login_head', 'ls_main');
addAction('login_ext', 'ls_main');