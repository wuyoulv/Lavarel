<!DOCTYPE html>
<!-- saved from url=(0047)http://user.youku.com/page/setting/base_profile -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="{{ asset('home6/saved_resource')}}"></script>
	<script>var _US_TEST=0</script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="{{ asset('home6/index.css')}}">
    <meta name="title" content="优酷网-中国第一视频网,提供视频播放,视频发布,视频搜索">
    <meta name="keywords" content="视频,视频分享,视频搜索,视频播放">
    <meta name="description" content="视频服务平台,提供视频播放,视频发布,视频搜索,视频分享">
    <link rel="icon" href="" type="image/x-icon">
    <title>个人设置 - 优酷个人中心</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('home6/youku.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/i.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/grid.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/default.css')}}">
	<link type="text/css" rel="stylesheet" href="{{ asset('home6/home.css')}}">
	<style>
		.huhu{position: absolute;
              top: 0px;
              left: 110px;
              width: 80px;
              height: 80px;
              opacity: 0;
              z-index: 999;}
	</style>
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
			url = '' + ('&' + stat);
		} else {
			if (this.form.action.indexOf('/q_') === -1) {
				q = encodeURIComponent(q);
				url = this.form.action + '/q_' + q + ('?' + stat);
			} else {
				url = this.form.action + ('&' + stat);
			}
		}
		window.open(url);
		this.form.action = '';
		return false;
	}
}
</script>

<div class="g-header g-header-fixed " id="qheader">
	<div class="g-header-container">
		<div class="g-box">
			<div class="yk-logo">
				<a href="{{ url('home/') }}" title="Youku 优酷" attr="idx0"><img src="{{ asset('home6/yk-logo-1220.png')}}" width="140" height="50" alt="Youku 优酷" from="index"></a>
			</div>
			<div class="g-view">
        		<!-- <a href="javascript:void(0)"><i class="ico-list"></i>导视</a> -->
        	<div class="panel">
            	<!-- <i class="arrow"></i> -->
            	<div class="content">			 
                <dl>
                    <!-- <dt>频道精选</dt> -->
                    <dd>
                    	<!--  
	                        <a href="">剧集</a>
	                         
	                        <a href="">电影</a>
	                         
	                        <a href="">综艺</a>
	                         
	                        <a href="">音乐</a>
	                         
	                        <a href="">少儿</a>
	                         
	                        <a href="">动漫</a>
	                         
	                        <a href="">直播</a>
	                         
	                        <a href="">片库</a> -->
                    </dd>
                </dl>
                 
                <dl>
                    <!-- <dt>全网独播</dt> -->
                    <dd>
                    	 
                        <!-- <a href="" target="_blank">鲜肉老师</a>
                         
                        <a href="" target="_blank">愿有人陪你颠沛流离</a>
                         
                        <a href="" target="_blank">欢乐喜剧人3</a> -->
                      </dd>
                </dl>
                 
                <dl>
                    <!-- <dt>产品大全</dt> -->
                    <dd>
                    	 
                        <!-- <a href="" target="_blank">话题</a>
                         
                        <a href="" target="_blank">众筹</a>
                         
                        <a href="" target="_blank">玩游戏</a>
                         
                        <a href="" target="_blank">来疯直播</a>
                         
                        <a href="" target="_blank">更多&gt;&gt;</a> -->
                     </dd>
                </dl>
                 
                <dl>
                    <!-- <dt>客户端</dt> -->
                    <dd>
                    	 
                        <!-- <a href="" target="_blank">移动APP</a>
                         
                        <a href="" target="_blank">PC客户端</a>
                         
                        <a href="" target="_blank">小小优酷</a>
                         
                        <a href="" target="_blank">优酷VR</a>
                         
                        <a href="" target="_blank">来疯APP</a> -->
                     </dd>
                </dl>
                </div>
       	 	</div>
    	</div>
										<div class="g-head-center">
				<ul class="g-head-nav">
					<li>
						<a href="{{ url('a/home/') }}">首页</a>
					</li>
				
					<li>
						<a href="{{ url('home/vipuser') }}">会员</a>
					</li>
					<li>
						<a href="{{ url('home/user/index') }}">我的</a>
					</li>
				</ul>
				<div class="yk-ucenter"></div>
			</div>
			<div class="g-ucenter" id="uerCenter">
				<div class="u-login">
					 <div class="login-before handle" style="display: none;">
                        <span id="span_userinfo">
                         @if(session('adminn')) 
                         <a href="{{ url('home/user/index') }}"> {{session('adminn')}}</a>
                         <a href="/home/homeLog/logout" >   ||退出</a> 
                         @else || 
                         <a  id="qheader_reg" href="{{URL('home/login')}}"> 登陆 </a>·<a id="qheader_reg" href="{{url('home/register')}}">注册</a>
                         </span>@endif
                    </div>
					<div class="login-after dropdown handle" style="">
				
				
					</div>
				</div>
			
		
				<div class="u-upload">
					<div class="dropdown ">
						
					
					</div>

				</div>
			</div>
			<div class="g-so" data-spm="search">
				<div class="g-so-box">
					<form id="qheader_search" action="" method="get" target="_blank" onsubmit="
						if(typeof(XBox) == &#39;object&#39;){
							return false;
						}
						else if(typeof(ykQHeader) == &#39;object&#39;){
							return ykQHeader.doSearch();
						}
					">
						<i class="icon-search"></i>
						<input name="q" id="headq" type="text" autocomplete="off" _xbox_init="t" class="default" _xbox_default="火星情报局">
                        <a href="" target="_blank" class="rankq" title="优酷指数排行榜"></a>
						<button type="submit" data-spm="dbutton">搜库</button>
						<div id="qheader_keywords" style="display:none;">
							<a target="_blank" href="" class=""></a>
						</div>
						<input type="text" style="display:none;">
					<div style="display: none;"><div class=""><div class="sk_box sk_youku" style="display:block;"><iframe id="sk_holder_iframe" frameborder="0" scrolling="no" style="position: absolute; z-index: 0; top: -2px; left: -2px;" src="{{ asset('home6/saved_resource.html')}}"></iframe><div class="main" id="_xbox_refresh"></div><div id="_xbox_ad"><div class="sk_adsl"><a target="_blank" href="http://v.youku.com/v_show/id_XMjg2MDI0NTc5Ng==.html"><img sk_live="link" log_pos="8" src="{{ asset('home6/05100000595629FCADB9127F7606122D')}}"></a><a class="sk_ads_close" href="javascript:;" style="display: inline;"><i sk_live="adclose" class="ico ico_ad_close" style="display: none;"></i></a></div></div></div></div></div><div><script src="{{ asset('home6/search_tip_1')}}"></script><script src="{{ asset('home6/sideads.json')}}"></script></div><link rel="stylesheet" type="text/css" href="{{ asset('home6/s_kubox.css')}}"></form>
				</div>
			</div>
		</div>
			</div>
