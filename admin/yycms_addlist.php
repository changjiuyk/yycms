<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<?php
include('../sava/inc.php');
error_reporting(0); //雨雨CMS作者QQ:201232694
if (isset($_GET['id'])){
$id=$_GET['id'];
$zy=$_GET['zd'];
switch($zy){
    case '0';
	     $zd= $yycmszyjx[0].'?ac=videolist';
         break;
    case '1';
     	 $zd= $yycmszyjx[1].'?ac=videolist';
         break;
    case '2';
    	 $zd= $yycmszyjx[2].'?ac=videolist';
         break;
	case '3';
    	 $zd= $yycmszyjx[3].'?ac=videolist';
         break;
	case '4';
    	 $zd= $yycmszyjx[4].'?ac=videolist';
         break;
	case '5';
    	 $zd= $yycmszyjx[5].'?ac=videolist';
         break;
	case '6';
    	 $zd= $yycmszyjx[6].'?ac=videolist';
         break;
         default ;
         $zd= $yycmszyjx[0].'?ac=videolist';
         break;
}
$postObj = simplexml_load_string(qwget($zd.'&ids='.$id),'SimpleXMLElement',LIBXML_NOCDATA);
$data=$postObj->list->video;
$jsonStr = json_encode($data);
$qwpla = json_decode($jsonStr,true);
$suArr1 = explode("#",$qwpla['dl']['dd']);
$i=0;
foreach($suArr1 as $k=>$v){
$qwurl = explode("$",$v);
if($i<(count($suArr1)-1)){
$url1.=''.$qwurl[0].'$'.$qwurl[1]."\r\n";
$i ++;}
$url2=''.$qwurl[0].'$'.$qwurl[1];
}
$url=$url1.$url2;
}
?>
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >视频添加</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<form id="sptj" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">
<div class="layui-form-item">
					<label class="layui-form-label">视频名称</label>
					<div class="layui-input-block">
						<input type="text" name="yycms_b_name" required="" lay-verify="required" class="layui-input" value="<?php echo $qwpla['name'];?>">
					</div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">视频图片</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_b_tp" id="yycms_b_tp" class="layui-input" value="<?php echo $qwpla['pic'];?>">
					</div>
					<div class="layui-input-inline"><button type="button" id="logo" class="layui-btn layui-btn-normal">选择</button></div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">主演</label>
					<div class="layui-input-block">
						<input type="text" name="yycms_b_zy" required="" lay-verify="required" class="layui-input" value="<?php echo '主演:'.mb_substr($qwpla['actor'] ,0,20,'utf-8').'...';?>">
					</div>
				</div>
	<div class="layui-form-item">
			<div class="layui-inline">		
				<label class="layui-form-label">积分</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_b_jf" value="0" class="layui-input">
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
<select name='yycms_b_fl' id='yycms_b_fl' style='width:240px'>
<option value='0'>请选择栏目...</option>
<?php 
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_vod_class', 'order by c_id desc');
foreach ($vodqxk as $row) {
$cid = $row['c_id'] == $_GET['cid'].$row['b_fl'] ? 'selected="selected"' : '';
echo '<option value="' . $row['c_id'] . '" ' .$cid . '>' . $row['c_name'] . '</option>';
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
			<option value="0">全部</option>
<?php
$result = $mysqli->select1(0, 4, '*', 'yycms_hy', 'order by ug_id desc');
foreach ($result as $row1) {
						?>
						<option value="<?php echo $row1['ug_id']?>"><?php echo $row1['ug_name']?></option>
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
					<input type="radio" name="yycms_b_tj" title="是" value="1"> 
					<input type="radio" name="yycms_b_tj" title="否" value="0" checked="checked">				
				</div>
			</div>
</div>	
<div class="layui-form-item">
					<label class="layui-form-label">
					播放地址					</label>
					<div class="layui-input-block">
<textarea name='yycms_b_url' row='4' class='layui-textarea'><?php echo $url;?></textarea></div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">
					视频简介					</label>
					<div class="layui-input-block">
<textarea name='yycms_b_jj' row='4' class='layui-textarea'><?php echo strip_tags($qwpla['des']);?></textarea></div>
				</div>	
	<div class="layui-form-item">
		<div class="layui-input-block">
		<input type="hidden" name="yycms" value="sptj">
			<button class="layui-btn"  onclick="sptj()">提交保存</button>
			<button type="reset" class="layui-btn layui-btn-danger">重置</button>
			<a class="layui-btn layui-btn-primary" href="javascript:;" onClick='history.go(-1);'>返回</a>
		</div>
	</div>
</form>

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