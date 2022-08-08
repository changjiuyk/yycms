<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $yycms_a_bt;?></title>
<meta name="keywords" content="<?php echo $yycms_a_keywords;?>" />
<meta name="description" content="<?php echo $yycms_a_description;?>" />   
<?php
include 'head.php';
?>
<style type="text/css">
.myui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%);}
.stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
@media (max-width:1023px){.stui-banner__pic{ padding-top: 45%; background-position: 50% 50% !important; background-size: cover !important;}}
@media (max-width:767px){.stui-banner__pic{ padding-top: 55%; background-position: 50% 50% !important; background-size: cover !important;}}
</style>
</head>
<body>
<?php
$index="active";
include 'header.php';
?>
<div id="home_slide" class="carousel slide clearfix" data-ride="carousel"> 
   <div class="carousel-inner"> 
<?php
$i=0;
$vodslider = $mysqli->select1(0, 4, '*', 'yycms_slider', 'order by id desc LIMIT 0,5');
foreach ($vodslider as $row) {
echo '<div class="item text-center ';
if ($i<1){echo 'active';}
echo '"><a class="stui-banner__pic" href="'.$row['link'].'" target="_blank" alt="" style="background: url('.$row['picpath'].') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="">
</a></div>';
$i ++;
}
foreach ($hdpurl as $ni=>$cs){
echo '<div class="item text-center ';
if ($i<1){echo 'active';}
echo '"><a class="stui-banner__pic" href="/'.$dzbq.'/'.cfurl($cs).'.html" alt="" style="background: url('.$hdpimg[$ni].') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" alt="'.$hdp[3][$ni].'" title="'.$hdp[3][$ni].'">
</a></div>';
$i ++;
}
?>
</div>
<ul class="carousel-indicators carousel-indicators-thumb hidden-md hidden-sm hidden-xs"> 	
<?php 
$i=0;
foreach ($vodslider as $row1) {
echo '<li data-target="#home_slide" data-slide-to="'.$i.'" class="';
if ($i<1){echo 'active';}
echo '" style="width: 160px; height: 80px;"><img class="img-responsive" style="max-width: 200%;" src="'.$row1['picpath'].'" /> </li>';
$i ++;
}
foreach ($hdpurl as $ni=>$cs){
echo '<li data-target="#home_slide" data-slide-to="'.$i.'" class="';
if ($i<1){echo 'active';}
echo '" style="width: 160px; height: 80px;"><img class="img-responsive" style="max-width: 200%;" src="'.$hdpimg[$ni].'" /> </li>';
$i ++;
}?>
</ul> 
   <a class="carousel-control left" href="#home_slide" data-slide="prev"><i class="fa fa-angle-left"></i></a> 
   <a class="carousel-control right" href="#home_slide" data-slide="next"><i class="fa fa-angle-right"></i></a> 
  </div>   
<div class="stui-pannel stui-pannel-screen hidden-sm hidden-xs clearfix" style="margin-bottom: 0;">	
<div class="stui-pannel-box">
<div class="container">
<div class="row">
<ul class="stui-index__screen col-pd clearfix">
<li class="type-slide m-bottom-line">
<a href="movie.html"><dt>电<br>    影</dt></a>
<a href='movie_xiju-all-all-all-1.html'>喜剧</a>
<a href='movie_aiqing-all-all-all-1.html'>爱情</a>
<a href='movie_dongzuo-all-all-all-1.html'>动作</a>
<a href='movie_kongbu-all-all-all-1.html'>恐怖</a>
<a href='movie_kehuan-all-all-all-1.html'>科幻</a>
<a href='movie_juqing-all-all-all-1.html'>剧情</a>
</li>		
<li class="type-slide m-bottom-line">
<a href="tv.html"><dt>剧<br>    集</dt></a>
<a href='tv_jingfei-all-all-all-1.html'>警匪</a>
<a href='tv_xuanyi-all-all-all-1.html'>悬疑</a>
<a href='tv_dushi-all-all-all-1.html'>都市</a>
<a href='tv_ouxiang-all-all-all-1.html'>偶像</a>
<a href='tv_guzhuang-all-all-all-1.html'>古装</a>
<a href='tv_zhanzheng-all-all-all-1.html'>战争</a>
</li>
<li class="type-slide m-bottom-line">
<a href="zongyi.html"><dt>综<br>    艺</dt></a>
<a href='zy_llxxuanxiu-all-all-1.html'>选秀</a>
<a href='zy_llxgaoxiao-all-all-1.html'>搞笑</a>
<a href='zy_llxfangtan-all-all-1.html'>访谈</a>
<a href='zy_llxtiyu-all-all-1.html'>体育</a>
<a href='zy_llxjishi-all-all-1.html'>纪实</a>
<a href='zy_llxyouxi-all-all-1.html'>游戏</a>
</li>
<li class="type-slide m-bottom-line">
<a href="dongman.html"><dt>动<br>    漫</dt></a>
<a href='dm_ltlxrexue-all-all-all-1.html' class='acat'>热血</a>
<a href='dm_ltlxgaoxiao-all-all-all-1.html' class='acat'>搞笑</a>
<a href='dm_ltlxxiaoyuan-all-all-all-1.html' class='acat'>校园</a>
<a href='dm_ltlxshenhua-all-all-all-1.html' class='acat'>神话</a>
<a href='dm_ltlxjizhan-all-all-all-1.html' class='acat'>机战</a>
<a href='dm_ltlxkehuan-all-all-all-1.html' class='acat'>科幻</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<?php 
if($yycms_a_ggkg=="1"){
?>
<div style="background-color: #ff6600;">	
	<li class="active">
		<table border="0" width="100%">
			<tbody><tr>
			<td width="22" height="22">
			<img src="/img/notice.png" width="22" height="22">
			</td>
			<td width="12" height="22"></td>
			<td><strong><marquee scrollamount="10" direction="left" align="Middle" style="font-weight:bold;line-height:20px;font-size:20px;color:#fff;"><?php echo $yycms_a_gg;?></marquee></strong></td>
			</tr>
			</tbody>
		</table>
	</li>
	</div>
<?php 
}
?>
  <!-- 轮播 --> 
  <div class="container"> 
   <div class="row"> 
