/***Equal height js***/
jQuery(window).load(function () {
	//jQuery(document).ready(function($){ 
	jQuery.fn.equalHeights = function () {
		var max_height = 0;
		jQuery(this).each(function () {
			max_height = Math.max(jQuery(this).height(), max_height);
		});
		jQuery(this).each(function () {
			jQuery(this).height(max_height);
		});
	};

	jQuery('.customer-cards .customer-says').equalHeights();
	jQuery('.item .top-content').equalHeights();
});
/*end*/

function scrollToDiv(element, navheight) {

	var offset = element.offset();
	var offsetTop = offset.top;
	var totalScroll = offsetTop - navheight;

	jQuery('body,html').animate({
		scrollTop: totalScroll
	}, 100);
}

//Platform Page
function highlightActiveplatformitem() {
	
	var scrollPosition = jQuery(window).scrollTop();
	jQuery('.stay-link-li').each(function () {
		var id = jQuery(this).data('id');
		var targetElement = jQuery('#' + id);
		if (targetElement.length > 0 && scrollPosition >= targetElement.offset().top - 200) {
			jQuery('.stay-link-li').removeClass('active');
			jQuery(this).addClass('active');
		}
	});
}

/**
 * Document Ready Function
 * Triggered when document get's ready
 */
//  document.all.body.style.paddingBottom="189px";
jQuery(document).ready(function (jQuery) {
	/**
	 * Sticky Header
	 * Adds a class to header on scroll
	 */
	var loginArrowType = jQuery('.img-login').data('scheme');
	var requestArrowType = jQuery('.req_demo').data('scheme');
	jQuery(document).on('scroll', function () {
		if (jQuery(document).scrollTop() > 0) {
			jQuery('header, body').addClass('shrink');
			jQuery('.img-login').attr('src', jQuery('#white_arw').val());
			jQuery('.req_demo').attr('src', jQuery('#black_arw').val());

		} else {
			jQuery('header, body').removeClass('shrink');
			if (loginArrowType == 'white') {
				jQuery('.img-login').attr('src', jQuery('#black_arw').val());
			} else {
				jQuery('.img-login').attr('src', jQuery('#white_arw').val());
			}
			if(jQuery('.gradient-header').length > 0){
				jQuery('.img-login').attr('src', jQuery('#white_arw').val());
			}

			if(jQuery('.tranparent-header').length > 0){
				jQuery('.img-login').attr('src', jQuery('#white_arw').val());
			}
			
			if (requestArrowType == 'white') {
				jQuery('.req_demo').attr('src', jQuery('#white_arw').val());
			} else {
				jQuery('.req_demo').attr('src', jQuery('#black_arw').val());
			}

			if (requestArrowType == 'black') {
				jQuery('.req_demo').attr('src', jQuery('#white_arw').val());
			} else {
				jQuery('.req_demo').attr('src', jQuery('#black_arw').val());
			}

			if(jQuery('.gradient-header').length > 0){
				jQuery('.req_demo').attr('src', jQuery('#black_arw').val());
			}

		}
	});

	AOS.init({
		easing: 'ease-in-out-sine',
		once: true,
	});

	jQuery(".open-popup-btn1").click(function () {
		jQuery('body').addClass('open-video');
	});


	Splitting();
	ScrollOut({
		targets: '[data-splitting]'
	});

	// Customer Slider

	/***   slider product js start***/
	let residentsSlider2 = jQuery(".slick-bg-slider");
	residentsSlider2.slick({
		infinite: false,
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		appendArrows: residentsSlider2.parent().find('.slider-arrow2'),
		prevArrow: '<span class="slick-prev-quote slick-arrow arrow-style"><span class="arrow-move"><svg class="first-arrow" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 36.5H50.5M50.5 36.5L41 27M50.5 36.5L41 46" stroke="#F9F9F7" stroke-width="1.25"/><rect x="0.5" y="0.5" width="71" height="71" rx="35.5" stroke="#F9F9F7"/></svg></span></span>',
		nextArrow: '<span class="slick-next-quote slick-arrow arrow-style"><span class="arrow-move"><svg class="first-arrow" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 36.5H50.5M50.5 36.5L41 27M50.5 36.5L41 46" stroke="#F9F9F7" stroke-width="1.25"/><rect x="0.5" y="0.5" width="71" height="71" rx="35.5" stroke="#F9F9F7"/></svg></span></span>',
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	/**Quote Tab slider start */
	let tabSlider = jQuery('.slider-for');
	tabSlider.slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		asNavFor: '.slider-nav',
		autoplay: false,
		rows: 0,

	});
	let tabSliderNav = jQuery('.slider-nav');
	tabSliderNav.slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		infinite: false,
		centerPadding: '0px',
		autoplay: false
	});

	jQuery('.slider-arrow-in').on('click', '.slick-arrow-n', function (event) {
		event.preventDefault();
		/* Act on the event */
		if (jQuery(this).hasClass('Slick-Prev-n')) {
			tabSlider.slick('slickPrev');

		} else {
			tabSlider.slick('slickNext');

		}
	});
	jQuery('.slider-nav').on('click', '.slick-slide', function (event) {
		event.preventDefault();
		var goToSingleSlide = jQuery(this).data('slick-index');
		jQuery('.slider-for').slick('slickGoTo', goToSingleSlide);
		if (goToSingleSlide == 0) {
			jQuery(".Slick-Prev-n").addClass("disabled");
		} else {
			jQuery(".Slick-Prev-n").removeClass("disabled");
		}
		if (goToSingleSlide == 3) {
			jQuery(".Slick-Next-n").addClass("disabled");
		} else {
			jQuery(".Slick-Next-n").removeClass("disabled");
		}


	});
	jQuery(".slider-for").on("beforeChange", function (event, slick) {
		//if(jQuery(".slick-active").attr("data-vid-option") == "image"){
		jQuery(".quote-img-btn").show();
		jQuery('.embed-player').hide();
		//}else{
		//jQuery(".quote-img-btn").show();
		//}
		//playPauseVideo(slick,"pause");
		var playr = jQuery(".slick-active").find("iframe").get(0);

		postMessageToPlayer(playr, {
			"event": "command",
			"func": "stopVideo"
		});
	});
	jQuery(".slider-for").on("afterChange", function (event, slick, currentSlide) {
		event.preventDefault();
		if (currentSlide == 0) {
			jQuery(".Slick-Prev-n").addClass("disabled");
		} else {
			jQuery(".Slick-Prev-n").removeClass("disabled");
		}
		if (currentSlide == 3) {
			jQuery(".Slick-Next-n").addClass("disabled");
		} else {
			jQuery(".Slick-Next-n").removeClass("disabled");
		}
		slick = jQuery(slick.currentTarget);
		// playPauseVideo(slick,"play");
		//if(jQuery(".slick-active").attr("data-vid-option") == "image"){
		jQuery(".quote-img-btn").show();
		jQuery('.embed-player').hide();
		//}else{
		//jQuery(".quote-img-btn").hide();
		//}
		var plyr = jQuery(".slick-active").find("iframe").get(0);


		postMessageToPlayer(plyr, {
			"event": "command",
			"func": "stopVideo"
		});

	});
	/**Quote Tab slider end */

	// When the slide is changing
	// POST commands to YouTube or Vimeo API
	jQuery('.embed-player').hide();
	jQuery('.play-ic').on('click', function (ev) {
		jQuery('.embed-player').show();
		jQuery(".quote-img-btn").hide();
		var p = jQuery(".slick-active").find("iframe").get(0);
		postMessageToPlayer(p, {
			"event": "command",
			"func": "mute"
		});
		postMessageToPlayer(p, {
			"event": "command",
			"func": "playVideo"
		});
	});
	function postMessageToPlayer(player, command) {
		if (player == null || command == null) return;
		player.contentWindow.postMessage(JSON.stringify(command), "*");
	}
	function playPauseVideo(slick, control) {
		var currentSlide, slideType, startTime, player, video;

		jQuery('.item').each(function (i) {
			// do stuff
			if (jQuery(this).hasClass(".slick-active")) {
				currentSlide = jQuery(this).attr("data-vid-option");

			}
		});

		//slideType = currentSlide.attr("class").split(" ")[1];
		slideType = jQuery(".slick-active").attr("data-vid-option");




		if (slideType === "vimeo") {
			switch (control) {
				case "play":
					if ((startTime != null && startTime > 0) && !currentSlide.hasClass('started')) {
						currentSlide.addClass('started');
						postMessageToPlayer(player, {
							"method": "setCurrentTime",
							"value": startTime
						});
					}
					postMessageToPlayer(player, {
						"method": "play",
						"value": 1
					});
					break;
				case "pause":
					postMessageToPlayer(player, {
						"method": "pause",
						"value": 1
					});
					break;
			}
		} else if (slideType === "youtube") {
			player = jQuery(".slick-active").find("iframe").get(0);
			
			switch (control) {
				case "play":
					postMessageToPlayer(player, {
						"event": "command",
						"func": "mute"
					});
					postMessageToPlayer(player, {
						"event": "command",
						"func": "playVideo"
					});
					break;
				case "pause":
					postMessageToPlayer(player, {
						"event": "command",
						"func": "pauseVideo"
					});
					break;
			}
		} else if (slideType === "video") {
			video = currentSlide.children("video").get(0);
			if (video != null) {
				if (control === "play") {
					video.play();
				} else {
					video.pause();
				}
			}
		} else if (slideType === "image") {
			jQuery(".quote-img-btn").show();
		}
	}



	if (navigator.userAgent.indexOf('Mac OS X') != -1) {
		jQuery("body").addClass("style-for-apple");
	} else {
		jQuery("body").addClass("style-for-window");
	}

	/**
	 * Toggle menu for mobile
	 */
	// accessible sub menu
	jQuery('.menu-item-has-children > a').focus(function () {
		jQuery(this).siblings('.sub-menu').addClass('focused');
	}).blur(function () {
		jQuery(this).siblings('.sub-menu').removeClass('focused');
	});

	jQuery('.menu-btn').click(function () {
		jQuery(this).toggleClass('active');
		jQuery('.nav-overlay').toggleClass('open');
		jQuery('html, body').toggleClass('no-overflow');
		jQuery('.header-nav ul li.active').removeClass('active');
		jQuery('.header-nav ul.sub-menu').slideUp();
		jQuery('.mega-dropdown, .menu-overlay').hide();

	});
	jQuery.noConflict();

	jQuery('.show-more-quotes').click(function () {
		jQuery('.customer-love-block .quote-listing .item').removeAttr('style');
		jQuery('.customer-love-block .quote-listing .item').attr('data-aos', 'fade-up');
		jQuery('.customer-love-block .quote-listing .item').attr('data-aos-delay', '450');

		AOS.refresh();
		jQuery('.more-btn').hide();
	});
	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */
	jQuery('li').each(function () {
		if (jQuery(this).hasClass('menu-item-has-children')) {
			jQuery(this)
				.find('a:first')
				.after('<span class="submenu-icon"></span>');
		}
	});
	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */
	jQuery('.header-nav .submenu-icon').click(function () {
		const link = jQuery(this);
		const closestUl = link.closest('ul');
		const parallelActiveLinks = closestUl.find('.active');
		const closestLi = link.closest('li');
		const linkStatus = closestLi.hasClass('active');
		let count = 0;

		closestUl.find('ul').slideUp(function () {
			if (++count === closestUl.find('ul').length) {
				parallelActiveLinks.removeClass('active');
			}
		});

		if (!linkStatus) {
			closestLi.children('ul').slideDown();
			closestLi.addClass('active');
		}
	});

	//Video block popup
	jQuery('.open-popup-btn').magnificPopup({
		type: 'inline',
		midClick: true,
		mainClass: 'mfp-fade'
	});

	//Carousel block
	jQuery('.offerItemTitle').click(function () {
		jQuery(this).parents('.offerslide').children('.offerItem').removeClass('active');
		jQuery(this).parents('.offerslide').children('.offerItem').children('.offerItemTitle').removeClass('hide');
		jQuery(this).parent('.offerItem').addClass('active');
		jQuery(this).addClass('hide');
	});

	/**
	 * Slider for About Team Members
	 */
	// Find all elements with the class .img-text-slide
	let residentsSliders = jQuery(".img-text-slide");

	residentsSliders.each(function (index, element) {
		let $slider = jQuery(element);

		// Initialize each slider individually
		$slider.slick({
			infinite: false,
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: true,
			draggable: false,
			appendArrows: $slider.parent().find('.slider-arrow2'),
			prevArrow: '<span class="slick-prev-quote slick-arrow arrow-style"><span class="arrow-move"><svg class="first-arrow" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 36.5H50.5M50.5 36.5L41 27M50.5 36.5L41 46" stroke="#F9F9F7" stroke-width="1.25"/><rect x="0.5" y="0.5" width="71" height="71" rx="35.5" stroke="#F9F9F7"/></svg></span></span>',
			nextArrow: '<span class="slick-next-quote slick-arrow arrow-style"><span class="arrow-move"><svg class="first-arrow" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 36.5H50.5M50.5 36.5L41 27M50.5 36.5L41 46" stroke="#F9F9F7" stroke-width="1.25"/><rect x="0.5" y="0.5" width="71" height="71" rx="35.5" stroke="#F9F9F7"/></svg></span></span>',
			responsive: [
				{
					breakpoint: 1199,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
					},
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
					},
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						draggable: true,
					},
				},
			],
			// swipe: true, 
    		// touchMove: false, 
		});
	});

	jQuery(".popup-open").on("click", function (e) {
		e.preventDefault();
		var membername = jQuery(this).data('member-name'),
			memberID = jQuery(this).attr('id');
		let popupDiv = jQuery(this).parents('.img-text-slide').next('.popup-member');
		let loaderDiv = jQuery(this).parents('.img-text-slide').siblings('.pre-loader');
		jQuery.ajax({
			url: localVars.ajax_url,
			type: 'POST', // POST
			dataType: 'html',
			data: {
				action: 'teamslider',
				membername: membername,
				memberID: memberID,
			}, // form data
			beforeSend: function () {
				loaderDiv.css('display', 'flex');
			},
			success: function (response) {
				popupDiv.empty();
				popupDiv.html(response);
				history.pushState(null, null, '#team-' + membername);
				popupDiv.css('display', 'block');
				popupDiv.on('click', function () {
					popupDiv.css('display', 'none');
					history.pushState("", document.title, window.location.pathname);
				});
			},
			complete: function () {
				loaderDiv.css('display', 'none');
			}
		});
	});
  
});

