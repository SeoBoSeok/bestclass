$(function() {
    //브라우저 활성화 체크
    var hidden = "hidden";

    function onchange(evt) {
        var v = "visible",
            h = "hidden",
            evtMap = {
                focus: v,
                focusin: v,
                pageshow: v,
                blur: h,
                focusout: h,
                pagehide: h
            };

        evt = evt || window.event;
        if (evt.type in evtMap)
            document.body.className = evtMap[evt.type];
        else
            document.body.className = this[hidden] ? "hidden" : "visible";
    }

    // set the initial state (but only if browser supports the Page Visibility API)
    if (document[hidden] !== undefined)
        onchange({
            type: document[hidden] ? "blur" : "focus"
        });


    //툴팁 스크립트 start
    var $tooltipTitle;

    $(".tooltip > i").hover(function(e) {
        $tooltipTitle = $(this).attr("title");
        $(this).attr("title", "");
        $(this).parent().append("<div id='tip'></div>");
        $("#tip").css("max-width", $("#tip").parent().parent().width());
        $("#tip").text($tooltipTitle);

        var pageX = $(this).position().left + 20;
        var pageY = $(this).position().top + $(this).innerHeight();
        if (!$(this).parents(".tooltip").hasClass("block")) {
            $("#tip").css({
                left: pageX + "px",
                top: pageY + "px"
            }).fadeIn(500);
        } else {
            $("#tip").css({
                right: blockPageX + "px",
                top: pageY + "px"
            }).fadeIn(500);
        }
    }, function() {
        $(this).attr("title", $tooltipTitle);
        $("#tip").remove();
    });
    //툴팁 스크립트 end

    //셀렉트 박스 스크립트 select start
    $(document).on("change", ".select_info > select", function() {
        if (!$(this).parent(".analysis_nav")) {
            var $val = $(this).children("option:selected").text();
            $(this).siblings("p").empty().html($val);
        }
    });
    //셀렉트 박스 스크립트 select end

    //셀렉트 박스 스크립트 ul start
    $(document).on("click", ".select_info > p", function() {
        if ($(this).hasClass("active")) {
            $(this).removeAttr("class");
            $(this).siblings("ul").removeAttr("active");
            $(this).siblings(".select_close").removeClass("active");
        } else {
            $(this).addClass("active");
            $(this).siblings("ul").addClass("active");
            $(this).siblings(".select_close").addClass("active");
        }
    });
    $(document).on("click", ".select_info > ul > li", function() {
        var $val = $(this).text();
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeAttr("class");
            $(this).parent().siblings("p").empty().html($val);
            $(this).parent().siblings("p").removeAttr("class");
            $(this).parent().siblings(".select_close").removeClass("active");
        } else {
            $(this).parent().addClass("active");
            $(this).parent().siblings("p").addClass("active");
            $(this).parent().siblings(".select_close").addClass("active");
        }
    });
    $(document).on("click", ".select_info > .select_close", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings("p").removeAttr("class");
            $(this).siblings("ul").removeClass("active");
        } else {
            $(this).addClass("active");
            $(this).siblings("p").addClass("active");
            $(this).siblings("ul").addClass("active");
        }
    });
    //셀렉트 박스 스크립트 ul end

    //file 스크립트 start
    $(document).on("change", ".file_info input[type='file']", function(e) {
        var $fileValue = $(this).val().split("\\");
        var $fileName = $fileValue[$fileValue.length - 1]; // 파일명

        if ($(this).val() == "") {
            if ($(this).hasClass("register")) {
                $(this).siblings("p").html("<span>등록할 등기부 열람파일을 선택하세요.</span>");
            } else {
                $(this).siblings("p").html("<span>파일을 선택하세요.</span>");
            }
        } else {
            $(this).siblings("p").text($fileName);
        }
    });
    //file 스크립트 end

    //메인 슬라이드    	
    if ($(".main_slider").length) {
        mainSlider = $('.main_slider').bxSlider({
            minSlides: 1,
            auto: true,
            autoDelay: 0,
            pause: 8000,
            autoControls: true,
            stopAutoOnClick: false,
            controls: false,
            pager: true,
            stopAuto: true,
            shrinkItems: false,
            pagerType: 'short',
            responsive: true,
            onSliderLoad: function() {
                $(".mainSlider").css("visibility", "visible").animate({
                    opacity: 1
                });

                $(".mainSlider .bx-controls.bx-has-pager").append('<div class="bx-page-load-bar"><span></span></div>');

                function loop() {
                    $(".bx-page-load-bar > span")
                        .animate({
                            width: "100%"
                        }, 8000)
                        .animate({
                            width: "0"
                        }, 0, loop);
                }

                if ($(".mainSlider .bx-start").hasClass("active")) {
                    loop();
                }

                $(".mainSlider .bx-stop").on("click", function() {
                    $(".bx-page-load-bar > span").stop(true);
                    $(".bx-page-load-bar > span").css("width", 0);
                });

                $(window).focus(function() {
                    loop();
                });
                $(window).blur(function() {
                    $(".bx-page-load-bar > span").stop(true);
                });

                $(".mainSlider .bx-start").on("click", function() {
                    $(".bx-page-load-bar > span").css("width", 0);
                    loop();
                });
            },
            onSlideAfter: function() {
                if ($(".mainSlider .bx-stop").hasClass("active")) {
                    $(".bx-page-load-bar > span").stop(true);
                    $(".mainSlider .bx-start").trigger('click');
                }
            }
        });
    }

    //메인 공지 체크리스트 슬라이드
    if ($(".main_latest_notice").length) {
        $(".main_latest_notice .lat_slider").bxSlider({
            touchEnabled: (navigator.maxTouchPoints > 0),
            minSlides: 1,
            auto: true,
            autoHover: true,
            speed: 500,
            autoDelay: 3000,
            pause: 3000,
            mode: 'vertical',
            controls: true,
            pager: false,
            responsive: true,
            onSliderLoad: function() {
                $(".main_latest_notice").css("visibility", "visible").animate({
                    opacity: 1
                });
            }
        });
    }

    //메인 공지사항 슬라이드
    if ($(".main_news_notice").length) {

        $(".main_news_notice .lat_slider").slick({
            dots: false,
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 640,
                    settings: {
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });



    }

    //메인 파트너 슬라이드
    if ($(".main_partners").length) {
        partners = {
            'init': function() {
                this.action();
            },
            'action': function() {
                var $ele = {
                    'roll': $(".main_partners .main_partners_slider"),
                };
                var opts = function() {
                    //PC인 경우
                    if ($(window).width() > 640) {
                        var vars = {
                            'speed': 500,
                            'auto': true,
                            'autoDelay': 3000,
                            'pause': 3000,
                            'autoHover': true,
                            'moveSlides': 5,
                            'minSlides': 5,
                            'maxSlides': 5,
                            'slideWidth': $(".main_partners").width() / 5,
                            'controls': false,
                            'pager': false,
                            'responsive': true,
                            'onSliderLoad': function() {
                                $(".main_partners").css("visibility", "visible").animate({
                                    opacity: 1
                                });
                            }
                        }
                        //모바일인 경우
                    } else {
                        var vars = {
                            'speed': 500,
                            'auto': true,
                            'autoDelay': 3000,
                            'pause': 3000,
                            'autoHover': true,
                            'moveSlides': 2,
                            'minSlides': 2,
                            'maxSlides': 2,
                            'slideWidth': $(".main_partners").width() / 2,
                            'controls': false,
                            'pager': false,
                            'responsive': true,
                            'onSliderLoad': function() {
                                $(".main_partners").css("visibility", "visible").animate({
                                    opacity: 1
                                });
                            }
                        }
                    }
                    return vars;
                };

                var rolling = function() {
                    roll = $ele.roll.bxSlider(opts());
                };
                rolling();
                $(window).on({
                    'load resize': function() {
                        roll.reloadSlider(opts());
                    }
                });
            }
        }
        partners.init();
    }


    //서브 상단 타이틀 활성화
    if ($(".sub_title_info").length) {
        $(".sub_title_info").addClass("animate");
    }

    // 폰트 사이즈 비율 변경
    if ($(".analysis_info .lab_cate_var2").length) {
        $(".analysis_info .lab_cate_var2").fitText(0.36);
    }

    $("#progressbar1 > .ui-progressbar-value").animate({
        width: "70%"
    }, 1500);


	//var url = 'http://cnet.com';
//	var urlEncoded = encodeURIComponent(url);
	//var apiKey = '29cf6c79-db24-404d-948f-d80d8071a5fa'; // <-- Replace with your AppId
	// The entire request is just a simple get request with optional query parameters
	//var requestUrl = 'https://opengraph.io/api/1.1/site/' + urlEncoded + '?app_id=' + apiKey;
	
	
	$('#loadOpenGraphData').click(function(){
	  $.getJSON(requestUrl, function( json ) {
	 	// Throw the object in the console to see what it looks like!
		//console.log('json', json);
		// Update the HTML elements!
		$('#title').text(json.hybridGraph.title);
		$('#description').text(json.hybridGraph.description);
		$('#icon').attr('src', json.hybridGraph.image);
		$('#link a').attr('href',url);
	  });    
	});

	// 없을시 if 넣어야함
	$('#bo_v_link ul li').each(function(index){
		console.log ($(this).find('#link').attr('href'));
		var _this = $(this);
		var url = $(this).find('#link').attr('href');

		var chk_url = /(http|https):\/\/((\w+)[.])+(asia|biz|cc|cn|com|de|eu|in|info|jobs|jp|kr|mobi|mx|name|net|nz|org|travel|tv|tw|uk|us)(\/(\w*))*$/i;
		var urlTest = chk_url.test(url); 
		
		var urlEncoded = encodeURIComponent(url);
		var apiKey = '29cf6c79-db24-404d-948f-d80d8071a5fa'; // <-- Replace with your AppId
		var requestUrl = 'https://opengraph.io/api/1.1/site/' + urlEncoded + '?app_id=' + apiKey;
		$.getJSON(requestUrl, function( json ) {
			// Throw the object in the console to see what it looks like!
			console.log('json', json);
			// Update the HTML elements!
			_this.addClass('on');
			_this.find('#title').text(json.hybridGraph.title);
			_this.find('#description').text(json.hybridGraph.description);
			_this.find('#icon').attr('src', json.hybridGraph.image);
		});
	});

	var ca_index;
	ca_index = $("#ca_name option").index($("#ca_name option:selected"));
//	console.log(ca_index);
	$('#bo_w.modify .cate_new ul li:eq('+ca_index+')').addClass('active');
	$('#bo_w.modify .bo_w_tit, #bo_w.modify .smarteditor2').addClass('cate'+(ca_index+1));


	$('.bo_w_link .frm_input').each(function(index){ // 관련링크를 실시간으로 가져옴
		//console.log ($(this).find('#link').attr('href'));
		var _this = $(this);
		_this.blur(function(){
			if (_this.val().length > 0){
				var url = _this.val();

				var chk_url = /(http|https):\/\/((\w+)[.])+(asia|biz|cc|cn|com|de|eu|in|info|jobs|jp|kr|mobi|mx|name|net|nz|org|travel|tv|tw|uk|us)(\/(\w*))*$/i;
				var urlTest = chk_url.test(url); 
				
				if(urlTest){
					var urlEncoded = encodeURIComponent(url);
					var apiKey = '29cf6c79-db24-404d-948f-d80d8071a5fa'; // <-- Replace with your AppId
					var requestUrl = 'https://opengraph.io/api/1.1/site/' + urlEncoded + '?app_id=' + apiKey;	
					$.getJSON(requestUrl, function( json ) {
						// Throw the object in the console to see what it looks like!
						console.log('json', json);
						// Update the HTML elements!
						$('#bo_ww_link ul li:eq('+(index+1)+')').addClass('on');
						$('#bo_ww_link ul li:eq('+(index+1)+')').find('#title').text(json.hybridGraph.title);
						$('#bo_ww_link ul li:eq('+(index+1)+')').find('#description').text(json.hybridGraph.description);
						$('#bo_ww_link ul li:eq('+(index+1)+')').find('#icon').attr('src', json.hybridGraph.image);
						$('#bo_ww_link ul li:eq('+(index+1)+') a').attr('href', url);
						$('#bo_ww_link ul li:eq('+(index+1)+')').find('#link').text(url);
					});
				}else{
					alert("URL형식이 잘못되었습니다.");
				}
			}
			
//			console.log(_this.val().length);
		});
		/*
		var _this = $(this);
		var url = $(this).find('#link').attr('href');
		var urlEncoded = encodeURIComponent(url);
		var apiKey = '29cf6c79-db24-404d-948f-d80d8071a5fa'; // <-- Replace with your AppId
		var requestUrl = 'https://opengraph.io/api/1.1/site/' + urlEncoded + '?app_id=' + apiKey;
		$.getJSON(requestUrl, function( json ) {
			// Throw the object in the console to see what it looks like!
			console.log('json', json);
			// Update the HTML elements!
			_this.addClass('on');
			_this.find('#title').text(json.hybridGraph.title);
			_this.find('#description').text(json.hybridGraph.description);
			_this.find('#icon').attr('src', json.hybridGraph.image);
		});*/
	});
	
/*
	$( window ).scroll(function() {
	  if ($(document).scrollTop() > 150){
		  $('#hd_wrapper').addClass('floating');
	  }else{
		  $('#hd_wrapper').removeClass('floating');
	  }
	});
	*/
});

//링크 점선 삭제 스크립트
function bluring() {
    if (event.srcElement.tagName == "A" || event.srcElement.tagName == "IMG") {
        document.body.focus();
    }
}
document.onfocusin = bluring;