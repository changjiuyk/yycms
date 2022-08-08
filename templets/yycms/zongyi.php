<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>追综艺-最新综艺-好看综艺-最新综艺排行-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="追综艺,最新综艺,好看综艺,最新综艺排行">
<meta name="description" content="为你提供最新最全综艺节目">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php
$zy="active";
include 'header.php';
$yycmsfl="zongyi";
include 'data/list.php';
if(empty($_GET['cat'])){$cs1="all";}else{$cs1=$_GET['cat'];}
if(empty($_GET['area'])){$cs2="all";}else{$cs2=$_GET['area'];}
if(empty($_GET['year'])){$cs3="all";}else{$cs3=$_GET['year'];}
if(empty($_GET['rank'])){$cs4="all";}else{$cs4=$_GET['rank'];}
$cs5=intval($_GET['pageno']);//页数
if($cs5=='')$cs5=1;
?>
<div class="container">
    <?php if(!$records[0]['gg_gg10']==""){
echo '<div class="row"> 
	   '.$records[0]['gg_gg10'].'
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
            <use xlink:href="#icon-qita"></use>
            </svg>综艺</h3> 

     </div> 
    </div> 
    <div class="myui-panel_bd"> 
     <div class="slideDown-box"> 
      <ul class="myui-screen__list nav-slide clearfix up-ul1"> 
       <li> <a class="text-muted btn">类型</a> </li> 
<li><a class="btn btn-warm" href='zy_all-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='zy_llxxuanxiu-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>选秀</a></li>
<li><a class="btn" href='zy_llxqinggan-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>情感</a></li>
<li><a class="btn" href='zy_llxfangtan-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>访谈</a></li>
<li><a class="btn" href='zy_llxgaoxiao-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>搞笑</a></li>
<li><a class="btn" href='zy_llxyouxi-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>游戏</a></li>
<li><a class="btn" href='zy_llxzhichang-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>职场</a></li>
<li><a class="btn" href='zy_llxyule-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>娱乐</a></li>
<li><a class="btn" href='zy_llxzhenrenxiu-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>真人秀</a></li>
<li><a class="btn" href='zy_llxshenghuo-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>生活</a></li>
<li><a class="btn" href='zy_llxtiyu-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>体育</a></li>
<li><a class="btn" href='zy_llxshenhua-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>盛会</a></li>
<li><a class="btn" href='zy_llxcaijing-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>财经</a></li>
<li><a class="btn" href='zy_llxqinzi-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>亲子</a></li>
<li><a class="btn" href='zy_llxjishi-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>纪实</a></li>
<li><a class="btn" href='zy_llxtuokouxiu-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>脱口秀</a></li>
<li><a class="btn" href='zy_llxmeishi-<?php echo $cs2 ?>-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>美食</a></li>
      </ul> 
      <ul class="myui-screen__list nav-slide clearfix up-ul4" data-align="left">
       <li> <a class="btn text-muted">地区</a> </li> 
<li><a class="btn btn-warm" href="zy_<?php echo $cs1 ?>-all-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html">全部</a></li>
<li><a class="btn" href='zy_<?php echo $cs1 ?>-dqdalu-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>大陆</a></li>
<li><a class="btn" href='zy_<?php echo $cs1 ?>-dqgangtai-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>港台</a></li>
<li><a class="btn" href='zy_<?php echo $cs1 ?>-dqrihan-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>日韩</a></li>
<li><a class="btn" href='zy_<?php echo $cs1 ?>-dqoumei-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>欧美</a></li>
<li><a class="btn" href='zy_<?php echo $cs1 ?>-dqqita-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>其他</a></li>
      </ul>
 <ul class="myui-screen__list nav-slide clearfix up-ul3" data-align="left">
    <li><a class="btn text-muted">频道</a> </li> 
<li><a class="btn btn-warm" href='zy_all-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>全部</a></li>
<li><a class="btn" href='zy_ldthunanweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>湖南卫视</a></li>
<li><a class="btn" href='zy_ldtjiangsuweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>江苏卫视</a></li>
<li><a class="btn" href='zy_ldtzhejiangweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>浙江卫视</a></li>
<li><a class="btn" href='zy_ldtdongfangweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>东方卫视</a></li>
<li><a class="btn" href='zy_ldtanhuiweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>安徽卫视</a></li>
<li><a class="btn" href='zy_ldtcctv1-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>CCTV1</a></li>
<li><a class="btn" href='zy_ldtcctv2-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>CCTV2</a></li>
<li><a class="btn" href='zy_ldtbeijingweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>北京卫视</a></li>
<li><a class="btn" href='zy_ldtshandongweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>山东卫视</a></li>
<li><a class="btn" href='zy_ldttianjinweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>天津卫视</a></li>
<li><a class="btn" href='zy_ldthenanweishi-<?php echo $cs4 ?>-<?php echo $cs5 ?>.html'>河南卫视</a></li>
      </ul> 
     </div> 
     <ul class="myui-screen__list nav-slide clearfix  up-ul5"> 
      <li> <a class="btn text-muted">排序</a> </li>
<?php
if(empty($year)){
echo '<li><a class="btn btn-warm" href="zy_'.$cs3.'-all-'.$cs5.'.html">最热</a></li><li><a class="btn" href="zy_'.$cs3.'-pxscore-'.$cs5.'.html">最新</a></li>';
}else{
echo '<li><a class="btn btn-warm" href="zy_'.$cs3.'-all-1.html">最热</a></li><li><a class="btn" href="zy_'.$cs3.'-pxscore-1.html">最新</a></li>';
}
?>
      
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
        <a class="myui-vodlist__thumb lazyload" href="/<?php echo $dzbq;?>/<?php echo ztcfurl($yycmsys['yyurl']);?>.html" target="_blank" title="<?php echo $yycmsys['yyname']; ?>" data-original="<?php echo $yycmsys['yypic']; ?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-tag pic-tag-top" style="background-color: #ef8211;"><?php echo $yycmsys['yspf']; ?></span> 
		<span class="pic-text text-right"></span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="/<?php echo $dzbq;?>/<?php echo ztcfurl($yycmsys['yyurl']);?>.html" target="_blank" title="<?php echo $yycmsys['yyname']; ?>"><?php echo $yycmsys['yyname']; ?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs"><?php echo $yycmsys['yszy']; ?></p> 
        </div> 
       </div>
        </li> 
<?php 
}
?>
<?php
if(count($yycms['yycmsys']) <=0 ){ echo '<p style="text-align:center;color: #ffff;font-size: 20px;background: #bd2a437d;padding:11px 8px;border-radius: 2px;"><span style="color:#FFFF;">
                没找到符合条件的综艺，请尝试其他分类！</span></p></div>';}	   
?>
	   <!-- 列表-->
     </ul> 
    </div> 
   </div> 
  </div>		
<ul class="myui-page text-center clearfix">
<?php
if(empty($year)){
?>
<?php echo getPagezy($cs5,$total,'zy','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $cs5?>/<?php echo $total;?>页</a></li>		
<?php
}else{
?>
<?php echo getPagezy($cs5,$total,'zy','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $cs5?>/<?php echo $total;?>页</a></li>		
<?php 
}
?>
</ul>
<!-- 翻页-->		
			
        </div>
    </div>

<?php
include 'footer.php';
?>	
</body>
</html>		