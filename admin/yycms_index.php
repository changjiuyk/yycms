<?php
if(!isset($_COOKIE['user_user'])){
		die('<script type="text/javascript">alert("请登陆后进入");window.location.href="index.php"</script>');
	};
	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>yycms影视管理系统</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link rel="stylesheet" href="publics/layui/css/layui.css" media="all" />
<link rel="stylesheet" href="publics/iconfont/iconfont.css" media="all" />
<link rel="stylesheet" href="css/index.css" media="all" />
</head>
<body class="main_body">
<div class="layui-layout layui-layout-admin">
	<!-- 顶部 -->
	<div class="layui-header header">
		<div class="layui-main">
			<a href="index.php" class="logo">后台管理</a>
			<!-- 显示/隐藏菜单 -->
			<a href="javascript:;" class="iconfont icon-app hideMenu"></a>
			<!-- 顶部右侧菜单 -->
			<ul class="layui-nav top_menu">
				<li class="layui-nav-item">
					<a target="main" href="http://bbs.lxh5068.com/7250.html" target="_blank"><i class="iconfont icon-eraser"></i><cite>更新日志</cite></a>
				</li>
				<li class="layui-nav-item">
					<a href="../index.html" target="_blank" class="noAddTab"><i class="iconfont icon-home"></i><cite>前台首页</cite></a>
				</li>
				<li class="layui-nav-item" mobile>
					<a onclick="httc()" class="noAddTab"><i class="layui-icon" data-icon="&#x1007;">&#x1007;</i> 退出</a>
				</li>
				<li class="layui-nav-item" pc>
					<a href="javascript:;">
						<img src="/uploadfile/user.png" class="layui-circle" width="35" height="35">
						<cite><?php echo $_COOKIE['user_user'];?></cite>
					</a>
					<dl class="layui-nav-child">
						<dd><a target="main" href="admin_user.php?id=1&dopost=edit"><i class="iconfont icon-lock"></i><cite>修改密码</cite></a></dd>
						<dd><a onclick="httc()" class="noAddTab"><i class="iconfont icon-information"></i><cite>退出</cite></a></dd>
					</dl>
				</li>
			</ul>
		</div>
	</div>
	<!-- 左侧导航 -->
	<div class="layui-side layui-bg-black">
		<div class="navBar layui-side-scroll">
			<ul class="layui-nav layui-nav-tree">
				<li class="layui-nav-item layui-this"><a target="main" href="yycms_body.php"><i class="iconfont icon-home"></i><cite>后台首页</cite></a></li>
				<li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-sitting"></i><cite>系统设置</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
					<dd><a target="main" href="yycms_info.php"><i class="iconfont icon-menu"></i><cite>平台设置</cite></a></dd>
					<dd><a target="main" href="yycms_seo.php?pingtai=1"><i class="iconfont icon-menu"></i><cite>标题优化</cite></a></dd>
					<dd><a target="main" href="yycms_shoufei.php?pingtai=1"><i class="iconfont icon-menu"></i><cite>收费设置</cite></a></dd>
					<dd><a target="main" href="yycms_zhifu.php"><i class="iconfont icon-menu"></i><cite>支付设置</cite></a></dd>
					<dd><a target="main" href="yycms_wx.php?pingtai=1"><i class="iconfont icon-menu"></i><cite>微信设置</cite></a></dd>
					<dd><a target="main" href="yycms_zxbj.php"><i class="iconfont icon-menu"></i><cite>直播设置</cite></a></dd>
				</dl>
				</li>
				<li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-computer"></i><cite>视频管理</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
				    <dd><a target="main" href="yycms_lm_add.php"><i class="iconfont icon-menu"></i><cite>添加栏目</cite></a></dd>
					<dd><a target="main" href="yycms_lm.php"><i class="iconfont icon-menu"></i><cite>视频栏目</cite></a></dd>
					<dd><a target="main" href="yycms_list.php?cid=0"><i class="iconfont icon-menu"></i><cite>视频管理</cite></a></dd>
					<dd><a target="main" href="yycms_addlist.php?cid=0"><i class="iconfont icon-menu"></i><cite>添加视频</cite></a></dd>
					<dd><a target="main" href='yycms_cjlist.php'><i class="iconfont icon-menu"></i><cite>视频采集</cite></a></dd>
					<dd><a target="main" href='yycms_sptj.php'><i class="iconfont icon-menu"></i><cite>视频推送</cite></a></dd>
					</dl>
				</li>

				<li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-app"></i><cite>广告管理</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
<dd><a target='main' href='yycms_gg.php?pingtai=1'><i class='iconfont icon-menu'></i><cite>广告栏目</cite></a><span class='label'><a target='main' href='article_add.php?channelid=1'><i class='layui-icon'>&#xe654;</i></a></span></dd>	
                </dl>
				</li>
