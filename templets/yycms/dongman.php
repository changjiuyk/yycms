<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>热门动漫-最新好看的动漫-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="动漫,最新动漫,热门动漫,好看的动漫,动漫排行榜">
<meta name="description" content="为你提供最新最全动漫">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
$dm="active";
include 'header.php';
$yycmsfl="dongman";
include 'data/list.php';
if(empty($_GET['cat'])){$cs1="all";}else{$cs1=$_GET['cat'];}
if(empty($_GET['area'])){$cs2="all";}else{$cs2=$_GET['area'];}
if(empty($_GET['year'])){$cs3="all";}else{$cs3=$_GET['year'];}
if(empty($_GET['rank'])){$cs4="all";}else{$cs4=$_GET['rank'];}
$cs5=intval($_GET['pageno']);//页数
if($cs5=='')$cs5=1;
?>
<div class="container">
    <?php if(!$records[0]['gg_gg9']==""){
echo '<div class="row"> 
	   '.$records[0]['gg_gg9'].'
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
            <use xlink:href="#icon-shoucang"></use>
            </svg>动漫</h3> 

     </div> 
    </div> 
    <div class="myui-panel_bd"> 
     <div class="slideDown-box"> 
      <ul class="myui-screen__list nav-slide clearfix up-ul1" data-align="left">
       <li> <a class="text-muted btn">类型</a> </li> 
<li><a class="btn btn-warm" href='dm_all-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='dm_ltlxrexue-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>热血</a></li>
<li><a class="btn" href='dm_ltlxaiqing-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>爱情</a></li>
<li><a class="btn" href='dm_ltlxgaoxiao-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>搞笑</a></li>
<li><a class="btn" href='dm_ltlxmeinv-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>美女</a></li>
<li><a class="btn" href='dm_ltlxshaoer-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>少儿</a></li>
<li><a class="btn" href='dm_ltlxqinzi-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>亲子</a></li>
<li><a class="btn" href='dm_ltlxmofa-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>魔法</a></li>
<li><a class="btn" href='dm_ltlxyundong-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>运动</a></li>
<li><a class="btn" href='dm_ltlxjizhan-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>机战</a></li>
<li><a class="btn" href='dm_ltlxkehuan-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>科幻</a></li>
<li><a class="btn" href='dm_ltlxxiaoyuan-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>校园</a></li>
<li><a class="btn" href='dm_ltlxshenhua-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>神话</a></li>
<li><a class="btn" href='dm_ltlxlishi-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>历史</a></li>
<li><a class="btn" href='dm_ltlxjuqing-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>剧情</a></li>
<li><a class="btn" href='dm_ltlxzhanzheng-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>战争</a></li>
<li><a class="btn" href='dm_ltlxjingdian-<?php echo $cs2 ?>-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>经典</a></li>
      </ul> 
      <ul class="myui-screen__list nav-slide clearfix up-ul4" data-align="left">
       <li> <a class="btn text-muted">地区</a> </li> 
<li><a class="btn btn-warm" href='dm_<?php echo $cs1 ?>-all-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-dqdalu-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>内地</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-dqmeiguo-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>美国</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-dqriben-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>日本</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-dqhanguo-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>韩国</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-dqqita-<?php echo $cs3 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>其他</a></li>
      </ul> 
      <ul class="myui-screen__list nav-slide clearfix up-ul3" data-align="left">
       <li> <a class="btn text-muted">年份</a> </li> 
<li><a class="btn btn-warm" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-all-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2021-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2021</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2020-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2020</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2019-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2019</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2018-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2018</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2017-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2017</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2016-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2016</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2015-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2015</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2014-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2014</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2013-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2013</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2012-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2012</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd2011-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2011</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd20102000-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>2010-2000</a></li>
<li><a class="btn" href='dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-nd19991800-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>更早</a></li>
      </ul>  
     </div> 
     <ul class="myui-screen__list nav-slide clearfix  up-ul5" data-align="left">
      <li> <a class="btn text-muted">排序</a> </li> 
      <li><a class="btn btn-warm" href="dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-<?php echo $cs3 ?>-all-<?php echo $cs5 ?>.html">最热</a></li> 
      <li><a class="btn" href="dm_<?php echo $cs1 ?>-<?php echo $cs2 ?>-<?php echo $cs3 ?>-pxscore-<?php echo $cs5 ?>.html">最新</a></li> 
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
                没找到符合条件的动漫，请尝试其他分类！</span></p></div>';}	   
?>
	   <!-- 列表-->
     </ul> 
    </div> 
   </div> 
  </div>
			
	<ul class="myui-page text-center clearfix">
<?php echo getPageHtml($cs5,$total,'dm','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $cs5?>/<?php echo $total;?>页</a></li>	
</ul>
<!-- 翻页-->		
			
        </div>
    </div>

<?php
include 'footer.php';
?>
</body>
</html>	