<?php
include('../sava/inc.php');
$roww = $row = $mysqli->select1(0, 1, '*', 'yycms_shoufei', '');
/* *
 * 配置文件
 */
 if ($roww['zf_pay']==1){
$payurl='http://pay.qiyiwl.cn/';	 
 }
  if ($roww['zf_pay']==2){
$payurl='http://pay.qqlepay.cn/';	 
 }
  if ($roww['zf_pay']==3){
$payurl='http://pay.sddyun.cn/';	 
 }
  if ($roww['zf_pay']==4){
$payurl='http://pay.lxypay.cn/';	 
 }
  if ($roww['zf_pay']==5){
$payurl='https://pay.v8jisu.cn/';	 
 }
   if ($roww['zf_pay']==6){
$payurl='http://pay.22sk.cn/';	 
 }
   if ($roww['zf_pay']==7){
$payurl='http://pay.hackwl.cn/';	 
 }
 if ($roww['zf_pay']==8){
$payurl='http://api2.yy2169.com:52888/creat_order/';	 
 }
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//商户ID
$alipay_config['partner']		= ''.$roww['zf_user'].'';

//商户KEY
$alipay_config['key']			= ''.$roww['zf_pass'].'';


//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


//签名方式 不需修改
$alipay_config['sign_type']    = strtoupper('MD5');

//字符编码格式 目前支持 gbk 或 utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';

//支付API地址
$alipay_config['apiurl']    = ''.$payurl.'';
?>