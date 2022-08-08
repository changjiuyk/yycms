<?php
if($yycms_a_sfkg==1){//开启收费模式
if(!isset($_COOKIE['user_name'])){
		alert_href('请登录后观看','/user/login.php');
	};
//判断会员等级
$rowhy = $mysqli->select1(0, 1, '*', 'yycms_user', 'where b_user="'.$_COOKIE['user_name'].'"');
$dqsj = date('Y-m-d H:i:s');
	if ($dqsj > $rowhy['b_type']) {
		alert_href('对不起,您的会员已到期,请充值续费！','/user/buy.html');
}
	if (2 > $rowhy['b_hy']) {
		alert_href('对不起,你的会员等级不足,请升级！','/user/buy.html');
}
}//后续功能在更新
?>