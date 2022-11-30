<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
?>
<!-- <div class="sub-layout">
    <div class="container">
        <div class="text-center mt-5 fs-30">사전신청</div>
        <div class="text-center fs-15 fc-gray"><span>HOME</span> &gt; <span>공지사항</span> &gt; <span>사전신청</span></div>
    </div>
</div> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col" style="padding: 100px 0; text-align: center;">

        <?php if($member['mb_level'] == 10) { ?>

        <a href="<?php echo G5_URL.'/bbs/content.php?co_id=formscheck'; ?>"><button type="button" class="btn btn-info btn-lg float-right">사전신청확인</button></a>
        


        <div id="contents">
        <div class="apply">
            <div class="inner_box">

                <div class="dep3_box" id="dep3_01">
                <div class="sub_title pt-5">
                    <div class="line_wrap">
                        <div class="text_wrap">사전 프로그램 예약신청</div>
                    </div>
                </div>

                <div class="form_wrap">

                <form id="reserveForm" action="/api/apply.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="157901435960e9c7036484b">

                    <table>
                    <tbody>
                        <!-- <tr>
                        <td class="ttl">프로그램 선택</td>
                        <td class="box1">
                            <ul> -->

                            <!-- <div class="auth-method-wrapper">
                    <div class="auth-method">
                        <div class="auth-method-input">
                            <input type="radio" name="program" value="공주근대건축만들기" class="-check" id="label-naver" key="certNaver01">
                            <label for="label-naver" style="background: url('https://gongju-culturenight.com/data/file/online/thumb-3530184047_KEgu5oWQ_12be29a031a073133aee084dd8e94db3ad55df2a_202x150.jpg') center center no-repeat; background-size: cover;">
                                <div class="status_box">
                                    <span class="auth-sort-wrapper status_color_box naver">
                                        <em class="auth-sort-text landing-status_color status_g active"><span></span>0/100</em>
                                        <em class="auth-sort-text landing-status_color status_y"><span></span>지연</em>
                                        <em class="auth-sort-text landing-status_color status_r"><span></span>혼잡</em>
                                        <em class="auth-sort-text landing-status_color status_n"><span></span>선택불가</em>
                                        <em class="auth-sort-text"><span>공주근대건축만들기</span></em>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="auth-method">
                        <div class="auth-method-input">
                            <input type="radio" name="program" value="스트링아트" class="-check" id="label-kakao" key="certKakao01">
                            <label for="label-kakao" style="background: url('https://gongju-culturenight.com/data/file/online/thumb-3530184047_TUzVMWxF_85d51c8bcaf9726cdbc589babd680afd3616c25d_202x150.png') center center no-repeat; background-size: cover;">
                                <div class="status_box">
                                    <span class="auth-sort-wrapper status_color_box kakao">
                                        <em class="auth-sort-text landing-status_color status_g active"><span></span>0/100</em>
                                        <em class="auth-sort-text landing-status_color status_y"><span></span>지연</em>
                                        <em class="auth-sort-text landing-status_color status_r"><span></span>혼잡</em>
                                        <em class="auth-sort-text landing-status_color status_n"><span></span>선택불가</em>
                                        <em class="auth-sort-text"><span>공주문화재야행 스트링아트</span></em>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="auth-method">
                        <div class="auth-method-input">
                            <input type="radio" name="program" value="소원종이등만들기" class="-check" id="label-pass" key="certPass01">
                            <label for="label-pass" style="background: url('https://gongju-culturenight.com/data/file/online/thumb-3530184047_qX19WCIr_b9a9a9820bc18e0ff774f175de7b396abd19af4b_202x150.jpg') center center no-repeat; background-size: cover;">
                                <div class="status_box">
                                    <span class="auth-sort-wrapper status_color_box pass">
                                        <em class="auth-sort-text landing-status_color status_g active"><span></span>0/100</em>
                                        <em class="auth-sort-text landing-status_color status_y"><span></span>지연</em>
                                        <em class="auth-sort-text landing-status_color status_r"><span></span>혼잡</em>
                                        <em class="auth-sort-text landing-status_color status_n"><span></span>선택불가</em>
                                        <em class="auth-sort-text"><span>소원 종이등 만들기</span></em>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="auth-method pc_auth add">
                        <div class="auth-method-input">
                            <input type="radio" name="program" value="가죽그립톡만들기" class="-check" id="label-nicegen" key="certPub01">
                            <label for="label-nicegen" style="background: url('https://gongju-culturenight.com/data/file/online/thumb-3530184047_J1VeBpco_e674ea05c1df357a532bd917d1f63d8422f653ab_202x150.jpg') center center no-repeat; background-size: cover;">
                                <div class="status_box">
                                    <span class="auth-sort-wrapper status_color_box nicegen">
                                        <em class="auth-sort-text landing-status_color status_g active"><span></span>0/100</em>
                                        <em class="auth-sort-text landing-status_color status_y"><span></span>지연</em>
                                        <em class="auth-sort-text landing-status_color status_r"><span></span>혼잡</em>
                                        <em class="auth-sort-text landing-status_color status_n"><span></span>선택불가</em>
                                        <em class="auth-sort-text"><span>가죽 그립톡 만들기</span></em>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="auth-method">
                        <div class="auth-method-input">
                            <input type="radio" name="program" value="도자기모빌만들기" class="-check" id="label-kcb" key="certKcb01">
                            <label for="label-kcb" style="background: url('https://gongju-culturenight.com/data/file/online/thumb-3530184047_lsLvAKwP_54bcb0fca369cced294ce140453cfc99b33df893_202x150.png') center center no-repeat; background-size: cover;">
                                <div class="status_box">
                                    <span class="auth-sort-wrapper status_color_box kcb">
                                        <em class="auth-sort-text landing-status_color status_g active"><span></span>0/100</em>
                                        <em class="auth-sort-text landing-status_color status_y"><span></span>지연</em>
                                        <em class="auth-sort-text landing-status_color status_r"><span></span>혼잡</em>
                                        <em class="auth-sort-text landing-status_color status_n"><span></span>선택불가</em>
                                        <em class="auth-sort-text"><span>공주야행 도자기 모빌 만들기</span></em>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div> -->

                                                    <!-- <li>
                                        <input type="radio" id="t01" name="tour_course" class="tour_course" data-day-of-week="[1]" data-place="[&quot;\ud0d1\uc2b9\uc7a5\uc18c\ub97c \uc120\ud0dd\ud574 \uc8fc\uc138\uc694&quot;,&quot;\ub300\uc804\uc5ed(\ucd9c\ubc1c)&quot;,&quot;\ud2b8\ub798\ube14\ub77c\uc6b4\uc9c0(\ucd9c\ubc1c)&quot;]" data-times="[[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:20&quot;,&quot;\uc624\uc804 [09:20]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:00]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]],[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:30&quot;,&quot;\uc624\uc804 [09:30]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:10]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]]]" data-price="[[4000,3000,3000],[7000,5000,5000]]" data-limit="20" value="t01">
                                        <label for="t01">월요일 프로그램</label>
                                    </li>
                                                    <li>
                                        <input type="radio" id="t02" name="tour_course" class="tour_course" data-day-of-week="[2]" data-place="[&quot;\ud0d1\uc2b9\uc7a5\uc18c\ub97c \uc120\ud0dd\ud574 \uc8fc\uc138\uc694&quot;,&quot;\ub300\uc804\uc5ed(\ucd9c\ubc1c)&quot;,&quot;\ud2b8\ub798\ube14\ub77c\uc6b4\uc9c0(\ucd9c\ubc1c)&quot;]" data-times="[[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:20&quot;,&quot;\uc624\uc804 [09:20]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:00]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]],[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:30&quot;,&quot;\uc624\uc804 [09:30]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:10]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]]]" data-price="[[4000,3000,3000],[7000,5000,5000]]" data-limit="20" value="t02">
                                        <label for="t02">화요일 프로그램</label>
                                    </li>
                                                    <li>
                                        <input type="radio" id="t03" name="tour_course" class="tour_course" data-day-of-week="[3]" data-place="[&quot;\ud0d1\uc2b9\uc7a5\uc18c\ub97c \uc120\ud0dd\ud574 \uc8fc\uc138\uc694&quot;,&quot;\ub300\uc804\uc5ed(\ucd9c\ubc1c)&quot;,&quot;\ud2b8\ub798\ube14\ub77c\uc6b4\uc9c0(\ucd9c\ubc1c)&quot;]" data-times="[[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:20&quot;,&quot;\uc624\uc804 [09:20]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:00]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]],[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:30&quot;,&quot;\uc624\uc804 [09:30]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:10]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]]]" data-price="[[4000,3000,3000],[7000,5000,5000]]" data-limit="20" value="t03">
                                        <label for="t03">수요일 프로그램</label>
                                    </li>
                                                    <li>
                                        <input type="radio" id="t04" name="tour_course" class="tour_course" data-day-of-week="[4]" data-place="[&quot;\ud0d1\uc2b9\uc7a5\uc18c\ub97c \uc120\ud0dd\ud574 \uc8fc\uc138\uc694&quot;,&quot;\ub300\uc804\uc5ed(\ucd9c\ubc1c)&quot;,&quot;\ud2b8\ub798\ube14\ub77c\uc6b4\uc9c0(\ucd9c\ubc1c)&quot;]" data-times="[[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:20&quot;,&quot;\uc624\uc804 [09:20]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:00]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]],[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:30&quot;,&quot;\uc624\uc804 [09:30]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:10]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]]]" data-price="[[4000,3000,3000],[7000,5000,5000]]" data-limit="20" value="t04">
                                        <label for="t04">목요일 프로그램</label>
                                    </li>
                                                    <li>
                                        <input type="radio" id="t05" name="tour_course" class="tour_course" data-day-of-week="[5]" data-place="[&quot;\ud0d1\uc2b9\uc7a5\uc18c\ub97c \uc120\ud0dd\ud574 \uc8fc\uc138\uc694&quot;,&quot;\ub300\uc804\uc5ed(\ucd9c\ubc1c)&quot;,&quot;\ud2b8\ub798\ube14\ub77c\uc6b4\uc9c0(\ucd9c\ubc1c)&quot;]" data-times="[[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:20&quot;,&quot;\uc624\uc804 [09:20]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:00]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]],[[&quot;&quot;,&quot;\ud0d1\uc2b9 \uc2dc\uac04\uc744 \uc120\ud0dd\ud574\uc8fc\uc138\uc694&quot;],[&quot;09:30&quot;,&quot;\uc624\uc804 [09:30]&quot;],[&quot;14:00&quot;,&quot;\uc624\ud6c4 [14:10]&quot;],[&quot;24:24&quot;,&quot;\uc624\uc804 + \uc624\ud6c4&quot;]]]" data-price="[[4000,3000,3000],[7000,5000,5000]]" data-limit="20" value="t05">
                                        <label for="t05">금요일 프로그램</label>
                                    </li> -->
                                <!-- </ul>
                        </td>
                    </tr> -->
                    <tr>
                        <td class="ttl">예약자 정보</td>
                        <td class="box5">
                            <!-- <div class="box5_01">
                                <span>내/외국인 선택</span>
                                <input type="radio" id="p1" class="rsv_region" name="rsv_region" value="1" checked="">
                                <label for="p1">내국인</label>
                                <input type="radio" id="p2" class="rsv_region" name="rsv_region" value="2">
                                <label for="p2">외국인</label>
                            </div> -->
                            <div class="box5_01">
                                <span>프로그램</span>
                                <input type="text" id="rsv_program" class="rsv_program" name="rsv_program" value="" readonly />
                            </div>
                            <div class="box5_02">
                                <span>예약자명</span>
                                <input type="text" name="rsv_name" placeholder="예약자명을 입력해 주세요.">
                            </div>
                            <div class="box5_03">
                                <span>예약자 연락처</span>
                                <div class="tel1">
                                    <input type="text" class="tel1_01" name="rsv_tel1" maxlength="13" onkeyup="numChk(this)" placeholder="연락처를 입력해 주세요.">
                                    <!-- <span>-</span>
                                    <input type="text" class="tel1_02" name="rsv_tel2" maxlength="4" onkeyup="numChk(this)">
                                    <span>-</span>
                                    <input type="text" class="tel1_03" name="rsv_tel3" maxlength="4" onkeyup="numChk(this)"> -->
                                </div>
                            </div>

                            <div class="box5_04">
                                <span>주소</span>
                                <!-- <input type="text" id="sample6_postcode" placeholder="우편번호"> -->
                                <input type="text" id="rsv_address" placeholder="주소" readonly onclick="sample6_execDaumPostcode()"><br>
                                <input type="text" id="rsv_detailAddress" placeholder="상세주소" style="margin-top: 5px;">
                                <input type="button" onclick="sample6_execDaumPostcode()" value="주소 찾기"><br>
                                <!-- <input type="text" id="sample6_extraAddress" placeholder="참고항목"> -->
                                <!-- <input type="text" id="rsv_address" name="rsv_address">
                                <button type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">주소검색</button> -->
                            </div>
                            <!-- s:개인정보처리방침 -->
                            <div>
                            <fieldset>
                            <!-- <legend>개인정보처리방침</legend> -->
                            <div class="privacy"><span class="agr-tit1">제1조 (개인정보 수집에 대한 동의)</span><strong></strong>(이하 회사)는 이용자들이 회사의 개인정보취급방침 또는 이용약관의 내용에 대하여 “동의”버튼 또는 “취소”버튼을 클릭할 수 있는 절차를 마련하여, “동의”버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다. <span class="agr-tit1">제2조 (개인정보 수집항목)</span> 온라인 문의를 통한 상담을 위해 처리하는 개인정보 항목은 아래와 같습니다.<br>
                            수집항목 : 성명, 주소, 전화번호 <span class="agr-tit1">제3조 (개인정보의 이용목적)</span> 회사는 이용자의 사전 동의 없이는 이용자의 개인 정보를 공개하지 않으며, 원활한 고객상담, 각종 서비스의 제공을 위해 아래와 같이 개인정보를 수집하고 있습니다. 모든 정보는 상기 목적에 필요한 용도 이외로는 사용되지 않으며 수집 정보의 범위나 사용 목적, 용도가 변경될 시에는 반드시 사전 동의를 구할 것입니다.<br>
                            <br>
                            - 성명 : 제품상담에 따른 본인 확인<br>
                            - 이메일, 전화번호 : 제품상담 및 이벤트 관련 고지사항 전달, 새로운 서비스 및 신상품 정보 제공(DM, SMS, 이메일 등 이용)<br>
                            <br>
                            이용자는 개인정보의 수집/이용에 대한 동의를 거부할 수 있습니다. 다만, 동의를 거부하는 경우 온라인 문의를 통한 상담은 불가하며 서비스 이용 및 혜택 제공에 제한을 받을 수 있습니다. <span class="agr-tit1">제4조 (개인정보의 보유 및 이용기간)</span> 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.<br>
                            그리고 상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법렵의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 정보를 보관합니다.<br>
                            이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.<br>
                            <br>
                            - 계약 또는 청약철회 등에 관한 기록 : 5년(전자상거래등에서의 소비자보호에 관한 법률)<br>
                            - 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년(전자상거래등에서의 소비자 보호에 관한 법률)<br>
                            - 시용정보의 수집/처리 및 이용 등에 관한 기록 : 3년(신용정보의 이용 및 보호에 관한 법률)<br>
                            - 회사는 귀중한 이용자의 개인정보를 안전하게 처리하며, 유출의 방지를 위하여 다음과 같은 방법을 통하여 개인정보를 파기합니다.<br>
                            - 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.<br>
                            - 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다
                            <style type="text/css">.agr-tit1{display: block;margin: 15px 0 10px 0;font-size: 13px;color: #666;font-weight:bold;border-bottom: 1px solid #ddd;padding-bottom:13px;}
                            input[type=submit] {width: 200px; padding: 10px 0;}
                            @media screen and (max-width: 750px){
                            .agr-tit1{margin: 15px 0 10px 0;font-size: 13px;padding-left: 15px;}
                            .agr-tit2{margin: 20px 0;font-size: 13px;}
                            .agr-tit3{margin: 20px 0;font-size: 13px;}
                            }
                            </style>
                            </fieldset>
                            </div>
                            <div class="box5_05">
                                <label><input type="checkbox" name="agree" id="agree" /> 개인정보 수집 동의</label>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- <tr>
                        <td class="ttl">예약 인원</td>
                        <td class="box6 ride_count">
                            <div class="box6_01">
                                <select name="ride_adult_cnt" id="ride_adult_cnt">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                                <span class="txt">성인(중학생 이상 기준)</span>
                            </div>
                            
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <td class="ttl">예약자 명단</td>
                        <td class="box7">
                            <div class="type_choice hidden">
                                <input type="radio" name="type_choice" id="direct" value="default" checked="">
                                <label for="direct">직접</label>
                                <input type="radio" name="type_choice" id="groupName" value="group">
                                <label for="groupName">단체명</label>
                                <input type="radio" name="type_choice" id="csvbtn" value="csv">
                                <label for="csvbtn">CSV</label>
                            </div>
                            <div class="direct choice_box" id="rider_list"></div>
                            <div class="groupName choice_box hidden">
                                <input type="text" name="group_name">
                            </div>
                            <div class="csvbtn choice_box hidden">
                                <div class="title">
                                    <span>파일 업로드</span>
                                    <a href="/kor/images/file/list_form.csv" class="down_btn">파일 양식 다운</a>
                                    <br class="m_show">
                                    <span class="txt">* 양식을 다운받아 작성하여 올려주시기 바랍니다.</span>
                                </div>
                                <div class="fileBox">
                                    <input type="text" class="fileName" readonly="readonly">
                                    <label for="uploadBtn" class="btn_file">찾아보기</label>
                                    <input type="file" id="uploadBtn" class="uploadBtn" name="csv_file">
                                </div>
                            </div>
                            <div class="txt">※ 코로나19로 탑승자 명단을 정확히 작성해 주세요. (이름/전화번호/성별/연령/지역)</div>
                        </td>
                    </tr> -->
                    <!-- <tr>
                        <td class="ttl">특이사항</td>
                        <td class="box10"><textarea name="memo"></textarea></td>
                    </tr> -->
                    </tbody>
                </table>

                <div class="bottom_txt" style="padding-right: 20px;">
                ※ 전화번호당 한번만 참여 가능합니다.<br />
                ※ 주소 오기로 인한 미수령시에는 책임지지 않습니다.<br />
                </div>
                    <div class="btn_box">
                    <!-- <button class="rv_btn hidden" type="submit">예약하기</button> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" id="reservation_check">
                    예약 내역 확인하기
                    </button>
                </div>
        
            </form>

                </div>
            </div>
        </div>
    </div>

        <?php } else { ?>

        <img src="/images/main/prepare.png" alt="2021공주문화재야행 업데이트 준비중" style="width: 100%;">

        <?php } ?>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">예약 내역 확인</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        예약자 : <span class="check_name"></span><br />
        연락처 : <span class="check_name"></span><br />
        주소 : <span class="check_name"></span><br />
        개인정보 동의 <span class="check_name"></span><br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
        <button type="button" class="btn btn-primary">예약하기</button>
      </div>
    </div>
  </div>
</div>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    // document.getElementById("rsv_extraAddress").value = extraAddr;
                
                } else {
                    // document.getElementById("rsv_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                // document.getElementById('sample6_postcode').value = data.zonecode;
                document.getElementById("rsv_address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("rsv_detailAddress").focus();
            }
        }).open();
    }
    // if (!$('input:checkbox[name=agree1]').is(':checked')) {
    //     alert("개인정보처리방침에 동의해주세요.");
    //     return false;
    // }
</script>
<script>
    document.getElementById("reservation_check").addEventListener("click", function(){
        console.log($('input:checkbox[name=agree]:checked').val());
        // if ($('input[name=agree]').val())
        if ($('input:checkbox[name=agree]:checked').val()) {
            $('#exampleModalCenter').modal('show');
        } else {
            alert("개인정보 수집 동의에 체크하셔야 합니다");
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>