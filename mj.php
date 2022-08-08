<?php
include('sava/inc.php');
if($_GET['cid']==""){$cid='0';}else{$cid=$_GET['cid'];}
if($_GET['page']==""){$page='0';}else{$page=$_GET['page'];}
$urlmj=$yycmszyjx[0].'?ac=videolist&t='.$cid.'&pg='.$page;
if(empty($cid) and empty($page)){
$path=yycms_ROOT."cache/mj/";
if (!is_dir($path)){
mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
}
if($yycms_a_hckg == '1'){
$gxpd=time()-filemtime($path.md5($urlmj));
if($gxpd>$yycms_a_hcsj*60*60){
$data=qwget($urlmj);	
file_put_contents($path.md5($urlmj),gzdeflate($data));
}
$xmldata=gzinflate(file_get_contents($path.md5($urlmj)));
}else{
$xmldata=qwget($urlmj);
}
}else{
$xmldata=qwget($urlmj);
}
$postObj = simplexml_load_string($xmldata,'SimpleXMLElement',LIBXML_NOCDATA);
$weatherobj=$postObj->list;
$jsonStr = json_encode($weatherobj);
$jsonArray = json_decode($jsonStr,true);
include('templets/'.$yycms_a_mb.'/mj.php');
?>