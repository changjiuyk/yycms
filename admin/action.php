<?php
require_once('../sava/inc.php');
error_reporting(0); //雨雨CMS作者QQ:201232694
header("Content-type:text/json");
//错误提示
if($_SERVER['HTTP_REFERER'] == "" )
{
echo json_encode(array('code' => '400', 'msg' => '你那么叼爸妈知道?'));
return;
}
function bc()
{
return json_encode(array('code' => '400', 'msg' => '权限不足'));
}
	function htdl()
	{
	$a_user_user = isset($_POST['user_user']) ? trim($_POST['user_user']) : '';
	$a_user_pass = isset($_POST['user_pass']) ? trim($_POST['user_pass']) : '';
	global $mysqli;
	$gametype = $mysqli->select1(0, 1, '*', 'yycms_pintai', 'where id = 1 and a_user_user = "'.$a_user_user.'" and a_user_pass = "'.$a_user_pass.'"');
	if(!!$gametype){
	setcookie('user_user',$a_user_user,time()+3600*24);
	return json_encode(array('code' => '200', 'msg' => '登陆成功'));
	}else{
	return json_encode(array('code' => '400', 'msg' => '登陆失败-账号或密码错误'));
	}
	}
	function htxgmm()
	{
$_data['a_user_pass'] = $_POST['password2'];
global $mysqli;
$gametype = $mysqli->update('yycms_pintai', '' . arrtoupdate($_data) . ' where id = 1');
if (!!$gametype) {
return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
	return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}}
	function httc()
	{
	setcookie('user_user','',time()-3600*24);
	return json_encode(array('code' => '200', 'msg' => '退出成功'));
	}
