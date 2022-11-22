/* gnb begin */
$(function(){
	$(".snbWrap").hide();
	$(".headerWrap #gnb > li").mouseover(function(){
		$(".snbWrap").slideDown("fast");
		$(".gnbBg").fadeIn(300);
		$("header").addClass('headerWrap_active');
		//return false;

		if($(window).scrollTop() > 100) {
			            
		} else {
		
		}
	});

	if(gid != 0) {
		$("#gnb li:nth-child(" + gid + ")").addClass("currentGnb"); // 현재 페이지 효과 추가
		$("#snb li:nth-child(" + gid + ") ul li:nth-child(" + sid + ")").addClass("currentSnb");
		// $("#snb li:nth-child(" + gid + ") ul li:nth-child(" + sid + ") a").css({"color":"#004f97", "font-weight":"800"}); // 현재 페이지 효과 추가
	}

	$("#gnb li").mouseover(function(){ // 대메뉴에 커서 대면
		if(gid != 0) {
			$("#gnb li:nth-child(" + gid + ")").addClass("currentGnb");
			$("#gnb li").not("#gnb li:nth-child(" + gid + ")").removeClass("currentGnb");
		} else {
			$("#gnb li").removeClass("currentGnb"); // 다른 버튼에 들어가있던 현재 페이지 효과 다 빼고
		}
		var seq = $("#gnb > li").index(this) + 1; // 현재 마우스오버하고 있는 메뉴 버튼의 인덱스를 매겨서
		$("#gnb li:nth-child(" + seq + ")").addClass("currentGnb"); // 현재 페이지 효과 추가
       

	    if($(window).scrollTop() > 100) {
            
		} else {

		}

	});

	$("#snb li").mouseover(function(){ // 서브메뉴에 커서 대면
		if(gid != 0) {
			$("#gnb li:nth-child(" + gid + ")").addClass("currentGnb");
			$("#gnb li").not("#gnb li:nth-child(" + gid + ")").removeClass("currentGnb");
		} else {
			$("#gnb li").removeClass("currentGnb"); // 다른 버튼에 들어가있던 현재 페이지 효과 다 빼고
		}
		var seq = $("#snb > li").index(this) + 1; // 현재 마우스오버하고 있는 메뉴 버튼의 인덱스를 매겨서
		$("#gnb li:nth-child(" + seq + ")").addClass("currentGnb"); // 현재 페이지 효과 추가
        
		if($(window).scrollTop() > 100) {
			
		} else {

		}
	});

	$(".headerWrap").mouseleave(function(){
		$("footer").css({"z-index":"999"});
		if(gid != 0) {
			$("#gnb li:nth-child(" + gid + ")").addClass("currentGnb");
			$("#gnb li").not("#gnb li:nth-child(" + gid + ")").removeClass("currentGnb");
		} else {
			$("#gnb li").removeClass("currentGnb"); // 다른 버튼에 들어가있던 현재 페이지 효과 다 빼고
		}
		$("header").removeClass('headerWrap_active');		

		/*스크롤시 변경*/
		if($(window).scrollTop() > 100) {
			
		

		} else {
			
			
		}

		closeMenu();
	});
});

function closeMenu(){
	$(".snbWrap").slideUp("fast", function(){
		$(".gnbBg").fadeOut(300);
		$(".headerWrap > *").clearQueue();
	});
}

function gnbStyleOnTop(scrolling){
	$('.headerWrap').removeClass('sticky');

	
}

function gnbStyleOnScroll(scrolling){
	$('.headerWrap').addClass('sticky');

	
}

$(window).load(function() {
	$('.headerWrap').hover(
		function() {
			gnbStyleOnScroll(true);
		},
		function() {
			if($(window).scrollTop() == 0) {
				if (gid == "0") {
					gnbStyleOnTop(true);
				} else {
					gnbStyleOnScroll(true);
				}
			}
		}
	);

	if (gid != "0") gnbStyleOnScroll(true);
});

$(window).scroll(function(){
	/* 서브메뉴 상에서 마우스 스크롤할때 fixed 속성때문에 서브메뉴가 따라 내려오는것을 방지 */
	var onTop = $(window).scrollTop();

	if(onTop!=0){
		//$(".snbWrap").hide(); // 스크롤 후 빠르게 메뉴에 커서를 대면 서브메뉴가 나오지 않음.
	}

	if($(window).scrollTop() == 0){
		if (gid == "0") {
			gnbStyleOnTop(true);
		} else {
			gnbStyleOnScroll(true);
		}
	} else {
		gnbStyleOnScroll(true);
	}
});
/* gnb end */
