<?php
include('sava/inc.php');
$q=$_GET['wd'];
$seach=gett("https://so-kan.2345.com/search_".urlencode($q)."/");

preg_match_all('#<h2><a href="(.*?)" target="_blank" title="(.*?)"#',$seach,$sarr);

preg_match_all('#<img src=(.*?) data-src="(.*?)" alt="(.*?)" title="(.*?)" width="180" height="240">#',$seach,$img);

preg_match_all('#<p class="pIntro[\s\S]+?"><span class="sPart">(.*?)</span>#',$seach,$jj);



$url=$sarr[1];//连接
$one=$sarr[2];//标题
$tp=$img[2];//图片
$jianjie=$jj[1];//简介

//print_r($one);
//$mingxing4 =$sarr9[1];
//include 'data/bangdan.php';
include('templets/'.$yycms_a_mb.'/search.php');
?>