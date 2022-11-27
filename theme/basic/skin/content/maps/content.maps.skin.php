<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/debugger.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
?>
<style>
hr {
  width: 100%;
  padding-bottom: 10px;
}
</style>
<div class="sub-layout">
    <div class="container">
        <div class="text-center mt-5 fs-30">행사지도</div>
        <div class="text-center fs-15 fc-gray"><span>HOME</span> &gt; <span>오시는길</span> &gt;  <span>행사지도</span></div>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col" style="padding: 50px 0; text-align: center;">
      <div class="ui-tablist">
        <ul class="tab-ul" role="tablist">
          <li role="presentation" class="js-tab on"><b>공주문화재야행 행사지도</b></li>
        </ul>
      </div>
      <a href="/images/main/info.png" target="_blank"><img src="/images/main/info.png" alt="2021공주문화재야행 행사지도" style="width: 100%;"></a>
    </div>
  </div>
  <hr>
  <div class="row">
    <br>
    <div class="col" style="padding: 50px 0; text-align: center;">
      <div class="ui-tablist-program">
        <ul class="tab-ul-program" role="tablist">
          <li role="presentation" class="js-tab on"><b>공주문화재야행 행사리플렛</b></li>
        </ul>
      </div>
      <a href="/images/main/leaflet.pdf" target="_blank"><img src="/images/main/leaflet.png" alt="2021공주문화재야행 행사리플렛" style="width: 100%;"></a>
    </div>
  </div>
</div>
