<?php $__env->startSection('content'); ?>
<!--sub nav-->
<!--sub nav end-->
<script src="<?php echo e(asset('home3/js/lib_5.js.下载')); ?>" id="libjsnode" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo e(asset('home3/js/ykheader_96.js.下载')); ?>"></script>

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
				<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
			</script><img src="<?php echo e(asset('home3/image/day_bg.png')); ?>" class="head-img" id="head-img">
			<div class="info-box " id="info-box">
				<img src="/uploads/<?php echo e($list->picname); ?>" class="user-img">
				<div class="uinfo-box">
					<!-- <p class="icon greet">下午好</p> -->
					<div class="u-name">
						<span class="left user-name" ><?php echo e($list->account); ?></span>
						<span class="left icon icon-mark"></span>
						<div class="u-grade-icon grade-level15" id="grade-btn" data-stat-role="ck">
							<div class="view-grade-box" id="view-grade-box" style="display: none;">
								<div class="rect"></div>
								<p class="view-grade-title">
									<!-- <span>我的优酷等级</span>
									<span class="view-grade-span-r">专属礼包，<a target="_blank" href="http://lv.youku.com/page/grade/task" data-stat-role="ck">立即领取&gt;</a> </span> -->
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
							<a class="vip-buy-btn" href="" >开通会员</a>   <!-- 新页面打开target="_blank" -->
						</div>
						<!-- <div class="zpd-info-box zpd-info-box-no" style="display: block;">	
							<a class="zpd-text" href="#">开通频道会员</a>
						</div> -->
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
	<div class="head-menu">
		<div class="menu-box">
			<ul class="menu-ul">
				<li class="active"><a href="javaScript:;" onclick="window.location.reload()" data-stat-role="ck">个人中心</a></li>
				<!-- <li><a href="http://creation.youku.com/" target="_blank" data-stat-role="ck">创作中心</a></li>
				<li><a href="http://vip.youku.com/?c=account" target="_blank" data-stat-role="ck">我的会员</a></li>
				<li><a href="http://msg.youku.com/page/msg/index" target="_blank" data-stat-role="ck">我的消息</a></li>
				<li><a href="http://cvip.youku.com/page/index" target="_blank" data-stat-role="ck">付费专区</a></li> -->
				<li><a href="<?php echo e(url('home/user/zhanghu')); ?>" target="_blank" data-stat-role="ck">账户设置</a></li>
			</ul>
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
				<div class="history-box">
					<div class="content-title history-tilte">
						<a href="http://faxian.youku.com/watch_record" target="_blank" data-stat-role="ck">
							<span class="icon his-icon"></span>
							<span class="title-text">我的历史记录</span>
							<span class="icon arrow-right"></span>
						</a>
						<a href="http://svip.youku.com/portal" target="_blank" class="a-more-ipad" data-role="record">用APP查看更多</a>
					</div>
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

			<div class="vip-box">
				<p class="box-title">
					会员专享大片
					<a href="" target="_blank" class="a-more">更多</a>
					<!-- <a href="http://svip.youku.com/portal" target="_blank" class="a-more-ipad" data-role="vipvideo">用APP查看更多</a> -->
				</p>
			<div class="vip-list" id="vip-box">
				<ul id="vip-ul" style="width: 1760px;">
					<li class="con">
					<a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role="ck">
					<img src="<?php echo e(asset('home3/image/050E000058F07C4DADBA1F83EF0314DE')); ?>">
					<i class="bg"></i>
					<!--i class="icon pre-bord"></i-->
					<i class="icon vip-free"></i></a>
					<div class="vip-desc-box">
						<a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role="ck">
						<p title="318女生宿舍">318女生宿舍</p>
						<p title="高校灵异事件惊悚来袭">高校灵异事件惊悚来袭</p>
						<div class="hide">
							<span>1,175万次播放</span>
							<span>3,884次评论</span>
						</div></a>
						<div class="wrap-btn hide">
						<a href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" target="_blank" data-stat-role="ck"></a>
						<a class="btn btn-play" href="http://v.youku.com/v_show/id_XMjcwNzM5NDU2MA==.html" title="318女生宿舍" target="video">立刻播放</a>
						</div>
					</div>
					</li>

			 		<li class="con">
					<a href="http://v.youku.com/v_show/id_XMTg3Mjc0NTU4OA==.html" target="_blank" data-stat-role="ck">
						<img src="<?php echo e(asset('home3/image/050E000058E2FB3BADBC0993BB089BA3')); ?>">
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
						<img src="<?php echo e(asset('home3/image/050E000058F6D2A9ADBDD3864F0DBEAE')); ?>">
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
						<img src="<?php echo e(asset('home3/image/050E000059103FCBADBAC3E366089797')); ?>">
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
						<img src="<?php echo e(asset('home3/image/050E000058C9FCB2ADBDD3C42B062228')); ?>">
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
						<img src="<?php echo e(asset('home3/image/050E000059140548ADBAC313210D2137')); ?>">
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
						<img src="<?php echo e(asset('home3/image/050E0000592404A2ADBC09664E02E099')); ?>">
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
						<img src="<?php echo e(asset('home3/image/050E000058D4B19EADBA1FA2E007E3ED')); ?>">
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
			</div>
		</div>
	</div>
	<div class="clear"></div>
</article>
<footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>