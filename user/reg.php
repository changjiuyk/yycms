<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>用户注册</title>
<?php
include('../sava/inc.php');
include('../templets/yycms/head.php');
?>
</head>
<body class="yycmsys">
<?php
include('../templets/yycms/header.php');
?>
<div class=" clearfix">
	<div class="myui-panel myui-panel-bg myui-login__form clearfix">
		<div class="myui-panel-box clearfix">		
			<div class="myui-panel_bd">
				<div class="head text-center">
					<a href="/"><img class="img-responsive" src="<?php echo $yycms_a_logo;?>"/></a>
					<h5>用户注册</h5>
				</div>
				<ul class="input-list">				
					<form method="post" id="fm" action="">					
						<li>
							<input type="text" id="user_name" name="user_name" class="form-control" placeholder="请输入您的登录账号">
						</li>
						<li>
							<input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="请输入您的登录密码">
						</li>
						<li>
							<input type="password" id="user_pwd2" name="user_pwd2" class="form-control" placeholder="请输入您的确认密码">
						</li>

						<li>
						<input type="hidden" name="yycms" value="reg">
						<input type="hidden" name="pintai" value="<?php echo $hxlpintai_id;?>">
						<input type="hidden" name="tg" value="<?php echo isset($_GET['tg']) ? trim($_GET['tg']) : '0';?>">
							<a id="btn_submitreg" class="btn btn-lg btn-block btn-primary">立即注册</a>
						</li>
						<li class="text-center">
							<a href="/">返回首页</a>
							<span class="split-line">
							</span>
							<a href="/user/login.php">登陆账号</a>

						</li>
					</form>
				</ul>			
			</div>
		</div>
	</div>
</div>
<?php
include('../templets/yycms/footer.php');
?>	