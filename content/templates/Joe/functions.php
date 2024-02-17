<?php
defined('EMLOG_ROOT') || exit('access denied!');

function GetThumFromContent($a) {
    preg_match_all("/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i", $a, $b);
    if (!empty($b[1])) {
        $c = $b[1][0];
    } else {
        $c = getrandomim();
    }
    return $c;
}

function getrandomim() {
    $c = 'assets/img/' . rand(1, 10) . '.jpg';
    return $c;
}

function syzan() {
    $d = MySql::getInstance();
    if ($d->num_rows($d->query("show columns from " . DB_PREFIX . "blog like 'slzan'")) != 01) {
        $e = "ALTER TABLE " . DB_PREFIX . "blog ADD slzan int unsigned NOT NULL DEFAULT '0'";
        $d->query($e);
    }
}

syzan();
function update($f, $g = 1) {
    $f = intval($_POST['id']);
    $d = Database::getInstance();
    if ($g) {
        $d->query("UPDATE " . DB_PREFIX . "blog SET slzan=slzan+1 WHERE gid=$f");
        setcookie('slzanpd_' . $f, 'true', time() + 31536000);
    } else {
        $d->query("UPDATE " . DB_PREFIX . "blog SET slzan=slzan-1 WHERE gid=$f");
        setcookie('slzanpd_' . $f, 'false', time() + 31536000);
    }
}

function lemoninit() {
    if (@$_POST['plugin'] == 'slzanpd' && @$_POST['action'] == 'slzan' && isset($_POST['id'])) {
        $h = intval($_POST['id']);
        header("Access-Control-Allow-Origin: *");
        if (isset($_COOKIE['slzanpd_' . $_POST['id']]) && $_COOKIE['slzanpd_' . $_POST['id']] == 'true') {
            update($h, 0);
        } else {
            update($h, 1);
        }
        echo getnum($h);
        die;
    }
}

lemoninit();
function getnum($h) {
    static $i = array();
    $d = Database::getInstance();
    $e = "SELECT slzan FROM " . DB_PREFIX . "blog WHERE gid=$h";
    $j = $d->query($e);
    $k = $d->fetch_array($j);
    $i[$h] = intval($k['slzan']);
    return $i[$h];
}

function geshihua($a, $l = null) {
    $a = str_replace('阅读全文&rarr;', '', strip_tags($a));
    $a = preg_replace('/{anote([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{music([^}]*)\/}/SU', '【 #音乐内容 】', $a);
    $a = preg_replace('/{mp3([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{bilibili([^}]*)\/}/SU', '【 #B站视频 】', $a);
    $a = preg_replace('/{dplayer([^}]*)\/}/SU', '【 #视频内容 】', $a);
    $a = preg_replace('/{mtitle([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{abtn([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{cloud([^}]*)\/}/SU', '【 #下载地址 】', $a);
    $a = preg_replace('/{timeline}([\s\S]*?){\/timeline}/', '【 #时间轴 】', $a);
    $a = preg_replace('/{anote([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{dotted([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{message([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{progress([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/{copy([^}]*)\/}/SU', '', $a);
    $a = preg_replace('/!\\[.*\\]\\((.+)\\)/', '【 #图片 】', $a);
    $a = preg_replace('/{card-default([^}]*)}([\s\S]*?){\/card-default}/', '$2', $a);
    $a = preg_replace('/{hide[^}]*}([\s\S]*?){\/hide}/Uims', '【 #回复可见 】', $a);
    return $a;
}

function img_count($a) {
    return count(img_array($a));
}

function img_array($a) {
    preg_match_all("/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i", $a, $m);
    $n = $m[1];
    return $n;
}

function img_ns($a) {
    preg_match_all("/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i", $a, $b);
    $c = !empty($b[1]) ? $b[1][0] : '';
    if ($c):return $c;endif;
}

function img_fj($a) {
    preg_match_all("/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i", $a, $b);
    $c = !empty($b[1]) ? $b[1][0] : '';
    if ($c):return $c;endif;
}

function img_wzn($a) {
    preg_match('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/', $a, $o);
    $c = $o[1];
    if ($c):return $c;endif;
}

