<!DOCTYPE html>
<!-- saved from url=(0047)http://user.youku.com/page/setting/base_profile -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="{{ asset('home6/saved_resource')}}"></script>
	<script>var _US_TEST=0</script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="{{ asset('home6/index.css')}}">
    <meta name="title" content="优酷网-中国第一视频网,提供视频播放,视频发布,视频搜索">
    <meta name="keywords" content="视频,视频分享,视频搜索,视频播放">
    <meta name="description" content="视频服务平台,提供视频播放,视频发布,视频搜索,视频分享">
    <link rel="icon" href="http://static.youku.com/v1.0.166/index/img/favicon.ico" type="image/x-icon">
    <title>个人设置 - 优酷个人中心</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('home6/youku.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/i.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/grid.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/default.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/home.css')}}">
<link id="YT-loginFrameCss" rel="stylesheet" href="{{ asset('home6/frame_common.css')}}"><style type="text/css" media="screen">div.YT-loginWrap{ background: url(//r1.ykimg.com/051000005955B539ADB9127BD905F9EF) no-repeat right bottom !important; }.YT-loginWrap a:hover,.YT-third-loginbox a:hover,.YT-loginWrap .YT-change-logintype:hover,.YT-loginWrap .YT-change-logintype i,.YT-loginWrap .YT-loginFrame-foot .YT-registe-btn:hover,.YT-loginWrap .YT-loginFrame-body .YT-qr-login .YT-qr-func a:hover{color:#35b5ff}.YT-loginWrap .YT-form .YT-form-btn,.YT-third-loginbox .YT-no-bing-submit,.YT-third-loginbox .YT-thirdbox-body .YT-form .YT-form-btn,.YT-loginWrap .YT-qrLogin .YT-qr-tips-btn,.YT-loginWrap .YT-loginFrame-body .YT-qr-login .YT-qrImg-box .YT-invalid-tips .YT-form-btn,.YT-loginWrap .YT-qrLogin .YT-qr-tips-btn:hover,.YT-loginWrap .YT-form .YT-psd-strong{background-color:#35b5ff}.YT-loginWrap .YT-frame-close{color:#35b5ff}.YT-loginWrap .YT-change-logintype,.YT-loginWrap .YT-loginFrame-body .YT-qr-login .YT-qrImg-box{border-color:#c0e8f6}.YT-loginWrap{background:#fff url(//r1.ykimg.com/3/111/175/75013225601050671712573010271032418363.jpg) no-repeat right bottom !important;color:#333 !important;}.YT-loginWrap .YT-noGet,.YT-loginWrap .disabled-color{color:#333 !important;}.YT-loginWrap a{color:#333 !important;}.YT-loginWrap.normal{ padding:30px 30px 30px 410px;}</style><script type="text/javascript" id="beacon-aplus" async="true" exparams="clog=o&amp;aplus&amp;sidx=aplusSidx&amp;ckx=aplusCkx" src="{{ asset('home6/aplus_o.js.下载')}}"></script><script type="text/javascript" data-env="cn" src="{{ asset('home6/ctl.js.下载')}}"></script><script type="text/javascript" src="{{ asset('home6/aplus_o.js(1).下载')}}" id="open-aplus" exparams="&amp;aplus&amp;asite=910&amp;yk_cookie=1491839458315qSM&amp;yk_user=684227077"></script><script type="text/javascript" src="{{ asset('home6/urchin.js.下载')}}"></script></head>
<body class="yk-w1190 w1300">
<span style="display:none;" id="is_self_exist" data="%22uid%22%3A684227077"></span>
	<link type="text/css" href="{{ asset('home6/ykheader_43.css')}}" rel="stylesheet">
<script type="text/javascript">
// 去掉860的栅格 ipad
(function(d) { 
	var isMobile = !!((navigator.userAgent.toLowerCase().match(/android/i) || [''])[0]);
	/*检查移动设备是否为移动设备*/
	if (navigator.userAgent.indexOf('iPad') > -1 || isMobile) {
		var m = d.createElement('meta');
		m.setAttribute('name', 'viewport');
		m.setAttribute('content', 'width=1210px');
		d.head.appendChild(m);
		d.body.className += ' w1080';
	}else{
		var b = d.body;
		var c = b.className || '';
		var w = (d.documentElement || b).clientWidth;
		if( w <= 1330  ){
			c += ' w1080 ';
		}else {
			c += ' w1300 ';
		}
		b.className = c;
	}
})(document);
var ykQHeader = {
	ltrim:function(s){ return s.replace( /^(\s*|　*)/, "") },
	rtrim:function(s){ return s.replace( /(\s*|　*)$/, "") },
	trim:function(s){ return this.ltrim(this.rtrim(s));},
	doSearch: function () {
		this.form = document.getElementById('qheader_search');
		if(!this.form){ return; }
		this.input = this.form.getElementsByTagName('input')[0];
		var q = this.trim(this.input.value), url = '',
				stat = 'spm=a2hww.20023042.#qheader_search~10';
		if (window.logPvid) {
			stat += '&_rp=' + window.logPvid;
		}

		if (q == '') {
			url = 'http://www.soku.com?inner' + ('&' + stat);
		} else {
			if (this.form.action.indexOf('/q_') === -1) {
				q = encodeURIComponent(q);
				url = this.form.action + '/q_' + q + ('?' + stat);
			} else {
				url = this.form.action + ('&' + stat);
			}
		}
		window.open(url);
		this.form.action = 'http://www.soku.com/search_video';
		return false;
	}
}
</script>

<div class="g-header g-header-fixed " id="qheader">
	<div class="g-header-container">
		<div class="g-box">
			<div class="yk-logo">
				<a href="http://www.youku.com/" title="Youku 优酷" attr="idx0"><img src="{{ asset('home6/yk-logo-1220.png')}}" width="140" height="50" alt="Youku 优酷" from="index"></a>
			</div>
												<div class="g-view">
        <a href="javascript:void(0)"><i class="ico-list"></i>导视</a>
        <div class="panel">
            <i class="arrow"></i>
            <div class="content">
            				 
                <dl>
                    <dt>频道精选</dt>
                    <dd>
                    	 
                        <a href="http://tv.youku.com/">剧集</a>
                         
                        <a href="http://movie.youku.com/">电影</a>
                         
                        <a href="http://zy.youku.com/">综艺</a>
                         
                        <a href="http://music.youku.com/">音乐</a>
                         
                        <a href="http://child.youku.com/">少儿</a>
                         
                        <a href="http://comic.youku.com/">动漫</a>
                         
                        <a href="http://live.youku.com/">直播</a>
                         
                        <a href="http://list.youku.com/category/video/">片库</a>
                                            </dd>
                </dl>
                 
                <dl>
                    <dt>全网独播</dt>
                    <dd>
                    	 
                        <a href="http://list.youku.com/show/id_zb1a7477ecd7f11e68fae.html" target="_blank">鲜肉老师</a>
                         
                        <a href="http://list.youku.com/show/id_z7cefbfbdefbfbd39efbf.html" target="_blank">愿有人陪你颠沛流离</a>
                         
                        <a href="http://list.youku.com/show/id_z727f4876d18d11e69c81.html" target="_blank">欢乐喜剧人3</a>
                                            </dd>
                </dl>
                 
                <dl>
                    <dt>产品大全</dt>
                    <dd>
                    	 
                        <a href="http://gh.youku.com/topic_page/topic_list" target="_blank">话题</a>
                         
                        <a href="http://z.youku.com/?from=ykzz" target="_blank">众筹</a>
                         
                        <a href="http://wan.youku.com/" target="_blank">玩游戏</a>
                         
                        <a href="http://www.laifeng.com/" target="_blank">来疯直播</a>
                         
                        <a href="http://faxian.youku.com/products/" target="_blank">更多&gt;&gt;</a>
                                            </dd>
                </dl>
                 
                <dl>
                    <dt>客户端</dt>
                    <dd>
                    	 
                        <a href="http://mobile.youku.com/index/wireless" target="_blank">移动APP</a>
                         
                        <a href="http://pd.youku.com/pc" target="_blank">PC客户端</a>
                         
                        <a href="http://pd.youku.com/xxyk/index" target="_blank">小小优酷</a>
                         
                        <a href="http://vr.youku.com/app/download/" target="_blank">优酷VR</a>
                         
                        <a href="http://www.laifeng.com/app/download" target="_blank">来疯APP</a>
                                            </dd>
                </dl>
                			            </div>
        </div>
    </div>
										<div class="g-head-center">
				<ul class="g-head-nav">
					<li>
						<a href="http://www.youku.com/">首页</a>
					</li>
					<li>
						<a href="http://faxian.youku.com/">发现</a>
					</li>
					<li>
						<a id="navSub" href="http://ding.youku.com/u/subscribeUpdate">订阅<span class="icon-warn" id="qheader_sub_num" style="display:none;"></span></a>
					</li>
					<li>
						<a href="http://cps.youku.com/redirect.html?id=00014c9c">会员</a>
					</li>
					<li>
						<a href="http://user.youku.com/">我的</a>
					</li>
				</ul>
				<div class="yk-ucenter"></div>
			</div>
			<div class="g-ucenter" id="uerCenter">
				<div class="u-login">
					<div class="login-before handle" style="display: none;">
                        <a id="qheader_login" href="http://www.youku.com/user_login/">登录</a><a id="qheader_reg" href="http://www.youku.com/user_login/">注册</a>
					</div>
					<div class="login-after dropdown handle" style="">
						<a href="http://i.youku.com/i/UMjczNjkwODMwOA==" target="_blank">
							<img class="avatar" src="{{ asset('home6/0130391F4555DECBD12EA528C87A0559FDED60-5F54-5808-E1B9-BE3645600E07')}}" title="刁民一位">
							<b class="caret"></b>
                            <span class="vip-level-icon" style="background: url(&quot;https://r1.ykimg.com/0510000058621BCC67BC3D7EF301F388&quot;) 0px 0px no-repeat;"></span>
						</a>
						<div class="panel u-panel"><i class="arrow"></i>
							<div class="content"> 









<!-- <div class="code-content">
<a class="close-code" href="#">关闭二维码</a>
<div class="qr-content">
<img src="" id="QR_login">
<div class="rf-layer"><a id="QrRefresh" href="javascript:void(0)">二维码失效<br/>点击刷新</a></div>
</div>
<span>推荐使用优酷APP扫描登录 <br/> 且支持其它扫码工具</span>
</div> -->
<div class="u-content">  
<!-- <div class="u-code">
<a class="qrcode-btn" href="javascript:void(0);"></a>
</div> -->                     
<div class="u-info">
<div class="u-avatar">
<a href="http://i.youku.com/i/UMjczNjkwODMwOA==" target="_blank">
<img src="{{ asset('home6/0130391F4555DECBD12EA528C87A0559FDED60-5F54-5808-E1B9-BE3645600E07(1)')}}">
</a>
</div>
<div class="u-profile">
<div class="u-name">
<a href="http://i.youku.com/i/UMjczNjkwODMwOA==" class="u-link" target="_blank" title="刁民一位">刁民一位</a>
<a href="http://actives.youku.com/task/signv2/index" target="_blank" class="u-sign">签到</a>
</div>
<div class="u-credit">

<a href="http://cps.youku.com/redirect.html?id=000145de" target="_blank">
<span class="vip-level-icon" title="过期会员：VIP3" style="background:url(https://r1.ykimg.com/0510000058621BCC67BC3D7EF301F388) no-repeat 0 0;"></span>
</a>

<a href="http://cps.youku.com/redirect.html?id=000145df" target="_blank" class="user-grade">
<span class="user-grade-icon user-grade-lv16" title="优酷等级：16"></span>
</a>

<a class="ico-valid-email " href="http://i.youku.com/u/setting/sec_security/tab_mail.html" target="_blank"></a>
<a class="ico-valid-phone ico-valid-phone-done" href="http://i.youku.com/u/setting/sec_security/tab_mobile.html" target="_blank"></a>
</div>
<div class="u-point" style="display: block;">
<i class="arrow"></i>
<a href="http://point.youku.com/page/mall/index" target="_blank">我的等级积分：<em>291</em><span>立即兑换</span></a>
</div>
</div>
</div>                            
<ul class="u-list">
<li>
<a href="http://lvip.youku.com/task/pbb/index" target="_blank" class="u-watch">
<em></em>  节目热播单
</a>
</li>                            
<li>
<a href="http://faxian.youku.com/favorite" target="_blank" class="u-collect">
<em></em>  我的收藏
</a>
</li>
<li>
<a href="http://i.youku.com/i/UMjczNjkwODMwOA==" target="_blank" class="u-zpd">
<em></em>  我的自频道
</a>
</li>
  
<li>
<a href="http://creation.youku.com/" target="_blank" class="u-center">
<em></em>  创作中心
</a>
</li>

</ul>     
<div class="u-task">
<div class="task-title">
<!-- <a href="" class="fr">查看加速服务</a> -->
<a href="http://user.youku.com/page/usc/index" target="_blank">我的任务</a>
</div>
<div class="task-info"><dl><dt><img src="{{ asset('home6/sign1.png')}}" alt="任务图标"></dt><dd><em>签到有礼</em><span title="百万豪礼等你拿，优酷会员超值兑">百万豪礼等你拿，优酷会员超值兑</span></dd></dl><a target="_blank" href="http://actives.youku.com/task/show/index">签到</a></div>
</div>  
</div> 
</div>
							<div class="u-bottom">
								<a href="http://user.youku.com/page/setting/base_profile#" class="singout">退出登录</a>
								<a href="http://user.youku.com/page/setting/base_profile" target="_blank">账户设置</a>
							</div>
						</div>
					</div>
				</div>
				<div class="u-record">
					<div class="dropdown">
						<div class="handle">
							<a href="http://faxian.youku.com/watch_record">
								<i class="ico-urecord"></i>
								<b class="caret"></b>
							</a>
						</div>
						<div class="panel">
							<i class="arrow"></i>
							<div class="content">

<dl class="rec-list">

  

  

  




<dt>更早</dt>
      


<dd>
<a href="http://v.youku.com/v_show/id_XMTczMTQ1MTIwOA==.html?firsttime=60" target="video" title="男子持刀狂舞不听劝被特警开枪制服 市民驾车协助民警获点赞">男子持刀狂舞不听劝被特警开枪制服 市民驾车协助民警获点赞</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到76%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjg0MzczOTA0NA==.html?firsttime=77" target="video" title="喜报!特警三年并肩作战 比武赛场求婚成功 快来祝福! 170623">喜报!特警三年并肩作战 比武赛场求婚成功 快来祝福! 170623</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到100%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjY5MzMyNDE3Mg==.html?firsttime=2808" target="video" title="第01话 二代目的归国">第01话 二代目的归国</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到1集  
100%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjc5OTc2NDQ4MA==.html?firsttime=28" target="video" title="春娇救志明">春娇救志明</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到1%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjUwMzI2MTc3Ng==.html?firsttime=3386" target="video" title="魔弦传说">魔弦传说</a> 
<span class="rec-st">
<i class="ico-device ico-tel"></i> 
看到56%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjc2ODExODI0NA==.html?firsttime=18" target="video" title="黑客风云">黑客风云</a> 
<span class="rec-st">
<i class="ico-device ico-tel"></i> 
看到1%
</span>
</dd> 









  
 
</dl>

<div class="u-bottom">
<a target="_blank" href="http://faxian.youku.com/watch_record" class="fr">查看更多</a>
<a href="http://lvip.youku.com/task/pbb/index" target="_blank">节目热播列表</a>
</div>
</div>
						</div>
					</div>
				</div>
				<div class="u-notice loaded">
					<div class="dropdown">
						<div class="handle">
							<a href="http://msg.youku.com/page/msg/index?retry=1" target="_blank">
								<i class="ico-notifications-l2"></i>
								<b class="caret"></b>
								<span class="icon-warn" id="qheader_notice_num" style=""></span>
							</a>
						</div>
						<div class="panel no-msg">
							<i class="arrow"></i>
							<div class="content"><ul class="msg-list">

<li><span>您最近没有收到新的消息</span></li>

</ul> </div>
							<div class="u-bottom">
								<a href="http://msg.youku.com/page/msg/index?retry=1" target="_blank" class="fr">查看所有消息</a>
							</div>
						</div>
					</div>
				</div>
				<div class="u-upload">
					<div class="dropdown ">
						<div class="handle">
							<a href="http://sc.youku.com/" target="_blank"><i class="ico-upload-l2"></i><b class="caret"></b></a>
						</div>
						<div class="panel">
							<i class="arrow"></i>
							<div class="content">
								<ul class="u-list">
									<li>
										<a href="http://sc.youku.com/" target="_blank" class="upload-video">
											<em></em>  上传视频
										</a>
									</li>
                                    <li>
                                        <a href="http://newvideos.youku.com/u/videos" target="_blank" class="u-creat">
                                            <em></em>  视频管理
                                        </a>
                                    </li>

									<li>
										<a href="http://i.youku.com/i/profile/" target="_blank" class="u-zpd">
											<em></em>  我的自频道
										</a>
									</li>
                                    <li>
                                        <a href="http://greatvoyage.tudou.com/overview/index" target="_blank" class="data-analysis">
                                            <em></em>  数据分析
                                        </a>
                                    </li>
								</ul>
								<div class="up-cnt-2">
									<a href="http://rz.tudou.com/" target="_blank" style="width:360px;height:60px;margin-top:-15px;margin-left:-104px;"><img src="{{ asset('home6/0510000058DA1E9AADC0AE05A00E6EE3')}}"></a>
								</div>
							</div>
							<div class="u-bottom">
								<a href="http://user.youku.com/page/setting/base_profile#" data-url="http://iku.youku.com/channelinstall/ywebuploadFloat" class="ikuDownload" target="_self"><i></i>立即下载</a>
								下载PC客户端，上传视频更轻松！
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="g-so" data-spm="search">
				<div class="g-so-box">
					<form id="qheader_search" action="http://www.soku.com/search_video" method="get" target="_blank" onsubmit="
						if(typeof(XBox) == &#39;object&#39;){
							return false;
						}
						else if(typeof(ykQHeader) == &#39;object&#39;){
							return ykQHeader.doSearch();
						}
					">
						<i class="icon-search"></i>
						<input name="q" id="headq" type="text" autocomplete="off" _xbox_init="t" class="default" _xbox_default="火星情报局">
                        <a href="http://top.youku.com/rank/" target="_blank" class="rankq" title="优酷指数排行榜"></a>
						<button type="submit" data-spm="dbutton">搜库</button>
						<div id="qheader_keywords" style="display:none;">
							<a target="_blank" href="http://www.soku.com/search_video/q_" class=""></a>
						</div>
						<input type="text" style="display:none;">
					<div style="display: none;"><div class=""><div class="sk_box sk_youku" style="display:block;"><iframe id="sk_holder_iframe" frameborder="0" scrolling="no" style="position: absolute; z-index: 0; top: -2px; left: -2px;" src="{{ asset('home6/saved_resource.html')}}"></iframe><div class="main" id="_xbox_refresh"></div><div id="_xbox_ad"><div class="sk_adsl"><a target="_blank" href="http://v.youku.com/v_show/id_XMjg2MDI0NTc5Ng==.html"><img sk_live="link" log_pos="8" src="{{ asset('home6/05100000595629FCADB9127F7606122D')}}"></a><a class="sk_ads_close" href="javascript:;" style="display: inline;"><i sk_live="adclose" class="ico ico_ad_close" style="display: none;"></i></a></div></div></div></div></div><div><script src="{{ asset('home6/search_tip_1')}}"></script><script src="{{ asset('home6/sideads.json')}}"></script></div><link rel="stylesheet" type="text/css" href="{{ asset('home6/s_kubox.css')}}"></form>
				</div>
			</div>
		</div>
			</div>
</div><div id="qnotice" class="notice-wrap"></div>
<!--sub nav-->
<!--sub nav end-->
<script src="{{ asset('home6/lib_5.js.下载')}}" id="libjsnode" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('home6/ykheader_92.js.下载')}}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('home6/setting.css')}}">
<script src="{{ asset('home6/prototype.js.下载')}}"></script><script>if(!window.Nova){Nova={};}if(!window.NovaOptions){NovaOptions={};NovaOptions.compatibleMode=true;}</script>
<script src="{{ asset('home6/common.js.下载')}}"></script>
<script type="text/javascript" src="{{ asset('home6/resize.js.下载')}}"></script>
<div class="s_body">
<script type="text/javascript">if (!sslDomain) { var sslDomain = 'passport.youku.com';}</script>
<div class="YK yk-con">
	<div class="YK_miniheader yk-row">
	<div class="YK_masthead yk-w970-col18 yk-w1190-col22">
		<div class="YK_mainnav">
			<div class="title"><a href="javascript:void(0)">设置</a></div>
			<ul>
				<li class="current"><a href="http://user.youku.com/page/setting/base_profile">基本设置</a></li>
				<li><a href="https://id.youku.com/">安全设置</a></li>
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>

