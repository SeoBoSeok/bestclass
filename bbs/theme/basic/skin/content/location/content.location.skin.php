<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
?>
<div class="sub-layout">

<script>
    $('body').addClass('subpage');
</script>
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=o4sga0em0j&callback=initMap"></script>

<div class="sub-layout">
    <div class="container">
        <div class="text-center mt-5 fs-30">오시는길</div>
        <div class="text-center fs-15 fc-gray"><span>HOME</span> &gt; <span>오시는길</span></div>
    </div>
</div>

<div class="container-section clearfix">
        <div id="page6" class="pages">
    <div class="wrap">
        <div id="map" style="width:100%;height:650px;margin-top: 50px;">
        </div>
        <div class="map-tx">
            <div class="tx-cts tx1">
                <ul class="w-50">
                    <li class="li-tit fw-700">장소</li>
                    <li>공주 원도심 제민천 및 무령왕릉과 왕릉원 일원</li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">문의사항</li>
                    <li>공주시청 문화재과 041-840-8204</li>
                    <li>공주문화재단 생활문화팀 041-852-1322</li>
                </ul>
                <!-- <ul class="w-50">
                    <li class="li-tit fw-700">지정주차장</li>
                    <li>충청북도 옥천군 옥천읍 하계리 56-1<span class="m_nob"> /</span><br class="addBr"> 충청북도 옥천군 옥천읍 하계리 14-1<br class="web"><br class="addBr">충청북도 옥천군 옥천읍 하계리 2-5<br class="addBr"><span class="m_nob"> /</span> 충청북도 옥천군 옥천읍 교동리 308-6</li>
                </ul>  -->
            </div>
            <div class="tx-cts tx2" style="margin-top: 0;">
                <div class="row">
                    <div class="col">
                        <div class="tx-cts bluewrap dblock">대중교통</div>
                    </div>
                </div>
                <ul class="w-50">
                    <li class="li-tit fw-700">대전(유성)에서 오시는 방법</li>
                    <li>
                        - 유성시외버스정류소<br class="web">
                        → 공주종합버스터미널<br class="web">
                        → 중학동<br />
                        <a href="https://transportation.asamaru.net/%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4/%EC%8B%9C%EA%B0%84%ED%91%9C/%EC%9C%A0%EC%84%B1%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4%EC%A0%95%EB%A5%98%EC%86%8C/%EC%B6%9C%EB%B0%9C/%EA%B3%B5%EC%A3%BC%EC%A2%85%ED%95%A9%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EB%8F%84%EC%B0%A9/" target="_blank">※ 버스 시간표</a>
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">대전(복합터미널)에서 오시는 방법</li>
                    <li>
                        - 대전복합터미널<br class="web">
                        → 공주종합버스터미널<br class="web">
                        → 중학동<br />
                        <a href="https://transportation.asamaru.net/%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4/%EC%8B%9C%EA%B0%84%ED%91%9C/%EB%8C%80%EC%A0%84%EB%B3%B5%ED%95%A9%ED%84%B0%EB%AF%B8%EB%84%90/%EC%B6%9C%EB%B0%9C/%EA%B3%B5%EC%A3%BC%EC%A2%85%ED%95%A9%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EB%8F%84%EC%B0%A9/" target="_blank">※ 버스 시간표</a>
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">세종시에서 오시는 방법</li>
                    <li>
                        - 세종고속시외버스터미널<br class="web">
                        → 공주종합버스터미널<br class="web">
                        → 중학동<br />
                        <a href="https://transportation.asamaru.net/%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4/%EC%8B%9C%EA%B0%84%ED%91%9C/%EC%84%B8%EC%A2%85%EA%B3%A0%EC%86%8D%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EC%B6%9C%EB%B0%9C/%EA%B3%B5%EC%A3%BC%EC%A2%85%ED%95%A9%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EB%8F%84%EC%B0%A9/" target="_blank">※ 버스 시간표</a>
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">서울에서 오시는 방법</li>
                    <li>- 서울고속버스터미널<br class="web">→ 공주종합버스터미널<br class="web">→ 중학동<br />
                    <a href="https://transportation.asamaru.net/%EA%B3%A0%EC%86%8D%EB%B2%84%EC%8A%A4/%EC%8B%9C%EA%B0%84%ED%91%9C/%EC%84%9C%EC%9A%B8%EA%B3%A0%EC%86%8D%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EC%B6%9C%EB%B0%9C/%EA%B3%B5%EC%A3%BC%EC%A2%85%ED%95%A9%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EB%8F%84%EC%B0%A9/" target="_blank">※ 버스 시간표</a>
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">공주 종합버스터미널에서 오시는 방법</li>
                    <li>- 100번(공주 종합버스터미널) → 중학동 <span class="time">30분</span></li>
                    <li>- 101번(공주 종합버스터미널) → 중동사거리</li>
                    <li>- 125번(공주 종합버스터미널) → 중학동</li>
                    <li>- 200번(공주 종합버스터미널) → 중학동</li>
                    <li>- 500번(공주 종합버스터미널) → 중동사거리
                    <br /><a href="https://m.map.naver.com/directions/#/publicTransit/list/%25EA%25B3%25B5%25EC%25A3%25BC%25EC%25A2%2585%25ED%2595%25A9%25EB%25B2%2584%25EC%258A%25A4%25ED%2584%25B0%25EB%25AF%25B8%25EB%2584%2590,127.1347324,36.4685158,127.1348332,36.4682426,false,13323229/%25EA%25B3%25B5%25EC%25A3%25BC%25EB%25B0%2598%25EC%25A3%25BD%25EB%258F%2599%25EB%258B%25B9%25EA%25B0%2584%25EC%25A7%2580%25EC%25A3%25BC,127.1224369,36.4516611,,,false,20111714/0" target="_blank">※ 버스 노선(시간)</a>
                    </li>
                </ul>
                              
            </div>
            <p class="psTx fs-14">※주차공간이 협소하오니 대중교통을 이용해 주세요</p>
        </div>
    </div>
</div>
</div>

<script>
var mapOptions = {
  center: new naver.maps.LatLng(36.4592626, 127.1198928),
  zoom: 15,
  scaleControl: true,
  logoControl: true,
  mapDataControl: false,
  zoomControl: true,
};
function initMap() {
    var map = new naver.maps.Map('map', mapOptions);
    var polygon = new naver.maps.Polygon({
        map: map,
        paths: [
            [
                new naver.maps.LatLng(36.450661798071515, 127.12065610505286),
                new naver.maps.LatLng(36.45653253301743, 127.12072200222792),
                new naver.maps.LatLng(36.45653774203083, 127.1259237240578),
                new naver.maps.LatLng(36.450642796208626, 127.1259848268245),
                new naver.maps.LatLng(36.450661798071515, 127.12065610505286),
                // new naver.maps.LatLng(36.45672660640219, 127.12331310336437),
                // new naver.maps.LatLng(36.454459578802755, 127.12370806257351),
                // new naver.maps.LatLng(36.45280619520924, 127.12364522815555),
                // new naver.maps.LatLng(36.45112389539297, 127.12398632929374),
                // new naver.maps.LatLng(36.45054627331101, 127.12360034643024),
                // new naver.maps.LatLng(36.45056320164446, 127.12249547378752)
            ]
        ],
        fillColor: '#b39fd9',
        fillOpacity: 0.3,
        strokeColor: '#452d9e',
        strokeOpacity: 0.6,
        strokeWeight: 3,
        clickable: true
    });
}
</script>
</div>