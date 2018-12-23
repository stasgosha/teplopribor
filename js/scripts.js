$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Sliders
	$('.innovations-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		vertical: true,
		verticalSwiping: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false,
					dots: true,
					vertical: false,
					verticalSwiping: false
				}
			}
		]
	});

	$('.innovations-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		$('.innovations-list li:nth-child(' + (nextSlide + 1) +')').addClass('current').siblings().removeClass('current');
	});

	$('.innovations-list li').click(function(){
		$('.innovations-slider').slick('slickGoTo', $(this).data('slide'));
		$(this).addClass('current').siblings().removeClass('current');
	});

	// Product Images
	$('[data-big-image]').click(function(){
		$('.big-image img').attr('src', $(this).data('big-image'));
		$(this).addClass('selected').siblings().removeClass('selected');
	});

	$('[data-big-image]:first-child').click();

	// Products Slider
	var productsSliderFlag = false;

	function productsSliderInit(){
		if ( $(window).width() <= 767 && !productsSliderFlag) {
			$('.products-slider').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false
			});

			productsSliderFlag = true;
		} else if($(window).width() > 767 && productsSliderFlag) {
			$('.products-slider').slick('unslick');
			productsSliderFlag = false;
		}
	};

	var recommendationsSliderFlag = false;

	function recommendationsSliderInit(){
		if ( $(window).width() <= 991 && !recommendationsSliderFlag) {
			$('.recommendations-slider').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				responsive: [
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 2
						}
					},
					{
						breakpoint: 575,
						settings: {
							slidesToShow: 1
						}
					}
				]
			});

			recommendationsSliderFlag = true;
		} else if($(window).width() > 991 && recommendationsSliderFlag) {
			$('.recommendations-slider').slick('unslick');
			recommendationsSliderFlag = false;
		}
	};

	var accessoriesSliderFlag = false;

	function accessoriesSliderInit(){
		if ( $(window).width() <= 767 && !accessoriesSliderFlag) {
			$('.accessories-slider').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false
			});

			accessoriesSliderFlag = true;
		} else if($(window).width() > 767 && accessoriesSliderFlag) {
			$('.accessories-slider').slick('unslick');
			accessoriesSliderFlag = false;
		}
	};

	if ( $(window).width() <= 767 ){
		productsSliderInit();
		accessoriesSliderInit();
	}

	if ( $(window).width() <= 991 ){
		productsSliderInit();
		recommendationsSliderInit();
	}

	$(window).resize(function(){
		productsSliderInit();
		recommendationsSliderInit();
		accessoriesSliderInit();
	});

	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab].current").click();

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select select') );

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 90 ){
			$('.header').addClass('sticky');
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 90){
			$('.header').removeClass('sticky');
			isSticky = false;
		}
	});

	// Parallax
	$('[id*="parallax-viewport"]').each(function(){
		var scene = document.getElementById( $(this).attr('id') );
		var parallaxInstance = new Parallax(scene);
	});

	// wow.js
	new WOW().init();

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li, .tabs-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});