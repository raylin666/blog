<?php

!defined('EMLOG_ROOT') && exit('access denied!');

function callback_init() {
    $plugin_storage = Storage::getInstance('login_styling');
    $r = $plugin_storage->getValue('data');
    if (empty($r)) {
        $default_data = [
            'bgimg' => 1,
            'cardimg' => 1,
            'glassmorphism' => 1,
            'center' => 1,
            'bgimg_url' => '',
            'cardimg_url' => '',
        ];
        $plugin_storage->setValue('data', json_encode($default_data));
    }
}

function callback_rm() {
    $plugin_storage = Storage::getInstance('login_styling');
    $plugin_storage->deleteAllName('YES');
}
