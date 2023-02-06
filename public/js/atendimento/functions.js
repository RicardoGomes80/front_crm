/*! jRespond.js v 0.10 | Author: Jeremy Fields [jeremy.fields@viget.com], 2013 | License: MIT */
!function(a,b,c){"object"==typeof module&&module&&"object"==typeof module.exports?module.exports=c:(a[b]=c,"function"==typeof define&&define.amd&&define(b,[],function(){return c}))}(this,"jRespond",function(a,b,c){"use strict";return function(a){var b=[],d=[],e=a,f="",g="",i=0,j=100,k=500,l=k,m=function(){var a=0;return a="number"!=typeof window.innerWidth?0!==document.documentElement.clientWidth?document.documentElement.clientWidth:document.body.clientWidth:window.innerWidth},n=function(a){if(a.length===c)o(a);else for(var b=0;b<a.length;b++)o(a[b])},o=function(a){var e=a.breakpoint,h=a.enter||c;b.push(a),d.push(!1),r(e)&&(h!==c&&h.call(null,{entering:f,exiting:g}),d[b.length-1]=!0)},p=function(){for(var a=[],e=[],h=0;h<b.length;h++){var i=b[h].breakpoint,j=b[h].enter||c,k=b[h].exit||c;"*"===i?(j!==c&&a.push(j),k!==c&&e.push(k)):r(i)?(j===c||d[h]||a.push(j),d[h]=!0):(k!==c&&d[h]&&e.push(k),d[h]=!1)}for(var l={entering:f,exiting:g},m=0;m<e.length;m++)e[m].call(null,l);for(var n=0;n<a.length;n++)a[n].call(null,l)},q=function(a){for(var b=!1,c=0;c<e.length;c++)if(a>=e[c].enter&&a<=e[c].exit){b=!0;break}b&&f!==e[c].label?(g=f,f=e[c].label,p()):b||""===f||(f="",p())},r=function(a){if("object"==typeof a){if(a.join().indexOf(f)>=0)return!0}else{if("*"===a)return!0;if("string"==typeof a&&f===a)return!0}},s=function(){var a=m();a!==i?(l=j,q(a)):l=k,i=a,setTimeout(s,l)};return s(),{addFunc:function(a){n(a)},getBreakpoint:function(){return f}}}}(this,this.document));

var $ = jQuery.noConflict();

/*// Scrolled
$.fn.scrollEnd = function(callback, timeout) {
	$(this).scroll(function(){
		let container = $(this);
		if (container.data('scrollTimeout')) {
			clearTimeout(container.data('scrollTimeout'));
		}
		container.data('scrollTimeout', setTimeout(callback,timeout));
	});
};*/

(function() {
	let lastTime = 0;
	let vendors = ['ms', 'moz', 'webkit', 'o'];
	for(let x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
		window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
		window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
									|| window[vendors[x]+'CancelRequestAnimationFrame'];
	}

	if (!window.requestAnimationFrame)
		window.requestAnimationFrame = function(callback, element) {
			let currTime = new Date().getTime();
			let timeToCall = Math.max(0, 16 - (currTime - lastTime));
			let id = window.setTimeout(function() { callback(currTime + timeToCall); },
			  timeToCall);
			lastTime = currTime + timeToCall;
			return id;
		};

	if (!window.cancelAnimationFrame)
		window.cancelAnimationFrame = function(id) {
			clearTimeout(id);
		};
}());



function debounce(func, wait, immediate) {
	let timeout, args, context, timestamp, result;
	return function() {
		context = this;
		args = arguments;
		timestamp = new Date();
		let later = function() {
			let last = (new Date()) - timestamp;
			if (last < wait) {
				timeout = setTimeout(later, wait - last);
			} else {
				timeout = null;
				if (!immediate) result = func.apply(context, args);
			}
		};
		let callNow = immediate && !timeout;
		if (!timeout) {
			timeout = setTimeout(later, wait);
		}
		if (callNow) result = func.apply(context, args);
		return result;
	};
}

/*
function onScrollSliderParallax() {
	SEMICOLON.slider.sliderParallax();
	SEMICOLON.slider.sliderElementsFade();
}
*/

var SEMICOLON = SEMICOLON || {};

