<?php
/**
 * 站点首页模板
 */
defined('EMLOG_ROOT') || exit('access denied!');

if ($pageurl == Url::logPage()) {
    include View::getView('index');
    exit;
}
?>
    <div class="joe_container">
    <div class="joe_main">
        <div class="joe_archive">
            <div class="joe_archive__title">
                <svg width="20" height="20" class="joe_archive__title-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5zM16 8L2 22M17.5 15H9"></path>
                </svg>
                <?php if (isset($tag)): ?>
                    <a>包含标签 【<?= $tag; ?>】 的文章</a>
                <?php elseif (isset($sortid)): ?>
                    <?php global $CACHE;
                    $sort_cache = $CACHE->readCache('sort'); ?>
                    <a>
                        <?= $sort_cache[$sortid]['sortname']; ?>
                    </a>
                <?php elseif (isset($author)): ?>
                    <a>作者 【<?= $author; ?>】 的文章</a>
                <?php elseif (isset($keyword)): ?>
                    <a>含有搜索词 【<?= $keyword; ?>】 的文章</a>
                <?php elseif (isset($record)): ?>
                    <a>存档于 【<?= $record; ?>】 的文章</a>
                <?php endif; ?>
            </div>
            <ul class="joe_archive__list joe_list" data-wow="<?= _g('effects-type'); ?>">
                <?php doAction('index_loglist_top');
                if (!empty($logs)):foreach ($logs as $value): ?>
                    <?php
                    if (!empty($value['cover'])) {
                        $imgurl = $value['cover'];
                    } elseif (img_ns($value['content'])) {
                        $imgurl = img_ns($value['content']);
                    } else {
                        $imgurl = _g('appearance-suolt');
                    }
                    ?>
                    <?php $logImgCount = img_count($value['content']); ?>
                    <?php if (img_count($value['content']) >= 1 && img_count($value['content']) < 3) { ?>
                        <li class="joe_list__item wow default">
                            <div class="line"></div>
                            <a href="<?= $value['log_url']; ?>" class="thumbnail" title="<?= $value['log_title']; ?>">
                                <img width="100%" height="100%" data-original="<?= $imgurl; ?>" src="<?= $imgurl; ?>" alt="<?= $value['log_title']; ?>">
                                <time datetime="<?= date('Y-n-j', $value['date']); ?>"><?= date('Y-n-j', $value['date']); ?></time>
                                <?php if ($logImgCount > 0): ?>
                                    <svg viewBox="0 0 1024 1024" width="20" height="20">
                                        <path d="M903.93 107.306H115.787c-51.213 0-93.204 42.505-93.204 93.72V825.29c0 51.724 41.99 93.717 93.717 93.717h788.144c51.72 0 93.717-41.993 93.717-93.717V201.025c-.512-51.214-43.017-93.719-94.23-93.719zm-788.144 64.527h788.657c16.385 0 29.704 13.316 29.704 29.704v390.229L760.54 402.285c-12.805-13.828-30.217-21.508-48.14-19.971-17.924 1.02-34.821 10.754-46.602 26.114l-172.582 239.16-87.06-85.52c-12.29-11.783-27.654-17.924-44.039-17.924-16.39.508-31.755 7.676-43.53 20.48L86.595 821.705V202.05c-1.025-17.416 12.804-30.73 29.191-30.217zm788.145 683.674H141.906l222.255-245.82 87.06 86.037c12.8 12.807 30.212 18.95 47.115 17.417 17.41-1.538 33.797-11.266 45.063-26.118l172.584-238.647 216.111 236.088 2.051-1.54V825.8c.509 16.39-13.315 29.706-30.214 29.706zm0 0"></path>
                                        <path d="M318.072 509.827c79.89 0 144.417-65.037 144.417-144.416 0-79.378-64.527-144.925-144.417-144.925-79.891 0-144.416 64.527-144.416 144.412 0 79.892 64.525 144.93 144.416 144.93zm0-225.327c44.553 0 80.912 36.362 80.912 80.91 0 44.557-35.847 81.43-80.912 81.43-45.068 0-80.916-36.36-80.916-80.915 0-44.556 36.872-81.425 80.916-81.425zm0 0"></path>
                                    </svg><?php endif; ?>
                            </a>
                            <div class="information">
                                <a href="<?= $value['log_url']; ?>" class="title" title="<?= $value['log_title']; ?>">
                                    <?php topflg($value['top'], $value['sortop'], isset($sortid) ? $sortid : ''); ?>
                                    <?= $value['log_title']; ?>
                                </a>
                                <a class="abstract" href="<?= $value['log_url']; ?>" title="文章摘要">
                                    <?= geshihua($value['log_description']); ?>
                                </a>
                                <div class="meta">
                                    <ul class="items">
                                        <li>
                                            <?= date('Y年-n月-j日', $value['date']); ?>
                                        </li>
                                        <li>
                                            <?= $value['views']; ?> 阅读
                                        </li>
                                        <li>
                                            <?= $value['comnum']; ?> 评论
                                        </li>
                                    </ul>
                                    <div class="last" style="display: flex">
                                        <svg class="icon" viewBox="0 0 1024 1024" width="15" height="15">
                                            <path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z"
                                                  fill="#444"></path>
                                            <path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"></path>
                                        </svg>
                                        <?php blog_sort($value['logid']); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } elseif (img_count($value['content']) >= 3) { ?>
                        <li class="joe_list__item wow multiple">
                            <div class="line"></div>
                            <div class="information">
                                <a href="<?= $value['log_url']; ?>" class="title" title="<?= $value['log_title']; ?>" target="_blank" rel="noopener noreferrer">
                                    <span class="badge" style="display: none">置顶</span>
                                    <?= $value['log_title']; ?>
                                </a>
                                <a class="abstract" href="<?= $value['log_url']; ?>" title="文章摘要" target="_blank" rel="noopener noreferrer" se_prerender_url="complete">
                                    <?= geshihua($value['log_description']); ?>
                                </a>
                            </div>
                            <a href="<?= $value['log_url']; ?>" class="thumbnail" title="<?= $value['log_title']; ?>" target="_blank" rel="noopener noreferrer">
                                <?php
                                preg_match_all("/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|jpeg|gif|png|webp))/i", $value['content'], $img);
                                for ($i = 0; $i < 3; $i++) {
                                    ?>
                                    <img width="100%" height="100%" class=" ls-is-cached" data-original="<?= $img[1][$i]; ?>" src="<?= $img[1][$i]; ?>" alt="<?= $value['log_title']; ?>">
                                <?php } ?>
                            </a>
                            <div class="meta">
                                <ul class="items">
                                    <li>
                                        <?= date('Y年-n月-j日', $value['date']); ?>
                                    </li>
                                    <li>
                                        <?= $value['views']; ?> 阅读
                                    </li>
                                    <li>
                                        <?= $value['comnum']; ?> 评论
                                    </li>
                                </ul>
                                <div class="last" style="display: flex">
                                    <svg class="icon" viewBox="0 0 1024 1024" width="15" height="15">
                                        <path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z"
                                              fill="#444"></path>
                                        <path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"></path>
                                    </svg>
                                    <?php blog_sort($value['logid']); ?>
                                </div>
                            </div>
                        </li>
                    <?php } elseif (img_count($value['content']) == 0) { ?>
                        <li class="joe_list__item wow default">
                            <div class="line"></div>
                            <a href="<?= $value['log_url']; ?>" class="thumbnail" title="<?= $value['log_title']; ?>">
                                <img width="100%" height="100%" data-original="<?= $imgurl; ?>" src="<?= $imgurl; ?>" alt="<?= $value['log_title']; ?>">
                                <time datetime="<?= date('Y-n-j', $value['date']); ?>"><?= date('Y-n-j', $value['date']); ?></time>
                                <?php if ($logImgCount > 0): ?>
                                    <svg viewBox="0 0 1024 1024" width="20" height="20">
                                        <path d="M903.93 107.306H115.787c-51.213 0-93.204 42.505-93.204 93.72V825.29c0 51.724 41.99 93.717 93.717 93.717h788.144c51.72 0 93.717-41.993 93.717-93.717V201.025c-.512-51.214-43.017-93.719-94.23-93.719zm-788.144 64.527h788.657c16.385 0 29.704 13.316 29.704 29.704v390.229L760.54 402.285c-12.805-13.828-30.217-21.508-48.14-19.971-17.924 1.02-34.821 10.754-46.602 26.114l-172.582 239.16-87.06-85.52c-12.29-11.783-27.654-17.924-44.039-17.924-16.39.508-31.755 7.676-43.53 20.48L86.595 821.705V202.05c-1.025-17.416 12.804-30.73 29.191-30.217zm788.145 683.674H141.906l222.255-245.82 87.06 86.037c12.8 12.807 30.212 18.95 47.115 17.417 17.41-1.538 33.797-11.266 45.063-26.118l172.584-238.647 216.111 236.088 2.051-1.54V825.8c.509 16.39-13.315 29.706-30.214 29.706zm0 0"></path>
                                        <path d="M318.072 509.827c79.89 0 144.417-65.037 144.417-144.416 0-79.378-64.527-144.925-144.417-144.925-79.891 0-144.416 64.527-144.416 144.412 0 79.892 64.525 144.93 144.416 144.93zm0-225.327c44.553 0 80.912 36.362 80.912 80.91 0 44.557-35.847 81.43-80.912 81.43-45.068 0-80.916-36.36-80.916-80.915 0-44.556 36.872-81.425 80.916-81.425zm0 0"></path>
                                    </svg><?php endif; ?>
                            </a>
                            <div class="information">
                                <a href="<?= $value['log_url']; ?>" class="title" title="<?= $value['log_title']; ?>">
                                    <?php topflg($value['top'], $value['sortop'], isset($sortid) ? $sortid : ''); ?>
                                    <?= $value['log_title']; ?>
                                </a>
                                <a class="abstract" href="<?= $value['log_url']; ?>" title="文章摘要">
                                    <?= geshihua($value['log_description']); ?>
                                </a>
                                <div class="meta">
                                    <ul class="items">
                                        <li>
                                            <?= date('Y年-n月-j日', $value['date']); ?>
                                        </li>
                                        <li>
                                            <?= $value['views']; ?> 阅读
                                        </li>
                                        <li>
                                            <?= $value['comnum']; ?> 评论
                                        </li>
                                    </ul>
                                    <div class="last" style="display: flex">
                                        <svg class="icon" viewBox="0 0 1024 1024" width="15" height="15">
                                            <path d="M512.2 564.743a76.818 76.818 0 0 1-30.973-6.508L108.224 393.877c-26.105-11.508-42.56-35.755-42.927-63.272-.384-27.44 15.356-52.053 41.042-64.232l373.004-176.74c20.591-9.737 45.16-9.755 65.75.017L917.68 266.39c25.668 12.188 41.39 36.792 41.024 64.231-.384 27.5-16.821 51.73-42.908 63.237l-372.57 164.377a77.18 77.18 0 0 1-31.025 6.508zM139.843 329.592l370.213 163.241c1.291.56 3.018.567 4.345-.009l369.758-163.128-369.706-175.464v-.01c-1.326-.628-3.158-.636-4.502 0l-370.108 175.37zm748.015 1.858h.175-.175zM512.376 941.674c-10.348 0-20.8-2.32-30.537-6.997L121.05 778.624c-18.113-7.834-26.454-28.87-18.62-46.983 7.835-18.112 28.862-26.488 46.993-18.61l362.08 156.629 345.26-156.366c17.939-8.166 39.14-.253 47.324 17.746 8.166 17.964.227 39.157-17.729 47.324l-344.51 156.61c-9.196 4.449-19.281 6.7-29.471 6.7z"
                                                  fill="#444"></path>
                                            <path d="M871.563 515.449L511.81 671.775 152.358 515.787v73.578a34.248 34.248 0 0 0 20.76 31.48l301.518 129.19c11.806 5.703 24.499 8.546 37.175 8.546s25.367-2.843 37.174-8.546L850.82 620.534a34.248 34.248 0 0 0 20.744-31.474V515.45z" fill="#ff6a18"></path>
                                        </svg>
                                        <?php blog_sort($value['logid']); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                <?php endforeach;
                else:$keyword = isset($keyword) ? $keyword : '';
                    if ($keyword != '') { ?> <br><br>
                        <h2 style="text-align:center;">抱歉，没有找到与‘
                            <?= htmlspecialchars($keyword, ENT_QUOTES); ?>’相关的内容</h2>
                        <div class="goback"><a href="javascript:history.go(-1);" class="goback_link">返回</a></div>
                    <?php } elseif ($sort != '') { ?>
                        <br><br>
                        <h2 style="text-align:center;">该分类下还没有内容</h2>
                        <div class="goback"><a href="javascript:history.go(-1);" class="goback_link">返回</a></div>
                    <?php } ?>
                <?php endif; ?>
            </ul>
        </div>
        <ul class="joe_pagination">
            <?= sheli_fy($lognum, $index_lognum, $page, $pageurl); ?>
        </ul>
    </div>
<?php include View::getView('side'); ?>
<?php
include View::getView('footer');
?>