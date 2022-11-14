function isMobile(){
	var UserAgent = navigator.userAgent;
	if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null){
		return true;
	}else{
		return false;
	}
}

function fn_article3(containerID, buttonID, autoStart) {
    var $element = $('#' + containerID).find('.notice-list');
    var $prev = $('#' + buttonID).find('.prev');
    var $next = $('#' + buttonID).find('.next');
    var autoPlay = autoStart;
    var auto = null;
    var speed = 4000;
    var timer = null;

    var move = $element.children().outerHeight();
    var first = false;
    var lastChild;

    lastChild = $element.children().eq(-1).clone(true);
    lastChild.prependTo($element);
    $element.children().eq(-1).remove();

    if ($element.children().length == 1) {
        $element.css('top', '0px');
    } else {
        $element.css('top', '-' + move + 'px');
    }

    if (autoPlay) {
        timer = setInterval(moveNextSlide, speed);
        auto = true;
    }

    $element.find('>li').bind({
        'mouseenter': function () {
            if (auto) {
                clearInterval(timer);
            }
        },
        'mouseleave': function () {
            if (auto) {
                timer = setInterval(moveNextSlide, speed);
            }
        }
    });

    $prev.bind({
        'click': function () {
            movePrevSlide();
            return false;
        },
        'mouseenter': function () {
            if (auto) {
                clearInterval(timer);
            }
        },
        'mouseleave': function () {
            if (auto) {
                timer = setInterval(moveNextSlide, speed);
            }
        }
    });

    $next.bind({
        'click': function () {
            moveNextSlide();
            return false;
        },
        'mouseenter': function () {
            if (auto) {
                clearInterval(timer);
            }
        },
        'mouseleave': function () {
            if (auto) {
                timer = setInterval(moveNextSlide, speed);
            }
        }
    });

    function movePrevSlide() {
        $element.each(function (idx) {
            if (!first) {
                $element.eq(idx).animate({ 'top': '0px' }, 'normal', function () {
                    lastChild = $(this).children().eq(-1).clone(true);
                    lastChild.prependTo($element.eq(idx));
                    $(this).children().eq(-1).remove();
                    $(this).css('top', '-' + move + 'px');
                });
                first = true;
                return false;
            }

            $element.eq(idx).animate({ 'top': '0px' }, 'normal', function () {
                lastChild = $(this).children().filter(':last-child').clone(true);
                lastChild.prependTo($element.eq(idx));
                $(this).children().filter(':last-child').remove();
                $(this).css('top', '-' + move + 'px');
            });
        });
    }

    function moveNextSlide() {
        $element.each(function (idx) {

            var firstChild = $element.children().filter(':first-child').clone(true);
            firstChild.appendTo($element.eq(idx));
            $element.children().filter(':first-child').remove();
            $element.css('top', '0px');

            $element.eq(idx).animate({ 'top': '-' + move + 'px' }, 'normal');

        });
    }
}

$(document).ready(function () {
    fn_article3('notice_rolling', 'notice_bt', true);
});

