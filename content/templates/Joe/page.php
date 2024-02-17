<?php
/**
 * 自建页面模板
 */

defined('EMLOG_ROOT') || exit('access denied!');
?>
    <div class="joe_container">
    <div class="joe_main">
        <div class="joe_detail" data-cid="41">
            <h1 class="joe_detail__title">
                <?= $log_title; ?>
            </h1>
            <div class="joe_detail__count">
                <div class="joe_detail__count-information">
                    <img width="35" height="35" class="avatar ls-is-cached lazyloaded" src="<?php $user_cache = $CACHE->readCache('user');
                    echo empty($user_cache[$author]['avatar']) ? BLOG_URL . 'admin/views/images/avatar.jpg' : BLOG_URL . $user_cache[$author]['avatar']; ?>"
                         src="<?php $user_cache = $CACHE->readCache('user');
                         echo empty($user_cache[$author]['avatar']) ? BLOG_URL . 'admin/views/images/avatar.jpg' : BLOG_URL . $user_cache[$author]['avatar']; ?>">
                    <div class="meta">
                        <div class="author">
                            <?php blog_author($author); ?>
                        </div>
                        <div class="item">
                            <span class="text"><?= gmdate('Y-n-j', $date); ?></span>
                            <span class="line">/</span>
                            <span class="text"><?=($comnum); ?> 评论</span>
                        </div>
                    </div>
                </div>
                <time class="joe_detail__count-created" datetime="<?= gmdate('m/d', $date); ?>"><?= gmdate('m/d', $date); ?></time>
            </div>
            <article class="joe_detail__article">
                <?= $log_content; ?>
            </article>
            <div class="joe_detail__agree">
                <a class="slzanpd" data-slzanpd="<?= $logData['logid']; ?>" title="喜欢这篇文章就赞一个吧！">
                    <div class="agree">
                        <div>
                            <svg class="like icon-2" viewBox="0 0 1024 1024" onclick="document.body.classList.toggle('liked')" width="40" height="40">
                                <path d="M736 128c-65.952 0-128.576 25.024-176.384 70.464-4.576 4.32-28.672 28.736-47.328 47.68L464.96 199.04C417.12 153.216 354.272 128 288 128 146.848 128 32 242.848 32 384c0 82.432 41.184 144.288 76.48 182.496l316.896 320.128C450.464 911.68 478.304 928 512 928s61.568-16.32 86.752-41.504l316.736-320 2.208-2.464C955.904 516.384 992 471.392 992 384c0-141.152-114.848-256-256-256z" fill="#fff"></path>
                            </svg>
                        </div>
                        <span class="text"><?=(isset($logData['slzan']) ? $logData['slzan'] : getnum($logData['logid']));
                            ?></span>
                    </div>
                </a>
            </div>
            <div class="joe_detail__copyright">
                <div class="content">
                    <div class="item">
                        <svg class="icon" width="20" height="20" viewBox="0 0 1024 1024">
                            <path d="M614.72 554.538c-49.086-6.399-100.27-2.1-149.256-2.1-119.465 0-209.04 95.972-206.84 215.437 0 17.095 8.498 31.99 23.493 40.488 14.896 10.697 34.09 14.896 53.285 17.095 61.882 6.398 123.664 6.398 198.342 6.398 40.488 0 93.872-2.1 142.858-4.298 27.692 0 53.284-4.3 78.877-14.896 19.194-8.498 29.89-19.194 31.99-40.488 8.498-104.57-72.478-204.84-172.75-217.636zM680.8 375.39c0-87.474-74.678-162.053-164.251-162.053-89.574 0-162.053 74.679-162.053 162.053-2.1 87.474 74.678 164.252 162.053 164.252 89.673 0 164.252-74.678 164.252-164.252z"
                                  fill="#FFF"></path>
                            <path d="M512.35 0C228.733 0 .5 228.233.5 511.85s228.233 511.85 511.85 511.85 511.85-228.233 511.85-511.85S795.967 0 512.35 0zm275.12 772.074c-2.1 21.294-12.797 31.99-31.991 40.488-25.593 10.697-51.185 14.896-78.877 14.896-49.086 2.099-102.37 4.298-142.858 4.298-74.678 0-136.46 0-198.342-6.398-19.195-2.1-38.389-6.398-53.285-17.095-14.895-8.497-23.493-23.493-23.493-40.488-2.1-119.465 87.475-215.437 206.84-215.437 49.085 0 100.27-4.299 149.256 2.1 100.27 12.896 181.247 113.166 172.75 217.636zM354.495 375.39c0-87.474 72.479-162.053 162.053-162.053S680.8 288.016 680.8 375.39c0 89.574-74.679 164.252-164.252 164.252-87.375 0-164.152-76.778-162.053-164.252z"
                                  fill="#249FF8"></path>
                        </svg>
                        <span>版权属于：</span>
                        <span class="text"><?php blog_author1($author); ?></span>
                    </div>
                    <div class="item">
                        <svg class="icon" width="20" height="20" viewBox="0 0 1024 1024">
                            <path d="M511.854 0A511.854 511.854 0 1 0 1024 511.854 511.854 511.854 0 0 0 511.854 0z" fill="#39B54A"></path>
                            <path d="M576.491 630.355L460.028 746.818a129.565 129.565 0 0 1-182.555 0l-2.038-2.038a128.983 128.983 0 0 1 0-182.264l81.233-81.233a179.644 179.644 0 0 0 13.102 70.46l-52.7 52.408a69.878 69.878 0 0 0 0 98.703l2.038 2.038a70.169 70.169 0 0 0 98.703 0l116.463-116.463a69.878 69.878 0 0 0 0-98.703l-2.039-2.038a69.587 69.587 0 0 0-13.975-10.772l42.509-42.51a128.11 128.11 0 0 1 13.102 11.356l2.038 2.038a129.274 129.274 0 0 1 0 182.264z" fill="#FFF"></path>
                            <path d="M746.236 460.902l-81.233 81.233a179.353 179.353 0 0 0-13.102-70.46l52.7-52.409a69.878 69.878 0 0 0 0-98.702l-2.039-2.038a69.878 69.878 0 0 0-98.702 0L487.397 434.989a69.878 69.878 0 0 0 0 98.702l2.038 2.038a68.422 68.422 0 0 0 13.976 10.773l-42.51 42.51a136.553 136.553 0 0 1-13.101-11.356l-2.038-2.038a128.983 128.983 0 0 1 0-182.265l116.463-116.462a129.565 129.565 0 0 1 182.555 0l2.038 2.038a128.983 128.983 0 0 1 0 182.264z" fill="#FFF"></path>
                        </svg>
                        <span>本文链接：</span>
                        <span class="text">
		<a class="link" href="<?= Url::log($logid); ?>" target="_blank" rel="noopener noreferrer nofollow"><?= Url::log($logid); ?></a>
	</span>
                    </div>
                    <div class="item">
                        <svg class="icon" width="20" height="20" viewBox="0 0 1024 1024">
                            <path d="M0 512a512 512 0 1 0 1024 0A512 512 0 1 0 0 512z" fill="#F3B243"></path>
                            <path d="M540.672 323.584a90.112 90.112 0 1 0 180.224 0 90.112 90.112 0 1 0-180.224 0zM540.672 688.128a90.112 90.112 0 1 0 180.224 0 90.112 90.112 0 1 0-180.224 0zM229.376 512a90.112 90.112 0 1 0 180.224 0 90.112 90.112 0 1 0-180.224 0z" fill="#FFF"></path>
                            <path d="M341.037 480.37l257.344-175.718 27.713 40.592-257.34 175.718z" fill="#FFF"></path>
                            <path d="M349.053 488.452L601.907 670.56l-28.725 39.887L320.307 528.34z" fill="#FFF"></path>
                        </svg>
                        <span>文章声明：</span>
                        <span class="text">
		本文版权内容属于《<?= $blogname; ?>》转载请标明出处
	</span>
                    </div>
                </div>
            </div>
        </div>
        <?php blog_comments_post($logid, $ckname, $ckmail, $ckurl, $verifyCode, $allow_remark); ?>
        <ol class="comment-list">
            <?php blog_comments($comments, $params); ?>
        </ol>
    </div>
<?php include View::getView('side'); ?>
<?php
include View::getView('footer');
?>