jQuery(document).on('click', '.img-text-card', function() {
	let linkedin = jQuery(this).data('linkedin');
	if(linkedin){	
		jQuery('body').removeClass('popup-overlay');
		jQuery('html').removeClass('scroll-hidden');

	}else{
		jQuery('body').addClass('popup-overlay');
		jQuery('html').addClass('scroll-hidden');
	}
});
 
jQuery(document).on('click', '.popup-close', function() {
	jQuery('body').removeClass('popup-overlay');
	jQuery('html').removeClass('scroll-hidden');
  });


jQuery('.open-popup-btn1').magnificPopup({
	// disableOn: 700,
	type: 'iframe',
	mainClass: 'mfp-fade',
	removalDelay: 160,
	preloader: false,
	callbacks: {
		close: function () {
			jQuery('body').removeClass('open-video');
		}
	},
	fixedContentPos: false,
	iframe: {
		markup: '<div class="mfp-iframe-scaler">' +
			'<div class="mfp-close">x</div>' +
			'<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
			'</div>',
		patterns: {
			youtube: {
				index: 'youtube.com/',
				id: 'v=',
				src: 'https://www.youtube.com/embed/%id%?autoplay=1'
			},
			vimeo: {
				index: 'vimeo.com/',
				id: function (url) {
					var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
					if (!m || !m[5]) return null;
					return m[5];
				},
				src: 'https://player.vimeo.com/video/%id%?autoplay=1'
			}
		}
	}
});

