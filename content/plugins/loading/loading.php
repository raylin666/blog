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

class LoadingDynamicEffect
{
    const PLUGINS_PATH = BLOG_URL . 'content/plugins/loading';

    /**
     * @var string|int 动效模版值, 目前有 1 - 10 可选值
     */
    protected $dynamicEffectValue;

    /**
     * @var string|null 遮罩层背景颜色, 默认无
     */
    protected ?string $maskBackgroundColor = null;

    /**
     * @param string|int $dynamicEffectValue    动效模版值, 目前有 1 - 10 可选值
     * @param string|null $maskBackgroundColor  遮罩层背景颜色, 默认无
     */
    public function __construct($dynamicEffectValue, ?string $maskBackgroundColor = null)
    {
        $this->dynamicEffectValue = $dynamicEffectValue;
        $this->maskBackgroundColor = $maskBackgroundColor;
    }

    public function run()
    {
        $this->loadStyleLink();
        $this->loadScriptSrc();

        $method = sprintf('dynamicEffect_%s', $this->dynamicEffectValue);
        if (! method_exists($this, $method)) {
            return null;
        }

        $result = $this->$method();
        if (! is_string($result)) {
            return null;
        }

        if (is_string($this->maskBackgroundColor)) {
            echo $this->showMask($this->maskBackgroundColor);
        }

        echo $result;
    }

    /**
     * 显示遮罩层
     * @param string $backgroundColor
     * @return string
     */
    protected function showMask(string $backgroundColor): string
    {
        return <<<EOL
            <div id="loadingDynamicEffectMask"></div>
<style>
   #loadingDynamicEffectMask {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      /* 使用rgba设置背景色，a为透明度，0.5表示半透明 */
      background-color: {$backgroundColor};
      /* 设置层级 */
      z-index: 99999;
    }  
</style>
<script>
    window.onscroll = function () {
        var scroll = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
        document.getElementById('loadingDynamicEffectMask').style.top = scroll + 'px';
    };
</script>
EOL;
    }

    protected function dynamicEffect_1(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <div class="text"></div>
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
EOL;
    }

    protected function dynamicEffect_2(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <span class="text">Loading</span>
                <span class="spinner"></span>
            </div>
EOL;
    }

    protected function dynamicEffect_3(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <span class="text"><span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span></span>
                <div class="rotation">
                    <svg width="200" height="200">
                        <line class="top" x1="-200" y1="0" x2="400" y2="0"/>
                        <line class="left" x1="0" y1="0" x2="0" y2="-400"/>
                        <line class="bottom" x1="-200" y1="200" x2="0" y2="200"/>
                        <line class="right" x1="200" y1="200" x2="200" y2="400"/>
                    </svg>
                </div>
            </div>
EOL;
    }

    protected function dynamicEffect_4(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
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
EOL;
    }

    protected function dynamicEffect_5(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <div>l</div>
                <div>o</div>
                <div>a</div>
                <div>d</div>
                <div>i</div>
                <div>n</div>
                <div>g</div>
            </div>
EOL;
    }

    protected function dynamicEffect_6(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <div>l</div>
                <div>o</div>
                <div>a</div>
                <div>d</div>
                <div>i</div>
                <div>n</div>
                <div>g</div>
            </div>
EOL;
    }

    protected function dynamicEffect_7(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
            <span>LOADING</span>
                <ul class="clouds">
                    <li class="cloud"></li>
                    <li class="cloud"></li>
                    <li class="cloud"></li>
                    <li class="cloud"></li>
                    <li class="cloud"></li>
                    <li class="cloud"></li>
                    <li class="cloud"></li>
                </ul>	
            </div>
EOL;
    }

    protected function dynamicEffect_8(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <div class="cap"></div>
                <div class="line">LOADING</div>
            </div>
EOL;
    }

    protected function dynamicEffect_9(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <span class="txt"><span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span></span>
            </div>
EOL;
    }

    protected function dynamicEffect_10(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
                <div>L</div>
                <div>O</div>
                <div>A</div>
                <div>D</div>
                <div>I</div>
                <div>N</div>
                <div>G</div>
                <div></div>
                <div></div>
                <div></div>
            </div>
EOL;
    }

    protected function loadStyleLink(): void
    {
        $path = sprintf('%s/assets/style-%s.css', self::PLUGINS_PATH, $this->dynamicEffectValue);
        echo '<link rel="stylesheet" type="text/css" href="' . $path . '" />';
    }

    protected function loadScriptSrc(): void
    {
        $path = sprintf('%s/assets/html5.js', self::PLUGINS_PATH);
        $html = <<<EOL
        <!--[if IE]>
            <script src="{$path}"></script>
        <![endif]-->
EOL;

        echo $html;
    }
}

/**
 * 动效模版值, 目前有 1 - 10 可选值
 */
$dynamicEffectValue = 1;

/**
 * 遮罩层背景颜色
 */
$maskBackgroundColor = '#000000';

/**
 * 实例化加载动效对象
 */
$loadingDynamicEffectInstance = new LoadingDynamicEffect($dynamicEffectValue, $maskBackgroundColor);

/**
 * 添加插件事件
 */
addAction('loading_dynamic_effect', [$loadingDynamicEffectInstance, 'run']);


