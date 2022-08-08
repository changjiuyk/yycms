<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >微信设置</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
$row = $mysqli->select1(0, 1, '*', 'yycms_wx', 'where wx_id = 1');
?>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">

<div class="layui-form-item">
					<label class="layui-form-label">对接域名</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_wx_url" id="yycms_wx_url" class="layui-input" value="<?php echo $row['wx_url'];?>">
					</div>
				</div>

<div class="layui-form-item">
					<label class="layui-form-label">AppId</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_wx_appid" id="yycms_wx_appid" class="layui-input" value="<?php echo $row['wx_appid'];?>">
					</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">AppSecret</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="wx_appsecret" id="wx_appsecret" class="layui-input" value="<?php echo $row['wx_appsecret'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">token值</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_wx_token" id="yycms_wx_token" class="layui-input" value="<?php echo $row['wx_token'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">关注回复</label>
					<div class="layui-input-block">
<textarea name='yycms_wx_hf' row='4' id='yycms_wx_hf' class='layui-textarea'><?php echo $row['wx_hf'];?></textarea></div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">无资源回复</label>
					<div class="layui-input-block">
<textarea name='yycms_wx_ts' row='4' id='yycms_wx_ts' class='layui-textarea'><?php echo $row['wx_ts'];?></textarea></div>
				</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
		    <input type="hidden" name="yycms" value="wxxg">
			<input type="hidden" name="pingtai" value="<?php echo $_GET['pingtai'];?>">
			<button name='xgxt1' class="layui-btn" onclick="wxxg()" >提交保存</button>
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