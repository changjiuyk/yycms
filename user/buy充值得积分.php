<?php
require_once("epay.config.php");
if(!isset($_COOKIE['user_name'])){
		alert_href('请登陆后进入','login.php');
	};
if ( isset($_POST['save']) ) {	
require_once("lib/epay_submit.class.php");

/**************************请求参数**************************/
        $notify_url = 'http://'.$_SERVER['HTTP_HOST'].'/user/notify_url.php';
        //需http://格式的完整路径，不能加?id=123这类自定义参数

        //页面跳转同步通知页面路径
        $return_url = 'http://'.$_SERVER['HTTP_HOST'].'/user/return_url.php';
        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

        //商户订单号
        $out_trade_no = date("YmdHis").mt_rand(100,999);
        //商户网站订单系统中唯一订单号，必填
		//支付方式
        $type = $_POST['pay'];
        //用户名
        $name = $_COOKIE['user_name'];
		//积分
        $money = $_POST['jf'];
		//会员类型
		$group = '1';
		//站点名称
        $sitename = 'yycms';
        //必填

        //订单描述
//写入记录
$data['p_dd'] =$out_trade_no;//订单号
$data['p_user'] =$_COOKIE['user_name'];
$data['p_jf'] =$money;//
$data['p_time'] =date("Y-m-d H:i:s",time());
$data['p_lx'] ='0';//类型
$data['p_zt'] ='0';//状态
$data['p_pingtai'] =$hxlpintai_id;//平台
$str = arrtoinsert($data);
$sql = 'insert into yycms_user_pay ('.$str[0].') values ('.$str[1].')';
if(mysql_query($sql)){}

/************************************************************/

//构造要请求的参数数组，无需改动
$parameter = array(
		"pid" => trim($alipay_config['partner']),
		"type" => $type,
		"notify_url"	=> $notify_url,
		"return_url"	=> $return_url,
		"out_trade_no"	=> $out_trade_no,//订单号
		"name"	=> $name,//用户名
		"money"	=> $money,//积分
		"group"	=> $group,
		"sitename"	=> $sitename
);

//建立请求
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter);
echo $html_text;
}
	?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线充值-<?php echo $yycms_a_name;?></title>
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
$result = mysql_query('select * from yycms_user where b_user="'.$_COOKIE['user_name'].'"');
$row = mysql_fetch_array($result);
include('zx.php');
if ( isset($_POST['sykm']) ) {

if ($_POST['km_name'] == "" || $_POST['km_name'] == null ){
echo "<script>alert('请输入卡号')</script>";
}else{
$result10 = mysql_query('select * from yycms_km where km_name = "'.$_POST['km_name'].'" and km_zt=0');
if($row10 = mysql_fetch_array($result10)){	
if($row['b_type'] < date('Y-m-d h:i:s', time())){
$b_type = time() + 86400*$row10['km_tc'];
}else{
$b_type = strtotime($row['b_type']) + 86400*$row10['km_tc'];
}
$sql10 = 'update yycms_user set b_hy=2 , b_type="'.date('Y-m-d h:i:s',$b_type).'" where b_user="'.$_COOKIE['user_name'].'"';	
$sql11 = 'update yycms_km set km_zt=1, km_syz="'.$_COOKIE['user_name'].'", km_time="'.date('Y-m-d h:i:s',time()).'" where km_name="'.$_POST['km_name'].'"';	
mysql_query($sql10);
mysql_query($sql11);
die('<script type="text/javascript">alert("充值' . $row10['km_tc'] . '天成功");window.location.href="/user/buy.html"</script>');
}else{
echo "<script>alert('卡密不存在或者已被使用')</script>";
}
}
}
?>	
<?php if($roww['zf_kg']=="1"){?>   						
    		<div class="myui-panel myui-panel-bg clearfix">
				<div class="myui-panel-box clearfix">
					<div class="myui-panel_bd clearfix">
						<div class="myui-panel_hd">
							<div class="myui-panel__head active bottom-line clearfix">
								<h3 class="title">
									在线充值
								</h3>
								<span class="more text-muted">友情提示：1元可以兑换<span class="text-red"><?php echo $roww['sf_bl']; ?></span>个积分</span>
							</div>																		
						</div>
						<form class="form-horizontal" action="" method="post">
						<div class="myui-panel_bd clearfix">
							<div class="myui-user__form col-pd clearfix">
								<p><span class="xiang active">剩余积分：</span><span class="text-red"><?php echo $row['b_jf'] ?></span></p>
								<p class="top-line-dot"><span class="xiang active">支付方式：</span>
									<select name="pay" id="pay">
									<option value="wxpay">微信支付</option>
									<option value="alipay">支付宝</option>
									<option value="qqpay">QQ钱包</option>
									</select>
								</p>
								<p class="top-line-dot"><span class="xiang">充值的金额：</span>
								<input type="text" name="jf" value="10" class="form-control" placeholder="充值金额"></p>
								<p class="top-line-dot"><span class="xiang"></span>
								
								<button id="profile-save-btn" type="submit" name="save" class="btn btn-primary js-ajax-submit">提交</button>
								</p>
							</div>																							
						</div>	
</form>						
					</div>
				</div>
			</div>
<?php } ?>	
<form class="form-horizontal" action="" method="post">		
			<div class="myui-panel myui-panel-bg clearfix">
				<div class="myui-panel-box clearfix">
					<div class="myui-panel_bd clearfix">
						<div class="myui-panel_hd clearfix">
							<div class="myui-panel__head active bottom-line clearfix">
								<h3 class="title">
									充值卡充值
								</h3>
								<span class="more text-muted">友情提示：请到卡密平台购买充值卡</span>
							</div>																		
						</div>
						<div class="myui-panel_bd clearfix">
							<div class="myui-user__form col-pd clearfix">
								<p>
								<span class="xiang">充值卡密：</span>
								<input type="text" name="km_name" value="" class="form-control" placeholder="充值卡号">
								</p>
								<p class="top-line-dot">
								<span class="xiang">
								</span>
								<input type="submit" name="sykm" id="btn_submit_card" class="btn btn-primary" value="确认">
								<a class="btn btn-warm" href="<?php echo $roww['sf_km'];?>">购买卡密</a>
								</p>
							</div>																							
						</div>		
					</div>
				</div>
			</div>
			</form>	
    	</div>
    </div>
</div>
<script>
	$(".go-back").click(function () {
		var ref = document.referrer;
		location.href=ref;
	});
</script>
<?php
include('../templets/yycms/footer.php');
?>
</body>
</html>