$(function () {

    slider_arr = new Array("iaan", "Exordium");

    // slide (main iaan visual)
    var main_visual = new Swiper("#iaan .visual_slide .swiper-container", {
        spaceBetween: 0,
        slidesPerView: 1,
		initialSlide: 0,
        watchSlidesVisibility: true,
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
        },
		navigation: {
		  nextEl: "#iaan .swiper-button-next",
		  prevEl: "#iaan .swiper-button-prev",
		},
        loop: true,
        speed: 1500,
		resizeReInit: true,
		updateOnWindowResize:true,
        observer: true,
		observeParents: true,
        slideToClickedSlide: false,
        effect: "fade",
        centeredSlides: true,
		allowTouchMove: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
			stopOnLastSlide: true,
        },
        simulateTouch: false,
        on: {
			init: function(){
				//$('#iaan .visual_slide .swiper-slide').find('.ani').removeClass('fadeInUp_L');
				//$('#iaan.swiper-slide-active .visual_slide .swiper-slide.swiper-slide-active').find('.ani').addClass('fadeInUp_L');
			},
            slideChangeTransitionStart: function () {
                $('#iaan .paging').removeClass('on');
				if (this.activeIndex == 0) $('#iaan .paging .current').text("0"+(this.slides.length - 2));
                else if (this.activeIndex == this.slides.length - 1) $('#iaan .paging .current').text("01");
                else $('#iaan .paging .current').text("0" + this.activeIndex);
                $('#iaan .paging .total').text("0" + (this.slides.length - 2));
				$('#iaan .visual_slide .swiper-slide').find('.ani').removeClass('fadeInUp_L');
				$('#iaan .visual_slide .swiper-slide.swiper-slide-active').find('.ani').addClass('fadeInUp_L');

            },
            slideChangeTransitionEnd: function () {
                $('#iaan .paging').addClass('on');
            }
        },
        fadeEffect: { crossFade: true }
    }); //end swiper

    // slide (main exordium visual)
    var exordium_visual = new Swiper("#exordium .visual_slide .swiper-container", {
        spaceBetween: 0,
        slidesPerView: 1,
		initialSlide: 0,
        watchSlidesVisibility: true,
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
        },
		navigation: {
		  nextEl: "#exordium .swiper-button-next",
		  prevEl: "#exordium .swiper-button-prev",
		},
        loop: true,
        speed: 1500,
		resizeReInit: true,
		updateOnWindowResize:true,
        observer: true,
		observeParents: true,
        slideToClickedSlide: false,
        effect: "fade",
        fadeEffect: { crossFade: true },
        centeredSlides: true,
		allowTouchMove: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
			stopOnLastSlide: true,
        },
		simulateTouch: false,
        on: {
			init: function(){
				$('#exordium .visual_slide .swiper-slide').find('.ani').removeClass('fadeInUp_L');
				$('#exordium.swiper-slide-active .visual_slide .swiper-slide.swiper-slide-active').find('.ani').addClass('fadeInUp_L');
			},
            slideChangeTransitionStart: function () {
                $('#exordium .paging').removeClass('on');

				let totals = this.slides.length - 2;
				if (this.activeIndex == 0)
					$('#exordium .paging .current').text("0"+(totals));
				else if (this.activeIndex == this.slides.length - 1)
					$('#exordium .paging .current').text("01");
                else
					$('#exordium .paging .current').text("0" + this.activeIndex);

                $('#exordium .paging .total').text("0" + (totals));
				$('#exordium.swiper-slide-active .visual_slide .swiper-slide').find('.ani').removeClass('fadeInUp_L');
				$('#exordium.swiper-slide-active .visual_slide .swiper-slide.swiper-slide-active').find('.ani').addClass('fadeInUp_L');
            },
            slideChangeTransitionEnd: function () {
                $('#exordium .paging').addClass('on');
            }
        },
    }); //end swiper

    var interleaveOffset = 0.5;

	// main top slide (iaan, exordium, brand)
    var swiperOptions = {
        loop: false,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        touchRatio: 0.5,
		shortSwipes:false,
        longSwipes: true,
		touchReleaseOnEdges:true,
        longSwipesRatio: 0.05,
		resizeReInit: true,
		observer: true,
		observeParents: true,
		updateOnWindowResize:true,
        navigation: {
            nextEl: ".btn_next",
            prevEl: ".btn_prev"
        },
		breakpoints: {
			740: {
				shortSwipes : true, // 짧은 스와이프 방지
				touchRatio: 0.75,
			}
		},
        on: {
            // 전환 효과 //
            progress: function () {

                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
					if (i == 0) var innerTranslate = slideProgress * innerOffset;
					else  var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".visual_slide").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },
            touchStart: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function (speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".visual_slide").style.transition =
                        speed + "ms";
                }
            },
            // btn text //
			init: function(){
				// exordium_visual.autoplay.stop();
				$('#home .top_slide .absolute.btn_prev').removeClass('on');
				$('#home .top_slide .absolute.btn_next').addClass('on');
			},
            slideChange: function () {
				var swiper = this;
                var thisNum = this.activeIndex;

                if ((thisNum%2) == 1) {
                    $("#location").hide();
                    $("#exordium_location").show();

					$(".animated2").each(function(i){
						var _this = $(this);
						_this.waypoint(function() {
							_this.addClass("fadeInUp");
						}, {
							offset: "70%"
						});
					});

                } else {
                    $("#exordium_location").hide();
                    $("#location").show();
                }

                $(this.slides[thisNum]).find('.swiper-slide-active').find('.ani').addClass('fadeInUp_L');

                if (thisNum == 0) { //iaan
					// control main visual
				   if(main_visual.activeIndex != 1) main_visual.slideTo(1, 1500);

					main_visual.autoplay.start();
					exordium_visual.slideTo(1, 1500);
					exordium_visual.autoplay.stop();
					$('#home .top_slide .absolute.btn_prev').removeClass('on');
					$('#home .top_slide .absolute.btn_next').addClass('on');

                } else if (thisNum == 1) { //Exordium
					//control exordium visual
					if(exordium_visual.activeIndex != 1) exordium_visual.slideTo(1, 1500);

					exordium_visual.autoplay.start();
					main_visual.slideTo(1, 1500);
					main_visual.autoplay.stop();

					$('#home .top_slide .absolute.btn_next').removeClass('on');
					$('#home .top_slide .absolute.btn_prev').addClass('on');

                }

            },
            slideChangeTransitionEnd: function () {
                var thisNum = this.activeIndex;

                $(this.slides[this.previousIndex]).find('.ani').removeClass('fadeInUp_L');
            },

        }
    };

    var visualNum = 1;
    var beforeNum = 1;
    var top_slide = new Swiper(".top_slide", swiperOptions);
    $("#scroll").click(function () {
		let loc = $("#location").offset().top;
		let exor_loc =  $("#exordium_location").offset().top;

		if(exor_loc > 0)
			$("html").animate({ scrollTop: exor_loc },0);
		else
			$("html").animate({ scrollTop: loc },0);
    });

	var locationSwiper = new Swiper("#location .swiper-container", {
		initialSlide:0,
		slidesPerView: 4,
		speed: 1000,
		resizeReInit: true,
		observer: true,
		observeParents: true,
		updateOnWindowResize:true,
        touchRatio: 0.5,
        longSwipes: true,
        longSwipesRatio: 0.1,
        navigation: {
            nextEl: "#location .swiper-button-next",
            prevEl: "#location .swiper-button-prev"
        },
		breakpoints: {
			1300: {
				slidesPerView:3
			},
			1000: {
				slidesPerView:2
			},
			740: {
				slidesPerView:1
			},
		},
		on: {
            slideChangeTransitionStart: function () {
                $('#location .paging').removeClass('on');

				var totals = this.slides.length;

				$('#location .paging .current').text("0" + (this.activeIndex+1));
                $('#location .paging .total').text("0" + (totals));
                // text animation on //
                $('#location .visual_slide .swiper-slide').eq(this.activeIndex).find('.ani').addClass('fadeInUp_L');

				let state = (100 / totals) * (this.activeIndex+1);
				$('#location .paging .prog').css('width', state+'%');
            },
            slideChangeTransitionEnd: function () {

				var totals = this.slides.length - 2;

                if (this.previousIndex == 0) $(this.slides[totals - 2]).find('.ani').removeClass('fadeInUp_L');

                $(this.slides[this.previousIndex]).find('.ani').removeClass('fadeInUp_L');
                $('#location .paging').addClass('on');
            }
        }
	});

	var exoSwiper = new Swiper("#location.exo .swiper-container", {
		slidesPerView: 4,
		speed: 1000,
		resizeReInit: true,
		observer: true,
		updateOnWindowResize:true,
        touchRatio: 0.5,
        longSwipes: true,
        longSwipesRatio: 0.1,
        navigation: {
            nextEl: ".btn_next",
            prevEl: ".btn_prev"
        },
		breakpoints: {
			740: {
				slidesPerView:1
			},
		}
	});

	//팝업 슬라이드
	var popSwiper = new Swiper("#m_pop.on .swiper-container", {
		slidesPerView: 1,
		speed: 1000,
		resizeReInit: true,
		observer: true,
		updateOnWindowResize:true,
        touchRatio: 0.5,
        longSwipes: true,
        longSwipesRatio: 0.1,
        navigation: {
            nextEl: ".btn_next",
            prevEl: ".btn_prev"
        },
		breakpoints: {
			740: {
				slidesPerView:1
			},
		}
	});


	var storySwiper = new Swiper(".storySwiper", {
		slidesPerView: 3,
		loop:true,
		spaceBetween: 20,
		//observer: true,
		speed: 1000,
		resizeReInit: true,
		updateOnWindowResize:true,
        touchRatio: 0.5,
        longSwipes: true,
        longSwipesRatio: 0.1,
		autoplay: {
            delay: 5000,
            disableOnInteraction: false,
			stopOnLastSlide: true,
        },
		pagination: {
			el: ".swiper-pagination",
			type: "custom",
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + myArray[index + 1] + '</span>';
			},
        },
		breakpoints: {
			741: {
				slidesPerView: 1,
				spaceBetween: 20,
				observer: true,
				observeSlideChildren:true,
				observeParents:true,
			},
		},
		on: {
            slideChangeTransitionStart: function () {
                $('#story .paging').removeClass('on');

				if(isMobile()){
					var totals = this.slides.length - 2;
				}else {
					var totals = this.slides.length / 2;
				}
				if (this.realIndex == 0) $('#story .paging .current').text("0" + (this.realIndex+1));
                else $('#story .paging .current').text("0" + (this.realIndex+1));
                $('#story .paging .total').text("0" + (totals));


				let state = (100 / totals) * (this.realIndex+1);
				$('#story .paging .prog').css('width', state+'%');
            },
            slideChangeTransitionEnd: function () {
				if(isMobile()){
					var totals = this.slides.length - 2;
				}else {
					var totals = this.slides.length / 2;
				}

                $('#story .paging').addClass('on');
            }
        }
	});

    //	main_visual.controller.control = exordium_visual;
    //	exordium_visual.controller.control = main_visual;
	$(function(){
		if(!isMobile()){
			$("#location .list .item").each(function(i){
				$(this).find('.text_area').mouseenter(function(){
					$("#location .list").addClass('hover');
					$("#location .list .item").removeClass('on');
					$(this).parent().addClass('on');
				});
				$(this).find('.text_area').mouseleave(function(){
					$("#location .list").removeClass('hover');
					$("#location .list .item").removeClass('on');
					$(this).parent().addClass('on');
				});
			});
			$("#best .list .item").each(function(i){
				$(this).find('.text_area').mouseenter(function(){
					$("#best .list").addClass('hover');
					$("#best .list .item").removeClass('on');
					$(this).parent().addClass('on');
				});
				$(this).find('.text_area').mouseleave(function(){
					$("#best .list").removeClass('hover');
					$("#best .list .item").removeClass('on');
					$(this).parent().addClass('on');
				});
			});
		}

		$('#board .wrap').each(function() {
			var _this = $(this);

			_this.waypoint(function() {
				_this.addClass('on');
				_this.find('.text_area').addClass('fadeInUp');
			}, {
				offset: '60%'
			});
		});
	});
});