/**
 * common.js
 *
 *  version --- 1.0
 *  updated --- 2017/11/30
 */


/* !stack ------------------------------------------------------------------- */
// jQuery(document).ready(function($) {
//   var os = function (){
//       var ua = navigator.userAgent,
//       isWindowsPhone = /(?:Windows Phone)/.test(ua),
//       isSymbian = /(?:SymbianOS)/.test(ua) || isWindowsPhone,
//       isAndroid = /(?:Android)/.test(ua),
//       isFireFox = /(?:Firefox)/.test(ua),
//       isChrome = /(?:Chrome|CriOS)/.test(ua),
//       isTablet = /(?:iPad|PlayBook)/.test(ua) || (isAndroid && !/(?:Mobile)/.test(ua)) || (isFireFox && /(?:Tablet)/.test(ua)),
//       isPhone = /(?:iPhone)/.test(ua) && !isTablet,
//       isPc = !isPhone && !isAndroid && !isSymbian;
//       return {
//           isTablet: isTablet,
//           isPhone: isPhone,
//           isAndroid: isAndroid,
//           isPc: isPc
//       };	
//   }();
//   if (os.isAndroid || os.isPhone) {  
//       $('head').append('<meta name="viewport" content="width=375,user-scalable=no">');
//   } else if (os.isTablet) {
//       $('head').append('<meta name="viewport" content="width=1024,user-scalable=no">');
//       $('body').addClass('isTablet');
//   } else if (os.isPc) {
//       $('head').append('<meta name="viewport" content="width=device-width,user-scalable=no">');
//   }
// });

/* !isUA -------------------------------------------------------------------- */
var isUA = (function(){
	var ua = navigator.userAgent.toLowerCase();
	indexOfKey = function(key){ return (ua.indexOf(key) != -1)? true: false;}
	var o = {};
	o.ie      = function(){ return indexOfKey("msie"); }
	o.fx      = function(){ return indexOfKey("firefox"); }
	o.chrome  = function(){ return indexOfKey("chrome"); }
	o.opera   = function(){ return indexOfKey("opera"); }
	o.android = function(){ return indexOfKey("android"); }
	o.ipad    = function(){ return indexOfKey("ipad"); }
	o.ipod    = function(){ return indexOfKey("ipod"); }
	o.iphone  = function(){ return indexOfKey("iphone"); }
	return o;
})();


/* !pageScroll -------------------------------------------------------------- */
jQuery.easing.easeInOutCubic = function (x, t, b, c, d) {
	if ((t/=d/2) < 1) return c/2*t*t*t + b;
	return c/2*((t-=2)*t*t + 2) + b;
}; 

$(window).on('load resize',function(){
	//var scrolltop = $('#headerIn').height(); //header fixed
	$('a.scroll, .scroll a').each(function(){
		$(this).unbind('click').bind("click keypress",function(e){
			e.preventDefault();
			var target  = $(this).attr('href');
			//var targetY = $(target).offset().top-scrolltop; //header fixed
			var targetY = $(target).offset().top;
			var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
			$(parent).animate(
				{scrollTop: targetY },
				400
			);
			return false;
		});
	});
});