<?php 
if($yycms_a_dylb=="1"){
?>	 
    <div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_hd"> 
       <div class="myui-panel__head clearfix"> 
        <span class="text-muted more pull-right"></span> 
        <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-dianying"></use>
            </svg>24小时电影轮播</h3> 
				<a class="more pull-right" href="/zb.html">更多 <i class="fa fa-angle-right"></i></a> 
       </div> 
      </div> 
      <div class="myui-panel_bd clearfix"> 
       <ul class="myui-vodlist clearfix yycmszb" data-jx="/ck/zb.php?url=">	 
<?php
$i=0;
foreach ($zb['dyzb'] as $key1 => $value1) {
if ($i<8){
?>	
        <li class="col-lg-8  col-md-8 col-sm-4 col-xs-3 <?php if ($i>=6){echo 'hidden-xs';}?>"> 
         <div class="myui-vodlist__box"> 
          <a class="myui-vodlist__thumb lazyload" data-url="<?php echo $value1['url']; ?>" title="<?php echo $value1['name']; ?>" data-original="<?php echo $value1['img']; ?>"> 
		  <span class="play hidden-xs"></span>
		  <span class="pic-tag pic-tag-top" style="background-color: #5bb7fe;">直播</span> 
		  <span class="pic-text text-right"> </span> </a> 
          <div class="myui-vodlist__detail"> 
           <h4 class="title text-overflow"><a title="<?php echo $value1['name']; ?>"><?php echo $value1['name']; ?></a></h4> 
           <p class="text text-overflow text-muted hidden-xs"> <?php echo $value1['name']; ?></p> 
          </div> 
         </div> 
		 </li>
<?php
$i ++;}
}?> 
       </ul> 
      </div> 
     </div> 
    </div> 
<?php
}
?>	
<?php if(!$gametype['gg_gg1']==""){
echo '<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd"> 
       <div class="col-xs-1"> 
	   '.$gametype['gg_gg1'].'
       </div> 
      </div> 
     </div> 
    </div>';	
}
?>
<?php 
if($yycms_a_kg1=="1"){
?>
<!-- 抢先看 --> 
<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd clearfix"> 
       <div class="col-lg-wide-76 col-md-wide-76 col-xs-1 padding-0"> 
        <div class="myui-panel_hd"> 
         <div class="myui-panel__head clearfix"> 
          <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-zhuye2"></use>
            </svg>抢先看</h3> 
           <a class="more pull-right" href="/qxk-0-1.html">更多<i class="fa fa-angle-right"></i></a> 
         </div> 
        </div> 
        <ul class="myui-vodlist clearfix">  
<?php
$vodqxk = $mysqli->select1(0, 4, '*', 'yycms_vod', 'where b_tj=1 order by b_id desc LIMIT 0,12');
foreach ($vodqxk as $row) {
?>
<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="/qxplay/<?php echo $row['b_id'] ?>.html" title="<?php echo $row['b_name']; ?>" data-original="<?php echo $row['b_tp']; ?>"> 
		   <span class="play hidden-xs"></span> 
		   <span class="pic-tag pic-tag-top" style="background-color: #ef8211;">抢先</span> 
		   <span class="pic-text text-right"></span> 
		   </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="/qxplay/<?php echo $row['b_id'] ?>.html" title="<?php echo $row['b_name']; ?>"><?php echo $row['b_name']; ?></a></h4> 
			<p class="text text-overflow text-muted hidden-xs"><?php echo $row['b_zy']; ?></p>
           </div> 
          </div>
		  </li>
<?php 
}
?>
        </ul> 
       </div> 

      </div> 
     </div> 
    </div> 
<?php 
}
?> 
	  <!-- 最新电影 --> 