function isOnScreen(elem) {
	// if the element doesn't exist, abort
	if (elem.length == 0) {
		return;
	}
	var $window = jQuery(window)
	var viewport_top = $window.scrollTop()
	var viewport_height = $window.height()
	var viewport_bottom = viewport_top + viewport_height
	var $elem = jQuery(elem)
	var top = $elem.offset().top
	var height = $elem.height()
	var bottom = top + height

	return (top >= viewport_top && top < viewport_bottom) ||
		(bottom > viewport_top && bottom <= viewport_bottom) ||
		(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}


/******View port class add and remove */
(function ($) {
	$.fn.visible = function (partial) {
		var $t = $(this),
			$w = $(window),
			viewTop = $w.scrollTop(),
			viewBottom = viewTop + $w.height(),
			_top = $t.offset().top,
			_bottom = _top + $t.height(),
			compareTop = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

		return compareBottom <= viewBottom && compareTop >= viewTop;
	};
})(jQuery);

jQuery(window).scroll(function () {
	if (jQuery('.footer-cta').length) {
		var div = jQuery('.footer-cta');
		var divExpend = jQuery('#footer-arrow-expand');
		var divExpendSm = jQuery('#footer-arrow-expand-sm');
		var divOffset = div.offset().top;
		var windowHeight = jQuery(window).height();
		var scrollTop = jQuery(this).scrollTop();

		if (jQuery(".footer-cta").visible(true)) {
			var scrollPercent = (scrollTop - divOffset + windowHeight) / (2 * windowHeight);
			var width = scrollPercent * 260;
			divExpend.animate({ width: Math.min(Math.max(width, 30), 100) + "%" }, 0);
			divExpendSm.animate({ width: Math.min(Math.max(width, 30), 100) + "%" }, 0);
		}

	}

});

jQuery(document).ready(function () {
	jQuery(".accordion-border-group .accordion-list .accordion-title").click(function () {
		var content = jQuery(this).next(".accordion-content");
		if (content.is(":visible")) {
			jQuery(this).parent().removeClass("active");
			content.slideUp(500);
		}
		else {
			jQuery(this).parent().siblings().removeClass("active");
			jQuery(this).parent().siblings().children(".accordion-content").slideUp(500);
			content.slideDown(500);
			jQuery(this).parent().addClass("active");
		}
	});

	/***   slider product js start***/
	let residentsSlider3 = jQuery(".cat-block-slide");
	residentsSlider3.slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	jQuery(".cat-block-slide").on("afterChange", function (event, slick, currentSlide) {
		event.preventDefault();
		if (currentSlide == 0) {
			jQuery(".Slick-Prev-Quote").addClass("disabled");
		} else {
			jQuery(".Slick-Prev-Quote").removeClass("disabled");
		}
		if (slick.$slides.length == currentSlide + slick.options.slidesToShow) {
			jQuery(".Slick-Next-Quote").addClass("disabled");
		} else {
			jQuery(".Slick-Next-Quote").removeClass("disabled");
		}
	});


	jQuery('.stay-click a').click(function () {
		var el = jQuery(this).attr('href');
		var elWrapped = jQuery(el);
		if (jQuery(window).width() > 991) {
			var header_height = jQuery('#header-section').outerHeight() + 100;
		} else {
			var header_height = jQuery('#header-section').outerHeight() + 20;
		}

		scrollToDiv(elWrapped, header_height);
		return false;
	});

	/***   slider product js start***/
	let residentsSlider7 = jQuery(".press-mentions-slide");
	residentsSlider7.slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		appendArrows: residentsSlider7.parent().find('.press-mentions-custom-arrow'),
		prevArrow: '<span class="slick-prev-quote slick-arrow arrow-style"><span class="arrow-move"><svg class="first-arrow" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 36.5H50.5M50.5 36.5L41 27M50.5 36.5L41 46" stroke="#F9F9F7" stroke-width="1.25"/><rect x="0.5" y="0.5" width="71" height="71" rx="35.5" stroke="#F9F9F7"/></svg></span></span>',
		nextArrow: '<span class="slick-next-quote slick-arrow arrow-style"><span class="arrow-move"><svg class="first-arrow" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 36.5H50.5M50.5 36.5L41 27M50.5 36.5L41 46" stroke="#F9F9F7" stroke-width="1.25"/><rect x="0.5" y="0.5" width="71" height="71" rx="35.5" stroke="#F9F9F7"/></svg></span></span>',
		responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	jQuery('#custom-post-pagination').change(function () {
		window.location.href = jQuery(this).val();
	});

	let residentsSlider6 = jQuery(".sales-lists-slide");
	residentsSlider6.slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	jQuery(window).on('scroll', () => {
		if (jQuery('.jump-section-location').length) {
			var bannerHeight = jQuery('.jump-section-location').outerHeight();
			if (jQuery(this).scrollTop() > bannerHeight) {
				jQuery("header").slideUp('fast');
				jQuery('.group-expand').addClass("sticky-jump");
			} else {
				jQuery("header").slideDown('fast');
				jQuery('.group-expand').removeClass("sticky-jump");
			}
		}
	});

});
  

//Single Resource
jQuery(document).on('click', '.table-jump-content', function (e) {
	e.preventDefault();
	var hash = this.hash;
	var target = jQuery(hash).length ? jQuery(hash) : jQuery('[name=' + hash.substr(1) + ']');
	if (target.length) {
		jQuery('html, body').animate({
			scrollTop: target.offset().top - 80
		}, 100);
		return false;
	}
});

function highlightActiveTocItem() {
	var scrollPosition = jQuery(window).scrollTop();
	jQuery('.toc-item').each(function () {
		var id = jQuery(this).data('id');
		var targetElement = jQuery('#' + id);
		if (targetElement.length > 0 && scrollPosition >= targetElement.offset().top - 200) {
			jQuery('.toc-item').removeClass('active');
			jQuery(this).addClass('active');
		}
	});
}
jQuery(document).ready(function () {
	highlightActiveTocItem();
	highlightActiveplatformitem();
	// Call the function on scroll
	jQuery(window).scroll(function () {
		highlightActiveTocItem();
		highlightActiveplatformitem();
	});
});

function resourcescrollToDiv(element, navheight) {
	var offset = element.offset();
	var offsetTop = offset.top;
	var totalScroll = offsetTop - navheight;

	jQuery('body,html').animate({
		scrollTop: totalScroll
	}, 100);
}

jQuery(function () {
	// var len = false;
	// var cat = 100;
    
	jQuery('.scroll-jump').on('click', function () {
		var target = jQuery(this.hash);
		target = target.length ? target : jQuery('[name=' + this.hash.substr(1) + ']');
		if (target.length) {
			jQuery('html,body').animate({
				scrollTop: target.offset().top - 50
			}, 100);
			// if(len == false){
			// 	cat = 100;
			// 	len = true;
			// }
			return false;
		}
		
	});
});

// Function to initialize the StickySidebar
function initializeStickySidebar() { 
	if (jQuery('.sidebar-contrnt').length) {
		const sidebarstky = new StickySidebar('.sidebar-contrnt', {
			topSpacing: 150,
			bottomSpacing: 150,
			containerSelector: '.sticky-sidebar-block',
			innerWrapperSelector: '.cl-left'
		});
	}

	if (jQuery('#sidebar').length) {
        const topSpace = jQuery('.top-head-wrapper').outerHeight(),
        headerheight = jQuery('#header-section').outerHeight(),
        topOffset = topSpace - headerheight + 32;
		const sidebar = new StickySidebar('#sidebar', {
			topSpacing: -topOffset,
			bottomSpacing: 0,
			containerSelector: '#main-content',
			innerWrapperSelector: '.sidebar__inner',
			resizeSensor: true,
		});
	}

	
}
// Function to check if the device is a desktop
function isDesktop() {
	return window.innerWidth >= 991; // Adjust the breakpoint as needed
}
// Check if it's a desktop before initializing the StickySidebar

if (isDesktop()) {
	jQuery(document).ready(function () {
		initializeStickySidebar();
	});
}


//Aboutus leftsidebar sticky js Code
// jQuery(document).ready(function () {
// 	if (window.innerWidth >= 992 && jQuery('.platform-inner-leftsidebar').length) {
// 		var sidebar = new StickySidebar('.platform-inner-leftsidebar', {
// 			topSpacing: 0,
// 			bottomSpacing: 0,
// 			containerSelector: '.platform-lft-block',
// 			disableOnMobile: true,
// 			resizeSensor: true,
// 			innerWrapperSelector: '.cl-left'
// 		});
// 	}
// });


jQuery(window).scroll(function () {
	var scrollheight = jQuery(window).scrollTop(),
		deskheight = jQuery('.resource-detail').outerHeight() + 220, //jQuery(document).height() - jQuery('.site-footer').height()
		pageheight = jQuery(window).height(),
		scrollPercent = (scrollheight / (deskheight - pageheight)) * 100;
	var position = scrollPercent;
	jQuery("#progressbar1").attr('value', position);
});


jQuery(document).ready(function () {
	/***   slider product js start***/
	let residentsSlider3 = jQuery(".sales-lists-slide");
	residentsSlider3.slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	});

	jQuery(".research-slide").on("afterChange", function (event, slick, currentSlide) {
		event.preventDefault();
		if (currentSlide == 0) {
			jQuery(".Slick-Prev-Quote").addClass("disabled");
		} else {
			jQuery(".Slick-Prev-Quote").removeClass("disabled");
		}
		if (slick.$slides.length == currentSlide + slick.options.slidesToShow) {
			jQuery(".Slick-Next-Quote").addClass("disabled");
		} else {
			jQuery(".Slick-Next-Quote").removeClass("disabled");
		}
	});

	

	/**
	 * Tigger About Team Popup based on URL request
	 */
	var hash = window.location.hash;
	if (jQuery('.block-acf-about-slider').length && hash && hash.startsWith('#team-')) {
		var teamSlug = hash.replace('#team-', '');
		var memberDiv = jQuery(".img-text-slide [data-member-name='" + teamSlug + "']"),
			parentScroll = memberDiv.parents('.block-acf-about-slider');
		if (memberDiv.length) {
			jQuery('html, body').animate({
				scrollTop: parentScroll.offset().top
			}, 1500);
			memberDiv.trigger('click');
		}
	}


});

