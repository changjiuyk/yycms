<?php
include('../sava/inc.php');
/* * 
 * 功能：BL云支付页面跳转同步通知页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************页面功能说明*************************
 * 该页面可在本机电脑测试
 * 可放入HTML等美化页面的代码、商户业务逻辑程序代码
 * 该页面可以使用PHP开发工具调试，也可以使用写文本函数logResult，该函数已被默认关闭，见epay_notify_class.php中的函数verifyReturn
 */

require_once("epay.config.php");
require_once("lib/epay_notify.class.php");
$result = mysql_query('select * from yycms_shoufei');
$roww = mysql_fetch_array($result); 
$resultt = mysql_query('select * from yycms_user where b_user="'.$_COOKIE['user_name'].'"');
$row = mysql_fetch_array($resultt);
?>
<!DOCTYPE HTML>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代码
	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

	//商户订单号

	$out_trade_no = $_GET['out_trade_no'];
if ($out_trade_no==""){
	$out_trade_no = $_GET['pay_id'];
}
	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	//支付方式
	$type = $_GET['type'];


    if($_GET['trade_status'] == 'TRADE_SUCCESS') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序  
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }
	$sql = 'select * from yycms_user_pay where p_dd = "'.$out_trade_no.'" and p_zt = "1"';
	$result = mysql_query($sql);
	if(!$row1 = mysql_fetch_array($result)){		
	$_data['b_jf'] =$_GET['money']*$roww['sf_bl']+$row['b_jf'];
    $sql = 'update yycms_user set '.arrtoupdate($_data).' where b_user="'.$_COOKIE['user_name'].'"';		
	mysql_query($sql);
    $sql1 = 'update yycms_user_pay set p_zt=1 where p_dd="'.$out_trade_no.'"';
    mysql_query($sql1);  
	Header("Location:/user/buy.html"); 
	}else{
	echo '你作弊充值失败';	
	}


	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    //如要调试，请看alipay_notify.php页面的verifyReturn函数
    echo "验证失败";
}
?>
        <title>云支付即时到账交易接口</title>
	</head>
    <body>
    </body>
</html>