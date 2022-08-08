<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >推送API</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/conn.php');
$result = mysql_query('select * from yycms_pintai where id = 1');
$row   = mysql_fetch_array($result);
if(isset($_POST['tjbd'])){
$sql = 'update yycms_pintai set a_baidu="'.$_POST['yycms_a_baidu'].'" , a_xzh="'.$_POST['yycms_a_xzh'].'" where id = 1';
if (mysql_query($sql)) {
unlink('../sava/1.txt');
echo "<script>alert('提交成功!');window.location.href='yycms_sptj.php'</script>"; 
	} else {
echo "<script>alert('提交失败')</script>";
	}
}
?>
<form class="layui-form layui-form-pane layui-mt-10" action="" method="post">	
<div class="layui-form-item">
					<label class="layui-form-label">百度秘钥</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_a_baidu" class="layui-input" value="<?php echo $row['a_baidu'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">熊掌号秘钥</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_a_xzh" class="layui-input" value="<?php echo $row['a_xzh'];?>">
					</div>
				</div>	
	<div class="layui-form-item">
		<div class="layui-input-block">
			<input type="submit" name="tjbd" class="layui-btn" value="提交信息">
		</div>
	</div>
</form>	
<?php 
include('footer.php');
?>
</body>
</html>