function comment2emoji($p) {
    $q = array(array('url' => 'assets/owo/paopao/E591B5E591B5_2x.png', 'title' => "呵呵"), array('url' => 'assets/owo/paopao/E59388E59388_2x.png', 'title' => "哈哈"), array('url' => 'assets/owo/paopao/E59090E8888C_2x.png', 'title' => "吐舌"), array('url' => 'assets/owo/paopao/E5A4AAE5BC80E5BF83_2x.png', 'title' => "太开心"), array('url' => 'assets/owo/paopao/E7AC91E79CBC_2x.png', 'title' => "笑眼"), array('url' => 'assets/owo/paopao/E88AB1E5BF83_2x.png', 'title' => "花心"), array('url' => 'assets/owo/paopao/E5B08FE4B996_2x.png', 'title' => "小乖"), array('url' => 'assets/owo/paopao/E4B996_2x.png', 'title' => "乖"), array('url' => 'assets/owo/paopao/E68D82E598B4E7AC91_2x.png', 'title' => "捂嘴笑"), array('url' => 'assets/owo/paopao/E6BB91E7A8BD_2x.png', 'title' => "滑稽"), array('url' => 'assets/owo/paopao/E4BDA0E68782E79A84_2x.png', 'title' => "你懂的"), array('url' => 'assets/owo/paopao/E4B88DE9AB98E585B4_2x.png', 'title' => "不高兴"), array('url' => 'assets/owo/paopao/E68092_2x.png', 'title' => "怒"), array('url' => 'assets/owo/paopao/E6B197_2x.png', 'title' => "汗"), array('url' => 'assets/owo/paopao/E9BB91E7BABF_2x.png', 'title' => "黑线"), array('url' => 'assets/owo/paopao/E6B3AA_2x.png', 'title' => "泪"), array('url' => 'assets/owo/paopao/E79C9FE6A392_2x.png', 'title' => "真棒"), array('url' => 'assets/owo/paopao/E596B7_2x.png', 'title' => "喷"), array('url' => 'assets/owo/paopao/E6838AE593AD_2x.png', 'title' => "惊哭"), array('url' => 'assets/owo/paopao/E998B4E999A9_2x.png', 'title' => "阴险"), array('url' => 'assets/owo/paopao/E98499E8A786_2x.png', 'title' => "鄙视"), array('url' => 'assets/owo/paopao/E985B7_2x.png', 'title' => "酷"), array('url' => 'assets/owo/paopao/E5958A_2x.png', 'title' => "啊"), array('url' => 'assets/owo/paopao/E78B82E6B197_2x.png', 'title' => "狂汗"), array('url' => 'assets/owo/paopao/what_2x.png', 'title' => "what"), array('url' => 'assets/owo/paopao/E79691E997AE_2x.png', 'title' => "疑问"), array('url' => 'assets/owo/paopao/E985B8E788BD_2x.png', 'title' => "酸爽"), array('url' => 'assets/owo/paopao/E59180E592A9E788B9_2x.png', 'title' => "呀咩爹"), array('url' => 'assets/owo/paopao/E5A794E5B188_2x.png', 'title' => "委屈"), array('url' => 'assets/owo/paopao/E6838AE8AEB6_2x.png', 'title' => "惊讶"), array('url' => 'assets/owo/paopao/E79DA1E8A789_2x.png', 'title' => "睡觉"), array('url' => 'assets/owo/paopao/E7AC91E5B0BF_2x.png', 'title' => "笑尿"), array('url' => 'assets/owo/paopao/E68C96E9BCBB_2x.png', 'title' => "挖鼻"), array('url' => 'assets/owo/paopao/E59090_2x.png', 'title' => "吐"), array('url' => 'assets/owo/paopao/E78A80E588A9_2x.png', 'title' => "犀利"), array('url' => 'assets/owo/paopao/E5B08FE7BAA2E884B8_2x.png', 'title' => "小红脸"), array('url' => 'assets/owo/paopao/E68792E5BE97E79086_2x.png', 'title' => "懒得理"), array('url' => 'assets/owo/paopao/E58B89E5BCBA_2x.png', 'title' => "勉强"), array('url' => 'assets/owo/paopao/E788B1E5BF83_2x.png', 'title' => "爱心"), array('url' => 'assets/owo/paopao/E5BF83E7A28E_2x.png', 'title' => "心碎"), array('url' => 'assets/owo/paopao/E78EABE791B0_2x.png', 'title' => "玫瑰"), array('url' => 'assets/owo/paopao/E7A4BCE789A9_2x.png', 'title' => "礼物"), array('url' => 'assets/owo/paopao/E5BDA9E899B9_2x.png', 'title' => "彩虹"), array('url' => 'assets/owo/paopao/E5A4AAE998B3_2x.png', 'title' => "太阳"), array('url' => 'assets/owo/paopao/E6989FE6989FE69C88E4BAAE_2x.png', 'title' => "星星月亮"), array('url' => 'assets/owo/paopao/E992B1E5B881_2x.png', 'title' => "钱币"), array('url' => 'assets/owo/paopao/E88CB6E69DAF_2x.png', 'title' => "茶杯"), array('url' => 'assets/owo/paopao/E89B8BE7B395_2x.png', 'title' => "蛋糕"), array('url' => 'assets/owo/paopao/E5A4A7E68B87E68C87_2x.png', 'title' => "大拇指"), array('url' => 'assets/owo/paopao/E8839CE588A9_2x.png', 'title' => "胜利"), array('url' => 'assets/owo/paopao/haha_2x.png', 'title' => "haha"), array('url' => 'assets/owo/paopao/OK_2x.png', 'title' => "OK"), array('url' => 'assets/owo/paopao/E6B299E58F91_2x.png', 'title' => "沙发"), array('url' => 'assets/owo/paopao/E6898BE7BAB8_2x.png', 'title' => "手纸"), array('url' => 'assets/owo/paopao/E9A699E89589_2x.png', 'title' => "香蕉"), array('url' => 'assets/owo/paopao/E4BEBFE4BEBF_2x.png', 'title' => "便便"), array('url' => 'assets/owo/paopao/E88DAFE4B8B8_2x.png', 'title' => "药丸"), array('url' => 'assets/owo/paopao/E7BAA2E9A286E5B7BE_2x.png', 'title' => "红领巾"), array('url' => 'assets/owo/paopao/E89CA1E7839B_2x.png', 'title' => "蜡烛"), array('url' => 'assets/owo/paopao/E99FB3E4B990_2x.png', 'title' => "音乐"), array('url' => 'assets/owo/paopao/E781AFE6B3A1_2x.png', 'title' => "灯泡"), array('url' => 'assets/owo/paopao/E5BC80E5BF83_2x.png', 'title' => "开心"), array('url' => 'assets/owo/paopao/E992B1_2x.png', 'title' => "钱"), array('url' => 'assets/owo/paopao/E592A6_2x.png', 'title' => "咦"), array('url' => 'assets/owo/paopao/E591BC_2x.png', 'title' => "呼"), array('url' => 'assets/owo/paopao/E586B7_2x.png', 'title' => "冷"), array('url' => 'assets/owo/paopao/E7949FE6B094_2x.png', 'title' => "生气"), array('url' => 'assets/owo/paopao/E5BCB1_2x.png', 'title' => "弱"), array('url' => 'assets/owo/paopao/E78B97E5A4B4_2x.png', 'title' => "狗头"), array('url' => 'assets/owo/aru/E9AB98E585B4_2x.png', 'title' => "高兴"), array('url' => 'assets/owo/aru/E5B08FE68092_2x.png', 'title' => "小怒"), array('url' => 'assets/owo/aru/E884B8E7BAA2_2x.png', 'title' => "脸红"), array('url' => 'assets/owo/aru/E58685E4BCA4_2x.png', 'title' => "内伤"), array('url' => 'assets/owo/aru/E8A385E5A4A7E6ACBE_2x.png', 'title' => "装大款"), array('url' => 'assets/owo/aru/E8B59EE4B880E4B8AA_2x.png', 'title' => "赞一个"), array('url' => 'assets/owo/aru/E5AEB3E7BE9E_2x.png', 'title' => "害羞"), array('url' => 'assets/owo/aru/E6B197_2x.png', 'title' => "汗"), array('url' => 'assets/owo/aru/E59090E8A180E58092E59CB0_2x.png', 'title' => "吐血倒地"), array('url' => 'assets/owo/aru/E6B7B1E6809D_2x.png', 'title' => "深思"), array('url' => 'assets/owo/aru/E4B88DE9AB98E585B4_2x.png', 'title' => "不高兴"), array('url' => 'assets/owo/aru/E697A0E8AFAD_2x.png', 'title' => "无语"), array('url' => 'assets/owo/aru/E4BAB2E4BAB2_2x.png', 'title' => "亲亲"), array('url' => 'assets/owo/aru/E58FA3E6B0B4_2x.png', 'title' => "口水"), array('url' => 'assets/owo/aru/E5B0B4E5B0AC_2x.png', 'title' => "尴尬"), array('url' => 'assets/owo/aru/E4B8ADE68C87_2x.png', 'title' => "中指"), array('url' => 'assets/owo/aru/E683B3E4B880E683B3_2x.png', 'title' => "想一想"), array('url' => 'assets/owo/aru/E593ADE6B3A3_2x.png', 'title' => "哭泣"), array('url' => 'assets/owo/aru/E4BEBFE4BEBF_2x.png', 'title' => "便便"), array('url' => 'assets/owo/aru/E78CAEE88AB1_2x.png', 'title' => "献花"), array('url' => 'assets/owo/aru/E79AB1E79C89_2x.png', 'title' => "皱眉"), array('url' => 'assets/owo/aru/E582BBE7AC91_2x.png', 'title' => "傻笑"), array('url' => 'assets/owo/aru/E78B82E6B197_2x.png', 'title' => "狂汗"), array('url' => 'assets/owo/aru/E59090_2x.png', 'title' => "吐"), array('url' => 'assets/owo/aru/E596B7E6B0B4_2x.png', 'title' => "喷水"), array('url' => 'assets/owo/aru/E79C8BE4B88DE8A781_2x.png', 'title' => "看不见"), array('url' => 'assets/owo/aru/E9BC93E68E8C_2x.png', 'title' => "鼓掌"), array('url' => 'assets/owo/aru/E998B4E69A97_2x.png', 'title' => "阴暗"), array('url' => 'assets/owo/aru/E995BFE88D89_2x.png', 'title' => "长草"), array('url' => 'assets/owo/aru/E78CAEE9BB84E7939C_2x.png', 'title' => "献黄瓜"), array('url' => 'assets/owo/aru/E982AAE681B6_2x.png', 'title' => "邪恶"), array('url' => 'assets/owo/aru/E69C9FE5BE85_2x.png', 'title' => "期待"), array('url' => 'assets/owo/aru/E5BE97E6848F_2x.png', 'title' => "得意"), array('url' => 'assets/owo/aru/E59090E8888C_2x.png', 'title' => "吐舌"), array('url' => 'assets/owo/aru/E596B7E8A180_2x.png', 'title' => "喷血"), array('url' => 'assets/owo/aru/E697A0E68980E8B093_2x.png', 'title' => "无所谓"), array('url' => 'assets/owo/aru/E8A782E5AF9F_2x.png', 'title' => "观察"), array('url' => 'assets/owo/aru/E69A97E59CB0E8A782E5AF9F_2x.png', 'title' => "暗地观察"), array('url' => 'assets/owo/aru/E882BFE58C85_2x.png', 'title' => "肿包"), array('url' => 'assets/owo/aru/E4B8ADE69EAA_2x.png', 'title' => "中枪"), array('url' => 'assets/owo/aru/E5A4A7E59BA7_2x.png', 'title' => "大囧"), array('url' => 'assets/owo/aru/E591B2E78999_2x.png', 'title' => "呲牙"), array('url' => 'assets/owo/aru/E68AA0E9BCBB_2x.png', 'title' => "抠鼻"), array('url' => 'assets/owo/aru/E4B88DE8AFB4E8AF9D_2x.png', 'title' => "不说话"), array('url' => 'assets/owo/aru/E592BDE6B094_2x.png', 'title' => "咽气"), array('url' => 'assets/owo/aru/E6ACA2E591BC_2x.png', 'title' => "欢呼"), array('url' => 'assets/owo/aru/E99481E79C89_2x.png', 'title' => "锁眉"), array('url' => 'assets/owo/aru/E89CA1E7839B_2x.png', 'title' => "蜡烛"), array('url' => 'assets/owo/aru/E59D90E7AD89_2x.png', 'title' => "坐等"), array('url' => 'assets/owo/aru/E587BBE68E8C_2x.png', 'title' => "击掌"), array('url' => 'assets/owo/aru/E6838AE5969C_2x.png', 'title' => "惊喜"), array('url' => 'assets/owo/aru/E5969CE69E81E8808CE6B3A3_2x.png', 'title' => "喜极而泣"), array('url' => 'assets/owo/aru/E68ABDE7839F_2x.png', 'title' => "抽烟"), array('url' => 'assets/owo/aru/E4B88DE587BAE68980E69699_2x.png', 'title' => "不出所料"), array('url' => 'assets/owo/aru/E684A4E68092_2x.png', 'title' => "愤怒"), array('url' => 'assets/owo/aru/E697A0E5A588_2x.png', 'title' => "无奈"), array('url' => 'assets/owo/aru/E9BB91E7BABF_2x.png', 'title' => "黑线"), array('url' => 'assets/owo/aru/E68A95E9998D_2x.png', 'title' => "投降"), array('url' => 'assets/owo/aru/E79C8BE783ADE997B9_2x.png', 'title' => "看热闹"), array('url' => 'assets/owo/aru/E68987E880B3E58589_2x.png', 'title' => "扇耳光"), array('url' => 'assets/owo/aru/E5B08FE79CBCE79D9B_2x.png', 'title' => "小眼睛"), array('url' => 'assets/owo/aru/E4B8ADE58880_2x.png', 'title' => "中刀"),);
    foreach ($q as $r => $s) {
        $t = TEMPLATE_URL . $s["url"];
        $p = str_replace('[' . $s['title'] . ']', '<img class="owo_image ls-is-cached lazyloaded" src="' . $t . '" title="' . $s['title'] . '">', $p);
        $p = preg_replace_callback('/\:\:\(\s*(呵呵|哈哈|吐舌|太开心|笑眼|花心|小乖|乖|捂嘴笑|滑稽|你懂的|不高兴|怒|汗|黑线|泪|真棒|喷|惊哭|阴险|鄙视|酷|啊|狂汗|what|疑问|酸爽|呀咩爹|委屈|惊讶|睡觉|笑尿|挖鼻|吐|犀利|小红脸|懒得理|勉强|爱心|心碎|玫瑰|礼物|彩虹|太阳|星星月亮|钱币|茶杯|蛋糕|大拇指|胜利|haha|OK|沙发|手纸|香蕉|便便|药丸|红领巾|蜡烛|音乐|灯泡|开心|钱|咦|呼|冷|生气|弱|吐血|狗头)\s*\)/is', function ($o) {
            return '<img class="owo_image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="' . TEMPLATE_URL . 'assets/owo/paopao/' . str_replace('%', '', urlencode($o[1])) . '_2x.png" alt="表情"/>';
        }, $p);
        $p = preg_replace_callback('/\:\@\(\s*(高兴|小怒|脸红|内伤|装大款|赞一个|害羞|汗|吐血倒地|深思|不高兴|无语|亲亲|口水|尴尬|中指|想一想|哭泣|便便|献花|皱眉|傻笑|狂汗|吐|喷水|看不见|鼓掌|阴暗|长草|献黄瓜|邪恶|期待|得意|吐舌|喷血|无所谓|观察|暗地观察|肿包|中枪|大囧|呲牙|抠鼻|不说话|咽气|欢呼|锁眉|蜡烛|坐等|击掌|惊喜|喜极而泣|抽烟|不出所料|愤怒|无奈|黑线|投降|看热闹|扇耳光|小眼睛|中刀)\s*\)/is', function ($o) {
            return '<img class="owo_image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="' . TEMPLATE_URL . 'assets/owo/aru/' . str_replace('%', '', urlencode($o[1])) . '_2x.png" alt="表情"/>';
        }, $p);
        $p = preg_replace("/\[img\](.*?)\.../", '#图片回复', $p);
    }
    return $p;
}