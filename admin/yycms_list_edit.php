<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<?php
include('../sava/inc.php');
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >视频修改</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
$row = $mysqli->select1(0, 1, '*', 'yycms_vod', 'where b_id = '.$_GET['id'].'');
?>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">

<div class="layui-form-item">
					<label class="layui-form-label">视频名称</label>
					<div class="layui-input-block">
						<input type="text" name="yycms_b_name" required="" lay-verify="required" class="layui-input" value="<?php echo $row['b_name'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">视频图片</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_b_tp" id="yycms_b_tp" class="layui-input" value="<?php echo $row['b_tp'];?>">
					</div>
					<div class="layui-input-inline"><button type="button" id="logo" class="layui-btn layui-btn-normal">选择</button></div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">主演</label>
					<div class="layui-input-block">
						<input type="text" name="yycms_b_zy" required="" lay-verify="required" class="layui-input" value="<?php echo $row['b_zy'];?>">
					</div>
				</div>
	<div class="layui-form-item">
			<div class="layui-inline">		
				<label class="layui-form-label">积分</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_b_jf" value="<?php echo $row['b_jf'];?>" class="layui-input">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">密码</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_b_pass" value="<?php echo $row['b_pass'];?>" class="layui-input">
				</div>
			</div>
<div class="layui-inline">		
			<label class="layui-form-label">分类</label>
			<div class="layui-input-inline">
				<span id='typeidct'>
				<select name='yycms_b_fl' style='width:240px'>

<option value='0'>请选择栏目...</option>
<?php 
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_vod_class', 'order by c_id desc');
foreach ($vodqxk as $row2) {
$cid = $row2['c_id'] == $row['b_fl'] ? 'selected="selected"' : '';
echo '<option value="' . $row2['c_id'] . '" ' .$cid . '>' . $row2['c_name'] . '</option>';
}
?>
</select>
</span>
			</div>
		</div>			
</div>	
<div class="layui-form-item">
<div class="layui-inline">		
			<label class="layui-form-label">会员</label>
			<div class="layui-input-inline">
				<span id='typeidct'>
				<select name='yycms_b_hy' style='width:240px'>
<option value="0" <?php	echo ($row['b_hy']== 0 ? 'selected="selected"':'');	?>>全部</option>
<?php
$result = $mysqli->select1(0, 4, '*', 'yycms_hy', '');
foreach ($result as $row1) {
?>
<option value="<?php echo $row1['ug_id']?>" <?php echo ($row['b_hy'] ==$row1['ug_id'] ? 'selected="selected"':'');?>><?php echo $row1['ug_name']?></option>
<?php
}
?>
</select>
</span>
			</div>
		</div>	
	<div class="layui-inline">		
				<label class="layui-form-label">推荐</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_b_tj" title="是" value="1" <?php if( $row['b_tj'] == 1 ){ echo'checked="checked"' ;}?>> 
					<input type="radio" name="yycms_b_tj" title="否" value="0" <?php if( $row['b_tj'] == 0 ){ echo'checked="checked"' ;}?>>					
				</div>
			</div>
</div>	
<div class="layui-form-item">
					<label class="layui-form-label">
					播放地址					</label>
					<div class="layui-input-block">
<textarea name='yycms_b_url' row='4' class='layui-textarea'><?php echo $row['b_url'];?></textarea></div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">
					视频简介					</label>
					<div class="layui-input-block">
<textarea name='yycms_b_jj' row='4' class='layui-textarea'><?php echo strip_tags($row['b_jj']);?></textarea></div>
				</div>	
	<div class="layui-form-item">
		<div class="layui-input-block">
		<input type="hidden" name="yycms" value="spxg">
		<input type="hidden" name="spid" value="<?php echo $_GET['id'];?>">
			<button name='xgxt1' class="layui-btn" onclick="spxg()" >提交保存</button>
			<button type="reset" class="layui-btn layui-btn-danger">重置</button>
			<a class="layui-btn layui-btn-primary" href="javascript:;" onClick='history.go(-1);'>返回</a>
		</div>
	</div>
</form>
<div id="__tmpbody" style="display:none"></div>
<script type='text/javascript'>
KindEditor.ready(function(K) {
	K.create('#s_copyright');
	var editor = K.editor();
	K('#logo').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#yycms_b_tp').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#yycms_b_tp').val(url);
				editor.hideDialog();
				}
			});
		});
	});
});
</script>
<?php 
include('footer.php');
?>
</body>
</html>