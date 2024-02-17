<?php
/**
 * 侧边栏组件、页面模块
 */

defined('EMLOG_ROOT') || exit('access denied!');
?>
<?php
//widget：链接
function widget_link($title) {
    global $CACHE;
    $link_cache = $CACHE->readCache('link');
    //if (!blog_tool_ishome()) return;#只在首页显示友链去掉双斜杠注释即可
    ?>
    <section class="joe_aside__item flatterer">
        <div class="joe_aside__item-title">
            <svg class="icon" viewBox="0 0 1024 1024" width="18" height="18">
                <path d="M541.636727 0q99.129741 0 186.506986 37.812375t152.271457 102.706587 102.706587 152.271457 37.812375 186.506986q0 100.151697-37.812375 187.528942t-102.706587 152.271457-152.271457 102.706587-186.506986 37.812375-186.506986-37.812375-152.271457-102.706587-102.706587-152.271457-37.812375-187.528942q0-99.129741 37.812375-186.506986t102.706587-152.271457 152.271457-102.706587 186.506986-37.812375zM672.447106 612.151697q3.065868-4.087824-3.065868-10.219561t-14.307385-13.796407-14.307385-15.840319-4.087824-15.329341q5.10978-16.351297 3.576846-24.015968t-9.708583-10.219561-23.50499-2.043912-36.790419 0.510978q-11.241517 0-18.39521 1.021956t-13.285429 1.532934-13.285429 1.021956-16.351297-0.510978q-14.307385-1.021956-21.972056-5.10978t-14.307385-8.175649-16.862275-7.153693-29.636727-4.087824q-27.592814-1.021956-39.345309-2.55489t-16.862275-3.065868-8.175649-2.043912-12.263473-0.510978q-9.197605 1.021956-28.103792 9.197605t-38.323353 18.906188-33.724551 21.972056-14.307385 18.39521q0 20.439122 2.55489 32.702595t7.153693 18.906188 9.708583 10.730539 10.219561 9.197605 13.796407 7.153693 18.906188 2.55489 18.906188 2.55489 13.796407 7.153693q10.219561 12.263473 21.461078 10.219561t19.928144-6.642715 14.307385-3.576846 6.642715 19.417166q0 8.175649 3.065868 12.263473t8.175649 6.131737l12.263473 6.131737q7.153693 4.087824 15.329341 11.241517 8.175649 8.175649 5.620758 15.329341t-7.664671 13.796407-9.708583 14.307385 0.510978 14.818363q7.153693 11.241517 15.329341 16.351297t15.840319 8.686627 13.796407 8.175649 8.175649 14.818363q0 3.065868 7.153693 11.752495t13.796407 17.884232 10.730539 15.329341-2.043912 5.10978q12.263473 2.043912 26.05988 2.043912t17.884232-5.10978l2.043912-2.043912 0-1.021956 3.065868-1.021956q2.043912-1.021956 5.620758-2.55489t9.708583-6.642715q12.263473-8.175649 23.50499-21.461078t19.417166-29.125749 13.796407-32.191617 7.664671-30.658683q2.043912-13.285429 6.642715-19.417166t8.175649-10.730539 6.131737-12.263473-0.510978-26.05988q-3.065868-23.50499 5.620758-34.235529t14.818363-17.884232zM773.620758 772.598802q14.307385-17.373253 14.818363-28.61477t-24.015968-17.373253q-25.548902-6.131737-36.279441-6.642715t-19.928144 10.730539-13.285429 22.994012 2.043912 32.191617q3.065868 9.197605 5.10978 14.818363t5.10978 7.153693 9.197605 1.021956 17.373253-3.576846q12.263473-3.065868 23.50499-14.307385t16.351297-18.39521zM801.213573 474.187625q7.153693-7.153693 24.015968-10.730539t34.235529-9.197605 30.658683-15.840319 14.307385-28.61477 0-33.724551-6.131737-30.658683-13.796407-32.191617-21.972056-38.323353q-14.307385-22.483034-26.05988-37.812375t-22.994012-26.05988-23.50499-19.417166-27.592814-17.884232q-16.351297-9.197605-32.191617-19.928144t-34.235529-14.307385-39.856287 4.598802-49.053892 35.768463l-17.373253 18.39521q-11.241517 10.219561-23.50499 19.417166t-23.50499 15.840319-20.439122 6.642715q-8.175649 0-25.548902 2.043912t-35.257485 10.219561-30.658683 22.994012-10.730539 39.345309q1.021956 27.592814 9.708583 35.768463t22.483034 9.197605 32.702595 2.043912 40.367265 13.285429q25.548902 6.131737 48.031936 12.263473 19.417166 5.10978 39.345309 12.774451t33.213573 15.840319q15.329341 9.197605 12.263473 24.015968t-10.730539 30.147705-12.774451 29.636727 6.131737 22.483034q15.329341 11.241517 22.483034 14.307385t15.329341 1.532934 22.483034-4.598802 43.944112-3.065868q-8.175649 0-3.065868-6.131737t15.840319-15.329341 22.994012-18.906188 20.439122-15.840319z"
                      p-id="2105"></path>
            </svg>
            <span class="text"><?= $title; ?></span>
            <span class="line"></span>
        </div>
        <div class="joe_aside__item-contain">
            <?php foreach ($link_cache as $value): ?>
                <li><a href="<?= $value['url']; ?>" target="_blank"><?= $value['link']; ?></a></li>
            <?php endforeach; ?>
        </div>
    </section>
<?php } ?>
<?php
//widget：标签
function widget_tag($title) {
    global $CACHE;
    $tag_cache = $CACHE->readCache('tags'); ?>
    <section class="joe_aside__item tags">
        <div class="joe_aside__item-title">
            <svg class="icon" viewBox="0 0 1024 1024" width="18" height="18">
                <path d="M898.048 556.544L547.84 916.992c-43.008 44.032-112.64 44.032-155.648 0L119.808 636.416c-43.008-44.032-43.008-116.224 0-160.256L470.016 115.2c26.624-28.672 31.744-41.472 59.904-41.472h355.84c28.16 0 50.688 23.552 50.688 52.224v366.592c0 28.672-15.872 40.448-38.4 64zM158.72 596.48l272.384 280.576c21.504 22.016 56.32 22.016 77.824 0l38.4-39.936-349.696-361.472-39.424 40.448c-20.992 22.528-20.992 58.368.512 80.384zm727.04-444.416c0-14.336-11.264-26.112-25.6-26.112H555.008c-13.824 0-33.792 16.384-46.592 29.184l-271.36 280.576 349.696 360.96 272.384-280.576c13.824-14.336 26.624-35.328 26.624-49.664V152.064zM610.304 422.4c-42.496-43.52-42.496-114.688 0-158.208 42.496-44.032 111.104-44.032 153.6 0 42.496 43.52 42.496 114.688 0 158.208s-111.616 43.52-153.6 0zm115.2-118.784c-20.992-22.016-55.808-22.016-76.8 0s-20.992 57.344 0 79.36 55.808 22.016 76.8 0 20.992-57.344 0-79.36z"></path>
            </svg>
            <span class="text"><?= $title; ?></span>
            <span class="line"></span>
        </div>
        <div class="joe_aside__item-contain">
            <div class="empty">暂无标签</div>
            <?php foreach ($tag_cache as $value): ?>
                <span style="font-size:<?= $value['fontsize']; ?>pt; line-height:30px;">
            <a href="<?= Url::tag($value['tagurl']); ?>" title="<?= $value['usenum'] + 2; ?> 篇文章" class='tags_side'><?= $value['tagname']; ?></a></span>
            <?php endforeach; ?>
        </div>
    </section>
<?php } ?>
<?php
//widget：最新评论
function widget_newcomm($title) {
    global $CACHE;
    $com_cache = $CACHE->readCache('comment');
    $user_cache = $CACHE->readCache('user');
    $name = $user_cache[1]['name'];
    ?>
    <section class="joe_aside__item newreply">
        <div class="joe_aside__item-title">
            <svg class="icon" viewBox="0 0 1024 1024" width="18" height="18">
                <path d="M512 647.239a204.391 204.391 0 0 0 204.391-204.391V204.39a204.391 204.391 0 0 0-408.782 0v238.457A204.391 204.391 0 0 0 512 647.238zM375.74 204.39a136.26 136.26 0 0 1 272.52 0v238.457a136.26 136.26 0 0 1-272.52 0z"></path>
                <path d="M852.652 476.913a34.065 34.065 0 0 0-68.13 0A257.533 257.533 0 0 1 512 715.369a257.533 257.533 0 0 1-272.522-238.456 34.065 34.065 0 0 0-34.065-34.065 34.065 34.065 0 0 0-34.065 34.065 321.576 321.576 0 0 0 307.268 303.861v173.052H307.61a34.065 34.065 0 0 0-34.065 34.065 34.065 34.065 0 0 0 34.065 34.065H716.39a34.065 34.065 0 0 0 34.065-34.065 34.065 34.065 0 0 0-34.065-34.065H546.065V778.73a321.576 321.576 0 0 0 306.587-301.817z"></path>
            </svg>
            <span class="text"><?= $title; ?></span>
            <span class="line"></span>
        </div>
        <ul class="joe_aside__item-contain">
            <?php
            foreach ($com_cache as $value):
                $url = Url::comment($value['gid'], $value['page'], $value['cid']);
                ?><?php if ($value['name'] != $name): ?>
                <li class="item">
                <div class="user">
                    <img width="40" height="40" class="avatar lazyloaded" src="<?= getqqpic($value['mail']); ?>" data-src="<?= getqqpic($value['mail']); ?>" alt="<?= $value['name']; ?>">
                    <div class="info">
                        <div class="author"><?= $value['name']; ?></div>
                        <span class="date"><?= smartDate($value['date']); ?></span>
                    </div>
                </div>
                <div class="reply">
                    <a class="link" href="<?= $url; ?>"><?= comment2emoji($value['content']); ?></a>
                </div>
                </li><?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </section>
<?php } ?>
<?php //widget：热门文章
function widget_hotlog($title) {
    $index_hotlognum = Option::get('index_hotlognum'); ?>
    <section class="joe_aside__item hot">
    <div class="joe_aside__item-title">
        <svg class="icon" viewBox="0 0 1024 1024" width="18" height="18">
            <path d="M512 938.667A426.667 426.667 0 0 1 85.333 512a421.12 421.12 0 0 1 131.2-306.133 58.88 58.88 0 0 1 42.667-16.64c33.28 1.066 58.027 28.16 84.267 56.96 7.893 8.533 19.626 21.333 28.373 29.013a542.933 542.933 0 0 0 24.533-61.867c18.134-52.266 35.414-101.76 75.307-121.6 55.04-27.733 111.573 37.974 183.253 121.6 16.214 18.774 38.614 44.8 53.547 59.52 1.707-4.48 3.2-8.96 4.48-12.373 8.533-24.32 18.987-54.613 51.2-61.653a57.813 57.813 0 0 1 55.68 20.053A426.667 426.667 0 0 1 512 938.667zM260.693 282.453A336.64 336.64 0 0 0 170.667 512a341.333 341.333 0 1 0 614.826-203.733 90.24 90.24 0 0 1-42.666 50.56 68.267 68.267 0 0 1-53.547 1.706c-25.6-9.173-51.627-38.4-99.2-93.226a826.667 826.667 0 0 0-87.253-91.734 507.733 507.733 0 0 0-26.24 64c-18.134 52.267-35.414 101.76-75.947 119.254-48.853 21.333-88.32-21.334-120.107-56.96-5.76-4.694-13.226-13.014-19.84-19.414z"></path>
            <path d="M512 810.667A298.667 298.667 0 0 1 213.333 512a42.667 42.667 0 0 1 85.334 0A213.333 213.333 0 0 0 512 725.333a42.667 42.667 0 0 1 0 85.334z"></path>
        </svg>
        <span class="text"><?= $title; ?></span>
        <span class="line"></span>
    </div>
    <ol class="joe_aside__item-contain">
        <?php $db = MySql::getInstance();
        $db = MySql::getInstance();
        $time = time();
        $i = 0;
        $sql = $db->query("SELECT * FROM " . DB_PREFIX . "blog inner join " . DB_PREFIX . "sort WHERE hide='n' AND type='blog' AND date > $time - 30*24*60*60 AND top='n' AND sortid=sid order by `views` DESC limit 0,$index_hotlognum");
        while ($row = $db->fetch_array($sql)) {
            $i++;
            $logpost = !empty($row['excerpt']) ? $row['excerpt'] : '' . $row['content'] . '';
            //无图片时显示
            $date = gmdate('Y年m月d日', $row['date']);
            $content = strip_tags($logpost, '');
            $content = mb_substr($content, 0, 100, 'utf-8');
            //摘要字数修改本代码中的100这个即可
            $comment = ($row['comnum'] != 0) ? '' . $row['comnum'] . '' : '0';
            $gid = $row['gid'];
            ?>
            <?php
            if (!empty($row['cover'])) {
                $imgurl = $row['cover'];
            } elseif (img_ns($row['content'])) {
                $imgurl = img_ns($row['content']);
            } else {
                $imgurl = _g('appearance-suolt');
            }
            ?>
            <li class="item">
                <a class="link" href="<?= Url::log($row['gid']); ?>" title="<?= $row['title']; ?>">
                    <i class="sort"><?= $i; ?></i>
                    <img width="100%" height="130" class="image lazyloaded" data-original="<?= $imgurl; ?>" src="<?= $imgurl; ?>" alt="<?= $row['title']; ?>">
                    <div class="describe">
                        <h6><?= $row['title']; ?></h6>
                        <span><?= $row['views']; ?> 阅读 - <?= gmdate('m月d日', $row['date']); ?></span>
                    </div>
                </a>
            </li>
        <?php }; ?></ol></section><?php } ?>
