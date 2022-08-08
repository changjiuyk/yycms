<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>即将上映电影-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="即将上映电影,日韩剧排行榜">
<meta name="description" content="为您提供最新即将上映电影">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
$yg="active";
include 'header.php';
?>
<div class="container">
        <div class="row">
<div class="myui-panel myui-panel-bg2 clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_hd"> 
     <div class="myui-panel__head active bottom-line clearfix"> 
      <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-yanglazhuye"></use>
            </svg>即将上映电影预告片</h3> 

     </div> 
    </div>  
   </div> 
  </div>        	
<!-- 筛选 -->
			
<div class="myui-panel myui-panel-bg clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_bd"> 
     <ul class="myui-vodlist clearfix ygyycms" data-url="http://jx.dy-jx.com/?url="><!--预告解析接口-->  
<?php
foreach ($urll[1] as $key=>$value){ 
?>
      <li class="col-lg-7 col-md-7 col-sm-4 col-xs-3"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb lazyload" href="javascript:;" title="<?php echo $value; ?>" data-original="<?php echo $img[1][$key]; ?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;">预告</span>
		<span class="pic-text text-right">2019</span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="javascript:;" title="<?php echo $value; ?>"><?php echo $value; ?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs">抢先看预告</p> 
        </div> 
       </div>
        </li> 
<?php
}
?>	 
	   <!-- 列表-->
     </ul> 
    </div> 
   </div> 
  </div>
			
			<ul class="myui-page text-center clearfix">
<?php echo yg_show($page,6,'yg','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $page;?>/6页</a></li>	
</ul>
<!-- 翻页-->	
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>
