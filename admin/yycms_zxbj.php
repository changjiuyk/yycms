<?php 
include('head.php');
?>

</head>
<body class="childrenBody">
<?php
error_reporting(0); //雨雨CMS作者QQ:201232694
include('../sava/inc.php');
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >系统设置</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
$cfile="../sava/zby.php"; 
//提交修改
if(isset($_POST['edit'])){
$cfilehandle=fopen($cfile,"wb"); 
flock($cfilehandle, 2);
fputs($cfilehandle,stripslashes(str_replace("/x0d/x0a", "/x0a", $_POST['copy'])));
fclose($cfilehandle); 
echo "<script language=\"JavaScript\">alert(\"修改成功\");</script>";
}
$PHP_SELF = isset($PHP_SELF) ? $PHP_SELF : null;
//修改界面 
$cfilehandle=fopen($cfile,"r"); 
$editfile=fread($cfilehandle,filesize($cfile)); 
fclose($cfilehandle); 
?>
<form action="<?php echo $PHP_SELF;?>" enctype="multipart/form-data" method="POST" class="layui-form layui-form-pane layui-mt-10">
<div class="layui-form-item">
					<label class="layui-form-label">
					在线编辑</label>
					<div class="layui-input-block">
<textarea name='copy' rows="25"  id='code' class='layui-textarea'><?php echo$editfile; ?></textarea>
</div>
				</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button type="submit" name='edit' class="layui-btn" >提交保存</button>
			<button type="reset" class="layui-btn layui-btn-danger">重置</button>
		</div>
	</div>
</form>
<div id="__tmpbody" style="display:none"></div>
<?php 
include('footer.php');
?>
</body>
</html>