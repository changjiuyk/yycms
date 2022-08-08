	<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd clearfix">
			<div class="col-pd">
				<div class="myui-user__name clearfix">
					<a class="logout text-fff" onclick="tuichu()"><i class="fa fa-power-off"></i> 退出</a>
					<dl class="clearfix">
						<dt><img class="face" width="60" height="60" src="/uploadfile/user.png"></dt>
						<dd>
							<h3 class="text-fff" id="login"><?php echo $_COOKIE['user_name'];?></h3>				
							<p class="margin-0 text-fff">剩余<?php echo $row['b_jf'] ?>积分/<?php echo $mysqli->get_user_dj(2);?>-<?php echo $row['b_type'] ?></p>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="myui-panel_bd clearfix">
			<ul class="myui-user__head">
				<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/index.html"><i class="fa fa-file-text-o"></i> 我的资料</a></li>
				<!--<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/info.php"><i class="fa fa-edit"></i> 修改资料</a></li>-->
				<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/plays.html"><i class="fa fa-step-forward"></i> 播放记录</a></li>
				<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/favs.html"><i class="fa fa-star-o"></i> 我的收藏</a></li>
				<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/buy.html"><i class="fa fa-credit-card"></i> 在线充值</a></li>
				<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/upgrade.html"><i class="fa fa-user-o"></i> 升级会员</a></li>
				<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/orders.html"><i class="fa fa-credit-card"></i> 充值记录</a></li>
				<!--<li class="col-md-6 col-xs-3"><a class="btn btn-block btn-default" href="/user/reward.html"><i class="fa fa-line-chart"></i> 我的分销</a></li>-->
				<li class="col-md-6 col-xs-3" id="gtyhtg"><a class="btn btn-block btn-default myui-copy-link" data-url="<?php echo hqur();?>/user/reg.php?tg=<?php echo $row['b_id'] ?>"><i class=""></i> 推广注册</a></li>

			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$('#gtyhtg').click(function(){//用户后台推广链接
    var clipboard = new Clipboard('.myui-copy-link',{ 
       text: function(trigger) { 
		  layer.msg('复制推广链接成功');
          return trigger.getAttribute('data-url'); 
       }
    });
});  
function tuichu(){//用户后台账号退出
     $.post("/sava/action.php",{yycms:"tuichu"},function(data){
	  layer.msg(data.msg);	 
     window.location.replace("/user/login.html"); 
	 },"json");	
};
</script>