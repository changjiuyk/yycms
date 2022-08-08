<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >收费设置</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
$row = $mysqli->select1(0, 1, '*', 'yycms_shoufei', 'where sf_id= 1');
?>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">

<div class="layui-form-item">
					<label class="layui-form-label">超会赠送:天</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_sf_hyts" id="yycms_sf_hyts" class="layui-input" value="<?php echo $row['sf_hyts'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">免费次数</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_sf_cs" id="yycms_sf_cs" class="layui-input" value="<?php echo $row['sf_cs'];?>">
					</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">积分比例</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_sf_bl" id="yycms_sf_bl" class="layui-input" value="<?php echo $row['sf_bl'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">邀请注册</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_sf_zc" id="yycms_sf_zc" class="layui-input" value="<?php echo $row['sf_zc'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">邀请观看</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_sf_gk" id="yycms_sf_gk" class="layui-input" value="<?php echo $row['sf_gk'];?>">
					</div>
				</div>				
<div class="layui-form-item">
					<label class="layui-form-label">卡密链接</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_sf_km" id="yycms_sf_km" class="layui-input" value="<?php echo $row['sf_km'];?>">
					</div>
				</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
		    <input type="hidden" name="yycms" value="sfsz">
			<input type="hidden" name="pingtai" value="<?php echo $_GET['pingtai'];?>">
			<button name='xgxt1' class="layui-btn" onclick="sfsz()" >提交保存</button>
			<button type="reset" class="layui-btn layui-btn-danger">重置</button>
			<a class="layui-btn layui-btn-primary" href="javascript:;" onClick='history.go(-1);'>返回</a>
		</div>
	</div>
</form>
<div id="__tmpbody" style="display:none"></div>
<?php 
include('footer.php');
?>
</body>
</html>