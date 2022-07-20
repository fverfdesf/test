<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <meta name="format-detection" content="telephone=no ">
        <meta content="no-cache" http-equiv="Cache-Control">
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        <meta content="" name="author"/>
        <title>會員系統</title>
        <link href="templates/css/reset.css?cache=101" rel="stylesheet">
        <link href="templates/css/sty1_general1.css?cache=14" rel="stylesheet" type="text/css"/>
		<nolink href="templates/css/tw_style.css?cache=166" rel="stylesheet" type="text/css"/>
		<link href="layer/self_skin.css" rel="stylesheet" type="text/css"/>
        <link href="nice_select/css/nice-select.css" rel="stylesheet" type="text/css"/>
		<link href="pushy/css/pushy.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="templates/css/index.css?c=116" >

        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<script src="templates/js/jquery.cookie.js" type="text/javascript"></script>
        <!--<link rel="shortcut icon" href=""/>-->
	</head>
	<body>
       <div id="wrapper">
	<!--slot0-->
<div id="header">
	<div class="panel-v1">
		<div class="header-left " ><!--slot1-->
<div id="events-type-area" class="events-type-area">
	<div class="btn game-before" onclick="events_type_btn_click(this, 1);">賽前</div>
	<div class="btn game-now" onclick="events_type_btn_click(this, 2);">
		滾球
		<div id="events-type-2-game-count" class="game-count">
			0
		</div>
	</div>
</div>
</div>
		<div class="header-center txt" ></div>
		<div class="header-right flex" ><img class="logo" src="templates/images/jsh-logo.png?c=2"></div>
	</div>
</div>
 
    <div id="main">
		<!--slot=0-->
<div id="events-area" class="events-area" onselectstart="return false">



</div>

    </div>
    <div id="footer-fixed-height"></div>
	<!--slot=0-->
<div id="footer">
	<div class="btn">
		<i class="fa fa-random icon" onclick="event.stopPropagation();$('#footer .nice-select.events-sort-type-select').click();"></i>
		<select id="events-sort-type-select" class="events-sort-type-select" onchange="events_change_sort_type(this);" style="display:none;">
			<option value="1">聯盟排序</option>
			<option value="2">時間排序</option>
		</select>
	</div>
	<div class="btn" onclick="req_events_league_select_content();">
		<i class="fa fa-shield icon"></i>
		<span>選擇聯盟</span>
	</div>
	<div class="btn hidden" id="wait-order-btn" onclick="display_cross_betting_div();">
		<div class="wait-order-num" id="wait-order-num">10</div>
		<span>點此投注</span>
	</div>
	<a class="btn" href="bet_record.php?type=1">
		<i class="fa fa-file-text-o icon"></i>
		<span>投注紀錄</span>
	</a>
	<div class="btn general-menu-btn">
		<i class="fa fa-bars icon"></i>
		<span>更&nbsp;多</span>
	</div>
</div>
<nav id="general-menu" class="hidden">
	<div class="member-info">
		<ul>
			<li class="v1">
				<div class="cus-userid">2ATTTm1_ta3 / 測試會員</div>
				<a class="btn-announcement on" href="news.php"><img src="templates/images/btn_announcement.svg"></a>
			</li>
			<li>
				[07/19]信用&nbsp;<span id="use-credit-19" class="use-credit-txt">0</span>&nbsp;
				[點數]&nbsp;<span id="tickets-credits" class="tickets-credits-txt">2841
			</li>
			<li>
				[07/20]信用&nbsp;<span id="use-credit-20" class="use-credit-txt">0</span>
			</li>
			<li>
				<select class="change-lang" onchange="change_lang(this.value);">
					<!--slot=2-->

<option value="tw" selected>繁體</option>

<option value="cn" >简体</option>

<option value="en" >ENG</option>


				</select>
			</li>
		</ul>
	</div>
	<div class="menu-list">
		<ul>
			
			<li class="hidden">
				<a class="item" href="transfer_quota.php?type=1">
					<div class="icon"><i class="fa fa-exchange"></i></div>
					<div class="txt">遊戲轉點</div>
				</a>
			</li>
			<li class="hidden">
				<a class="item" href="member_info.php">
					<div class="icon"><i class="fa fa-building"></i></div>
					<div class="txt">會員限紅</div>
				</a>	
			</li>
			<li>
				<a class="item" href="features.php">
					<div class="icon"><i class="fa fa-gear"></i></div>
					<div class="txt">功能設定</div>
				</a>
			</li>
			<li>
				<a class="item" href="regulation.php">
					<div class="icon"><i class="fa fa-info-circle"></i></div>
					<div class="txt">規則條例</div>
				</a>	
			</li>
			<li class="hidden">
				<a class="item" href="login_pass.php">
					<div class="icon"><i class="fa fa-lock"></i></div>
					<div class="txt">修改密碼</div>
				</a>	
			</li>
			<li class="hidden">
				<a class="item" href="related_site.php">
					<div class="icon"><i class="fa fa-share-alt"></i></div>
					<div class="txt">相關網站</div>
				</a>	
			</li>
			<li>
				<a class="item" href="check_sport_live_page.php" target="_blank">
					<div class="icon"><i class="fa fa-youtube-play"></i></div>
					<div class="txt">體育直播</div>
				</a>	
			</li>
			<li>
				<a class="item" href="check_live_video_page.php" target="_blank">
					<div class="icon"><i class="fa fa-podcast"></i></div>
					<div class="txt">AV女優</div>
				</a>	
			</li>
			<li>
				<a class="item" href="../index.php">
					<div class="icon"><i class="fa fa-television"></i></div>
					<div class="txt">切換電腦版</div>
				</a>	
			</li>
			<li class="hidden">
				<a class="item" href="logout.php">
					<div class="icon"><i class="fa fa-sign-out"></i></div>
					<div class="txt">登出</div>
				</a>	
			</li>
		</ul>
	</div>
</nav>
 
</div>    
        <!-- BEGIN PAGE FIRST SCRIPTS -->
        <!-- END PAGE FIRST SCRIPTS -->
        <script src="templates/js/kang_ajax.js?c=303"></script>
		<script src="templates//js/fastclick.js"></script>
        <script src="layer/layer.js"></script>
        <script src="nice_select/js/jquery.nice-select.min.js"></script>
		<script src="pushy/js/pushy.js"></script>
        <script src="templates/js/kang_common.js?c=105"></script>
        <script src="templates/js/sty1_general1_all.js?c=25"></script>
		<script src="templates/js/lang/tw.js?cache=100"></script>
        <script src="templates/js/index/index.js?cache=3" type="text/javascript"></script>

    </body>
</html>