<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd clearfix"> 
       <div class="col-lg-wide-76 col-md-wide-76 col-xs-1 padding-0"> 
        <div class="myui-panel_hd"> 
         <div class="myui-panel__head clearfix"> 
          <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-luxiang"></use>
            </svg>最新电影</h3> 
		  <a class="more pull-right" href="/movie.html">更多 <i class="fa fa-angle-right"></i></a> 
         </div> 
        </div>
	<ul class="myui-vodlist clearfix">
<?php
for ($x=0; $x<=11; $x++) {
$sydydzjson=json_decode($sydydz[1][$x],true);
echo '<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="/'.$dzbq.'/'.cfurl($sydydzjson['url']).'.html" title="'.$sydydzjson['title'].'" data-original="'.$sydydzjson['pic'].'"> 
		   <span class="play hidden-xs"></span> 
		   <span class="pic-tag pic-tag-top" style="background-color: #ef8211;">'.$sydydzjson['score'].'</span> 
		   <span class="pic-text text-right">'.$sydydzjson['hover_year'].'</span> 
		   </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="/'.$dzbq.'/'.cfurl($sydydzjson['url']).'.html" title="'.$sydydzjson['title'].'">'.$sydydzjson['title'].'</a></h4> 
			<p class="text text-overflow text-muted hidden-xs">主演：'.xhsj($sydydzjson['hover_actor']).'</p>
           </div> 
          </div>
		  </li>';
}
?>
        </ul> 
       </div> 

      </div> 
     </div> 
    </div> 		
<?php if(!$gametype['gg_gg2']==""){
echo '<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd"> 
       <div class="col-xs-1"> 
	   '.$gametype['gg_gg2'].'
       </div> 
      </div> 
     </div> 
    </div>';	
}
?>	
    <!-- 电视剧 -->     
    <div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd clearfix"> 
       <div class="col-lg-wide-76 col-md-wide-76 col-xs-1 padding-0"> 
        <div class="myui-panel_hd"> 
         <div class="myui-panel__head clearfix"> 
          <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-yanglazhuye"></use>
            </svg>热播剧集</h3> 
          <a class="more pull-right" href="/tv.html">更多 <i class="fa fa-angle-right"></i></a> 
         </div> 
        </div> 
        <ul class="myui-vodlist clearfix"> 
<?php
for ($x=0; $x<=11; $x++) {
$sydsjdzjson=json_decode($sydsjdz[1][$x],true);
echo '<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="/'.$dzbq.'/'.cfurl($sydsjdzjson['url']).'.html" title="'.$sydsjdzjson['title'].'" data-original="'.$sydsjdzjson['pic'].'"> 
		   <span class="play hidden-xs"></span> 
		   <span class="pic-tag pic-tag-top" style="background-color: #ef8211;">'.$sydsjdzjson['score'].'</span> 
		   <span class="pic-text text-right">'.$sydsjdzjson['hover_year'].'</span> 
		   </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="/'.$dzbq.'/'.cfurl($sydsjdzjson['url']).'.html" title="'.$sydsjdzjson['title'].'">'.$sydsjdzjson['title'].'</a></h4> 
			<p class="text text-overflow text-muted hidden-xs">主演：'.xhsj($sydsjdzjson['hover_actor']).'</p>
           </div> 
          </div>
		  </li>';
}
?>
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
<?php if(!$gametype['gg_gg3']==""){
echo '<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd"> 
       <div class="col-xs-1"> 
	   '.$gametype['gg_gg3'].'
       </div> 
      </div> 
     </div> 
    </div>';	
}
?>
    <!-- 最新综艺 -->     
    <div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd clearfix"> 
       <div class="col-lg-wide-76 col-md-wide-76 col-xs-1 padding-0"> 
        <div class="myui-panel_hd"> 
         <div class="myui-panel__head clearfix"> 
          <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-qita"></use>
            </svg>热播综艺</h3> 
          <a class="more pull-right" href="/zongyi.html">更多 <i class="fa fa-angle-right"></i></a> 
         </div> 
        </div> 
        <ul class="myui-vodlist clearfix"> 
