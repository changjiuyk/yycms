<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<title>联盟用户登录</title>
        <link href="publics/admin/css/admin.css" rel="stylesheet">
    	<link href="css/reg_style.css" rel="stylesheet">
	</head>
	<body>
        <!-- start 注册模块 -->
        <div class="reg-wrap">
            <div class="reg-main">
            <div class="layui-card">
                <div class="layui-card-header">联盟用户登录</div>
                <div class="layui-card-body">
                    <div class="reg-form-wrap">
                              <form class="layui-form" action="action.php" method="post">
                            <div class="reg-form-list form-list">
                                <dl>
                                    <dd class="top">
                                        <em>用户名</em>
                                        <input type="text" placeholder="输入用户名" name="username" id="username">
                                    </dd>
                                    <dd>
                                        <em>密码</em>
                                        <input type="password" name="password" id="password" placeholder="6-18位大小写字母、符号或数字">
                                    </dd>
                                </dl>
                                <div class="login_link"><a href="lm_reg.php">没有帐号注册</a></div>
								<button class="blue-btn btnLogin btn-yuewen" lay-submit lay-filter="ajax" type="submit">立即登录</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		 </div>
        <!-- end 注册模块 -->
	</body>
	<script type="text/javascript" src="publics/static/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="publics/admin/lib/layui/layui.js"></script>
    <script type="text/javascript" src="publics/admin/js/admin.js"></script>


</html>