//Mega Menu Js
jQuery(document).ready(function() {
    
        var $megaDropdown = jQuery('.mega-dropdown');
        var $customSolution = jQuery('.main-menu-item.custom-solution');
        var $solutionMobile = jQuery('#solution-mobile');
		var $gradient = jQuery('.gradient-header');
		var $tranparentheader = jQuery('.tranparent-header');

        $megaDropdown.hide();

        jQuery('.main-menu-item').on("mouseenter", function(e) {
			jQuery('.menu-overlay').hide();
            if (jQuery(this).hasClass('custom-solution')) {
                $megaDropdown.slideDown(350);
				
				jQuery('.menu-overlay').show();
				jQuery('header').addClass('white-header');

            } else {
                $megaDropdown.fadeOut();
				 //jQuery('header').removeClass('white-header');
            }
        }); 
		 
        $megaDropdown.on("mouseleave", function() {
			jQuery('.menu-overlay').hide();
            $megaDropdown.fadeOut(); 

        });

		$gradient.on("mouseleave", function() {
			jQuery('.menu-overlay').hide();
			jQuery('header').removeClass('white-header');
        });

		$tranparentheader.on("mouseleave", function() {
			jQuery('.menu-overlay').hide();
			jQuery('header').removeClass('white-header');

        });

		if (jQuery(window).width() > 767) {
		//$solutionMobile.hide();
        $customSolution.on("click", function(e) {
            $solutionMobile.toggle();
            e.stopPropagation();
        });

		$gradient.on("click", function() {
			jQuery('header').removeClass('white-header');

        });
		
		$tranparentheader.on("click", function() {
			jQuery('header').removeClass('white-header');

        });
	}
    
});

