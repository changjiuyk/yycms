<?php
include('../sava/inc.php');
if(!isset($_COOKIE['user_name'])){
		alert_href('请登陆后进入','login.php');
	};
	?>
<!DOCTYPE html>
<head>
<title>播放记录-<?php echo $yycms_a_name;?></title>
<?php
include('../templets/yycms/head.php');
?>
</head>
<body class="yycmsys">
<?php
include('../templets/yycms/header.php');
?>
<div class="container min">
    <div class="row"> 
<?php
$row = $mysqli->select1(0, 1, '*', 'yycms_user', 'where b_user="'.$_COOKIE['user_name'].'"');
include('zx.php');
?>						
		<div class="myui-panel myui-panel-bg clearfix">
			<div class="myui-panel-box clearfix">
				<div class="myui-panel_bd clearfix">
					<div class="myui-panel_hd">
						<div class="myui-panel__head active bottom-line clearfix">								
							<h3 class="title">
								播放记录
							</h3>
							<!--<a class="more text-red" href="javascript:;" id="btnClear">清空记录</a>-->
							<a class="text-red pull-right" href="javascript:;" onclick="MyTheme.Cookie.Del('history','您确定要清除记录吗？');">[清空记录]</a>

						</div>																		
					</div>
					<div class="myui-panel_bd clearfix">
<script type="text/javascript">
var history_get = MyTheme.Cookie.Get("historyy");
if(history_get){
var json=eval("("+history_get+")");
for(i=0;i<json.length;i++){
document.write('<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="'+json[i].vod_url+'">'+json[i].vod_name+'</a></li>');
}
} else {
document.write("<p style='padding: 80px 0; text-align: center'>您还没有看过影片哦</p>");
 }
</script> 																					
					</div>		
				</div>
			</div>
		</div>
		<!-- 翻页-->	
    </div>
</div>
<?php
include('../templets/yycms/footer.php');
?>
</body>
</html>