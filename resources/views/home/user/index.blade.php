@extends('home.user.base')
@section('content')
<!--sub nav-->
<!--sub nav end-->
<script src="{{ asset('home3/js/lib_5.js.下载')}}" id="libjsnode" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('home3/js/ykheader_96.js.下载')}}"></script>

<div class="head-banner" id="head-banner">
	<div class="head-banner-container" id="head-banner-container"><a href="javascript:vod(0);"></a></div>
</div>
<div class="head-container" id="head-container" style="background-color: rgb(124, 210, 255);">
	<div class="head-box">
		<div class="inner-img">
			<script type="text/javascript">
				var date = new Date(),hour = date.getHours();
				if(hour > 5 && hour < 20){
					document.write('<img src="//static.youku.com/lvip/img/ucenter/day_bg.png" class="head-img" id="head-img">');
					document.getElementById("head-container").style.backgroundColor="#7cd2ff"
				}else{
					document.write('<img src="//static.youku.com/lvip/img/ucenter/night_bg.png" class="head-img" id="head-img">');
					document.getElementById("head-container").style.backgroundColor="#3391d1"
				}
				@foreach($list as $v) 
			</script><img src="{{ asset('home3/image/day_bg.png')}}" class="head-img" id="head-img">
			<div class="info-box " id="info-box">
								<img src="{{ asset('home3/image/5.jpg')}}" class="user-img">
				<div class="uinfo-box">
					<p class="icon greet" id="greet">下午好</p>
					<div class="u-name">
						<span class="left user-name" >{{$v->account}}</span>
						<span class="left icon icon-mark"></span>
						<div class="u-grade-icon grade-level15" id="grade-btn" data-stat-role="ck">
							<div class="view-grade-box" id="view-grade-box" style="display: none;">
								<div class="rect"></div>
								<p class="view-grade-title">
									<span>我的优酷等级</span>
									<span class="view-grade-span-r">专属礼包，<a target="_blank" href="http://lv.youku.com/page/grade/task" data-stat-role="ck">立即领取&gt;</a> </span>
								</p>
								<div class="grade-level-box">
									<div class="progress-bar">
										<a target="_blank" href="http://lv.youku.com/page/grade/task" class="bar-active" id="today-score" style="width: 148px;">8.6小时</a>
										<a target="_blank" href="http://lv.youku.com/page/grade/task" class="grade-info-icon grade-time grade-time-left grade-time-active" id="grade-score">107.5小时</a>
										<a target="_blank" href="http://lv.youku.com/page/grade/task" class="grade-info-icon grade-time grade-time-right grade-time-dis" id="upgrade-score">122.7小时</a>
									</div>
									<span class="grade-info-icon grade-level grade-level-left grade-level-active" id="grade-level">15</span>
									<span class="grade-info-icon grade-level grade-level-right grade-level-dis" id="up-grade-level">16</span>
								</div>
							</div>
						</div>
						<a href="https://id.youku.com/bindMobileView.htm" class="icon mobile-icon active-mobile-icon" target="_blank" data-stat-role="ck"></a>
					</div>
												<div class="vip-info-box">
						<a class="vip-buy-btn" href="http://vip.youku.com/" target="_blank">开通会员</a>
									</div>
					
											<div class="zpd-info-box zpd-info-box-no" style="display: block;">	<a class="zpd-text" href="http://user.youku.com/page/usc/myzpd" target="_blank">开通频道会员</a></div>
									</div>
							</div>
							@endforeach
		</div>
	</div>
	<div class="head-menu">
		<div class="menu-box">
			<ul class="menu-ul">
				<li class="active"><a href="javaScript:;" onclick="window.location.reload()" data-stat-role="ck">个人中心</a></li>
				<li><a href="http://creation.youku.com/" target="_blank" data-stat-role="ck">创作中心</a></li>
				<li><a href="http://vip.youku.com/?c=account" target="_blank" data-stat-role="ck">我的会员</a></li>
				<li><a href="http://msg.youku.com/page/msg/index" target="_blank" data-stat-role="ck">我的消息</a></li>
				<li><a href="http://cvip.youku.com/page/index" target="_blank" data-stat-role="ck">付费专区</a></li>
				<li><a href="http://user.youku.com/page/setting/base_profile" target="_blank" data-stat-role="ck">账户设置</a></li>
			</ul>
			<a target="_blank" href="http://i.youku.com/u/UMTc2NDQ5NDUyNA==" class="my-channel" data-stat-role="ck">
				<span class="icon my-channel-icon"></span>我的自频道
			</a>
		</div>	
	</div>
