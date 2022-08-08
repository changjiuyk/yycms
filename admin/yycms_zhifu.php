<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a id="hqxz1" >收费设置</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
$row = $mysqli->select1(0, 1, '*', 'yycms_shoufei', '');
?>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">

<div class="layui-inline">		
				<label class="layui-form-label">是否开启</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_zf_kg" title="是" value="1" <?php if( $row['zf_kg'] == 1 ){ echo'checked="checked"' ;}?>> 
					<input type="radio" name="yycms_zf_kg" title="否" value="0" <?php if( $row['zf_kg'] == 0 ){ echo'checked="checked"' ;}?>>				
				</div>
			</div>
		<div class="layui-form-item">		
			<label class="layui-form-label">选择支付</label>
			<div class="layui-input-inline">
				<span id='typeidct23'>
				<select name='yycms_zf_pay' id='yycms_zf_pay' style='width:240px'>
<option data-url="http://pay.qiyiwl.cn/" value="1" <?php echo ($row['zf_pay']=='1' ? 'selected="selected"':'');?>>柒壹支付</option>
<option data-url="http://pay.qqlepay.cn/" value="2" <?php echo ($row['zf_pay']=='2' ? 'selected="selected"':'');?>>QQ乐支付</option>
<option data-url="http://pay.sddyun.cn/" value="3" <?php echo ($row['zf_pay']=='3' ? 'selected="selected"':'');?>>ABC云支付</option>
<option data-url="http://pay.lxypay.cn/" value="4" <?php echo ($row['zf_pay']=='4' ? 'selected="selected"':'');?>>乐讯云支付</option>
<option data-url="https://pay.v8jisu.cn/" value="5" <?php echo ($row['zf_pay']=='5' ? 'selected="selected"':'');?>>彩虹易支付</option>
<option data-url="http://pay.22sk.cn/" value="6" <?php echo ($row['zf_pay']=='6' ? 'selected="selected"':'');?>>微助易支付</option>
<option data-url="http://pay.hackwl.cn/" value="7" <?php echo ($row['zf_pay']=='7' ? 'selected="selected"':'');?>>Hack易支付</option>
<option data-url="http://api2.yy2169.com:52888/creat_order/" value="8" <?php echo ($row['zf_pay']=='8' ? 'selected="selected"':'');?>>fateqq码支付</option>
</select>
</span>
			</div>
<div class="layui-input-inline"><button type="button" onclick="hq()"  class="layui-btn layui-btn-normal">获取注册地址</button></div>				
		</div>
<div class="layui-form-item">
					<label class="layui-form-label">商户ID</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_zf_user" id="yycms_zf_user" class="layui-input" value="<?php echo $row['zf_user'];?>">
					</div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">商户秘钥</label>
					<div class="layui-input-block" id="typedir" style="width:30%;float:left;margin-left:0;">
						<input type="text" name="yycms_zf_pass" id="yycms_zf_pass" class="layui-input" value="<?php echo $row['zf_pass'];?>">
					</div>
				</div>

				

	<div class="layui-form-item">
		<div class="layui-input-block">
		    <input type="hidden" name="yycms" value="zfxg">
			<button name='xgxt1' class="layui-btn" onclick="zfxg()" >提交保存</button>
			<button type="reset" class="layui-btn layui-btn-danger">重置</button>
			<a class="layui-btn layui-btn-primary" href="javascript:;" onClick='history.go(-1);'>返回</a>
		</div>
	</div>
</form>

<div id="__tmpbody" style="display:none"></div>
<script type='text/javascript'>
function hq(){
var url = $('#yycms_zf_pay option:selected').attr("data-url");
alert(url);
	}	
</script>
<?php 
include('footer.php');
?>
</body>
</html>