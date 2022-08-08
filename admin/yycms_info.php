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
	  <a id="hqxz1" >系统设置</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<form id="form1" enctype="multipart/form-data" method="post" class="layui-form layui-form-pane layui-mt-10">

	<div class="layui-form-item">
			<div class="layui-inline">		
				<label class="layui-form-label">网站名称</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_name" id="yycms_a_name" value="<?php echo $gametype['a_name'];?>" class="layui-input">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">优化标题</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_bt" id="yycms_a_bt" value="<?php echo $gametype['a_bt'];?>" class="layui-input">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">网站域名</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_url" id="yycms_a_url" value="<?php echo $gametype['a_url'];?>" class="layui-input">
				</div>
			</div>
	</div>
	<div class="layui-form-item">
			<div class="layui-inline">		
				<label class="layui-form-label">关键字</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_keywords" id="yycms_a_keywords" value="<?php echo $gametype['a_keywords'];?>" class="layui-input">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">关键描述</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_description" id="yycms_a_description" value="<?php echo $gametype['a_description'];?>" class="layui-input">
				</div>
			</div>
		<div class="layui-inline">		
			<label class="layui-form-label">选择模板</label>
			<div class="layui-input-inline">
				<span id='typeidct'>
				<select name='yycms_a_mb' id='yycms_a_mb' style='width:240px'>