</div>	
<article>
	<div class="content-container">
		<div class="content-box">
			<div class="content-left">
				<div class="left-menu-box">
					<a href="http://newvideos.youku.com/u/videos" target="_blank" class="right-border bottom-border" data-stat-role="ck">
						<span class="icon vedio"></span>
						<span>我的视频</span>
					</a>
					<a href="http://playlists.youku.com/" target="_blank" class="bottom-border" data-stat-role="ck">
						<span class="icon album"></span>
						<span>我的播单</span>
					</a>
					<a href="http://ding.youku.com/u/subscribeUpdate" target="_blank" class="right-border" data-stat-role="ck">
						<span class="icon subscribe"></span>
						<span>我的订阅</span>
					</a>
					<a href="http://faxian.youku.com/favorite" target="_blank" data-stat-role="ck">
						<span class="icon collect"></span>
						<span>我的收藏</span>
					</a>
				</div>

				<div class="hype-box orders-box">
					<a target="_blank" href="http://vip.youku.com/vips/myAccOrderLists.html" data-stat-role="ck">
						<span class="icon orders-icon"></span>
						<span class="hype-name">
							我的订单
						</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
				<div class="myzpd-box">
					<a target="_blank" href="http://user.youku.com/page/usc/myzpd" data-stat-role="ck">
						<span class="icon myzpd-icon"></span>
						<span class="myzpd-name">
							我的频道会员
						</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
				
				<div class="history-box">
					<div class="content-title history-tilte">
						<a href="http://faxian.youku.com/watch_record" target="_blank" data-stat-role="ck">
							<span class="icon his-icon"></span>
							<span class="title-text">我的历史记录</span>
							<span class="icon arrow-right"></span>
						</a>
						<a href="http://svip.youku.com/portal" target="_blank" class="a-more-ipad" data-role="record">用APP查看更多</a>
					</div>
					<div class="his-content" id="his-content"><p style="text-align:center;width:100%">服务器开小差，请稍后重试</p></div>
				</div>
				<div class="grade-box" id="grade-box">
					<div class="content-title grade-title">
						<span class="icon grade-icon"></span>
						<span class="title-text">
														我的lv15特权福利
													</span>
						<a target="_blank" href="http://lv.youku.com/page/grade/task" data-stat-role="ck">更多</a>
					</div>
					<div class="grade-container">
						<div class="grade-wrap" id="grade-wrap"><ul class="gift-ul"><li data-url="https://lv.youku.com/page/grade/task" id="10180"><img src="{{ asset('home3/image/06060D0158F8AAD9AD9E370396622C36')}}" alt=""><div class="ex-box"><div class="ex-bg"></div><span>汉堡王草莓新地买一送一</span><a href="javascript:void(0);" class="exchange" data-id="10180">领取</a></div></li><li data-url="https://site.wacai.com/page/3335?a_f=688_YOUKU0606_001" id="10182"><img src="{{ asset('home3/image/06060D015948C6D18B35CA158A63BDF1')}}" alt=""><div class="ex-box"><div class="ex-bg"></div><span>挖财18888理财金</span><a href="javascript:void(0);" class="exchange" data-id="10182">领取</a></div></li></ul><ul class="gift-ul"><li data-url="https://lv.youku.com/page/grade/task" id="10181"><img src="{{ asset('home3/image/06060D0158FDAA0AAD9E3203A9FA4D38')}}" alt=""><div class="ex-box"><div class="ex-bg"></div><span>汉堡王蓝莓新地买一送一</span><a href="javascript:void(0);" class="exchange" data-id="10181">领取</a></div></li></ul></div>
					</div>
					<ul class="dot" style="display: block;">
						<li class="dot-p icon cur"></li>
						<li class="dot-p icon"></li>
					</ul>
				</div>

				<div class="hype-box">
					<a target="_blank" href="http://wan.youku.com/mycenter?from=yk-index-header" data-stat-role="ck">
						<span class="icon hype-icon hype-game"></span>
						<span class="hype-name">
														我玩过的游戏
													</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
				<div class="hype-box">
					<a target="_blank" href="http://live.youku.com/?spm=a2hww.20023042.topNav.5~1~3!8~A" data-stat-role="ck">
						<span class="icon hype-icon hype-broad"></span>
						<span class="hype-name">
														我的优酷直播
							</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
				<div class="hype-box">
					<a target="_blank" href="http://v.laifeng.com/my/profile/init" data-stat-role="ck">
						<span class="icon hype-icon hype-lf"></span>
						<span class="hype-name">
														我的来疯直播
													</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
				<div class="hype-box">
					<a target="_blank" href="http://www.tudou.com/my/center/mycart.action" data-stat-role="ck">
						<span class="icon hype-icon hype-cart"></span>
						<span class="hype-name">
														我的购物车
													</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
				<div class="hype-box">
					<a target="_blank" href="http://z.youku.com/user/mySupportProjects.htm" data-stat-role="ck">
						<span class="icon hype-icon hype-fund"></span>
						<span class="hype-name">
														我的优酷众筹
													</span>
						<span class="icon arrow-right"></span>
					</a>
				</div>
			</div>
			<div class="content-right">
				<!-- <div class="channel-box">
					<div class="channel-title">
						<span class="icon title-name">我的自频道</span>
						<span class="channel-entry">进入</span>
						<span class="right-tip">
							已经有超多的小伙伴自频道玩得好
							<a href="">
								去看看
								<em class="icon arrow-right"></em>
							</a>
						</span>
					</div>
					<div class="channel-content">
						<div class="login-box">
							<img src="//static.youku.com/lvip/img/ucenter/login-tip.png">
							<p>想看看我的自频道最新动态吗？</p>
							<p>
								快来<a href="">登录</a>体验
							</p>
						</div>
					</div>
				</div> -->
				<div class="task-box">
					<div class="task-tab" id="task-tab">
						<a href="javaScript:;" class="task-tab-a cur" data-type="task">我的任务</a>
						<a href="javaScript:;" class="task-tab-a" data-type="point">积分兑换</a>

					</div>
					<div class="task-content" id="task-content">
						<ul class="task-wrap" id="task-box" style="width: 0px;"><li class="con task-con task-con-left"><img src="{{ asset('home3/image/sign1.png')}}" class="task-bind"><div class="task-desc"><p class="desc-title">签到有礼</p><p class="desc-sub-title">百万豪礼等你拿，优酷会员超值兑</p></div><a href="http://actives.youku.com/task/show/index" target="_blank" class="task-btn" data-stat-role="&#39;ck&#39;">签到</a></li></ul>
						<a href="javaScript:;" class="icon arrow-left"></a>
						<a href="javaScript:;" class="icon arrow-right"></a>
					</div>
				</div>
				<div class="vip-box">
					<p class="box-title">
						会员专享大片
						<a href="http://svip.youku.com/portal" target="_blank" class="a-more">更多</a>
						<a href="http://svip.youku.com/portal" target="_blank" class="a-more-ipad" data-role="vipvideo">用APP查看更多</a>
					</p>
					<div class="vip-list" id="vip-box">
						<ul id="vip-ul" style="width: 1760px;">
			<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000058F07C4DADBA1F83EF0314DE')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role="ck">
				<p title="318女生宿舍">318女生宿舍</p>
				<p title="高校灵异事件惊悚来袭">高校灵异事件惊悚来袭</p>
				<div class="hide">
					<span>1,175万次播放</span>
					<span>3,884次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" title="318女生宿舍" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000058E2FB3BADBC0993BB089BA3')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" target="_blank" data-stat-role="ck">
				<p title="灵界警探">灵界警探</p>
				<p title="美道姑携灵界警司降妖">美道姑携灵界警司降妖</p>
				<div class="hide">
					<span>5,194万次播放</span>
					<span>1,760次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" title="灵界警探" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjcwMzEwODMwOA==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000058F6D2A9ADBDD3864F0DBEAE')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjcwMzEwODMwOA==.html" target="_blank" data-stat-role="ck">
				<p title="盗爱时空之笨贼也疯狂">盗爱时空之笨贼也疯狂</p>
				<p title="清代冰冻人复活救美女">清代冰冻人复活救美女</p>
				<div class="hide">
					<span>788.7万次播放</span>
					<span>271次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjcwMzEwODMwOA==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjcwMzEwODMwOA==.html" title="盗爱时空之笨贼也疯狂" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjc0NzkyNTcwNA==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000059103FCBADBAC3E366089797')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjc0NzkyNTcwNA==.html" target="_blank" data-stat-role="ck">
				<p title="异能超模">异能超模</p>
				<p title="美女模特" 变脸"撩男神"="">美女模特"变脸"撩男神</p>
				<div class="hide">
					<span>997.0万次播放</span>
					<span>802次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjc0NzkyNTcwNA==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjc0NzkyNTcwNA==.html" title="异能超模" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjY0MjExMjY1Mg==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000058C9FCB2ADBDD3C42B062228')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjY0MjExMjY1Mg==.html" target="_blank" data-stat-role="ck">
				<p title="密道追踪之魔镜邪灵">密道追踪之魔镜邪灵</p>
				<p title="诡异镜像人追杀地球人">诡异镜像人追杀地球人</p>
				<div class="hide">
					<span>1,008万次播放</span>
					<span>608次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjY0MjExMjY1Mg==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjY0MjExMjY1Mg==.html" title="密道追踪之魔镜邪灵" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjc1MTc0NzMyNA==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000059140548ADBAC313210D2137')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjc1MTc0NzMyNA==.html" target="_blank" data-stat-role="ck">
				<p title="悟空前传">悟空前传</p>
				<p title="至尊玉与紫霞旷世奇恋">至尊玉与紫霞旷世奇恋</p>
				<div class="hide">
					<span>1,506万次播放</span>
					<span>1,084次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjc1MTc0NzMyNA==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjc1MTc0NzMyNA==.html" title="悟空前传" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjc4NDcxNzgzNg==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E0000592404A2ADBC09664E02E099')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjc4NDcxNzgzNg==.html" target="_blank" data-stat-role="ck">
				<p title="临界2:安魂曲">临界2:安魂曲</p>
				<p title="拯救女儿反酿致命悲剧">拯救女儿反酿致命悲剧</p>
				<div class="hide">
					<span>1,351万次播放</span>
					<span>192次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjc4NDcxNzgzNg==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjc4NDcxNzgzNg==.html" title="临界2:安魂曲" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 		<li class="con">
		<a href="http://v.youku.com/v_show/id_XMjgzMDE0NjQxNg==.html" target="_blank" data-stat-role="ck">
			<img src="{{ asset('home3/image/050E000058D4B19EADBA1FA2E007E3ED')}}">
			<i class="bg"></i>
			<!--i class="icon pre-bord"></i-->
			<i class="icon vip-free"></i>
			</a><div class="vip-desc-box"><a href="http://v.youku.com/v_show/id_XMjgzMDE0NjQxNg==.html" target="_blank" data-stat-role="ck">
				<p title="嫌疑人X的献身">嫌疑人X的献身</p>
				<p title="王凯张鲁一高智商对决">王凯张鲁一高智商对决</p>
				<div class="hide">
					<span>768.0万次播放</span>
					<span>3,043次评论</span>
				</div>
				</a><div class="wrap-btn hide"><a href="http://v.youku.com/v_show/id_XMjgzMDE0NjQxNg==.html" target="_blank" data-stat-role="ck">
					</a><a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjgzMDE0NjQxNg==.html" title="嫌疑人X的献身" target="video">立刻播放</a>
				</div>
			</div>
		</li>

 </ul>
						<a href="javascript:void(0);" class="icon vip-arrow-right arrow-right" style="display: block;"></a>
						<a href="javascript:void(0);" class="icon vip-arrow-left arrow-left"></a>
					</div>
				</div>
				<div class="hot-box">
					<p class="box-title">今日热播
						<a href="http://svip.youku.com/portal" target="_blank" class="a-more-ipad" data-role="todayhot">用APP查看更多</a>
					</p>
					<ul class="list-box" id="hot-ul">
			<li>
			<a href="http://v.youku.com/v_show/id_XMjg0OTMyNzc3Mg==.html" target="_blank">
				<img src="{{ asset('home3/image/050C0000594FDE48ADC0B05C0407B3A2')}}">
				<i class="hot-icon no no1"></i>
				<p class="desc-box" title="[花儿与少年3]江疏影秒变媒婆 撩汉神技遭嫌弃">[花儿与少年3]江疏影秒变媒婆 撩汉神技遭嫌弃</p>
				<p class="num-box">
					<span class="icon num_play">680.9万</span>
					<span class="icon num-comment">369</span>
				</p>
			</a>
		</li>
			<li>
			<a href="http://v.youku.com/v_show/id_XMjg0MTExNDMwNA==.html" target="_blank">
				<img src="{{ asset('home3/image/05100000594FD6E08B3D05125700C8A0')}}">
				<i class="hot-icon no no2"></i>
				<p class="desc-box" title="&lt;军师联盟&gt;曹丕大婚娶甄宓">&lt;军师联盟&gt;曹丕大婚娶甄宓</p>
				<p class="num-box">
					<span class="icon num_play">219.5万</span>
					<span class="icon num-comment">288</span>
				</p>
			</a>
		</li>
			<li>
			<a href="http://v.youku.com/v_show/id_XMjg0OTEzMDk0OA==.html" target="_blank">
				<img src="{{ asset('home3/image/050C0000594FD797ADC0AEC7BF0C4CB3')}}">
				<i class="hot-icon no no3"></i>
				<p class="desc-box" title="[笑声传奇]潘长江怒斥蔡明">[笑声传奇]潘长江怒斥蔡明</p>
				<p class="num-box">
					<span class="icon num_play">119.2万</span>
					<span class="icon num-comment">466</span>
				</p>
			</a>
		</li>
			<li class="w1080-last">
			<a href="http://v.youku.com/v_show/id_XMjg0OTg1NzU5Ng==.html?f=50202979" target="_blank">
				<img src="{{ asset('home3/image/050C0000595068E8ADC0B05E86058AAC')}}">
				<i class="hot-icon no no4"></i>
				<p class="desc-box" title="哥伦比亚游船沉没现场">哥伦比亚游船沉没现场</p>
				<p class="num-box">
					<span class="icon num_play">24.8万</span>
					<span class="icon num-comment">129</span>
				</p>
			</a>
		</li>
			<li class="last">
			<a href="http://v.youku.com/v_show/id_XMjg0MjMxOTUzNg==.html" target="_blank">
				<img src="{{ asset('home3/image/05100000594FD7248B6C58E92E0997A5')}}">
				<i class="hot-icon no no5"></i>
				<p class="desc-box" title="&lt;楚乔传&gt;" 九幽台"副本开启"="">&lt;楚乔传&gt;"九幽台"副本开启</p>
				<p class="num-box">
					<span class="icon num_play">5,472万</span>
					<span class="icon num-comment">3,779</span>
				</p>
			</a>
		</li>
		
