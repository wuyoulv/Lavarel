<!DOCTYPE html>
<!-- saved from url=(0079)http://user.youku.com/page/usc/index?spm=a2hww.20023042.qheader.5~5~5!2~1~3!5~A -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="{{asset('home3/js/saved_resource')}}"></script><script async="" src="{{asset('home3/js/get_putdata.json')}}"></script>
	<script src="{{asset('home3/js/hm.js.下载')}}"></script><script>var _US_TEST=0</script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="{{asset('home3/css/index.css')}}">
    <meta name="title" content="优酷网-中国第一视频网,提供视频播放,视频发布,视频搜索">
    <meta name="keywords" content="视频,视频分享,视频搜索,视频播放">
    <meta name="description" content="视频服务平台,提供视频播放,视频发布,视频搜索,视频分享">
    <link rel="icon" href="http://static.youku.com/v1.0.166/index/img/favicon.ico" type="image/x-icon">
    <title>个人中心</title>
<link id="YT-loginFrameCss" rel="stylesheet" href="{{asset('home3/css/main_495c9db.css')}}"></head>
<body class="f6 w1300">

	<link type="text/css" href="{{asset('home3/css/ykheader_43.css')}}" rel="stylesheet">
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
				<a href="http://www.youku.com/" title="Youku 优酷" attr="idx0"><img src="{{asset('home3/image/yk-logo-1220.png')}}" width="140" height="50" alt="Youku 优酷" from="index"></a>
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
						<a href="http://cps.youku.com/redirect.html?id=00014c9c">会员</a>
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
                        <a id="qheader_login" href="http://www.youku.com/user_login/">登录</a><a id="qheader_reg" href="http://www.youku.com/user_login/">注册</a>
					</div>
					<div class="login-after dropdown handle" style="">
						<a href="http://i.youku.com/i/UMTc2NDQ5NDUyNA==" target="_blank">
							<img class="avatar" src="{{asset('home3/image/5.jpg')}}" title="土豆用户_441123631">
							<b class="caret"></b>
                            <span></span>
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
                                    <a href="http://i.youku.com/i/UMTc2NDQ5NDUyNA==" target="_blank">
                                    <img src="{{asset('home3/image/5(1).jpg')}}">
                                    </a>
                                    </div>
                                    <div class="u-profile">
                                    <div class="u-name">
                                    <a href="http://i.youku.com/i/UMTc2NDQ5NDUyNA==" class="u-link" target="_blank" title="土豆用户_441123631">土豆用户_441123631</a>
                                    <a href="http://actives.youku.com/task/signv2/index" target="_blank" class="u-sign">签到</a>
                                    </div>
                                    <div class="u-credit">

                                    <a href="http://cps.youku.com/redirect.html?id=000145df" target="_blank" class="user-grade">
                                    <span class="user-grade-icon user-grade-lv15" title="优酷等级：15"></span>
                                    </a>

                                    <a class="ico-valid-email ico-valid-email-done" href="http://id.youku.com/" target="_blank"></a>
                                    <a class="ico-valid-phone " href="http://id.youku.com/" target="_blank"></a>
                                    </div>
                                    <div class="u-point" style="display: block;">
                                    <i class="arrow"></i>
                                    <a href="http://point.youku.com/page/mall/index" target="_blank">我的等级积分：<em>55</em><span>立即兑换</span></a>
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
                                        <a href="http://i.youku.com/i/UMTc2NDQ5NDUyNA==" target="_blank" class="u-zpd">
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
                                        <div class="task-info"><dl><dt><img src="{{asset('home3/image/sign1.png')}}" alt="任务图标"></dt><dd><em>签到有礼</em><span title="百万豪礼等你拿，优酷会员超值兑">百万豪礼等你拿，优酷会员超值兑</span></dd></dl><a target="_blank" href="http://actives.youku.com/task/show/index">签到</a></div>
                                    </div>  
                                </div> 
                            </div>
							<div class="u-bottom">
								<a href="http://user.youku.com/page/usc/index?spm=a2hww.20023042.qheader.5~5~5!2~1~3!5~A#" class="singout">退出登录</a>
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

  

  




<dt>一周内</dt>
      


