<?php

!defined('EMLOG_ROOT') && exit('access deined!');

function plugin_setting_view() {
    $plugin_storage = Storage::getInstance('login_styling');
    $data = $plugin_storage->getValue('data');
    $r = json_decode($data, 1);
    extract($r);
    ?>
    <?php if (isset($_GET['setting'])): ?>
        <div class="alert alert-success">插件设置完成</div><?php endif; ?>
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger">插件设置失败</div><?php endif; ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">登录页美化</h1>
    </div>
    <div class="card shadow mb-4 mt-2">
        <div class="card-body">
            <div class="containertitle2"></div>
            <form action="plugin.php?plugin=login_styling&action=setting" method="post">
                <div class="form-group custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="glassmorphism" name="glassmorphism" <?= $glassmorphism ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="glassmorphism">亚克力（拟物玻璃）效果</label>
                </div>
                <div class="form-group custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="bgimg" name="bgimg" <?= $bgimg ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="bgimg">背景图</label>
                </div>
                <div class="form-group custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="cardimg" name="cardimg" <?= $cardimg ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="cardimg">登录框左侧配图</label>
                </div>
                <div class="form-group custom-control custom-switch">
                    <input class="custom-control-input" type="checkbox" id="center" name="center" <?= $center ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="center">登录框居中</label>
                </div>
                <div class="form-group">
                    <label>背景图随机URL：</label>
                    <p class="form-text text-muted small">一行一个，请不要加多余字符，填入返回图片文件的API也是可以的，留空默认显示来自<a href="https://picsum.photos/">Lorem Picsum</a>的随机图片</p>
                    <textarea class="form-control" name="bgimg_url" rows="4"><?= $bgimg_url ?></textarea>
                </div>
                <div class="form-group">
                    <label>登录框左侧图随机URL：</label>
                    <p class="form-text text-muted small">一行一个，请不要加多余字符，填入返回图片文件的API也是可以的，留空默认显示一张狗狗图片</p>
                    <textarea class="form-control" name="cardimg_url" rows="4"><?= $cardimg_url ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">保存设置</button>
            </form>
        </div>
    </div>
    <script>
        setTimeout(hideActived, 3600);
        $("#menu_category_ext").addClass('active');
        $("#menu_ext").addClass('show');
        $("#menu_plug").addClass('active');
    </script>
    <?php
}
function plugin_setting() {
    $bgimg = isset($_POST['bgimg']) ? $_POST['bgimg'] : 0;
    $cardimg = isset($_POST['cardimg']) ? $_POST['cardimg'] : 0;
    $glassmorphism = isset($_POST['glassmorphism']) ? $_POST['glassmorphism'] : 0;
    $center = isset($_POST['center']) ? $_POST['center'] :  0;
    $bgimg_url = isset($_POST['bgimg_url']) ? addslashes($_POST['bgimg_url']) : '';
    $cardimg_url = isset($_POST['cardimg_url']) ? addslashes($_POST['cardimg_url']) : '';
    $data = [
        'bgimg' => $bgimg,
        'cardimg' => $cardimg,
        'glassmorphism' => $glassmorphism,
        'center' => $center,
        'bgimg_url' => $bgimg_url,
        'cardimg_url' => $cardimg_url,
    ];
    $plugin_storage = Storage::getInstance('login_styling');
    $plugin_storage->setValue('data', json_encode($data));

    return true;
}