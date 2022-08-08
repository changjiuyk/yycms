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
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >订单管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<style type="text/css">
.shortselect {
    background: #fafdfe;
    height: 40px;
    width: 120px;
    line-height: 28px;
    border: 1px solid #e6e6e6;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
}		
</style>
<div class="col-lg-12">
							<div class="panel">
								<div class="panel-body">
									<div class="table-responsive">								
                <select class="shortselect" onchange="location.href='yycms_dd.php?cid='+this.options[this.selectedIndex].value;">
				<option value="">全部</option>
<?php
								echo channel_select_list1(0,0,$_GET['cid'],0,$mysqli);
								if(isset($_GET['key'])){
									echo '<option selected="selected" >搜索结果</option>';
								}
								?>			
				</select>
									
								<form id="form1" enctype="multipart/form-data" method="post" class="form-auto">
								<table class="table table-striped table-bordered bootstrap-datatable datatable">
								<thead>
								<tr>
								<th>订单号</th>
								<th>账号</th>
								<th>金额</th>
								<th>时间</th>
								<th>状态</th>
												</tr>
											</thead>   
											<tbody>								
<?php
							if ($_GET['cid']>'0'){								
								$sql = 'select * from yycms_user_pay where p_lx = 0 and p_pingtai in ('.$_GET['cid'].') order by p_id desc';
								$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
								$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
								}else{
								$sql = 'select * from yycms_user_pay where p_lx = 0 order by p_id desc';
							    $pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
							    $result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
								}
							while($row= mysqli_fetch_array($result)){
							?>
							<tr>
								<td><?php echo $row['p_dd'];?></td>
								<td><?php echo $row['p_user'];?></td>
								<td><?php echo $row['p_jf'];?></td>
								<td><?php echo $row['p_time'];?></td>
					
							<td>
							<?php
							echo ($row['p_zt'] == 1 ? '<span class="label label-warning">成功</span> ':'');
							echo ($row['p_zt'] == 0 ? '<span class="label label-danger">失败</span> ':'');
							?>
							</td>
							</tr>
							<?php } ?>
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