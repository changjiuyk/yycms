
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<title>联盟用户注册</title>
        <link href="publics/admin/css/admin.css" rel="stylesheet">
    	<link href="css/reg_style.css" rel="stylesheet">
	</head>
	<body>
        <!-- start 注册模块 -->
        <div class="reg-wrap">
            <div class="reg-main">
            <div class="layui-card">
                <div class="layui-card-header">联盟用户注册</div>
                <div class="layui-card-body">
                    <div class="reg-form-wrap">
                        <form action="/admin/market/oiauth_reg.html" method="post">
                            <div class="reg-form-list form-list">
                                <dl>
                                    <dd class="top" id="name">
                                        <em>用户名</em>
                                        <input type="text" placeholder="输入用户名" name="username" id="txtname">
                                    </dd>
                                    <dd id="email">
                                        <em>邮箱</em>
                                        <input type="text" placeholder="输入邮箱" name="email" id="txtemail">
                                    </dd>
                                    <dd id="pwd">
                                        <em>密码</em>
                                        <input type="password" name="password" id="txtpwd" placeholder="6-18位大小写字母、符号或数字">
                                        <div class="password-tip" style="display:none">
                                            <span><cite></cite></span>
                                            <p id="pwdrule1">长度为6-18个字符</p>
                                            <p id="pwdrule2">不能是9位以下的纯数字</p>
                                            <p id="pwdrule3">不能包含空格</p>
                                        </div>
                                        <div class="password-strong" style="display:none">
                                            <p style="display:none"><span class="level-1" ><b></b></span>弱</p>
                                            <p style="display:none"><span class="level-2" ><b></b></span>中</p>
                                            <p style="display:none"><span class="level-3" ><b></b></span>强</p>
                                        </div>
                                    </dd>
                                    <dd id="password2">
                                        <em>确认密码</em>
                                        <input type="password" name="repassword" id="txtpwd2" placeholder="再次输入密码">
                                    </dd>
                                </dl>
                                <div class="login_link"><a href="lm_login.php">已有帐号登录</a></div>
                                <input type="hidden" name="cookie">
								<button class="blue-btn go-reg" lay-submit lay-filter="ajax" type="submit">立即注册</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end 注册模块 -->
	</body>
	<script type="text/javascript" src="publics/static/jquery/jquery.min.js"></script>
	    <script type="text/javascript" src="publics/admin/lib/layui/layui.js"></script>
</html>