<option value="<?php echo $gametype['a_mb'];?>" ><?php echo $gametype['a_mb'];?></option>
<?php
$file = file("name.txt");
foreach($file as $key =>$value){
echo '<option value="'.$value.'">﻿'.$value.'</option>';
}
?>
</select>
</span>
			</div>
		</div>

	</div>
	<div class="layui-form-item">
			<div class="layui-inline">		
				<label class="layui-form-label">播放器时间</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_bfqgg" id="yycms_a_bfqgg" value="<?php echo $gametype['a_bfqgg'];?>" class="layui-input">
				</div>
			</div>
			<div class="layui-inline">		
				<label class="layui-form-label">默认播放器</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_mrjx" id="yycms_a_mrjx" value="<?php echo $gametype['a_mrjx'];?>" class="layui-input">
				</div>
			</div>
		<div class="layui-inline">		
				<label class="layui-form-label">网站logo</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_logo" id="yycms_a_logo" value="<?php echo $gametype['a_logo'];?>" class="layui-input">
				</div>
				<div class="layui-input-inline"><button type="button" id="logo" class="layui-btn layui-btn-normal">选择</button></div>				
			</div>

	</div>
	<div class="layui-form-item">
	<div class="layui-inline">		
				<label class="layui-form-label">网站缓存</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_hckg" id="yycms_a_hckg" title="是" value="1" <?php if( $gametype['a_hckg'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_hckg" id="yycms_a_hckg" title="否" value="0" <?php if( $gametype['a_hckg'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>
	<div class="layui-inline">		
				<label class="layui-form-label">防红开关</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_fhkg" id="yycms_a_fhkg" title="是" value="1" <?php if( $gametype['a_fhkg'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_fhkg" id="yycms_a_fhkg" title="否" value="0" <?php if( $gametype['a_fhkg'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>		
		<div class="layui-inline">		
				<label class="layui-form-label">加载图</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_jzt" id="yycms_a_jzt" value="<?php echo $gametype['a_jzt'];?>" class="layui-input">
				</div>
				<div class="layui-input-inline"><button type="button" id="jzt" class="layui-btn layui-btn-normal">选择</button></div>
			</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-inline">		
			<label class="layui-form-label">缓存时间</label>
			<div class="layui-input-inline">
			<input type="text" name="yycms_a_hcsj" id="yycms_a_hcsj" value="<?php echo $gametype['a_hcsj'];?>" placeholder="数值表示小时" class="layui-input">
				</div>
			</div>
           <div class="layui-inline">		
				<label class="layui-form-label">底部导航</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_dbdh" id="yycms_a_dbdh" title="开" value="1" <?php if( $gametype['a_dbdh'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_dbdh" id="yycms_a_dbdh" title="关" value="0" <?php if( $gametype['a_dbdh'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>
            <div class="layui-inline">		
				<label class="layui-form-label">电影轮播</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_dylb" id="yycms_a_dylb" title="开" value="1" <?php if( $gametype['a_dylb'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_dylb" id="yycms_a_dylb" title="关" value="0" <?php if( $gametype['a_dylb'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>
	</div>
	<div class="layui-form-item">	
		<div class="layui-inline">		
				<label class="layui-form-label">打赏二维码</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_dst" id="yycms_a_dst" value="<?php echo $gametype['a_dst'];?>" class="layui-input">
				</div>
				<div class="layui-input-inline"><button type="button" id="dst" class="layui-btn layui-btn-normal">选择</button></div>
			</div>
		<div class="layui-inline">		
				<label class="layui-form-label">微信logo</label>
				<div class="layui-input-inline">
					<input type="text" name="yycms_a_wximg" id="yycms_a_wximg" value="<?php echo $gametype['a_wximg'];?>" class="layui-input">
				</div>
				<div class="layui-input-inline"><button type="button" id="wximg" class="layui-btn layui-btn-normal">选择</button></div>
			</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-inline">		
				<label class="layui-form-label">收费开关</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_sfkg" id="yycms_a_sfkg" title="是" value="1" <?php if( $gametype['a_sfkg'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_sfkg" id="yycms_a_sfkg" title="否" value="0" <?php if( $gametype['a_sfkg'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>
	<div class="layui-inline">		
				<label class="layui-form-label">抢先开关</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_kg1" id="yycms_a_kg1" title="是" value="1" <?php if( $gametype['a_kg1'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_kg1" id="yycms_a_kg1" title="否" value="0" <?php if( $gametype['a_kg1'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>
<div class="layui-inline">		
				<label class="layui-form-label">公告开关</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_ggkg" id="yycms_a_ggkg" title="是" value="1" <?php if( $gametype['a_ggkg'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_ggkg" id="yycms_a_ggkg" title="否" value="0" <?php if( $gametype['a_ggkg'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
			</div>				
	</div>
		<div class="layui-form-item">
        <div class="layui-inline">	
          <label class="layui-form-label">屏蔽关键词</label>
          <div class="layui-input-inline" style="width: 510px;">
            <input type="text" name="a_gjcpb" id="a_gjcpb" required="" lay-verify="required" placeholder="屏蔽留言的关键词" value="<?php echo $gametype['a_gjcpb'];?>" autocomplete="off" class="layui-input">
          </div>
		  </div>
    <div class="layui-inline">		
				<label class="layui-form-label">关键词替换</label>
				<div class="layui-input-inline">
					<input type="text" name="a_gjcth" id="a_gjcth" placeholder="输入替换的关键词" value="<?php echo $gametype['a_gjcth'];?>" class="layui-input">
				</div>
			</div>
	</div>
	<div class="layui-form-item">
	<div class="layui-inline">		
				<label class="layui-form-label">美剧关键词</label>
				<div class="layui-input-inline" style="width: 510px;">
					<input type="text" name="a_mjgjc" id="a_mjgjc" placeholder="屏蔽美剧栏目关键词" value="<?php echo $gametype['a_mjgjc'];?>" class="layui-input">
				</div>
			</div>
	<div class="layui-inline">		
				<label class="layui-form-label">自定义url</label>
				<div class="layui-input-inline">
					<input type="text" name="a_zdyurl" id="a_zdyurl" placeholder="自定义url" value="<?php echo $gametype['a_zdyurl'];?>" class="layui-input">
				</div>
			</div>
	</div>
	<div class="layui-form-item">
		<div class="layui-inline">		
				<label class="layui-form-label">站外跳转</label>
				<div class="layui-input-inline">
					<input type="radio" name="yycms_a_kg2" id="yycms_a_kg2" title="是" value="1" <?php if( $gametype['a_kg2'] == 1 ){ echo'checked="checked"' ;}?>> 

					<input type="radio" name="yycms_a_kg2" id="yycms_a_kg2" title="否" value="0" <?php if( $gametype['a_kg2'] == 0 ){ echo'checked="checked"' ;}?>>
				</div>
	<div class="layui-input-inline"><button type="button" onclick="hqzylm('<?php echo $yycmszyjx[0];?>')"  class="layui-btn layui-btn-normal">获取资源栏目</button></div>	
			</div>			
	</div>
<div class="layui-form-item">
					<label class="layui-form-label">
					播放器					</label>
					<div class="layui-input-block">
<textarea name='yycms_a_jxjk' row='4' id='yycms_a_jxjk' class='layui-textarea'><?php echo $gametype['a_jxjk'];?></textarea></div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">
					资源接口					</label>
					<div class="layui-input-block">
<textarea name='yycms_a_zyjk' row='4' id='yycms_a_zyjk' class='layui-textarea'><?php echo $gametype['a_zyjk'];?></textarea></div>
				</div>	
<div class="layui-form-item">
					<label class="layui-form-label">
					网站公告					</label>
					<div class="layui-input-block">
<textarea name='yycms_a_gg' row='4' id='yycms_a_gg' class='layui-textarea'><?php echo $gametype['a_gg'];?></textarea></div>
				</div>				
<div class="layui-form-item">
					<label class="layui-form-label">
					侵权视频					</label>
					<div class="layui-input-block">
<textarea name='yycms_a_qqsp' row='4' id='yycms_a_qqsp' class='layui-textarea'><?php echo $gametype['a_qqsp'];?></textarea></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">
					网站版权信息					</label>
					<div class="layui-input-block">
<textarea name='yycms_a_bq' row='4' id='yycms_a_bq' class='layui-textarea'><?php echo $gametype['a_bq'];?></textarea></div>
				</div>
<div class="layui-form-item">
					<label class="layui-form-label">
					统计代码					</label>
					<div class="layui-input-block">
<textarea name='yycms_a_tj' row='4' id='yycms_a_tj' class='layui-textarea'><?php echo htmlspecialchars($gametype['a_tj']);?></textarea>
</div>
				</div>
	

	<div class="layui-form-item">
		<div class="layui-input-block">
		    <input type="hidden" name="yycms" value="xtxg1">
			<input type="hidden" name="pintai" value="<?php echo $pingtai;?>">
			<button name='xgxt1' class="layui-btn" onclick="xgxt()" >提交保存</button>
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
			K('#jzt').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#yycms_a_jzt').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#yycms_a_jzt').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#logo').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#yycms_a_logo').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#yycms_a_logo').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#dst').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#yycms_a_dst').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#yycms_a_dst').val(url);
				editor.hideDialog();
				}
			});
		});
	});
	K('#wximg').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
			imageUrl : K('#yycms_a_wximg').val(),
			clickFn : function(url, title, width, height, border, align) {
				K('#yycms_a_wximg').val(url);
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