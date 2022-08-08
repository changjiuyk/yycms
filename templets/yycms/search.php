<?php 
$size=count($one);
$size1=count($mingxing); 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索<?php echo $q?>-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="<?php echo $yycms_a_keywords;?>" />
<meta name="description" content="<?php echo $yycms_a_description;?>" />   
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
include 'header.php';
?>
	<div class="wrap">
	    <div class="container min">
	    	<div class="row">
	    		<div class="col-md-wide-7 col-xs-1">
	    		   	<div class="myui-panel myui-panel-bg clearfix">
	    				<div class="myui-panel-box clearfix">
	    					<div class="myui-panel_hd">
	    						<div class="myui-panel__head active bottom-line clearfix">	
	    							<h3 class="title">
	    								与 <span class="text-red">“<?php echo $q?>”</span> 相关的<span class="text-red">站内搜索</span> 结果
	    							</h3>
	    						</div>
	    					</div>
	    
	    					<div class="myui-panel_bd col-pd clearfix">
	    						<ul class="myui-vodlist__media clearfix" id="searchList">		

<?php 
if (!empty($one)){
foreach ($one as $ni=>$cs){
?>
<li class="clearfix">
	<div class="thumb">									
	<a class="myui-vodlist__thumb img-lg-150 img-md-150 img-sm-150 img-xs-100 lazyload" href="/<?php echo $dzbq;?>/<?php echo cfurl($url[$ni]);?>.html" title="<?php echo $cs?>" data-original="<?php echo $tp[$ni];?>">
	    <span class="play hidden-xs"></span>
	    <span class="pic-tag pic-tag-top" style="background-color: #7091fc;"></span><span class="pic-text text-right"></span>
		</a>																												
	    </div>
	    <div class="detail">
	    <h4 class="title"><a class="searchkey" href="/<?php echo $dzbq;?>/<?php echo cfurl($url[$ni]);?>.html"><?php echo $cs?></a></h4>
	    <p class="hidden-xs"><span class="text-muted"><?php echo mb_substr($jianjie[$ni],0,280,'utf-8').'...'; ?><a href="/<?php echo $dzbq;?>/<?php echo cfurl($url[$ni]);?>.html">详情 &gt;</a></p>
	    <p class="margin-0">
	     <a class="btn btn-sm btn-warm" href="/<?php echo $dzbq;?>/<?php echo cfurl($url[$ni]);?>.html"><i class="fa fa-play"></i> 立即播放</a>&nbsp;&nbsp;
	    <a class="btn btn-sm btn-default hidden-xs" href="/<?php echo $dzbq;?>/<?php echo cfurl($url[$ni]);?>.html">查看详情 <i class="fa fa-angle-right"></i></a>
	    </p>												    	    																									
	    	</div>
	    	</li>						
<?php } }?>
	    					</ul>
	    					</div>
	    				</div>				
	    			</div>	          
	    			
	    			<!-- 翻页 -->
	            </div>
		<div class="col-md-wide-3 col-xs-1  myui-sidebar">
	    			<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
         <h3 class="title"> 热剧榜 </h3> 
        </div> 
       </div> 
       <div class="myui-panel_bd"> 
        <ul class="myui-vodlist__text col-pd clearfix"> 
						<?php
						include './data/bangdan.php';
						foreach ($dsjbd[1] as $k=>$dsjurl){
						echo '<li> <a href="/'.$dzbq.'/'.cfurl($dsjurl).'.html" title="'.$dsjbd[2][$k].'"><span class="pull-right  text-muted visible-lg" style="color: ;"><i class="icon-hot"></i>'.$dsjbdrd[1][$k].'</span> <span class="badge">'.($k+1).'</span>'.$dsjbd[2][$k].'</a> </li>';
						}
						?>
</ul> 
       </div> 
	</div>
</div>
<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_hd">
			<div class="myui-panel__head clearfix">
         <h3 class="title"> 电影榜 </h3> 
        </div> 
       </div> 
       <div class="myui-panel_bd"> 
        <ul class="myui-vodlist__text col-pd clearfix"> 
						<?php
						foreach ($dybd[1] as $k=>$dyurl){
						echo '<li> <a href="/'.$dzbq.'/'.cfurl($dsjurl).'.html" title="'.$dybd[2][$k].'"><span class="pull-right  text-muted visible-lg" style="color: ;"><i class="icon-hot"></i>'.$dybdrd[1][$k].'</span> <span class="badge">'.($k+1).'</span>'.$dybd[2][$k].'</a> </li>';
						}
						?>
</ul> 
       </div> 

	</div>
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
