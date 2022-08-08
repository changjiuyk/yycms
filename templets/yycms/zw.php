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
<body>
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
										<?php
				$query='select count(*) from yycms_vod where b_name like "%'.$q.'%"';
				$result = mysql_query($query,$conn);
				$rowtotle = mysql_fetch_array($result);
				$totle=$rowtotle[0];
				$sl=$size+$totle+$size1;
					?>								
	    							<h3 class="title">
	    								与 <span class="text-red">“<?php echo $q?>”</span> 相关的搜索结果
	    							</h3>
	    						</div>
	    					</div>
	    
	    					<div class="myui-panel_bd col-pd clearfix">
	    						<ul class="myui-vodlist__media clearfix" id="searchList">		

<?php 

	$result = mysql_query('select * from yycms_vod where b_name like "%'.$q.'%" order by b_id desc LIMIT 0,12');
		while ($row = mysql_fetch_array($result))
{
$tupian=$row['b_tp'];
$cs=$row['b_name'];
$jianjie=$row['b_jj'];
?>
                                    <li class="clearfix">
	    								<div class="thumb">									
	    									<a class="myui-vodlist__thumb img-lg-150 img-md-150 img-sm-150 img-xs-100 lazyload" href="/qxplay/<?php echo $row['b_id'];?>.html" title="<?php echo $cs?>" data-original="<?php echo $tupian?>">
	    										<span class="play hidden-xs"></span>
	    										<span class="pic-tag pic-tag-top" style="background-color: #7091fc;"></span><span class="pic-text text-right"></span>	    									</a>																												
	    								</div>
	    								<div class="detail">
	    							    	<h4 class="title"><a class="searchkey" href="/qxplay/<?php echo $row['b_id'];?>.html"><?php echo $cs?></a></h4>
	    									<p><span class="text-muted"><?php echo $row['b_zy'];?></p>		
	    									<p class="hidden-xs"><span class="text-muted">简介：</span><?php echo mb_substr($jianjie,0,180,'utf-8').'...'; ?><a href="/qxplay/<?php echo $row['b_id'];?>.html">详情 &gt;</a></p>
	    									<p class="margin-0">
	    										<a class="btn btn-sm btn-warm" href="/qxplay/<?php echo $row['b_id'];?>.html"><i class="fa fa-play"></i> 立即播放</a>&nbsp;&nbsp;
	    										<a class="btn btn-sm btn-default hidden-xs" href="/qxplay/<?php echo $row['b_id'];?>.html">查看详情 <i class="fa fa-angle-right"></i></a>
	    									</p>												    	    																									
	    								</div>
	    							</li>	    							
<?php } ?> 						
<?php 
if (!empty($one)){
foreach ($one as $ni=>$cs){ 
$mvsrc1 = str_replace("http://www.360kan.com/", "", "$nine[$ni]");
$pingfen = str_replace('<div class="b-tomato"><div class="rating-site yellow"><p class="value">评分：<span>', '', "$liu[$ni]");
$pingfen = str_replace('</span></p></div></div>', '', "$pingfen");
$pingfen = str_replace('    ', '', "$pingfen");
$pingfen = str_replace('<div class="cont">', '', "$pingfen");
$pingfen = str_replace('<h3 class="title">', '', "$pingfen");
$pingfen = str_replace(array("\r\n", "\r", "\n"), '', "$pingfen");
$pingfen = str_replace('<div class="b-tomato"><div class="rating-site red"><p class="value">评分：<span>', '', "$pingfen");
$pingfen = str_replace('<div class="b-tomato"><div class="rating-site green"><p class="value">评分：<span>', '', "$pingfen");
$jianjie= str_replace("data-desc='", '', "$ba[$ni]");
$jianjie= str_replace("'>", '', "$jianjie");
$jianjie= str_replace("<i>", "<span class=text-muted>", "$jianjie");
$jianjie= str_replace("</i>","</span>", "$jianjie");
$jianjie= str_replace("<div>",'', "$jianjie");
$jianjie= str_replace("<p>",'', "$jianjie");
$jianjie= str_replace("</p>",'', "$jianjie");
$tupian=$two[$ni];
//结束
$d_scontent=explode(',',$yycms_a_qqsp);
for($i=0;$i<count($d_scontent);$i++)
{
if($cs==$d_scontent[$i]){
//提示错误值
$xianshi='style="display:none"';
}
}
?>
                                       <li class="clearfix" <?php echo $xianshi?>>
	    								<div class="thumb">									
	    									<a class="myui-vodlist__thumb img-lg-150 img-md-150 img-sm-150 img-xs-100 lazyload" href="/vod/<?php echo $mvsrc1?>" title="<?php echo $cs?>" data-original="<?php echo $tupian?>">
	    										<span class="play hidden-xs"></span>
	    										<span class="pic-tag pic-tag-top" style="background-color: #7091fc;"></span><span class="pic-text text-right"></span>
												</a>																												
	    								</div>
	    								<div class="detail">
	    							    	<h4 class="title"><a class="searchkey" href="/vod/<?php echo $mvsrc1?>"><?php echo $cs?></a></h4>
	    									<p class="hidden-xs"><span class="text-muted"><?php echo mb_substr($jianjie,0,280,'utf-8').'...'; ?><a href="/vod/<?php echo $mvsrc1?>">详情 &gt;</a></p>
	    									<p class="margin-0">
	    										<a class="btn btn-sm btn-warm" href="/vod/<?php echo $mvsrc1?>"><i class="fa fa-play"></i> 立即播放</a>&nbsp;&nbsp;
	    										<a class="btn btn-sm btn-default hidden-xs" href="/vod/<?php echo $mvsrc1?>">查看详情 <i class="fa fa-angle-right"></i></a>
	    									</p>												    	    																									
	    								</div>
	    							</li>
							<?php }
							}else{
							foreach ($mingxing as $k=>$mx){ 
							$mvsrc1 = str_replace("http://www.360kan.com", "", "$mingxing[$k]");
							$tupian=$mingxing1[$k];
							$title=$mingxing2[$k];
							$jishu=$mingxing3[$k];
							$chuandi='/vod'.$mvsrc1;
							//结束
							?>
							
                                       <li class="clearfix">
	    								<div class="thumb">									
	    									<a class="myui-vodlist__thumb img-lg-150 img-md-150 img-sm-150 img-xs-100 lazyload" href="/vod/<?php echo $mvsrc1?>" title="<?php echo $title?>" data-original="<?php echo $tupian?>">
	    										<span class="play hidden-xs"></span>
	    										<span class="pic-tag pic-tag-top" style="background-color: #7091fc;"></span><span class="pic-text text-right"></span>
												</a>																												
	    								</div>
	    								<div class="detail">
	    							    	<h4 class="title"><a class="searchkey" href="<?php echo $chuandi?>"><?php echo $title?></a></h4>
											<p><span class="text-muted">主演:<?php echo $q;?></p>	
	    									<p class="hidden-xs"><span class="text-muted">简介：暂无<a href="<?php echo $chuandi?>">详情 &gt;</a></p>
	    									<p class="margin-0">
	    										<a class="btn btn-sm btn-warm" href="<?php echo $chuandi?>"><i class="fa fa-play"></i> 立即播放</a>&nbsp;&nbsp;
	    										<a class="btn btn-sm btn-default hidden-xs" href="<?php echo $chuandi?>">查看详情 <i class="fa fa-angle-right"></i></a>
	    									</p>												    	    																									
	    								</div>
	    							</li>							
<?php } ?>
<?php } ?>
<?php if (1 > $sl)echo "<script>layer.alert('<strong style=\"color:d9534f\">站内未能搜索到！</strong><br><strong>请点击下方【全网搜】</strong>', {icon: 5,title:'搜索小提示',btn: ['全网搜', '不去了'],btn1:function(){location.href = \"/searchqw-".$q.".html\"; }});</script>";?>

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
						foreach ($bdArr['tv']['title'] as $k=>$title){
						$bdurl=$bdArr['tv']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com/", "", $bdurl);
						$bdnum=$bdArr['tv']['num'][$k];//num
						$topnum=$bdArr['tv']['top'][$k];//topnum
                        echo '<li> <a href="/vod/'.$bdurl.'" title="'.$title.'"> <span class="pull-right  text-muted visible-lg" style="color: ;">'.$bdnum.'</span> <span class="badge">'.$topnum.'</span>'.$title.'</a> </li>';	
						}?>	
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
						include './data/bangdan.php';
						foreach ($bdArr['dy']['title'] as $k=>$title){
						$bdurl=$bdArr['dy']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com/", "", $bdurl);
						$bdnum=$bdArr['dy']['num'][$k];//num
						$topnum=$bdArr['dy']['top'][$k];//topnum
                        echo '<li> <a href="/vod/'.$bdurl.'" title="'.$title.'"> <span class="pull-right  text-muted visible-lg" style="color: ;">'.$bdnum.'</span> <span class="badge">'.$topnum.'</span>'.$title.'</a> </li>';	
						}?>	
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
