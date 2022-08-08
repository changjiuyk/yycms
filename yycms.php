<?php
include('sava/inc.php');
include('sava/zby.php');
$url='https://kan.2345.com/';
$path=yycms_ROOT."cache/index/";
if (!is_dir($path)){
mkdir(iconv("UTF-8", "GBK", $path),0777,true); 
}
if($yycms_a_hckg == '1'){
$gxpd=time()-filemtime($path.md5($url));
if($gxpd>$yycms_a_hcsj*60*60){
$data=gett($url);	
file_put_contents($path.md5($url),gzdeflate($data));
}
$syurl=gzinflate(file_get_contents($path.md5($url)));
}else{
$syurl=gett($url);
}
preg_match('#<div class="conList">[\s\S]+?<div class="pagination-wrap">#', $syurl, $hdp2);//幻灯片
preg_match_all('#<a href="(.*?)"[\s\S]+?<img src="" data-src="(.*?)" alt="(.*?)"#', $hdp2[0], $hdp);//幻灯片
$hdpurl=$hdp[1];
$hdpimg=$hdp[2];
preg_match_all('#<span class="sMark">热播电视剧</span>[\s\S]+?<span class="sMark">电视剧TOP</span>#', $syurl, $sydsj);//电视剧
preg_match_all("#<li data-hover='(.*?)'>#", $sydsj[0][0], $sydsjdz);//0
preg_match_all('#<div class="season">(.*?)</div>#', $sydsj[0][0], $sydsjpf);//1
preg_match_all('#<span class="sMark">热播电影</span>[\s\S]+?<span class="sMark">电影TOP</span>#', $syurl, $sydy);//电影
preg_match_all("#<li data-hover='(.*?)'>#", $sydy[0][0], $sydydz);
preg_match_all('#<div class="season">(.*?)</div>#', $sydy[0][0], $sydypf);//1
preg_match_all('#<span class="sMark">综艺强档</span>[\s\S]+?<span class="sMark">综艺TOP</span>#', $syurl, $syzy);//电影
preg_match_all("#<li data-hover='(.*?)'>#", $syzy[0][0], $syzydz);
preg_match_all('#<div class="season">(.*?)</div>#', $syzy[0][0], $syzypf);//1
preg_match_all('#<span class="sMark">热播动漫</span>[\s\S]+?<span class="sMark">动漫TOP</span>#', $syurl, $sydm);//电影
preg_match_all("#<li data-hover='(.*?)'>#", $sydm[0][0], $sydmdz);
preg_match_all('#<div class="season">(.*?)</div>#', $sydm[0][0], $sydmpf);//1
include('templets/'.$yycms_a_mb.'/index.php');
?>