</ul>
				</div>
				<div class="reco-box">
					<p class="box-title">
						为你推荐 
						<span class="box-sub-tilte">
														小酷根据你的口味推荐滴
													</span>
						<a href="javascript:void(0);" class="box-right-title" id="rec-btn" attach_info="{&quot;session&quot;:&quot;06FOgXbJ&quot;,&quot;stime&quot;:2}">
							<i class="icon"></i>
							换一换
						</a>
						<a href="javascript:void(0);" class="box-right-title a-more-ipad" data-role="recommend" attach_info="">
							<i class="icon"></i>
							用APP查看更多
						</a>
					</p>
					<div class="" id="rec-box"><ul class="list-box"><li><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjY0MTA0MTM4MA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_343&amp;dct=null&amp;dma=5&amp;dvid=660260345&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=0&amp;algInfo=1Personal-2OnlineDmanull-1abver-2A-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/0542040858C91E366F0E5B8B07921824')}}"><p class="desc-box" title="杨迪火速“上位”有妙招 你get了吗">杨迪火速“上位”有妙招 你get了吗</p><p class="num-box"><span class="icon num_play">14.5万</span><span class="icon num-comment">20</span></p></a></li><li><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjc4MjIwNDg5Mg==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_205&amp;dct=null&amp;dma=5&amp;dvid=695551223&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=1&amp;algInfo=1Personal-2OnlineDmanull-1abver-2A-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/05420408593E4E021F8873532F02F2F6')}}"><p class="desc-box" title="马云送快递肖骁给差评">马云送快递肖骁给差评</p><p class="num-box"><span class="icon num_play">3,315万</span><span class="icon num-comment">1,101</span></p></a></li><li><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjg0MDEzNDEyMA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_989&amp;dct=null&amp;dma=5&amp;dvid=710033530&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=2&amp;algInfo=1Personal-2OnlineDmanull-1abver-2A-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/05420408594A8AFE0000011CD50E12EC')}}"><p class="desc-box" title="楚乔传卫视预告 第2版 170621">楚乔传卫视预告 第2版 170621</p><p class="num-box"><span class="icon num_play">200.0万</span><span class="icon num-comment">50</span></p></a></li><li class="w1080-last"><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjgyNzQxNzkwMA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_596&amp;dct=84&amp;dma=206&amp;dvid=706854475&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=3&amp;algInfo=1abver-2A-1dct-284-1hot-2-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/051500005949EB93ADC0B05C0A07BEA7')}}"><p class="desc-box" title="中国航空5年赶超俄罗斯？">中国航空5年赶超俄罗斯？</p><p class="num-box"><span class="icon num_play">2.8万</span><span class="icon num-comment">12</span></p></a></li><li class="last"><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjc0OTAwNzY2MA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_149&amp;dct=91&amp;dma=206&amp;dvid=687251915&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=4&amp;algInfo=1abver-2A-1dct-291-1hot-2-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/05420101590DE712ADC95B69BB17A688')}}"><p class="desc-box" title="情侣下班回家，刚走进电梯就做这种事，保安都不好意思看">情侣下班回家，刚走进电梯就做这种事，保安都不好意思看</p><p class="num-box"><span class="icon num_play">6.3万</span><span class="icon num-comment">2</span></p></a></li><li><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjgzODk5Njg2MA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_194&amp;dct=86&amp;dma=206&amp;dvid=709749215&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=5&amp;algInfo=1abver-2A-1dct-286-1hot-2-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/05100000594B119CADC0AE9751019F2B')}}"><p class="desc-box" title="辛酸！黄渤艺考视频曝光 又唱又跳惨遭评委轰下台">辛酸！黄渤艺考视频曝光 又唱又跳惨遭评委轰下台</p><p class="num-box"><span class="icon num_play">35.7万</span><span class="icon num-comment">109</span></p></a></li><li><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjgyNzg2NDIyOA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_682&amp;dct=94&amp;dma=206&amp;dvid=706966057&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=6&amp;algInfo=1abver-2A-1dct-294-1hot-2-1stime-20-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/0542010159432B58ADC95BAD441E48EA')}}"><p class="desc-box" title="二货宠物叫板逗比铲屎官!">二货宠物叫板逗比铲屎官!</p><p class="num-box"><span class="icon num_play">19.8万</span><span class="icon num-comment">115</span></p></a></li><li><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjgzNjIyMTQ4MA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_595&amp;dct=104&amp;dma=206&amp;dvid=709055370&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=7&amp;algInfo=1dct-2104-1hot-2-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/0542010159480CA0ADC95BAD453288E9')}}"><p class="desc-box" title="对面有铁男不要此装备">对面有铁男不要此装备</p><p class="num-box"><span class="icon num_play">15.2万</span><span class="icon num-comment">292</span></p></a></li><li class="w1080-last"><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjgzNzQzODYyOA==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_347&amp;dct=91&amp;dma=206&amp;dvid=709359657&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=8&amp;algInfo=1dct-291-1hot-2-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/05100000594A2C6CADC0AEA97A02A401')}}"><p class="desc-box" title="大兵冲进尸堆勇救小孩">大兵冲进尸堆勇救小孩</p><p class="num-box"><span class="icon num_play">8.4万</span><span class="icon num-comment">197</span></p></a></li><li class="last"><a href="javascript:void(0)" data-url="http://v.youku.com/v_show/id_XMjQ5NDY0MzU5Ng==.html" data-log-url="http://gm.mmstat.com/yt/ytrec.yk.rec?abver=A&amp;apt=1&amp;pg=6&amp;md=10&amp;ord=1&amp;vid=&amp;sid=&amp;rtlid=NoASOjKoc_cb35&amp;req_id=NoASOjKoc_cb35&amp;guid=1497234291811u3B&amp;uid=441123631&amp;rand=rand_487&amp;dct=86&amp;dma=206&amp;dvid=623660899&amp;version=5&amp;utdid=&amp;idfa=&amp;t=1498459748275&amp;pos=9&amp;algInfo=1dct-286-1hot-2-1ssid06FOgXbJ-1api-2F0046"><img src="{{ asset('home3/image/054201015893FF7D641DA41824C546BC')}}"><p class="desc-box" title="新建文件夹2完整版诠释脸蛋和身材哪个更重要 韩国电影">新建文件夹2完整版诠释脸蛋和身材哪个更重要 韩国电影</p><p class="num-box"><span class="icon num_play">277.4万</span><span class="icon num-comment">167</span></p></a></li></ul></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</article>
<footer>
@endsection