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
<title>订单管理-<?php echo $yycms_a_name;?></title>
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
								充值记录
							</h3>
							<ul class="nav nav-tabs">
							</ul>
						</div>																		
					</div>
					<div class="myui-panel_bd clearfix">
						<form id="form1" name="form1" method="post">
							<ul class="myui-vodlist__text striped to-color col-pd clearfix">
								<li class="striped-head clearfix">
									<span class="col-md-wide-10 col-sm-wide-10 hidden-xs">编号</span>
									<span class="col-md-wide-45 col-sm-wide-45 col-xs-wide-7">单号</span>
									<span class="col-md-wide-10 col-sm-wide-10 hidden-xs">金额</span>
									<span class="col-md-wide-15 col-sm-wide-15 hidden-xs">时间</span>
									<span class="col-md-wide-10 col-sm-wide-10 col-xs-wide-3 text-right">操作</span>
								</li>
				    <?php
					$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_user_pay', 'where p_user="'.$_COOKIE['user_name'].'" and p_lx = 0 order by p_id desc');
					foreach ($vodqxk as $rowdd) {
					?>
					    <li class="clearfix">										
						<span class="col-md-wide-10 col-sm-wide-10 hidden-xs text-muted"><?php echo $rowdd['p_id'];?></span>
						<span class="col-md-wide-45 col-sm-wide-45 col-xs-wide-7"><?php echo $rowdd['p_dd'];?></span>
						<span class="col-md-wide-10 col-sm-wide-10 hidden-xs"><?php echo $rowdd['p_jf'];?></span>
						<span class="col-md-wide-15 col-sm-wide-15 hidden-xs"><?php echo $rowdd['p_time'];?></span>
						<span class="col-md-wide-10 col-sm-wide-10 col-xs-wide-3 text-right">
						<?php
							echo ($rowdd['p_zt'] == 1 ? '<a class="" >成功</a>':'');
							echo ($rowdd['p_zt'] == 0 ? '<a class="text-red" >失败</a>':'');
							?>
						</span>																			
						</li>
							<?php } ?>
			  				</ul>
						</form>
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