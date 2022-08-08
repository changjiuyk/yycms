<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $name[2][0];?>作品_<?php echo $name[2][0];?>演过的电影,电视剧_<?php echo $name[2][0];?>参加的综艺节目_明星专区_<?php echo $yycms_a_name;?></title>
<meta name="keywords" content="<?php echo $name[2][0];?>,<?php echo $name[2][0];?>作品,<?php echo $name[2][0];?>演艺经历">
<meta name="description" content="<?php echo $yycms_a_name;?>明星专区，提供<?php echo $name[2][0];?>参演的电影、电视剧、综艺节目等作品。查看更多明星作品尽在<?php echo $yycms_a_name;?>网站。">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
$mx="active";
include 'header.php';
?>
<div class="container"> 
   <div class="row"> 
    <div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="col-md-wide-3 col-xs-1"> 
       <div class="myui-vodlist__thumb wide" style="background: url(<?php echo $name[1][0];?>);"></div> 
      </div> 
      <div class="col-md-wide-7 col-xs-1"> 
       <h1 class="myui-article__title">
        <?php echo $name[2][0];?>电视剧作品盘点</h1> 
       <p class="myui-article__content mt20"></p> 
       <div class="bdshare bdsharebuttonbox hidden-sm hidden-xs"> 
        <span class="bds_shere"></span> 
        <a class="bds_qzone" data-cmd="qzone"></a> 
        <a class="bds_tsina" data-cmd="tsina"></a> 
        <a class="bds_weixin" data-cmd="weixin"></a> 
        <a class="bds_tqq" data-cmd="tqq"></a> 
        <a class="bds_sqq" data-cmd="sqq"></a> 
        <a class="bds_more" data-cmd="more"></a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_hd"> 
       <div class="myui-panel__head clearfix"> 
        <span class="more text-muted pull-right hidden-xs"></span> 
        <h3 class="title"> <?php echo $name[2][0];?>作品的影片 </h3> 
       </div> 
      </div> 
      <div class="myui-panel_bd clearfix"> 
       <ul class="myui-vodlist clearfix"> 
<?php	 
foreach ($ti as $key => $tite){
?>
        <li class="col-lg-8 col-md-6 col-sm-4 col-xs-3"> 
         <div class="myui-vodlist__box"> 
          <a class="myui-vodlist__thumb lazyload" href="/search-<?php echo $tite;?>.html" title="<?php echo $tite;?>" target="_blank" data-original="<?php echo $img[1][$key];?>"> <span class="play hidden-xs"></span> <span class="pic-tag pic-tag-top" style="background-color: #7091fc;"></span> <span class="pic-text text-right"></span> </a> 
          <div class="myui-vodlist__detail"> 
           <h4 class="title text-overflow"><a href="/search-<?php echo $tite;?>.html" title="<?php echo $tite;?>" target="_blank"><?php echo $tite;?></a></h4> 
<p class="text text-overflow text-muted hidden-xs"><?php echo strip_tags($zy[1][$key]);?></p> 
          </div> 
         </div> </li> 
<?php 
}
?>
       </ul> 
      </div> 
     </div> 
    </div>
   </div>
  </div>
<?php
include 'footer.php';
?>
</body>
</html>