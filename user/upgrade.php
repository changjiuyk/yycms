<?php
include('../sava/inc.php');
if(!isset($_COOKIE['user_name'])){
		alert_href('请登陆后进入','login.php');
	};
	?>
<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>升级会员组-会员中心-<?php echo $yycms_a_name;?></title>
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
									升级会员
								</h3>
							</div>																		
						</div>								
						<form action="" method="post" name="form3" id="form3">
						<div class="myui-pannel_bd clearfix">
						<?php
						$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_hytc', 'order by tc_id asc');
						foreach ($vodqxk as $row) {
						?>
								<div class="col-md-4 col-sm-2 col-xs-2">
								<a class="yhsjhy grade btn btn-block btn-primary" href="javascript:;" data-id="<?php echo $row['tc_type']; ?>" data-name="<?php echo $row['tc_name']; ?>" data-points="<?php echo $row['tc_jf']; ?>" data-long="day" style="padding: 20px;">
									<p style="font-size: 18px;"><b><?php echo $row['tc_name']; ?></b></p>
									<p><?php echo $row['tc_na']; ?>：<?php echo $row['tc_jf']; ?>积分</p>
									点击升级
								</a>
							</div>
<?php							
}
?>	
							</div>
						</form>
					</div>
				</div>
			</div>		
    	</div>
   </div>  
<?php
include('../templets/yycms/footer.php');
?>
</body>
</html>