<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >套餐修改</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/conn.php');
$result1 = mysql_query('select * from yycms_hytc where tc_id = '.$_GET['tcid'].'');
$row1   = mysql_fetch_array($result1);
if(isset($_POST['xgtc'])){
$sql = 'update yycms_hytc set tc_name="'.$_POST['yycms_tc_name'].'" , tc_jf="'.$_POST['yycms_tc_jf'].'" , tc_na="'.$_POST['yycms_tc_na'].'" , tc_type="'.$_POST['yycms_tc_type'].'" , tc_rmb="'.$_POST['yycms_tc_rmb'].'" where tc_id = '.$_GET['tcid'].'';
if (mysql_query($sql)) {
echo "<script>alert('修改成功!');window.location.href='yycms_hytc.php'</script>"; 
	} else {
echo "<script>alert('修改失败')</script>";
	}
}
?>
<form class="layui-form layui-form-pane layui-mt-10" action="" method="post">	
<div class="layui-form-item">
					<label class="layui-form-label">名称</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_tc_name" class="layui-input" value="<?php echo $row1['tc_name'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">人民币</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_tc_rmb" class="layui-input" value="<?php echo $row1['tc_rmb'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">积分</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_tc_jf" class="layui-input" value="<?php echo $row1['tc_jf'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">套餐</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_tc_na" class="layui-input"  value="<?php echo $row1['tc_na'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">天数</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_tc_type" class="layui-input" value="<?php echo $row1['tc_type'];?>">
					</div>
				</div>	
						
	<div class="layui-form-item">
		<div class="layui-input-block">
			<input type="submit" name="xgtc" class="layui-btn" value="提交内容">
		</div>
	</div>
</form>
<?php 
include('footer.php');
?>
</body>
</html>