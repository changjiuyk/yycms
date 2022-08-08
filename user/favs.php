<?php
include('../sava/inc.php');
if(!isset($_COOKIE['user_name'])){
		alert_href('请登陆后进入','login.php');
	};
	?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>收藏管理-<?php echo $yycms_a_name;?></title>
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
								我的收藏
							</h3>
						</div>																		
					</div>
					<div class="myui-pannel_bd clearfix">
							<ul class="myui-vodlist__text to-color col-pd clearfix">
								<li class="striped-head clearfix">
									<span class="col-md-wide-10 col-sm-wide-35 hidden-xs">编号</span>
									<span class="col-md-wide-2 col-sm-wide-10 col-xs-wide-7">名称</span>
									<span class="col-md-wide-5 hidden-sm hidden-xs">时间</span>
									<span class="col-md-wide-2 col-sm-wide-15 col-xs-wide-3 text-right">操作</span>
								</li>
					<?php
					$sql = mysql_query('select * from yycms_sc where sc_user="'.$_COOKIE['user_name'].'" order by sc_id desc');
					while($rowdd= mysql_fetch_array($sql)){
					?>
					                <li class="clearfix">										
									<span class="col-md-wide-10 col-sm-wide-35 hidden-xs"><?php echo $rowdd['sc_id'];?></span>
									<span class="col-md-wide-2 col-sm-wide-10 col-xs-wide-7"><a target="_blank" href="<?php echo $rowdd['sc_url'];?>"><?php echo $rowdd['sc_name'];?></a></span>
									<span class="col-md-wide-5 col-sm-wide-35 hidden-xs text-muted">
									<a target="_blank" href="<?php echo $rowdd['sc_url'];?>"><?php echo $rowdd['sc_time'];?></a>
									</span>
									<span class="col-md-wide-2 col-sm-wide-15 col-xs-wide-3 text-right">
									<a class="text-red" href="javascript:;" onclick="delData(<?php echo $rowdd['sc_id'];?>)" class="delete">删除</a>
									</span>																			
								    </li>               
							<?php } ?>					
											  					
							</ul>	
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