/* !common --------------------------------------------------- */
$(function(){

	$('.productFan .example li:not(.plus) .ico img').each(function(){
		var $width = $(this).attr('width'),
			$height = $(this).attr('height'),
			$ratio = $width / $height;
		if($ratio < 1){
			$(this).addClass('lengthwise');
		}

	});

	var wow = new WOW({
	    boxClass: 'wow',
	    animateClass: 'animated',
	    offset: 0,
	    mobile: true,
	    live: true
	});
	wow.init();
	
	$('.pageTop a').click(function(){
		$('html,body').animate({scrollTop: 0}, 'slow','swing');
		return false;
	});
	var scrollTop = 0;
  $(window).scroll(function(){
	scrollTop = $(window).scrollTop();
	if(scrollTop > 0) {
		$('body').addClass('fix');
	}else{
		$('body').removeClass('fix');
	}
  });
	//スマホグローバルナビ
	$(".btnMenu a,.overlay,.navClose img").click(function(){
		if($(".btnMenu").hasClass('active')){
			$(".btnMenu").removeClass('active');
			$('header nav').removeClass('active');
			$('.overlay').stop().fadeOut(200);
			$('body').removeClass('menuOpen');
			$('#wrapper').css('top','0');
			$('html,body').animate(
			  {scrollTop: $('.overlay').text() },
			  10
			);
		}else{
			$(".btnMenu").addClass('active');
			$('header nav').addClass('active');
			$('.overlay').stop().fadeIn(200,function(){
			  $('body').addClass('menuOpen')
			  $('#wrapper').css('top','-'+scrollTop+'px');
			  $('.overlay').text(scrollTop);
			});
		}
	});

	$(".btnFixedTel,.telFixedOver,.telFixedClose").click(function(){
		if($('.telFixed').hasClass('active')){
			$('.telFixed').removeClass('active').stop().fadeOut(200);
		}else{
			$('.telFixed').addClass('active').stop().fadeIn(200);
		}
		return false;
	});


	$(".closeBtn a").click(function(){
		$(this).parent().parent().find('.spBox').addClass('open').stop().fadeIn(200);
		$(this).parent().stop().fadeOut(200);
		return false;
	});

	$("input[name=input_clear]").change( function (){
		$('.sortItem').find('input:checkbox').prop('checked',false);
		$(this).prop('checked',false);
		$('.js-sort-list li').addClass('is-show').show();
		$('.js-sort-total').text($('.js-sort-list li.is-show').length);
	});


	$('.js-sort-target').find(':checkbox').each(function(){
		var _class = $(this).attr('id');
		var target_count = $('.js-sort-list').find('.'+_class).length;
		if(target_count == 0){
			$(this).parent('li').remove();
		}
	});

	$('.js-sort-target').find(':checkbox').click(function(){
		$('.js-sort-list li').removeClass('is-show').hide();
		var checked = 0;
		$('.js-sort-target').find(':checkbox').each(function(){
			if($(this).prop('checked')){
				var _class = $(this).attr('id');
				$('.js-sort-list').find('.'+_class).addClass('is-show').show();
				checked++;
			}
		});
		if(checked == 0){
			$('.js-sort-list li').addClass('is-show').show();
		}
		$('.js-sort-total').text($('.js-sort-list li.is-show').length);
	});


	$('.biggerlink').biggerlink();
	$('.bgImg').each(function(){
		$(this).css({backgroundImage: 'url('+$(this).data('bg')+')'});
	});
	navLink();


	$('.selectP').each(function(){
		var _txt = $(this).find('.selectTxt');
		var _ul = $(this).find('ul');
		var _list = $(this).find('li');
		_txt.click(function(){
			_ul.stop().slideToggle(200);
		});
		_list.click(function(){
			_ul.stop().slideToggle(200);
			_txt.text($(this).text());
		});
	});

	$('.campaignDtSlider').slick({
		slidesToShow: 4,
		slidesToScroll: 1, 
		autoplay: false, 
		arrows:true, 
		dots:true, 
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			}
		}]
	});

	$('.js_toggle').click(function(){
		$(this).toggleClass('is_active');
		$(this).next().stop().slideToggle(200);
	});


	var data = {
	    id: '',
	    text: '選択してください'
	};
	var newOption1 = new Option(data.text, data.id, true, true),
		newOption2 = new Option(data.text, data.id, true, true);
	$('select[name=your-product01]').prepend(newOption1).trigger('change');
	$('select[name=your-product02]').prepend(newOption2).trigger('change');

	

	// $('.formReserveSelect option').each(function(){
	// 	if($(this).text() == '選択してください'){
	// 		$(this).text('日付を選択してください');
	// 	}
	// });
	$('.formDateSelect option').each(function(){
		if($(this).text() == '選択してください'){
			$(this).text('時間を選択してください');
		}
	});

});


