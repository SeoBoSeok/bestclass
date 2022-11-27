<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
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
        <!-- <span style="animation-delay:0ms">&nbsp;</span><span style="animation-delay:80ms">옥</span><span style="animation-delay:160ms">천</span><span style="animation-delay:240ms">&nbsp;</span><span style="animation-delay:320ms">문</span><span style="animation-delay:400ms">화</span><span style="animation-delay:480ms">재</span><span style="animation-delay:560ms">야</span><span style="animation-delay:640ms">행</span><span style="animation-delay:720ms">&nbsp;</span><span style="animation-delay:800ms">소</span><span style="animation-delay:880ms">개</span><span style="animation-delay:960ms">&nbsp;</span> -->
    <?php
        echo str_animation($g5['title'], 80);
    ?>
    </div>
    <div id="sub-menu">
        <div class="wrap">
            <table>
                <tbody>
                  <tr>
                    <td class="home">
                        <img src="/images/main/icon_home.png" alt="" class="">
                    </td>
                                        <td class="m">
                        <div class="mon">
                            공주 문화재야행                          
                        </div>
                        <div class="drop-menu">
                            <ul class="m2">
                                                                    <li class="m2 active">
                                        <a href="/menu/view/1">
                                            공주 문화재야행 소개                                        </a>
                                    </li>
                                                                    <li class="m2 ">
                                        <a href="/bbs/board.php?bo_table=eightnight">
                                        8夜프로그램                                        </a>
                                    </li>
                                                                    <li class="m2 ">
                                        <a href="/bbs/content.php?co_id=culturalproperty">
                                            문화재소개                                        </a>
                                    </li>
                                                                    <li class="m2 ">
                                        <a href="/menu/view/4">
                                            커뮤니티                                        </a>
                                    </li>
                                                                    <li class="m2 ">
                                        <a href="/bbs/content.php?co_id=location">
                                            오시는길                                        </a>
                                    </li>
                                                            </ul>
                        </div>
                    </td>
                                        <td class="m">
                        <div class="mon">
                        문화재소개
                        </div>
                        <div class="drop-menu">
                            <ul class="m2">
                                                                    <li class="m2 ">
                                        <a href="/bbs/content.php?co_id=location">
                                            문화재소개                                       </a>
                                    </li>
                              </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
