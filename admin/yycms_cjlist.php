<?php 
include('head.php');
?>
</head>
<body class="childrenBody">
<div class="x-nav">
	<span class="layui-breadcrumb">
	  <a>视频采集</a>
	</span>
	<a class="layui-btn layui-btn-small refresh" href="javascript:location.replace(location.href);" title="刷新"><i class="iconfont icon-refresh" style="line-height:30px"></i></a>
</div>
<?php
include('../sava/inc.php');
?>
<form id="form1" enctype="multipart/form-data" method="GET" class="layui-form layui-form-pane layui-mt-10">

<div class="layui-form-item">
<div class="layui-inline">		
			<label class="layui-form-label">资源站</label>
			<div class="layui-input-inline">
				<span id='typeidct'>
				<select name='zd' style='width:240px'>
<?php
foreach($yycmszyjx as $k=>$v){
echo "<option value='$k'>资源站$k";	
}
?>
</select>
</span>
			</div>
		</div>	

			<div class="layui-inline">		
				<label class="layui-form-label">关键词</label>
				<div class="layui-input-inline">
					<input type="text" name="wd" value="<?php echo $_GET['wd']; ?>" required="" lay-verify="required" placeholder="影片" class="layui-input">
				</div>
				<div class="layui-input-inline" style="width:80px">
				<button class="layui-btn" type="submit"><i class="layui-icon">&#xe615;</i></button>
			</div>
			<div class="layui-input-inline"><button type="button"  onclick="javascript:alert('<?php echo dirname($url);?>/hqqx.php 可宝塔定时访问这个链接.定时每天12点采集')"  class="layui-btn layui-btn-normal">获取最新入库</button></div>
			</div>	

		
</div>	
	
</form>

<div class="layui-form news_list"> 
    <table class="layui-table" lay-skin="line"> 
     <colgroup> 
          <col width="15%" />
          <col width="35%" />
          <col width="15%" />
          <col width="15%" />
      <col/> 
     </colgroup> 
     <thead> 
      <tr> 
      <th style="text-align:left;">id</th> 
       <th style="text-align:left;">名称</th> 
       <th style="text-align:left;">类型</th> 
       <th style="text-align:left;">时间</th> 
       <th style="text-align:left;">操作</th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td colspan="6" style="padding:0;border:0;"> 
        <table style="width:100%;margin:0;border:0;" class="layui-table" lay-skin="line"> 
     <colgroup> 
          <col width="15%" />
          <col width="35%" />
          <col width="15%" />
          <col width="15%" />
      <col/> 
         <tbody>

<?php
if (isset($_GET['wd'])){
$urlmj=$yycmszyjx[$_GET['zd']].'?wd='.$_GET['wd'];
$xmldata=qwget($urlmj);
$postObj = simplexml_load_string($xmldata,'SimpleXMLElement',LIBXML_NOCDATA);
$weatherobj=$postObj->list;
$jsonStr = json_encode($weatherobj);
$jsonArray = json_decode($jsonStr,true);
foreach($weatherobj->children() as $period) {	
$vod = get_object_vars($period);
?>
          <tr>
           <td align="left"><?php echo $x;?></td> 
           <td align="left"><?php echo $vod['name'];?></td> 
           <td align="left"><?php echo $vod['type'];?></td> 
           <td align="left"><?php echo substr($vod['last'],0,10);?></td>      
           <td align="left"> <a href="yycms_addlist.php?zd=<?php echo $_GET['zd']; ?>&id=<?php echo $vod['id'];?>" class="layui-btn layui-btn-normal layui-btn-small"><i class="layui-icon"></i>采集</a></td> 
          </tr> 
<?php 
}
if($weatherobj['recordcount']=='0'){	
echo "未能搜索到影片请更换站点";	
}
}
?>		  
         </tbody>
        </table> 
		</td> 
      </tr> 
     </tbody> 
    </table> 
  </div>
<?php 
include('footer.php');
?>
</body>
</html>