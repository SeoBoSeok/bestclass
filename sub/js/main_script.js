$(document).ready(function() {
	//fullpage
	$('#fullpage').fullpage({
		licenseKey : 'B45E429B-9E374844-A8A08E87-82C18B71',
		menu : '#header_gnb',
		anchors:["page1","page2","page3","page4","page5"],
		sectionsColor : ['','','',''],
		navigationTooltips: ['intro','brand','premium','unit','service'],
		autoScrolling : true,
		scrollBar : false,
		navigation: true,
		scrollOverflow: false,
		navigationPosition: 'left',
		showActiveTooltip: true,
		continuousVertical: false,
		//responsiveWidth:976,
		onLeave : function(origin, destination, direction){
			if(origin.index == 0){/*비주얼*/
				$(".snbWrap").css("top","79px");
			}
			if(origin.index == 1){/*브랜드*/
				$("#section5 .title_").removeClass("an1");
				$("#section5 .brabd_con").removeClass("an2");
				
			}
			if(origin.index == 2){/*프리미엄*/
				$("#section2 .pre_thum .thum_ div:nth-child(1)").removeClass("an1");
				$("#section2 .pre_thum .thum_ div.text_").removeClass("an2");
				
			}
			if(origin.index == 4){/*로케이션*/
				$("#section3.active .location_").removeClass("an1");
				$("#section3.active .service_").removeClass("an2");

			
			}
			if(origin.index == 4){/*푸터*/
				
			}
		},

		afterLoad: function(origin, destination, direction){
			if(destination.index == 0){/*비주얼*/
				$(".snbWrap").css("top","79px");

			}
			if(destination.index == 1){/*브랜드*/
				$("#section5.active .title_").addClass("an1");
				$("#section5.active .brabd_con").addClass("an2");
			}

			if(destination.index == 2){/*프리미엄*/
				$("#section2.active .pre_thum .thum_ div:nth-child(1)").addClass("an1");
				$("#section2.active .pre_thum .thum_ div.text_").addClass("an2");
				
				$("#section3 .location_").removeClass("an1on");
				$("#section3 .service_").removeClass("an2on");
			
			}
			if(destination.index == 4){/*로케이션*/
				$("#section3.active .location_").addClass("an1");
				$("#section3.active .service_").addClass("an2");
				
				$("#section3 .location_").addClass("an1on");
				$("#section3 .service_").addClass("an2on");				
			}
			if(destination.index == 4){/*푸터*/
				
			}
		}
	});

	$(document).on('click', '.main_topbtn', function(){
	  fullpage_api.moveTo('page1');
	});

	//비주얼 슬라이더
	/*$(".visual_slider").slick({
		autoplay: true,
		fade: true,
		arrows: true,
		infinite: true,
		dots: false,
		lazyLoad: "progressive",
		focusOnSelect: false,
		speed:400,
		autoplaySpeed:5000,
		prevArrow: $('#vis_arrow_L'),
		nextArrow: $('#vis_arrow_R'),
		pauseOnHover: false
	}).slickAnimation();*/



	//premium
	$(".pre_slide").slick({
        autoplay: false,
	    //fade: true,
		arrows: true,
		infinite: true,
		dots: false,
		lazyLoad: "progressive",
		focusOnSelect: true,
		speed:400,
		prevArrow: $('.pre_arrow_L'),
		nextArrow: $('.pre_arrow_R'),
		autoplaySpeed:4000,
		pauseOnHover: false,
		slidesToShow: 1,
		asNavFor: '.pre_thum',
	})

	$(".pre_thum").slick({
        autoplay:false, 
		fade: true,
		arrows: false,
		infinite: true,
		dots: false,
		focusOnSelect: true,
		speed:400,
		autoplaySpeed:4000,
		pauseOnHover: false,
		slidesToShow: 1,
		asNavFor: '.pre_slide',
	})
    
    $(".unit_box li").click(function(){
		//tab
		var $this = $(this);
		var index = $this.index();
		$this.addClass("active");
		$this.siblings(".unit_box li.active").removeClass("active");

		var $wrap = $this.closest(".inn_unit");
		var $current = $wrap.find("> .tabs > .tab.active");
		var $post = $wrap.find("> .tabs > .tab").eq(index);

		$current.removeClass("active");
		$post.addClass("active");

		$(".slider_unit").slick("setPosition");
	}); 

	var $slider_unit = $('.slider_unit');
	var $progressBar_unit = $('.progress_unit');
	var $progressBarLabel_unit = $( '.slider__label' );
	  
	$slider_unit.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
		var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
		
		$progressBar_unit
		  .css('background-size', calc + '% 100%')
		  .attr('aria-valuenow', calc );
		
		$progressBarLabel_unit.text( calc + '% completed' );
	});
   
	//slider
	$(".slider_unit").slick({
		autoplay:true, 
		dots:false,
		arrows: true,
		infinite: true,
		slidesToShow:2,
		focusOnSelect: false,
		slidesToScroll: 1,
		autoplaySpeed:2000,
		prevArrow:$("#unitPrev"),
		nextArrow:$("#unitNext"),
	});
});