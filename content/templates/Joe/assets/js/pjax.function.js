/**
 * PJAX 页面无刷新
 */
$(document).pjax(
    // 触发点击事件的选择器，String 类型
    'a[target!=_blank]',
    // 一个选择器，为唯一的 PJAX 容器, #Joe 为刷新的 ID
    '#Joe',
    // 一个可以包含下面这些选项的对象
    {
        // 从 AJAX 响应的页面中抽取的‘片段’
        fragment: '#Joe',

        // AJAX 超时时间，单位毫秒，超时后将请求整个页面进行刷新
        timeout: 8000,

        // String: AJAX 请求的 URL
        // url: 'link.href',

        // eventually the relatedTarget value for pjax events (https://yelog.org/2017/02/08/pjax/#Events)
        // target: 'link',

        // CSS 选择器，此元素内容将被替换
        // container: '',

        // 历史内容 cache 的最大size
        maxCacheLength: 20,

        // 替换URL，而不添加浏览器历史条目
        replace: false,

        // 使用 pushState 添加一个浏览器历史导航条目
        push: true,

        // 垂直位置滚动，为了避免改变滚动条位置
        scrollTo: 0,

        // String: 当前 PJAX 版本
        version: '2.0.1',

        // 可以查看 jQuery.ajax() (http://api.jquery.com/jQuery.ajax/)
        // type: 'GET',
        // dataType: 'html',
    }
);

// TODO 事件监听
$(document).on({
    'pjax:send': onSend,
    'pjax:start': onStart,
    'pjax:end': onEnd,

    /**
     * 可以设置 XHR 头
     */
    'pjax:beforeSend': onBeforeSend,

    /**
     * 在一个链接被激活（点击）时触发此事件，可以在此取消阻止 PJAX
     */
    'pjax:click': onClick,

    /**
     * 当链接被点击，并且已经开始 PJAX 请求后触发
     */
    'pjax:clicked': onClicked,

    /**
     * 从服务器已经加载到HTML内容，在替换HTML内容之前触发
     */
    'pjax:beforeReplace': onBeforeReplace,

    /**
     * 从服务器已经加载到HTML内容，在替换HTML内容之后触发
     */
    'pjax:success': onSuccess,

    /**
     * 页面将会在 options.timeout 之后直接发起请求刷新页面，除非取消 PJAX
     */
    'pjax:timeout': onTimeout,

    /**
     * AJAX 错误，将会请求刷新页面，除非取消 PJAX
     */
    'pjax:error': onError,

    /**
     * 不管结果是什么，在 AJAX 后，都触发
     */
    'pjax:complete': onComplete,
});

function onSend(xhr, options)
{
    // TODO 预加载函数可写在这里

    // 开启加载动画
    // $(".loading").css("display", "block");
}

function onClick(options)
{
    // TODO 点击链接时，需要触发的事件写到这里
}

function onBeforeSend(xhr, options)
{

}

function onClicked(options)
{

}

function onBeforeReplace(contents, options)
{

}

function onSuccess(data, status, xhr, options)
{

}

function onTimeout(xhr, options)
{

}

function onError(xhr, textStatus, error, options)
{

}

function onStart(xhr, options)
{
    // TODO 当开始获取请求时，需要触发的事件写在这里
}

function onEnd(xhr, options)
{
    // TODO 当请求完成后，需要触发的事件写在这里
}

function onComplete(xhr, textStatus, options)
{
    // TODO PJAX 加载结束的回调函数 解决JS无法定位的问题, 重新定位容器内容的函数写在这里

    // 关闭加载动画
    // $(".loading").css("display", "none");
}