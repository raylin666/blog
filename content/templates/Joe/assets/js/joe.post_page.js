document.addEventListener('DOMContentLoaded', () => {
	const encryption = str => window.btoa(unescape(encodeURIComponent(str)));
	const decrypt = str => decodeURIComponent(escape(window.atob(str)));

	/* 当前页的CID */
	const cid = $('.joe_detail').attr('data-cid');

	/* 获取本篇文章百度收录情况 */
	{
		$.ajax({
			url: Joe.BASE_API,
			type: 'POST',
			dataType: 'json',
			data: { routeType: 'baidu_record', site: window.location.href },
			success(res) {
				if (res.data && res.data === '已收录') {
					$('#Joe_Baidu_Record').css('color', '#67C23A');
					$('#Joe_Baidu_Record').html('已收录');
				} else {
					/* 如果填写了Token，则自动推送给百度 */
					if (Joe.BAIDU_PUSH) {
						$('#Joe_Baidu_Record').html('<span style="color: #E6A23C">未收录，推送中...</span>');
						const _timer = setTimeout(function () {
							$.ajax({
								url: Joe.BASE_API,
								type: 'POST',
								dataType: 'json',
								data: {
									routeType: 'baidu_push',
									domain: window.location.protocol + '//' + window.location.hostname,
									url: encodeURI(window.location.href)
								},
								success(res) {
									if (res.data.error) {
										$('#Joe_Baidu_Record').html('<span style="color: #F56C6C">推送失败，请检查！</span>');
									} else {
										$('#Joe_Baidu_Record').html('<span style="color: #67C23A">推送成功！</span>');
									}
								}
							});
							clearTimeout(_timer);
						}, 1000);
					} else {
						const url = `https://ziyuan.baidu.com/linksubmit/url?sitename=${encodeURI(window.location.href)}`;
						$('#Joe_Baidu_Record').html(`<a target="_blank" href="${url}" rel="noopener noreferrer nofollow" style="color: #F56C6C">未收录，提交收录</a>`);
					}
				}
			}
		});
	}

	/* 激活代码高亮 */
	{
		Prism.highlightAll();
		$("pre[class*='language-']").each(function (index, item) {
			let text = $(item).find("code[class*='language-']").text();
			let span = $(`<span class="copy"><i class="fa fa-clone"></i></span>`);
			new ClipboardJS(span[0], { text: () => text }).on('success', () => Qmsg.success('复制成功！'));
			$(item).append(span);
		});
	}

	/* 激活图片预览功能 */
	{
		$('.joe_detail__article img:not(img.owo_image)').each(function () {
			$(this).wrap($(`<span style="display: block;" data-fancybox="Joe" href="${$(this).attr('src')}"></span>`));
		});
	}

	/* 设置文章内的链接为新窗口打开 */
	{
		$('.joe_detail__article a:not(.joe_detail__article-anote)').each(function () {
			$(this).attr({ target: '_blank', rel: 'noopener noreferrer nofollow' });
		});
	}

	/* 激活浏览功能 */
	{
		let viewsArr = localStorage.getItem(encryption('views')) ? JSON.parse(decrypt(localStorage.getItem(encryption('views')))) : [];
		const flag = viewsArr.includes(cid);
		if (!flag) {
			$.ajax({
				url: Joe.BASE_API,
				type: 'POST',
				dataType: 'json',
				data: { routeType: 'handle_views', cid },
				success(res) {
					if (res.code !== 1) return;
					$('#Joe_Article_Views').html(`${res.data.views} 阅读`);
					viewsArr.push(cid);
					const name = encryption('views');
					const val = encryption(JSON.stringify(viewsArr));
					localStorage.setItem(name, val);
				}
			});
		}
	}

	/* 格式化分页的hash值 */
	{
		$('.joe_comment .joe_pagination a').each((index, item) => {
			const href = $(item).attr('href');
			if (href && href.includes('#')) {
				$(item).attr('href', href.replace('#comments', '?scroll=joe_comment'));
			}
		});
	}

	/* 激活文章视频模块 */
	{
		if ($('.joe_detail__article-video').length > 0) {
			const player = $('.joe_detail__article-video .play iframe').attr('data-player');
			$('.joe_detail__article-video .episodes .item').on('click', function () {
				$(this).addClass('active').siblings().removeClass('active');
				const url = $(this).attr('data-src');
				$('.joe_detail__article-video .play iframe').attr({ src: player + url });
			});
			$('.joe_detail__article-video .episodes .item').first().click();
		}
	}

	/* 分享 */
	{
		if ($('.joe_detail__operate-share').length) {
			$('.joe_detail__operate-share > svg').on('click', e => {
				e.stopPropagation();
				$('.joe_detail__operate-share').toggleClass('active');
			});
			$(document).on('click', () => $('.joe_detail__operate-share').removeClass('active'));
		}
	}
});

/* 写在load事件里，为了解决图片未加载完成，滚动距离获取会不准确的问题 */
window.addEventListener('load', function () {
	/* 判断地址栏是否有锚点链接，有则跳转到对应位置 */
	{
		const scroll = new URLSearchParams(location.search).get('scroll');
		if (scroll) {
			const height = $('.joe_header').height();
			let elementEL = null;
			if ($('#' + scroll).length > 0) {
				elementEL = $('#' + scroll);
			} else {
				elementEL = $('.' + scroll);
			}
			if (elementEL && elementEL.length > 0) {
				const top = elementEL.offset().top - height - 15;
				window.scrollTo({ top, behavior: 'smooth' });
			}
		}
	}
});
