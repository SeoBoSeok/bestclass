<div id="hd">


<div id="hd_wrapper">
    <!-- 헤더 -->
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <a href="/" class="logo__link">
                    <img src="/_imgs/logo.png" alt="logo" class="logo logo_w">
                    <img src="/_imgs/logo.png" alt="logo" class="logo logo_ori">
                </a>
            </div>
            <nav class="gnb m_hide" id="gnb">
                <div class="gnb_wrap">
                    <ul id="gnb_1dul">
                        <!--
    SELECT
        m.me_code,
        m.me_name,
        m.me_link,
        IF(m.me_link='/apt?ca_name=분양단지' OR m.me_link='/apt/4', 0, 1) AS score,
        @depth:=CAST(LENGTH(m.me_code)/2 AS UNSIGNED) AS depth,
        --IF(@depth=1,m.me_order,(SELECT p1.me_order FROM iaan_menu AS p1 WHERE p1.me_code=SUBSTR(m.me_code,1,2) LIMIT 1)) AS depth1_order,
        --IF(@depth=1,0,IF(@depth=2,m.me_order,(SELECT p1.me_order FROM iaan_menu AS p1 WHERE p1.me_code=SUBSTR(m.me_code,1,4) LIMIT 1))) AS depth2_order,
        --IF(@depth=3,m.me_order,0) AS depth3_order
    FROM
        iaan_menu AS m
    WHERE (me_link LIKE '/apt?ca_name=분양단지%' OR me_link LIKE '/user/board.php?bo_table=apt%' OR me_link LIKE '/apt/4%' OR me_link LIKE '/apt%') AND me_use=1
    ORDER BY
        score ASC,
        depth1_order ASC,
        depth2_order DESC,
        depth3_order DESC,
        depth DESC
    LIMIT 1
    -->							<li class="gnb_1dli gnb_al_li_plus" style="z-index:999">
                            <a href="/brand/bestclass.php" target="_self" class="gnb_1da">브랜드</a>
                            <span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">
                                <li class="gnb_2dli"><a href="/brand/bestclass.php" target="_self" class="gnb_2da">BEST CLASS</a></li>
                            </ul></div>
                        </li>
                                                    <li class="gnb_1dli gnb_al_li_plus" style="z-index:998">
                            <a href="/apt/dungok.php" target="_self" class="gnb_1da">단지정보</a>
                            <span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">
                                <li class="gnb_2dli"><a href="/apt/dungok.php" target="_self" class="gnb_2da">둔곡 베스트클래스<br>오피스텔</a></li>
                                <li class="gnb_2dli"><a href="/apt/asan.php" target="_self" class="gnb_2da">아산 베스트클래스<br>아파트<br>(분양예정)</a></li>
                                <li class="gnb_2dli"><a href="#" target="_self" class="gnb_2da">제천 베스트클래스<br>(분양예정)</a></li>
                            </ul></div>
                        </li>
                                                    <li class="gnb_1dli gnb_al_li_plus" style="z-index:997">
                            <a href="/news.php" target="_self" class="gnb_1da">커뮤니티</a>
                            <span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">
                                <li class="gnb_2dli"><a href="/bbs/board.php?bo_table=free" target="_self" class="gnb_2da">공지사항</a></li>
                                <li class="gnb_2dli"><a href="/news.php" target="_self" class="gnb_2da">뉴스룸</a></li>
                                <li class="gnb_2dli"><a href="/bbs/content.php?co_id=forms" target="_self" class="gnb_2da">청약신청</a></li>
                            </ul></div>
                        </li>
                                                </ul>
                </div>
            </nav>
            <div class="header_icon">
                                <!-- <span class="search">
                    <a href="javascript:void(0);" id="btn_search"></a>
                    <a href="javascript:void(0);" id="btn_search_close"><img src="../_imgs/btn_close.svg" alt="search button" class="header__icon search_close"></a>
                </span>
                <span class="member" id="member">
                    <a href="javascript:void(0);" id="btn_user"></a>
                </span>
                <span class="gnb_all_mob_open mobile open" id="m_btn_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span> -->
            </div>
        </div>
    </header>
    <!-- // 헤더 -->

    <div class="search_top" id="search_top">
        <form name="fSearch" id="fSearch" method="get" action="../user/search.php.html">
            <div class="center">
                <div class="wrap">
                    <h2>SEARCH</h2>
                    <div class="box">
                        <input type="text" class="word" name="stx" id="stx" placeholder="검색어를 입력해주세요">
                        <a href="javascript:void(0)" onclick="clickSearch();" class="btn"><img src="../_imgs/icon_search_w.svg" alt="search btn"></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="gnb_all_bg"></div>
</div>
</div>

<div id="gnb_all" >
	<h2 class="sound_only">모바일 전체메뉴</h2>
	<!--<div class="gnb_al_bg bg_0"></div>-->
	<div class="mo_menu_wr">
		<div class="menu_bar">
			<ul class="gnb_al_ul">
								<li class="gnb_al_li ar">
<!-- 					<a href="/brand/iaan" target="_self" class="gnb_al_a ar">
						브랜드						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a> -->
					<div class="gnb_al_a ar">
						<a href="/brand/bestclass.php" target="_self">브랜드</a>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</div>
					<ul>
						<li><a href="/brand/bestclass.php" target="_self">BEST CLASS</a></li>
											<!-- <li><a href="brand/exordium.html" target="_self">베스트클래스</a></li> -->
											<!-- <li><a href="brand/terradium.html" target="_self">Terradium</a></li> -->
											<!-- <li><a href="brand/premium.html" target="_self">생활효율시스템</a></li> -->
					</ul>
				</li>
								<li class="gnb_al_li ar">
<!-- 					<a href="/apt?ca_name=분양단지" target="_self" class="gnb_al_a ar">
						단지정보						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a> -->
					<div class="gnb_al_a ar">
						<a href="/apt/dungok.php" target="_self">단지정보</a>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</div>
					<ul>
						<li><a href="/apt/dungok.php" target="_self">분양단지</a></li>
											<!-- <li><a href="apt%EF%B9%96ca_name=%E1%84%80%E1%85%A9%E1%86%BC%E1%84%89%E1%85%A1%E1%84%83%E1%85%A1%E1%86%AB%E1%84%8C%E1%85%B5.html" target="_self">공사단지</a></li>
											<li><a href="apt%EF%B9%96ca_name=%E1%84%8B%E1%85%B5%E1%86%B8%E1%84%8C%E1%85%AE%E1%84%83%E1%85%A1%E1%86%AB%E1%84%8C%E1%85%B5.html" target="_self">입주단지</a></li> -->
					</ul>
				</li>
								<li class="gnb_al_li ar">
<!-- 					<a href="/news" target="_self" class="gnb_al_a ar">
						커뮤니티						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a> -->
					<div class="gnb_al_a ar">
						<a href="news.php" target="_self">커뮤니티</a>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</div>
					<ul>
						<li><a href="news.php" target="_self">뉴스룸</a></li>
						<li><a href="/bbs/content.php?co_id=forms" target="_self">청약신청</a></li>
											<!-- <li><a href="gallery.html" target="_self">갤러리</a></li>
											<li><a href="iaanstory/index.html" target="_self">베스트클래스스토리</a></li>
											<li><a href="event.html" target="_self">이벤트</a></li> -->
					</ul>
				</li>
								
				<!-- 				
				<li class="gnb_al_li"><a class="gnb_al_a dr" href="/user/login">로그인</a></li>
				<li class="gnb_al_li"><a class="gnb_al_a dr" href="/user/register">회원가입</a></li>
				 -->



			</ul>
		</div>
	</div>
</div>