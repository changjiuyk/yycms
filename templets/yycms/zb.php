<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>电视直播-网络电视直播-在线观看电视直播-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="电视直播,网络直播,直播">
<meta name="description" content="为您提供,电视直播,网络电视直播,在线观看电视直播">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
include 'header.php';
?>
<div class="container">
        <div class="row">
<div class="myui-panel myui-panel-bg2 clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_hd"> 
     <div class="myui-panel__head active bottom-line clearfix"> 
      <a class="slideDown-btn more pull-right" href="javascript:;">收起 <i class="fa fa-angle-up"></i></a> 
      <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-yanglazhuye"></use>
            </svg>电视直播</h3> 
     </div> 
    </div> 
    <div class="myui-panel_bd"> 
     <div class="slideDown-box"> 
<ul class="nav nav-tabs active"> 
<li class="active"><a class="btn" href="#zb1" data-toggle="tab">央视直播</a></li>
<li><a class="btn" href="#zb2" data-toggle="tab">卫视直播</a></li>
<li><a class="btn" href="#zb3" data-toggle="tab">电影直播</a></li>
<li><a class="btn" href="#zb4" data-toggle="tab">影视解说</a></li>
</ul> 
     </div> 
    </div> 
   </div> 
  </div>        	
<!-- 筛选 -->
			
<div class="myui-panel myui-panel-bg clearfix tab-content"> 
    <ul id="zb1" class="myui-content__list sort-list tab-pane active clearfix yycms">
<?php
foreach ($zb['cctv'] as $key1 => $value1) {
?>	    
<li class="col-lg-5 col-md-5 col-sm-3 col-xs-2"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb wide lazyload" title="<?php echo $value1['name']; ?>" data-url="/ck/zb.php?url=<?php echo $value1['url']; ?>" data-original="<?php echo $value1['img']; ?>" style="background-image: url(&quot;<?php echo $value1['img']; ?>&quot;);"> <span class="play hidden-xs"></span> </a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-center text-overflow"><a title="CCTV 1"><?php echo $value1['name']; ?></a></h4> 
        </div> 
       </div> 
	   </li>
<?php
}
?>
     </ul>  
<ul id="zb2" class="myui-content__list sort-list tab-pane clearfix yycms">
<?php
foreach ($zb['wszb'] as $key1 => $value1) {
?>	    
<li class="col-lg-5 col-md-5 col-sm-3 col-xs-2"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb wide lazyload" title="<?php echo $value1['name']; ?>" data-url="/ck/zb.php?url=<?php echo $value1['url']; ?>" data-original="<?php echo $value1['img']; ?>" style="background-image: url(&quot;<?php echo $value1['img']; ?>&quot;);"> <span class="play hidden-xs"></span> </a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-center text-overflow"><a title="CCTV 1"><?php echo $value1['name']; ?></a></h4> 
        </div> 
       </div> 
	   </li>
<?php
}
?>
     </ul> 
<ul id="zb3" class="myui-content__list sort-list tab-pane clearfix yycmszb" data-jx="/ck/zb.php?url=">
<?php
foreach ($zb['dyzb'] as $key1 => $value1) {
?>	    
<li class="col-lg-5 col-md-5 col-sm-3 col-xs-2"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb wide lazyload" title="<?php echo $value1['name']; ?>" data-url="<?php echo $value1['url']; ?>" data-original="<?php echo $value1['img']; ?>" style="background-image: url(&quot;<?php echo $value1['img']; ?>&quot;);"> <span class="play hidden-xs"></span> </a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-center text-overflow"><a title="CCTV 1"><?php echo $value1['name']; ?></a></h4> 
        </div> 
       </div> 
	   </li>
<?php
}
?>
     </ul> 	
<ul id="zb4" class="myui-content__list sort-list tab-pane clearfix yycmszb" data-jx="/ck/zb.php?url=">
<?php
foreach ($zb['dyjs'] as $key1 => $value1) {
?>	    
<li class="col-lg-5 col-md-5 col-sm-3 col-xs-2"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb wide lazyload" title="<?php echo $value1['name']; ?>" data-url="<?php echo $value1['url']; ?>" data-original="<?php echo $value1['img']; ?>" style="background-image: url(&quot;<?php echo $value1['img']; ?>&quot;);"> <span class="play hidden-xs"></span> </a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-center text-overflow"><a title="CCTV 1"><?php echo $value1['name']; ?></a></h4> 
        </div> 
       </div> 
	   </li>
<?php
}
?>
     </ul> 		 
    </div> 
<!-- 翻页-->		
			
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>
