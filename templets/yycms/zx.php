<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新影视资讯-<?php echo $yycms_a_name;?></title>
<meta name="keywords" content="最新影视资讯-最新影视资讯推荐" />
<meta name="description" content="2021最新影视资讯" />  
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
							
								<div class="myui-panel__head active bottom-line clearfix">
									<ul class="myui-screen__list nav-slide clearfix up-ul1" data-align="left">
<li><a class="btn btn-warm" href="zx.html">全网资讯</a></li>
<li><a class="btn" href="zx-zn-1.html">站内资讯</a></li>
      </ul>	
								</div>																		
						
							<div class="myui-panel_bd clearfix">											
								<ul class="myui-vodlist__media col-pd clearfix">	
<?php
if(empty($_GET['zn'])){
foreach ($one as $ni=>$cs){
?>
	<li>
	<div class="detail detail-left">
		<h4 class="title"><a href="zxnews-<?php echo $one1[$ni] ?>-<?php echo $one2[$ni] ?>.html" target="_blank"><?php echo $cs ?></a></h4>										
		<p class="desc text-666 hidden-sm hidden-xs"><?php echo $nr[$ni] ?></p>
		<p class="margin-0 text-muted font-12">影视资讯<span class="split-line"></span><?php echo $sj[$ni] ?></p>
	</div>
		<div class="thumb">
		<a class="myui-vodlist__thumb wide img-md-190 img-xs-130 lazyload" href="zxnews-<?php echo $one1[$ni] ?>-<?php echo $one2[$ni] ?>.html" target="_blank" title="<?php echo $cs ?>" data-original="<?php echo $one3[$ni] ?>">
			<span class="play-v"></span>
		</a>
	</div>	
	</li>
<?php
}
}else{
foreach ($yycmsnews as $ni=>$cs){
?>
	<li>
	<div class="detail detail-left">
		<h4 class="title"><a href="zxnews-znzx-<?php echo $cs['id'];?>.html" target="_blank"><?php echo $cs['title']; ?></a></h4>										
		<p class="desc text-666 hidden-sm hidden-xs"><?php echo mb_substr(preg_replace("/(\s|\&nbsp\;|　|\xc2\xa0)/", "", strip_tags($cs['content'])),0,100,'utf-8').'...';?></p>
		<p class="margin-0 text-muted font-12">影视资讯<span class="split-line"></span><?php echo date('Y-m-s',$cs['create_time']);?></p>
	</div>
		<div class="thumb">
		<a class="myui-vodlist__thumb wide img-md-190 img-xs-130 lazyload" href="zxnews-znzx-<?php echo $cs['id'];?>.html" target="_blank" title="<?php echo $cs['title']; ?>" data-original="<?php echo $cs['pic']; ?>">
			<span class="play-v"></span>
		</a>
	</div>	
	</li>				
<?php
}
}
?>																
	</ul>
							</div>
						</div>
					</div>
					<ul class="myui-page text-center clearfix">
<?php
if(empty($_GET['zn'])){
?>
<?php echo yg_show($page,99,'zx','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $page;?>/99页</a></li>
<?php
}else{
?>
<?php echo yg_show($page,$pager[2],'zx-zn','btn btn-default','btn  btn-warm','hidden-xs');?><li><a>共<?php echo $cs5;?>/<?php echo $pager[2];?>页</a></li>	
<?php
}
?>					
</ul>

				</div>
<div class="col-md-wide-3 col-xs-1 myui-sidebar hidden-sm hidden-xs">
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
