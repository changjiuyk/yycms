<?php
include('sava/inc.php');
if(empty($_GET['zn'])){
$page=intval($_GET['page']);
if($page==''){$page=1;}
$seach='https://www.1905.com/list-p-catid-220.html?page='.$page;
mkdir('./cache');
mkdir('./cache/zixun');
$gxpd=time()-filemtime('./cache/zixun/'.md5($seach));
if($gxpd>3*60*60){
$rurl=qwget($seach);
file_put_contents('./cache/zixun/'.md5($seach),gzdeflate($rurl));
}
$rurl=gzinflate(file_get_contents('./cache/zixun/'.md5($seach)));
$szz='#<a href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" target="_blank" class="pic-url picHover" title="(.*?)">[\s\S]+?<img src="(.*)" data-original="(.*?)"#';
$szz1='#<p class="des">(.*?)</p>#';
$sj='#<span class="timer fl">(.*?)</span>#';
preg_match_all($szz,$rurl,$sarr);
preg_match_all($szz1,$rurl,$sarr1);
preg_match_all($sj,$rurl,$sarr2);
$one=$sarr[3];//标题
$one1=$sarr[1];//地址
$one2=$sarr[2];//地址
$one3=$sarr[5];//图片
$nr=$sarr1[1];//内容
$sj=$sarr2[1];//时间
}else{
$vodqxk = $mysqli->select1(0, 3, '*', 'yycms_news', 'order by id desc');
$pager = page_handle('page',12,$vodqxk['count']);
$yycmsnews = $mysqli->select1(0, 4, '*', 'yycms_news', 'order by id desc limit '.$pager[0].','.$pager[1].'');
}
include('templets/'.$yycms_a_mb.'/zx.php');
?>