</div>
<div id="qnotice" class="notice-wrap"></div>
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
					<li class="current"><a href="">基本设置</a></li>
					<!-- <li><a href="">安全设置</a></li> -->
				</ul>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="yk-row">
    <div class="YK_dashboard yk-col3">
		<div class="YK_dashboard_inner">
							<ul class="YK_menu">
					<li class="current"><a href="">基本资料</a></li>
		</div>
    </div>
	
    <div class="YK_main yk-w970-col15 yk-w1190-col19">
        <div class="YK_setting">
				<div class="content">
				
<div class="content" _uc="setting" id="profile">
	<div class="formbox">
			<fieldset>	
				
				<form action="{{url('a/userdetail/updatesss')}}" method="post" id="sv_profile" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				
				<div class="entry" width="80">
						<label>头像：</label>
						<img src="/uploads/{{$list['picname']}}" class="user-img " >
					</div>
					<div class="entry">
						<label>账号：</label>
						<input readonly placeholder="账号" type="text" value="{{$list['account']}}" style="width:125px;" name="account"  class="form_input"/>
					</div>
					<div class="entry">
					  <label></label>
					  <input   placeholder="头像" style="height:110px;" type="file" value="{{$list['picname']}}" name="picname" class="huhu"/>
					</div>
					<div class="entry">
					  <label>真实姓名：</label>
					  <input   placeholder="真实姓名" type="text" value="{{$list['name']}}" name="name" class="form_input" style="width:125px;"/>
					</div>
					<div class="entry">
						<label>生日：</label>
						<input   placeholder="生日" type="text" value="{{$list['birthday']}}" style="width:125px;" name="birthday"  class="form_input"/>
					</div>
					<div class="entry">
						<label>电话：</label>
						<input   placeholder="电话" type="text" value="{{$list['tel']}}" style="width:125px;" name="tel"  class="form_input"/>
					</div>
					<div class="entry">
						<label>邮箱：</label>
						<input  placeholder="邮箱" type="text" value="{{$list['email']}}" style="width:155px;" name="email"  class="form_input"/>
					</div>
					<div class="entry">
						<label>地址：</label>
						<input type="text" class="form_input" autocomplete="off" value="{{$list['address']}}" style="width:185px;"  name="address" id="J_captchaBox"/>
					</div>
					<div class="entry savebtn">
						<div class="form_btn form_btn_m form_btnmaj_m">
							<button class="form_btn_text" type="submit" style="width:90px;"><h2>完成</h2></button>
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
            <a target="_blank" href="">大优酷事业群</a>　
            <a target="_blank" href="">关于优酷</a>　
            <a target="_blank" href="">关于土豆</a>
        </dt>
        <dd>
            <a target="_blank" href="">Youku Tudou Inc.</a>
            <a target="_blank" href="">Youku.com</a>
            <a target="_blank" href="">Tudou.com</a>
        </dd>
        <dd>
            <a target="_blank" href="">友情链接</a>
            <a target="_blank" href="">广告服务</a>
        </dd>
    </dl>
    <dl class="g-w2">
        <dt>
            优酷热门
        </dt>
        <dd>
            <a target="_blank" href="">剧集</a>
            <a target="_blank" href="">电影</a>
            <a target="_blank" href="">综艺</a>
            <a target="_blank" href="">音乐</a>
            <a target="_blank" href="">少儿</a>
            <a target="_blank" href="">资讯</a>
            <a target="_blank" href="">拍客</a>
            <a target="_blank" href="">纪实</a>
            <a target="_blank" href="">公益</a>
        </dd>
        <dd>
            <a target="_blank" href="">体育</a>
            <a target="_blank" href="">汽车</a>
            <a target="_blank" href="">科技</a>
            <a target="_blank" href="">财经</a>
            <a target="_blank" href="">娱乐</a>
            <a target="_blank" href="">文化</a>
            <a target="_blank" href="">动漫</a>
            <a target="_blank" href="">搞笑</a>
            <a target="_blank" href="">旅游</a>
        </dd>
        <dd>
            <a target="_blank" href="">时尚</a>
            <a target="_blank" href="">亲子</a>
            <a target="_blank" href="">教育</a>
            <a target="_blank" href="">游戏</a>
            <a target="_blank" href="">会员</a>
            <a target="_blank" href="">发现</a>
            <a target="_blank" href="">片库</a>
        </dd>
    </dl>
    <dl class="g-w3">
        <dt>产品中心</dt>
        <dd>
            <a href="javascript:void(0);" class="ikuDownLoad" data-down-href="ywebbottom" data-down-mac="">PC客户端</a>
        </dd>
        <dd>
            <a target="_blank" href="">手机客户端</a>
            <a target="_blank" href="">拍客</a>
        </dd>
        <dd>
            <a target="_blank" href="">智能硬件</a>
            <a target="_blank" href="">视频云</a>
        </dd>
    </dl>
    <dl class="g-w4">
        <dt>用户</dt>
        <dd>
            <a target="_blank" href="">开通大鱼号</a>
        </dd>

        <dt>支持</dt>
        <dd>
            <a id="sttrans" href="javascript:void(0);">繁體版</a>
            <a target="_blank" href="">在线反馈</a>
            <!-- <a target="_blank" href="http://www.youku.com/help/">帮助中心 </a> -->
        </dd>
    </dl>
    <div class="g-hr"></div>
    <dl class="g-w1">
        <dd><a target="_blank" href="">网络文化经营许可证 京网文[2014]0934-236号</a></dd>
        <dd><a target="_blank" href="">京卫网审[2013]第0209号 </a> <a target="_blank" href="">网络110报警服务</a></dd>
        <dd> 药品服务许可证(京)-经营-2015-0029</dd>
        <dd>
            节目制作经营许可证京字670号
        </dd>
    </dl>
    <dl class="g-w2">
        <dd>请使用者仔细阅读优酷<a target="_blank" href="" class="mr0">使用协议</a>、<a target="_blank" href="" class="mr0">版权声明</a>、<a target="_blank" href="" class="mr0">反盗版盗链声明</a></dd>
        <dd>Copyright©2017 优酷 youku.com 版权所有</dd>
        <dd>不良信息举报电话: 4008100580</dd>
        <dd><a target="_blank" href="">信息网络传播视听节目许可证0108283号</a></dd>
    </dl>
    <dl class="g-w3">
        <dd><a target="_blank" href="">京ICP证060288号</a></dd>
        <dd><a target="_blank" href="">新出网证(京)字160号</a></dd>
        <dd><a target="_blank" href="">北京互联网举报中心</a></dd>
        <dd><a target="_blank" href="">北京12318文化市场举报热线</a></dd>
    </dl>
    <dl class="g-w4">
        <a class="qcode" target="_blank" href=""><img src="{{ asset('home6/0510000058D0FEA1ADC0AE058F099020')}}" width="84px"></a>
    </dl>
    <div class="g-authentication">
        <a class="aut-1" target="_blank" href="">经营性网站<br>备案信息</a>
        <a class="aut-2" target="_blank" href="">中国互联网<br>诚信联盟</a>
        <a class="aut-3" target="_blank" href="">中国互联网<br>举报中心</a>
        <a class="aut-4" target="_blank" href="">网络举报<br>APP下载</a>
        <a class="aut-5" target="_blank" href="">京公网安备<br>11000002000017</a>
        <a class="aut-6" target="_blank" href="">网络文化<br>经营单位</a>
        <a class="aut-7" target="_blank" href="">暴恐音视频<br>举报专区</a>
    </div>
</div>

<div id="sideBar" class="side-bar"><div class="feedback"><a href="http://csc.youku.com/feedback-web/web/" target="_blank"></a></div><div id="goTop" data-stat-role="ck"><img width="29" height="65" src="{{ asset('home6/05100000575CCAF767BC3D4B250267B7')}}"></div></div><script src="{{ asset('home6/qwindow.js.下载')}}"></script>
<script src="{{ asset('home6/city.js.下载')}}"></script><script src="{{ asset('home6/setting.js.下载')}}"></script><script type="text/javascript" src="{{ asset('home6/login.js.下载')}}"></script><div style="height: 0px; width: 0px; overflow: hidden;"><object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket"><param name="allowScriptAccess" value="always"><param name="movie" value="http://aeu.alicdn.com/flash/JSocket.swf"> <embed src="http://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" width="0" height="0"></object></div></body></html>