<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欧美剧-港台剧-日韩剧排行榜-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="欧美剧,港台剧,海外剧,日韩剧排行榜">
<meta name="description" content="为您提供最新最全的欧美剧,港台剧,海外剧,日韩剧">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php
$mj="active";
include 'header.php';
?>
<div class="container">
        <div class="row">
<div class="myui-panel myui-panel-bg2 clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_hd"> 
     <div class="myui-panel__head active bottom-line clearfix"> 
      <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-dianzan"></use>
            </svg>港台剧</h3> 

     </div> 
    </div> 
    <div class="myui-panel_bd"> 
     <div class="slideDown-box"> 
      <ul class="myui-screen__list nav-slide clearfix up-ul1" data-align="left"> 
       <li> <a class="text-muted btn">类型</a> </li> 
	   <li><a class="btn btn-warm" href='./mj-0-1.html'>全部</a></li>
<?php
$data=json_decode($a_mjlm,true);
foreach($data as $k=>$v){
echo '<li><a class="btn" href="./mj-'.$v['id'].'-1.html">'.$v['lx'].'</a></li>';
}
?>
      </ul> 
     </div> 
    </div> 
   </div> 
  </div>   
<!-- 筛选 -->			
<div class="myui-panel myui-panel-bg clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_bd"> 
     <ul class="myui-vodlist clearfix"> 
<?php
foreach($jsonArray['video'] as $x=>$vod){
if($vod['type'] == '韩国美女' || $vod['type'] == '写真美女' || $vod['type'] == '展会美女'|| $vod['type'] == '论理片'|| $vod['type'] == '伦理片'|| $vod['type'] == '伦理'|| $vod['type'] == '论理'){
continue;
}
?>
<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb lazyload" href="/qwplay-zd1-<?php echo $vod['id'];?>.html" target="_blank" title="<?php echo $vod['name'];?>" data-original="<?php echo $vod['pic'];?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;"><?php echo $vod['year'];?></span>
		<span class="pic-text text-right"><?php echo $vod['type'];?></span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="/qwplay-zd1-<?php echo $vod['id'];?>.html" target="_blank" title="<?php echo $vod['name'];?>"><?php echo $vod['name'];?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs">主演:<?php echo $vod['actor'];?></p> 
        </div>
       </div>
        </li>
<?php
 }
 ?>
     </ul> 
    </div> 
   </div> 
  </div>		
<ul class="myui-page text-center clearfix">
<?php echo pagee_show($_GET['page'],$weatherobj['pagecount'],'mj','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $_GET['page'];?>/<?php echo $weatherobj['pagecount'];?>页</a></li>
</ul>
<!-- 翻页-->		
			
        </div>
    </div>

<?php
include 'footer.php';
?>
</body>
</html>