<div class="yk-row">
    <div class="YK_dashboard yk-col3">
		<div class="YK_dashboard_inner">
							<ul class="YK_menu">
					<li class="current"><a href="http://user.youku.com/page/setting/base_profile">基本资料</a></li>
					<li><a href="http://user.youku.com/page/setting/base_avatar">修改头像</a></li>
					<li><a href="https://id.youku.com/modifyDomainView.htm" target="_blank">个性域名</a></li>
					<li><a href="https://id.youku.com/thirdparty/manage.htm">绑定网站</a></li>
				</ul>
			
			<ul class="YK_submenu">
				<li><a href="http://i.youku.com/u/profile/?action=barSet" target="_blank">装扮空间</a></li>
			</ul>
		</div>
    </div>
	
    <div class="YK_main yk-w970-col15 yk-w1190-col19">
        <div class="YK_setting">
				<div class="content">
				
<div class="content" _uc="setting" id="profile">
	<div class="formbox">
			<fieldset>		
								<div class="entry">
					<label for="nickname">昵称：</label>
					<span class="username">刁民一位</span>	
					<span class="modify"><a href="https://id.youku.com/modifyNicknameView.htm">修改</a></span>
				</div>
								<form action="http://user.youku.com/api/setting/update_personal_info" method="post" id="sv_profile">
				<div class="entry">
					<label>性别：</label>	
					<span class="gender">
						<input type="radio" name="gender" id="male" checked="checked" value="1"> <label for="male">男</label>
						<input type="radio" name="gender" id="female" value="0"> <label for="female">女</label>
					</span>
					<div class="msg"></div>
				</div>
				<div class="entry">
					<label>所在地：</label>
					<div class="form_select">
					<select id="prov" name="province" onchange="javascript:_initCity();">
					<option value="0">请选择</option><option value="1">北京市</option><option value="2">天津市</option><option value="3">河北省</option><option value="4">山西省</option><option value="5">辽宁省</option><option value="6">吉林省</option><option value="7">上海市</option><option value="8">江苏省</option><option value="9">浙江省</option><option value="10">安徽省</option><option value="11">福建省</option><option value="12">江西省</option><option value="13">山东省</option><option value="14">河南省</option><option value="15">内蒙古</option><option value="16">黑龙江省</option><option value="17">湖北省</option><option value="18">湖南省</option><option value="19" selected="">广东省</option><option value="20">广西</option><option value="21">海南省</option><option value="22">四川省</option><option value="23">重庆市</option><option value="24">台湾省</option><option value="25">贵州省</option><option value="26">云南省</option><option value="27">西藏</option><option value="28">陕西省</option><option value="29">甘肃省</option><option value="30">青海省</option><option value="31">宁夏</option><option value="32">新疆</option><option value="33">香港特别行政区</option><option value="34">澳门特别行政区</option><option value="35">海外</option>					</select>
					</div>
					<div class="form_select">
					<select id="city" name="city" _city="广州市"><option value="广州市">广州市</option><option value="清远市">清远市</option><option value="韶关市">韶关市</option><option value="河源市">河源市</option><option value="梅州市">梅州市</option><option value="潮州市">潮州市</option><option value="汕头市">汕头市</option><option value="揭阳市">揭阳市</option><option value="汕尾市">汕尾市</option><option value="惠州市">惠州市</option><option value="东莞市">东莞市</option><option value="深圳市">深圳市</option><option value="珠海市">珠海市</option><option value="中山市">中山市</option><option value="江门市">江门市</option><option value="佛山市">佛山市</option><option value="肇庆市">肇庆市</option><option value="云浮市">云浮市</option><option value="阳江市">阳江市</option><option value="茂名市">茂名市</option><option value="湛江市">湛江市</option><option value="其它地区">其它地区</option></select>
					</div>
					<div class="msg"></div>
				</div>
				<div class="entry">
					<label>生日：</label>
					<div class="form_select"><select id="year" name="year"><option value="">选择年份</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988" selected="">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option></select></div>&nbsp;<div class="form_select"><select id="month" name="month"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10" selected="">10</option><option value="11">11</option><option value="12">12</option></select></div>&nbsp;<div class="form_select"><select id="day" name="day"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8" selected="">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>				</div>
				<div class="entry txt">
					<label>个人简介：</label>
					<textarea class="form_input" style="width:325px;height:100px;" id="cv" name="cv">江中品牌运营维护</textarea>
					<div class="counter">8/400</div>
					<div class="msg"></div>
				</div>

				<div class="entry">
					<label>验证码：</label>
					<input type="text" class="form_input form_input_defaultvalue" autocomplete="off" value="验证码" style="width:125px;" onfocus="if(this.value==&#39;验证码&#39;)this.value=&#39;&#39;,this.className=&#39;form_input&#39;;" onblur="if(this.value==&#39;&#39;)this.value=&#39;验证码&#39;,this.className=&#39;form_input form_input_defaultvalue&#39;;" name="captcha" id="J_captchaBox">
					<div class="idcode" style="display: inline-block;height: 40px;vertical-align: middle;"><img src="{{ asset('home6/captcha')}}" onclick="this.src=&#39;/page/usc/captcha?&#39;+Math.random();" style="display: block;" height="40"></div>
					<div class="msg"></div>

				</div>
				<div class="entry savebtn">
					<div class="form_btn form_btn_m form_btnmaj_m">
						<span class="form_btn_text" style="width:60px;" _click="sv_profile">保&nbsp;&nbsp;&nbsp;&nbsp;存</span>
					</div>
				</div>
				</form>
			</fieldset>
	</div>
	<div class="aside">
		<h3>完善个人资料</h3>
		<p>资料更完整，帐号更安全。完善个人资料将帮助我们改善服务。</p>
	</div>
