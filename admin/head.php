<?php
if(!isset($_COOKIE['user_user'])){
		die('<script type="text/javascript">alert("请登陆后进入");window.location.href="index.php"</script>');
	};
	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>yycms影视管理系统</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="publics/layui/css/layui.css" media="all" />
<link rel="stylesheet" href="publics/iconfont/iconfont.css" media="all" />
<link rel="stylesheet" href="css/admin.css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script charset="utf-8" type="text/javascript" src="/editor/kindeditor.js"></script>
<style type="text/css">
.col-lg-4 {
    width: 33.33333333%;
}
</style>
<link href='css/tb-box.css' rel='stylesheet' type='text/css' />