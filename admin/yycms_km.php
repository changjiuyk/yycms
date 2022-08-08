<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >卡密生成</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/conn.php');
?>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">
<div class="layui-form-item">		
			<label class="layui-form-label">选择套餐</label>
			<div class="layui-input-inline">
				<span id='typeidct23'>
				<select name='yycms_km_sj' id='yycms_km_sj' style='width:240px'>
<?php
$result = mysql_query('select * from yycms_hytc');
while($row = mysql_fetch_array($result)){
?>
<option value="<?php echo $row['tc_type']?>"><?php echo $row['tc_name']?></option>
<?php
}
?>
</select>
</span>
			</div>	
		</div>
<div class="layui-form-item">
					<label class="layui-form-label">代理ID</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_km_dl" id="yycms_km_dl" class="layui-input" placeholder="如果没请留空" value="">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">卡密名称</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_km_name" id="yycms_km_name" class="layui-input" value="">
					</div>
				</div>			
<div class="layui-form-item">
					<label class="layui-form-label">卡密位数</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_km_ws" id="yycms_km_ws" class="layui-input" value="">
					</div>
				</div>

<div class="layui-form-item">
					<label class="layui-form-label">卡密数量</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_km_sl" id="yycms_km_sl" class="layui-input" value="">
					</div>
				</div>

	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn sckms" onclick="sckms()">提交生成</button>
		</div>
	</div>
<script type="text/javascript">	

</script>
<?php 
include('footer.php');
?>
</body>
</html>