//Pricing Cal JS
jQuery(document).ready(function () {
	var updatePricePlaceholder = function (dataPrice, dataRange) {
		var minplusrange = dataPrice * dataRange;
		var formattedMinPlusRange = minplusrange.toLocaleString('en-US');

		if (jQuery('#switchYes:checked').val() === 'Yes') {
			var multipliedPrice = dataPrice * 3;
			var multipliedRange = dataRange * 3;
			var Totalprice = minplusrange * 3;

			jQuery('#price-input-full-cost').attr('placeholder', '$' + Totalprice.toLocaleString('en-US'));
			jQuery('#price-input-pre-acc').attr('placeholder', '$' + multipliedPrice.toLocaleString('en-US'));
		} else {
			jQuery('#price-input-full-cost').attr('placeholder', '$' + formattedMinPlusRange);
			jQuery('#price-input-pre-acc').attr('placeholder', '$' + dataPrice.toLocaleString('en-US'));
		}
	};

	jQuery('#price-range').on('change', function () {
		var selectedOption = jQuery(this).find('option:selected');
		var dataPrice = selectedOption.data('price');
		var dataRange = selectedOption.data('range');
		updatePricePlaceholder(dataPrice, dataRange);
	});

	jQuery('input[name="switchPlan"]').change(function () {
		var selectedOption = jQuery('#price-range option:selected');
		var dataPrice = selectedOption.data('price');
		var dataRange = selectedOption.data('range');
		updatePricePlaceholder(dataPrice, dataRange);

		var selectedValue = jQuery('input[name="switchPlan"]:checked').val();
		if (selectedValue === 'Yes') {
			jQuery('label[for="switchYes"]').addClass('active');
			jQuery('label[for="switchNo"]').removeClass('active');
		} else if (selectedValue === 'No') {
			jQuery('label[for="switchYes"]').removeClass('active');
			jQuery('label[for="switchNo"]').addClass('active');
		}
	});
});

