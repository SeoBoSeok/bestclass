function setCookie( name, value, expiredays ) {
    var todayDate = new Date();
    todayDate.setDate( todayDate.getDate() + expiredays );
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function getCookie( name ) {
  var nameOfCookie = name + "=";
  var x = 0;
  while ( x <= document.cookie.length ) {
    var y = (x+nameOfCookie.length);
    if ( document.cookie.substring( x, y ) == nameOfCookie ) {
      if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
          endOfCookie = document.cookie.length;
      return unescape( document.cookie.substring( y, endOfCookie ) );
    }
    x = document.cookie.indexOf( " ", x ) + 1;
    if ( x == 0 )
      break;
  }
  return "";
}

function isMobile(){
	var UserAgent = navigator.userAgent;
	if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null){
		return true;
	}else{
		return false;
	}
}

var param;
var isBrand;
function get_query(){ // url 파라미터를 자동으로 변수화 시킴
    var url = document.location.href;
    var qs = url.substring(url.indexOf("?") + 1).split("&");
	param = url.substring(url.indexOf("?"));
    for(var i = 0, result = {}; i < qs.length; i++){
		if (qs[i] != ""){
			qs[i] = qs[i].split("=");
			result[qs[i][0]] = decodeURIComponent(qs[i][1]);
		}
    }
    return result;
}
var result = get_query();


var getParameters = function (paramName) {
	var returnValue;
	var url = location.href;
	var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&');
	for (var i = 0; i < parameters.length; i++) {
		var varName = parameters[i].split('=')[0];
		if (varName.toUpperCase() == paramName.toUpperCase()) {
			returnValue = parameters[i].split('=')[1];
			return decodeURIComponent(returnValue);
		}
	}
};

//마이페이지 내 관심단지 가져오기
function getMyInterest(){
	$.ajax({
		url: "/plugin/ajax_apt_mypage.php",
		type: "POST",
		dataType: "json",
		async: true,
		cache: false,
		success: function(result) {
			console.log(result);
			$("#my_interest").children().remove();
			if(result.result === 1){
				$("#myInterestArea .more").removeClass('no_data');
				$.each(result.data, function(index, item) { // 데이터 =item
					if(item.apt_subject === '' || item.apt_subject === null || item.apt_subject === 'null' || !item.apt_subject){
					}else{
						let _html = '';
						_html += '<li class="swiper-slide">';
						_html += '<a href="/my_apt">';
						_html += '<span>'+item.img_content+'</span>';
						_html += '<p class="title">'+item.apt_subject+'</p>';
						_html += '<p class="date">'+item.apt_date+'</p>';
						_html += '</li>';
						$("#my_interest").append(_html);
					}
				});
			} else {
				$("#myInterestArea .more").addClass('no_data');
				$("#my_interest").append('<li class="no_data">고객님께서 등록하신 관심단지가 없습니다.<br><br>관심단지로 등록하시면<br> 해당 단지의 유익하고 다양한 정보를 문자/알림톡을 통해<br>빠르게 받아보실 수 있습니다.</li>');
			}
		}
	});
}

