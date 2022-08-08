<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新电影-影院热播-最新上映-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="最新电影,影院热播,最新欧美剧,最新上映">
<meta name="description" content="为您提供最新电影电视剧">
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
$qxk="active";
include 'header.php';
$cs5=intval($_GET['page']);//页数
if($cs5=='')$cs5=1;
?>
<div class="container">
        <div class="row">
<div class="myui-panel myui-panel-bg2 clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_hd"> 
     <div class="myui-panel__head active bottom-line clearfix"> 
      <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-dianzan"></use>
            </svg>抢先看</h3> 

     </div> 
    </div> 
    <div class="myui-panel_bd"> 
     <div class="slideDown-box"> 
      <ul class="myui-screen__list nav-slide clearfix up-ul1" data-align="left"> 
       <li> <a class="text-muted btn">类型</a> </li> 
<li><a class="btn btn-warm" href="./qxk-0-1.html">全部</a></li>
<?php
$vodlx = $mysqli->select1(0, 4, '*', 'yycms_vod_class', 'where c_pid=0 order by c_sort asc');
foreach ($vodlx as $rowlx) {
echo '<li><a class="btn" href="./qxk-'.$rowlx['c_id'].'-1.html">'.$rowlx['c_name'].'</a></li>';
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
							if ($_GET['cid']== 0){
							$vodqxk = $mysqli->select1(0, 3, '*', 'yycms_vod', 'order by b_id desc');
							$pager = page_handle('page',21,$vodqxk['count']);
							$vodqxk2 = $mysqli->select1(0, 4, '*', 'yycms_vod', 'order by b_id desc limit '.$pager[0].','.$pager[1].'');
							}else{
							$vodqxk = $mysqli->select1(0, 3, '*', 'yycms_vod', 'where b_fl in ('.$_GET['cid'].') order by b_id desc');
							$pager = page_handle('page',21,$vodqxk['count']);
							$vodqxk2 = $mysqli->select1(0, 4, '*', 'yycms_vod', 'order by b_id desc limit '.$pager[0].','.$pager[1].'');	
							}
							foreach ($vodqxk2 as $row) {
?>
<li class="col-lg-7 col-md-7 col-sm-4 col-xs-3"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb lazyload" href="/qxplay/<?php echo $row['b_id'] ?>.html" target="_blank" title="<?php echo $row['b_name']; ?>" data-original="<?php echo $row['b_tp']; ?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;"><?php echo $mysqli->get_yplx($row['b_fl']);?></span>
		<span class="pic-text text-right"></span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="/qxplay/<?php echo $row['b_id'] ?>.html" target="_blank" title="<?php echo $row['b_name']; ?>"><?php echo $row['b_name']; ?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs"><?php echo $row['b_zy']; ?></p> 
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
<?php echo pagee_show($cs5,$pager[2],'qxk','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $cs5;?>/<?php echo $pager[2];?>页</a></li>
</ul>
<!-- 翻页-->		
			
        </div>
    </div>

<?php
include 'footer.php';
?>
</body>
</html>
