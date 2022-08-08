<?php
include('sava/inc.php');
$url='http://www.happyjuzi.com/star-works-'.$_GET['id'].'/';
$data=gett($url);
preg_match_all('#<div class="wrap_works">[\s\S]+(.*)</div>#',$data,$dy);//
preg_match_all('#<img src="(.*)" class="i_starimg_starindex" alt="(.*)" title="(.*)"/>#',$data,$name);
preg_match_all('#<p class="title_slide_works">(.*)</p>#',$dy[0][0],$title);
preg_match_all('#<img src="(.*?)" alt="(.*?)" title="(.*?)"/>#',$dy[0][0],$img);
preg_match_all('#<p class="detail_slide_works">主演:(.*)</p>#',$dy[0][0],$zy);
$ti=$title[1];
//print_r($title);
include('templets/'.$yycms_a_mb.'/mxk.php');
?>