var navLink = function(){
	//var scrolltop = $('#headerIn').height(); //header fixed
	$('a.navLink').each(function(){
		$(this).unbind('click').bind("click keypress",function(e){
			$(".btnMenu").removeClass('active');
			$('header nav').removeClass('active');
			$('.overlay').stop().fadeOut(200);
			$('body').removeClass('menuOpen');
			$('#wrapper').css('top','0');
			$('html,body').animate(
			  {scrollTop: $('.overlay').text() },
			  10
			);

			e.preventDefault();
			var url  = $(this).attr('href');
			var target = url.substr(url.indexOf('#'));
			//var targetY = $(target).offset().top-scrolltop; //header fixed
			var targetY = $(target).offset().top;
			var parent  = ( isUA.opera() )? (document.compatMode == 'BackCompat') ? 'body': 'html' : 'html,body';
			$(parent).animate(
				{scrollTop: targetY },
				400
			);
			
			return false;
		});
	});
}

$(function(){

	// $(".formReserveSelect").change( function (){
	// 	if ($(this).find('option:selected').val() == 'それ以外') {
	// 	    $(".formReserveOther input").val('');
	// 	    $(".formReserveOther").slideDown();
    //     } else {
	// 	    $(".formReserveOther input").val(' ');
    //         $(".formReserveOther").slideUp();
    //     }
	// })

    $(window).on('resize',function(){
        // if(!$('.insSlick').hasClass('is_slick')){
        //     if($(window).width() > 767) { 
        //         $('.insSlick').addClass('is_slick').slick({
        //             dots: false,
        //             arrows:false,
        //             autoplay:true,
        //             autoplaySpeed:0,
        //             cssEase: 'linear',
        //             speed:5000,
        //             fade:false,
        //             touchMove:false,
        //             pauseOnHover:true,
        //             // centerMode: true,
        //             variableWidth: true,
        //         });
        //     }
        // }else { 
        //     if($(window).width() < 768) { 
        //         $('.insSlick').removeClass('is_slick').slick('unslick');
        //     }
        // } 
        if(!$('.eventSlider').hasClass('is_slick')){
            if($(window).width() > 767) { 
                $('.eventSlider').on('init', function(event, slick) {
                  $(this).parents('.pro-img').find('.current').text(slick.currentSlide + 1);
                  $(this).parents('.pro-img').find('.total').text(slick.slideCount);
                });
                $('.eventSlider').addClass('is_slick').slick({
                  dots: false,
                  arrows:true,
                  autoplay:false,
                  infinite: true,
                  centerMode: true,
                  variableWidth: true,
                })
                .on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                  $(this).parents('.pro-img').find('.current').text(nextSlide + 1);
                });
            }
        }else { 
            if($(window).width() < 768) { 
                $('.eventSlider').removeClass('is_slick').slick('unslick');
            }
        } 

    });
    $(window).trigger('resize',[true]);

    $('.eventSlider').each(function(){
        if(len < 2) { 
            $(this).find('.slick-dots').hide();
            $('.progresses').hide();
            if($('.eventSlider').hasClass('is_slick')){
            	$('.eventSlider').removeClass('is_slick').slick('unslick');
            }
            $(this).addClass('slick_flex');
        } 

        $(this).find('.slick-slide').matchHeight();
    });

    $('.requiredIpt input:radio').click(function(){
        check1();
    });
    $('.requiredIpt select').change(function(){
        check1();
    });
    $('.requiredIpt input[type=text], .requiredIpt input[type=email], .requiredIpt input[type=tel], .eventForm .requiredIpt textarea, .formReserveOther textarea').blur(function(){
        check1();
    });
    $('.requiredIpt input[type=checkbox]').change(function(){
        check1();
    }); // 追加: チェックボックスの変更を監視
    $('input[name="your-date"]').datepicker({
    	"dateFormat":"yy/mm/dd",
    	"controlType":"slider",
    	"addSliderAccess":true,
    	"sliderAccessArgs":{
    		"touchonly":true
    	},
    	"stepHour":1,
    	"stepMinute":1,
    	"stepSecond":1,
    	"minDate":"1",
    	"maxDate":"1+13",
    	onClose: function() {
	        check1();
	    }
    });

});
function check1(){
    var flag = 0;
    // ラジオボタンのチェック
    $('.requiredIpt input[name=radio_visit]').each(function(){
        if ($('.requiredIpt input[name=radio_visit]:checked').val()) {
            $('.requiredIpt input[name=radio_visit]').removeClass('error');
            return false;
        } else {
            flag = 1;
            $('.requiredIpt input[name=radio_visit]').addClass('error');
        }
    });
    $('.requiredIpt input[name=radio_land]').each(function(){
        if($('.requiredIpt input[name=radio_land]:checked').val()){
	        $('.requiredIpt input[name=radio_land]').removeClass('error');
	        return false;
        }else{
        	flag = 1;
	        $('.requiredIpt input[name=radio_land]').addClass('error');
        }
    });
    $('.requiredIpt input[name=radio_times]').each(function(){
        if($('.requiredIpt input[name=radio_times]:checked').val()){
	        $('.requiredIpt input[name=radio_times]').removeClass('error');
	        return false;
        }else{
        	flag = 1;
	        $('.requiredIpt input[name=radio_times]').addClass('error');
        }
    });
    $('.requiredIpt input[name=radio_charge]').each(function(){
        if($('.requiredIpt input[name=radio_charge]:checked').val()){
	        $('.requiredIpt input[name=radio_charge]').removeClass('error');
	        return false;
        }else{
        	flag = 1;
	        $('.requiredIpt input[name=radio_charge]').addClass('error');
        }
    });
    // チェックボックスのチェック
$('.requiredIpt input[type=checkbox]').each(function () {
    // チェックされているチェックボックスの数を取得
    if ($('.requiredIpt input[type=checkbox]:checked').length > 0) {
        // 少なくとも1つチェックされている場合
        $('.requiredIpt input[type=checkbox]').removeClass('error');
        return false; // ループを終了
    } else {
        // すべて未チェックの場合
        flag = 1;
        $('.requiredIpt input[type=checkbox]').addClass('error');
    }
});



    //商品選択
    if($('.requiredIpt select[name=your-product01]').val() == '' && $('.requiredIpt select[name=your-product02]').val() == ''){
        flag = 1;
        // $('.requiredIpt select[name=your-product01]').addClass('error');
        // $('.requiredIpt select[name=your-product02]').addClass('error');
    }else{
    	// $('.requiredIpt select[name=your-product01]').removeClass('error');
        // $('.requiredIpt select[name=your-product02]').removeClass('error');
    }

    //ご予約日時
    if($('.datepicker').length > 0){
    	if($('.datepicker').val() == ''){
	        flag = 1;
	        // $('.datepicker').addClass('error');
	    }else{
	        // $('.datepicker').removeClass('error');
	    }
    }
    
    if($('.formDateSelect').length > 0){
	    if($('.formDateSelect').val() == null){
	        flag = 1;
	        // $('.formDateSelect').addClass('error');
	    }else{
	        // $('.formDateSelect').removeClass('error');
	    }
    }

    //ご住所
    if($('.requiredIpt .formRegionSelect').length > 0) {
	    if($('.requiredIpt .formRegionSelect').val() == null){
	        flag = 1;
	        // $('.formRegionSelect').addClass('error');
	    }else{
	        // $('.formRegionSelect').removeClass('error');
	    }
    }

    //建設予定地 
    if($('.requiredIpt .formRegionSelect02').length > 0){
	    if($('.requiredIpt .formRegionSelect02').val() == null){
	        flag = 1;
	        // $('.formRegionSelect02').addClass('error');
	    }else{
	        // $('.formRegionSelect02').removeClass('error');
	    }
    }

    //気になる商品 
    if($('.requiredIpt .formFavSelect').val() == ''){
        flag = 1;
        // $('.formFavSelect').addClass('error');
    }else{
        // $('.formFavSelect').removeClass('error');
    }


    $('.requiredIpt input[type=text]').each(function(){
        if($(this).val() == ''){
            flag = 1;
            // $(this).addClass('error');
        }else{
            // $(this).removeClass('error');

            //ふりがな
            if($(this).attr('name') == 'your-kana'){
            	var kana = $(this).val();
            	kana = kana.replace(/\s+/g, '');
            	if (!kana.match(/^[ア-ヶーぁ-ん]+$/u)) {
					flag = 1;
            		$(this).addClass('error');
				}else{
					$(this).removeClass('error');
				}
            }
        }
    });

    $('.requiredIpt input[type=email]').each(function(){
        if($(this).val() == ''){
            flag = 1;
            // $(this).addClass('error');
        }else{
            // $(this).removeClass('error');
            if(!$(this).val().match(/.+@.+\..+/)){
				flag = 1;
				$(this).addClass('error');
			}else{
				$(this).removeClass('error');
			}
        }
    });

    $('.requiredIpt input[type=tel]').each(function(){
        if($(this).val() == ''){
            flag = 1;
            // $(this).addClass('error');
        }else{
            // $(this).removeClass('error');
        }
    });

    $('.requiredIpt textarea').each(function(){
        if($(this).val() == ''){
            flag = 1;
            // $(this).addClass('error');
        }else{
            // $(this).removeClass('error');
        }
    });
    
    if(flag == 0){
        $('.formSubmit input[type=submit]').removeClass('disabled');
    }
    if(flag == 1){
        $('.formSubmit input[type=submit]').addClass('disabled');
    }

}

