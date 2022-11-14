$(function(){
    var hide_menu = false;

    // 주메뉴
    var $gnb = $("#gnb_1dul");

    $gnb.mouseenter(function() {
        $("#hd").addClass("hd_zindex");
        $(".hd_login").removeAttr("style");
        $(this).parent().addClass("gnb_1dli_over gnb_1dli_on");
        $(this).parent().siblings("#gnb_all_bg").addClass("active");
        hide_menu = false;
    });


    $gnb.parents("#gnb").mouseleave(function() {
        $("#hd").removeClass("hd_zindex");
        $(this).find(".gnb_wrap").removeClass("gnb_1dli_over gnb_1dli_on");
        $(this).find("#gnb_all_bg").removeAttr("class");
        hide_menu = true;
    });

    //전체 메뉴

    $(".gnb_all_mob_open.open").click(function(){
    //    $("html, body").css("overflow", "hidden");

		/*
        if ($(window).width() <= 1024) {
            $("#logo").addClass("active");
            $(".hd_login").addClass("active");
            $("#gnb_all .gnb_al_bg_close").addClass("active");
        }
		console.log ("asdfasdf");
*/
    });

	//mobile menu_on event
	$(".gnb_all_mob_open").click(function(){
		if($(this).hasClass('open')){
	        $("html, body").css("overflow", "hidden");
			$("#gnb_all").addClass("active");
			$(this).parents(".hd_login").css("z-index", "9");
			$(this).parents(".hd_login").siblings("#logo").addClass("gnb_all");
			$('#hd').addClass('fixed');
			$('#hd').addClass('m_hd_zindex');
			$(this).removeClass('open');
			$(this).addClass('close');
			$('#gnb_all').addClass('on');
			$('#gnb_all .mo_menu_wr').slideDown();
			$('#hd .header__inner').addClass("on");
			$('#hd .gnb_all_mob_open>span').addClass("on");

			if(isMobile()){
				$("#hd .logo").hide();
				$("#hd .logo_ori").show();
			}

		}else{
			$("html, body").removeAttr("style");
			$('#hd').removeClass('fixed');
			$(this).addClass('open');
			$(this).removeClass('close');
			$("#gnb_all").removeClass("active");
			$('#hd').removeClass('m_hd_zindex');
			$('#hd .header__inner').removeClass("on");

			$('#gnb_all .mo_menu_wr').slideUp(function(){
				$('#gnb_all').removeClass('on');
			});

			if(isMobile()){
				$("#hd .logo").show();
				$("#hd .logo_ori").hide();
			}
		}
	});

	//mobile sub_menu event
	$('#gnb_all .gnb_al_ul > li > a > i').click(function(){
		var neighbor = $(this).parent('li').siblings('li');
		neighbor.find('ul').slideUp();
		$(this).siblings('ul').slideToggle();
	})



/*
    $(".gnb_menu_btn, .gnb_all_mob_open.close").click(function(){
		console.log("sadf");
         $("html, body").removeAttr("style");
        $("#gnb_all").addClass("active");
        $(this).parents(".hd_login").css("z-index", "9");
        $(this).parents(".hd_login").siblings("#logo").addClass("gnb_all");
        if ($(window).width() <= 1024) {
            $("#logo").addClass("active");
            $(".hd_login").addClass("active");
            $("#gnb_all .gnb_al_bg_close").addClass("active");
        }
    });
*/


    $(".gnb_close_btn").click(function(){
       // $("html, body").removeAttr("style");
      //  $("#gnb_all").removeAttr("class");
        $(".hd_login").removeAttr("style");
        if ($(".hd_login").hasClass("active")) {
            $(".hd_login").removeClass("active");
        }
        if ($(".gnb_al_bg_close").hasClass("active")) {
            $(".gnb_al_bg_close").removeClass("active");
        }
        $(this).parents("#gnb").siblings("#logo").removeAttr("class");
        if ($(window).width() <= 1024) {
            $("#logo").removeAttr("class");
            $(".hd_login").removeClass("active");
            $("#gnb_all .gnb_al_bg_close").removeClass("active");
        }
    });
    $(".gnb_al_ul .gnb_al_li").mouseenter(function() {
        $(this).parents(".gnb_al_ul").siblings(".gnb_al_bg").attr('class', 'gnb_al_bg '+ $(this).attr('data-img'));
    });
    $(".gnb_al_ul .gnb_al_li").mouseleave(function() {
        $(this).parents(".gnb_al_ul").siblings(".gnb_al_bg").attr('class', 'gnb_al_bg bg_0');
    });
    if ($(window).width() <= 740){
        $(".gnb_al_ul .gnb_al_li .gnb_al_a .fa-angle-down").off().on("click", function(e) {
            e.preventDefault();

            if ($(this).parents(".gnb_al_li").hasClass("active")) {
                $(this).parents(".gnb_al_li").removeClass("active");
            } else {
                $(".gnb_al_ul .gnb_al_li").removeClass("active");
				$(this).addClass("active");
                $(this).parents(".gnb_al_li").addClass("active");
            }
        });
    }


	$(".gnb_all_mob_open.close").on("click", function() {
		console.log('close');
		$("html, body").removeAttr("style");
		$("#gnb_all").removeAttr("class");
		$(".hd_login").removeAttr("style");

		if ($(window).width() <= 740) {
			$("#logo").removeAttr("class");
			$(".hd_login").removeClass("active");
			$(this).removeClass("active");
		}
		
	});



/*
    $(window).resize(function() {
        if ($(window).width() <= 1024) {
            $(".gnb_al_ul .gnb_al_li").off().on("click", function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                } else {
                    $(".gnb_al_ul .gnb_al_li").removeClass("active");
                    $(this).addClass("active");
                }
            });
            $(".gnb_al_bg_close").off().on("click", function() {
                $("html, body").removeAttr("style");
                $("#gnb_all").removeAttr("class");
                $(".hd_login").removeAttr("style");
                if ($(window).width() <= 1024) {
                    $("#logo").removeAttr("class");
                    $(".hd_login").removeClass("active");
                    $(this).removeClass("active");
                }
            });
        }
    });
*/
    var $offsetTop = $(window).scrollTop();

    if ($offsetTop > 50) {
        if (!$("#hd").hasClass("scroll")) {
            $("#hd").addClass("scroll");
        }
    } else {
        $("#hd").removeClass("scroll");
    }

    $(window).scroll(function() {
        var $offsetTop = $(window).scrollTop();

        if ($offsetTop > 50) {
            if (!$("#hd").hasClass("scroll")) {
                $("#hd").addClass("scroll");
            }
        } else {
            $("#hd").removeClass("scroll");
        }
        if ($offsetTop > $(window).height()) {
            $("#top_btn").addClass("active");
        } else {
            $("#top_btn").removeAttr("class");
        }
    });
});