$(document).on("keyup", "#reg_mb_hp", function() {
	$(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-") );
});
$(document).on("keyup", "#inp_email1, #inp_email2", function(event) {
	$(this).val( $(this).val().replace( /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/g, "" ) );
});


$(function() {


	/* dark mode */
	// if(isMain === '' || isMain === undefined || isMain === null){
	// 	$(".select_mode").addClass("on");
	// }else{
	// 	setTimeout(function() {
	// 		$(".select_mode").addClass("on");
	// 	}, 3000);
	// }

	$(".select_mode > a").click(function(){
		$(".select_mode").removeClass("on");
	});
	const mode_dark = document.querySelector('.mode_dark');
	const mode_light = document.querySelector('.mode_light');

	if(mode_dark && mode_light){

		mode_dark.addEventListener('click', function(){
			localStorage.setItem('color-theme', 'dark');
			document.documentElement.setAttribute('color-theme', 'dark');
			mode_dark.style.display = 'none';
			mode_light.style.display = 'inline-block';
			$(".select_mode").addClass("on");
		});

		mode_light.addEventListener('click', function(){
			localStorage.setItem('color-theme', 'light');
			document.documentElement.setAttribute('color-theme', 'light');
			mode_light.style.display = 'none';
			mode_dark.style.display = 'inline-block';
			$(".select_mode").addClass("on");
		});

		const $checkbox = document.querySelector('.check_dark');

		// 로컬 스토리지에 저장된 컬러 모드
		const isUserColorTheme = localStorage.getItem('color-theme');

		// 기기의 선호 컬러 모드 가져옴
		const isOsColorTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

		if (isUserColorTheme === 'dark') {
			// Set checkbox
			//$checkbox.checked = true;
			mode_light.style.display = 'inline-block';
			mode_dark.style.display = 'none';

			// Set localStorage
			localStorage.setItem('color-theme', 'dark');
			document.documentElement.setAttribute('color-theme', 'dark');

			setCookie("color-theme", "dark", 1000);

		} else {

			// Set checkbox
			//$checkbox.checked = false;
			mode_light.style.display = 'none';
			mode_dark.style.display = 'inline-block';


			// Set localStorage
			localStorage.setItem('color-theme', 'light');
			document.documentElement.setAttribute('color-theme', 'light');

			setCookie("color-theme", "light", 1000);
		}

	}


	/* scroll down gnb */
	var lastScroll = 50;
    var $offsetTop = $(window).scrollTop();

	if ($offsetTop < 50) {
		$("#hd, body").addClass("top");
	}
    $(window).scroll(function(e) {
        var $offsetTop = $(window).scrollTop();
        if ($offsetTop < 80) {
            $("#hd, body").addClass("top");
		}else if ($offsetTop > lastScroll) {
            $("#hd, body").removeClass("up top");
            if (!$("#hd, body").hasClass("down")) {
                $("#hd, body").addClass("down");
            }
        } else {
            $("#hd, body").removeClass("down top");
            if (!$("#hd, body").hasClass("up")) {
                $("#hd, body").addClass("up");
            }
        }
        lastScroll = $offsetTop;

		//sub_nav
        if ($offsetTop > $(".sub_visual").height()) {
			$("#sub_nav").addClass("fixed");
			$(".main__inner").addClass("fixed");
		}else{
			$("#sub_nav").removeClass("fixed");
			$(".main__inner").removeClass("fixed");
		}

		// dark mode fixed
		if (($offsetTop + $(window).outerHeight()) >= $('#ft').offset().top + $('.select_mode').height()	) {
			if(!$(".select_mode").hasClass("fixed")){
				$(".select_mode").addClass("fixed");
			}
		}else{
			$(".select_mode").removeClass("fixed");
		}
    });

	// 헤더 검색
	$("#btn_search").click(function(){
		$("#search_top").slideDown();
		$("header").addClass("search_on");
		$("#hd .gnb_all_mob_open").addClass("m_hide");

		if(isMobile()){
			$("#hd.m_hd_zindex .logo").show();
			$("#hd.m_hd_zindex .logo_ori").hide();
		}
	});
	$("#btn_search_close").click(function(){
		$("#search_top").slideUp();
		$("header").removeClass("search_on");
		$("#hd .gnb_all_mob_open").removeClass("m_hide");

		if(isMobile()){
			$("#hd.m_hd_zindex .logo").hide();
			$("#hd.m_hd_zindex .logo_ori").show();
		}
	});
	$("#search_top .word").on("change keyup paste", function(){
		$(this).addClass("on");
	});


	if (!isBrand){
		$(".animated").each(function(i){
			var _this = $(this);
			_this.waypoint(function() {
				_this.addClass("fadeInUp");
			}, {
				offset: "80%"
			});
		});
	}

	$('section > .title').addClass("animated fadeInUp delay-0s");
	$('.pc_cate').addClass("animated2 fadeInUp2 delay-0s");
	$('.board .search, .gallery .search, .board .write, .board .list, #subscription, #board_view, .board .view, #my_apt .main__inner, .board .btn-basic-white, #loadMoreBtn').addClass("animated2 fadeInUp2 delay-3s");


	$("#premium section > .wrap, #premium .imgArea").each(function (i) {
        var _this = $(this);
        _this.waypoint(function () {
            _this.addClass("on");
        }, {
            offset: "70%"
        });
    });

	function waypoints(){
		$(".animated").each(function(i){
			var _this = $(this);
			_this.waypoint(function() {
				_this.addClass("fadeInUp");
			}, {
				offset: "80%"
			});
		});
	}

	$("#list .item .animated").each(function (i) {
        var _this = $(this);
        _this.waypoint(function () {
            _this.addClass("fadeInUp");
        }, {
            offset: "70%"
        });
    });

	$("#main section.animated").each(function(i){
		var _this = $(this);
		_this.waypoint(function() {
			_this.addClass("fadeInUp delay-3s");
		}, {
			offset: "70%"
		});
	});
	$(document).on("ready", function(){
		$(".time_wrap ul li").each(function(i){
			var _this = $(this);

			_this.waypoint(function() {
				_this.addClass("on");
			}, {
				offset: "55%"
			});
			_this.waypoint(function() {
				_this.addClass("on");
			}, {
				offset: "35%"
			});
			_this.waypoint(function() {
				_this.removeClass("on");
			}, {
				offset: "25%"
			});
			_this.waypoint(function() {
				_this.removeClass("on");
			}, {
				offset: "75%"
			});
		});
	});

	// 상단 마이페이지 버튼
	$("#member").click(function(){
		console.log('member');
		if(g5_member !== ''){
			//마이페이지 나의 관심단지 출력
			getMyInterest();
		}

		//나의 관심단지 슬라이드
		var myintererst_swiper = new Swiper("#myInterestArea .swiper-container", {
			initialSlide: 0,
			slidesPerView: 2,
			speed: 1000,
			spaceBetween: 14,
	//		freeMode: true,
			resizeReInit: true,
			momentumRatio: 1,
			updateOnWindowResize:true,
			observer: true,
			observeParents: true,
			observeSlideChildren: true,
			simulateTouch:true,
			//centeredSlides:true,
			//centeredSlidesBounds:true,
		});

		$("#rm").addClass("on");
		$("#rm .leftarea").fadeIn();
	});

	// 우측메뉴 닫기 버튼
	$("#my_close").click(function(){
		$("#rm").removeClass("on");
		$("#rm .leftarea").fadeOut();
	});

	// subvisual //
	$(".sub_visual").addClass('on');
	$(".sub_visual nav h2").addClass('animated fadeInUp delay-0s');

	$("#rm .leftarea").click(function(){
		$("#rm").removeClass("on");
		$("#rm .leftarea").fadeOut();
	});



	// gnb active
	const ca_name = getParameters('ca_name');
	if( ca_name ) {
		let now_page = $('#sub_nav .list a[data-info="'+ca_name+'"]');
		$('#sub_nav .list a').removeClass(' active');
		$('#sub_nav .list span').removeClass('txt-large-semibold-dkgrey');
		$('#sub_nav .list span').removeClass('txt-large-semibold-navy');

		now_page.addClass(' active');
		now_page.children().addClass('txt-large-semibold-navy');

		let other_page = $('#sub_nav .list a[data-info!="'+ca_name+'"]');
		other_page.children().addClass('txt-large-semibold-dkgrey');
	}
});

// 셀렉트박스
function CustomSelectBox(selector){
    this.$selectBox = null,
    this.$select = null,
    this.$list = null,
    this.$listLi = null;
    CustomSelectBox.prototype.init = function(selector){
        this.$selectBox = $(selector);
        this.$select = this.$selectBox.find(".box .select");
        this.$list = this.$selectBox.find(".box .slist");
        this.$listLi = this.$list.children("li");
    }
    CustomSelectBox.prototype.initEvent = function(e){
        var that = this;
        this.$select.on("click", function(e){
            that.listOn();
        });
        this.$listLi.on("click", function(e){
            that.listSelect($(this));
        });
        $(document).on("click", function(e){
            that.listOff($(e.target));
        });
    }
    CustomSelectBox.prototype.listOn = function(){
        this.$selectBox.toggleClass("on");
        if(this.$selectBox.hasClass("on")){
            this.$list.css("visibility", "visible");
            this.$list.css("max-height", "200px");
        }else{
            this.$list.css("visibility", "hidden");
            this.$list.css("max-height", "0px");
        };
    }
    CustomSelectBox.prototype.listSelect = function($target){
        $target.addClass("selected").siblings("li").removeClass("selected");
        this.$selectBox.removeClass("on");
        this.$select.text($target.text());
        this.$list.css("visibility", "hidden");
        this.$list.css("max-height", "0px");
    }
    CustomSelectBox.prototype.listOff = function($target){
        if(!$target.is(this.$select) && this.$selectBox.hasClass("on")){
            this.$selectBox.removeClass("on");
            this.$list.css("visibility", "hidden");
            this.$list.css("max-height", "0px");
        };
    }
    this.init(selector);
    this.initEvent();
}

// 게시판 더보기
function loadMorePost(table, start, rows) {
	let url = "/user/board_more_ajax.php?table="+table+"&start="+start+"&rows="+rows;
	jQuery.ajax({
		type:"get",
		url: url,
		dataType:"json",
		success:function(result){
			let content = "";
			let data = result.data;

			if( result.more == false ) {
				$(".more").hide();
			}

			if(data.length > 0){
				return data;
			}
		},
		error:function(request,status,error){
			alert("code = "+ request.status + " message = " + request.responseText + " error = " + error); // 실패 시 처리
		}
	});
}

function strip_tags(str) {
    str = str.toString();
    return str.replace(/<\/?[^>]+>/gi, "");
}


// 관심단지 등록/해제
popInterest = function(apt_id, subject){
	$('#pop.interest').addClass('on');
	$('#pop.interest .apt_name').text(subject);

	let _button_html = '<button type="button" class="btn add_btn" onclick="addAptInterest('+apt_id+');">등록하기</button>';

	$('#pop.interest .agree_check').append(_button_html);

}
function showInterestPopup(mb_id, apt_id, subject){
	if( mb_id == '' ){
		alert('로그인 후에 이용 가능합니다');
		location.href="/user/login?url=";
	}else {
		popInterest(apt_id, subject);
	}
}
function controllInterest(apt_id, mode){
	$.ajax({
		url: "/plugin/ajax_apt_interest.php",
		type: "POST",
		dataType: "json",
		data: {
			'apt_id': apt_id
		},
		async: true,
		cache: false,
		success: function(result) {
			if(result.result == '1'){
				$('#pop.interest').removeClass('on');
				if(result.mode == 'added'){
					$('#pop.result .removed').removeClass('on');
					$('#pop.result .added').addClass('on');

					$('#pop.result').addClass('on');
					$("#apt_add_"+apt_id).hide();
					$("#apt_remove_"+apt_id).show();
				} else if(result.mode == 'removed'){
					$('#pop.result .added').removeClass('on');
					$('#pop.result .removed').addClass('on');
					$('#pop.result').addClass('on');
					$("#apt_remove_"+apt_id).hide();
					$("#apt_add_"+apt_id).show();
				}
			} else {
				alert((result.msg ? result.msg:'잠시 후 다시 시도해 주세요.'));
			}
		}
	});
}
function addAptInterest(apt_id){
	var interest_agree = $('input[name=interest_agree]').is(":checked");
	if(!interest_agree){
		alert("개인정보 수집 이용에 동의하셔야 관심단지로 등록 하실 수 있습니다.");
		return false;
	}
	controllInterest(apt_id, 'add');
}



// 단지정보 팝업 제어
$(function(){
	close_pop = function(e){
		$('#pop .txt_wrap').remove();
		$(e).removeClass('on');
	}

	//관심단지 등록 팝업
	$(".agree_top").click(function(){
		$(this).parent().siblings().find(".agree_cont").slideUp();
		$(this).siblings().slideToggle();
	});

});

// 위치보기 팝업
popMap = function(subject, latlng, addr){

	let c_arr = latlng.split(',');
	let lat = parseFloat(c_arr[0]);
	let lng = parseFloat(c_arr[1]);

	$('#pop.map').addClass('on');

	let iaan = new naver.maps.LatLng(lat, lng),	//좌표
		map = new naver.maps.Map('map', {
			center: iaan,
			zoom: 15,
			scrollWheel: false,
			draggable: false,
		}),
		marker = new naver.maps.Marker({
			map: map,
			position: iaan,
			anchorSize: new naver.maps.Size(50, 50),
			anchorSkew: true,
			anchorColor: "#eee",
		});

	let _html = '';
	_html += '<div class="txt_wrap">';
	_html += '<p class="name"><b>'+subject+'<b></p>';
	_html += '<p class="address">'+addr+'</p>';
	_html += '</div>';

	$('#pop.map > .inner').append(_html);
}

function clickSearch(v){
	let stx = document.getElementById('stx');

	if(stx.value == ''){
		alert('검색어를 입력하세요');
		stx.focus();
		return false;
	}else{
		document.getElementById('fSearch').submit();
		return true;

	}
}