var gallerySwiper = function(){
	var gallerySwiper = new Swiper ('.galleryDtSwiper.swiper', {
		initialSlide :0,
		slidesPerView : 'auto',
	    calculateHeight : true,
	    centeredSlides:true,
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },

	    scrollbar: {
	      el: '.swiper-scrollbar',
	    },
	    breakpoints: {
	        768: {
				initialSlide :1,
	        }
	    },
	});
}

var campaignSwiper = function(){

	var campaignSwiper = new Swiper ('.campaignDtSwiper', {
		slidesPerView : 'auto',
	    calculateHeight : true,
	    centeredSlides:false,   
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },
	    
	    scrollbar: {
	      el: '.swiper-scrollbar',
	    },
	});

}

$(function(){

	var blogPopularSwiper = new Swiper ('.blogPopularList .swiper', {
	    loop: false,
			slidesPerView : 'auto',
			spaceBetween : 30,
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },
	    
	    scrollbar: {
	      el: '.swiper-scrollbar',
	    }
	});

	var eventSwiper = new Swiper('.eventDtWrap .swiper', {
      slidesPerView : '1',
      initialSlide :0,
			calculateHeight : true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
	    scrollbar: {
	      el: '.swiper-scrollbar',
	    },
	    breakpoints: {
	        768: {
				slidesPerView : 'auto',
	        }
	    },
    });

    var accessSwiper = new Swiper ('.accessSwiper.swiper', {
	    loop: false,
	    calculateHeight : true,
	    centeredSlides:false,   
		slidesPerView : '1',
		initialSlide :0,
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },
	    
	    scrollbar: {
	      el: '.swiper-scrollbar',
	    },
	    breakpoints: {
	        768: {
	    		centeredSlides:true,   
				slidesPerView : 'auto',
	        }
	    },
	});

    $('.accessSwiper').each(function(){
		var len = $(this).find('.swiper-slide').length;
		if(len == 1) {
	        $('.accessSwiper').parents('.ownerDtSec05').addClass('only_one');
	    }
	});

	var relatedSwiper = new Swiper ('.relatedSwiper.swiper', {
	    loop: false,
	    calculateHeight : true,
	    centeredSlides:false,   
		slidesPerView : '1',
		initialSlide :0,
	    navigation: {
	      nextEl: '.swiper-button-next',
	      prevEl: '.swiper-button-prev',
	    },
	    
	    scrollbar: {
	      el: '.swiper-scrollbar',
	    },
	    breakpoints: {
	        768: {
				initialSlide: 1,
	    		centeredSlides:true,   
				slidesPerView : 'auto',
	        }
	    },
	});

    $('.relatedSwiper').each(function(){
		var len = $(this).find('.swiper-slide').length;
		if(len == 1) {
	        $('.relatedSwiper').parents('.ownerDtSec05').addClass('only_one');
	    }
	});

	$('.galleryDtSwiper').each(function(){
		var len = $(this).find('.swiper-slide').length;
		if($(window).width() > 767) {
		    if(len < 3) {
		        $(this).find('.swiper-button').hide();
		        $(this).addClass('slick_flex');
		    }else{
		    	gallerySwiper();
		    }
	    }else{
	    	if(len < 1) {
		        $(this).find('.swiper-button').hide();
		        $(this).addClass('slick_flex');
		    }else{
		    	gallerySwiper();
		    }
	    }
	});

	$('.campaignDtSwiper').each(function(){
		
	   	var len = $(this).find('.swiper-slide').length;
		if($(window).width() > 767) {
		    if(len < 5) { 
		        $(this).find('.swiper-button').hide();
		        $(this).addClass('slick_flex');
		    }else{
		    	campaignSwiper();
		    }
	    }else{
	    	if(len < 3) { 
		        // $(this).find('.swiper-button').hide();
		        $(this).addClass('slick_flex');
		    }else{
		    	campaignSwiper();
		    } 
	    }
	}); 

	$(".tabWrap").each(function(){
		var $this = $(this), 
			$btn = $this.children('.tabCtrl').find('li'), 
			$box = $this.children('.tabBox');
		$btn.click(function(){
		  $btn.removeClass("onActive");
		  $(this).addClass("onActive");
		  var index = $btn.index(this);
		  $box.addClass('hide');
		  $box.eq(index).removeClass('hide');
		});
	}); 

	$(".tabWrapSelect").each(function(){
		var $this = $(this), 
			$btn = $this.find('select'), 
			$box = $this.find('.tabBox');
		$btn.change(function(){
		  var index = $btn.val();
		  $box.addClass('sp-hide');
		  $(index).removeClass('sp-hide');
		});
	}); 


	var len = 7;
	if($(window).width() < 767){
		len = 5;
	}

	$(window).on('resize',function(){
		if($(window).width() < 767){
			len = 5;
		}else{
			len = 7;
		}
	})

	$('.selectBox').each(function(){
		var $this = $(this),
			$select = $this.find('select'),
			$box = $(this).find('span');
			$select.change(function(){
				var val = $(this).find('option:selected').text();
				$box.text(val);
				// if(val.length > len){
				// 	$box.addClass('roll');
				// }else{
				// 	$box.removeClass('roll');
				// }
			});

			$select.each(function(){
				var val = $(this).find('option:selected').text();
				$box.text(val);
				// if(val.length > len){
				// 	$box.addClass('roll');
				// }else{
				// 	$box.removeClass('roll');
				// }
			});
	});

	$('[data-fancybox]').fancybox({
		toolbar  : false,
		smallBtn : true,
	});

	$('.js-add-span').each(function(){
		var _html = $(this).html(),
			arrays = _html.split('<br>'),
			_title = '';
		for (var i = 0; i < arrays.length; i++) {
			var _text = '';
			array = arrays[i].trim().split('');
			for (var j = 0; j < array.length; j++) {
				_text = _text + '<span>' + array[j] + '</span>';
			}
			_title = _title +  '<p>' + _text + '</p>';
		}
		$(this).html(_title);
	});

	$('.toggleWrap').each(function(){
		var $btn = $(this).find('.toggleBtn');
		var $box = $(this).find('.toggleBox');
		var $btnclose = $(this).find('.toggleBtnClose');
		$btn.unbind('click').click(function(){
		  if($(this).hasClass('open')){
			$(this).removeClass('open');
			$box.stop().slideUp(200);
			$btnclose.removeClass('open');
		  }else{
			$(this).addClass('open');
			$box.stop().slideDown(200,function(){
				muchHeight();
			});
			$btnclose.addClass('open');
		  }
		});
		$btnclose.unbind('click').click(function(){
			$(this).removeClass('open');
			$btn.removeClass('open');
			$box.stop().slideUp(200);
		});
	});

	$('.productSec01 .movieP').each(function() {
        var iframe = $(this).find('iframe');
        // iframe.after('<div class="moviePlay" id="play-button"><p class="moviePlayMaru"><span>Play</span></p></div>');
        $(this).find('.moviePlay').on('click', function() {
        	iframe[0].src += "?autoplay=1";
        	// iframe.playVideo();
            $(this).remove();
			ev.preventDefault();
        });
    });

    $('.js-tel').keyup(function(e){
    	// $hyphen = $(this).val().replace(/[^0-9]+/i,''); 
    	// $(this).val($hyphen);
    	$hyphen = $(this).val().split('');
    	$value = '';
    	for (var i = 0; i < $hyphen.length; i++) {
    		$value = $value + $hyphen[i].replace(/[^0-9]+/i,'');
    	}
    	$(this).val($value);
    }).blur(function(e){
    	$hyphen = $(this).val().split('');
    	$value = '';
    	for (var i = 0; i < $hyphen.length; i++) {
    		$value = $value + $hyphen[i].replace(/[^0-9]+/i,'');
    	}
    	$(this).val($value);
    });

    $('.js-max1000 textarea').keyup(function(e){
    	var $hyphen = $(this).val(),
    		$length = $hyphen.length;
    	if($length > 1000){
    		$(this).val($hyphen.substr(0,1000));
    	}
    }).blur(function(e){
    	var $hyphen = $(this).val(),
    		$length = $hyphen.length;
    	if($length > 1000){
    		$(this).val($hyphen.substr(0,1000));
    	}
    });

    

    if($('.js-event-title').length > 0){
    	$('.js-event-title').text($('.js-event-target').text());
    	$('.js-event').val($('.js-event-target').text());
    }

    if($('.wpcf7-form.sent').length > 0){
    	$('.js-event-thanks').removeClass('hide');
    }



    if($('.mvBoxBgPink').length > 0){
		document.querySelector(".mvBoxBgPink").animate(
		  {
		    borderRadius: [
		   	  // pc
		      "80% 30%",
		      "90% 20%",
		      "80% 40%",
		      "70% 50%",

		    ]
		  },
		  {
		    iterations: Infinity,
		    direction: "alternate",
		    duration: 7000
		  }
		);
	}
	if($('.mvBoxBgPink').length > 0){
		document.querySelector(".mvBoxBgGreen").animate(
		  {
		    borderRadius: [
		   	  // pc
		      "30% 80%",
		      "20% 90%",
		      "40% 80%",
		      "50% 70%",

		    ]
		  },
		  {
		    iterations: Infinity,
		    direction: "alternate",
		    duration: 7000
		  }
		);
	}

});