<!-- <li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-browser"></i><cite>代理设置</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
				<!-- <dd><a target="main" href="yycms_tjdl.php"><i class="iconfont icon-menu"></i><cite>添加代理</cite></a></dd>
				<dd><a target="main" href="yycms_dluser.php"><i class="iconfont icon-menu"></i><cite>旗下代理</cite></a></dd>
				<dd><a target="main" href="yycms_wxdl.php"><i class="iconfont icon-menu"></i><cite>添加微信</cite></a></dd>
				<dd><a target="main" href="mychannel_main.php"><i class="iconfont icon-menu"></i><cite>收费设置</cite></a></dd>
					<dd><a target="main" href="mychannel_main.php"><i class="iconfont icon-menu"></i><cite>微信设置</cite></a></dd>
					<dd><a target="main" href="templets_one.php"><i class="iconfont icon-menu"></i><cite>广告设置</cite></a></dd>
				</dl>
				</li>-->				
<!-- Item 3 Strat -->
<li class='layui-nav-item'><a href='javascript:;'><i class='iconfont'>&#xe61f;</i><cite>留言管理</cite><span class='layui-nav-more'></span></a><dl class='layui-nav-child'>
<dd><a href='yycms_ly.php' target='main'><i class='iconfont'>&#xe630;</i><cite>留言管理</cite></a>
</dd></dl></li><!-- Item 3 End -->

				<li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-my"></i><cite>会员管理</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
					<dd><a target="main" href="yycms_user.php"><i class="iconfont icon-menu"></i><cite>会员管理</cite></a></dd>
					<dd><a target="main" href="yycms_km_add.php"><i class="iconfont icon-menu"></i><cite>卡密管理</cite></a></dd>
					<dd><a target="main" href="yycms_km.php"><i class="iconfont icon-menu"></i><cite>生成卡密</cite></a></dd>
					<dd><a target="main" href="yycms_hytc.php"><i class="iconfont icon-menu"></i><cite>会员套餐</cite></a></dd>

				</dl>
				</li>
				<li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-cart"></i><cite>支付订单</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
				<dd><a target="main" href="yycms_dd.php"><i class="iconfont icon-menu"></i><cite>订单查看</cite></a></dd>
				</dl>
				</li>
				<li class="layui-nav-item"><a href="javascript:;"><i class="iconfont icon-my"></i><cite>新闻幻灯</cite><span class="layui-nav-more"></span></a>
				<dl class="layui-nav-child">
					<dd><a target="main" href="yycms_news.php"><i class="iconfont icon-menu"></i><cite>新闻管理</cite></a></dd>
					<dd><a target="main" href="yycms_news_add.php"><i class="iconfont icon-menu"></i><cite>新闻添加</cite></a></dd>
					<dd><a target="main" href="slider_list.php"><i class="iconfont icon-menu"></i><cite>幻灯管理</cite></a></dd>
				</dl>
				</li>
				<li class='layui-nav-item'><a href='javascript:;'><i class='iconfont'>&#xe61f;</i><cite>辅助管理</cite><span class='layui-nav-more'></span></a><dl class='layui-nav-child'>
                <dd><a href='yycms_main.php' target='main'><i class='iconfont'>&#xe630;</i><cite>友情链接</cite></a>
				<dd><a target="main" href="yycms_qchc.php"><i class="iconfont icon-menu"></i><cite>删除缓存</cite></a></dd>
                 </dd></dl></li>
				<li class='layui-nav-item'><a href='javascript:;'><i class='iconfont'>&#xe61f;</i><cite>联盟管理</cite><span class='layui-nav-more'></span></a><dl class='layui-nav-child'>
                <dd><a href='lm_login.php' target='main'><i class='iconfont'>&#xe630;</i><cite>插件模板</cite></a>
                 </dd></dl></li>
			</ul>
		</div>
	</div>
	<!-- 右侧内容 -->
	<div class="layui-body layui-form">
		<div class="layui-tab marg0" lay-filter="bodyTab" id="top_tabs_box">
			<div class="layui-tab-content clildFrame">
				<div class="layui-tab-item layui-show">
					<iframe src="yycms_body.php" id="main" name="main"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- 底部 -->
	<div class="layui-footer footer">
		<p>Copyright 2021 &copy; YYCMS影视<a href="https://www.lxh5068.com" target="_blank">http://www.lxh5068.com</a>小辉源码分享</p>
	</div>
</div>
<!-- 移动导航 -->
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>

<script type="text/javascript" src="publics/layui/layui.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/yycms.js"></script>
</body>
</html>