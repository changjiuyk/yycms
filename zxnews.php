<?php
include('sava/inc.php');
$dz=$_GET['id'].'/'.$_GET['dz'].'.shtml';
if($_GET['id']=='znzx'){
$row1 = $mysqli->select1(0, 1, '*', 'yycms_news', 'where id = 136');
}else{
$seachh=qwget('https://www.1905.com/news/'.$dz);//获取页面代码
$zz_sxx='#<h1 class="title">(.*)</h1>#';
$zz_nr='#<!--插入关联图集结束-->[\s\S]+?<!-- 分页 start-->#';//内容
$ke='#<meta content="(.*)" name="keywords" />#';
$des='#<meta content="(.*)" name="description" />#';
preg_match_all($zz_sxx,$seachh,$sarrr);//标题
preg_match_all($zz_nr,$seachh,$sarrrr);//内容
preg_match_all($ke,$seachh,$sarrrr1);//
preg_match_all($des,$seachh,$sarrrr2);//
$onee=$sarrr[1];//标题
$onebt=$sarrrr[0];//内容
$ks=$sarrrr1[1];//
$des=$sarrrr2[1];//
$string = $onebt[0];
$string = strip_tags($string, '<p><img>');
}
include('templets/'.$yycms_a_mb.'/zxnews.php');
?>