<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>【明星库】男女明星资料大全_<?php echo $yycms_a_name;?></title>
<meta name="keywords" content="明星库,男明星资料大全,女明星资料大全,明星图片">
<meta name="description" content="<?php echo $yycms_a_name;?>明星专区，汇聚最新男明星资料大全,女明星资料大全，明星职业，明星图片等。查看更多明星资讯尽在<?php echo $yycms_a_name;?>。">
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
<div class="myui-panel myui-panel-bg2 clearfix"> 
   <div class="myui-panel-box clearfix"> 
    <div class="myui-panel_hd"> 
     <div class="myui-panel__head active bottom-line clearfix"> 
      <a class="slideDown-btn more pull-right" href="javascript:;">收起 <i class="fa fa-angle-up"></i></a> 
      <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-luxiang"></use>
            </svg>明星</h3> 
     </div> 
    </div> 
    <div class="myui-panel_bd">
     <div class="slideDown-box">
      <ul class="myui-screen__list nav-slide clearfix up-ul1" data-align="left"> 
       <li> <a class="btn text-muted">地区</a> </li> 
<li><a class="btn btn-warm" href="/mx_<?php echo $xb;?>-all-<?php echo $pageno;?>.html">全部</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-内地-<?php echo $pageno;?>.html">内地</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-香港-<?php echo $pageno;?>.html">香港</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-台湾-<?php echo $pageno;?>.html">台湾</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-日本-<?php echo $pageno;?>.html">日本</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-韩国-<?php echo $pageno;?>.html">韩国</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-美国-<?php echo $pageno;?>.html">美国</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-英国-<?php echo $pageno;?>.html">英国</a></li>
<li><a class="btn" href="/mx_<?php echo $xb;?>-其他-<?php echo $pageno;?>.html">其他</a></li>
      </ul> 
      <ul class="myui-screen__list nav-slide clearfix up-ul2" data-align="left"> 
       <li> <a class="btn text-muted">性别</a> </li> 
<li><a class="btn btn-warm" href="/mx_all-<?php echo $dq;?>-<?php echo $pageno;?>.html">全部</a></li>
<li><a class="btn" href="/mx_男-<?php echo $dq;?>-<?php echo $pageno;?>.html">男</a></li>
<li><a class="btn" href="/mx_女-<?php echo $dq;?>-<?php echo $pageno;?>.html">女</a></li>
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
foreach ($mxkbt[1] as $x=>$mximg){
if($mximg != end($mxkbt[1])) {
?>	
      <li class="col-lg-7 col-md-7 col-sm-4 col-xs-3"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb lazyload" href="/search-<?php echo $mxkbt[3][$x];?>.html" target="_blank" title="<?php echo $mxkbt[3][$x];?>" data-original="<?php echo $mximg;?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-text text-right"></span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="/search-<?php echo $mxkbt[3][$x];?>.html" target="_blank" title="<?php echo $mxkbt[3][$x];?>"><?php echo $mxkbt[3][$x];?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs"></p> 
        </div> 
       </div>
        </li>
<?php 
} else {
?>
      <li class="col-lg-7 col-md-7 col-sm-4 col-xs-3 hidden-sm hidden-md hidden-lg"> 
       <div class="myui-vodlist__box"> 
        <a class="myui-vodlist__thumb lazyload" href="/search-<?php echo $mxkbt[3][$x];?>.html" target="_blank" title="<?php echo $mxkbt[3][$x];?>" data-original="<?php echo $mximg;?>"> 
		<span class="play hidden-xs"></span> 
		<span class="pic-text text-right"></span> 
		</a> 
        <div class="myui-vodlist__detail"> 
         <h4 class="title text-overflow"><a href="/search-<?php echo $mxkbt[3][$x];?>.html" target="_blank" title="<?php echo $mxkbt[3][$x];?>"><?php echo $mxkbt[3][$x];?></a></h4> 
         <p class="text text-overflow text-muted hidden-xs"></p> 
        </div> 
       </div>
        </li>
<?php 
}
}
?>
<?php
if(count($mxkbt[1]) <=0 ){ echo '<p style="text-align:center;color: #ffff;font-size: 20px;background: #bd2a437d;padding:11px 8px;border-radius: 2px;"><span style="color:#FFFF;">
                没找到符合条件的明星，请尝试其他分类！</span></p></div>';}	   
?>
     </ul> 
    </div> 
   </div> 
  </div>		
<ul class="myui-page text-center clearfix">
<?php echo getPagemx($pageno,$total,'mx','btn btn-default','btn  btn-warm','hidden-xs',$_GET['xb'],$_GET['dq']);?><li><a>共<?php echo $pageno?>/<?php echo $total;?>页</a></li>
</ul>
<!-- 翻页-->		
			
        </div>
    </div>
<?php
include 'footer.php';
?>
</body>
</html>