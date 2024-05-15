jQuery(function ($){
    $(function () {
        $('#pageTop a').click(function () {
            var speed = 800; // ミリ秒
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $('body,html').animate({scrollTop: position}, speed, 'swing');
            return false;
        });
        $('#searchToggle').click(function () {
            $('.search_block_list').toggleClass('openNav1');
            $('#searchToggle').toggleClass('openNav2');
        });
        $('.closebtn').click(function () {
            $('.search_block_list').removeClass('openNav1');
            $('#searchToggle').removeClass('openNav2');
        });
        $('footer .footerEvent .ttl').click(function () {
            $('footer .footerEvent .ttl').toggleClass('openNav3');
            $('footer .footerEvent .sitemap_list').toggleClass('openNav4');
        });
        $('footer .footerVoice .ttl').click(function () {
            $('footer .footerVoice .ttl').toggleClass('openNav3');
            $('footer .footerVoice .sitemap_list').toggleClass('openNav4');
        });
        $('footer .sitemap .ttl').click(function () {
            $('footer .sitemap .ttl').toggleClass('openNav3');
            $('footer .sitemap .sitemap_list').toggleClass('openNav4');
        });
        $('footer .search .ttl').click(function () {
            $('footer .search .ttl').toggleClass('openNav3');
            $('footer .search .sitemap_list').toggleClass('openNav4');
        });
        $('footer .information .ttl').click(function () {
            $('footer .information .ttl').toggleClass('openNav3');
            $('footer .information .sitemap_list').toggleClass('openNav4');
        });
        $('footer .products .ttl').click(function () {
            $('footer .products .ttl').toggleClass('openNav3');
            $('footer .products .sitemap_list').toggleClass('openNav4');
        });
        $('.sp_menu_list .event .ttl').click(function () {
            $('.sp_menu_list .event .ttl').toggleClass('openNav3');
            $('.sp_menu_list .event .sitemap_list').toggleClass('openNav4');
        });
        $('footer .voice .ttl').click(function () {
            $('footer .voice .ttl').toggleClass('openNav3');
            $('footer .voice .sitemap_list').toggleClass('openNav4');
        });		
        $('.sp_menu_list .sitemap .ttl').click(function () {
            $('.sp_menu_list .sitemap .ttl').toggleClass('openNav3');
            $('.sp_menu_list .sitemap .sitemap_list').toggleClass('openNav4');
        });
        $('.sp_menu_list .search .ttl').click(function () {
            $('.sp_menu_list .search .ttl').toggleClass('openNav3');
            $('.sp_menu_list .search .sitemap_list').toggleClass('openNav4');
        });
        $('.sp_menu_list .information .ttl').click(function () {
            $('.sp_menu_list .information .ttl').toggleClass('openNav3');
            $('.sp_menu_list .information .sitemap_list').toggleClass('openNav4');
        });
        $('.sp_menu_list .products .ttl').click(function () {
            $('.sp_menu_list .products .ttl').toggleClass('openNav3');
            $('.sp_menu_list .products .sitemap_list').toggleClass('openNav4');
        });
        $('.sp_menu_list .voice .ttl').click(function () {
            $('.sp_menu_list .voice .ttl').toggleClass('openNav3');
            $('.sp_menu_list .voice .sitemap_list').toggleClass('openNav4');
        });
        $('#spMenuBtn01').click(function () {
            $('section.sp_menu').addClass('openNav5');
        });
        $('.spMenuBtn02').click(function () {
            $('section.sp_menu').removeClass('openNav5');
        });
        $('#spMenuFreedial01').click(function () {
            $('section.sp_menu_freedial').addClass('openNav6');
        });
        $('.spMenuBtn02_freedial').click(function () {
            $('section.sp_menu_freedial').removeClass('openNav6');
        });


        $('.tab_btn_01').click(function () {
            $('.tab_btn_01').addClass('openTab01');
            $('.tab_content01').addClass('openTab01');
            $('.tab_btn_02').removeClass('openTab02');
            $('.tab_content02').removeClass('openTab02');
        });
        $('.tab_btn_02').click(function () {
            $('.tab_btn_02').addClass('openTab02');
            $('.tab_content02').addClass('openTab02');
            $('.tab_btn_01').removeClass('openTab01');
            $('.tab_content01').removeClass('openTab01');
        });
        $('.tab_btn_03').click(function () {
            $('.tab_btn_03').addClass('openTab03');
            $('.tab_content03').addClass('openTab03');
            $('.tab_btn_04').removeClass('openTab04');
            $('.tab_content04').removeClass('openTab04');
        });
        $('.tab_btn_04').click(function () {
            $('.tab_btn_04').addClass('openTab04');
            $('.tab_content04').addClass('openTab04');
            $('.tab_btn_03').removeClass('openTab03');
            $('.tab_content03').removeClass('openTab03');
        });
        $('.tab_btn_05').click(function () {
            $('.tab_btn_05').addClass('openTab05');
            $('.tab_content05').addClass('openTab05');
            $('.tab_btn_06').removeClass('openTab06');
            $('.tab_content06').removeClass('openTab06');
        });
        $('.tab_btn_06').click(function () {
            $('.tab_btn_06').addClass('openTab06');
            $('.tab_content06').addClass('openTab06');
            $('.tab_btn_05').removeClass('openTab05');
            $('.tab_content05').removeClass('openTab05');
        });
        $('#fudo_top_r-2_1 li.fudo_top_r-2').each(function () {
            var shozaichi = jQuery('.top_shozaichi', this);
            var link = jQuery('a', this);
            jQuery('.top_price', this).insertAfter(shozaichi);
            jQuery('.new_mark', this).insertAfter(link);
        });
        var widget1 = $("#fudo_top_r-2 .ttl_widget").text();
        $("#fudo_top_r-2 .ttl_widget").html(widget1).css('display', 'block');
//        $(".event_block_list li").clone(true).prependTo(".footerEvent .sitemap_list");
        $('#searchpage select').each(function () {
            $(this).after('<span class="select-arrow"></span>');
        });
        $('.submit').before($('.form_notice02'));
        $(function () {
            $('ul.tab_area li').click(function () {
                var index = $('ul.tab_area li').index(this);
                $('.content_area').css('display', 'none');
                $('.content_area').eq(index).fadeIn();
                $('.tab_area li').removeClass('select');
                $(this).addClass('select');
            });
        });

        $(function () {
            var hash = location.hash;
            hash = (hash.match(/^#tab\d+$/) || [])[0];
            if ($(hash).length) {
                var tabname = hash.slice(1);
            } else {
                var tabname = "tab1";
            }
            $('.content_area').css('display', 'none');
            $('.tab_area li').removeClass('select');
            var tabno = $('ul.tab_area li#' + tabname).index();
            $('.content_area').eq(tabno).fadeIn();
            $('ul.tab_area li').eq(tabno).addClass('select');
        });
        $('.wpcf7c-btn-confirm').click(function () {
            setTimeout(function () {
                $('.wpcf7-not-valid-tip').each(function () {
                    $(this).appendTo($(this).parents('.input-text-wrap'));
                });
            }, 5000);
        });
        $('.login_error').insertAfter('.submit');
        $('th font').text('必須');
		
		//下からにょきと出てくるバナー
		var showFlag = false;
		var topBtn = $('.limitBnr');    
		topBtn.css('bottom', '-150px');
		var showFlag = false;
		//スクロールが100に達したらボタン表示
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				if (showFlag == false) {
					showFlag = true;
					topBtn.stop().animate({'bottom' : '20px'}, 200); 
				}
			} else {
				if (showFlag) {
					showFlag = false;
					topBtn.stop().animate({'bottom' : '-150px'}, 200); 
				}
			}
		});
		var showFlag02 = false;
		var topBtn02 = $('.limitBnrtop');    
		topBtn02.css('bottom', '-150px');
		var showFlag02 = false;
		//スクロールが100に達したらボタン表示
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				if (showFlag02 == false) {
					showFlag02 = true;
					topBtn02.stop().animate({'bottom' : '180px'}, 200); 
				}
			} else {
				if (showFlag02) {
					showFlag02 = false;
					topBtn02.stop().animate({'bottom' : '-150px'}, 200); 
				}
			}
		});
    });
});
