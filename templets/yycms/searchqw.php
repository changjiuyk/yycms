<?php 
$q=$_GET['wd'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全网搜索<?php echo $q?>-<?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="<?php echo $yycms_a_keywords;?>" />
<meta name="description" content="<?php echo $yycms_a_description;?>" />   
<?php
include 'head.php';
?>
<link rel="stylesheet" href="templets/yycms/css/qwss.css" type="text/css" />
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
	    								与 <span class="text-red">“<?php echo $q?>”</span> 相关的<span class="text-red">全网搜索</span> 结果
	    							</h3>
	    						</div>
	    					</div>
	    					<div class="myui-panel_bd col-pd clearfix">
							<ul class="stui-vodlist clearfix">
					<li class="active clearfix hidden-xs">
						<span class="title">影片名称</span>
						<span class="type">影片类别</span>
						<span class="time">更新时间</span>
						<span class="xl">播放</span>
					</li>
<?php
if(!$_GET['wd']==''){
$urlmj=$yycmszyjx[0].'?wd='.$_GET['wd'];
$xmldata=qwget($urlmj);
$postObj = simplexml_load_string($xmldata,'SimpleXMLElement',LIBXML_NOCDATA);
$weatherobj=$postObj->list;
$jsonStr = json_encode($weatherobj);
$jsonArray = json_decode($jsonStr,true);
foreach($weatherobj->children() as $period) {
$vod = get_object_vars($period);
if($vod['type'] == '韩国美女' || $vod['type'] == '写真美女' || $vod['type'] == '展会美女'|| $vod['type'] == '论理片'|| $vod['type'] == '伦理片'|| $vod['type'] == '伦理'|| $vod['type'] == '论理'){
continue;
}
?>
		<li class="clearfix">
		<h3 class="title">
		<a href="/qwplay-zd1-<?php echo $vod['id'];?>.html" target="_blank" title="<?php echo $vod['name'];?>"><?php echo $vod['name'];?></a>
		</h3>
		<span class="type"><?php echo $vod['type'];?></a></span>
		<span class="time"><font color="#FF0000"><?php echo $vod['last'];?></font></span>
		<span class="xl"><a href="/qwplay-zd1-<?php echo $vod['id'];?>.html" target="_blank"><font color="#FF0000">立即播放</font></a></span>
		</li> 
<?php 
}
}
?>
	</ul>
	    </div>
	    </div>				
	    </div>
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
