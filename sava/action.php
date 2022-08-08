<?php
require_once('../sava/inc.php');
error_reporting(0);
header("Content-type:text/json");
//错误提示
function bc()
{
return json_encode(array('code' => '400', 'msg' => '操作失败'));
}
function CheckUrl($C_url){//过滤注册  
     $str="/ |‖|\/|\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|\_|\+|\{|\}|\:|\<|\>|\?|\[|\]|\,|\.|\/|\;|\'|\`|\-|\=|\\\|\|/";    
    if (!preg_match($str,$C_url)){  
        return false;  
    }else{  
    return true;  
    }  }
function getIP()
{
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
 
    return $realip;
}
//用户登录
	function login()
	{
	$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];	
	$b_name = isset($_POST['user_name']) ? trim($_POST['user_name']) : '';
	$b_pass = isset($_POST['user_pwd']) ? trim($_POST['user_pwd']) : '';
	global $mysqli;
	$gametype2 = $mysqli->update('yycms_user', 'b_ip="'.getIP().'" , b_end="'.date('Y-m-d H:i:s', time()).'" where b_user="'.$b_name.'"');
	$gametype = $mysqli->select1(0, 1, '*', 'yycms_user', 'where b_user = "'.$b_name.'" and b_pass = "'.md5($b_pass).'"');
	if(!!$gametype){
	setcookie('user_name',$b_name,time()+3600*24,'/');
	setcookie('user_namesj',time()+10,time()+3600*24,'/');
	return json_encode(array('code' => '200', 'msg' => '登陆成功'));
	}else{
	return json_encode(array('code' => '400', 'msg' => '登陆失败-账号或密码错误'));
	}
	}
//用户注册
function reg()
{
global $mysqli;
$b_name = isset($_POST['user_name']) ? trim($_POST['user_name']) : '';
$b_pass = md5(trim($_POST['user_pwd']));
if(CheckUrl($b_name)){  
return json_encode(array('code' => '400', 'msg' => '用户名不能有特殊符号'));
}
//检测用户名是否存在
$gametype = $mysqli->select1(0, 1, 'b_id', 'yycms_user', 'where b_user='.$b_name.'');
if(!!$gametype){
return json_encode(array('code' => '400', 'msg' => '用户名存在'));
}
$rowtj = $mysqli->select1(0, 1, '*', 'yycms_shoufei', '');
//推广者获得奖励
if ($_POST['tg']>='1'){
$rowcx = $mysqli->select1(0, 1, '*', 'yycms_user', 'where b_id="'.$_POST['tg'].'"');
$hqjf=$rowcx['b_jf']+$rowtj['sf_zc'];
$gametype2 = $mysqli->update('yycms_user', 'b_jf = '.$hqjf.' where b_id="'.$_POST['tg'].'"');
}
$hxlpintai_id = '1';
$data['b_pingtai'] = $hxlpintai_id;
$data['b_user'] = $b_name;
$data['b_pass'] =$b_pass;
$data['b_tg'] =$_POST['tg'];
$data['b_hy'] ='2';
$data['b_jf'] ='0';
$data['b_zt'] ='1';
$data['b_start'] =date('Y-m-d h:i:s', time());
$data['b_type'] =date('Y-m-d h:i:s', time()+ 86400*$rowtj['sf_hyts']);
$str = arrtoinsert($data);
$gametype1 = $mysqli->insert('yycms_user',$str[0], $str[1]);
if (!!$gametype1) {
return json_encode(array('code' => '200', 'msg' => '注册成功'));
}
}
//修改密码
	function xgpwd()
	{
		return ;
	}
//查询用户的基本信息
	function cxname()
	{
		return ;
	}
