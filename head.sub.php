<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마 head.sub.php 파일
if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/head.sub.php')) {
    require_once(G5_THEME_PATH.'/head.sub.php');
    return;
}

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko" color-theme="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="베스트클래스아파트">
<meta name="description" content="대우산업개발 베스트클래스 분양, 공사, 입주, A/S, 견본주택, 브랜드 안내">
<link rel="canonical" href="index.html">
<meta property="og:image" content="_imgs/logo_ori.svg">
<meta property="og:keywords" content="베스트클래스아파트">
<meta property="og:title" content="베스트클래스아파트- 안이 다른 아파트 베스트클래스">
<meta property="og:description" content="대우산업개발 베스트클래스 분양, 공사, 입주, A/S, 견본주택, 브랜드 안내">
<meta property="og:url" content="index.html" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="베스트클래스아파트 - 안이 다른 아파트 베스트클래스">
<meta name="twitter:description" content="대우산업개발 베스트클래스 분양, 공사, 입주, A/S, 견본주택, 브랜드 안내">
<meta name="twitter:image" content="_imgs/logo_ori.svg">
<meta name="twitter:url" content="index.html" />

<meta name="naver-site-verification" content="5f12603bfbaa32862e9dfaf621d29d1f75737aa7" />
<title>베스트클래스</title>
 
<link rel="shortcut icon" href="_imgs/favicon.png" />
<link rel="stylesheet" href="_css/mode%EF%B9%96ver=%3C%EF%B9%96php%20echo%20G5_CSS_VER%EF%B9%94%20%EF%B9%96%3E.css" />
<link rel="stylesheet" href="_css/popup%EF%B9%96ver=blot022819.css">
<link rel="stylesheet" href="_css/main%EF%B9%96ver=blot022819.css">
<link rel="icon" href="_imgs/favicon.png" />
<link rel="stylesheet" href="_css/fonts%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/reset%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/swiper.min.css" />
<link rel="stylesheet" href="_css/common%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/style%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/board%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/animate%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/m_layout%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/m_style%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="_css/mobile%EF%B9%96ver=blot022819.css" />
<link rel="stylesheet" href="js/font-awesome/css/font-awesome.min%EF%B9%96blot022819.css" />

<script src="_js/jquery-1.12.4.min.js"></script>
<script src="_js/jquery-migrate-1.4.1.min.js"></script>
<script src="_js/waypoints.min.js"></script>
<script src="_js/swiper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.js"></script>

<script src="js/jquery.menu%EF%B9%96ver=blot022819.js"></script>
<script src="js/wrest%EF%B9%96ver=blot022819.js"></script>
<script src="js/placeholders.min%EF%B9%96ver=blot022819.js"></script>
<script src="theme/blot/js/utility%EF%B9%96ver=blot022819.js"></script>
<script src="theme/blot/js/jquery-ui.js"></script>
<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script src="js/common%EF%B9%96ver=blot022819.js" /></script>
<script src="_js/common%EF%B9%96ver=blot022819.js" /></script>


<script>
eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('0 g="1://2.3.4.5";0 7="1://2.3.4.5/9";0 8="";0 a="";0 b="";0 c="";0 d="";0 e="";0 f="";0 6="";',17,17,'var|https|www|iaanapt|co|kr|g5_member|g5_bbs_url|g5_is_member|user|g5_is_admin|g5_is_mobile|g5_bo_table|g5_sca|g5_editor|g5_cookie_domain|g5_url'.split('|'),0,{}))
</script>

<!--[if lte IE 8]>
<script src="https://www.iaanapt.co.kr/js/html5.js"></script>
<![endif]-->

<script src="_js/mode%EF%B9%96ver=blot022819.js"></script>
<script src="_js/main%EF%B9%96ver=blot0228193.js"></script>
<script src="_js/instagramFeed.min%EF%B9%96ver=blot0228193.js"></script>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}