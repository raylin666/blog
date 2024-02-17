<?php
/*
Plugin Name: 页面加载动效
Version: 1.0
Plugin URL:
Description: 前端页面加载动效 Loading。
Author: linshan
Author URL: http://www.ls331.com
*/

defined('EMLOG_ROOT') || exit('access denied!');

function loading_dynamic_effect_1() {
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BLOG_URL . 'content/plugins/loading/assets/'; ?>style-1.css" />
    <!--[if IE]>
    <script src="<?php echo BLOG_URL . 'content/plugins/loading/assets/'; ?>html5.js"></script>
    <![endif]-->

    <div class="loader">
        <div class="text">Loading...</div>
        <div class="horizontal">
            <div class="circlesup">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="circlesdwn">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <div class="vertical">
            <div class="circlesup">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="circlesdwn">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
    </div>
<?php
}

addAction('loading_dynamic_effect_1', 'loading_dynamic_effect_1');

function loading_dynamic_effect_4() {
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo BLOG_URL . 'content/plugins/loading/assets/'; ?>style-4.css" />
    <!--[if IE]>
    <script src="<?php echo BLOG_URL . 'content/plugins/loading/assets/'; ?>html5.js"></script>
    <![endif]-->

    <div class="loader">
		<span class="circle">LOA
		<div class="scircle"></div>
		<div class="scircle"></div>
		</span>
        <span class="circle">D
		<div class="scircle"></div>
		<div class="scircle"></div>
		</span>
        <span class="circle">ING
		<div class="scircle"></div>
		<div class="scircle"></div>
		</span>
    </div>
    <?php
}

addAction('loading_dynamic_effect_4', 'loading_dynamic_effect_4');

