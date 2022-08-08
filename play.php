<?php
include('sava/inc.php');
include('data/playurl.php');
switch($yplx){
    case 'dianying';//表示电影资源
	     $lx="高清";//可以自己修改自己喜欢的
         break;
    case 'tv';//表示电视剧源
         $lx="全集";//可以自己修改自己喜欢的
         break;
    case 'zongyi';//表示综艺
         $lx="综艺";//可以自己修改自己喜欢的
         break;
    case 'dongman';//表示动漫
         $lx="动漫";//可以自己修改自己喜欢的
         break;
         default ;
         $lx="";//此处不要动,保持为空
         break;
}
function bftitle()
{
global $lx;
global $bftitlezl;
global $yycms_a_name;
global $yycms_s_bftitle;
eval("\$str = \"$yycms_s_bftitle\";");
echo $str;
}
function bfkeywords()
{
global $lx;
global $bftitlezl;
global $yycms_s_bfkeywords;
eval("\$str = \"$yycms_s_bfkeywords\";");
echo $str;
}
function bfdescription()
{
global $lx;
global $bftitlezl;
global $bfjjzl;
$bfjjzl=mb_substr(preg_replace("/<(.*?)>/si", "", $bfjjzl ),0,120,'utf-8').'...';
global $yycms_s_bfdescription;
eval("\$str = \"$yycms_s_bfdescription\";");
echo $str;
}
$bfypurldz=str_replace('" rel="nofollow',"",$bfypurldz);
if($yycms_a_kg2=='1'){
include('templets/'.$yycms_a_mb.'/detail.php');
}else{
$qqsp=explode(',',$yycms_a_qqsp);
for($ii=0;$ii<count($qqsp);$ii++)
{
if($bftitlezl==$qqsp[$ii]){
//提示错误值
alert_href('由于侵权,视频已经下架,谢谢!','/index.html');	
}
}
include('templets/'.$yycms_a_mb.'/play.php');
}
?>