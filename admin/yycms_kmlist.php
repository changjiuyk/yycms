<?php 
include('../sava/inc.php');
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
	  <a href="index_body.php">卡密管理</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<div class="layui-mt-10">
<?php
$zt=isset($_GET['zt']) ? trim($_GET['zt']) : '0';
$cid=isset($_GET['cid']) ? trim($_GET['cid']) : '0';
?>

<a class="layui-btn" href="yycms_kmdao.php?bs=<?php echo $_GET['bs'];?>">导出卡密</a>

<form name='form3' method='get' class="layui-form-pane" style="float:right;">
		<div class="layui-form-item">

		<div class="layui-input-inline">
				<select class="shortselect" onchange="location.href='yycms_kmlist.php?bs=<?php echo $_GET['bs'];?>&cid=<?php echo $cid;?>&zt='+this.options[this.selectedIndex].value;">
				<option value="">使用情况</option>
				<option value="1" >已使用</option>	
				<option value="0">未使用</option>
				</select>
			</div>
			<div class="layui-input-inline">
				<select class="shortselect" onchange="location.href='yycms_kmlist.php?bs=<?php echo $_GET['bs'];?>&zt=<?php echo $zt;?>&cid='+this.options[this.selectedIndex].value;">
				<option value="0">全部</option>
								<?php
								echo channel_hytc(0,$cid,0);
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
				<th>天数</th>
				<th>卡密</th>
				<th>状态</th>
				<th>使用者</th>
				<th>充值时间</th>
			</tr> 
		</thead>
		<form id="kmsc" enctype="multipart/form-data" method="post" class="form-auto">
		<tbody class="news_content">
		                    <?php
							if ($_GET['cid']>'0' or $_GET['zt']>'0') {								
									$sql = 'select * from yycms_km where km_bs='.$_GET['bs'].' and km_tc in ('.$_GET['cid'].') and km_zt in ('.$zt.') order by km_id desc';
									$pager = page_handle('page',20,mysql_num_rows(mysql_query($sql)));
									$result = mysql_query($sql.' limit '.$pager[0].','.$pager[1].'');
								}else{
									$sql = 'select * from yycms_km where km_bs="'.$_GET['bs'].'" order by km_id desc';
									$pager = page_handle('page',20,mysql_num_rows(mysql_query($sql)));
									$result = mysql_query($sql.' limit '.$pager[0].','.$pager[1].'');
								} 
							if (isset($_GET['key'])) {
								$sql = 'select * from yycms_km where km_name like "%'.$_GET['key'].'%" order by km_id desc';
								$pager = page_handle('page',20,mysql_num_rows(mysql_query($sql)));
								$result = mysql_query($sql.' limit '.$pager[0].','.$pager[1].'');
							}
							while($row= mysql_fetch_array($result)){
							?>
						
				<tr>
               <td><input type="checkbox" name="id[]" value="<?php echo $row['km_id']; ?>" lay-ignore></td>				
				<td ><?php echo $row['km_tc']; ?></td>
				<td align="left"><?php echo $row['km_name']; ?></a> </td>
				<td><?php
					echo ($row['km_zt'] == 1 ? '<span class="badge bg-dot">已使用</span> ':'');
					echo ($row['km_zt'] == 0 ? '<span class="badge bg-main">未使用</span> ':'');
					?></td>
				<td><?php echo $row['km_syz']; ?></td>
				<td><?php echo $row['km_time']; ?></td>
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
		<input type="hidden" name="yycms" value="kmsc">	
		<button name="xgxt1" class="layui-btn" onclick="kmsc()">提交</button>		
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
<?php 
include('footer.php');
?>
<script type='text/javascript'>
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