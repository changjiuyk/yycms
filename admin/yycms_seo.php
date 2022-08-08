<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >优化设置</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
$pingtai = isset($_GET['id']) ? trim($_GET['id']) : '1';
$row = $mysqli->select1(0, 1, '*', 'yycms_pintai', 'where id= '.$pingtai);
?>
<form class="layui-form layui-form-pane layui-mt-10">
{$timu}表示影片名字/{$yycms_a_name}表示网站名称/{$jian}表示影片简介/{$lx}表示类型-此变量可前往play.php 自行设置自己喜欢的
<div class="layui-form-item">
<label class="layui-form-label">播放标题</label>
<div class="layui-input-block">
<input type='text' name='yycms_bftitle' id='yycms_bftitle' value='<?php echo $row['s_bftitle'];?>' class="layui-input">
</div>
<label class="layui-form-label">播放关键词</label>
<div class="layui-input-block">
<input type='text' name='yycms_bfkeywords' id='yycms_bfkeywords' value='<?php echo $row['s_bfkeywords'];?>' class="layui-input">
</div>
<label class="layui-form-label">播放描述</label>
<div class="layui-input-block">
<input type='text' name='yycms_bfdescription' id='yycms_bfdescription' value='<?php echo $row['s_bfdescription'];?>' class="layui-input">
</div>
</div>
</form>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<input type="hidden" name="pintai" id="pintai" value="<?php echo $pingtai;?>">
			<button name='xgxt1' class="layui-btn" onclick="xgseo()" >提交保存</button>
			<button type="reset" class="layui-btn layui-btn-danger">重置</button>
			<a class="layui-btn layui-btn-primary" href="javascript:;" onClick='history.go(-1);'>返回</a>
		</div>
	</div>
<div id="__tmpbody" style="display:none"></div>
<?php 
include('footer.php');
?>
</body>
</html>