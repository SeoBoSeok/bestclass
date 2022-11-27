<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
include_once(G5_PATH.'/parts/breadcrumb.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$board_skin_url.'/style.css">';
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
<div id="sub-visual" class="sub-visual">
  <?php
      include(G5_PATH.'/parts/star.php');
  ?>
  <script>
      $('body').addClass('subpage');
  </script>
  <div id="page-subject" class="absolute-center text-center">
    <?php
      // echo str_animation(cut_str(get_text($view['wr_subject']), 70), 80);
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
                공지사항                            
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
                공지사항
              </div>
              <div class="drop-menu">
                <ul class="m2">
                  <?php
                    foreach($_menu_two["공지사항"] as $key => $value) {
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
<section id="content_detail" class="content_body">
  <div class="type2">
    <?php
    include_once(G5_PATH.'/parts/board.list.content.php');
    ?>

    <?php
    include_once(G5_PATH.'/parts/board.prev.next.php');
    ?>
  <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>">수정<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li><?php } ?>
</div>
</section>