<dd>
<a href="http://v.youku.com/v_show/id_XMTQwNzg1NDkyMA==.html?firsttime=3149" target="video" title="我是证人">我是证人</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到47%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjgzODc1NDcyOA==.html" target="video" title="沈梦辰移情恋上李易峰? 170621 脑大洞开">沈梦辰移情恋上李易峰? 170621 脑大洞开</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到1%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjgzODg5NTc2MA==.html" target="video" title="吴秀波微信名意外曝光 &quot;不二&quot;疑似暗藏玄机 01 170621">吴秀波微信名意外曝光 "不二"疑似暗藏玄机 01 170621</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到1集  
1%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMjgyMzEyMjE2NA==.html?firsttime=88" target="video" title="《变形金刚5:最后的骑士》中国独家预告片">《变形金刚5:最后的骑士》中国独家预告片</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到100%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMTg2Mjk5Mjc4NA==.html?firsttime=842" target="video" title="外公芳龄38">外公芳龄38</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到14%
</span>
</dd> 



      


<dd>
<a href="http://v.youku.com/v_show/id_XMTg3NjYzODMwOA==.html?firsttime=181" target="video" title="于谦酒醉不舍酱婶收官 161223">于谦酒醉不舍酱婶收官 161223</a> 
<span class="rec-st">
<i class="ico-device ico-pc"></i> 
看到12-23期  
7%
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
				<div class="u-notice">
					<div class="dropdown">
						<div class="handle">
							<a href="http://msg.youku.com/page/msg/index?retry=1" target="_blank">
								<i class="ico-notifications-l2"></i>
								<b class="caret"></b>
								<span class="icon-warn" id="qheader_notice_num" style="display:none;"></span>
							</a>
						</div>
						<div class="panel">
							<i class="arrow"></i>
							<div class="content">
							</div>
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
                <a href="http://mp.dayu.com/dashboard/stat/video" target="_blank" class="data-analysis">
                    <em></em>  数据分析
                </a>
            </li>
        </ul>
        <div class="up-cnt-2">
            <a href="http://rz.tudou.com/" target="_blank" style="width:360px;height:60px;margin-top:-15px;margin-left:-104px;"><img src="{{asset('home3/image/0510000058DA1E9AADC0AE05A00E6EE3')}}"></a>
        </div>
    </div>
    <div class="u-bottom">
        <a href="http://user.youku.com/page/usc/index?spm=a2hww.20023042.qheader.5~5~5!2~1~3!5~A#" data-url="http://iku.youku.com/channelinstall/ywebuploadFloat" class="ikuDownload" target="_self"><i></i>立即下载</a>
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
						<input name="q" id="headq" type="text" autocomplete="off" _xbox_init="t">
                        <a href="http://top.youku.com/rank/" target="_blank" class="rankq" title="优酷指数排行榜"></a>
						<button type="submit" data-spm="dbutton">搜库</button>
						<div id="qheader_keywords" style="display:none;">
							<a target="_blank" href="http://www.soku.com/search_video/q_" class=""></a>
						</div>
						<input type="text" style="display:none;">
					<div style="display: none;"><div class=""><div class="sk_box sk_youku" style="display:block;"><iframe id="sk_holder_iframe" frameborder="0" scrolling="no" style="position: absolute; z-index: 0; top: -2px; left: -2px;" src="{{asset('home3/js/saved_resource.html')}}"></iframe><div class="main" id="_xbox_refresh"></div><div id="_xbox_ad"><div class="sk_adsl"><a target="_blank" href="http://v.youku.com/v_show/id_XMjgzNzM0NTYxNg==.html"><img sk_live="link" log_pos="8" src="{{asset('home3/image/05100000594A26B4ADC0B05C0A0F2481')}}"></a><a class="sk_ads_close" href="javascript:;" style="display: inline;"><i sk_live="adclose" class="ico ico_ad_close" style="display: none;"></i></a></div></div></div></div></div><div><script src="{{asset('home3/js/search_tip_1')}}"></script><script src="{{asset('home3/js/sideads.json')}}"></script></div><link rel="stylesheet" type="text/css" href="{{asset('home3/css/s_kubox.css')}}"></form>
				</div>
			</div>
		</div>
			</div>
</div><div id="qnotice" class="notice-wrap"></div>

@section('content')
            这是页面主内容区。
@show

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
        <a class="qcode" target="_blank" href="http://mobile.youku.com/index/wireless"><img src="{{asset('home3/image/0510000058D0FEA1ADC0AE058F099020')}}" width="84px"></a>
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
            <a style="padding-left:0;" href="https://credit.szfw.org/CX20170616038883280388.html" target="_blank"><img src="{{asset('home3/image/0510000059479119ADC0B05C010B4454')}}" border="0"></a>
       </div>
    </div>
