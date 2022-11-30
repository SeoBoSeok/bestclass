<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=o4sga0em0j"></script>


<div class="text-center mt-5 fs-30">오시는길</div>
<div class="text-center fs-15 fc-gray"><span>HOME</span> &gt; <span>오시는길</span></div>

<div class="container-section clearfix">
        <div id="page6" class="pages">
    <div class="wrap">
        <div class="map">
        </div>
        <div class="map-tx">
            <div class="tx-cts tx1">
                <ul class="w-50">
                    <li class="li-tit fw-700">장소</li>
                    <li>옥천 구읍(옥천읍 상계리, 하계리, 교동리),<br class="web">
                        옥천 전통문화체험관 일원(충청북도 옥천군 옥천읍 향수길 100) </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">연락처</li>
                    <li>옥천군청 문화관광과 043-730-3726</li>
                    <li>충청북도문화재연구원 043-279-5481</li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">지정주차장 3곳</li>
                    <li>충청북도 옥천군 옥천읍 하계리 56-1<span class="m_nob"> /</span><br class="addBr"> 충청북도 옥천군 옥천읍 하계리 14-1<br class="web"><br class="addBr">충청북도 옥천군 옥천읍 하계리 2-5<br class="addBr"><!--<span class="m_nob"> /</span> 충청북도 옥천군 옥천읍 교동리 308-6--></li>
                </ul> 
            </div>
            <div class="tx-cts tx2">
                
                <ul class="w-50">
                    <li class="li-tit fw-700">옥천IC에서 오시는 방법</li>
                    <li>
                        옥향수 공원오거리에서 ‘속리산, 보은, 대전’ 방면으로 좌회전<br class="web">
                        → 문정삼거리에서 ‘석탄리, 정지용생가, 육영수생가’방면으로 오른쪽 방향<br class="web">
                        → 구읍삼거리에서 ‘구읍’ 방면으로 왼쪽 방면
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">승용차로 오시는 방법</li>
                    <li>
                        옥천톨게이트 → 향수 공원오거리에서 ‘속리산, 보은, 대전’ 방면으로 좌회전<br class="web">
                        → 문정삼거리에서 ‘석탄리, 정지용생가, 육영수생가’방면으로 오른쪽 방향<br class="web">
                        → 구읍삼거리에서 ‘구읍’ 방면으로 왼쪽 방면
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">옥천역에서 오시는 방법</li>
                    <li>시내버스 종점 차고지 38번 버스 승차 → 동안리 하차</li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">옥천 시외버스터미널에서 오시는 방법</li>
                    <li>금구리 정류소 38번 버스 승차 → 동안리 하차</li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">대전 복합터미널에서 오시는 방법</li>
                    <li>대전복합터미널→ 옥천시외버스터미널 → <br class="mm_mob">금구리 정류소 38번 버스 승차 <br class="web">→ 동안리 하차</li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">청주 시외버스터미널에서 오시는 방법</li>
                    <li>청주 시외버스터미널 → 옥천시외버스터미널 → <br class="mm_mob">금구리 정류소 38번 버스 승차 <br class="web">→ 동안리 하차</li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">관 내 왕복 셔틀버스 운영 (시간 추후 공지)</li>
                    <li>옥천역 → 옥천시외버스터미널  → 옥천군청  →  행사장 <br>행사장  → 옥천군청  →  옥천시외버스터미널  →  옥천역</li>
                </ul>
                              
            </div>
            <p class="psTx fs-14">※주차공간이 협소하오니 대중교통을 이용해 주세요</p>
        </div>
    </div>
</div>
</div>

<script>
var mapOptions = {
  center: new naver.maps.LatLng(37.3595704, 127.105399),
  zoom: 10
};

var map = new naver.maps.Map('map', mapOptions);
</script>