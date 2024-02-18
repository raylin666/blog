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
     * @param $dynamicEffectValue
     */
    public function __construct($dynamicEffectValue)
    {
        $this->dynamicEffectValue = $dynamicEffectValue;
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

        echo $result;
    }

    protected function dynamicEffect_1(): string
    {
        return <<<EOL
            <div id="loadingDynamicEffect">
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

    protected function loadStyleLink()
    {
        $path = sprintf('%s/assets/style-%s.css', self::PLUGINS_PATH, $this->dynamicEffectValue);
        echo '<link rel="stylesheet" type="text/css" href="' . $path . '" />';
    }

    protected function loadScriptSrc()
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

$loadingDynamicEffectInstance = new LoadingDynamicEffect($dynamicEffectValue);

/**
 * 添加插件事件
 */
addAction('loading_dynamic_effect', [$loadingDynamicEffectInstance, 'run']);


