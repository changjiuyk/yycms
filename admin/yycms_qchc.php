<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >删除缓存<font color="#FF0000">请经常清理缓存-空间主机不推荐开启缓存-(宝塔定时清理 当前域名/后台文件夹名字/qlhc.php)</font></a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
$row   = $mysqli->select1(0, 1, '*', 'yycms_shoufei', '');
?>
<div class="layui-form-item">
<div class="layui-inline">		
<div class="layui-input-inline"><button type="button" onclick="qxhc('../cache/index/<?php echo $_SERVER['HTTP_HOST'];?>.html')"  class="layui-btn layui-btn-normal">清理首页缓存</button></div>
<div class="layui-input-inline"><button type="button" onclick="qxhc('../cache/yingshi')"  class="layui-btn layui-btn-normal">清理列表缓存</button></div>	
<div class="layui-input-inline"><button type="button" onclick="qxhc('../cache/bofang')"  class="layui-btn layui-btn-normal">清理播放缓存</button></div>
<div class="layui-input-inline"><button type="button" onclick="qxhc('../cache/bofang')"  class="layui-btn layui-btn-normal">清理预告缓存</button></div>
<div class="layui-input-inline"><button type="button" onclick="qxhc('../cache/cnxh')"  class="layui-btn layui-btn-normal">清理猜你喜欢缓存</button></div>	
<div class="layui-input-inline"><button type="button" onclick="qxhc('../cache/mj')"  class="layui-btn layui-btn-normal">清理美剧列表缓存</button></div>
<div class="layui-input-inline"><a  href="qlhc.php"  class="layui-btn layui-btn-normal">清理所有缓存</a></div>		
</div>
</div>
<div id="__tmpbody" style="display:none"></div>
<?php 
include('footer.php');
?>
</body>
</html>