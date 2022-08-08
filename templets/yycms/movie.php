<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $nian;?>电影大全-<?php echo $nian;?>电影排行榜-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="<?php echo $nian;?>电影，<?php echo $nian;?>电影大全">
<meta name="description" content="为您提供<?php echo $nian;?>电影排行榜">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
$dy="active";
include 'header.php';
$yycmsfl="dianying";
include 'data/list.php';
if(empty($_GET['cat'])){$cs1="all";}else{$cs1=$_GET['cat'];}
if(empty($_GET['area'])){$cs2="all";}else{$cs2=$_GET['area'];}
if(empty($_GET['year'])){$cs3="all";}else{$cs3=$_GET['year'];}
if(empty($_GET['rank'])){$cs4="all";}else{$cs4=$_GET['rank'];}
$cs5=intval($_GET['pageno']);//页数
if($cs5=='')$cs5=1;
?>
<div class="container">
    <?php if(!$row_jc['gg_gg7']==""){
echo '<div class="row"> 
	   '.$row_jc['gg_gg7'].'
       </div>';	
}
?>
        <div class="row">
<div class="myui-panel myui-panel-bg2 clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_hd"> 
     <div class="myui-panel__head active bottom-line clearfix"> 
      <a class="slideDown-btn more pull-right" href="javascript:;">收起 <i class="fa fa-angle-up"></i></a> 
      <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-luxiang"></use>
            </svg>电影</h3> 
     </div> 
    </div> 
    <div class="myui-panel_bd"> 
     <div class="slideDown-box"> 
      <ul class="myui-screen__list nav-slide clearfix up-ul1" data-align="left">
       <li> <a class="text-muted btn">类型</a> </li> 
<li><a class="btn btn-warm" href='movie_all-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='movie_aiqing-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>爱情</a></li>
<li><a class="btn" href='movie_dongzuo-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>动作</a></li>
<li><a class="btn" href='movie_xiju-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>喜剧</a></li>
<li><a class="btn" href='movie_zhanzheng-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>战争</a></li>
<li><a class="btn" href='movie_kehuan-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>科幻</a></li>
<li><a class="btn" href='movie_juqing-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>剧情</a></li>
<li><a class="btn" href='movie_wuxia-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>武侠</a></li>
<li><a class="btn" href='movie_maoxian-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>冒险</a></li>
<li><a class="btn" href='movie_qiangzhan-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>枪战</a></li>
<li><a class="btn" href='movie_kongbu-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>恐怖</a></li>
<li><a class="btn" href='movie_xuanyi-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>悬疑</a></li>
<li><a class="btn" href='movie_fanzui-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>犯罪</a></li>
<li><a class="btn" href='movie_qihuan-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>奇幻</a></li>
<li><a class="btn" href='movie_donghua-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>动画</a></li>
<li><a class="btn" href='movie_jingsong-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>惊悚</a></li>
<li><a class="btn" href='movie_jingdian-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>经典</a></li>
<li><a class="btn" href='movie_qingchun-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>青春</a></li>
<li><a class="btn" href='movie_wenyi-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>文艺</a></li>
<li><a class="btn" href='movie_guzhuang-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>古装</a></li>
<li><a class="btn" href='movie_lishi-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>历史</a></li>
<li><a class="btn" href='movie_yundong-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>运动</a></li>
      </ul> 
      <ul class="myui-screen__list nav-slide clearfix up-ul2" data-align="left"> 
       <li> <a class="btn text-muted">地区</a> </li> 
<li><a class="btn btn-warm" href='movie_<?php echo $cs1 ?>-all-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-neidi-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>内地</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-meiguo-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>美国</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-xianggang-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>香港</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-taiwam-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>台湾</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-riben-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>日本</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-taiguo-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>泰国</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-yindu-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>印度</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-dongnanyadiqu-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>东南</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-oumeidiqu-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>欧美</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-qita-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>其他</a></li>
      </ul> 
      <ul class="myui-screen__list nav-slide clearfix up-ul3" data-align="left"> 
       <li> <a class="btn text-muted">年份</a> </li> 
<li><a class="btn btn-warm" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-all-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2021-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2021</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2020-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2020</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2019-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2019</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2018-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2018</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2017-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2017</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2016-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2016</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2015-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2015</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2014-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2014</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2013-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2013</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2012-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2012</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-2011-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2011</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-20102000-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2010-2000</a></li>
<li><a class="btn" href='movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-19691800-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>更早</a></li>
      </ul> 
     </div> 
     <ul class="myui-screen__list nav-slide clearfix  up-ul5"> 
      <li> <a class="btn text-muted">排序</a> </li> 
      <li><a class="btn btn-warm" href="movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-<?php echo $cs3 ?>-all-<?php echo $cs5 ?>.html">最热</a></li> 
      <li><a class="btn" href="movie_<?php echo $cs1 ?>-<?php echo $cs2 ?>-all-hits-<?php echo $cs5 ?>.html">最新</a></li> 
     </ul> 
    </div> 
   </div> 
  </div>        	
<!-- 筛选 -->
			
<div class="myui-panel myui-panel-bg clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_bd"> 
     <ul class="myui-vodlist clearfix"> 
<?php
foreach ($yycms['yycmsys'] as $yycmsys){
?>	
      <li class="col-lg-7 col-md-7 col-sm-4 col-xs-3"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb lazyload" href="/<?php echo $dzbq;?>/<?php echo cfurl($yycmsys['yyurl']);?>.html" target="_blank" title="<?php echo $yycmsys['yyname']; ?>" data-original="<?php echo $yycmsys['yypic']; ?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-tag pic-tag-top" style="background-color: #ef8211;"><?php echo $yycmsys['yspf']; ?></span> 
		<span class="pic-text text-right"></span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="/<?php echo $dzbq;?>/<?php echo cfurl($yycmsys['yyurl']);?>.html" target="_blank" title="<?php echo $yycmsys['yyname']; ?>"><?php echo $yycmsys['yyname']; ?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs"><?php echo $yycmsys['yszy']; ?></p> 
        </div> 
       </div>
        </li> 
<?php 
}
?>
<?php
if(count($yycms['yycmsys']) <=0 ){ echo '<p style="text-align:center;color: #ffff;font-size: 20px;background: #bd2a437d;padding:11px 8px;border-radius: 2px;"><span style="color:#FFFF;">
                没找到符合条件的电影，请尝试其他分类！</span></p></div>';}	   
?>
	   <!-- 列表-->
     </ul> 
    </div> 
   </div> 
  </div>
			
<ul class="myui-page text-center clearfix">
<?php echo getPageHtml($cs5,$total,'movie','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $cs5?>/<?php echo $total;?>页</a></li>	
</ul>
<!-- 翻页-->		
			
        </div>
    </div>

<?php
include 'footer.php';
?>
</body>
</html>	