jQuery(document).ready(function() { 
	jQuery('.see-all-post').addClass('category-click active');
});  


var stickyHeaders = (function() {

    var $window = jQuery(window),
        $stickies;
  
    var load = function(stickies) {
  
      if (typeof stickies === "object" && stickies instanceof jQuery && stickies.length > 0) {
  
        $stickies = stickies.each(function() {
  
          var $thisSticky = jQuery(this).wrap('<div class="followWrap" />');
    
          $thisSticky
              .data('originalPosition', $thisSticky.offset().top - 72)
              .data('originalHeight', $thisSticky.outerHeight())
                .parent()
                .height($thisSticky.outerHeight()); 			  
        });
  
        $window.off("scroll.stickies").on("scroll.stickies", function() {
            _whenScrolling();		
        });
      }
    };
  
    var _whenScrolling = function() {
  
      $stickies.each(function(i) {			
  
        var $thisSticky = jQuery(this),
            $stickyPosition = $thisSticky.data('originalPosition');
  
        if ($stickyPosition <= $window.scrollTop() && jQuery(window).scrollTop() < 3200) {        
          
          var $nextSticky = $stickies.eq(i + 1),
              $nextStickyPosition = $nextSticky.data('originalPosition') - $thisSticky.data('originalHeight');
  
          $thisSticky.addClass("fixed");
  
          if ($nextSticky.length > 0 && $thisSticky.offset().top >= $nextStickyPosition) {
  
            //$thisSticky.addClass("absolute").css("top", $nextStickyPosition);
          }
  
        } else {
          
          var $prevSticky = $stickies.eq(i - 1);
  
          $thisSticky.removeClass("fixed");
  
          if ($prevSticky.length > 0 && $window.scrollTop() <= $thisSticky.data('originalPosition') - $thisSticky.data('originalHeight') ) {
  
            //$prevSticky.removeClass("absolute").removeAttr("style");
          }
        }
        if ($stickyPosition > $window.scrollTop()) { 
            var $thisSticky = jQuery(this);
            $thisSticky.removeClass("fixed");
        }
      });
    };
  
    return {
      load: load
    };
  })();
  
  jQuery(function() {
    stickyHeaders.load(jQuery(".followMeBar"));
  });