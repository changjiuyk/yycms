
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>yycms影视管理系统</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="publics/layui/css/layui.css" media="all" />
<link rel="stylesheet" href="publics/iconfont/iconfont.css" media="all" />
<link rel="stylesheet" href="css/admin.css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script charset="utf-8" type="text/javascript" src="/editor/kindeditor.js"></script>
<style type="text/css">
.col-lg-4 {
    width: 33.33333333%;
}
</style>
<style type="text/css">
</style>
<link href='css/tb-box.css' rel='stylesheet' type='text/css' />
</head>
<body class="childrenBody">
<?php
error_reporting(0); //雨雨CMS作者QQ:201232694
include('../sava/conn.php');
include('../sava/function.php');
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >卡密管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="col-lg-12">
							<div class="panel">
								<div class="panel-body">
									<div class="table-responsive">	
										<table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
<th>标识</th>
<th>密码</th>
								<th>卡密名称</th>
								<th>卡密天数</th>
								<th>操作</th>
												</tr>
											</thead>   
											<tbody>	
<?php
$result = mysql_query('select * from yycms_kmadd order by id asc');
while ($row = mysql_fetch_array($result)){
?>	
<tr>
<td><?php echo $row['bs'];?></td>
<td><?php echo $row['pass'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['tc'];?></td>
<td><a class="btn btn-info" href="yycms_kmlist.php?bs=<?php echo $row['bs'];?>">查看卡密</a> <a class="btn btn-danger" onclick="kmzsc('<?php echo $row['bs'];?>')">删除</a></td>
</tr>
<?php							
}
?>											

									</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
<?php 
include('footer.php');
?>
</body>
</html>