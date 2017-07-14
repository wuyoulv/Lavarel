<!DOCTYPE html>
<!-- saved from url=(0036)http://faxian.youku.com/watch_record -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="{{ asset('home7/index.js.下载')}}" id="aplus-sufei"></script><script type="text/javascript" async="" src="{{ asset('home7/saved_resource')}}"></script>
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="data-spm" content="a2hfx">
	<meta name="title" content="观看记录_优酷视频">
	<meta name="keywords" content="我的记录,视频记录,观看记录,观看历史,浏览记录,优酷视频">
	<meta name="description" content="优酷观看记录页面用于显示用户近期看过的视频，用户在这里可以对上次未看完和感兴趣的视频再次观看">
	<meta name="google-site-verification" content="F2zYXuMVH2X76NeYEdAiGokv0QFtgOB1ZgCSZPglQbs">
	<link rel="Shortcut Icon" href="http://static.youku.com/v1.0.166/index/img/favicon.ico">
	<title>观看记录_优酷视频</title>
	<link type="text/css" href="{{ asset('home7/g_74.css')}}" rel="stylesheet">
			<link type="text/css" href="{{ asset('home7/record_15.css')}}" rel="stylesheet">
		<link id="YT-loginFrameCss" rel="stylesheet" href="{{ asset('home7/main_1291495.css')}}"><style type="text/css"></style>