<?php
//widget：自定义组件
function widget_custom_text($title, $content) { ?>
    <div class="widget shadow-theme">
        <div class="widget-title m">
            <h3>&#183;&nbsp;<?= $title; ?>&nbsp;&#183;</h3>
        </div>
        <ul class="list-unstyled">
            <?= $content; ?>
        </ul>
    </div>
<?php } ?>
<?php
//blog：导航
function celan_navi() {
    global $CACHE;
    $navi_cache = $CACHE->readCache('navi');
    ?>
    <ul class="slides panel-body panel-box">
        <?php
        foreach ($navi_cache as $value):
            if ($value['pid'] != 0) {
                continue;
            }
            if ($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
                ?>
                <a class="item " href="<?= BLOG_URL; ?>admin/">管理站点</a>
                <a class="item " href="<?= BLOG_URL; ?>admin/account.php?action=logout">退出</a>
                <?php
                continue;
            endif;
            $newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
            $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
            $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'active' : '';
            ?>
            <?php if (!empty($value['children']) || !empty($value['childnavi'])) : ?>
            <?php if (!empty($value['children'])): ?>
                <li>
                    <div class="link panel ">
                        <a href="<?= $value['url']; ?>" title="<?= $value['naviname']; ?>"><?= $value['naviname']; ?></a>
                        <svg class="icon" viewBox="0 0 1024 1024" width="13" height="13">
                            <path d="M624.865 512.247L332.71 220.088c-12.28-12.27-12.28-32.186 0-44.457 12.27-12.28 32.186-12.28 44.457 0l314.388 314.388c12.28 12.27 12.28 32.186 0 44.457L377.167 848.863c-6.136 6.14-14.183 9.211-22.228 9.211s-16.092-3.071-22.228-9.211c-12.28-12.27-12.28-32.186 0-44.457l292.155-292.16z"/>
                        </svg>
                    </div>
                    <ul class="slides panel-body">
                        <?php foreach ($value['children'] as $row) {
                            echo '<li><a class="link " href="' . Url::sort($row['sid']) . '" title="' . $row['sortname'] . '">' . $row['sortname'] . '</a></li>';
                        } ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if (!empty($value['childnavi'])) : ?>
                <a class='nav-link' href="<?= $value['url']; ?>" <?= $newtab; ?>><?= $value['naviname']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menus">
                    <?php foreach ($value['childnavi'] as $row) {
                        $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                        echo '<li class="nav-item list-menu"><a class="nav-link" href="' . $row['url'] . "\" $newtab >" . $row['naviname'] . '</a></li>';
                    } ?>
                </ul>
            <?php endif; ?>
        <?php else: ?>
            <li><a class="link " href="<?= $value['url']; ?>" title="<?= $value['naviname']; ?>"><?= $value['naviname']; ?></a></li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php } ?>
<?php
//blog：导航
function blog_navi() {
    global $CACHE;
    $navi_cache = $CACHE->readCache('navi');
    ?>
    <nav class="joe_header__below-class">
        <?php
        foreach ($navi_cache as $value):
            if ($value['pid'] != 0) {
                continue;
            }
            if ($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
                ?>
                <a class="item " href="<?= BLOG_URL; ?>admin/">管理站点</a>
                <a class="item " href="<?= BLOG_URL; ?>admin/account.php?action=logout">退出</a>
                <?php
                continue;
            endif;
            $newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
            $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
            $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'active' : '';
            ?>
            <?php if (!empty($value['children']) || !empty($value['childnavi'])) : ?>
            <?php if (!empty($value['children'])): ?>
                <div class="joe_dropdown" trigger="hover">
                    <div class="joe_dropdown__link">
                        <a class="item " href="<?= $value['url']; ?>" title="<?= $value['naviname']; ?>"><?= $value['naviname']; ?></a>
                        <svg class="joe_dropdown__link-icon" viewBox="0 0 1024 1024" width="13" height="13">
                            <path d="M561.873 725.165c-11.262 11.262-26.545 21.72-41.025 18.502-14.479 2.413-28.154-8.849-39.415-18.502L133.129 375.252c-17.697-17.696-17.697-46.655 0-64.352s46.655-17.696 64.351 0l324.173 333.021 324.977-333.02c17.696-17.697 46.655-17.697 64.351 0s17.697 46.655 0 64.351L561.873 725.165z" fill="var(--minor)"></path>
                        </svg>
                    </div>
                    <nav class="joe_dropdown__menu" style="top: 45px;">
                        <?php foreach ($value['children'] as $row) {
                            echo '<a class="" href="' . Url::sort($row['sid']) . '" title="' . $row['sortname'] . '">' . $row['sortname'] . '</a>';
                        } ?>
                    </nav>
                </div>
            <?php endif; ?>
            <?php if (!empty($value['childnavi'])) : ?>
                <a class='nav-link' href="<?= $value['url']; ?>" <?= $newtab; ?>><?= $value['naviname']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menus">
                    <?php foreach ($value['childnavi'] as $row) {
                        $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                        echo '<li class="nav-item list-menu"><a class="nav-link" href="' . $row['url'] . "\" $newtab >44" . $row['naviname'] . '</a></li>';
                    } ?>
                </ul>
            <?php endif; ?>
        <?php else: ?>
            <a class="item " href="<?= $value['url']; ?>" title="<?= $value['naviname']; ?>"><?= $value['naviname']; ?></a>
        <?php endif; ?>
        <?php endforeach; ?>
    </nav>
<?php } ?>
<?php
//blog：yemian
function blog_navi2() {
    $emPage = new Log_Model();
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $pages = $emPage->getLogsForAdmin('', '', $page, 'page');
    ?>
    <nav class="joe_header__above-nav">
        <a class="item " href="<?= BLOG_URL; ?>" title="首页">首页</a>
        <?php foreach ($pages as $key => $value):
            if (empty($navibar[$value['gid']]['url'])) {
                $navibar[$value['gid']]['url'] = Url::log($value['gid']);
            }
            $isHide = $value['hide'] == 'y' ?
                '<font color="red"> - 草稿</font>' :
                '' . $navibar[$value['gid']]['url'] . '';
            ?>
            <a class="item " href="<?= $isHide; ?>" title="<?= $value['title']; ?>"><?= $value['title']; ?></a>
        <?php endforeach; ?>
        <div class="joe_dropdown" trigger="hover" placement="60px" style="margin-right: 15px;">
            <div class="joe_dropdown__link">
                <a href="#" rel="nofollow">更多</a>
                <svg class="joe_dropdown__link-icon" viewBox="0 0 1024 1024" version="1.1" width="14" height="14">
                    <path d="M561.873 725.165c-11.262 11.262-26.545 21.72-41.025 18.502-14.479 2.413-28.154-8.849-39.415-18.502L133.129 375.252c-17.697-17.696-17.697-46.655 0-64.352s46.655-17.696 64.351 0l324.173 333.021 324.977-333.02c17.696-17.697 46.655-17.697 64.351 0s17.697 46.655 0 64.351L561.873 725.165z" p-id="3535" fill="var(--main)"></path>
                </svg>
            </div>
            <nav class="joe_dropdown__menu" style="top: 60px;">
                <a class="" href="" title="壁纸">壁纸</a>
                <a class="" href="" title="直播">直播</a>
                <a class="" href="" title="视频">视频</a>
            </nav>
        </div>
    </nav>
<?php } ?>
<?php
//blog：yemian
function blog_navi1() {
    $emPage = new Log_Model();
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $pages = $emPage->getLogsForAdmin('', '', $page, 'page');
    ?>
    <?php foreach ($pages as $key => $value):
        if (empty($navibar[$value['gid']]['url'])) {
            $navibar[$value['gid']]['url'] = Url::log($value['gid']);
        }
        $isHide = $value['hide'] == 'y' ?
            '<font color="red"> - 草稿</font>' :
            '' . $navibar[$value['gid']]['url'] . '';
        ?>
        <a class="item " href="<?= $isHide; ?>" title="<?= $value['title']; ?>"><?= $value['title']; ?></a>
    <?php endforeach; ?>
<?php } ?>
<?php
//blog：置顶
function topflg($top, $sortop = 'n', $sortid = null) {
    $ishome_flg = '<span class="badge" style="display: inline-block">置顶</span>';
    $issort_flg = '<span class="badge" style="display: inline-block">置顶</span>';
    if (blog_tool_ishome()) {
        echo $top == 'y' ? $ishome_flg : '';
    } elseif ($sortid) {
        echo $sortop == 'y' ? $issort_flg : '';
    }
}

?>
<?php
//blog：编辑
function editflg($logid, $author) {
    $editflg = ROLE == ROLE_ADMIN || $author == UID ? '<a class="edit" target="_blank" rel="noopener noreferrer" href="' . BLOG_URL . 'admin/article.php?action=edit&gid=' . $logid . '">编辑文章</a>' : '';
    echo $editflg;
}

?>
<?php
//blog：分类
function blog_sort($blogid) {
    $Log_Model = new Log_Model();
    $r = $Log_Model->getDetail($blogid);
    $sid = isset($r['sid']) ? $r['sid'] : '';
    $sortName = isset($r['sortname']) ? $r['sortname'] : '';
    ?>
    <?php if (!empty($sid)): ?>
        <a class="link" rel="nofollow" href="<?= Url::sort($sid); ?>"><?= $sortName; ?></a>
    <?php else: ?>
        <a href="javascript:void(0);" class="link">未分类</a>
    <?php endif; ?>
<?php } ?>
<?php
//blog：文章标签
function blog_tag($blogid) {
    global $CACHE;
    $tag_model = new Tag_Model();
    $log_cache_tags = $CACHE->readCache('logtags');
    if (!empty($log_cache_tags[$blogid])) {
        $tag = '';
        foreach ($log_cache_tags[$blogid] as $value) {
            $tag .= "	<a href=\"" . Url::tag($value['tagurl']) . "\">" . $value['tagname'] . '</a>';
        }
        echo $tag;
    } else {
        $tag_ids = $tag_model->getTagIdsFromBlogId($blogid);
        $tag_names = $tag_model->getNamesFromIds($tag_ids);
        if (!empty($tag_names)) {
            $tag = '';
            foreach ($tag_names as $key => $value) {
                $tag .= "	<a href=\"" . Url::tag(rawurlencode($value)) . "\">" . htmlspecialchars($value) . '</a>';
            }
            echo $tag;
        }
    }
}

?>
<?php
//blog：文章作者
function blog_author($uid) {
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    $mail = $user_cache[$uid]['mail'];
    $des = $user_cache[$uid]['des'];
    $title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
    echo '<a class="link" href="' . Url::author($uid) . "\" $title>$author</a>";
}

function blog_author1($uid) {
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    $mail = $user_cache[$uid]['mail'];
    $des = $user_cache[$uid]['des'];
    $title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
    echo $author;
}

function blog_authors1($uid) {
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    $mail = $user_cache[$uid]['mail'];
    $des = $user_cache[$uid]['des'];
    $title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
    echo $des;
}

function blog_author2($uid) {
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    $mail = $user_cache[$uid]['mail'];
    $des = $user_cache[$uid]['des'];
    $title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
    echo $author;
}

//获取头像
function getqqpic($email) {
    $qq = explode('@', $email);
    $pic = '//q2.qlogo.cn/headimg_dl?dst_uin=' . $qq[0] . '&spec=100';
    $pic = $qq[1] == 'qq.com' ? $pic : $pic = getGravatar($email);
    return $pic;
}

//评论内容
function comcontent($pl) {
    $patterns = array("/@/", "/\[blockquote\](.*?)\[\/blockquote\]/", "/\[emt\](.*?)\[\/emt\]/", "/\[img\](.*?)\[\/img\]/");
    $replace = array('回复了', '<blockquote>$1</blockquote>', '<img src="$1"style="max-width: 25px;"/>', '<img src="$1"style="width:100%;height:100%;padding:5px 1px;object-fit:cover"/>');
    $pl = preg_replace($patterns, $replace, $pl);
    return $pl;
}

?>
<?php
//相同分类相邻文章
function joe_nextprve($date, $sortid) {
    $db = Database::getInstance();
    $nextlog = $db->once_fetch_array("SELECT title,gid FROM " . DB_PREFIX . "blog WHERE date < $date and sortid='$sortid' and hide = 'n' and checked='y' and type='blog' ORDER BY date DESC LIMIT 1");
    $prevlog = $db->once_fetch_array("SELECT title,gid FROM " . DB_PREFIX . "blog WHERE date > $date and sortid='$sortid' and hide = 'n' and checked='y' and type='blog' ORDER BY date LIMIT 1");
    if ($prevlog) {
        echo '<li class="joe_post__pagination-item prev"><a href="' . Url::log($prevlog['gid']) . '" title="' . htmlspecialchars($prevlog['title']) . '">上一篇</a></li>';
    } else {
        echo '<li class="joe_post__pagination-item prev"><a>没有了</a></li>';
    }
    if ($nextlog) {
        echo '<li class="joe_post__pagination-item next"><a href="' . Url::log($nextlog['gid']) . '" title="' . htmlspecialchars($nextlog['title']) . '">下一篇</a></li>';
    } else {
        echo '<li class="joe_post__pagination-item next"><a>没有了</a></li>';
    }
} ?>
<?php
//blog：评论列表
function blog_comments($comments, $params) {
    extract($comments);
    if ($commentStacks): ?>
    <?php endif; ?>
    <?php
    $isGravatar = Option::get('isgravatar');
    $comnum = count($comments);
    foreach ($comments as $value) {
        if ($value['pid'] != 0) {
            $comnum--;
        }
    }
    $page = isset($params[5]) ? intval($params[5]) : 1;
    $i = $comnum - ($page - 1) * Option::get('comment_pnum');
    foreach ($commentStacks as $cid):
        $comment = $comments[$cid];
        $comment['poster'] = $comment['url'] ? '' . $comment['poster'] . '' : $comment['poster'];
        $comment1['poster1'] = $comment['url'] ? '<a href="' . $comment['url'] . '" target="_blank">回访 • </a>' : $comment['poster1'];
        $comment['content'] = preg_replace("/\[img\](.*?)\[\/img\]/", '<img class="draw_image ls-is-cached lazyloaded" src="$1"/>', $comment['content']);
        $url = BLOG_URL . ''
        ?>
        <div class="joe_comment" style="margin-bottom:10px;">
            <ol class="comment-list">
                <li class="comment-list__item">
                    <div class="comment-list__item-contain" id="comment-<?= $comment['cid']; ?>">
                        <div class="term">
                            <a name="<?= $comment['cid']; ?>"></a>
                            <?php if ($isGravatar == 'y'): ?>
                                <img width="48" height="48" class="avatar ls-is-cached lazyloaded" src="<?= getqqpic($comment['mail']); ?>" data-src="<?= getqqpic($comment['mail']); ?>" alt="头像"><?php endif; ?>
                            <div class="content">
                                <div class="user">
                                    <span class="author"><?= $comment['poster']; ?></span>
                                    <?php if ($comment['url'] == $url) { ?><i class="owner">管理员</i><?php } ?>
                                    <div class="agent"><?php if (ROLE == ROLE_ADMIN): ?><?= $comment1['poster1']; ?><?php endif; ?>
                                        <?php if ($i == 1) {
                                            echo "<span style='margin-left:5px;color:#617d0e;font-size:12px;'>沙发</span>";
                                        } elseif ($i == 2) {
                                            echo "<span style='margin-left:5px;color:#617d0e;font-size:12px;'>板凳</span>";
                                        } elseif ($i == 3) {
                                            echo "<span style='margin-left:5px;color:#617d0e;font-size:12px;'>地板</span>";
                                        } else {
                                            echo '<span style="margin-left:5px;color:#617d0e;font-size:12px;">第' . $i . '楼</span>';
                                        } ?></div>
                                </div>
                                <div class="substance">
                                    <?= comment2emoji($comment['content']); ?>
                                </div>
                                <div class="handle">
                                    <time class="date" datetime="<?= $comment['date']; ?>"><?= $comment['date']; ?></time>
                                    <a class="reply joe_comment__reply" data-id="comment-<?= $comment['cid']; ?>" href="#comment-<?= $comment['cid']; ?>" onclick="commentReply(<?= $comment['cid']; ?>,this)">
                                        <i class="icon fa fa-pencil" aria-hidden="true"></i>回复
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php blog_comments_children($comments, $comment['children']); ?>
                </li>
            </ol>
        </div>
        <?php $i--;endforeach; ?>
    <style>
        .comment-page {
            padding: 10px 0;
            text-align: center;
            margin: 0 auto;
        }

        .comment-page span {
            background-color: #ddd;
        }

        .comment-page a {
            background: #45B6F7;
        }

        .comment-page a:hover {
            color: #fff;
            opacity: 1;
            filter: alpha(opacity=100);
        }
    </style>
    <div class="page comment-page">
        <?= $commentPageUrl; ?>
    </div>
<?php } ?>
<?php
//blog：子评论列表
function blog_comments_children($comments, $children) {
    $isGravatar = Option::get('isgravatar');
    foreach ($children as $child):
        $comment = $comments[$child];
        $comment['poster'] = $comment['url'] ? '' . $comment['poster'] . '' : $comment['poster'];
        $comment['content'] = preg_replace("/\[img\](.*?)\[\/img\]/", '<img class="draw_image ls-is-cached lazyloaded" src="$1"/>', $comment['content']);
        $url = BLOG_URL . ''
        ?>
        <div class="comment-list__item-children">
            <ol class="comment-list">
                <li class="comment-list__item">
                    <div class="comment-list__item-contain" id="comment-<?= $comment['cid']; ?>">
                        <div class="term">
                            <a name="<?= $comment['cid']; ?>"></a>
                            <?php if ($isGravatar == 'y'): ?><img width="48" height="48" class="avatar ls-is-cached lazyloaded" src="<?= getqqpic($comment['mail']); ?>" data-src="<?= getqqpic($comment['mail']); ?>" alt="头像"><?php endif; ?>
                            <div class="content">
                                <div class="user">
                                    <span class="author"><?= $comment['poster']; ?></span>
                                    <?php if ($comment['url'] == $url) { ?><i class="owner">管理员</i><?php } ?>
                                </div>
                                <div class="substance"><?= comment2emoji($comment['content']); ?></div>
                                <div class="handle">
                                    <time class="date" datetime="<?= $comment['date']; ?>"><?= $comment['date']; ?></time>
                                    <?php if ($comment['level'] < 4): ?><a class="reply joe_comment__reply" data-id="comment-<?= $comment['cid']; ?>" href="#comment-<?= $comment['cid']; ?>" onclick="commentReply(<?= $comment['cid']; ?>,this)">
                                            <i class="icon fa fa-pencil" aria-hidden="true"></i>回复
                                        </a><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
        <?php blog_comments_children($comments, $comment['children']); ?>
    <?php endforeach; ?>
<?php } ?>
<?php
//blog：发表评论表单
function blog_comments_post($logid, $ckname, $ckmail, $ckurl, $verifyCode, $allow_remark) {
    if ($allow_remark == 'y'):?>
        <div class="joe_comment" style="margin-bottom:10px;">
            <div class="joe_comment__respond"><h3 class="joe_comment__title">评论一下？</h3>
                <a name="respond"></a>
                <form class="joe_comment__respond-form" method="post" name="commentform" action="<?= BLOG_URL; ?>index.php?action=addcom" id="commentform">
                    <input type="hidden" name="gid" value="<?= $logid; ?>"/>
                    <?php if (ROLE == ROLE_VISITOR): ?>
                        <div class="head">
                            <div class="list">
                                <input type="text" value="<?= $ckname; ?>" autocomplete="off" name="comname" maxlength="16" placeholder="请输入昵称...">
                            </div>
                            <div class="list">
                                <input type="text" value="<?= $ckmail; ?>" autocomplete="off" name="commail" placeholder="请输入邮箱...">
                            </div>
                            <div class="list">
                                <input type="text" value="<?= $ckurl; ?>" autocomplete="off" name="comurl" placeholder="请输入网址（非必填）...">
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="body">
                        <textarea class="text joe_owo__target" name="comment" id="comment" placeholder="说点什么吧"></textarea>
                    </div>
                    <div class="foot">
                        <div class="owo joe_owo__contain">
                            <div class="seat">OωO</div>
                            <div class="box" style="display: none;">
                                <ul class="scroll" data-type="泡泡" style="display: block;">
                                    <li class="item" data-text="[呵呵]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E591B5E591B5_2x.png" alt="[呵呵]"></li>
                                    <li class="item" data-text="[哈哈]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E59388E59388_2x.png" alt="[哈哈]"></li>
                                    <li class="item" data-text="[吐舌]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E59090E8888C_2x.png" alt="[吐舌]"></li>
                                    <li class="item" data-text="[太开心]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5A4AAE5BC80E5BF83_2x.png" alt="[太开心]"></li>
                                    <li class="item" data-text="[笑眼]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E7AC91E79CBC_2x.png" alt="[笑眼]"></li>
                                    <li class="item" data-text="[花心]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E88AB1E5BF83_2x.png" alt="[花心]"></li>
                                    <li class="item" data-text="[小乖]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5B08FE4B996_2x.png" alt="[小乖]"></li>
                                    <li class="item" data-text="[乖]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E4B996_2x.png" alt="[乖]"></li>
                                    <li class="item" data-text="[捂嘴笑]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E68D82E598B4E7AC91_2x.png" alt="[捂嘴笑]"></li>
                                    <li class="item" data-text="[滑稽]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6BB91E7A8BD_2x.png" alt="[滑稽]"></li>
                                    <li class="item" data-text="[你懂的]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E4BDA0E68782E79A84_2x.png" alt="[你懂的]"></li>
                                    <li class="item" data-text="[不高兴]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E4B88DE9AB98E585B4_2x.png" alt="[不高兴]"></li>
                                    <li class="item" data-text="[怒]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E68092_2x.png" alt="[怒]"></li>
                                    <li class="item" data-text="[汗]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6B197_2x.png" alt="[汗]"></li>
                                    <li class="item" data-text="[黑线]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E9BB91E7BABF_2x.png" alt="[黑线]"></li>
                                    <li class="item" data-text="[泪]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6B3AA_2x.png" alt="[泪]"></li>
                                    <li class="item" data-text="[真棒]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E79C9FE6A392_2x.png" alt="[真棒]"></li>
                                    <li class="item" data-text="[喷]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E596B7_2x.png" alt="[喷]"></li>
                                    <li class="item" data-text="[惊哭]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6838AE593AD_2x.png" alt="[惊哭]"></li>
                                    <li class="item" data-text="[阴险]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E998B4E999A9_2x.png" alt="[阴险]"></li>
                                    <li class="item" data-text="[鄙视]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E98499E8A786_2x.png" alt="[鄙视]"></li>
                                    <li class="item" data-text="[酷]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E985B7_2x.png" alt="[酷]"></li>
                                    <li class="item" data-text="[啊]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5958A_2x.png" alt="[啊]"></li>
                                    <li class="item" data-text="[狂汗]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E78B82E6B197_2x.png" alt="[狂汗]"></li>
                                    <li class="item" data-text="[what]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/what_2x.png" alt="[what]"></li>
                                    <li class="item" data-text="[疑问]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E79691E997AE_2x.png" alt="[疑问]"></li>
                                    <li class="item" data-text="[酸爽]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E985B8E788BD_2x.png" alt="[酸爽]"></li>
                                    <li class="item" data-text="[呀咩爹]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E59180E592A9E788B9_2x.png" alt="[呀咩爹]"></li>
                                    <li class="item" data-text="[委屈]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5A794E5B188_2x.png" alt="[委屈]"></li>
                                    <li class="item" data-text="[惊讶]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6838AE8AEB6_2x.png" alt="[惊讶]"></li>
                                    <li class="item" data-text="[睡觉]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E79DA1E8A789_2x.png" alt="[睡觉]"></li>
                                    <li class="item" data-text="[笑尿]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E7AC91E5B0BF_2x.png" alt="[笑尿]"></li>
                                    <li class="item" data-text="[挖鼻]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E68C96E9BCBB_2x.png" alt="[挖鼻]"></li>
                                    <li class="item" data-text="[吐]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E59090_2x.png" alt="[吐]"></li>
                                    <li class="item" data-text="[犀利]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E78A80E588A9_2x.png" alt="[犀利]"></li>
                                    <li class="item" data-text="[小红脸]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5B08FE7BAA2E884B8_2x.png" alt="[小红脸]"></li>
                                    <li class="item" data-text="[懒得理]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E68792E5BE97E79086_2x.png" alt="[懒得理]"></li>
                                    <li class="item" data-text="[勉强]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E58B89E5BCBA_2x.png" alt="[勉强]"></li>
                                    <li class="item" data-text="[爱心]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E788B1E5BF83_2x.png" alt="[爱心]"></li>
                                    <li class="item" data-text="[心碎]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5BF83E7A28E_2x.png" alt="[心碎]"></li>
                                    <li class="item" data-text="[玫瑰]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E78EABE791B0_2x.png" alt="[玫瑰]"></li>
                                    <li class="item" data-text="[礼物]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E7A4BCE789A9_2x.png" alt="[礼物]"></li>
                                    <li class="item" data-text="[彩虹]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5BDA9E899B9_2x.png" alt="[彩虹]"></li>
                                    <li class="item" data-text="[太阳]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5A4AAE998B3_2x.png" alt="[太阳]"></li>
                                    <li class="item" data-text="[星星月亮]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6989FE6989FE69C88E4BAAE_2x.png" alt="[星星月亮]"></li>
                                    <li class="item" data-text="[钱币]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E992B1E5B881_2x.png" alt="[钱币]"></li>
                                    <li class="item" data-text="[茶杯]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E88CB6E69DAF_2x.png" alt="[茶杯]"></li>
                                    <li class="item" data-text="[蛋糕]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E89B8BE7B395_2x.png" alt="[蛋糕]"></li>
                                    <li class="item" data-text="[大拇指]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5A4A7E68B87E68C87_2x.png" alt="[大拇指]"></li>
                                    <li class="item" data-text="[胜利]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E8839CE588A9_2x.png" alt="[胜利]"></li>
                                    <li class="item" data-text="[haha]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/haha_2x.png" alt="[haha]"></li>
                                    <li class="item" data-text="[OK]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/OK_2x.png" alt="[OK]"></li>
                                    <li class="item" data-text="[沙发]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6B299E58F91_2x.png" alt="[沙发]"></li>
                                    <li class="item" data-text="[手纸]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E6898BE7BAB8_2x.png" alt="[手纸]"></li>
                                    <li class="item" data-text="[香蕉]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E9A699E89589_2x.png" alt="[香蕉]"></li>
                                    <li class="item" data-text="[便便]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E4BEBFE4BEBF_2x.png" alt="[便便]"></li>
                                    <li class="item" data-text="[药丸]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E88DAFE4B8B8_2x.png" alt="[药丸]"></li>
                                    <li class="item" data-text="[红领巾]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E7BAA2E9A286E5B7BE_2x.png" alt="[红领巾]"></li>
                                    <li class="item" data-text="[蜡烛]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E89CA1E7839B_2x.png" alt="[蜡烛]"></li>
                                    <li class="item" data-text="[音乐]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E99FB3E4B990_2x.png" alt="[音乐]"></li>
                                    <li class="item" data-text="[灯泡]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E781AFE6B3A1_2x.png" alt="[灯泡]"></li>
                                    <li class="item" data-text="[开心]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5BC80E5BF83_2x.png" alt="[开心]"></li>
                                    <li class="item" data-text="[钱]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E992B1_2x.png" alt="[钱]"></li>
                                    <li class="item" data-text="[咦]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E592A6_2x.png" alt="[咦]"></li>
                                    <li class="item" data-text="[呼]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E591BC_2x.png" alt="[呼]"></li>
                                    <li class="item" data-text="[冷]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E586B7_2x.png" alt="[冷]"></li>
                                    <li class="item" data-text="[生气]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E7949FE6B094_2x.png" alt="[生气]"></li>
                                    <li class="item" data-text="[弱]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E5BCB1_2x.png" alt="[弱]"></li>
                                    <li class="item" data-text="[狗头]"><img src="<?= TEMPLATE_URL; ?>assets/owo/paopao/E78B97E5A4B4_2x.png" alt="[狗头]"></li>
                                </ul>
                                <ul class="scroll" data-type="阿鲁" style="display: none;">
                                    <li class="item" data-text=":@(高兴]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E9AB98E585B4_2x.png" alt=":@(高兴]"></li>
                                    <li class="item" data-text=":@(小怒]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5B08FE68092_2x.png" alt=":@(小怒]"></li>
                                    <li class="item" data-text=":@(脸红]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E884B8E7BAA2_2x.png" alt=":@(脸红]"></li>
                                    <li class="item" data-text=":@(内伤]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E58685E4BCA4_2x.png" alt=":@(内伤]"></li>
                                    <li class="item" data-text=":@(装大款]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E8A385E5A4A7E6ACBE_2x.png" alt=":@(装大款]"></li>
                                    <li class="item" data-text=":@(赞一个]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E8B59EE4B880E4B8AA_2x.png" alt=":@(赞一个]"></li>
                                    <li class="item" data-text=":@(害羞]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5AEB3E7BE9E_2x.png" alt=":@(害羞]"></li>
                                    <li class="item" data-text=":@(汗]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E6B197_2x.png" alt=":@(汗]"></li>
                                    <li class="item" data-text=":@(吐血倒地]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E59090E8A180E58092E59CB0_2x.png" alt=":@(吐血倒地]"></li>
                                    <li class="item" data-text=":@(深思]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E6B7B1E6809D_2x.png" alt=":@(深思]"></li>
                                    <li class="item" data-text=":@(不高兴]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4B88DE9AB98E585B4_2x.png" alt=":@(不高兴]"></li>
                                    <li class="item" data-text=":@(无语]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E697A0E8AFAD_2x.png" alt=":@(无语]"></li>
                                    <li class="item" data-text=":@(亲亲]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4BAB2E4BAB2_2x.png" alt=":@(亲亲]"></li>
                                    <li class="item" data-text=":@(口水]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E58FA3E6B0B4_2x.png" alt=":@(口水]"></li>
                                    <li class="item" data-text=":@(尴尬]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5B0B4E5B0AC_2x.png" alt=":@(尴尬]"></li>
                                    <li class="item" data-text=":@(中指]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4B8ADE68C87_2x.png" alt=":@(中指]"></li>
                                    <li class="item" data-text=":@(想一想]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E683B3E4B880E683B3_2x.png" alt=":@(想一想]"></li>
                                    <li class="item" data-text=":@(哭泣]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E593ADE6B3A3_2x.png" alt=":@(哭泣]"></li>
                                    <li class="item" data-text=":@(便便]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4BEBFE4BEBF_2x.png" alt=":@(便便]"></li>
                                    <li class="item" data-text=":@(献花]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E78CAEE88AB1_2x.png" alt=":@(献花]"></li>
                                    <li class="item" data-text=":@(皱眉]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E79AB1E79C89_2x.png" alt=":@(皱眉]"></li>
                                    <li class="item" data-text=":@(傻笑]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E582BBE7AC91_2x.png" alt=":@(傻笑]"></li>
                                    <li class="item" data-text=":@(狂汗]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E78B82E6B197_2x.png" alt=":@(狂汗]"></li>
                                    <li class="item" data-text=":@(吐]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E59090_2x.png" alt=":@(吐]"></li>
                                    <li class="item" data-text=":@(喷水]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E596B7E6B0B4_2x.png" alt=":@(喷水]"></li>
                                    <li class="item" data-text=":@(看不见]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E79C8BE4B88DE8A781_2x.png" alt=":@(看不见]"></li>
                                    <li class="item" data-text=":@(鼓掌]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E9BC93E68E8C_2x.png" alt=":@(鼓掌]"></li>
                                    <li class="item" data-text=":@(阴暗]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E998B4E69A97_2x.png" alt=":@(阴暗]"></li>
                                    <li class="item" data-text=":@(长草]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E995BFE88D89_2x.png" alt=":@(长草]"></li>
                                    <li class="item" data-text=":@(献黄瓜]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E78CAEE9BB84E7939C_2x.png" alt=":@(献黄瓜]"></li>
                                    <li class="item" data-text=":@(邪恶]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E982AAE681B6_2x.png" alt=":@(邪恶]"></li>
                                    <li class="item" data-text=":@(期待]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E69C9FE5BE85_2x.png" alt=":@(期待]"></li>
                                    <li class="item" data-text=":@(得意]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5BE97E6848F_2x.png" alt=":@(得意]"></li>
                                    <li class="item" data-text=":@(吐舌]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E59090E8888C_2x.png" alt=":@(吐舌]"></li>
                                    <li class="item" data-text=":@(喷血]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E596B7E8A180_2x.png" alt=":@(喷血]"></li>
                                    <li class="item" data-text=":@(无所谓]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E697A0E68980E8B093_2x.png" alt=":@(无所谓]"></li>
                                    <li class="item" data-text=":@(观察]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E8A782E5AF9F_2x.png" alt=":@(观察]"></li>
                                    <li class="item" data-text=":@(暗地观察]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E69A97E59CB0E8A782E5AF9F_2x.png" alt=":@(暗地观察]"></li>
                                    <li class="item" data-text=":@(肿包]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E882BFE58C85_2x.png" alt=":@(肿包]"></li>
                                    <li class="item" data-text=":@(中枪]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4B8ADE69EAA_2x.png" alt=":@(中枪]"></li>
                                    <li class="item" data-text=":@(大囧]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5A4A7E59BA7_2x.png" alt=":@(大囧]"></li>
                                    <li class="item" data-text=":@(呲牙]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E591B2E78999_2x.png" alt=":@(呲牙]"></li>
                                    <li class="item" data-text=":@(抠鼻]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E68AA0E9BCBB_2x.png" alt=":@(抠鼻]"></li>
                                    <li class="item" data-text=":@(不说话]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4B88DE8AFB4E8AF9D_2x.png" alt=":@(不说话]"></li>
                                    <li class="item" data-text=":@(咽气]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E592BDE6B094_2x.png" alt=":@(咽气]"></li>
                                    <li class="item" data-text=":@(欢呼]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E6ACA2E591BC_2x.png" alt=":@(欢呼]"></li>
                                    <li class="item" data-text=":@(锁眉]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E99481E79C89_2x.png" alt=":@(锁眉]"></li>
                                    <li class="item" data-text=":@(蜡烛]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E89CA1E7839B_2x.png" alt=":@(蜡烛]"></li>
                                    <li class="item" data-text=":@(坐等]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E59D90E7AD89_2x.png" alt=":@(坐等]"></li>
                                    <li class="item" data-text=":@(击掌]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E587BBE68E8C_2x.png" alt=":@(击掌]"></li>
                                    <li class="item" data-text=":@(惊喜]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E6838AE5969C_2x.png" alt=":@(惊喜]"></li>
                                    <li class="item" data-text=":@(喜极而泣]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5969CE69E81E8808CE6B3A3_2x.png" alt=":@(喜极而泣]"></li>
                                    <li class="item" data-text=":@(抽烟]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E68ABDE7839F_2x.png" alt=":@(抽烟]"></li>
                                    <li class="item" data-text=":@(不出所料]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4B88DE587BAE68980E69699_2x.png" alt=":@(不出所料]"></li>
                                    <li class="item" data-text=":@(愤怒]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E684A4E68092_2x.png" alt=":@(愤怒]"></li>
                                    <li class="item" data-text=":@(无奈]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E697A0E5A588_2x.png" alt=":@(无奈]"></li>
                                    <li class="item" data-text=":@(黑线]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E9BB91E7BABF_2x.png" alt=":@(黑线]"></li>
                                    <li class="item" data-text=":@(投降]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E68A95E9998D_2x.png" alt=":@(投降]"></li>
                                    <li class="item" data-text=":@(看热闹]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E79C8BE783ADE997B9_2x.png" alt=":@(看热闹]"></li>
                                    <li class="item" data-text=":@(扇耳光]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E68987E880B3E58589_2x.png" alt=":@(扇耳光]"></li>
                                    <li class="item" data-text=":@(小眼睛]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E5B08FE79CBCE79D9B_2x.png" alt=":@(小眼睛]"></li>
                                    <li class="item" data-text=":@(中刀]"><img src="<?= TEMPLATE_URL; ?>assets/owo/aru/E4B8ADE58880_2x.png" alt=":@(中刀]"></li>
                                </ul>
                                <ul class="scroll" data-type="颜文字" style="display: none;">
                                    <li class="item" data-text="|´・ω・)ノ">|´・ω・)ノ</li>
                                    <li class="item" data-text="ヾ(≧∇≦*)ゝ">ヾ(≧∇≦*)ゝ</li>
                                    <li class="item" data-text="(☆ω☆)">(☆ω☆)</li>
                                    <li class="item" data-text="（╯‵□′）╯︵┴─┴">（╯‵□′）╯︵┴─┴</li>
                                    <li class="item" data-text="￣﹃￣">￣﹃￣</li>
                                    <li class="item" data-text="(/ω＼)">(/ω＼)</li>
                                    <li class="item" data-text="∠( ᐛ 」∠)＿">∠( ᐛ 」∠)＿</li>
                                    <li class="item" data-text="(๑•̀ㅁ•́ฅ)">(๑•̀ㅁ•́ฅ)</li>
                                    <li class="item" data-text="→_→">→_→</li>
                                    <li class="item" data-text="୧(๑•̀⌄•́๑)૭">୧(๑•̀⌄•́๑)૭</li>
                                    <li class="item" data-text="٩(ˊᗜˋ*)و">٩(ˊᗜˋ*)و</li>
                                    <li class="item" data-text="(ノ°ο°)ノ">(ノ°ο°)ノ</li>
                                    <li class="item" data-text="(´இ皿இ｀)">(´இ皿இ｀)</li>
                                    <li class="item" data-text="⌇●﹏●⌇">⌇●﹏●⌇</li>
                                    <li class="item" data-text="(ฅ´ω`ฅ)">(ฅ´ω`ฅ)</li>
                                    <li class="item" data-text="(╯°A°)╯︵○○○">(╯°A°)╯︵○○○</li>
                                    <li class="item" data-text="φ(￣∇￣o)">φ(￣∇￣o)</li>
                                    <li class="item" data-text="ヾ(´･ ･｀｡)ノ"
                                    "="">ヾ(´･ ･｀｡)ノ"</li>
                                    <li class="item" data-text="( ง ᵒ̌皿ᵒ̌)ง⁼³₌₃">( ง ᵒ̌皿ᵒ̌)ง⁼³₌₃</li>
                                    <li class="item" data-text="(ó﹏ò｡)">(ó﹏ò｡)</li>
                                    <li class="item" data-text="Σ(っ °Д °;)っ">Σ(っ °Д °;)っ</li>
                                    <li class="item" data-text="( ,,´･ω･)ﾉ" (´っω･｀｡)
                                    "="">( ,,´･ω･)ﾉ"(´っω･｀｡)</li>
                                    <li class="item" data-text="╮(╯▽╰)╭ ">╮(╯▽╰)╭</li>
                                    <li class="item" data-text="o(*////▽////*)q ">o(*////▽////*)q</li>
                                    <li class="item" data-text="＞﹏＜">＞﹏＜</li>
                                    <li class="item" data-text="( ๑´•ω•) " (ㆆᴗㆆ)
                                    "="">( ๑´•ω•) "(ㆆᴗㆆ)</li>
                                    <li class="item" data-text="(｡•ˇ‸ˇ•｡)">(｡•ˇ‸ˇ•｡)</li>
                                </ul>
                                <div class="bar">
                                    <div class="item active" data-type="泡泡">泡泡</div>
                                    <div class="item" data-type="阿鲁">阿鲁</div>
                                    <div class="item" data-type="颜文字">颜文字</div>
                                </div>
                            </div>
                        </div>
                        <div class="submit">
                            <?= $verifyCode; ?>
                            <span class="cancle joe_comment__cancle">取消</span>
                            <button type="submit" id="fatit">发表评论</button>
                        </div>
                    </div>
                    <input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"/>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php } ?>
<?php
//blog-tool:判断是否是首页
function blog_tool_ishome() {
    if (BLOG_URL . trim(Dispatcher::setPath(), '/') == BLOG_URL) {
        return true;
    } else {
        return FALSE;
    }
}

?>
<?php
//首页搜索标签
function hot_index_blog() {
    $Log_Model = new Log_Model();
    $randLogs = $Log_Model->getHotLog(5);
    $i = 0;
    foreach ($randLogs as $value):$li = img_ns($value['gid']);
        $i++;
        ?>
        <a href="<?= Url::log($value['gid']); ?>" title="<?= $value['title']; ?>" class="item">
            <span class="sort"><?= $i; ?></span>
            <span class="text"><?= $value['title']; ?></span>
            <span class="views"><?= $li[2] ?> 阅读</span></a>
    <?php
    endforeach;
}

?>
<?php
//统计
function tongji() {
    $db = MySql::getInstance();
    $data = $db->once_fetch_array("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog WHERE type = 'blog'");
    $log_total = $data['total']; //文章总数
    $data = $db->once_fetch_array("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "comment");
    $log_com = $data['total']; //评论总数
    $sql = "SELECT date FROM " . DB_PREFIX . "blog WHERE type='blog' ORDER BY date ASC LIMIT 0,1";
    $res = $db->query($sql);
    $row = $db->fetch_array($res);
    $build_date_time = $row['date'];
    $blog_run_time = floor((time() - $build_date_time) / 86400); //获取运行天数
    ?>
    <div class="count">
        <div class="item" title="累计文章数">
            <span class="num"><?= $log_total; ?></span>
            <span>文章数</span>
        </div>
        <div class="item" title="累计评论数">
            <span class="num"><?= $log_com; ?></span>
            <span>评论量</span>
        </div>
    </div>
<?php } ?>
<?php
//侧栏统计
function cltongji() {
    $db = MySql::getInstance();
    $data = $db->once_fetch_array("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog WHERE type = 'blog'");
    $log_total = $data['total']; //文章总数
    $data = $db->once_fetch_array("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "comment");
    $log_com = $data['total']; //评论总数
    $sql = "SELECT date FROM " . DB_PREFIX . "blog WHERE type='blog' ORDER BY date ASC LIMIT 0,1";
    $res = $db->query($sql);
    $row = $db->fetch_array($res);
    $build_date_time = $row['date'];
    $blog_run_time = floor((time() - $build_date_time) / 86400); //获取运行天数
    ?>
    <ul class="joe_header__slideout-count">
        <li class="item">
            <svg class="icon" viewBox="0 0 1024 1024" width="15" height="15">
                <path d="M606.227 985.923H164.75c-69.715 0-126.404-56.722-126.404-126.442V126.477C38.346 56.755 95.04 0 164.75 0h619.275c69.715 0 126.549 56.755 126.549 126.477v503.925c0 18.216-14.814 32.997-33.07 32.997-18.183 0-32.925-14.78-32.925-32.997V126.477c0-33.355-27.2-60.488-60.554-60.488H164.75c-33.353 0-60.41 27.133-60.41 60.488v733.004c0 33.353 27.057 60.441 60.41 60.441h441.477c18.183 0 32.925 14.787 32.925 33.004 0 18.211-14.742 32.997-32.925 32.997zm0 0"/>
                <path d="M657.62 322.056H291.154c-18.183 0-32.924-14.786-32.924-33.003 0-18.21 14.74-32.998 32.924-32.998H657.62c18.256 0 33.07 14.787 33.07 32.998 0 18.217-14.814 33.003-33.07 33.003zm0 0M657.62 504.749H291.154c-18.183 0-32.924-14.78-32.924-32.993 0-18.222 14.74-32.997 32.924-32.997H657.62c18.256 0 33.07 14.775 33.07 32.997 0 18.218-14.814 32.993-33.07 32.993zm0 0M445.611 687.486H291.154c-18.183 0-32.924-14.78-32.924-33.004 0-18.21 14.74-32.991 32.924-32.991h154.457c18.184 0 32.998 14.78 32.998 32.991 0 18.224-14.814 33.004-32.998 33.004zm0 0M866.482 1024c-8.447 0-16.896-3.225-23.34-9.662L577.595 748.786c-7.156-7.123-10.592-17.07-9.446-27.056l8.733-77.728c1.788-15.321 13.885-27.378 29.2-29.06l77.45-8.52c10.443-.965 19.9 2.433 26.905 9.449l265.558 265.551c12.875 12.877 12.875 33.784 0 46.666l-86.184 86.25c-6.438 6.437-14.887 9.662-23.33 9.662zm-231.05-310.646l231.05 231.018 39.575-39.62-231.043-231.05-35.505 3.938-4.076 35.714zm0 0"/>
            </svg>
            <span>累计撰写 <strong><?= $log_total; ?></strong> 篇文章</span>
        </li>
        <li class="item">
            <svg class="icon" viewBox="0 0 1024 1024" width="15" height="15">
                <path d="M921.6 153.6H102.4A102.4 102.4 0 0 0 0 256v512a102.4 102.4 0 0 0 102.4 102.4h819.2A102.4 102.4 0 0 0 1024 768V256a102.4 102.4 0 0 0-102.4-102.4zM687.616 473.088L972.8 258.304V791.04zM960 204.8L527.104 527.36 73.216 204.8zM371.2 483.584l-320 287.232V256zM73.984 819.2l339.2-307.2 83.456 59.392a51.2 51.2 0 0 0 60.416 0l89.6-67.328L931.072 819.2z"/>
            </svg>
            <span>累计收到 <strong><?= $log_com; ?></strong> 条评论</span>
        </li>
    </ul>
<?php } ?>
<?php
//30天按点击率排行文章
function getdatelogs($log_num) {
    $db = MySql::getInstance();
    $time = time();
    $sql = "SELECT gid,title FROM " . DB_PREFIX . "blog WHERE type='blog' AND date > $time - 30*24*60*60 ORDER BY `views` DESC LIMIT 0,$log_num";
    $list = $db->query($sql);
    while ($row = $db->fetch_array($list)) { ?>
        <li class="item">
            <a class="link" href="<?= Url::log($row['gid']); ?>" title="<?= $row['title']; ?>"><?= $row['title']; ?></a>
            <svg class="icon" viewBox="0 0 1024 1024" width="16" height="16">
                <path d="M448.12 320.331a30.118 30.118 0 0 1-42.616-42.586L552.568 130.68a213.685 213.685 0 0 1 302.2 0l38.552 38.551a213.685 213.685 0 0 1 0 302.2L746.255 618.497a30.118 30.118 0 0 1-42.586-42.616l147.034-147.035a153.45 153.45 0 0 0 0-217.028l-38.55-38.55a153.45 153.45 0 0 0-216.998 0L448.12 320.33zM575.88 703.67a30.118 30.118 0 0 1 42.616 42.586L471.432 893.32a213.685 213.685 0 0 1-302.2 0l-38.552-38.551a213.685 213.685 0 0 1 0-302.2l147.065-147.065a30.118 30.118 0 0 1 42.586 42.616L173.297 595.125a153.45 153.45 0 0 0 0 217.027l38.55 38.551a153.45 153.45 0 0 0 216.998 0L575.88 703.64zm-234.256-63.88L639.79 341.624a30.118 30.118 0 0 1 42.587 42.587L384.21 682.376a30.118 30.118 0 0 1-42.587-42.587z"></path>
            </svg>
        </li>
    <?php } ?>
<?php } ?>
<?php //分页函数
function sheli_fy($count, $perlogs, $page, $url, $anchor = '') {
    $pnums = @ceil($count / $perlogs);
    $page = @min($pnums, $page);
    $prepg = $page - 1;                 //shuyong.net上一页
    $nextpg = ($page == $pnums ? 0 : $page + 1); //shuyong.net下一页
    $urlHome = preg_replace("|[\?&/][^\./\?&=]*page[=/\-]|", "", $url);
    //开始分页导航内容
    $re = "";
    if ($pnums <= 1)
        return false;    //如果只有一页则跳出
    if ($page != 1)
        $re .= "<li class=\"prev\"><a href=\"$urlHome$anchor\"><svg class=\"icon icon-prev\"viewBox=\"0 0 1024 1024\"width=\"12\"height=\"12\"><path d=\"M822.272 146.944l-396.8 396.8c-19.456 19.456-51.2 19.456-70.656 0-18.944-19.456-18.944-51.2 0-70.656l396.8-396.8c19.456-19.456 51.2-19.456 70.656 0 18.944 19.456 18.944 45.056 0 70.656z\"></path><path d=\"M745.472 940.544l-396.8-396.8c-19.456-19.456-19.456-51.2 0-70.656 19.456-19.456 51.2-19.456 70.656 0l403.456 390.144c19.456 25.6 19.456 51.2 0 76.8-26.112 19.968-51.712 19.968-77.312.512zm-564.224-63.488c0-3.584 0-7.68.512-11.264h-.512v-714.24h.512c-.512-3.584-.512-7.168-.512-11.264 0-43.008 21.504-78.336 48.128-78.336s48.128 34.816 48.128 78.336c0 3.584 0 7.68-.512 11.264h.512v714.24h-.512c.512 3.584.512 7.168.512 11.264 0 43.008-21.504 78.336-48.128 78.336s-48.128-35.328-48.128-78.336z\"></path></svg></a></li>\n";
    for ($i = $page - 2; $i <= $page + 2 && $i <= $pnums; $i++) {
        if ($i > 0) {
            if ($i == $page) {
                $re .= "<li class=\"active\"><a>$i</a></li><li>\n";
            } elseif ($i == 1) {
                $re .= "<li><a href=\"$urlHome$anchor\">$i</a></li>\n";
            } else {
                $re .= "<li><a href=\"$url$i$anchor\">$i</a></li>\n";
            }
        }
    }
    if ($page != $pnums)
        $re .= "<li class=\"next\"><a href=\"$url$pnums$anchor\"><svg class=\"icon icon-next\"viewBox=\"0 0 1024 1024\"width=\"12\"height=\"12\"><path d=\"M822.272 146.944l-396.8 396.8c-19.456 19.456-51.2 19.456-70.656 0-18.944-19.456-18.944-51.2 0-70.656l396.8-396.8c19.456-19.456 51.2-19.456 70.656 0 18.944 19.456 18.944 45.056 0 70.656z\"></path><path d=\"M745.472 940.544l-396.8-396.8c-19.456-19.456-19.456-51.2 0-70.656 19.456-19.456 51.2-19.456 70.656 0l403.456 390.144c19.456 25.6 19.456 51.2 0 76.8-26.112 19.968-51.712 19.968-77.312.512zm-564.224-63.488c0-3.584 0-7.68.512-11.264h-.512v-714.24h.512c-.512-3.584-.512-7.168-.512-11.264 0-43.008 21.504-78.336 48.128-78.336s48.128 34.816 48.128 78.336c0 3.584 0 7.68-.512 11.264h.512v714.24h-.512c.512 3.584.512 7.168.512 11.264 0 43.008-21.504 78.336-48.128 78.336s-48.128-35.328-48.128-78.336z\"></path></svg></a></li>\n";
    return $re;
}

?>
<?php
//blog：分类
function neirong_sort($blogid) {
    $Log_Model = new Log_Model();
    $r = $Log_Model->getDetail($blogid);
    $sid = isset($r['sid']) ? $r['sid'] : '';
    $sortName = isset($r['sortname']) ? $r['sortname'] : '';
    ?>
    <?php if (!empty($sortName)) { ?>
        <li class="item"><a class="link" href="<?= Url::sort($sid); ?>" title="<?= $sortName; ?>"><?= $sortName; ?></a></li>
    <?php } else { ?>
        <li class="item"><a class="link" href="#" title="未分类">未分类</a></li>
    <?php }
} ?>
<?php
//blog：分类
function neirong1_sort($blogid) {
    $Log_Model = new Log_Model();
    $r = $Log_Model->getDetail($blogid);
    $sid = isset($r['sid']) ? $r['sid'] : '';
    $sortName = isset($r['sortname']) ? $r['sortname'] : '';
    ?>
    <?php if (!empty($sortName)) { ?>
        <a href="<?= Url::sort($sid); ?>" class="item item-0" title="<?= $sortName; ?>"><?= $sortName; ?></a>
    <?php } else { ?>
        <div class="joe_detail__category">
            <a href="#" class="item item-0" title="未分类">未分类</a>
        </div>
    <?php }
} ?>
<?php //widget：分类
function sy_sort() {
    global $CACHE;
    $sort_cache = $CACHE->readCache('sort'); ?>
    <?php foreach ($sort_cache

                   as $value){
if ($value['sid'] == 1){ ?>
    <script>
        $("ul").on("click", "li", function () {
            var link = $(this).attr("link");
            window.parent.location.href = link;
        })
    </script>
    <ul class="joe_video__type-list">
        <li class="item active" link="<?= Url::sort($value['sid']); ?>">全部</li>
        <?php $children = $value['children'];
        foreach ($children as $key) {
            $value = $sort_cache[$key]; ?>
            <li class="item animated swing" link="<?= Url::sort($value['sid']); ?>"><?= $value['sortname']; ?></li>
        <?php }
        }
        } ?>
    </ul>
<?php } ?>
<?php
//友情链接
function pages_links() {
    global $CACHE;
    $link_cache = $CACHE->readCache('link');
    $friends_color = ['#F8D800', '#0396FF', '#EA5455', '#7367F0', '#32CCBC', '#F6416C', '#28C76F', '#9F44D3', '#F55555', '#736EFE', '#E96D71', '#DE4313', '#D939CD', '#4C83FF', '#F072B6', '#C346C2', '#5961F9', '#FD6585', '#465EFB', '#FFC600', '#FA742B', '#5151E5', '#BB4E75', '#FF52E5', '#49C628', '#00EAFF', '#F067B4', '#F067B4', '#ff9a9e', '#00f2fe', '#4facfe', '#f093fb', '#6fa3ef', '#bc99c4', '#46c47c', '#f9bb3c', '#e8583d', '#f68e5f',];
    echo '<ul class="joe_detail__friends">';
    foreach ($link_cache as $value): ?>
        <li class="joe_detail__friends-item">
            <a class="contain" href="<?= $value['url']; ?>" target="_blank" rel="noopener noreferrer" style="background: <?= $friends_color[mt_rand(0, count($friends_color) - 1)] ?>"
            <span class="title"><?= $value['link']; ?></span>
            <div class="content">
                <div class="desc"><?= $value['des']; ?></div>
                <img width="40" height="40" class="avatar lazyloaded" src="//api.iowen.cn/favicon/get.php?url=<?= $value['url']; ?>" alt="<?= $value['link']; ?>"></div>
            </a>
        </li>
    <?php endforeach;
    echo "</ul>";
}

?>
<?php function page_tit($page) {
    if ($page >= 2) {
        echo ' _第' . $page . '页';
    }
}

?>
<?php
function sydate($ptime) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if ($etime < 1) {
        return '刚刚';
    }
    $interval = array(
        12 * 30 * 24 * 60 * 60 => '年前 (' . date('Y-m-d', $ptime) . ')',
        30 * 24 * 60 * 60      => '个月前 (' . date('Y-m-d', $ptime) . ')',
        7 * 24 * 60 * 60       => '周前 (' . date('Y-m-d', $ptime) . ')',
        24 * 60 * 60           => '天前',
        60 * 60                => '小时前',
        60                     => '分钟前',
        1                      => '秒前',
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };
}

?>
<?php
//blog：文章作者头像
function blog_author4($uid) {
    global $CACHE;
    $user_cache = $CACHE->readCache('user');
    $author = $user_cache[$uid]['name'];
    $mail = $user_cache[$uid]['mail'];
    $des = $user_cache[$uid]['des'];
    $photo = BLOG_URL . $user_cache[$uid]['photo']['src'];
    $title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
    // var_dump($photo);
    echo $photo;
}

?>