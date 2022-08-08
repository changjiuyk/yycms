<?php
include('sava/inc.php');
include('sava/shoufei.php');
$id=$_GET['id'];
$zy=$_GET['zd'];
if (!isset($id)){
echo '暂无影片' . "<br/>";
exit;
}
switch($zy){
    case 'zd1';
	     $zd=$yycmszyjx[0].'?ac=videolist';
		 $bfq='';
         break;
    case 'zd2';
     	 $zd=$yycmszyjx[1].'?ac=videolist';
		 $bfq='';
         break;
    case 'zd3';
    	 $zd=$yycmszyjx[2].'?ac=videolist';
		 $bfq='';
         break;
	case 'zd4';
    	 $zd=$yycmszyjx[3].'?ac=videolist';
		 $bfq='';
         break;
	case 'zd5';
    	 $zd=$yycmszyjx[4].'?ac=videolist';
		 $bfq='';
         break;
         default ;
         $zd=$yycmszyjx[0].'?ac=videolist';
		 $bfq='';
}
if($bfq==""){$qwbfy='../ck/index.php?url=';}else{$qwbfy=$bfq;}
$postObj = simplexml_load_string(qwget($zd.'&ids='.$id),'SimpleXMLElement',LIBXML_NOCDATA);
$data=$postObj->list->video;
$jsonStr = json_encode($data);
$qwpla = json_decode($jsonStr,true);
$suArr1 = explode("#",$qwpla['dl']['dd']);
$i=0;
foreach($suArr1 as $k=>$v){
$qwurl = explode("$",$v);
if ($i<1){
$suArr2.= $qwurl[1];
$i ++;}
$yycmsarr[]=array("url"=> $qwurl[1],"name" => $qwurl[0]);
}
if($yycms_a_kg2=='1'){
$yycms_gg_gg11='<a href="/" target="_blank"><img src="/uploadfile/image/ts.jpg" style="width:100%"></a>';
$yycms_a_bfqgg='50000';
}
include('templets/'.$yycms_a_mb.'/qwplay.php');
?>