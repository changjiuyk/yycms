<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<?php
include('../sava/inc.php');
$row = $mysqli->select1(0, 1, '*', 'yycms_pintai', 'where id = 1');
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >广告设置 &lt;a href="网址" target="_blank"&gt;&lt;img src="图片地址" style="width:100%"&gt;&lt;/a&gt;</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">

<div class="layui-form-item">
					<label class="layui-form-label">广告位一</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg1" id="yycms_gg_gg1" class="layui-input" value='<?php echo $row['gg_gg1'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">首页抢先</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">广告位二</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg2" id="yycms_gg_gg2" class="layui-input" value='<?php echo $row['gg_gg2'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">首页电影</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">广告位三</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
                   <input type="text" name="yycms_gg_gg3" id="yycms_gg_gg3" class="layui-input" value='<?php echo $row['gg_gg3'];?>'>

					</div>
				<div class="layui-form-mid layui-word-aux">首页剧集</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">广告位四</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg4" id="yycms_gg_gg4" class="layui-input" value='<?php echo $row['gg_gg4'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">首页综艺</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">广告位五</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg5" id="yycms_gg_gg5" class="layui-input" value='<?php echo $row['gg_gg5'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">首页动漫</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">广告位六</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg6" id="yycms_gg_gg6" class="layui-input" value='<?php echo $row['gg_gg6'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">首页底部</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">广告位七</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg7" id="yycms_gg_gg7" class="layui-input" value='<?php echo $row['gg_gg7'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">电影栏顶</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">广告位八</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg8" id="yycms_gg_gg8" class="layui-input" value='<?php echo $row['gg_gg8'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">剧集栏顶</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">广告位九</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg9" id="yycms_gg_gg9" class="layui-input" value='<?php echo $row['gg_gg9'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">动漫栏顶</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">广告位十</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg10" id="yycms_gg_gg10" class="layui-input" value='<?php echo $row['gg_gg10'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">综艺栏顶</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">广告位十一</label>
					<div class="layui-input-block" id="typedir" style="width:50%;float:left;margin-left:0;">
						<input type="text" name="yycms_gg_gg11" id="yycms_gg_gg11" class="layui-input" value='<?php echo $row['gg_gg11'];?>'>
					</div>
				<div class="layui-form-mid layui-word-aux">播放器</div>
				</div>		
	<div class="layui-form-item">
		<div class="layui-input-block">
		    <input type="hidden" name="yycms" value="ggxg">
			<input type="hidden" name="pintai" value="<?php echo $_GET['pingtai'];?>">
			<button name='xgxt1' class="layui-btn" onclick="ggxg()" >提交保存</button>
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