</div>

</footer>
<script type="text/html" id="load-tpl">
	<!--弹层模板-->
	<div class="load-box" id="load-box">
		<div class="load-bg"  onclick="UCENTER.closeLoad(event)"></div>
		<div class="load-wrap">
			<div class="load-title">
				<span>信息提示</span>
			</div>
			<div class="load-content">
				<% if(code != ""){%>
				<div class="code">
					<%=code%>
				</div>
				<%}%>
				<p class="load-desc"><%=content%></p>
				<a href="<% if(code != ''){%><%=url%><%}else{%>javaScript:void(0);<%}%>" class="load-btn" target="_blank" onclick="UCENTER.closeLoad(event)"><%=btnCon%></a>
			</div>
			<a href="javaScript:void(0);" class="icon close-btn" onclick="UCENTER.closeLoad(event)"></a>
		</div>
	</div>
</script>
<script type="text/template" id="play-log-tpl">
	<div class="his-con-box">
		<p class="his-day">	
			<span class="icon <%if(key.indexOf('今天') > -1){%>border-cur<%}else{%>border-gray<%}%>"></span>
			<span class="con-day"><%=key%></span>
		</p>
		<ul>
			<%for(var i=0,l=list.length; i < l;i ++){%>
			<li>
				<a href="<%=list[i].link%>" target="_blank" title="<%=list[i].name%>">
					<em class="<%if(key.indexOf('今天') > -1){%>blue<%}else{%>gray<%}%>"></em>
					<span class="v-name"><%=list[i].name%></span>
					<span class="blue"><%=list[i].percent%></span>
				</a>
			</li>
			<%}%>
		</ul>
	</div>
</script>
<script type="text/template" id="grade-tpl">
	<ul class="gift-ul">
		<%for(var i = 0,l=list.length;i<l;i++){%>
			<li  data-url="<%=list[i].gift_exchange_url%>" id="<%=list[i].gift_id%>">
				<img src="<%=list[i].gift_img_url%>" alt="">
				<div class="ex-box">
					<div class="ex-bg"></div>
					<span><%=list[i].gift_title%></span>
					<a href="javascript:void(0);" class="exchange<%if(list[i].is_receive != 0){%> disabled<%}else{%><%}%>"data-id="<%=list[i].gift_id%>">
					<%if(list[i].is_receive == 0){%>
						领取
					<%}else{%>
						已领取
					<%}%>
					</a>
				</div>
			</li>
		<%}%>
	</ul>
</script>
<script type="text/template" id="task-tpl">
	<%for(var i = 0 , l = list.length; i < l ;i++){%>
		<li class="con task-con task-con-left">
		<img src="<%=list[i].small_logo_url%>" class="task-bind">
			<div class="task-desc">
				<p class="desc-title"><%=list[i].name%></p>
				<p class="desc-sub-title"><%=list[i].desc%></p>
			</div>
			<a href="<%=list[i].click_url%>" target="_blank" class="task-btn" data-stat-role='ck'><%=list[i].button_text%></a>
		</li>
	<%}%>
</script>
<script type="text/template" id="mall-tpl">
	<%for(var i = 0 , l = list.length; i < l ;i++){%>
		<li class="con task-con task-con-left">
		<img src="<%=list[i].pic_url%>" class="task-bind">
			<div class="task-desc">
				<p class="mall-desc-title"><%=list[i].name%></p>
				<p class="desc-sub-title"><%=list[i].desc%></p>
			</div>
			<a target="_blank" href="<%=list[i].href%>" class="task-btn" data-id="<%=list[i].id%>" data-stat-role='ck'>立即兑换</a>
		</li>
	<%}%>
