<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >回复留言</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
$row1 = $mysqli->select1(0, 1, '*', 'yycms_ly', 'where ly_id = '.$_GET['lyid'].'');
if(isset($_POST['hfly'])){
$sql = $mysqli->update('yycms_ly', 'ly_hf="'.$_POST['yycms_ly_hf'].'" where ly_id = '.$_GET['lyid'].'');
if (!!$sql) {
echo "<script>alert('回复成功!');window.location.href='yycms_ly.php'</script>"; 
	} else {
echo "<script>alert('回复失败')</script>";
	}
}
?>
<form class="layui-form layui-form-pane layui-mt-10" action="" method="post">	

<div class="layui-form-item">
					<label class="layui-form-label">留言内容</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<textarea name='yycms_ly_nr' row='4' class='layui-textarea'><?php echo $row1['ly_nr'];?></textarea>
					</div>
				</div>

<div class="layui-form-item">
					<label class="layui-form-label">回复留言</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<textarea name='yycms_ly_hf' row='4' class='layui-textarea'><?php echo $row1['ly_hf'];?></textarea>
					</div>
				</div>
					
	<div class="layui-form-item">
		<div class="layui-input-block">
			<input type="submit" name="hfly" class="layui-btn" value="提交回复">
		</div>
	</div>
</form>		
<?php 
include('footer.php');
?>
</body>
</html>