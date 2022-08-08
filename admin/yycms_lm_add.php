<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >视频添加</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
error_reporting(0); //雨雨CMS作者QQ:201232694
if (isset($_GET['id'])){
include('../sava/inc.php');
$row = $mysqli->select1(0, 1, '*', 'yycms_vod_class', 'where c_id = '.$_GET['id']);
}
?>

<div class="layui-form-item">
					<label class="layui-form-label">栏目名称</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
					<input type="hidden" id="yycms_lmid" value="<?php echo $_GET['id'];?>">
						<input type="text" name="yycms_lm" id="yycms_lm" class="layui-input" value="<?php echo $row['c_name'];?>" placeholder="请输入需要添加的栏目">
					</div>
<?php					
if ($_GET['id']){
echo '<div class="layui-input-inline"><button type="button" onclick="xglm()" class="layui-btn layui-btn-normal">修改</button></div>';			
}else{
echo '<div class="layui-input-inline"><button type="button" onclick="tjlm()" class="layui-btn layui-btn-normal">提交</button></div>	';
}
?>	
</div>
<div id="__tmpbody" style="display:none"></div>
<?php 
include('footer.php');
?>
</body>
</html>