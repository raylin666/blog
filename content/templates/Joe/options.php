<?php
/*@support tpl_options*/

!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(
    'TplOptionsNavi'      => array(
        'type'        => 'radio',
        'name'        => '定义设置项标签页名称',
        'values'      => array(
            'tpl-homepage'   => '首页导航',
            'tpl-appearance' => '外观设置',
            'tpl-navigation' => '导航设置',
            'tpl-effects'    => '分类列表',
            'tpl-addition'   => '其他设置',
        ),
        'description' => '一款双栏博客主题'
    ),
    'homepage-slide'      => array(
        'labels'      => 'tpl-homepage',
        'type'        => 'text',
        'multi'       => 'true',
        'name'        => '首页幻灯片',
        'values'      => array('自定义幻灯片 || # || /content/templates/joe/assets/img/demo-ad1.png'),
        'description' => '格式：显示文字 || 跳转链接 || 图片地址（中间使用两个竖杠分隔，注意竖杠前后有空格）<br>一行一个'
    ),
    //外观设置
    'appearance-logo'     => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'image',
        'name'        => '网站LOGO',
        'values'      => array('/content/templates/joe/assets/img/demo-logo.png',),
        'description' => '网站logo，分辨率 120*55'
    ),
    'appearance-colour'   => array(
        'labels' => 'tpl-appearance',
        'type'   => 'text',
        'name'   => '网站主题色',
        'values' => array('#006fff'),
    ),
    'appearance-typeface' => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'text',
        'name'        => '自定义网站字体链接',
        'values'      => array(''),
        'description' => '字体链接（推荐woff格式的字体，网页专用字体）',
    ),
    'appearance-favicon'  => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'text',
        'name'        => '网站 Favicon 设置',
        'values'      => array(''),
        'description' => '好的 Favicon 可以给用户一种很专业的观感，图片 URL地址 或 Base64 地址',
    ),
    'appearance-beijing'  => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'image',
        'name'        => '网站背景',
        'values'      => array(''),
        'description' => '不填写时显示默认的灰色，此项优先级最高！'
    ),

    'appearance-cbl' => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'image',
        'name'        => '侧边栏背景',
        'values'      => array('/content/templates/joe/assets/img/demo-cover.jpg',),
        'description' => 'WAP端网站的背景图片，不填写时显示默认的灰色，此项优先级最高！'
    ),


    'appearance-suolt' => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'image',
        'name'        => '自定义默认图',
        'values'      => array('/content/templates/joe/assets/img/demo-cover.jpg',),
        'description' => '没有图片时显示的默认图片'
    ),
    'appearance-ljz'   => array(
        'labels'      => 'tpl-appearance',
        'type'        => 'image',
        'name'        => '自定义加载图',
        'values'      => array('/content/templates/joe/assets/img/loading.gif',),
        'description' => '图片未加载完成时显示的图片'
    ),
    //导航设置
    'navigation-zdy'   => array(
        'labels'      => 'tpl-navigation',
        'type'        => 'text',
        'multi'       => 'true',
        'name'        => '自定义页面导航',
        'values'      => array('首页 || #
关于 || #
留言 || #
接口 || #'),
        'description' => '第一行导航条<br>格式：跳转文字 || 跳转链接（中间使用两个竖杠分隔，注意竖杠前后有空格）',
    ),
    'effects-type'     => array(
        'labels'  => 'tpl-effects',
        'type'    => 'radio',
        'name'    => '列表动态特效',
        'values'  => array(
            'off'                => '无特效',
            'bounce'             => 'bounce',
            'flash'              => 'flash',
            'pulse'              => 'pulse',
            'rubberBand'         => 'rubberBand',
            'headShake'          => 'headShake',
            'swing'              => 'swing',
            'tada'               => 'tada',
            'wobble'             => 'wobble',
            'jello'              => 'jello',
            'heartBeat'          => 'heartBeat',
            'bounceIn'           => 'bounceIn',
            'bounceInDown'       => 'bounceInDown',
            'bounceInLeft'       => 'bounceInLeft',
            'bounceInRight'      => 'bounceInRight',
            'bounceInUp'         => 'bounceInUp',
            'bounceOut'          => 'bounceOut',
            'bounceOutDown'      => 'bounceOutDown',
            'bounceOutLeft'      => 'bounceOutLeft',
            'bounceOutRight'     => 'bounceOutRight',
            'bounceOutUp'        => 'bounceOutUp',
            'fadeIn'             => 'fadeIn',
            'fadeInDown'         => 'fadeInDown',
            'fadeInDownBig'      => 'fadeInDownBig',
            'fadeInLeft'         => 'fadeInLeft',
            'fadeInLeftBig'      => 'fadeInLeftBig',
            'fadeInRight'        => 'fadeInRight',
            'fadeInRightBig'     => 'fadeInRightBig',
            'fadeInUp'           => 'fadeInUp',
            'fadeInUpBig'        => 'fadeInUpBig',
            'fadeOut'            => 'fadeOut',
            'fadeOutDown'        => 'fadeOutDown',
            'fadeOutDownBig'     => 'fadeOutDownBig',
            'fadeOutLeft'        => 'fadeOutLeft',
            'fadeOutLeftBig'     => 'fadeOutLeftBig',
            'fadeOutRight'       => 'fadeOutRight',
            'fadeOutRightBig'    => 'fadeOutRightBig',
            'fadeOutUp'          => 'fadeOutUp',
            'fadeOutUpBig'       => 'fadeOutUpBig',
            'flip'               => 'flip',
            'flipInX'            => 'flipInX',
            'flipInY'            => 'flipInY',
            'flipOutX'           => 'flipOutX',
            'flipOutY'           => 'flipOutY',
            'rotateIn'           => 'rotateIn',
            'rotateInDownLeft'   => 'rotateInDownLeft',
            'rotateInDownRight'  => 'rotateInDownRight',
            'rotateInUpLeft'     => 'rotateInUpLeft',
            'rotateInUpRight'    => 'rotateInUpRight',
            'rotateOut'          => 'rotateOut',
            'rotateOutDownLeft'  => 'rotateOutDownLeft',
            'rotateOutDownRight' => 'rotateOutDownRight',
            'rotateOutUpLeft'    => 'rotateOutUpLeft',
            'rotateOutUpRight'   => 'rotateOutUpRight',
            'hinge'              => 'hinge',
            'jackInTheBox'       => 'jackInTheBox',
            'rollIn'             => 'rollIn',
            'rollOut'            => 'rollOut',
            'zoomIn'             => 'zoomIn',
            'zoomInDown'         => 'zoomInDown',
            'zoomInLeft'         => 'zoomInLeft',
            'zoomInRight'        => 'zoomInRight',
            'zoomInUp'           => 'zoomInUp',
            'zoomOut'            => 'zoomOut',
            'zoomOutDown'        => 'zoomOutDown',
            'zoomOutLeft'        => 'zoomOutLeft',
            'zoomOutRight'       => 'zoomOutRight',
            'zoomOutUp'          => 'zoomOutUp',
            'slideInDown'        => 'slideInDown',
            'slideInLeft'        => 'slideInLeft',
            'slideInRight'       => 'slideInRight',
            'slideInUp'          => 'slideInUp',
            'slideOutDown'       => 'slideOutDown',
            'slideOutLeft'       => 'slideOutLeft',
            'slideOutRight'      => 'slideOutRight',
            'slideOutUp'         => 'slideOutUp',
        ),
        'default' => 'pulse',
    ),


    'addition-date' => array(
        'labels' => 'tpl-addition',
        'type'   => 'text',
        'name'   => '网站成立日期',
        'values' => array('2021/1/1 00:00:00'),
    ),
);