$(window).on('load', function () {
    $('.select2-selection__placeholder').each(function () {
        var text = $(this).text();
        $(this).text(text.replace('? 選択 ?', '選択してください'));
    });

    $("input.wpcf7-validates-as-required, textarea.wpcf7-validates-as-required, select.wpcf7-validates-as-required").each(function () {
        $(this).on('change', function () {
            if ($(this).val() != "") {
                $(this).addClass("filled");
            }
            if ($(this).hasClass("p-postal-code")) {
                console.log('Postalcode Changed');
                $('select[name="your-region"]').change();
                $('input[name="your-address"]').change();
            }
            if ($('.js-event-title').length > 0) {
                $('.js-event-title').text($('.js-event-target').text());
                $('.js-event').val($('.js-event-target').text());
            }
        });
    });

    // チェックボックスに対応する処理を追加
    $('.requiredIpt input[type="checkbox"]').on('change', function () {
        var parent = $(this).closest('.requiredIpt');

        if ($('.requiredIpt input[type="checkbox"]:checked').length > 0) {
            parent.addClass('filled'); // チェックが1つ以上の場合
        } else {
            parent.removeClass('filled'); // 全て未チェックの場合
        }
    });

    // ラジオボタンに対応する処理
    $('.requiredIpt .wpcf7-radio .wpcf7-list-item-label').each(function () {
        $(this).on('click', function () {
            $(this).closest('.requiredIpt').addClass('filled');
        });
    });
});

