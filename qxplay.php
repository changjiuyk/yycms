<?php
include('sava/inc.php');
include('sava/shoufei.php');
$rowqx = $mysqli->select1(0, 1, '*', 'yycms_vod', 'where b_id = '.$_GET['play'].'');
if(empty($rowqx)){
	die ('您访问的視頻不存在');
}
$qxk=explode("\r\n",$rowqx['b_url']);
$qxkurl = explode("$",$qxk[0]);

$qqsp=explode(',',$yycms_a_qqsp);
for($i=0;$i<count($qqsp);$i++)
{
if($rowqx['b_name']==$qqsp[$i]){
//提示错误值
alert_href('由于侵权,视频已经下架,谢谢!','/index.html');	
     }	
}
if($yycms_a_kg2=='1'){
$yycms_gg_gg11='<a href="/" target="_blank"><img src="/uploadfile/image/ts.jpg" style="width:100%"></a>';
$yycms_a_bfqgg='50000';
}
include('templets/'.$yycms_a_mb.'/qxplay.php');
?>