</script>
<script type="text/template" id="vip-tpl">
			<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000058F07C4DADBA1F83EF0314DE">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="318女生宿舍">318女生宿舍</p>
				<p title="高校灵异事件惊悚来袭">高校灵异事件惊悚来袭</p>
				<div class="hide">
					<span>1,175万次播放</span>
					<span>3,884次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" title="318女生宿舍" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000058E2FB3BADBC0993BB089BA3">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="灵界警探">灵界警探</p>
				<p title="美道姑携灵界警司降妖">美道姑携灵界警司降妖</p>
				<div class="hide">
					<span>5,194万次播放</span>
					<span>1,760次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" title="灵界警探" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjcwMzEwODMwOA==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000058F6D2A9ADBDD3864F0DBEAE">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="盗爱时空之笨贼也疯狂">盗爱时空之笨贼也疯狂</p>
				<p title="清代冰冻人复活救美女">清代冰冻人复活救美女</p>
				<div class="hide">
					<span>788.7万次播放</span>
					<span>271次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjcwMzEwODMwOA==.html" title="盗爱时空之笨贼也疯狂" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjc0NzkyNTcwNA==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000059103FCBADBAC3E366089797">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="异能超模">异能超模</p>
				<p title="美女模特"变脸"撩男神">美女模特"变脸"撩男神</p>
				<div class="hide">
					<span>997.0万次播放</span>
					<span>802次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjc0NzkyNTcwNA==.html" title="异能超模" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjY0MjExMjY1Mg==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000058C9FCB2ADBDD3C42B062228">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="密道追踪之魔镜邪灵">密道追踪之魔镜邪灵</p>
				<p title="诡异镜像人追杀地球人">诡异镜像人追杀地球人</p>
				<div class="hide">
					<span>1,008万次播放</span>
					<span>608次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjY0MjExMjY1Mg==.html" title="密道追踪之魔镜邪灵" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjc1MTc0NzMyNA==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000059140548ADBAC313210D2137">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="悟空前传">悟空前传</p>
				<p title="至尊玉与紫霞旷世奇恋">至尊玉与紫霞旷世奇恋</p>
				<div class="hide">
					<span>1,506万次播放</span>
					<span>1,084次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjc1MTc0NzMyNA==.html" title="悟空前传" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjc4NDcxNzgzNg==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E0000592404A2ADBC09664E02E099">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="临界2:安魂曲">临界2:安魂曲</p>
				<p title="拯救女儿反酿致命悲剧">拯救女儿反酿致命悲剧</p>
				<div class="hide">
					<span>1,351万次播放</span>
					<span>192次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjc4NDcxNzgzNg==.html" title="临界2:安魂曲" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjgzMDE0NjQxNg==.html" target="_blank" data-stat-role='ck' >
			<img src="http://r1.ykimg.com/050E000058D4B19EADBA1FA2E007E3ED">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			<div class="vip-desc-box">
				<p title="嫌疑人X的献身">嫌疑人X的献身</p>
				<p title="王凯张鲁一高智商对决">王凯张鲁一高智商对决</p>
				<div class="hide">
					<span>768.0万次播放</span>
					<span>3,043次评论</span>
				</div>
				<div class="wrap-btn hide">
					<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjgzMDE0NjQxNg==.html" title="嫌疑人X的献身" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 </script>
<script type="text/html" id="hot-tpl">
			<li >
			<a href="http://v.youku.com/v_show/id_XMjg0OTMyNzc3Mg==.html" target="_blank">
				<img src="http://g1.ykimg.com/050C0000594FDE48ADC0B05C0407B3A2">
				<i class="hot-icon no no1"></i>
				<p class="desc-box" title="[花儿与少年3]江疏影秒变媒婆 撩汉神技遭嫌弃">[花儿与少年3]江疏影秒变媒婆 撩汉神技遭嫌弃</p>
				<p class="num-box">
					<span class="icon num_play">680.9万</span>
					<span class="icon num-comment">369</span>
				</p>
			</a>
		</li>
			<li >
			<a href="http://v.youku.com/v_show/id_XMjg0MTExNDMwNA==.html" target="_blank">
				<img src="http://r1.ykimg.com/05100000594FD6E08B3D05125700C8A0">
				<i class="hot-icon no no2"></i>
				<p class="desc-box" title="<军师联盟>曹丕大婚娶甄宓"><军师联盟>曹丕大婚娶甄宓</p>
				<p class="num-box">
					<span class="icon num_play">219.5万</span>
					<span class="icon num-comment">288</span>
				</p>
			</a>
		</li>
			<li >
			<a href="http://v.youku.com/v_show/id_XMjg0OTEzMDk0OA==.html" target="_blank">
				<img src="http://g1.ykimg.com/050C0000594FD797ADC0AEC7BF0C4CB3">
				<i class="hot-icon no no3"></i>
				<p class="desc-box" title="[笑声传奇]潘长江怒斥蔡明">[笑声传奇]潘长江怒斥蔡明</p>
				<p class="num-box">
					<span class="icon num_play">119.2万</span>
					<span class="icon num-comment">466</span>
				</p>
			</a>
		</li>
			<li  class="w1080-last">
			<a href="http://v.youku.com/v_show/id_XMjg0OTg1NzU5Ng==.html?f=50202979" target="_blank">
				<img src="http://g1.ykimg.com/050C0000595068E8ADC0B05E86058AAC">
				<i class="hot-icon no no4"></i>
				<p class="desc-box" title="哥伦比亚游船沉没现场">哥伦比亚游船沉没现场</p>
				<p class="num-box">
					<span class="icon num_play">24.8万</span>
					<span class="icon num-comment">129</span>
				</p>
			</a>
		</li>
			<li  class="last">
			<a href="http://v.youku.com/v_show/id_XMjg0MjMxOTUzNg==.html" target="_blank">
				<img src="http://r1.ykimg.com/05100000594FD7248B6C58E92E0997A5">
				<i class="hot-icon no no5"></i>
				<p class="desc-box" title="<楚乔传>"九幽台"副本开启"><楚乔传>"九幽台"副本开启</p>
				<p class="num-box">
					<span class="icon num_play">5,472万</span>
					<span class="icon num-comment">3,779</span>
				</p>
			</a>
		</li>
		
