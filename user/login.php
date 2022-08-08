<?php
include('../sava/inc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>用户登录-<?php echo $yycms_a_name;?></title>
<?php
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
					<h5>登录账号</h5>
				</div>
				<ul class="input-list">								
						<li>
							<input type="text" id="user_name" name="user_name" class="form-control" placeholder="请输入您的登录账号">
						</li>
						<li>
							<input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="请输入您的登录密码">
						</li>
						<li>
							<a id="btn_submit" class="btn btn-lg btn-block btn-primary">立即登录</a>
						</li>
						<li class="text-center">
							<a href="/">返回首页</a>
							<span class="split-line">
							</span>
							<a href="/user/reg.php">注册账号</a>
						</li>
				</ul>			
			</div>
		</div>
	</div>
</div>

<?php
include('../templets/yycms/footer.php');
?>	