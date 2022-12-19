<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<!-- } 하단 끝 -->


<!-- <div id="pop" class="gallery">
	<span class="btn_close">
		<a href="javascript:void(0);" onclick="close_pop('#pop.gallery');"><img src="/_imgs/icon-material-close.svg"></a>
	</span>
	<div class="inner"></div>
</div>

<div id="pop" class="map">
	<span class="btn_close">
		<a href="javascript:void(0);" onclick="close_pop('#pop.map');"><img src="/_imgs/icon-material-close.svg"></a>
	</span>
	<div class="inner">
		<div id="map" style="width: 100%;height: 600px;"></div>
	</div>
</div>

<div id="pop" class="interest">	
	<div class="inner">
		<span class="btn_close">
			<a href="javascript:void(0);" onclick="close_pop('#pop.interest');"><img src="/_imgs/icon-material-close.svg"></a>
		</span>
		<div id="interest" style="width: 100%;min-height: 630px;">
			<h2 class="title">관심단지 등록</h2>
			<p class="subscr">관심단지로 등록하시면 단지의 정보를 SMS로 보내드립니다.</p>
			<h4 class="apt_name"></h4>subject
			<h3 class="agree_title">약관동의</h3>
			<div class="agree">
				<div class="agree_top">
					<p>마케팅 목적에 따른 개인정보 수집 이용 동의 (필수)</p>
					<a href="javascript: void(0);" class="arrow_down"></a>
				</div>
				<div class="agree_cont">
					대우산업개발주식회사는 (이하 '회사' 라 칭함) 「개인정보보호법」, 「정보통신망 이용촉진 및 정보보호에 관한 법률」을 준수하고 있으며, 정보주체의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 정보주체의 고충을 원활하게 처리할 수 있도록 다음과 같은 개인정보처리방침을 제정하고 이를 준수하고 있습니다. 
					회사의 "개인정보처리방침"은 관련 법률 및 지침의 변경 또는 내부운영 방침의 변경에 따라 변경 될 수 있습니다. 회사의 "개인정보처리방침"이 변경될 경우 변경된 회사의 "개인정보처리방침"을 영업장에 비치하거나 변경된 사항을 회사 홈페이지(http://www.dwconstruction.com)를 통하여 공지합니다. 
				</div>
			</div>
			<div class="agree">
				<div class="agree_top">
					<p>개인정보 처리업무 위탁 안내 (필수)</p>
					<a href="javascript: void(0);" class="arrow_down"></a>
				</div>
				<div class="agree_cont">
					대우산업개발주식회사는 (이하 '회사' 라 칭함) 「개인정보보호법」, 「정보통신망 이용촉진 및 정보보호에 관한 법률」을 준수하고 있으며, 정보주체의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 정보주체의 고충을 원활하게 처리할 수 있도록 다음과 같은 개인정보처리방침을 제정하고 이를 준수하고 있습니다. 
					회사의 "개인정보처리방침"은 관련 법률 및 지침의 변경 또는 내부운영 방침의 변경에 따라 변경 될 수 있습니다. 회사의 "개인정보처리방침"이 변경될 경우 변경된 회사의 "개인정보처리방침"을 영업장에 비치하거나 변경된 사항을 회사 홈페이지(http://www.dwconstruction.com)를 통하여 공지합니다. 
				</div>
			</div>
			<p class="agree_check">
				<input type="radio" name="interest_agree" value="1" id="agree">
				<label for="agree">개인정보 수집 이용에 모두 동의합니다</label>
			</p>
			<button type="button" class="btn add_btn" id="add_interest">등록하기</button>
		</div>
	</div>
</div>

<div id="pop" class="result">
	<div class="inner">
		<span class="btn_close">
			<a href="javascript:void(0);" onclick="close_pop('#pop.result');"><img src="/_imgs/icon-material-close.svg"></a>
		</span>
		<div class="wrap">
			<div class="added">
				<h2>관심단지로 등록되었습니다.</h2>
				<p>마이페이지 > 나의 관심단지에서 확인해 보세요.</p>
			</div>
			<div class="removed">
				<h2>관심단지가 해제되었습니다.</h2>
			</div>
			<button type="button" class="btn close_btn" onclick="close_pop('#pop.result');">닫기</button>
		</div>
	</div>
</div> -->

<!--
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>
-->
	

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->
</div>
<div id="ft">

		<!-- 다크모드 출력 -->
		<!-- <div class="select_mode on fixed">
			<a class="mode_dark absolute" style="display: inline-block;">
				<span class="wrap">
					<span class="mode_icon"><img src="_imgs/ico_mode_moon.svg"></span>
					<span class="mode_txt ellipsis_1">다크모드로 보기</span>
				</span>
			</a>
			<a class="mode_light absolute" style="display: none;">
				<span class="wrap">
					<span class="mode_icon"><img src="_imgs/ico_mode_sun.svg"></span>
					<span class="mode_txt ellipsis_1">라이트모드로 보기</span>
				</span>
			</a>
		</div> -->
		<!-- //다크모드 출력 -->

		<!-- 푸터 -->
		<!-- 푸터 -->
		<footer class="footer">
			<span class="logo"><img src="/_imgs/logo.png" alt="logo"></span>
			<div class="middle">            
				<div class="info">
					<span class="m_af_line">사업자등록번호 : 122-23-45677</span>
					<span class="m_af_line">(주)베스트산업개발</span>
					<span class="pc_af_line break"><span class="m_hide">주소 : </span>대전시 유성구 베스트대로 17 타워 11층</span>
					<span>고객센터: 042-931-3600</span>
				</div>
				<p class="copyright">Copyright ⓒBestClass. All Rights Reserved.</p>
			</div>
		</footer>
		<!-- 푸터 -->
		<!-- 푸터 -->
		  
		<button type="button" id="top_btn">
			<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
		</button>

		<script>
		$(function() {
			$("#top_btn").click(function(){		
				$("html, body").animate({scrollTop:0}, '500');
				return false;
			});
			$("#family_btn").click(function(){
				$("#family .flist").slideToggle();
			});

		});
		</script>
	</div>
</body>
<!-- <script src="/js/common.js?ver=blot022819" /></script>
<script src="/_js/common.js?ver=blot022819" /></script>
 -->

</html>