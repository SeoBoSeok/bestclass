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
        <div id="contents">
        <div class="rv_check">
            <div class="inner_box">
                <div class="dep_name type2 mt-5">신청확인</div>
                <div class="txt_box">2022 공주문화재야행 프로그램! <br class="m_show"><span>신청자 정보를 입력</span>하시면 <br class="pc_show"> 상세정보를 확인해 볼 수 있습니다.</div>
                <div class="info_chk">
                    <form action="check_view.php" method="POST" id="rsvForm" autocomplete="off">
                        <div class="info_form">
                            <div class="title">예약자 이름</div>
                            <div class="name_box">
                                <input type="text" class="name" name="rsv_name">
                                <!-- <div><input type="radio" id="p1" name="rsv_region" value="1" checked=""><label for="p1">내국인</label></div>
                                <div><input type="radio" id="p2" name="rsv_region" value="2"><label for="p2">외국인</label></div> -->
                            </div>
                            <div class="title">연락처</div>
                            <div class="tel_box">
                                <!-- <input type="text" class="tel1" name="rsv_tel1" maxlength="3">
                                <span>-</span>
                                <input type="text" class="tel2" name="rsv_tel2" maxlength="4" onkeyup="numChk(this)">
                                <span>-</span>
                                <input type="text" class="tel3" name="rsv_tel3" maxlength="4" onkeyup="numChk(this)"> -->
                                <select name="rsv_tel1">
                                    <option value="010">010</option>
                                </select>
                                <span>-</span>
                                <input type="text" class="tel1_02" name="rsv_tel2" maxlength="4">
                                <span>-</span>
                                <input type="text" class="tel1_03" name="rsv_tel3" maxlength="4">
                            </div>
                            <div class="title">예약 프로그램</div>
                            <select name="program" id="program">
                                <option>해설사 동반 투어</option>
                                <option>낭만만찬</option>
                            </select>
                        </div>
                        <div class="btn_box">
                            <a class="chk_btn" id="chk_btn"><span>예약확인</span></a>
                            <a class="reset_btn" id="reset_btn"><span>초기화</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
<div class="modal fade" id="successModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">예약 내역</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="id" />
        프로그램 : <span class="check_program"></span><br />  
        예약자 : <span class="check_name"></span><br />
        연락처 : <span class="check_tel"></span><br />
        <!-- 주소 : <input type="text" name="check_address" id="check_address" value="" ><br /> -->
        <!-- 상세주소 : <input type="text" name="check_address" id="check_address_detail" value="" ><br /> -->
        참가인원 : <span class="check_cnt"></span> 명(팀)<br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="failModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">예약내역 확인 불가</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        예약자 명단에 없습니다.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('#chk_btn').click(function(){
            var sendData = $('#rsvForm').serialize();
            $.ajax({
                type:'post',   //post 방식으로 전송
                url:'/api/check.php',   //데이터를 주고받을 파일 주소
                data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
                dataType:'json',   //html 파일 형식으로 값을 담아온다.
                success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                    // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                    // console.log(data.data.program);
                    if (data.result === "success") {
                        $('.check_program').text(data.data.program);
                        $('.check_name').text(data.data.rsv_name);
                        $('.check_tel').text(data.data.rsv_tel);
                        $('#id').val(data.data.id);
                        $('#check_address').val(data.data.rsv_address);
                        $('#check_address_detail').val(data.data.rsv_detailAddress);
                        $('.check_cnt').text(data.data.ride_adult_cnt);
                        if (data.data.id > 446) {
                          $('#successModalCenter .modal-footer').append('<button type="button" class="btn btn-danger" id="address_fix" onclick="fixAddress();">주소 수정</button>');
                        }
                        $('#successModalCenter').modal("show");
                    } else {
                        $('#failModalCenter').modal("show");
                    }
                }
            });
            // $('#successModalCenter').modal("show");
        });
        $('#reset_btn').click(function(){
            location.reload();
        });
    });
    $('#address_fix').click(function(){
      var sendData = {
        'id': $('#id').val(),
        'rsv_address': $('#check_address').val(),
        'rsv_detailAddress': $('#check_address_detail').val()
      }
      $.ajax({
            type:'post',   //post 방식으로 전송
            url:'/api/modify.php',   //데이터를 주고받을 파일 주소
            data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
            dataType:'json',   //html 파일 형식으로 값을 담아온다.
            success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                // console.log(data.data.program);
                if (data.result === "success") {
                    alert('주소가 수정되었습니다.');
                    location.reload();
                } else {
                  alert(data.msg);
                  location.reload();
                }
            }
        });
        // $('#successModalCenter').modal("show");
    });
    function fixAddress() {
      var sendData = {
        'id': $('#id').val(),
        'rsv_address': $('#check_address').val(),
        'rsv_detailAddress': $('#check_address_detail').val()
      }
      $.ajax({
            type:'post',   //post 방식으로 전송
            url:'/api/modify.php',   //데이터를 주고받을 파일 주소
            data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
            dataType:'json',   //html 파일 형식으로 값을 담아온다.
            success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                // console.log(data.data.program);
                if (data.result === "success") {
                    alert('주소가 수정되었습니다.');
                    location.reload();
                } else {
                  alert(data.msg);
                  location.reload();
                }
            }
        });
        // $('#successModalCenter').modal("show");
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>