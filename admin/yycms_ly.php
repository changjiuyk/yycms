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
	  <a id="hqxz1" >留言管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
		
<div class="col-lg-12">
							<div class="panel">
								<div class="panel-body">
									<div class="table-responsive">							
										<form id="form1" enctype="multipart/form-data" method="post" class="form-auto">
										<table class="table table-striped table-bordered bootstrap-datatable datatable">
											<thead>
												<tr>
								<th width="40" align="center">选择</th>
								<th>内容</th>
								<th>名称</th>
								<th>时间</th>
								<th>审核</th>
								<th>修改</th>
												</tr>
											</thead>   
											<tbody>								
<?php
									$sql = 'select * from yycms_ly order by ly_id desc';
									$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
									$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
							while($row= mysqli_fetch_array($result)){
							?>
							<tr>
								<td>
								<div class="checkbox-custom checkbox-default">
								<input type="checkbox" name="id[]" value="<?php echo $row['ly_id'] ?>" />
								<label for="checkboxExample2"></label>
								</div></td>
								<td><?php echo $row['ly_nr'];?></td>
								<td><?php echo $row['ly_name'];?></td>
								<td><?php echo $row['ly_time'];?></td>
								<td><?php echo ($row['ly_sh'] != '1' ? '<font color="#FF0000">未审核</font>':'已审核');?></td>
								<td><a href="yycms_lyadd.php?lyid=<?php echo $row['ly_id'] ?>" class="btn btn-info">回复</a></td>
							</tr>
							<?php } ?>
							<tr>
								<td><span class="bk-margin-5 btn btn-primary" onclick="check_all('id[]')">选</span></td>
								<td colspan="2">
									<select id="execute_method" class="btn btn-default" name="execute_method">
										<option value="">请选择操作</option>
										<option value="status">审核通过</option>
										<option value="delete">删除选中</option>
									</select>
									<input type="hidden" name="yycms" value="lysc">
									<input type="submit" id="execute" class="bk-margin-5 btn btn-primary" name="execute" onclick="lysc()" value="执行" /></td>
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