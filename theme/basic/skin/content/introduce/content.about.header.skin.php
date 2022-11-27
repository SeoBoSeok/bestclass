<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_PATH.'/parts/breadcrumb.php');
?>

<?php
if (file_exists($himg)) {
    // $top_img_url = G5_DATA_URL.'/content/'.$co_id.'_h';
    $top_img_url = G5_DATA_URL.'/content/'.$co_id.'_h';
?>
    <!-- <div id="sub-visual" class="sub-visual" style="background-image:url(<?php //echo $top_img_url; ?>)"> -->
    <div id="sub-visual" class="sub-visual">
    <?php include(G5_PATH.'/parts/star.php'); ?>
<?php
} else {
?>
    <div id="sub-visual" class="sub-visual">
    <?php include(G5_PATH.'/parts/star.php'); ?>
<?php
}
?>
<script>
    $('body').addClass('subpage');
</script>
    <div id="page-subject" class="absolute-center text-center">
    <?php
        echo str_animation($g5['title'], 80);
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
                공주문화재야행 소개                            
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
                공주문화재야행 소개
              </div>
              <div class="drop-menu">
                <ul class="m2">
                  <?php
                    foreach($_menu_two["공주문화재야행 소개"] as $key => $value) {
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