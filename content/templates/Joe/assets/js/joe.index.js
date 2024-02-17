document.addEventListener('DOMContentLoaded', () => {
	/* 激活轮播图功能 */
	{
		if ($('.joe_index__banner .swiper-container').length !== 0) {
			let direction = 'horizontal';
			if (!Joe.IS_MOBILE && $('.joe_index__banner-recommend .item').length === 2) direction = 'vertical';
			new Swiper('.swiper-container', {
				keyboard: false,
				direction,
				loop: true,
				autoplay: true,
				mousewheel: true,
				pagination: { el: '.swiper-pagination' },
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
				}
			});
		}
	}
	/* 激活列表特效 */
	{
		const wow = $('.joe_index__list').attr('data-wow');
		if (wow !== 'off' && wow) new WOW({ boxClass: 'wow', animateClass: `animated ${wow}`, offset: 0, mobile: true, live: true, scrollContainer: null }).init();
	}
});