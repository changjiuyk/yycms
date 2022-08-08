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
<title>会员中心-<?php echo $yycms_a_name;?></title>
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
				<div class="myui-panel_hd">
					<div class="myui-panel__head active bottom-line clearfix">
						<h3 class="title">
							我的资料
						</h3>
						<ul class="nav nav-tabs">
							<li class="active"><a href="">基本资料</a></li>
						</ul>
					</div>																		
				</div>
				<div class="myui-pannel_bd clearfix">
					<ul class="myui-user__form col-pd clearfix">
						<p><span class="xiang">用户名：</span><?php echo $_COOKIE['user_name'];?></p>
						<p class="top-line-dot"><span class="xiang">QQ号码：</span>未填写</p>
						<p class="top-line-dot"><span class="xiang">Email地址：</span></p>
						<p class="top-line-dot"><span class="xiang">注册时间：</span><?php echo $row['b_start'] ?></p>
						<p class="top-line-dot"><span class="xiang">登陆IP：</span><?php echo $row['b_ip'] ?></p>
						<p class="top-line-dot"><span class="xiang">登陆时间：</span><?php echo $row['b_end'] ?></p>
						<p class="top-line-dot"><span class="xiang">推广注册链接：</span>
							<a target="_blank" href="<?php echo hqur();?>/user/reg.php?tg=<?php echo $row['b_id'] ?>"><?php echo hqur();?>/user/reg.php?tg=<?php echo $row['b_id'] ?></a>
						</p>

								
					</ul>																							
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