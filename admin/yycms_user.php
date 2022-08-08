<?php
require_once('../sava/conn.php');
$mysqli=mysqli_connect(DATA_HOST,DATA_USERNAME,DATA_PASSWORD,DATA_NAME);
mysqli_query($mysqli,"set names utf-8");
require_once('../sava/function.php');
include('head.php');
?>
<link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
</head>
<body class="childrenBody">
<script type="text/javascript">
	$(function(){
		//频道转移验证
		$('#shift').click(function(){
			if ($('#shift_target').val() == ''){
				alert('请选择要转移到的频道！');
				return false;
			};
			if ($('input[name="id[]"]').val() = ''){
				alert('请至少选择一项！');
				return false;
			};
		});
		//搜索验证
		$('#search').click(function(){
			if ($('#key').val() == ''){
				alert('请输入要查找的关键字');
				return false;
			};
		});
	});
	function check_all(cname) {
	$('input[name="'+cname+'"]:checkbox').each(function(){
		this.checked = !this.checked;
	});
}
</script>

<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >会员管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
		
<div class="col-lg-12">
							<div class="panel">
								
								<div class="panel-body">
									<div class="table-responsive">
<form method="get" class="form-auto oh mb10" >
						<div  style="float:right;margin-bottom:10px; width:50%">
						<div class="input-group">
													<input type="text" name="key" id="key" class="form-control" value="" placeholder="按名称查找" />
													<span class="input-group-btn">
													<button type="submit" id="search" class="btn btn-success" name="search">搜</button>
													</span>
												</div>

						</div>
<div class="fl">
<a class="bk-margin-5 btn btn-primary" href="yycms_user_add.php"><span class="icon-plus-square">添加会员</span></a>
						</div>
					</form>									
										<form id="form1" enctype="multipart/form-data" method="post" class="form-auto">
										<table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
													<th width="40" align="center">选择</th>
								<th>名称</th>
								<th>会员组</th>
								<th>状态</th>
								<th>最后登录</th>
								<th>登录IP</th>
								<th>修改</th>
												</tr>
											</thead>   
											<tbody>								
<?php
									$sql = 'select * from yycms_user order by b_id desc';
									$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
									$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
				
							if (isset($_GET['key'])) {
								$sql = 'select * from yycms_user where b_user like "%'.$_GET['key'].'%" order by b_id desc';
								$pager = page_handle('page',20,mysqli_num_rows(mysql_query($mysqli,$sql)));
								$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
							}
							while($row= mysqli_fetch_array($result)){
							?>
							<tr>
								<td>
								<div class="checkbox-custom checkbox-default">
								<input type="checkbox" name="id[]" value="<?php echo $row['b_id'] ?>" />
								<label for="checkboxExample2"></label>
								</div></td>
								<td><?php echo $row['b_user'] ?></td>
								<td><?php echo get_usergroup_name($row['b_hy'],$mysqli)?></td>
								<td>
<?php
									echo ($row['b_zt'] == 1 ? '<span class="badge bg-main">启用</span> ':'');
									echo ($row['b_zt'] == 0 ? '<span class="badge bg-dot">禁用</span> ':'');
									
									?>
								</td>
								<td>
<?php echo $row['b_end'] ?>
								</td>
								<td><?php echo $row['b_ip'] ?></td>
								<td><a class="btn btn-info" href="yycms_user_edit.php?id=<?php echo $row['b_id']?>">修改</a></td>
							</tr>
							<?php } ?>
							<tr>
								<td><span class="bk-margin-5 btn btn-primary" onclick="check_all('id[]')">选</span></td>
								<td colspan="2">
									<select id="execute_method" class="btn btn-default" name="execute_method">
										<option value="">请选择操作</option>
										<option value="status">启用</option>
										<option value="status1">禁用</option>
										<option value="delete">删除选中</option>
									</select>
									<input type="hidden" name="yycms" value="hyzxxg">
									<input type="submit" id="execute" class="bk-margin-5 btn btn-primary" name="execute" onclick="hyzxxg()" value="执行" /></td>
								<td colspan="4">

								</td>
							</tr>
											</tbody>
										</table>
										</form>
										<div id="page">
		<div class="layui-box layui-laypage layui-laypage-default">
			<div class="pagelistbox">
			<?php echo page_show($pager[2],$pager[3],$pager[4],2);?>
		</div>
		</div>
	</div>
									</div>
								</div>
							</div>
						</div>
<?php 
include('footer.php');
?>
</body>
</html>