<?php
for ($x=0; $x<=11; $x++) {
$syzydzjson=json_decode($syzydz[1][$x],true);
echo '<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="/'.$dzbq.'/'.cfurl($syzydzjson['url']).'.html" title="'.$syzydzjson['title'].'" data-original="https:'.$syzydzjson['pic'].'"> 
		   <span class="play hidden-xs"></span> 
		   <span class="pic-text text-right">'.$syzypf[1][$x].'</span> 
		   </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="/'.$dzbq.'/'.cfurl($syzydzjson['url']).'.html" title="'.$syzydzjson['title'].'">'.$syzydzjson['title'].'</a></h4> 
			<p class="text text-overflow text-muted hidden-xs">类型：'.$syzydzjson['hover_type'].'</p>
           </div> 
          </div>
		  </li>';
}
?>
        </ul> 
       </div> 
      </div> 
     </div> 
    </div>    
<?php if(!$gametype['gg_gg4']==""){
echo '<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd"> 
       <div class="col-xs-1"> 
	   '.$gametype['gg_gg4'].'
       </div> 
      </div> 
     </div> 
    </div>';	
}
?>
    <!-- 最新动漫 -->     
    <div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd clearfix"> 
       <div class="col-lg-wide-76 col-md-wide-76 col-xs-1 padding-0"> 
        <div class="myui-panel_hd"> 
         <div class="myui-panel__head clearfix"> 
          <h3 class="title"><svg class="iconf" aria-hidden="true">
            <use xlink:href="#icon-shoucang"></use>
            </svg>热播动漫</h3> 
          <a class="more pull-right" href="/dongman.html">更多 <i class="fa fa-angle-right"></i></a> 
         </div> 
        </div> 
        <ul class="myui-vodlist clearfix"> 
<?php
for ($x=0; $x<=11; $x++) {
$sydmdzjson=json_decode($sydmdz[1][$x],true);
echo '<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3"> 
          <div class="myui-vodlist__box"> 
           <a class="myui-vodlist__thumb lazyload" href="/'.$dzbq.'/'.cfurl($sydmdzjson['url']).'.html" title="'.$sydmdzjson['title'].'" data-original="https:'.$sydmdzjson['pic'].'"> 
		   <span class="play hidden-xs"></span> 
		   <span class="pic-tag pic-tag-top" style="background-color: #ef8211;">'.$sydmdzjson['hover_year'].'</span> 
		   <span class="pic-text text-right">'.$sydmpf[1][$x].'</span> 
		   </a> 
           <div class="myui-vodlist__detail"> 
            <h4 class="title text-overflow"><a href="/'.$dzbq.'/'.cfurl($sydmdzjson['url']).'.html" title="'.$sydmdzjson['title'].'">'.$sydmdzjson['title'].'</a></h4> 
			<p class="text text-overflow text-muted hidden-xs">类型：'.$sydmdzjson['hover_type'].'</p>
           </div> 
          </div>
		  </li>';
}
?>
        </ul> 
       </div> 
      </div> 
     </div> 
    </div>    
<?php if(!$gametype['gg_gg5']==""){
echo '<div class="myui-panel myui-panel-bg clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_bd"> 
       <div class="col-xs-1"> 
	   '.$gametype['gg_gg5'].'
       </div> 
      </div> 
     </div> 
    </div>';	
}
?>	
    <!-- 合作 --> 
    <div class="myui-panel myui-panel-bg hidden-xs clearfix"> 
     <div class="myui-panel-box clearfix"> 
      <div class="myui-panel_hd"> 
       <div class="myui-panel__head clearfix"> 
        <h3 class="title"> 友情链接 </h3> 
       </div> 
      </div> 
      <div class="myui-panel_bd clearfix"> 
       <div class="col-xs-1"> 
        <ul class="myui-link__text clearfix"> 
<?php
$yycmsyl = $mysqli->select1(0, 4, '*', 'yycms_yl', '');
foreach ($yycmsyl as $rowyl) {
?>
<li><a class="text-muted" href="<?php echo $rowyl['yl_url'];?>" title="<?php echo $rowyl['yl_name'];?>" target="_blank"><?php echo $rowyl['yl_name'];?></a></li> 
<?php
}
?>
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- 友链 --> 
   </div> 
  </div>
<?php
include 'footer.php';
?>
</body>
</html>	