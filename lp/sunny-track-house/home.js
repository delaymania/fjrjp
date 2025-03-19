$(function(){

	var mySwiper = new Swiper ('.interviewSwiper', {
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
	    breakpoints: { 
			768: { 
	    		centeredSlides:true,   
	    		initialSlide:2,
			},
		},
	}); 

	var myEventSwiper = new Swiper ('.eventSwiper', {
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

	$('.mainSlider').slick({
	    dots: false,
	    arrows:false,
	    autoplay:true,
	    cssEase: 'linear',
   		speed:2000,
   		fade:true,
   		touchMove:false,
   		pauseOnHover:false
	});

	
	// $(window).on('resize',function(){
	// 	if(!$('.insSlick').hasClass('is_slick')){
	// 		if($(window).width() > 767) { 
	// 			$('.insSlick').addClass('is_slick').slick({
	// 			    dots: false,
	// 			    arrows:false,
	// 			    autoplay:true,
	// 			    autoplaySpeed:0,
	// 			    cssEase: 'linear',
	// 		   		speed:5000,
	// 		   		fade:false,
	// 		   		touchMove:false,
	// 		   		pauseOnHover:true,
	// 				// centerMode: true,
	// 				variableWidth: true,
	// 			});
	// 		}
	// 	}else { 
	// 		if($(window).width() < 768) { 
	// 			$('.insSlick').removeClass('is_slick').slick('unslick');
	// 		}
	// 	} 

	// });
	//$(window).trigger('resize',[true]);


	
	$('.interviewSlick_sp').addClass('is_slick').slick({
		dots: false,
		arrows:true,
		autoplay: false,
		draggable: true,
		// centerMode: true,
		variableWidth: true,
	});

	// var perspec3d_carousel_options = {"sliderDelay":"4000"};
	
});