(function($){

	// USE STRICT
	"use strict";

	SEMICOLON.initialize = {

		
		execFunc: function( functionName, context ) {
			let args = Array.prototype.slice.call( arguments, 2 ),
				namespaces = functionName.split("."),
				func = namespaces.pop();

			for( let i = 0; i < namespaces.length; i++ ) {
				context = context[namespaces[i]];
			}

			if( typeof context[func] !== 'undefined' ) {
				return context[func].apply( context, args );
			} else {
				console.log( functionName + ' Function does not exist' );
			}
		},

		execPlugin: function( element, settings, available ) {
			window.scwEvents = window.scwEvents || {};

			let pluginActive = false,
				pluginLinkingInterval;

			if( available ) {

				if( settings.trigger && !scwEvents[settings.trigger] ) {
					$window.trigger( settings.trigger );
					scwEvents[settings.trigger] = true;
				}

				if( settings.execfn ) {
					SEMICOLON.initialize.execFunc( settings.execfn, window, element );
				}

				if( settings.class ) {
					$body.addClass( settings.class );
				}

			} else {
				if( settings.trigger && !scwEvents[settings.trigger] ) {
					pluginLinkingInterval = setInterval( function plugFn(){
						let pluginFnExec = Function( 'return ' + settings.pluginfn )();
						if( pluginFnExec ) {
							$window.trigger( settings.trigger );
							scwEvents[settings.trigger] = true;
							clearInterval( pluginLinkingInterval );
						}
						return plugFn;
					}(), 1000);
				} else {
					pluginActive = true;
				}

				if( settings.execfn ) {
					if( settings.trigger && !pluginActive ) {
						$window.on( settings.trigger, function(){
							SEMICOLON.initialize.execFunc( settings.execfn, window, element );
						});
					} else {
						SEMICOLON.initialize.execFunc( settings.execfn, window, element );
					}
				}

				if( settings.class ) {
					$body.addClass( settings.class );
				}
			}
		},

		jsLinking: function( element, settings ) {
			if( element.length < 1 ){
				return false;
			}

			if( settings.hiddendisable && ( element.filter(':hidden').length == element.length ) ) {
				return false;
			}

			let pluginFnExec = Function( 'return ' + settings.pluginfn )(),
				jsPath = 'js/', file,
				disableAJAX = false;

			if( typeof scwJsPath !== 'undefined' ) {
				jsPath = scwJsPath + '/';
			}

			if( typeof scwDisableJsAJAX !== 'undefined' && scwDisableJsAJAX === true ) {
				disableAJAX = true;
			}

			if( /^(f|ht)tps?:\/\//i.test( window.decodeURIComponent( settings.file ) ) ) {
				file = settings.file;
			} else {
				file = jsPath + settings.file;
			}

			if( pluginFnExec ) {
				SEMICOLON.initialize.execPlugin( element, settings, true );
			} else {
				if( !disableAJAX ) {
					$.ajax({
						url: file,
						dataType: "script",
						cache: true,
						crossDomain: true,
						timeout: 5000,
					}).done(function() {
						SEMICOLON.initialize.execPlugin( element, settings, false );
					}).fail(function() {
						console.log( settings.error );
					});
				} else {
					console.log( settings.error );
				}
			}
		},

		functions: function( settings ){
			let element, parent, item;

			if( typeof settings.element === 'object' && settings.element !== null ) {
				if( settings.element.parent !== 'undefined' ) {
					parent = settings.element.parent;
				}
				if( settings.element.el !== 'undefined' ) {
					settings.element = settings.element.el;
				}
			}

			if( settings.element ) {
				item = settings.element;
			} else {
				item = settings.default;
			}

			if( parent === 'object' ) {
				element = parent.find( item );
			} else {
				element = $( item );
			}

			this.jsLinking( element, settings );
		},

		lightbox: function( element ){
			
		},
	};


	
	SEMICOLON.widget = {		

		animations: function( element ){
			
		},

		loadFlexSlider: function( element ){
			let settings = {
				element: element,
				default: '.fslider',
				file: 'plugins.flexslider.js',
				error: 'plugins.flexslider.js: Plugin could not be loaded',
				execfn: 'SEMICOLON_flexSliderInit',
				pluginfn: '$().flexslider',
				trigger: 'pluginFlexSliderReady',
				class: 'has-plugin-flexslider'
			};

			SEMICOLON.initialize.functions( settings );
		},
	};

	SEMICOLON.documentOnLoad = {

		init: function(){
			SEMICOLON.widget.loadFlexSlider();			
		}
	};

	let $window = $(window),
		windowScrT,
		$body = $('body'),
		$wrapper = $('#wrapper'),
		$header = $('#header'),
		$headerWrap = $('#header-wrap'),
		$headerInc = $('.include-header'),
		/*defLogoH	= $header.attr('data-logo-height') || 100,
		stickyLogoH = $header.attr('data-sticky-logo-height') || 60,
		mobileSticky = $header.attr('data-mobile-sticky') || 'false',
		mobileLogoH = $header.attr('data-mobile-logo-height') || Number( defLogoH ),
		mobileStickyLogoH = $header.attr('data-mobile-sticky-logo-height') || Number( stickyLogoH ),
		defMenuP	= $header.attr('data-menu-padding') || 39,
		stickyMenuP = $header.attr('data-sticky-menu-padding') || 19,
		headerSizeCustom = !$header.hasClass('header-size-lg') && !$header.hasClass('header-size-md') && !$header.hasClass('header-size-sm') && !$header.hasClass('header-size-custom'),
		stickyShrink = $header.attr('data-sticky-shrink') || 'true',
		stickyShrinkOffset = $header.attr('data-sticky-shrink-offset') || 300,
		primaryMenu = $('.primary-menu'),
		primaryMenuMainItems = primaryMenu.find('.menu-container:not(mobile-primary-menu):not(.custom-spacing)').children('.menu-item').children('.menu-link'),
		$headerWrapClone = '',
		initialHeaderWrapHeight = $headerWrap.outerHeight(),
		$headerRow = $headerWrap.find('.header-row:eq(0)'),
		$content = $('#content'),
		//$footer = $('#footer'),
		windowWidth = $window.width(),
		oldHeaderClasses = $header.attr('class'),
		oldHeaderWrapClasses = $headerWrap.attr('class'),
		stickyMenuClasses = $header.attr('data-sticky-class'),
		responsiveMenuClasses = $header.attr('data-responsive-class'),*/
		logo = $('#logo'),
		/*defaultLogo = logo.find('.standard-logo'),
		defaultLogoWidth = defaultLogo.find('img').outerWidth(),
		retinaLogo = logo.find('.retina-logo'),
		defaultLogoImg = defaultLogo.find('img').attr('src'),
		retinaLogoImg = retinaLogo.find('img').attr('src'),
		defaultDarkLogo = defaultLogo.attr('data-dark-logo'),
		retinaDarkLogo = retinaLogo.attr('data-dark-logo'),
		defaultStickyLogo = defaultLogo.attr('data-sticky-logo'),
		retinaStickyLogo = retinaLogo.attr('data-sticky-logo'),
		defaultMobileLogo = defaultLogo.attr('data-mobile-logo'),
		retinaMobileLogo = retinaLogo.attr('data-mobile-logo'),
		topSearchTimeOut,
		$pagemenu = $('#page-menu'),
		$pageMenuClone = '',
		$pageMenuWrap = $pagemenu.find('#page-menu-wrap'),
		$onePageMenuEl = $('.one-page-menu'),
		$portfolio = $('.portfolio'),
		$shop = $('.shop'),
		$slider = $('#slider'),
		$sliderParallaxEl = $('.slider-parallax'),
		$sliderElement = $('.slider-element'),
		swiperSlider = '',
		$pageTitle = $('#page-title'),
		$topSearch = $('.top-search-form'),
		$topCart = $('#top-cart'),
		$topSocialEl = $('#top-social').find('li'),
		$goToTopEl = $('#gotoTop'),
		googleMapsAPI = 'YOUR-API-KEY',
		xScrollPosition,
		yScrollPosition,
		sliderParallaxEl = document.querySelector('.slider-parallax'),
		sliderParallaxElCaption = document.querySelector('.slider-parallax .slider-caption'),
		sliderParallaxElInner = document.querySelector('.slider-inner'),*/
		headerOffset = 0,
		headerWrapOffset = 0,
		pageMenuOffset = 0,
		resizeTimer;


	$window.on( 'load', SEMICOLON.documentOnLoad.init );

	$window.on( 'resize', function() {
		let thisWindow = $(this);
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() {
			if ( thisWindow.width() !== windowWidth ) {
				SEMICOLON.documentOnResize.init();
			}
		}, 250);
	});

})(jQuery);