//Home页面退出
function tuichu()
{
setcookie('user_name','',time()-3600*24,'/');
return json_encode(array('code' => 200, 'msg' => '账号退出成功'));
}
//升级会员
function hysj()
{
global $mysqli;
$rowcx = $mysqli->select1(0, 1, '*', 'yycms_user', 'where b_user="'.$_POST['zh'].'"');
$hqjf=$rowcx['b_jf'];
$type=$rowcx['b_type'];
if($hqjf+1 <= $_POST['tcjf']){
return json_encode(array('code' => 400, 'msg' => '积分不足'));
}
//判定时间是否到期
if($type < date('Y-m-d h:i:s', time())){
$b_type = time() + 86400*$_POST['tcts'];//到期增加天数
}
else{
$b_type = strtotime($type) + 86400*$_POST['tcts'];//没到期增加天数
}
//更新数据
$_data['b_hy'] ='2';
$_data['b_jf'] =$hqjf-$_POST['tcjf'];
$_data['b_type'] =date('Y-m-d h:i:s',$b_type);
global $mysqli;
$gametype = $mysqli->update('yycms_user', '' . arrtoupdate($_data) . 'where b_user="'.$_POST['zh'].'"');
return json_encode(array('code' => 200, 'msg' => '升级成功'));
}
//留言提交
	function lytj()
	{
    global $yycms_a_gjcpb;
    global $yycms_a_gjcth;
    global $mysqli;
	session_start();
	if ($_SESSION['verifycode'] != $_POST['verifycode']) {
	return json_encode(array('code' => 400, 'msg' => '验证码错误'));
	}
   if(preg_match("/[ ',:;*~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$_POST['gbook_content'])){
	return json_encode(array('code' => 400, 'msg' => '禁止使用特殊符号'));
    }
    $data['ly_name'] = '游客';
	$data['ly_sh'] = '0';
	$str = "/$yycms_a_gjcpb/";//关键字
	$data['ly_nr'] = preg_replace($str,$yycms_a_gjcth,$_POST['gbook_content']);
	$data['ly_time'] =date('Y-m-d h:i:s');	
	$str = arrtoinsert($data);
	$gametype1 = $mysqli->insert('yycms_ly',$str[0], $str[1]);
    if (!!$gametype1) {
	return json_encode(array('code' => 200, 'msg' => '留言成功'));
    }else{
	return json_encode(array('code' => 400, 'msg' => '留言失败'));
	}
	}
//收藏影片
	function scyp()
	{
    global $mysqli;
	$data['sc_user'] = $_POST['sc_user'];
    $data['sc_name'] = $_POST['sc_name'];
	$data['sc_url'] = $_POST['sc_url'];
	$data['sc_time'] =date('Y-m-d h:i:s');
    $gametype = $mysqli->select1(0, 1, '*', 'yycms_sc', 'where sc_name="'.$_POST['sc_name'].'"');
	if(!!$gametype){
    return json_encode(array('code' => '400', 'msg' => '请勿重复收藏'));
    }
	$str = arrtoinsert($data);
	$gametype1 = $mysqli->insert('yycms_sc',$str[0], $str[1]);
	if(!!$gametype1){
	return json_encode(array('code' => 200, 'msg' => '影片'.$_POST['sc_name'].'收藏成功'));
    }else{
	return json_encode(array('code' => 400, 'msg' => '收藏失败'));
	}
	}
//删除影片
function scds()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_sc','where sc_id in (' . $_POST['ypid'] . ')');
if(!!$gametype1){
return json_encode(array('code' => '200', 'msg' => '删除成功'));
}
}
$a=$_POST['yycms'];
switch ($a){
    case "login": // 用户登陆
        echo login();
        break;
	case "reg": // 用户注册
        echo reg();
        break;
	case "tuichu": // 用户退出
        echo tuichu();
        break;	
	case "hysj": // 会员升级
        echo hysj();
        break;
	case "lytj": // 网站留言
        echo lytj();
        break;
	case "scyp": // 网站留言
        echo scyp();
        break;
	case "scds": // 删除影片
        echo scds();
        break;
	   default:
        echo bc();
}		
?>