<?php 
include('head.php');
?>
<link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
</head>
<body class="childrenBody">
<?php
include('../sava/conn.php');
include('../sava/function.php');
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >套餐管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
	
<div class="col-lg-12">
							<div class="panel">
								<div class="panel-body">
									<div class="table-responsive">	
<div class="fl">
<a class="bk-margin-5 btn btn-primary" href="yycms_hytc_add.php"><span class="icon-plus-square">添加套餐</span></a>
						</div>										
										<form id="form1" enctype="multipart/form-data" method="post" class="form-auto">
										<table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
								<th>名称</th>
								<th>积分</th>
								<th>套餐</th>
								<th>天数</th>
								<th>修改</th>
												</tr>
											</thead>   
											<tbody>								
<?php
							$result = mysql_query('select * from yycms_hytc order by tc_id asc');
							while($row= mysql_fetch_array($result)){
							?>
							<tr>
								<td><?php echo $row['tc_name'];?></td>
								<td><?php echo $row['tc_jf'];?></td>
								<td><?php echo $row['tc_na'];?></td>
								<td><?php echo $row['tc_type'];?></td>
								<td><a href="yycms_hytc_edit.php?tcid=<?php echo $row['tc_id'] ?>" class="btn btn-info">修改</a></td>
							</tr>
							<?php } ?>
							<tr>
							</tr>
											</tbody>
										</table>
										</form>
									</div>
								</div>
							</div>
						</div>
<?php 
include('footer.php');
?>
</body>
</html>