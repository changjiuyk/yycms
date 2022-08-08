<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$row1['title'];?><?php echo $onee [0]?> - <?php echo $yycms_a_name;?></title>
<meta name="keywords" content="<?=$row1['title'];?><?php echo $ks[0] ?>">
<meta name="description" content="<?php echo $des[0] ?><?php echo mb_substr(preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/", "", strip_tags($row1['content'])),0,60,'utf-8').'...';?>">  
<?php
include 'head.php';
?>
</head>
<body class="yycmsys">
<?php 
include 'header.php';
?>
	
	    <div class="container min">
	        <div class="row">
				<div class="col-md-wide-6 col-xs-1 myui-sidebar">
					<div class="myui-panel myui-panel-bg clearfix">					
						<div class="myui-panel-box clearfix">
							<div class="myui-panel_bd col-pd clearfix">	
								<h1 class="myui-article__title"><?php echo $onee [0]?><?=$row1['title'];?></h1>				
								<p class="myui-article__sub bottom-line"><span class="text-muted hidden-xs">作者：</span><?php echo $yycms_a_name;?><span class="split-line"></span><span class="text-muted hidden-xs">分类：</span>影视资讯<span class="split-line"></span><span class="text-muted">人气：</span><span class="split-line"></span><span class="text-muted">时间：<?php echo date('Y-m-s',$row1['create_time']);?></span></p>
								<div class="myui-article__content mt20" style="background-color: rgba(0,0,0,0);">
<?php echo $string.$row1['content']?>
								</div>							
							</div>
						</div>
					</div>	
					
						
				</div>
				<div class="col-md-wide-3 col-xs-1 myui-sidebar">
					<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd col-pd">
			<ul class="myui-vodlist__media myui-panel-bg2 clearfix" style="padding: 20px;">
				<li>
					<div class="thumb">
						<a class="myui-vodlist__thumb square img-xs-130" style="background: url(<?php echo $records[0]['a_wximg'];?>);"></a>
					</div>
					<div class="detail detail-side">
						<h4 class="title" style="margin-top: 30px;">关注我们</h4>
						<p class="font-14">微信扫一扫关注我们</p>		
					</div>																										
				</li>
			</ul>
		</div>
	</div>
</div>
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
<?php
include 'footer.php';
?>
	</body>
</html>
