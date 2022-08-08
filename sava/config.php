<?php
$yuming = $_SERVER['HTTP_HOST'];
$gametype = $mysqli->select1(0, 1, '*', 'yycms_pintai', 'WHERE id="1"');
$yycms_a_bt = $gametype['a_bt'];//网站名字
$yycms_a_name = $gametype['a_name'];//网站名字
$yycms_a_url = $gametype['a_url'];//网站域名
$yycms_a_keywords = $gametype['a_keywords'];//网站关键词
$yycms_a_description = $gametype['a_description'];//网站关键描述
$yycms_a_bfqgg = $gametype['a_bfqgg'];//播放器广告
$yycms_a_jzt = $gametype['a_jzt'];//加载图
$yycms_a_hckg = $gametype['a_hckg'];//缓存开关
$yycms_a_hcsj = $gametype['a_hcsj'];//缓存时间
$yycms_a_logo = $gametype['a_logo'];//网站logo
$yycms_a_fhkg = $gametype['a_fhkg'];//仿红开关
$yycms_a_mrjx = $gametype['a_mrjx'];//默认解析
$yycms_a_jxjk = $gametype['a_jxjk'];//解析线路
$yycms_a_zyjk = $gametype['a_zyjk'];//资源线路
$yycmszyjx=explode("\r\n",$yycms_a_zyjk);
$yycms_a_ggkg = $gametype['a_ggkg'];//公告开关
$yycms_a_gg = $gametype['a_gg'];//公告内容
$yycms_a_qqsp = $gametype['a_qqsp'];//视频侵权
$yycms_a_bq = $gametype['a_bq'];//底部版权
$yycms_a_tj = $gametype['a_tj'];//统计内容
$yycms_a_dbdh = $gametype['a_dbdh'];//底部导航
$yycms_a_dylb = $gametype['a_dylb'];//电影轮播
$yycms_a_dst = $gametype['a_dst'];//打赏二维码
$yycms_a_sfkg = $gametype['a_sfkg'];//收费开关
$yycms_a_mb = $gametype['a_mb'];//模板
$yycms_a_kg1 = $gametype['a_kg1'];//抢先
$yycms_s_bftitle = $gametype['s_bftitle'];
$yycms_s_bfkeywords = $gametype['s_bfkeywords'];
$yycms_s_bfdescription = $gametype['s_bfdescription'];
$yycms_a_gjcpb = $gametype['a_gjcpb'];
$yycms_a_gjcth = $gametype['a_gjcth'];
$yycms_a_mjgjc = $gametype['a_mjgjc'];
$yycms_a_kg2 = $gametype['a_kg2'];
$a_mjgjc=explode(',',$yycms_a_mjgjc);
$dzbq=$gametype['a_zdyurl'];
$a_mjlm = $gametype['a_mjlm'];
function YYCMSRS(){
$path=yycms_ROOT."cache/index/";
if (!is_dir($path)){
mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
}
$url='http://yingshi-stream.2345cdn.net/dypcimg/top/cache/headRecommandInfo.js';
$path=yycms_ROOT."cache/index/";
if (!is_dir($path)){
mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
}
$gxpd=time()-filemtime($path.'sstj.php');
if($gxpd>20*60*60){
$data=gett($url);
preg_match_all('#var head_keyword=(.*);#', $data, $matches);
file_put_contents($path.'sstj.php',$matches[1][0]);
$syurl=$matches[1][0];
}else{
$syurl=file_get_contents($path.'sstj.php');
}
return json_decode($syurl,true);
}
?>