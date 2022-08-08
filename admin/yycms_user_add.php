<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >会员添加</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/conn.php');
?>
<form class="layui-form layui-form-pane layui-mt-10">
<div class="layui-form-item">		
			<label class="layui-form-label">选择套餐</label>
			<div class="layui-input-inline">
				<span id='typeidct23'>
				<select name='yycms_hy_add' id='yycms_hy_add' style='width:240px'>
<?php
$result = mysql_query('select * from yycms_hy');
while($row = mysql_fetch_array($result)){
?>
<option value="<?php echo $row['ug_id']?>"><?php echo $row['ug_name']?></option>
<?php
}
?>
</select>
</span>
			</div>	
		</div>	

<div class="layui-form-item">
					<label class="layui-form-label">用户账号</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_user_add" id="yycms_user_add" class="layui-input">
					</div>
				</div>

<div class="layui-form-item">
					<label class="layui-form-label">用户密码</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_poss_add" id="yycms_poss_add" class="layui-input">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">用户积分</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_jf_add" id="yycms_jf_add" class="layui-input"  value="0">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">会员时间</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_type_add" id="yycms_type_add" class="layui-input" value="<?php echo date('Y-m-d h:i:s', time()+ 86400*1);?>">
					</div>
				</div>	
</form>						
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn hytj">提交数据</button>
		</div>
	</div>
<?php 
include('footer.php');
?>
</body>
</html>