</script>
<script type="text/template" id="rec-tpl">
	<ul class="list-box">
	<%for(var i=0,l=list.length; i < l;i ++){%>
		<%if((i+1) % 5 == 0){%>
		<li class="last">
		<%}else if((i+1) % 5 == 4){%>
		<li class="w1080-last">
		<%}else{%>
		<li>
		<%}%>
			<a href="javascript:void(0)" data-url="<%=list[i].link%>"  data-log-url="<%=list[i].click_log%>">
				<img src="<%=list[i].big_logo%>">
				<p class="desc-box" title="<%=list[i].title%>"><%=list[i].title%></p>
				<p class="num-box">
					<span class="icon num_play"><%=list[i].total_vv%></span>
					<span class="icon num-comment"><%=list[i].total_comment%></span>
				</p>
			</a>
		</li>
	<%}%>
	</ul>
</script>
<script type="text/template" id="loading-tpl">
	<div class="loading-box">
		<img src="//static.youku.com/lvip/img/ucenter/loading.gif" alt=""/>
	</div>
</script>
<script type="text/template" id="no-data-tpl">
  <div class="no-data">
    <img src="//static.youku.com/lvip/img/ucenter/no-data.png" />
    <p>还没有数据~</p>
  </div>
</script>
<script type="text/template" id="vip-priv-tpl">
	<ul class="vip-priv-ul">
		<%for(var i=0,l=list.length; i < l;i ++){%>
		<li>
			<a href="<%=list[i].data_href%>" target="_blank">
				<img src="//static.youku.com/lvip/img/ucenter/<%=list[i].img_url%>.png">
				<p><%=list[i].content%></p>
				<p class="tip-p"><%=list[i].tip%></p>
			</a>
		</li>
		<%}%>
	</ul>
</script>
<script type="text/template" id="more-goods-tpl">
	<a href="http://point.youku.com/" target="_blank" class="more-goods">更多商品</a>
</script>
<script type="text/javascript">
var appData= {"path":"static.youku.com/lvip", "score":'6968',"today_score":'0','upgrade_score':'392','today_max_score':'130', 'today_score':'0','grade':'15', 'is_login':"1"}
</script>
<script type="text/javascript" src="{{asset('home3/js/template.js.下载')}}"></script>
<script type="text/javascript" src="{{asset('home3/js/index.js.下载')}}"></script>
<script type="text/javascript" src="{{asset('home3/js/tdstat.js.下载')}}"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c6a6cb73914d3f4a5fee12d67db6072b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


<div id="sideBar" class="side-bar"><div class="feedback"><a href="http://csc.youku.com/feedback-web/web/" target="_blank"></a></div><div id="goTop" data-stat-role="ck"><img width="29" height="65" src="{{asset('home3/image/05100000575CCAF767BC3D4B250267B7')}}"></div></div><div style="height: 0px; width: 0px; overflow: hidden;"><object width="0" height="0" tabindex="-1" style="height:0;width:0;overflow:hidden;" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" id="JSocket"><param name="allowScriptAccess" value="always"><param name="movie" value="http://aeu.alicdn.com/flash/JSocket.swf"> <embed src="http://aeu.alicdn.com/flash/JSocket.swf" name="JSocket" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" width="0" height="0"></object></div></body></html>