<style type="text/css">div.YT-loginWrap{ background: url(//r1.ykimg.com/05100000594BAEAEADC0B05C0605C491) no-repeat right bottom !important; }</style><script src="{{ asset('home7/index.js(1).下载')}}"></script><script src="{{ asset('home7/index.js(2).下载')}}" id="aplus-sufei"></script></head>

<body class="w1300" data-spm="8251854"><div style="display:block;clear:both;float:none;position:absolute;right:0;bottom:0;border:none;"><object id="MTJ4YWG1VZ3XWU5B" data="{{ asset('home7/MTFlashStore.swf.下载')}}" type="application/x-shockwave-flash" width="10" height="10" style="position:absolute;right:0;bottom:0;border:none;"><param name="movie" value="//irs01.net/MTFlashStore.swf#"><param name="wmode" value="transparent"><param name="version" value="10"><param name="allowScriptAccess" value="always"><param name="flashvars" value="jsproxyfunction=MTJ4YWG1T65R9E8G"></object></div><script id="beacon-aplus" src="{{ asset('home7/aplus_o.js.下载')}}" exparams="userid=&amp;aplus&amp;sidx=0&amp;ckx=|"></script><script>
with(document)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("exparams","userid=&aplus&sidx=0&ckx=|",id="beacon-aplus",src="//g.alicdn.com/alilog/mlog/aplus_o.js")
</script>
<script type="text/javascript">

</script>
<div class="window">
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
				<a href="{{ url('home/') }}" title="Youku 优酷" attr="idx0"><img src="{{ asset('home7/yk-logo-1220.png')}}" width="140" height="50" alt="Youku 优酷" from="index"></a>
			</div>

			<div class="g-head-center">
				<ul class="g-head-nav">
					<li>
						<a href="{{ url('home/') }}">首页</a>
					</li>
					<li>
						<a href="http://faxian.youku.com/">发现</a>
					</li>
					<li>
						<a id="navSub" href="http://ding.youku.com/u/subscribeUpdate">订阅<span class="icon-warn" id="qheader_sub_num" style="display:none;"></span></a>
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
					<!-- <div class="login-before handle" style="display: block;">
					                        <a id="qheader_login" href="http://www.youku.com/user_login/">登录</a><a id="qheader_reg" href="http://www.youku.com/user_login/">注册</a>
					</div> -->
					  <div class="login-before handle" style="display: none;">
                        <span id="span_userinfo"> @if(session('adminn')) <a href="{{ url('home/user/zhanghu') }}"> {{session('adminn')->account}}</a>·<a href="/homeLog/logout">退出</a> @else [<a  id="qheader_reg" href="{{URL('home/login')}}"> 登陆 </a>·<a id="qheader_reg" href="{{url('home/register')}}">注册</a>]</span>@endif
                    </div>
				<!-- 		<div class="login-after dropdown unload handle" style="display: none;">
					<a href="http://user.youku.com/page/usc/index" target="_blank">
						<img class="avatar" src="{{ asset('home7/sprite.gif')}}">
						<b class="caret"></b>
				                            <span></span>
					</a>
					<div class="panel u-panel"><i class="arrow"></i>
						<div class="content">
				
						</div>
						<div class="u-bottom">
							<a href="http://faxian.youku.com/watch_record#" class="singout">退出登录</a>
							<a href="http://user.youku.com/page/setting/base_profile" target="_blank">账户设置</a>
						</div>
					</div>
				</div>	 -->
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
					<div style="display: none;"><div class=""><div class="sk_box sk_youku" style="display:block;"><iframe id="sk_holder_iframe" frameborder="0" scrolling="no" style="position: absolute; z-index: 0; top: -2px; left: -2px;" src="{{ asset('home7/saved_resource.html')}}"></iframe><div class="main" id="_xbox_refresh"></div><div id="_xbox_ad"></div></div></div></div><div><script src="{{ asset('home7/search_tip_1')}}"></script><script src="{{ asset('home7/sideads.json')}}"></script></div><link rel="stylesheet" type="text/css" href="{{ asset('home7/s_kubox.css')}}"></form>
				</div>
			</div>
		</div>
			</div>
</div><div id="qnotice" class="notice-wrap"></div>
<!--sub nav-->
<!--sub nav end-->

		<div class="s-body">
		<div class="yk-content">
           
<div id="recordContent">

<div class="yk-nav">
    <div class="nav-content">
    <a class="fr clear-all" _tk="283aacec71d69dd199745777a407c4160ee">清空我的观看记录</a>
    记录了我的<span id="recordSum">1</span>条观看记录      <span class="look-tv"><input type="checkbox">  只看剧集 <i></i></span>
    </div>
</div>
<div class="no-record" id="no-record" style="display:none;">
    <div class="local-txt" style="display: block;">本地没有观看记录呦，<a href="http://faxian.youku.com/watch_record#" class="need-login">登录</a>查看云端观看记录吧！</div>
    <div class="login-txt">赶快去<a href="http://faxian.youku.com/" target="_self">发现</a>页面看看视频吧~</div>
</div>

<dl class="his-list">
        <dt class="his-time today"> <b>今天</b> <span>07/11&nbsp;周二</span> </dt>
        <dd>
    <div class="yk-row">
                                                                        
    	    <div class="yk-pack pack-rec yk-col4 pack-continue">
        <a class="pack-close" href="http://faxian.youku.com/watch_record#" delinfo="%7B%22videoid%22%3A472962178%2C%22folderid%22%3A0%2C%22showid%22%3A%2226752cc61bd211e6b432%22%7D" _tk="283aacec71d69dd199745777a407c4160ee" title="删除记录"></a>
        <div class="p-thumb">
            <a href="http://v.youku.com/v_show/id_XMTg5MTg0ODcxMg==.html" target="video"></a>
            <i class="bg"></i>
            <img class="quic" src="{{ asset('home7/054204085866C0AB6A0A3F04D13B3737')}}">
            <ul class="action-btn">
                                <li class="continue">
                    <a href="http://v.youku.com/v_show/id_XMTg5MTg0ODcxMg==.html?firsttime=0" target="video"><em></em>继续看</a>
                </li>
                <li class="replay">
                    <a href="http://faxian.youku.com/watch_record" target="video"><em></em>重新看</a>
                </li>            
            </ul>
            <ul class="p-info pos-bottom">
                    <li class="status">
                        <span class="p-type hover-hide">
                             <i class="ibg"></i>
                             <span>电影</span>
                        </span>
                        <span class="p-time hover-hide">
                            <i class="ibg"></i>
                            <span>90:32</span>
                        </span>          
                    </li>
            </ul>
        </div>
        <ul class="info-list">
            <li class="title">
				<a href="http://v.youku.com/v_show/id_XMTg5MTg0ODcxMg==.html" target="video" title="超级快递">超级快递</a>
            </li> 
                        <li>
                <span><i class="icos-record ico-pc"></i>看到 1%                </span>
            </li> 
                    </ul>
    </div>  
        
        </div>          
    </dd>
</dl> 

<div class="del-layer" id="delLayer">
    <i class="arrow"><i></i></i>
    <p>确定要删除这条记录么</p>
    <div class="confirm">
        <a href="javascript:void(0);" class="btn btn-ok">确定</a>
        <a href="javascript:void(0);" class="btn btn-cancel">取消</a>
    </div>
</div>

</div>
            <ul id="FixMod" class="fix-mod"></ul>
            
				
				
			

		</div>
	</div>
	<div class="g-footer">
    <dl class="g-w1">
        <dt>
            <a target="_blank" href="http://c.youku.com/aboutcn/youtu">大优酷事业群</a>　
            <a target="_blank" href="http://c.youku.com/aboutcn/youku">关于优酷</a>　
        </dt>
        <dd>
            <a target="_blank" href="http://c.youku.com/abouteg/youtu">Youku Tudou Inc.</a>
            <a target="_blank" href="http://c.youku.com/abouteg/youku">Youku.com</a>
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
        </dd>
        <dd>
            <a target="_blank" href="http://travel.youku.com/">旅游</a>
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
        </dd>
        <dd>
            <a target="_blank" href="http://yj.youku.com/?hmsr=1119youku&amp;hmpl=&amp;hmcu=&amp;hmkw=&amp;hmci=">智能硬件</a>
            <a target="_blank" href="http://cloud.youku.com/">视频云</a>
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
            <a target="_blank" href="http://csc.youku.com/feedback-web/web/">在线反馈</a>
            <!-- <a target="_blank" href="http://www.youku.com/help/">帮助中心 </a> -->
        </dd>
    </dl>
    <div class="g-hr"></div>
    <dl class="g-w1">
        <dd><a target="_blank" href="http://mapp.youku.com/service/licence/">网络文化经营许可证 京网文[2014]0934-236号</a></dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/20130209">京卫网审[2013]第0209号 </a> <a target="_blank" href="http://www.bj.cyberpolice.cn/index.htm">网络110报警服务</a></dd>
        <dd> 药品服务许可证(京)-经营-2015-0029</dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/gbdsjmzzjyxkz">节目制作经营许可证京字670号</a></dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/yingyezhizhao">营业执照</a></dd>
    </dl>
    <dl class="g-w2">
        <dd>请使用者仔细阅读优酷<a target="_blank" href="http://mapp.youku.com/service/agreement" class="mr0">使用协议</a>、<a target="_blank" href="http://mapp.youku.com/service/banquan" class="mr0">版权声明</a>、<a target="_blank" href="http://mapp.youku.com/service/piracy" class="mr0">反盗版盗链声明</a></dd>
        <dd>Copyright©2017 优酷 youku.com 版权所有</dd>
        <dd>不良信息举报电话: 4008100580</dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/0108283">信息网络传播视听节目许可证0108283号</a></dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/chubanwu">出版物经营许可证</a></dd>
    </dl>
    <dl class="g-w3">
        <dd><a target="_blank" href="http://www.miibeian.gov.cn/">京ICP证060288号</a></dd>
        <dd><a target="_blank" href="http://mapp.youku.com/service/chuban">新出网证(京)字160号</a></dd>
        <dd><a target="_blank" href="http://www.bjjubao.org/">北京互联网举报中心</a></dd>
        <dd><a target="_blank" href="http://www.bjwhzf.gov.cn/accuse.do">北京12318文化市场举报热线</a></dd>
    </dl>
    <dl class="g-w4">
        <a class="qcode" target="_blank" href="http://mobile.youku.com/index/wireless"><img src="{{ asset('home7/0510000058D0FEA1ADC0AE058F099020')}}" width="84px"></a>
    </dl>
    <div class="g-authentication">
        <a class="aut-1" target="_blank" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202006082400023">经营性网站<br>备案信息</a>
        <a class="aut-2" target="_blank" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1786197705">中国互联网<br>诚信联盟</a>
        <a class="aut-3" target="_blank" href="http://www.12377.cn/">中国互联网<br>举报中心</a>
        <a class="aut-4" target="_blank" href="http://www.12377.cn/node_548446.htm">网络举报<br>APP下载</a>
        <a class="aut-5" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002000017">京公网安备<br>11000002000017</a>
        <a class="aut-6" target="_blank" href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/toDetail/0D76560AE65141FF9FEFE3481D205C50">网络文化<br>经营单位</a>
        <a class="aut-7" target="_blank" href="http://www.12377.cn/">暴恐音视频<br>举报专区</a>
        <div style="text-align: center;margin-top:8px;">
            <a style="padding-left:0;" href="https://credit.szfw.org/CX20170616038883280388.html" target="_blank"><img src="{{ asset('home7/0510000059479119ADC0B05C010B4454')}}" border="0"></a>
       </div>
    </div>
</div>

</div>

<script src="{{ asset('home7/lib_13.js.下载')}}" id="libjsnode" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('home7/g_69.js.下载')}}"></script>
<script type="text/javascript" src="{{ asset('home7/g_107.js.下载')}}"></script>
	<script type="text/javascript" src="{{ asset('home7/index_16.js.下载')}}"></script>


<!-- 1499736591 - 1499736591 --><div id="sideBar" class="side-bar"><div class="feedback"><a href="http://csc.youku.com/feedback-web/web/" target="_blank"></a></div><div id="goTop" data-stat-role="ck"><img width="29" height="65" src="{{ asset('home7/05100000575CCAF767BC3D4B250267B7')}}"></div></div><div style="height: 0px; width: 0px; overflow: hidden;"><object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket"><param name="allowScriptAccess" value="always"><param name="movie" value="http://aeu.alicdn.com/flash/JSocket.swf"> <embed src="http://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" width="0" height="0"></object></div></body></html>