function xtxg1()
{
$_data['a_bt'] = $_POST['yycms_a_bt'];
$_data['a_name'] = $_POST['yycms_a_name'];
$_data['a_url'] = $_POST['yycms_a_url'];
$_data['a_keywords'] = $_POST['yycms_a_keywords'];
$_data['a_description'] = $_POST['yycms_a_description'];
$_data['a_bfqgg'] = $_POST['yycms_a_bfqgg'];
$_data['a_jzt'] = $_POST['yycms_a_jzt'];
$_data['a_hckg'] = $_POST['yycms_a_hckg'];
$_data['a_hcsj'] = $_POST['yycms_a_hcsj'];
$_data['a_logo'] = $_POST['yycms_a_logo'];
$_data['a_fhkg'] = $_POST['yycms_a_fhkg'];
$_data['a_mrjx'] = $_POST['yycms_a_mrjx'];
$_data['a_jxjk'] = $_POST['yycms_a_jxjk'];
$_data['a_zyjk'] = $_POST['yycms_a_zyjk'];
$_data['a_ggkg'] = $_POST['yycms_a_ggkg'];
$_data['a_gg'] = $_POST['yycms_a_gg'];
$_data['a_qqsp'] = $_POST['yycms_a_qqsp'];
$_data['a_bq'] = $_POST['yycms_a_bq'];
$_data['a_tj'] = addslashes($_POST['yycms_a_tj']);
$_data['a_dbdh'] = $_POST['yycms_a_dbdh'];
$_data['a_dylb'] = $_POST['yycms_a_dylb'];
$_data['a_dst'] = $_POST['yycms_a_dst'];
$_data['a_wximg'] = $_POST['yycms_a_wximg'];
$_data['a_sfkg'] = $_POST['yycms_a_sfkg'];
$_data['a_mb'] = str_replace(array("\r\n", "\r", "\n"), "", $_POST['yycms_a_mb']);
$_data['a_kg1'] = $_POST['yycms_a_kg1'];
$_data['a_kg2'] = $_POST['yycms_a_kg2'];
$_data['a_gjcpb'] = $_POST['a_gjcpb'];
$_data['a_gjcth'] = $_POST['a_gjcth'];
$_data['a_mjgjc'] = $_POST['a_mjgjc'];
$_data['a_zdyurl']= $_POST['a_zdyurl'];
global $mysqli;
$gametype = $mysqli->update('yycms_pintai', '' . arrtoupdate($_data) . ' where id = 1');
if (!!$gametype) {
	return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
	return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function xgseo()
{
$_data['s_bftitle'] = $_POST['yycms_bftitle'];
$_data['s_bfkeywords'] = $_POST['yycms_bfkeywords'];
$_data['s_bfdescription'] = $_POST['yycms_bfdescription'];
global $mysqli;
$gametype = $mysqli->update('yycms_pintai', '' . arrtoupdate($_data) . ' where id = '.$_POST['pintai'].'');
if (!!$gametype) {
	return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
	return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
}
function spxg()
{
$_data['b_name'] = $_POST['yycms_b_name'];
$_data['b_tp'] = $_POST['yycms_b_tp'];
$_data['b_zy'] = $_POST['yycms_b_zy'];
$_data['b_jf'] = $_POST['yycms_b_jf'];
$_data['b_pass'] = $_POST['yycms_b_pass'];
$_data['b_fl'] = $_POST['yycms_b_fl'];
$_data['b_hy'] = $_POST['yycms_b_hy'];
$_data['b_tj'] = $_POST['yycms_b_tj'];
$_data['b_url'] = $_POST['yycms_b_url'];
$_data['b_jj'] = $_POST['yycms_b_jj'];
global $mysqli;
$gametype = $mysqli->update('yycms_vod', '' . arrtoupdate($_data) . ' where b_id = '.$_POST['spid'].'');
if (!!$gametype) {
	return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
	return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function sptj()
{
$_data['b_name'] = $_POST['yycms_b_name'];
$_data['b_tp'] = $_POST['yycms_b_tp'];
$_data['b_zy'] = $_POST['yycms_b_zy'];
$_data['b_jf'] = $_POST['yycms_b_jf'];
$_data['b_pass'] = $_POST['yycms_b_pass'];
$_data['b_fl'] = $_POST['yycms_b_fl'];
$_data['b_hy'] = $_POST['yycms_b_hy'];
$_data['b_tj'] = $_POST['yycms_b_tj'];
$_data['b_url'] = $_POST['yycms_b_url'];
$_data['b_jj'] = $_POST['yycms_b_jj'];
$_data['b_time'] = date('Y-m-d h:i:s', time());
$str = arrtoinsert($_data);
//$sql = 'insert into yycms_vod (' . $str[0] . ') values (' . $str[1] . ')';
global $mysqli;
$gametype = $mysqli->insert('yycms_vod',$str[0], $str[1]);
if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '添加成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '添加失败'));
	}
	}
function sclm()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_vod_class','where c_id = ' . $_POST['del'] . '');
$gametype2 = $mysqli->shanchu('yycms_vod','where d_class = ' . $_POST['del'] . '');
return json_encode(array('code' => '200', 'msg' => '删除成功'));
	}
function tjlm()
{
	$_data['c_name'] = $_POST['c_name'];
	$str = arrtoinsert($_data);
global $mysqli;
$gametype = $mysqli->insert('yycms_vod_class',$str[0], $str[1]);
if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '添加成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '添加失败'));
	}
	}
function xglm()
{
	$_data['c_name'] = $_POST['c_name'];
global $mysqli;
$gametype = $mysqli->update('yycms_vod_class', '' . arrtoupdate($_data) . ' where c_id = '.$_POST['lmid'].'');
	if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function sfsz()
{
	//$_data['sf_kg'] = $_POST['yycms_sf_kg'];
	$_data['sf_cs'] = $_POST['yycms_sf_cs'];
	$_data['sf_bl'] = $_POST['yycms_sf_bl'];
	$_data['sf_zc'] = $_POST['yycms_sf_zc'];
	$_data['sf_gk'] = $_POST['yycms_sf_gk'];
	$_data['sf_km'] = $_POST['yycms_sf_km'];
	$_data['sf_hyts'] = $_POST['yycms_sf_hyts'];
	global $mysqli;
$gametype = $mysqli->update('yycms_shoufei', '' . arrtoupdate($_data) . ' where sf_pingtai = '.$_POST['pingtai'].'');
	if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function ggxg()
{
	$_data['gg_gg1'] = addslashes($_POST['yycms_gg_gg1']);
	$_data['gg_gg2'] = addslashes($_POST['yycms_gg_gg2']);
	$_data['gg_gg3'] = addslashes($_POST['yycms_gg_gg3']);
	$_data['gg_gg4'] = addslashes($_POST['yycms_gg_gg4']);
	$_data['gg_gg5'] = addslashes($_POST['yycms_gg_gg5']);
	$_data['gg_gg6'] = addslashes($_POST['yycms_gg_gg6']);
	$_data['gg_gg7'] = addslashes($_POST['yycms_gg_gg7']);
	$_data['gg_gg8'] = addslashes($_POST['yycms_gg_gg8']);
	$_data['gg_gg9'] = addslashes($_POST['yycms_gg_gg9']);
	$_data['gg_gg10'] = addslashes($_POST['yycms_gg_gg10']);
	$_data['gg_gg11'] = addslashes($_POST['yycms_gg_gg11']);
	global $mysqli;
    $gametype = $mysqli->update('yycms_pintai', '' . arrtoupdate($_data) . ' where id = '.$_POST['pintai'].'');
	if (!!$gametype) {
	return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function hyzxxg()
{
global $mysqli;
if($_POST['id']==''){	
return json_encode(array('code' => '400', 'msg' => '请至少选中一项'));
}
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	switch ($_POST['execute_method']) {
		case 'status':
			$gametype = $mysqli->update('yycms_user', 'b_zt = 1 where b_id in (' . $id . ')');		
			break;
		case 'status1':
			$gametype = $mysqli->update('yycms_user', 'b_zt = 0 where b_id in (' . $id . ')');		
			break;
		case 'delete':
			$gametype = $mysqli->shanchu('yycms_user','where b_id in (' . $id . ')');
			break;
		default:
			return json_encode(array('code' => '400', 'msg' => '请选择要执行的操作'));
	}
	mysql_query($sql);
	return json_encode(array('code' => '200', 'msg' => '执行成功'));
	}
function wxxg()
{
	$_data['wx_url'] = $_POST['yycms_wx_url'];
	$_data['wx_ts'] = $_POST['yycms_wx_ts'];
	$_data['wx_appid'] = $_POST['yycms_wx_appid'];
	$_data['wx_appsecret'] = $_POST['wx_appsecret'];
	$_data['wx_token'] = $_POST['yycms_wx_token'];
	$_data['wx_hf'] = $_POST['yycms_wx_hf'];
	global $mysqli;
    $gametype = $mysqli->update('yycms_wx', '' . arrtoupdate($_data) . ' where wx_pingtai = 1');
	if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function tjdl()
{
//检测用户名是否存在
$query = mysql_query("select id from yycms_pintai where a_user_user='".$_POST['yycms_a_user']."'");
if(mysql_fetch_array($query)){
return json_encode(array('code' => '400', 'msg' => '代理账号存在'));
}
$_data['s_bftitle'] = '{$timu}-在线观看-{$lx}-{$yycms_a_name}';
$_data['s_bfkeywords'] = '{$timu},{$timu}在线观看,{$timu}免费在线播放,{$timu}完整版';
$_data['s_bfdescription'] = '{$timu}在线观看,{$jian}';
$_data['a_bt'] = $_POST['yycms_a_tb'];
$_data['a_name'] = $_POST['yycms_a_name'];
$_data['a_url'] = $_POST['yycms_a_url'];
$_data['a_keywords'] = $_POST['yycms_a_keywords'];
$_data['a_description'] = $_POST['yycms_a_description'];
$_data['a_bfqgg'] = $_POST['yycms_a_bfqgg'];
$_data['a_jzt'] = $_POST['yycms_a_jzt'];
$_data['a_hckg'] = $_POST['yycms_a_hckg'];
$_data['a_hcsj'] = $_POST['yycms_a_hcsj'];
$_data['a_logo'] = $_POST['yycms_a_logo'];
$_data['a_fhkg'] = $_POST['yycms_a_fhkg'];
$_data['a_mrjx'] = $_POST['yycms_a_mrjx'];
$_data['a_jxjk'] = $_POST['yycms_a_jxjk'];
$_data['a_zyjk'] = $_POST['yycms_a_zyjk'];
$_data['a_gg'] = $_POST['yycms_a_gg'];
$_data['a_qqsp'] = $_POST['yycms_a_qqsp'];
$_data['a_bq'] = $_POST['yycms_a_bq'];
$_data['a_tj'] = addslashes($_POST['yycms_a_tj']);
$_data['a_dbdh'] = $_POST['yycms_a_dbdh'];
$_data['a_dylb'] = $_POST['yycms_a_dylb'];
$_data['a_dst'] = $_POST['yycms_a_dst'];
$_data['a_sfkg'] = $_POST['yycms_a_sfkg'];
$_data['a_wximg'] = $_POST['yycms_a_wximg'];
$_data['a_mb'] = $_POST['yycms_a_mb'];
$_data['a_kg1'] = $_POST['yycms_a_kg1'];
$_data['a_kg2'] = $_POST['yycms_a_kg2'];
$_data['a_ggkg'] = $_POST['yycms_a_ggkg'];
$_data['a_user_user'] = $_POST['yycms_a_user'];
$_data['a_user_pass'] = $_POST['yycms_a_pass'];
	$str = arrtoinsert($_data);
global $mysqli;
$gametype = $mysqli->insert('yycms_pintai',$str[0], $str[1]);
if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '添加成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '添加失败'));
	}
}
function wxtj()
{
$query = mysql_query("select wx_id from yycms_wx where wx_pingtai=".$_POST['yycms_wx_id']."");
if(mysql_fetch_array($query)){
return json_encode(array('code' => '400', 'msg' => '此代理微信公众号已经添加无需添加'));
}
	$_data['wx_pingtai'] = $_POST['yycms_wx_id'];
	$_data['wx_url'] = $_POST['yycms_wx_url'];
	$_data['wx_ts'] = $_POST['yycms_wx_ts'];
	$_data['wx_appid'] = $_POST['yycms_wx_appid'];
	$_data['wx_appsecret'] = $_POST['wx_appsecret'];
	$_data['wx_token'] = $_POST['yycms_wx_token'];
	$_data['wx_hf'] = $_POST['yycms_wx_hf'];
	$str = arrtoinsert($_data);
global $mysqli;
$gametype = $mysqli->insert('yycms_wx',$str[0], $str[1]);
if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '添加成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '添加失败'));
	}
}
function dlsc()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_pintai','where id = ' . $_POST['id'] . '');
return json_encode(array('code' => '200', 'msg' => '删除成功'));
}
function lysc()
{
global $mysqli;
if($_POST['id']==''){	
return json_encode(array('code' => '400', 'msg' => '请至少选中一项'));
}
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	switch ($_POST['execute_method']) {
		case 'status':
		$gametype = $mysqli->update('yycms_ly', 'ly_sh = 1 where ly_id in (' . $id . ')');		
		break;
		case 'delete':
			$gametype = $mysqli->shanchu('yycms_ly','where ly_id in (' . $id . ')');
			break;
		default:
			return json_encode(array('code' => '400', 'msg' => '请选择要执行的操作'));
	}
	mysql_query($sql);
	return json_encode(array('code' => '200', 'msg' => '执行成功'));
	}
function zfxg()
{
	$_data['zf_kg'] = $_POST['yycms_zf_kg'];
	$_data['zf_pay'] = $_POST['yycms_zf_pay'];
	$_data['zf_user'] = $_POST['yycms_zf_user'];
	$_data['zf_pass'] = $_POST['yycms_zf_pass'];
	global $mysqli;
    $gametype = $mysqli->update('yycms_shoufei', '' . arrtoupdate($_data) . '');
	if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function ylxg()
{
	$_data['yl_name'] = $_POST['yl_name'];
	$_data['yl_url'] = $_POST['yl_url'];
	global $mysqli;
    $gametype = $mysqli->update('yycms_yl', '' . arrtoupdate($_data) . ' where yl_id = ' . $_POST['yy_id'] . '');
	if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function yltj()
{
$_data['yl_url'] = $_POST['yl_url'];
$_data['yl_name'] = $_POST['yl_name'];
$str = arrtoinsert($_data);
global $mysqli;
$gametype = $mysqli->insert('yycms_yl',$str[0], $str[1]);
if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '添加成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '添加失败'));
	}
}
function ylsc()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_yl','where yl_id = ' . $_POST['yl_id'] . '');
return json_encode(array('code' => '200', 'msg' => '删除成功'));
}
function sckms(){//卡密生成
	$title = $_POST['yycms_km_sj'];//套餐时间
	$weishu = $_POST['yycms_km_ws'];//位数
	$num = $_POST['yycms_km_sl'];//数量
	if(empty($_POST['yycms_km_dl'])){$kmdl="0";}else{$kmdl=$_POST['yycms_km_dl'];}
	$kmbs =  mt_rand(1,999);
	//$time = time();
	$_data['name'] = $_POST['yycms_km_name'];
	//$_data['pass'] = time();
	$_data['sl'] = $_POST['yycms_km_sl'];
	$_data['tc'] = $_POST['yycms_km_sj'];
	$_data['bs'] = $kmbs;
	//$_data['dl'] = $kmdl;
	$str = arrtoinsert($_data);
	$sql = 'insert into yycms_kmadd (' . $str[0] . ') values (' . $str[1] . ')';
	mysql_query($sql);
	function getkm($_var_0 = 32)
	{
		$_var_1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$_var_2 = strlen($_var_1);
		$_var_3 = '';
		for ($_var_4 = 0; $_var_4 < $_var_0; $_var_4++) {
			$_var_3 .= $_var_1[mt_rand(0, $_var_2 - 1)];
		}
		return $_var_3;
	}
	for ($i = 0; $i < $num; $i++) {
		$km = getkm($weishu);
		$SQL = "INSERT INTO `yycms_km` (`km_id`, `km_name`, `km_tc`, `km_zt`, `km_syz`, `km_bs`, `km_dl`) VALUES (NULL, '{$km}', '{$title}', '0', '0', '{$kmbs}', '{$kmdl}')";
		mysql_query($SQL);
	}
	//$sql = "INSERT INTO `mkcms_user_cardclass` (`uniacid`,`title`, `card_id`, `num`, `userid`, `day`) VALUES ('{$uniacid}','{$title}', '{$card_id}', '{$num}', '{$userid}', '{$day}')";
	//mysql_query($sql);
	mysql_close();
    return json_encode(array('code' => 200, 'msg' => '生成卡密成功，一共生成 ' . $num . ' 张卡密'));
}
function kmzsc()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_km','where km_bs = ' . $_POST['bs'] . '');
$gametype1 = $mysqli->shanchu('yycms_kmadd','where bs = ' . $_POST['bs'] . '');
	return json_encode(array('code' => '200', 'msg' => '删除成功'));
	}
function kmsc()
{
if($_POST['id']==''){	
return json_encode(array('code' => '400', 'msg' => '请至少选中一项'));
}
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	switch ($_POST['execute_method']) {
		case 'delete':
			global $mysqli;
            $gametype = $mysqli->shanchu('yycms_km','where km_id in (' . $id . ')');
			break;
		default:
			return json_encode(array('code' => '400', 'msg' => '请选择要执行的操作'));
	}
	return json_encode(array('code' => '200', 'msg' => '删除成功'));
	}
function spplsc()
{
if($_POST['id']==''){	
return json_encode(array('code' => '400', 'msg' => '请至少选中一项'));
}
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}
	switch ($_POST['execute_method']) {
		case 'delete':
			global $mysqli;
            $gametype = $mysqli->shanchu('yycms_vod','where b_id in (' . $id . ')');
			break;
		default:
			return json_encode(array('code' => '400', 'msg' => '请选择要执行的操作'));
	}
	return json_encode(array('code' => '200', 'msg' => '删除成功'));
	}
function yhtj()
{
$b_name = isset($_POST['yycms_user_add']) ? trim($_POST['yycms_user_add']) : '';
$b_pass = md5(trim($_POST['yycms_poss_add']));
$query = mysql_query("select b_id from yycms_user where b_user='$b_name'");
if(mysql_fetch_array($query)){
return json_encode(array('code' => '400', 'msg' => '用户名存在'));
}
$yuming = $_SERVER['HTTP_HOST'];
$sql_jc = mysql_query("select * from yycms_pintai where a_url='$yuming'");
$row_jc   = mysql_fetch_array($sql_jc);
$hxlpintai_id = $row_jc['id'];
$data['b_pingtai'] = $hxlpintai_id;
$data['b_user'] = $b_name;
$data['b_pass'] =$b_pass;
$data['b_tg'] ='0';
$data['b_hy'] =$_POST['yycms_hy_add'];
$data['b_jf'] =$_POST['yycms_jf_add'];
$data['b_start'] =date('Y-m-d h:i:s', time());
$data['b_type'] =$_POST['yycms_type_add'];
$str = arrtoinsert($data);
global $mysqli;
$gametype = $mysqli->insert('yycms_user',$str[0], $str[1]);
if (!!$gametype) {
return json_encode(array('code' => '200', 'msg' => '添加成功'));
}else{
return json_encode(array('code' => '400', 'msg' => '添加失败'));
}	
}
function yhxg()
{
	global $mysqli;
	$_data['b_hy'] =$_POST['yycms_hy_add'];
	$_data['b_user'] = $_POST['yycms_user_add'];
	$_data['b_jf'] =$_POST['yycms_jf_add'];
	$_data['b_type'] =$_POST['yycms_type_add'];
	$gametype = $mysqli->select1(0, 1, '*', 'yycms_user', 'where b_id = ' . $_POST['yycms_id_add'] . '');
	if (!!$gametype) {
		if ($_POST['yycms_poss_add'] != $gametype['b_pass']) {
			$_data['b_pass'] = md5($_POST['yycms_poss_add']);
		} else {
			$_data['b_pass'] = $_POST['yycms_poss_add'];
		}
	}
    $gametype = $mysqli->update('yycms_user', '' . arrtoupdate($_data) . ' where b_id = ' . $_POST['yycms_id_add'] . '');
	if (!!$gametype) {
		return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
		return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function tpsc()
{
$file = $_FILES['file'];//得到传输的数据
//得到文件名称
$name = $file['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1)); //得到文件类型，并且都转化成小写
$allow_type = array('jpg','jpeg','gif','png'); //定义允许上传的类型
//判断文件类型是否被允许上传
if(!in_array($type, $allow_type)){
    //如果不被允许，则直接停止程序运行
    return ;
}
//判断是否是通过HTTP POST上传的
if(!is_uploaded_file($file['tmp_name'])){
    //如果不是通过HTTP POST上传的
    return ;
}
$upload_path = "/uploadfile/image/".date('Ymdhis', time()).'.'.$type;//上传文件的存放路径
$filename = $_SERVER['DOCUMENT_ROOT'].$upload_path;//上传文件的存放路径
//开始移动文件到相应的文件夹
if(move_uploaded_file($file['tmp_name'],$filename)){
    echo json_encode(array('code' => 1,'msg' => '上传成功','data' => array('path' => $upload_path)));
}else{
    echo json_encode(array('code' => 0,'msg' => '上传失败','data' => array('path' => $upload_path)));
}	
}
function tjhd()
{
$data['title'] = $_POST['title'];
$data['picpath'] = $_POST['picpath'];
$data['link'] = $_POST['link'];
$data['sort'] = $_POST['sort'];
$data['create_time'] = time();
$str = arrtoinsert($data);
global $mysqli;
$gametype = $mysqli->insert('yycms_slider',$str[0], $str[1]);
if (!!$gametype) {
return json_encode(array('code' => '200', 'msg' => '添加成功'));
}else{
return json_encode(array('code' => '400', 'msg' => '添加失败'));
}	
}
function xghd()
{
$data['title'] = $_POST['title'];
$data['picpath'] = $_POST['picpath'];
$data['link'] = $_POST['link'];
$data['sort'] = $_POST['sort'];
global $mysqli;
$gametype = $mysqli->update('yycms_slider', '' . arrtoupdate($data) . ' where id = '.$_POST['id'].'');
if (!!$gametype) {
	return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
	return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
function schd()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_slider','where id = ' . $_GET['hdid'] . '');
return json_encode(array('code' => '200', 'msg' => '删除成功'));
}
function scxw1()
{
global $mysqli;
$gametype = $mysqli->shanchu('yycms_news','where id = ' . $_GET['xwid'] . '');
return json_encode(array('code' => '200', 'msg' => '删除成功'));
}
function scxw()
{
if($_POST['id']==''){
return json_encode(array('code' => '400', 'msg' => '请至少选中一项'));
}
	$s = '';
	$id = '';
	foreach ($_POST['id'] as $value) {
		$id .= $s . $value;
		$s = ',';
	}

			global $mysqli;
            $gametype = $mysqli->shanchu('yycms_news','where id in (' . $id . ')');


	return json_encode(array('code' => '200', 'msg' => '删除成功'));
	}
function tjxw()
{
$data['title'] = $_POST['title'];
$data['pic'] = $_POST['pic'];
$data['link'] = $_POST['link'];
$data['content'] = addslashes($_POST['content']);
$data['create_time'] = time();
$str = arrtoinsert($data);
global $mysqli;
$gametype = $mysqli->insert('yycms_news',$str[0], $str[1]);
if (!!$gametype) {
return json_encode(array('code' => '200', 'msg' => '添加成功'));
}else{
return json_encode(array('code' => '400', 'msg' => '添加失败'));
}	
}
function xgxw()
{
$data['title'] = $_POST['title'];
$data['pic'] = $_POST['pic'];
$data['link'] = $_POST['link'];
$data['content'] = addslashes($_POST['content']);
global $mysqli;
$gametype = $mysqli->update('yycms_news', '' . arrtoupdate($data) . ' where id = '.$_POST['id'].'');
if (!!$gametype) {
	return json_encode(array('code' => '200', 'msg' => '修改成功'));
	} else {
	return json_encode(array('code' => '400', 'msg' => '修改失败'));
	}
	}
trim(@extract($_POST));
trim(@extract($_GET));
$a=$yycms;
switch ($a){
	case "tjxw":
        echo tjxw();
        break;
	case "xgxw":
        echo xgxw();
        break;
	case "scxw1":
        echo scxw1();
        break;
     case "scxw":
        echo scxw();
        break;
	case "htdl":
        echo htdl();
        break;
	case "htxgmm":
        echo htxgmm();
        break;
	case "tuichu":
        echo httc();
        break;
    case "xtxg1":
        echo xtxg1();
        break;
	case "xgseo":
        echo xgseo();
        break;
    case "spxg":
        echo spxg();
        break;
	case "sptj":
        echo sptj();
        break;
	case "sclm":
        echo sclm();
        break;
	case "tjlm":
        echo tjlm();
        break;
	case "xglm":
        echo xglm();
        break;
	case "sfsz":
        echo sfsz();
        break;	
	case "ggxg":
        echo ggxg();
        break;	
	case "hyzxxg":
        echo hyzxxg();
        break;
	case "wxtj":
        echo wxtj();
        break;
	case "wxxg":
        echo wxxg();
        break;
	case "tjdl":
        echo tjdl();
        break;
	case "dlsc":
        echo dlsc();
        break;
	case "lysc":
        echo lysc();
        break;
	case "zfxg":
        echo zfxg();
        break;	
	case "ylxg":
        echo ylxg();
        break;	
	case "yltj":
        echo yltj();
        break;	
	case "ylsc":
        echo ylsc();
        break;	
	case "sckms":
        echo sckms();
        break;
    case "kmzsc":
        echo kmzsc();
        break;		
	case "kmsc":
        echo kmsc();
        break;
	case "spplsc":
        echo spplsc();
        break;
	case "yhtj":
        echo yhtj();
        break;
	case "yhxg":
        echo yhxg();
        break;
	case "tpsc":
        echo tpsc();
        break;
	case "tjhd":
        echo tjhd();
        break;
	case "xghd":
        echo xghd();
        break;
	case "schd":
        echo schd();
        break;
	   default:
        echo bc();
}	
?>