<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(G5_PATH.'/parts/breadcrumb.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

set_session('ss_delete_token', $token = uniqid(time()));
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$board_skin_url.'/style.css">';
?>
<script>
    $('body').addClass('subpage');
</script>
<div id="sub-visual" class="sub-visual">
    <?php
        include(G5_PATH.'/parts/star.php');
    ?>
  <script>
      $('body').addClass('subpage');
  </script>
  <div id="page-subject" class="absolute-center text-center">
      <!-- <span style="animation-delay:0ms">&nbsp;</span><span style="animation-delay:80ms">옥</span><span style="animation-delay:160ms">천</span><span style="animation-delay:240ms">&nbsp;</span><span style="animation-delay:320ms">문</span><span style="animation-delay:400ms">화</span><span style="animation-delay:480ms">재</span><span style="animation-delay:560ms">야</span><span style="animation-delay:640ms">행</span><span style="animation-delay:720ms">&nbsp;</span><span style="animation-delay:800ms">소</span><span style="animation-delay:880ms">개</span><span style="animation-delay:960ms">&nbsp;</span> -->
      <?php
          echo str_animation($board['bo_subject'], 80);
      ?>
  </div>
  <!-- sub menu -->
  <div id="sub-menu">
    <div class="wrap">
      <table>
        <tbody>
          <tr>
            <td class="home">
                <a href="<?php echo G5_URL;?>"><img src="/images/main/icon_home.png" alt="2022 공주문화재야행" /></a>
            </td>
            <td class="m">
              <div class="mon">
              8夜프로그램
              </div>
              <div class="drop-menu">
                <ul class="m2">
                  <?php
                    foreach($_menu_one as $key => $value) {
                  ?>
                  <li class="m2 active">
                    <a href="<?php echo $value; ?>"><?php echo $key; ?></a>
                  </li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
            </td>
            <td class="m">
              <div class="mon">
              8夜프로그램
              </div>
              <div class="drop-menu">
                <ul class="m2">
                  <?php
                    foreach($_menu_two["8夜프로그램"] as $key => $value) {
                  ?>
                  <li class="m2">
                    <a href="<?php echo $value; ?>"><?php echo $key; ?></a>
                  </li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- sub menu -->
</div>
<section id="content_detail" class="content_body eightnight">
  <section id="container" class="container">
    <div id="contentWrap">
      <section id="content">
        <section id="content_detail" class="content_body">
          <div class="board_info">
            <div id="board_tab">
            <?php
            if ($is_category) {  
              $_categories = array(
                "야경" => "야경<br />夜景",
                "야로" => "야로<br />夜路",
                "야사" => "야사<br />夜史",
                "야설" => "야설<br />夜說",
                "야화" => "야화<br />夜畵",
                "야식" => "야식<br />夜食",
                "야시" => "야시<br />夜市",
                "야숙" => "야숙<br />夜宿"
              );
            ?>
            <?php
              $_sca_str = urldecode(explode("&",$_SERVER["QUERY_STRING"])[1]);
              $_sca = explode("=", $_sca_str)[1];
            ?>
            <ul class="eightnight row text-center clearfix" id="categorywrap">
                <?php foreach($eightcategory_option as $val) { ?>
                  <li class="col"><a href="<?php echo G5_URL.'/bbs/board.php?bo_table=eightnight&sca='.$val; ?>"><span class="<?php echo ($_sca == $val) ? "on" : ""; ?>"><?php echo $_categories[$val]; ?></span></a></li>
                <?php } ?>
            </ul>
            <ul class="eightnight row text-center clearfix" id="categorywrap_Mobile">
                <?php foreach($eightcategory_option as $val) { ?>
                  <li class="col col-3"><a href="<?php echo G5_URL.'/bbs/board.php?bo_table=eightnight&sca='.$val; ?>" class="<?php echo ($_sca == $val) ? "on" : ""; ?>"><span><?php echo $_categories[$val]; ?></span></a></li>
                <?php } ?>
            </ul>
            <?php } ?>
            </div>
            <!-- <p class="page_info">
              <span class="total_page">전체 <b><?php //echo number_format($total_count) ?></b>건 / </span>
              <span class="current_page"><?php //echo $page ?> 페이지</span>
            </p> -->
            <div class="snb-tit-wrap container" style="padding-bottom: 0;">
    <!-- <h3 class="heading1"><span><?php // echo $board['bo_subject'];?></span></h3> -->
    <!-- <div class="text-center fs-15 fc-gray"><span>HOME</span> &gt; <span><?php //echo $board['bo_subject']; ?></span></div> -->
    <h3 class="heading1"><span>
    <?php
    $_sca_str = urldecode(explode("&",$_SERVER["QUERY_STRING"])[1]);
    $_sca = explode("=", $_sca_str)[1];
    $_categories_title = array(
      "야경" => "야경(夜景) \"공주에 반하다\"",
      "야로" => "야로(夜路) \"공주를 즐기다\"",
      "야사" => "야사(夜史) \"근대 역사를 탐하다\"",
      "야설" => "야설(夜設) \"공주를 노래하다\"",
      "야화" => "야화(夜畵) \"시간을 짜다\"",
      "야식" => "야식(夜食) \"알고 싶은 공주\"",
      "야시" => "야시(夜市) \"달밤낭만장터\"",
      "야숙" => "야숙(夜宿) \"오늘밤 공주와 함께\""
    );
      echo $_categories_title[$_sca];
    ?>
    </span>
  </div>
          </div>
              <div class="tstyle_list">
                <div class="dbody" id="listView">
                  <ul>
                  <?php
                      for ($i=0; $i<count($list); $i++) {
                        if ($i%2==0) $lt_class = "even";
                        else $lt_class = "";
                  ?>
                    <?php
                      $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
                    ?>
                    <li class="eight__row clearfix">
                      <div class="eight__row--left" style="background: url('<?php echo $thumb['src'];?>') center center no-repeat; background-size: cover;"></div>
                      <div class="eight__row--right">
                      <?php
                        // echo '<pre>';
                        // print_r($list);
                        // echo '</pre>';
                      ?>
                      <div class="eightnight__title">
                        <?php echo $list[$i]["wr_subject"]; ?>
                        <?php if ($write_href) { ?><a class="gongjuAdmin_single" href="<?php echo G5_URL.'/bbs/write.php?w=u&bo_table=eightnight&wr_id='.$list[$i]["wr_id"]; ?>"><span class="">수정</span></a><?php } ?>
                        <?php if ($write_href) { ?><a class="gongjuAdmin_single del" href="<?php echo G5_URL.'/bbs/delete.php?bo_table=eightnight&wr_id='.$list[$i]["wr_id"].'token='.$token; ?>" onclick="del(this.href); return false;">삭제<i class="fa fa-trash-o" aria-hidden="true"></i></a><?php } ?>
                        <?php if ($list[$i]["wr_link1"]) { ?>
                          <a class="gongjuAdmin_single link" href="<?php echo $list[$i]["wr_link1"] ?>" target="_blank"><span class="">영상링크</span></a>
                        <?php } ?>
                        <?php if ($list[$i]["wr_subject"] == "낭만만찬") { ?>
                          <a class="gongjuAdmin_single link" href="/bbs/content.php?co_id=forms&program=202202" target="_blank"><span class="">사전신청</span></a>
                        <?php } ?>
                        <?php if ($list[$i]["wr_subject"] == "천변기행(골목길 해설사 투어)") { ?>
                          <a class="gongjuAdmin_single link" href="/bbs/content.php?co_id=forms&program=202201" target="_blank"><span class="">사전신청</span></a>
                        <?php } ?>                        
                      </div>
                      <table width="100%" class="table_line"><colgroup><col width="20%"><col></colgroup><tbody><tr><th scope="row">일시 </th>
                        <td>
                          <?php echo $list[$i]["wr_1"]; ?>
                        </td>
                      </tr><tr><th scope="row">장소</th>
                        <td><?php echo $list[$i]["wr_2"]; ?></td>
                      </tr><tr><th scope="row">운영내용</th>
                        <td>
                          <?php // echo $list[$i]["wr_content"]; ?>
                          <?php echo $list[$i]['wr_content']; ?>
                        </td>
                      </tr></tbody></table>
                      </div>
                    </li>
                    <?php } ?>
                    <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
                  </ul>
                </div>
              </div>
              <!-- <div class="pager">
                <a href="#" class="arr first">
                  <span class="sr-only">처음으로</span>
                </a>
                <a href="#" class="arr prev"><span class="sr-only">이전페이지</span></a>
                  <strong class="active">1</strong>        
                <a href="/sub0501/index/page/2" title="다음" class="arr next">
                  <span class="sr-only">다음페이지</span>
                </a>
                <a href="/sub0501/index/page/11" class="arr last">
                  <span class="sr-only">마지막으로</span>
                </a>
              </div> -->
            <div class="label-button"></div>
          <?php if ($write_href) { ?><li class="gongjuAdmin"><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기" style="color: #333;"><i class="fa fa-pencil" aria-hidden="true"></i><span class="">글쓰기</span></a></li><?php } ?>
        </section>
      </section>
    </div>
  </section>
</section>