</div>
<script src="{{ asset('home6/birthday.js.下载')}}"></script>
<!-- content end -->
			</div>
</div>    
<div class="clear"></div>
</div>
</div>
</div>
</div>
	<div class="g-footer">
    <dl class="g-w1">
        <dt>
            <a target="_blank" href="http://c.youku.com/aboutcn/youtu">大优酷事业群</a>　
            <a target="_blank" href="http://c.youku.com/aboutcn/youku">关于优酷</a>　
            <a target="_blank" href="http://www.tudou.com/about/cn/">关于土豆</a>
        </dt>
        <dd>
            <a target="_blank" href="http://c.youku.com/abouteg/youtu">Youku Tudou Inc.</a>
            <a target="_blank" href="http://c.youku.com/abouteg/youku">Youku.com</a>
            <a target="_blank" href="http://www.tudou.com/about/en/">Tudou.com</a>
        </dd>
        <dd>
            <a target="_blank" href="http://c.youku.com/link">友情链接</a>
            <a target="_blank" href="http://c.youku.com/aboutcn/adservice/">广告服务</a>
        </dd>
    </dl>
    <dl class="g-w2">
        <dt>
            优酷热门
        </dt>
        <dd>
            <a target="_blank" href="http://tv.youku.com/">剧集</a>
            <a target="_blank" href="http://movie.youku.com/">电影</a>
            <a target="_blank" href="http://zy.youku.com/">综艺</a>
            <a target="_blank" href="http://music.youku.com/">音乐</a>
            <a target="_blank" href="http://child.youku.com/">少儿</a>
            <a target="_blank" href="http://news.youku.com/">资讯</a>
            <a target="_blank" href="http://paike.youku.com/">拍客</a>
            <a target="_blank" href="http://jilupian.youku.com/">纪实</a>
            <a target="_blank" href="http://gongyi.youku.com/">公益</a>
        </dd>
        <dd>
            <a target="_blank" href="http://sports.youku.com/">体育</a>
            <a target="_blank" href="http://auto.youku.com/">汽车</a>
            <a target="_blank" href="http://tech.youku.com/">科技</a>
            <a target="_blank" href="http://finance.youku.com/">财经</a>
            <a target="_blank" href="http://ent.youku.com/">娱乐</a>
            <a target="_blank" href="http://culture.youku.com/">文化</a>
            <a target="_blank" href="http://comic.youku.com/">动漫</a>
            <a target="_blank" href="http://fun.youku.com/">搞笑</a>
            <a target="_blank" href="http://travel.youku.com/">旅游</a>
        </dd>
        <dd>
            <a target="_blank" href="http://fashion.youku.com/">时尚</a>
            <a target="_blank" href="http://baby.youku.com/">亲子</a>
            <a target="_blank" href="http://edu.youku.com/">教育</a>
            <a target="_blank" href="http://game.youku.com/">游戏</a>
            <a target="_blank" href="http://vip.youku.com/">会员</a>
            <a target="_blank" href="http://faxian.youku.com/?from=PC_main_nav">发现</a>
            <a target="_blank" href="http://list.youku.com/category/video">片库</a>
        </dd>
    </dl>
    <dl class="g-w3">
        <dt>产品中心</dt>
        <dd>
            <a href="javascript:void(0);" class="ikuDownLoad" data-down-href="http://iku.youku.com/channelinstall/ywebbottom" data-down-mac="http://iku.youku.com/channelinstall/macyweb">PC客户端</a>
        </dd>
        <dd>
            <a target="_blank" href="http://mobile.youku.com/index/wireless">手机客户端</a>
            <a target="_blank" href="http://pd.youku.com/paike">拍客</a>
        </dd>
        <dd>
            <a target="_blank" href="http://yj.youku.com/?hmsr=1119youku&amp;hmpl=&amp;hmcu=&amp;hmkw=&amp;hmci=">智能硬件</a>
            <a target="_blank" href="http://cloud.youku.com/">视频云</a>
        </dd>
    </dl>
    <dl class="g-w4">
        <dt>用户</dt>
        <dd>
            <a target="_blank" href="http://rz.tudou.com/">开通大鱼号</a>
        </dd>

        <dt>支持</dt>
        <dd>
            <a id="sttrans" href="javascript:void(0);">繁體版</a>
            <a target="_blank" href="http://csc.youku.com/feedback-web/web/">在线反馈</a>
            <!-- <a target="_blank" href="http://www.youku.com/help/">帮助中心 </a> -->
        </dd>
    </dl>
    <div class="g-hr"></div>
    <dl class="g-w1">
        <dd><a target="_blank" href="http://mapp.youku.com/service/licence/">网络文化经营许可证 京网文[2014]0934-236号</a></dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/20130209">京卫网审[2013]第0209号 </a> <a target="_blank" href="http://www.bj.cyberpolice.cn/index.htm">网络110报警服务</a></dd>
        <dd> 药品服务许可证(京)-经营-2015-0029</dd>
        <dd>
            节目制作经营许可证京字670号
        </dd>
    </dl>
    <dl class="g-w2">
        <dd>请使用者仔细阅读优酷<a target="_blank" href="http://mapp.youku.com/service/agreement" class="mr0">使用协议</a>、<a target="_blank" href="http://mapp.youku.com/service/banquan" class="mr0">版权声明</a>、<a target="_blank" href="http://mapp.youku.com/service/piracy" class="mr0">反盗版盗链声明</a></dd>
        <dd>Copyright©2017 优酷 youku.com 版权所有</dd>
        <dd>不良信息举报电话: 4008100580</dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/0108283">信息网络传播视听节目许可证0108283号</a></dd>
    </dl>
    <dl class="g-w3">
        <dd><a target="_blank" href="http://www.miibeian.gov.cn/">京ICP证060288号</a></dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/chuban">新出网证(京)字160号</a></dd>
        <dd><a target="_blank" href="http://www.bjjubao.org/">北京互联网举报中心</a></dd>
        <dd><a target="_blank" href="http://www.bjwhzf.gov.cn/accuse.do">北京12318文化市场举报热线</a></dd>
    </dl>
    <dl class="g-w4">
        <a class="qcode" target="_blank" href="http://mobile.youku.com/index/wireless"><img src="{{ asset('home6/0510000058D0FEA1ADC0AE058F099020')}}" width="84px"></a>
    </dl>
    <div class="g-authentication">
        <a class="aut-1" target="_blank" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202006082400023">经营性网站<br>备案信息</a>
        <a class="aut-2" target="_blank" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1786197705">中国互联网<br>诚信联盟</a>
        <a class="aut-3" target="_blank" href="http://www.12377.cn/">中国互联网<br>举报中心</a>
        <a class="aut-4" target="_blank" href="http://www.12377.cn/node_548446.htm">网络举报<br>APP下载</a>
        <a class="aut-5" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000017">京公网安备<br>11000002000017</a>
        <a class="aut-6" target="_blank" href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/toDetail/0D76560AE65141FF9FEFE3481D205C50">网络文化<br>经营单位</a>
        <a class="aut-7" target="_blank" href="http://www.12377.cn/">暴恐音视频<br>举报专区</a>
    </div>
</div>

<div id="sideBar" class="side-bar"><div class="feedback"><a href="http://csc.youku.com/feedback-web/web/" target="_blank"></a></div><div id="goTop" data-stat-role="ck"><img width="29" height="65" src="{{ asset('home6/05100000575CCAF767BC3D4B250267B7')}}"></div></div><script src="{{ asset('home6/qwindow.js.下载')}}"></script>
<script src="{{ asset('home6/city.js.下载')}}"></script><script src="{{ asset('home6/setting.js.下载')}}"></script><script type="text/javascript" src="{{ asset('home6/login.js.下载')}}"></script><div style="height: 0px; width: 0px; overflow: hidden;"><object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket"><param name="allowScriptAccess" value="always"><param name="movie" value="http://aeu.alicdn.com/flash/JSocket.swf"> <embed src="http://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" width="0" height="0"></object></div></body></html>