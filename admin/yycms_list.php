<?php 
require_once('../sava/conn.php');
$mysqli=mysqli_connect(DATA_HOST,DATA_USERNAME,DATA_PASSWORD,DATA_NAME);
mysqli_query($mysqli,"set names utf-8");
require_once('../sava/function.php');
include('head.php');
?>
<style type="text/css">
.shortselect{  
    background:#fafdfe;  
    height:40px;  
    width:120px;  
    line-height:28px;  
    border:1px solid #e6e6e6;  
    -moz-border-radius:2px;  
    -webkit-border-radius:2px;  
    border-radius:2px;  
}
.yycms {
padding: .2em .6em .3em;
}
.yycms-baidu {
    background: #ff0000;
    color: white;
}
</style>
</head>
<body class="childrenBody">
<script type="text/javascript">
	function check_all(cname) {
	$('input[name="'+cname+'"]:checkbox').each(function(){
		this.checked = !this.checked;
	});
}
</script>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a href="index_body.php">视频管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-mt-10">
<form name='form3' method='get' class="layui-form-pane" style="float:right;">

		<div class="layui-form-item">
			<div class="layui-input-inline">
				<select class="shortselect" onchange="location.href='yycms_list.php?cid='+this.options[this.selectedIndex].value;">
				<option value="0">全部</option>
						<?php
								echo channel_select_list(0,0,$_GET['cid'],0,$mysqli);
								if(isset($_GET['key'])){
									echo '<option selected="selected" >搜索结果</option>';
								}
								?>		
				</select>
			</div>
			<label class="layui-form-label">关键字</label>
			<div class="layui-input-inline">
				<input type="text" name='key' value='' placeholder="标题" autocomplete="off" class="layui-input">
			</div>
			<div class="layui-input-inline" style="width:80px">
				<button class="layui-btn" type="submit"><i class="layui-icon">&#xe615;</i></button>
			</div>
		</div>
	</form>

</div>
<div class="sxym">
<div class="layui-form news_list">
	<table class="layui-table">
		<colgroup>
			<col width="5%">
			<col width="5%">
			<col width="20%">
			<col width="20%">
			<col width="10%">

			<col width="15%">
		</colgroup>
		<thead>
			<tr>
				<th>选择</th>
				<th>ID</th>
				<th >文章标题</th>
				<th>所属栏目</th>
				<th>积分</th>
				<th>操作</th>
			</tr> 
		</thead>
		<form id="spplsc" enctype="multipart/form-data" method="post" class="form-auto">
		<tbody class="news_content">
		<?php
							if ($_GET['cid']>'0') {
									$sql = 'select * from yycms_vod where b_fl ="'.$_GET['cid'].'" order by b_id desc';
									$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
									$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
								}else{
									$sql = 'select * from yycms_vod order by b_id desc';
									$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
									$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
								}
							if (isset($_GET['key'])) {
								$sql = 'select * from yycms_vod where b_name like "%'.$_GET['key'].'%" order by b_id desc';
								$pager = page_handle('page',20,mysqli_num_rows(mysqli_query($mysqli,$sql)));
								$result = mysqli_query($mysqli,$sql.' limit '.$pager[0].','.$pager[1].'');
							}
							while($row= mysqli_fetch_assoc($result)){
							?>
						
				<tr>
<td><input type="checkbox" name="id[]" value="<?php echo $row['b_id']; ?>" lay-ignore></td>				
				<td><?php echo $row['b_id']; ?></td>
				<td align="left"><?php echo $row['b_name']; ?><?php echo ($row['b_baidu'] != '' ? '<span class="yycms yycms-baidu">百</span>':'');?></td>
				<td><?php echo get_channel_name($row['b_fl'],$mysqli) ?></a></td>
				<td><?php echo $row['b_jf']; ?></td>
				<td>
				<a class="layui-btn layui-btn-mini" href="yycms_list_edit.php?id=<?php echo $row['b_id']; ?>"><i class="iconfont icon-edit"></i> 编辑</a>
				<a class="layui-btn layui-btn-primary layui-btn-mini" onclick="qxhcc('<?php echo $row['b_id']?>')"><i class="layui-icon">&#xe609;</i> 推送</a>
				</td>
			</tr>
			
<?php } ?>
						
			<tr>
<td align="left" colspan="10" style="padding-left:0;">
	&nbsp;
<a onclick="check_all('id[]')" class="layui-btn layui-btn-small">全选</a>
<div class="layui-input-inline">
		<select id="execute_method" class="btn btn-default" name="execute_method">
		<option value="">请选择操作</option>
		<option value="delete">删除选中</option>
		</select>
		</div>	
		<input type="hidden" name="yycms" value="spplsc">	
		<button class="layui-btn" onclick="spplsc()">提交</button>	
</td>
</tr>
		</tbody>
</form>		
	</table>
	<div id="page">
		<div class="layui-box layui-laypage layui-laypage-default">
			<div class="pagelistbox">
<?php echo page_show($pager[2],$pager[3],$pager[4],2);?>
</div>

		</div>
	</div>
</div>
</div>
<?php 
include('footer.php');
?>
<script type='text/javascript'>
function qxhcc(id){
		$.ajax({ 
			type: "GET",  
			url: "tjbd.php", 
			data:{"id":id},
			success: function(msg){
			$(".sxym").load(location.href+" .sxym");
			alert('推送到百度成功');
			}
		});
}
 function mbar(sobj) {
                    var docurl =sobj.options[sobj.selectedIndex].value;
                    if (docurl != "") {
                       open(docurl,'_blank');
                       sobj.selectedIndex=0;
                       sobj.blur();
                    }
                    }
</script>
</body>
</html>